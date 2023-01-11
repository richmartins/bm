<x-layout-backoffice>
        <span class="bo-container">
            <p>Montelly backoffice</p>
        </span>
    <form
        class="bo-form"
        action="{{ route('update_menu') }}"
        method="post"
        name="update_menu"
        enctype="multipart/form-data"
    >
        <p>Upload new menu</p>
        @csrf
        <span
            class="bo-form-group"
        >
                <label
                    for="new_menu_boissons"
                    class="bo-label"
                >
                    Menu semaine
                </label>
                <input
                    id="new_menu_boissons"
                    class="bo-input"
                    name="new_menu_semaine"
                    type="file"
                />
            </span>
        <span
            class="bo-form-group"
        >
                <label
                    for="new_menu_boissons"
                    class="bo-label"
                >
                    Menu boissons
                </label>
                <input
                    id="new_menu_boissons"
                    class="bo-input"
                    name="new_menu_boissons"
                    type="file"
                />
            </span>

        <span
            class="bo-form-submit-group"
        >
                <input
                    type="submit"
                    value="Upload"
                />
            </span>
    </form>

    <form
        class="bo-form"
        action=""
        method="post"
        name="update_user"
    >
        <p>Update user</p>
        @csrf
        <span
            class="bo-form-group"
        >
                <label
                    for="new_menu_boissons"
                    class="bo-label"
                >
                    Username
                </label>
                <input
                    id="new_menu_boissons"
                    class="bo-input"
                    name="name"
                    type="text"
                    required
                />
        </span>

        <span
            class="bo-form-group"
        >
                <label
                    for="new_menu_boissons"
                    class="bo-label"
                >
                    Email
                </label>
                <input
                    id="new_menu_boissons"
                    class="bo-input"
                    name="email"
                    type="email"
                    required
                />
        </span>

        <span
            class="bo-form-group"
        >
                <label
                    for="new_menu_boissons"
                    class="bo-label"
                >
                   Old password
                </label>
                <input
                    id="new_menu_boissons"
                    class="bo-input"
                    name="old_password"
                    type="password"
                    required
                />
        </span>

        <span
            class="bo-form-group"
        >
                <label
                    for="new_menu_boissons"
                    class="bo-label"
                >
                   New password
                </label>
                <input
                    id="new_menu_boissons"
                    class="bo-input"
                    name="password"
                    type="password"
                    required
                />
        </span>

        <span
            class="bo-form-group"
        >
                <label
                    for="new_menu_boissons"
                    class="bo-label"
                >
                   Confirm password
                </label>
                <input
                    id="new_menu_boissons"
                    class="bo-input"
                    name="password_confirmation"
                    type="password"
                    required
                />
        </span>

        <span
            class="bo-form-submit-group"
        >
                <input
                    type="submit"
                    value="Update"
                />
        </span>
    </form>
</x-layout-backoffice>
