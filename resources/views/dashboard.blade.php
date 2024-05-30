<x-layout-backoffice>
    <span class="bo-container">
        <p>Montelly backoffice</p>
    </span>
    <form class="bo-form"
        action="{{ route('update_menu') }}"
        method="post"
        name="update_menu"
        enctype="multipart/form-data">
        <p>Upload new menu</p>
        @csrf
        <span class="bo-form-group">
            <label for="new_menu_semaine"
                class="bo-label">
                Menu semaine
            </label>
            <input id="new_menu_semaine"
                class="bo-input"
                name="new_menu_semaine"
                type="file" />
        </span>
        <span class="bo-form-group">
            <label for="new_menu_boissons"
                class="bo-label">
                Menu boissons
            </label>
            <input id="new_menu_boissons"
                class="bo-input"
                name="new_menu_boissons"
                type="file" />
        </span>

        <span class="bo-form-submit-group">
            <input type="submit"
                value="Upload" />
        </span>
    </form>

    <form class="bo-form"
        action="{{ route('update-profile') }}"
        method="post"
        name="update_user">
        <p>Update user</p>
        @if ($errors->any())
            {!! implode('', $errors->all('<span class="bo-text-danger"><p>:message</p></span>')) !!}
        @endif
        @csrf
        <span class="bo-form-group">
            <label for="name"
                class="bo-label">
                Username
            </label>
            <input id="name"
                class="bo-input"
                name="name"
                type="text"
                value="{{ $name }}"
                required />
        </span>

        <span class="bo-form-group">
            <label for="email"
                class="bo-label">
                Email
            </label>
            <input id="email"
                class="bo-input"
                name="email"
                type="email"
                value="{{ $email }}"
                required />
        </span>

        <span class="bo-form-group">
            <label for="current_password"
                class="bo-label">
                Old password
            </label>
            <input id="current_password"
                class="bo-input"
                name="current_password"
                type="password" />
        </span>

        <span class="bo-form-group">
            <label for="password"
                class="bo-label">
                New password
            </label>
            <input id="password"
                class="bo-input"
                name="password"
                type="password" />
        </span>

        <span class="bo-form-group">
            <label for="password_confirmation"
                class="bo-label">
                Confirm password
            </label>
            <input id="password_confirmation"
                class="bo-input"
                name="password_confirmation"
                type="password" />
        </span>

        <span class="bo-form-submit-group">
            <input type="submit"
                value="Update" />
        </span>
    </form>

    <form class="bo-form"
        action="{{ route('update_meals') }}"
        method="post"
        name="update-meals">
        <p>Update meals</p>
        @if ($errors->any())
            {!! implode('', $errors->all('<span class="bo-text-danger"><p>:message</p></span>')) !!}
        @endif
        @csrf

        @foreach ($meals as $meal)
            <span class="bo-form-group">
                <label for="title-{{ $meal->id }}"
                    class="bo-label">
                    Title
                </label>
                <input class="bo-input"
                    id="title-{{ $meal->id }}"
                    type="text"
                    value="{{ $meal->title }}" />
            </span>
            <span class="bo-form-group">
                <label for="description-{{ $meal->id }}"
                    class="bo-label">
                    Description
                </label>
                <input class="bo-input"
                    id="description-{{ $meal->id }}"
                    type="text"
                    value="{{ $meal->description }}" />
            </span>
            <span class="bo-form-group">
                <label for="price-{{ $meal->id }}"
                    class="bo-label">
                    price
                </label>
                <input class="bo-input"
                    id="price-{{ $meal->id }}"
                    type="text"
                    value="{{ $meal->price }}" />
            </span>
            <span class="bo-form-group">
                <label for="category-{{ $meal->id }}"
                    class="bo-label">
                    Category
                </label>
                <select class="bo-input"
                    id="category-{{ $meal->id }}"
                    name="category-{{ $meal->id }}">
                    @foreach ($categories as $category)
                        @if ($category->id === $meal->id_category)
                            <option selected value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @else
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </span>
            <br>
            <br>
            <br>
        @endforeach
    </form>

</x-layout-backoffice>
