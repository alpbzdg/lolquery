<?php 
    
    $api_key = "RGAPI-525d742e-e164-4d22-a120-9e6047a7d666";
    $sv="tr1";
    $nick ="Lusiados";

  $bilgi_url = "https://".$sv.".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$nick."?api_key=".$api_key;
   
      $oyuncu_bilgi = file_get_contents($bilgi_url);
      $bilgi_bul = json_decode($oyuncu_bilgi, true);
      
    $karakter_level =$bilgi_bul['summonerLevel'];  
      
    $account_id = $bilgi_bul["accountId"];
      
      
      
    $oyuncu_resmi = "http://ddragon.leagueoflegends.com/cdn/9.13.1/img/profileicon/".$bilgi_bul["profileIconId"].".png";
    
    $lig_url = "https://".$sv.".api.riotgames.com/lol/league/v4/entries/by-summoner/".$bilgi_bul['id']."?api_key=".$api_key;

    $lig_bilgi=file_get_contents($lig_url);
    $lig_bilgi_bul = json_decode($lig_bilgi, true);
    
    $kume = $lig_bilgi_bul[0]['tier'];
    $kume_sayi = $lig_bilgi_bul[0]['rank'];
    

    $mac_url = "https://tr1.api.riotgames.com/lol/match/v4/matchlists/by-account/".$account_id."?api_key=".$api_key;

    $mac_bol = file_get_contents($mac_url);
    $mac_sayisi = json_decode($mac_bol,true);
    
    
    
    
    for($j = 0; $j <= 10; $j++){
        
        $oyun_id = $mac_sayisi["matches"][$j]["gameId"];
    
    
   
    $macin_urlsi="https://tr1.api.riotgames.com/lol/match/v4/matches/".$oyun_id."?api_key=".$api_key;
    
        $gecmis_url = file_get_contents($macin_urlsi);
        $gecmis_parcala = json_decode($gecmis_url,true);
        
        
            for($i = 0; $i<count($gecmis_parcala["participantIdentities"]);$i++){
                
                $oyun_nicki = $gecmis_parcala["participantIdentities"][$i]["player"]["summonerName"];
                
                
                if($oyun_nicki == $nick){
                    
                    
                    
                        $sampiyon_id = $gecmis_parcala["participants"][$i]["championId"];
                        $takim_id    = $gecmis_parcala["participants"][$i]["teamId"];
                        $spel1       = $gecmis_parcala["participants"][$i]["spell1Id"];
                        $spel2       = $gecmis_parcala["participants"][$i]["spell2Id"];
                        $durum       = $gecmis_parcala["participants"][$i]["stats"]["win"];
                        $item1       = $gecmis_parcala["participants"][$i]["stats"]["item0"];
                        $item2       = $gecmis_parcala["participants"][$i]["stats"]["item1"];
                        $item3       = $gecmis_parcala["participants"][$i]["stats"]["item2"];
                        $item4       = $gecmis_parcala["participants"][$i]["stats"]["item3"];
                        $item5       = $gecmis_parcala["participants"][$i]["stats"]["item4"];
                        $item6       = $gecmis_parcala["participants"][$i]["stats"]["item5"];
                        $item7       = $gecmis_parcala["participants"][$i]["stats"]["item6"];
                        $kill        = $gecmis_parcala["participants"][$i]["stats"]["kills"];
                        $death       = $gecmis_parcala["participants"][$i]["stats"]["deaths"];
                        $assists     = $gecmis_parcala["participants"][$i]["stats"]["assists"];
                        $minyon      = $gecmis_parcala["participants"][$i]["stats"]["totalMinionsKilled"];
                        $gold        = $gecmis_parcala["participants"][$i]["stats"]["goldEarned"];
                        
                        echo '<table>
                                  <tr>
                                    <th>Şampiyon</th>
                                    <th>Takim</th> 
                                    <th>Spel 1</th>
                                    <th>Spel 2</th>
                                    <th>Durum</th>
                                    <th>Item1</th>
                                    <th>Item2</th>
                                    <th>Item3</th>
                                    <th>Item4</th>
                                    <th>Item5</th>
                                    <th>Item6</th>
                                    <th>Item7</th>
                                    <th>Kill</th>
                                    <th>Death</th>
                                    <th>Assist</th>
                                    <th>Minyon</th>
                                    <th>Gold</th>
                                  </tr>
                                  <tr>
                                    <td>'.$sampiyon_id.'</td>
                                    <td>'.$takim_id.'</td>
                                    <td>'.$spel1.'</td>
                                    <td>'.$spel2.'</td>
                                    <td>'.$durum.'</td>
                                    <td>'.$item1.'</td>
                                    <td>'.$item2.'</td>
                                    <td>'.$item3.'</td>
                                    <td>'.$item4.'</td>
                                    <td>'.$item5.'</td>
                                    <td>'.$item6.'</td>
                                    <td>'.$item7.'</td>
                                    <td>'.$kill.'</td>
                                    <td>'.$death.'</td>
                                    <td>'.$assists.'</td>
                                    <td>'.$minyon.'</td>
                                    <td>'.$gold.'</td>
                                  </tr>
                                  
                                </table>
                                ';
                        
                }
                
                
                
            }
        
    }
    
    
    

?>