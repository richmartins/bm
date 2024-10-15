<div class="bo-form-meals-grid">
    <input class="bo-input"
        type="text"
        name="meals[{{ $meal->id }}][title]"
        value="{{ $meal->title }}"
        required
    >
    <input class="bo-input"
        type="text"
        name="meals[{{ $meal->id }}][description]"
        value="{{ $meal->description }}"
        required
    >
    <input class="bo-input bo-input-number"
        type="number"
        min="1"
        name="meals[{{ $meal->id }}][price]"
        value="{{ $meal->price }}"
        required
    >
    <button class="bo-input bo-remove-btn"
        id="remove_meal_{{ $meal->id }}">
        -
    </button>
</div>
