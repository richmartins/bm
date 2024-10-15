const removeBtnHandle = (e) => {
    const form_meals_grid = e.target.parentElement.parentElement;

    if (form_meals_grid) {
        form_meals_grid.remove();
    }
};

/* add more meal button behiavor */
document.querySelectorAll(".bo-plus-btn-right > button").forEach((plus_btn) => {
    plus_btn.addEventListener("click", (e) => {
        const form_meals_grid = document.createElement("div");
        form_meals_grid.classList.add("bo-form-meals-grid");

        const createInput = (type, name, meal_id, value = "") => {
            const input = document.createElement("input");
            input.setAttribute("class", "bo-input");
            input.setAttribute("type", type);
            input.setAttribute("name", `meals[${meal_id}][${name}]`);
            input.setAttribute("value", value);

            if (name === "title" || name === "price") {
                input.setAttribute("required", true);
            }

            return input;
        };

        const lastMealId =
            e.target.parentElement.parentElement
                .querySelector(
                    '.bo-form-meals-grid:last-child input[name^="meals["]'
                )
                ?.getAttribute("name")
                .match(/\d+/g)[0] || 0;
        const newMealId = parseInt(lastMealId) + 1;

        form_meals_grid.appendChild(createInput("text", "title", newMealId));
        form_meals_grid.appendChild(
            createInput("text", "description", newMealId)
        );
        form_meals_grid.appendChild(createInput("text", "price", newMealId));
        form_meals_grid.appendChild(
            createInput("hidden", "meal_id", newMealId)
        );

        const removeButtonContainer = document.createElement("div");
        removeButtonContainer.classList.add("bo-input", "bo-remove-btn");

        const removeButton = document.createElement("button");
        removeButton.setAttribute("type", "button");
        removeButton.setAttribute("id", `remove_meal_${newMealId}`);
        removeButton.innerText = "-";
        removeButton.addEventListener("click", removeBtnHandle);
        removeButtonContainer.appendChild(removeButton);

        form_meals_grid.appendChild(removeButtonContainer);
        e.target.parentElement.parentElement
            .querySelector(".bo-meals-container")
            .appendChild(form_meals_grid);
    });
});

/* remove meal button behiavor */
document
    .querySelectorAll("button.bo-input.bo-remove-btn")
    .forEach((minus_btn) => {
        minus_btn.addEventListener("click", removeBtnHandle);
    });
