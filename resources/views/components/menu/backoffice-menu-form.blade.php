<div>
    <fieldset class="bo-fieldset">
        <legend>{{ $menu->name }}</legend>
        <form action="{{ route('update_season_menu') }}"
            name="update_menu"
            method="post">
            @csrf
            <div class="bo-form-meals-grid">
                <span class="bo-text">Title</span>
                <span class="bo-text">Description</span>
                <span class="bo-text">Price</span>
            </div>

            <div class="bo-meals-container">
                @foreach ($menu->meals as $meal)
                    <x-menu.backoffice-meal-form :meal="$meal" />
                @endforeach
            </div>

            <input type="hidden"
                name="meal_category_id"
                value="{{ $menu->id }}" />

            <div class="bo-plus-btn-right">
                <button type="button" id="add_more_meal_{{ $menu->id }}">+</button>
            </div>
            <span class="bo-form-submit-group">
                <input type="submit"
                    value="Update" />
            </span>
        </form>
    </fieldset>
</div>
