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

    <span class="bo-form">
       @foreach ($menus as $menu)
        <x-menu.backoffice-menu-form :menu="$menu" />
       @endforeach
    </span>

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
</x-layout-backoffice>
