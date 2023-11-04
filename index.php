<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        background-color: #333;
        color: aliceblue;
    }
    input{
        padding: 5px;
        background-color: #444;
        color: black;
        border: none;
        border-radius: 5px;
        margin: 5px;
    }
    button{
        padding: 10px;
        background-color: green;
        color: aliceblue;
        width: 25%;
        border: none;
        border-radius: 5px;
    }
    iframe{
        width: 90%;
        height: 500px;
    }
    h1 {
        color: red;
    }
    span{
        color: aliceblue;
        font-size: larger;
    }
</style>
<body>
    <center>
        <h1>Buscador de Filmes</h1>
        Como usar:<br>
        1: Entre no site IMDB<br>
        2: Procure pelo filme que voce quer assistir<br>
        3: Na pagina do filme, copie o link da pagina<br><br>
        Ex: <i>https://imdb.com/title/tt218072222</i><br><br>
        4: Cole o link no campo abaixo, e depois clique em BUSCAR<br>
        5: Pronto, agora é só aguardar o filme carregar logo abaixo<br><br>
        <form action="" method="post">
            <span>Link do filme (IMDB)</span><br>
            <input type="text" name="imdb" id="imdb" placeholder="Ex: tt218072222"><br><br>
            <button type="submit">Buscar</button><br><br>
        </form>
        <br><br>
        <?php
        if(isset($_POST['imdb']))
        {
            $bb = explode('/',$_POST['imdb']);
            if(stripos($_POST['imdb'],'https://') !== false)
                $link = $bb[4];
            else
                $link = $bb[2];
            
           
		   
            echo '<iframe src="https://embed.warezcdn.com/filme/'.$link.'"><br><br><br><br><br><br>';
          
		  
        }
        // 
        ?>
    </center>
</body>
</html>