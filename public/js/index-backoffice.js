/* add more meal button behiavor */
document.querySelectorAll(".bo-plus-btn-right > button").forEach((plus_btn) => {
    plus_btn.addEventListener("click", (e) => {
        e.preventDefault();

        const form_meals_grid = document.createElement("div");
        form_meals_grid.classList.add("bo-form-meals-grid");

        const createInput = (type, name, meal_id, value = "") => {
            const input = document.createElement("input");
            input.setAttribute("class", "bo-input");
            input.setAttribute("type", type);
            input.setAttribute("name", `meals[${meal_id}][${name}]`);
            input.setAttribute("value", value);
            input.setAttribute("required", "required");

            if (type == "number") {
                input.setAttribute("step", "0.01");
                input.setAttribute("min", "1");
                input.classList.add("bo-input-number");
            }

            return input;
        };

        const lastMealId = e.target.parentElement.parentElement
            .querySelector(
                '.bo-form-meals-grid:last-child input[name^="meals["]'
            )
            .getAttribute("name")
            .match(/\d+/g)[0] || 0;
        const newMealId = parseInt(lastMealId) + 1;

        form_meals_grid.appendChild(createInput("text", "title", newMealId));
        form_meals_grid.appendChild(
            createInput("text", "description", newMealId)
        );
        form_meals_grid.appendChild(createInput("number", "price", newMealId));
        form_meals_grid.appendChild(
            createInput("hidden", "meal_id", newMealId)
        );

        const removeBtn = document.createElement("div");
        removeBtn.classList.add("bo-input", "bo-remove-btn");
        removeBtn.innerHTML = `<button id="remove_meal_${newMealId}">-</button>`;
        form_meals_grid.appendChild(removeBtn);
        document
            .querySelector(".bo-meals-container")
            .appendChild(form_meals_grid);
    });
});

/* remove meal button behiavor */
document
    .querySelectorAll("button.bo-input.bo-remove-btn")
    .forEach((minus_btn) => {
        console.log(minus_btn);
        minus_btn.addEventListener("click", (e) => {
            e.preventDefault();
            const form_meals_grid =
                e.target.parentElement.parentElement.querySelector(
                    ".bo-form-meals-grid:last-child"
                );
            if (form_meals_grid) {
                form_meals_grid.remove();
            }
        });
    });
