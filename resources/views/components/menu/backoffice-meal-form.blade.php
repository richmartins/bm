<div class="bo-form-meals-grid">
    <input class="bo-input"
        type="text"
        name="meals[{{ $meal->id }}][title]"
        value="{{ $meal->title }}"
    >
    <input class="bo-input"
        type="text"
        name="meals[{{ $meal->id }}][description]"
        value="{{ $meal->description }}"
    >
    <input class="bo-input bo-input-number"
        type="text"
        name="meals[{{ $meal->id }}][price]"
        value="{{ $meal->price }}"
    >
    <button class="bo-input bo-remove-btn"
        id="remove_meal_{{ $meal->id }}">
        -
    </button>
</div>
