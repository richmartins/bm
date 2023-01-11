<x-layout-backoffice>
    <form name="accred" action="/login" method="post">
        @csrf
        <div class="bo-container">
            @if ($errors->has('accred'))
                <span class="bo-text-danger">
                    <p>
                        {{ $errors->first('accred') }}
                    </p>
                </span>
            @endif
            <span class="bo-form-login-group">
                <span class="bo-login-label">
                    <label for="username">
                        Username:
                    </label>
                </span>
                <input
                    class="bo-input"
                    id="username"
                    name="username"
                    type="text"
                    required
                />
            </span>
            <span class="bo-form-login-group">
                <span class="bo-login-label">
                    <label for="password">
                        Password:
                    </label>
                </span>
                <input
                    class="bo-input"
                    id="password"
                    name="password"
                    type="password"
                    required
                />
            </span>
            <span class="bo-form-login-group">
                <input class="bo-btn-form" type="submit" value="Login"/>
                <a href="/" class="bo-btn-form">Cancel</a>
            </span>
        </div>
    </form>
</x-layout-backoffice>
