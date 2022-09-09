// Dodanie zadania
var varadd = document.getElementById("add");
varadd.addEventListener("click", formadd);

function formadd(){
    var varformadd = document.getElementById("inputs");
    varformadd.innerHTML =
    '<br><p>Szczegóły zadania:</p><input class="padding-bottom" type="date" name="date" id="date" placeholder="Data" required><br><input class="padding-bottom" type="time" name="time" id="time" placeholder="Godzina" required><br><input class="padding-bottom" type="text" name="place" id="place" placeholder="Miejsce"><br><input class="padding-bottom" type="text" name="description" id="description" placeholder="Opis" required><br><select class="padding-bottom" name="category" id="category" placeholder="Kategoria" required><option value="Brak">Brak kategorii</option><option value="Lekcja">Lekcja</option><option value="Zadanie">Zadanie</option><option value="Spotkanie">Spotkanie</option></select><br><button type="submit">Dodaj</button>'
    ;
}

// Usunięcie zadania
var vardelete = document.getElementById("delete");
vardelete.addEventListener("click", formdelete);

function formdelete(){
    var varformdelete = document.getElementById("inputs");
    varformdelete.innerHTML =
    '<br><p>Podaj ID zadania do usunięcia:</p><input class="padding-bottom" type="number" name="id" id="id" placeholder="ID" required><br><button type="submit">Usuń</button>'
    ;
}

// Edycja zadania
var varedit = document.getElementById("edit");
varedit.addEventListener("click", formedit);

function formedit(){
    var varformedit = document.getElementById("inputs");
    varformedit.innerHTML =
    '<br><p>Podaj ID zadania do edycji:</p><input class="padding-bottom" type="number" name="id" id="id" placeholder="ID" required><br><p>Podaj nowe wartości:</p><input class="padding-bottom" type="date" name="date" id="date" placeholder="Data" required><br><input class="padding-bottom" type="time" name="time" id="time" placeholder="Godzina" required><br><input class="padding-bottom" type="text" name="place" id="place" placeholder="Miejsce" required><br><input class="padding-bottom" type="text" name="description" id="description" placeholder="Opis" required><br><select class="padding-bottom" name="category" id="category" placeholder="Kategoria" required><option value="Brak">Brak kategorii</option><option value="Lekcja">Lekcja</option><option value="Zadanie">Zadanie</option><option value="Spotkanie">Spotkanie</option></select><br><button type="submit">Zatwierdź zmiany</button>'
    ;
}

// Wyszukanie zadania
var varsearch = document.getElementById("search");
varsearch.addEventListener("click", formsearch);

function formsearch(){
    var varformsearch = document.getElementById("inputs");
    varformsearch.innerHTML =
    '<br><p>Wyszukaj każdego zadania, gdzie</p><select class="padding-bottom" name="choise" id="choise"><option id="id" value="ID">ID</option><option id="date" value="Data">Data</option><option id="time" value="Godzina">Godzina</option><option id="place" value="Miejsce">Miejsce</option><option id="description" value="Opis">Opis</option><option id="category" value="Kategoria">Kategoria</option></select><p>jest równe</p><input class="padding-bottom" name="value" type="text" required><br><button type="submit">Wyszukaj</button>'
    ;
}