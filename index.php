<!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href ="edit.css">
    </head>
        
    <body>
        <form method = "GET" action = "calculator.php" class="container">
            <input type="number" name ="cena" placeholder="Unesite cenu proizvoda">

            <select name="izbornik">
                <option>Hrana</option>
                <option>Oprema za racunare</option>
            </select>
           
            <div class="porez_gumb">
                <input type="checkbox" name="porez">
                <label>Izracunaj porez</label>
            </div>
            
            <button class="cena_gumb">Izracunaj cenu</button>
        </form>
    </body>
</html>



