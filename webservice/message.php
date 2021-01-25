<?php 
            include 'baglan.php';

            $sql="select * from mesajlar"; 

            $response = array();

            $posts = array();

            $result=mysqli_query($baglan,$sql);

            while($row=mysqli_fetch_array($result)) { 


            $mesajid = $row["mesaj_id"];
            $gonderen = $row["gonderen"];
            $oyuncu_nick = $row["oyuncu_nick"];
            $oyuncu_resmi = $row["oyuncu_resmi"];
            $icerik = $row["icerik"];
            $oyun_modu = $row["oyun_modu"];
            $aranan_kisi = $row["aranan_kisi"];
            $link = $row["link"];
            $tarih = $row["tarih"];
            
            
            $posts[] = array('mesaj_id'=> $mesajid, 'oyuncu_nick' => $oyuncu_nick, 'gonderen' => $gonderen,'oyuncu_resmi' => $oyuncu_resmi, 'icerik' => $icerik,'oyun_modu' => $oyun_modu,'aranan_kisi' => $aranan_kisi,'link' => $link , 'tarih' =>$tarih);

            } 

            $response['posts'] = $posts;
            $fp = fopen('mesajlar.json', 'w');

            fwrite($fp, json_encode($response));

            fclose($fp);
            
?>