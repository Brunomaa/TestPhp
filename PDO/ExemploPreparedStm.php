<html>
    <head>
        <title>conexao</title>
    </head>
    <body>

        
 <?php       
    try {
       $conn = new \PDO("mysql:host=localhost;dbname=pessoa", "root", "");
                    //$query= "select * from usuario";
       //$query= "insert into pessoa (nome, email) value ('Bruno', 'bruno@teste.com.br')";       
       //$stmt= $conn->query($query);
       //$list= $stmt->fetchAll(PDO::FETCH_ASSOC);
       // echo $list->nome;
       //echo $list['nome'];
       //print_r($list);

        $query= "select * from usuario where id=:id";
        $stmt=$conn->prepare($query);
        $stmt->bindValue(':id',$_GET['id']);
        $stmt->execute();
        
        print_r($stmt->fetchAll());
        
             
    } catch (PDOException $e) {
        
        echo "Error ! Message:".$e->getMessage()." CODE:".$e->getcode();
    }
 
 
 ?>
         
        
    </body>
</html>
