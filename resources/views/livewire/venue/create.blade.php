<div>
    {{-- Do your work, then step back. --}}
    <form action="">
        <div>
            <label for="name">Name</label>
            <input wire:model="name" type="text" />
        </div>
        <div>
            <label for="location">City and State</label>
            <input wire:model="city" type="text" />
            <select wire:model="state" id="">
                <option value="AL">AL</option>
                <option value="AK">AK</option>
                <option value="AZ">AZ</option>
                <option value="AR">AR</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DE">DE</option>
                <option value="DC">DC</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="IA">IA</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="ME">ME</option>
                <option value="MT">MT</option>
                <option value="NE">NE</option>
                <option value="NV">NV</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NY">NY</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="MD">MD</option>
                <option value="MA">MA</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MS">MS</option>
                <option value="MO">MO</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VT">VT</option>
                <option value="VA">VA</option>
                <option value="WA">WA</option>
                <option value="WV">WV</option>
                <option value="WI">WI</option>
                <option value="WY">WY</option>
            </select>
        </div>
        <div>
            <label for="address">Address</label>
            <input wire:model="address" type="text" />
        </div>
        <div>
            <label for="phone">Phone</label>
            <input wire:model="phone" type="text" placeholder="xxx-xxx-xxxx" />
        </div>
        <div>
            <label for="genres">Genres</label>
            <select multiple>
                <option value="Alternative">Alternative</option>
                <option value="Blues">Blues</option>
                <option value="Classical">Classical</option>
                <option value="Country">Country</option>
                <option value="Electronic">Electronic</option>
                <option value="Folk">Folk</option>
                <option value="Funk">Funk</option>
                <option value="Hip_Hop">Hip Hop</option>
                <option value="Heavy_Metal">Heavy Metal</option>
                <option value="Instrumental">Instrumental</option>
                <option value="Jazz">Jazz</option>
                <option value="Musical_Theatre">Musical_Theatre</option>
                <option value="Pop">Pop</option>
                <option value="Punk">Punk</option>
                <option value="R_n_B">R&B</option>
                <option value="Reggae">Reggae</option>
                <option value="Rock_n_Roll">Rock N Roll</option>
                <option value="Soul">Soul</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div>
            <label for="facebookLink">Facebook Link</label>
            <input wire:model="facebookLink" type="text" />
        </div>
        <div>
            <label for="imageLink">Image Link</label>
            <input wire:model="imageLink" type="text" />
        </div>
        <div>
            <label for="websiteLink">Website Link</label>
            <input wire:model="websiteLink" type="text" />
        </div>
        <div>
            <label for="lookingForTalent">Looking for Talent</label>
            <input wire:model="lookingForTalent" type="checkbox" />
        </div>
        <div>
            <label for="description">Seeking Description</label>
            <input wire:model="description" type="text" />
        </div>
        <input type="submit" value="Create Venue" />
    </form>
</div>
