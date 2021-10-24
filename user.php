<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

        $sql = "INSERT INTO pessoa(nome, sobrenome)values('$nome','$sobrenome')";
        $result = mysqli_query($connect,$sql); 
        if($result){
            echo "Inserido com sucesso!";
        }else{
            die(mysqli_error($connect));
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud em PHP</title>
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Entre com o seu nome" name="nome" autocomplete="off" >
            </div>
            <div class="mb-3">
                <label class="form-label">Sobrenome</label>
                <input type="text" class="form-control" placeholder="Entre com o seu sobrenome" name="sobrenome" autocomplete="off">
            </div>
            <input type="submit" class="btn btn-primary" name="submit"></input>
        </form>
    </div>
</body>

</html>