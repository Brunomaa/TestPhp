<?php


class ServiceProduto {
    private  $db;
    private  $produto;
    
    public function __construct(IConn $db, IProduto $produto) 
    {
         $this->db = $db->conect();
         $this->produto= $produto;
    }
  
    public function lista()
    {
         $query = "select * from `usuario`";
         $stmt = $this->db->prepare($query);
         $stmt->execute();
         
         return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
    }

        public function save() 
    {
          $query = "INSERT INTO `produto` (`tipo_produto`,`nomeProduto`, `valor`, `descricao_produto`,`usuario`,`inclusao`,`alteracao`, `quant`,`ativo`, `fornecedor`) values (:tipo_produto,:nomeProduto,:valor,:descricao_produto,:usuario,:inclusao,:quant,:ativo,:fornecedor)";
          $stmt = $this->db->prepare($query);
          $stmt->bindValue(":name", $this->produto->getName());
       
                  
    }
    public function update()
    {
        
        
    }

    }
