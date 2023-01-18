<?php
include "baglan.php";

if(isset($_POST['ayar_baslik']))
{
    $Guncelle = $db->prepare("UPDATE ayar_tablosu SET 
    ayar_baslik=:ayar_baslik,
    ayar_desciription=:ayar_desciription,
    ayar_keywords=:ayar_keywords,
         ayar_instagram=:ayar_instagram,
         ayar_github=:ayar_github,
         ayar_linkedln=:ayar_linkedln,
            ayar_msunucu=:ayar_msunucu,
             ayar_mport=:ayar_mport,
             ayar_mkadi=:ayar_mkadi,
             ayar_msifre=:ayar_msifre
             WHERE ayar_id= 1 ");
    //burada güncellemek için eskii bilgileri verii tabanına eşitleyerek güncelliyoruz yazamadım ama anladım ilerdede anlarım:) (inşallah)
            $durum=$Guncelle ->execute(
                array(
                  'ayar_baslik' =>$_POST['ayar_baslik'],     
                  'ayar_desciription' =>$_POST['ayar_desciription'],     
                  'ayar_keywords' =>$_POST['ayar_keywords'],     
                  'ayar_instagram' =>$_POST['ayar_instagram'],     
                  'ayar_github' =>$_POST['ayar_github'],     
                  'ayar_linkedln' =>$_POST['ayar_linkedln'],     
                  'ayar_msunucu' =>$_POST['ayar_msunucu'],     
                  'ayar_mport' =>$_POST['ayar_mport'],     
                  'ayar_mkadi' =>$_POST['ayar_mkadi'],     
                  'ayar_msifre' =>$_POST['ayar_msifre']   

                )
                );
    header("Location:ayar.php?durum=$durum");

}


?>