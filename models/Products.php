<?php
class Products extends model{   

    //pegar os produtos por categories e brands do banco e imagens do banco
    
    public function getList(){
        $array = array();
        $sql = "SELECT *,
        		( select brands.name from brands where brands.id = products.id_brand ) as brand_name
                 FROM products";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();

            foreach($array as $key =>$item){
                $array[$key]['images'] = $this->getImagesByProductsId($item['id']);
            }
        }
        return $array;
    }

    //pegar os produtos
    public function getTotal(){
        $sql = "SELECT COUNT(*) as c FROM products";
        $sql= $this->db->query($sql);
        $sql = $sql->fetch();

        return $sql['c'];
    }

    //pega as imagens dos produtos
    public function getImagesByProductsId($id){
        $array = array();

        $sql = "SELECT * FROM products_images WHERE id_product = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}