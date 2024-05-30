<div>
    <form 
        class="bo-form"
        name="meal"
        method="POST"
        action="{{ route('update_meal') }}">
        @method('POST')
        @csrf

        <span class="bo-form-group">
            <label for="title" class="bo-label">New meal</label>
            <input id="title" class="bo-input" name="title" type="text" />
        </span>

        <!-- submit group-->

        <span class="bo-form-submit-group">
            <input type="submit" value="Add meal"/>
        </span>
    </form>



</div>