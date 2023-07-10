<form class="form" method="POST" action="/add">
    <h3 class="form__title">Add new user</h3>

    <div class="form__input-group">
        <label class="label" for="name">Name</label>
        <input class="input" id="name" name="name" type="text" required>
    </div>

    <div class="form__input-group">
        <label class="label" for="username">Username</label>
        <input class="input" id="username" type="text" name="username" required>
    </div>

    <div class="form__input-group">
        <label class="label" for="email">Email</label>
        <input class="input" id="email" type="email" name="email" required>
    </div>

    <div class="form__group">
        <h3 class="form__title">Address</h3>
        <div class="form__input-group">
            <label class="label" for="addressStreet">Street</label>
            <input class="input" id="addressStreet" type="text" name="addressStreet" required>
        </div>
        <div class="form__input-group">
            <label class="label" for="addressSuite">Suite</label>
            <input class="input" id="addressSuite" type="text" name="addressSuite" required>
        </div>
        <div class="form__input-group">
            <label class="label" for="addressCity">City</label>
            <input class="input" id="addressCity" type="text" name="addressCity" required>
        </div>
        <div class="form__input-group">
            <label class="label" for="addressZipcode">Zipcode</label>
            <input class="input" id="addressZipcode" type="text" name="addressZipcode" required>
        </div>
        <div class="form__group">
            <h3 class="form__title">Geo</h3>
            <div class="form__input-group">
                <label class="label" for="addressGeoLat">Lat</label>
                <input class="input" id="addressGeoLat" type="number" name="addressGeoLat" required>
            </div>
            <div class="form__input-group">
                <label class="label" for="addressGeoLng">Lng</label>
                <input class="input" id="addressGeoLng" type="number" name="addressGeoLng" required>
            </div>
        </div>
    </div>

    <div class="form__input-group">
        <label class="label" for="phone">Phone</label>
        <input class="input" id="phone" type="tel" name="phone" required>
    </div>

    <div class="form__input-group">
        <label class="label" for="website">Website</label>
        <input class="input" id="website" type="url" name="website" required>
    </div>

    <div class="form__group">
        <h3 class="form__title">Company</h3>
        <div class="form__input-group">
            <label class="label" for="companyName">Name</label>
            <input class="input" id="companyName" type="text" name="companyName" required>
        </div>
        <div class="form__input-group">
            <label class="label" for="companyCatchPhrase">Catch phrase</label>
            <input class="input" id="companyCatchPhrase" type="text" name="companyCatchPhrase" required>
        </div>
        <div class="form__input-group">
            <label class="label" for="companyBs">Bs</label>
            <input class="input" id="companyBs" type="text" name="companyBs" required>
        </div>
    </div>

    <button class="btn btn--primary" type="submit">Submit</button>
    <button class="btn btn--secondary" type="reset">Reset</button>
</form>