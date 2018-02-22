<html>
    <head>
        <title>conexao</title>
    </head>
    <body>
        
 <?php    
   require_once "Iconn.php";
   require_once "conn.php";
   require_once "IProduto.php";
   require_once "Produto.php";
   require_once  "ServiceProduto.php";
    
   $db = new conn ("localhost", "pessoa", "root", "");
   $produto = new Produto;
   $service = new ServiceProduto($db, $produto);

   print_r($service ->lista()); 
   
 
 ?><p>Teste</p> 
         
        
    </body>
</html>
