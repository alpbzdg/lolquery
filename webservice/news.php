<?php 
            include 'baglan.php';

            $sql="select * from news limit 10"; 

            $response = array();

            $posts = array();

            $result=mysqli_query($baglan,$sql);

            while($row=mysqli_fetch_array($result)) { 


            $haberid = $row["id"];
            $yazan = $row["yazan"];
            $baslik = $row["baslik"];
            $yazi = $row["yazi"];
            $ozet = $row["ozet"];
            $kategori = $row["kategori"];
            $foto = $row["foto"];
            $link = $row["link"];
            
            $posts[] = array('haber_id'=> $haberid, 'yazan' => $yazan, 'baslik' => $baslik, 'yazi' =>$yazi,'ozet' => $ozet, 'kategori' => $kategori,'foto' => $foto, 'link' => $link);

            } 

            $response['posts'] = $posts;
            $fp = fopen('results.json', 'w');

            fwrite($fp, json_encode($response));

            fclose($fp);
            
?>