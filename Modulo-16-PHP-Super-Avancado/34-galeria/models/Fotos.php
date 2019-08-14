<?php

class Fotos extends model{
    
    public function saveFotos(){
        
        if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])){
            $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
            
            if(in_array($_FILES['arquivo']['type'], $permitidos)){
                $nome = md5(time().rand(0,99)).'jpg';
                
                move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/'.$nome);
                
                //recebendo titulo do forumulario 
                $titulo = "";
                if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
                    $titulo = addslashes($_POST['titulo']);
                }
                
                //salvando no banco de dados 
                $sql = "INSERT INTO fotos SET titulo = '$titulo', url = '$nome'";
                $sql = $this->db->query($sql);
            
            }
        }
        
    }
    
    public function getFotos(){
        $array = array();
        $sql = "SELECT * FROM fotos order by id desc";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}