<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Projekt 1 PHP - Wojciech Szylkiewicz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
                <!-- Przycisk przypominający całą zawartość bazy -->
                <p>Nie pamiętasz, co jest w bazie?</p>
                <form action="/" method="post">
                    <button type="submit" id="reminder" name="remind" value="yes">Przypomnij sobie!</button>
                    <br><br>
                </form>

                <!-- Wyświetlenie całej zawartości bazy w ramach przypomnienia -->
                <?php

                    @$remind = $_POST['remind'];

                    switch($remind){
                        case "yes";
                            if($connection = mysqli_connect("localhost", "root", "", "planer")){
                                $query1 = "SELECT * FROM planer";
                            
                                $result1 = mysqli_query($connection, $query1); 
                
                                while($row = mysqli_fetch_array($result1)){
                                    echo "ID: ". $row['ID']. "<br>";    
                                    echo "Data: ". $row['Data']. "<br>";
                                    echo "Godzina: ". $row['Godzina']. "<br>";
                                    echo "Miejsce: ". $row['Miejsce']. "<br>";
                                    echo "Opis: ". $row['Opis']. "<br>";
                                    echo "Kategoria: ". $row['Kategoria']. "<br>";
                                    echo "<br>";
                                }
                
                            }
                            else {
                                echo "Błąd połączenia";
                                echo mysqli_error($connection);
                            }
                            break;
                        default:
                            echo "Kliknij tutaj również, aby wrócić do domyślnego widoku";
                    }
                ?>

            </div>
            <div class="col-md-8">
                <div class="row">
                    <!-- Główna zawartość -->
                    <form action="/" method="post">
                        <label>Co chcesz zrobić?</label><br>
                        <input type="radio" name="action" id="add" value="add">
                        <label for="add">Utwórz nowe zadanie</label><br>
                        <input type="radio" name="action" id="delete" value="delete">
                        <label for="delete">Usuń zadanie</label><br>
                        <input type="radio" name="action" id="edit" value="edit">
                        <label for="edit">Edytuj zadanie</label><br>
                        <input type="radio" name="action" id="search" value="search">
                        <label for="search">Wyszukaj zadanie</label><br>

                        <span id="inputs">
                            <!-- Pola wstawiane przez JS -->
                        </span>
                        <br>
                    </form>
                </div>
                <div class="row">
                        <?php
                            @$action = $_POST['action'];

                            switch($action){
                                case "add";

                                    // Utworzenie zadania
                                    $date= $_POST['date'];
                                    $time= $_POST['time'];
                                    $place= $_POST['place'];
                                    $description= $_POST['description'];
                                    $category= $_POST['category'];
                                    if($connection = mysqli_connect("localhost", "root", "", "planer")){
                                        $query2 = "INSERT INTO planer(ID, Data, Godzina, Miejsce, Opis, Kategoria) VALUES ('','$date','$time','$place','$description','$category')";
                                        if($result2 = mysqli_query($connection, $query2)){
                                            echo "Dodano z powodzeniem";
                                        }
                                        else{
                                            echo "Nie udało się dodać";
                                        }
                                    }
                                    else {
                                        echo "Błąd połączenia";
                                        echo mysqli_error($connection);
                                    }
                                    break;

                                case "delete";

                                    // Usunięcie zadania
                                    $id=$_POST['id'];
                                    if($connection = mysqli_connect("localhost", "root", "", "planer")){
                                        $query3 = "DELETE FROM planer WHERE id = $id";
                                        if($result3 = mysqli_query($connection, $query3)){
                                            echo "Usunięto z powodzeniem";
                                        }
                                        else{
                                            echo "Nie udało się usunąć";
                                        } 
                                    }
                                    else {
                                        echo "Błąd połączenia";
                                        echo mysqli_error($connection);
                                    }
                                    break;

                                case "edit";

                                    // Edycja zadania
                                    $id=$_POST['id'];
                                    $date= $_POST['date'];
                                    $time= $_POST['time'];
                                    $place= $_POST['place'];
                                    $description= $_POST['description'];
                                    $category= $_POST['category'];
                                    if($connection = mysqli_connect("localhost", "root", "", "planer")){
                                        $query4 = "UPDATE planer SET Data='$date', Godzina='$time', Miejsce='$place', Opis='$description', Kategoria='$category' WHERE ID=$id";
                                        if($result4 = mysqli_query($connection, $query4)){
                                            echo "Zedytowano z powodzeniem";
                                        }
                                        else{
                                            echo "Nie udało się zedytować";
                                        } 
                                    }
                                    else {
                                        echo "Błąd połączenia";
                                        echo mysqli_error($connection);
                                    }
                                    break;

                                case "search";

                                    // Wyszukiwanie zadania
                                    $choise = $_POST['choise'];
                                    $value = $_POST['value'];
                                    if($connection = mysqli_connect("localhost", "root", "", "planer")){
                                        $query5 = "SELECT * FROM planer WHERE $choise = '$value'";
                                        $result5 = mysqli_query($connection, $query5);
                                        while($row = mysqli_fetch_array($result5)){
                                            echo "ID: ". $row['ID']. "<br>";    
                                            echo "Data: ". $row['Data']. "<br>";
                                            echo "Godzina: ". $row['Godzina']. "<br>";
                                            echo "Miejsce: ". $row['Miejsce']. "<br>";
                                            echo "Opis: ". $row['Opis']. "<br>";
                                            echo "Kategoria: ". $row['Kategoria']. "<br>";
                                            echo "<br>";
                                        }
                                    }
                                    else {
                                        echo "Błąd połączenia";
                                        echo mysqli_error($connection);
                                    }
                                    break;

                                default:
                                    echo "Jeszcze nic nie zrobiono";
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>