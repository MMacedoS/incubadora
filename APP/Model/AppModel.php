<?php

class AppModel extends ConexaoModel {

    protected $conexao;

    public function __construct() 
    {
        $this->conexao = ConexaoModel::conexao();
    }

    public function buscarCategoriaComPermissao() 
    {    
        $dados=$this->conexao->query(
            "SELECT 
                cat.*,
                p.* 
            FROM 
                categoria cat 
            JOIN 
                permissao p 
            ORDER BY 
                id_categoria 
            ASC"
        );

        $dados = $dados->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function mudaPermissaoStatus($status)
    {                    
        $dados = $this->conexao->query("SELECT $status from permissao limit 1");
        $dados = $dados->fetchAll(PDO::FETCH_ASSOC);

        $this->conexao->beginTransaction();
        try {      
            if($dados[0][$status] == 0){              
               $status = $this->conexao->query("UPDATE permissao set $status=1 ");           
            } else {
                $status = $this->conexao->query("UPDATE permissao set $status=0 ");               
            }
            
            $this->conexao->commit();

          return "efetivado";
        } catch (\Throwable $th) {
            $this->conexao->rollback();
            return $th->getMessage();
        }
    }

    public function buscabackground($codigo) {
        $dados = [];
        $cmd = $this->conexao->query(
            "SELECT 
                status 
            FROM 
                background_tela 
            WHERE 
                usuario = '$codigo' 
            LIMIT 1"); 
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function changeStatusBg($codigo)
    {
        $dados = [];
        $dados = $this->buscabackground($codigo);   
        if(empty($dados)) {
            $res = $this->inserirBackground($codigo);
            if (!$res){
                return false;
            }
        }
        $status = $dados[0]['status'] == 0 ? 1 : 0;
       
        try {            
              
           $cmd = $this
           ->conexao
            ->prepare(
              "UPDATE 
                 background_tela 
                SET 
                   status = :status 
                WHERE usuario = :id"
            );   
            $cmd->bindValue(':status',$status);               
            $cmd->bindValue(':id',$codigo);
            $cmd->execute();  
             return 'atualizado';
        } catch (\Throwable $th) {
                
           return $th->getMessage();
        }
    }

    public function inserirBackground($codigo)
    {
        
        $dados = [];
        if(empty($codigo)) {
            return false;
        }
        $this->conexao->beginTransaction();
        try {                               
            $cmd = $this
                ->conexao
                ->prepare(
                    "INSERT INTO 
                        background_tela 
                       (status,usuario)
                    VALUES 
                       (
                           :status,
                           :id
                        )"
                );
    
            $cmd->bindValue(':status','1');
            $cmd->bindValue(':id',$codigo);
            $cmd->execute();
    
            $this->conexao->commit();
    
            return $cmd;
        } 
        catch (\Throwable $th) {
                $this->conexao->rollback();
                return false;
       }
    }
}