<form method="POST" action="/add-user-grade">

    {{ csrf_field() }}

    <label for="predmet">Predmet:</label>
    <input type="text" id="predmet" name="predmet" required>
    <br><br>

    <label for="ocena">Ocena:</label>
    <input type="text" id="ocena" name="ocena" required>
    <br><br>

    <label for="profesor">Profesor:</label>
    <input type="text" id="profesor" name="profesor" required>
    <br><br>

    <input type="submit" value="Unesi">
</form>
