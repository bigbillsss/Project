<?php
$page = 'reserveren';
$title = 'Reserveren';
include 'header.php';
?>
    <section class="reserveer-BG">
        <h1>Reserveren</h1>
        <p>Maak een reservering bij Umami Sushi.</p>
        <form>
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" class="textbox"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="textbox"><br>
            <label for="date">Datum:</label>
            <input type="date" id="date" name="date" class="textbox"><br>
            <label for="time">Tijd:</label>
            <input type="time" id="time" name="time" class="textbox"><br>
            <label for="guests">Aantal personen:</label>
            <input type="number" id="guests" name="guests" class="textbox"><br>
            <input type="submit" value="Reserveren" class="submit-btn">
        </form>
    </section>
</main>
<?php $footerClass = 'shadow'; include 'footer.php'; ?>
