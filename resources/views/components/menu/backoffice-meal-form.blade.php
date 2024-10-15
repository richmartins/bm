<div class="bo-form-meals-grid">
    <input class="bo-input"
        type="text"
        name="meals[{{ $meal->id }}][title]"
        required
        value="{{ $meal->title }}"
    >
    <input class="bo-input"
        type="text"
        name="meals[{{ $meal->id }}][description]"
        value="{{ $meal->description }}"
    >
    <input class="bo-input bo-input-number"
        type="text"
        required
        name="meals[{{ $meal->id }}][price]"
        value="{{ $meal->price }}"
    >
    <button class="bo-input bo-remove-btn"
        type="button"
        id="remove_meal_{{ $meal->id }}">
        -
    </button>
</div>
