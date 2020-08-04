<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="{{ route('welcome') }}" method="post">
            {{ csrf_field() }}
            <label for="firstname">First name:</label><br>
            <input type="text" id="firstname" name="firstname"><br>
            <label for="lastname">Last name:</label><br>
            <input type="text" id="lastname" name="lastname"><br>
            <p>Gender</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="gender_other" name="gender" value="other">
            <label for="gender_other">Other</label><br><br>
            <label for="nation">Nationality:</label><br><br>
            <select name="nation" id="nation">
                <option value="Indonesia">Indonesian</option>
                <option value="Other">Others</option>
            </select>
            <br><br>
            <label for="spokenlang">Language Spoken</label><br><br>
            <input type="checkbox" id="bindo" name="bindo" value="Bahasa Indonesia">
            <label for="bindo">Bahasa Indonesia</label><br>
            <input type="checkbox" id="eng" name="eng" value="English">
            <label for="eng">English</label><br>
            <input type="checkbox" id="other" name="other" value="Other">
            <label for="other">Other</label><br>
            <p>Bio: </p>
            <textarea name="bio" id="bio" rows="8" cols="30"></textarea><br><br>
            <input type="submit" value="Sign Up">
        </form>

    </body>
</html>