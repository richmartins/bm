<x-layout-backoffice>
    <form name="accred" action="/login" method="post">
        <div class="container">
            <span class="form-group">
                <span class="label">
                    <label for="username">
                        Username:
                    </label>
                </span>
                <input
                    class="input"
                    id="username"
                    name="username"
                    type="text"
                />
            </span>
            <span class="form-group">
                <span class="label">
                    <label for="password">
                        Password:
                    </label>
                </span>
                <input
                    class="input"
                    id="password"
                    name="password"
                    type="password"
                />
            </span>
            <span class="form-group">
                <input class="btn-form" type="submit" value="Login"/>
                <a href="/" class="btn-form">Cancel</a>
            </span>
        </div>
    </form>
</x-layout-backoffice>
