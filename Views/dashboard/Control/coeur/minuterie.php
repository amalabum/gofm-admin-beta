  <?php   
                                    
                                    // $date= 

                                     $heure = substr($post['mydate'],11);
                                 
                                     $a =$heure['0'];
                                     $b =$heure['1'];
                                    // entre ces deux il ya un deux points :
                                     $c =$heure['3'];
                                     $d =$heure['4'];

                                     $heures = $a.=$b ;
                                     $minutes = $c.=$d;
                                     
                                     
                                     
                                   // echo date('Y-m-d H:i:s');
                                      
                                    
                                     $strpub=substr($post['mydate'],8,10);
                                   
                                
                                     $todaydate=substr(date('Y-m-d'),8,10);
                                     $datea= $todaydate['0'];
                                     $dateb= $todaydate['1'];
                                     $today= $datea.=$dateb ;

                                     $pubdate=substr(date('Y-m-d'),8,10);
                                     $pubdatea= $strpub['0'];
                                     $pubdateb= $strpub['1'];
                                     $publicationdate= $pubdatea.=$pubdateb ;
                                     $dif= $today-$publicationdate;
                                     

                                      if($dif==0){
                                        //   echo " il ya 2 min ";
                                        echo " Aujourdhui à $heures"; echo"h"; echo " $minutes"; echo"min";
                                      }
                                      elseif($dif==1){
                                        echo "Hier à $heures"; echo"h"; echo " $minutes"; echo"min";
                                      }
                                      elseif($dif==2){
                                        echo "Avant hier à $heures"; echo"h"; echo " $minutes"; echo"min";
                                      }
                                      else {
                                        echo "Il ya $dif jours";
                                      }
                                     
                                                                  
                                   ?>