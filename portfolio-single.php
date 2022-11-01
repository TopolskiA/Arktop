
                    <!--  Content -->
                    <div class="content full-height portfolio-single">
                        <!--  fixed-info-container --> 
                        <?
                          /**pobranie nazwy z adresu**/
                          $name = $_GET['proj'];
                          if ($name === 'J'){
                                    $name=('J&B');
                                  }
                         
                          
                          $dir= 'images/galeria/portfolio/'.$name;
                          /*przeczytanie txt*/
                          $info = $dir.'/info.txt';
                          if (file_exists($info)){
                                    if ($fh = fopen($info, 'r')) {
                                    $readline=0;
                                        while (!feof($fh)) {
                                        $readline++;
                                        $line[$readline] = fgets($fh);
                                        /*
                                        $line[X]
                                        1 nazwa
                                        2 krotki opis 
                                        3 dlugi opis
                                        4+ sklad
                                                                               
                                          */
                                        }
                                    fclose($fh);
                                      }
                                      $sklad="Skład";
                        }else{
                        $line='';
                        $sklad='';
                        }  
                          
                                     
                        ?>
                        <div class="fixed-info-container">
                            <!--  content-nav dodaj nastepny poprzedni projekt
                            <div class="content-nav">
                                <ul>
                                    <li><a href="portfolio-single2.html" class="ajax ln"><i class="fa fa fa-angle-left"></i></a></li>
                                    <li>
                                        <div class="list">
                                            <a href="portfolio.html" class="ajax">							
                                            <span>
                                            <i class="b1 c1"></i><i class="b1 c2"></i><i class="b1 c3"></i>
                                            <i class="b2 c1"></i><i class="b2 c2"></i><i class="b2 c3"></i>
                                            <i class="b3 c1"></i><i class="b3 c2"></i><i class="b3 c3"></i>
                                            </span></a>
                                        </div>
                                    </li>
                                    <li><a href="portfolio-single3.html" class="ajax rn"><i class="fa fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!--  content-nav end -->
                            <?
                            echo '<h3>'.$name.'</h3>
                            <div class="separator"></div>
                            <div class="clearfix"></div>
                            <p>'.$line[3].'</p>
                            <h4>'.$sklad.'</h4>';
                            if (file_exists($info)){
                            echo '<ul class="project-details">';
                              for($q=4;$q<=19;$q++){
                              echo '<li><span>'.$line[$q].'</span></li>';
                              }
                            echo '<li><span>'.$line[20].'</span>  <a href="'.$line[21].'" alt="link: '.$line[21].'">'.$line[21].'</a></li>
                            </ul>';
                            }
                            echo '<a href="portfolio#'.$name.'" class=" btn anim-button   trans-btn   transition  fl-l" alt="Wróć"><span>Wróć do galerii projektów</span><i class="fa fa-eye"></i></a>';
                            if (file_exists($info)){
                                  echo'<div class="show-info">
                                            <span>'.$line[30].'</span>
                                            <div class="tooltip-info">
                                                <h5>'.$line[31].'</h5>
                                                <p>'.$line[32].'</p>
                                            </div>
                                        </div>';
                            }            
                        echo '
                        </div>
                        <!--  content-nav end -->
                        <!-- resize-carousel-holder --> 						
                        <div class="resize-carousel-holder vis-info">
                            <!--  full-width-slider-holder--> 						  
                            <div class="full-width-slider-holder">
                                <!--  full-width-slider --> 
                                <div>';
                                    
                                $i=0;
                                $handle = scandir($dir);
                                foreach($handle as $fid) {
                                  if ($fid !=="." & $fid  !==".." & $fid  !=="info.txt"){
                                  $i++;
                                  /*fid = obrazek*/
                                  echo '<!-- '.$i.'--> 
                                    
                                        <img class="bg bg-slider" src="/images/galeria/portfolio/'.$name.'/'.$fid.'" alt="'.$name.' '.$fid.'">
                                        <div style="clear:both"></div>
                                    <!-- '.$i.' end-->';
                                  }}  
                                echo '
                                
                            </div>
                            <!--  full-width-slider-holder end --> 	
                        </div>
                        <!-- resize-carousel-holder end --> 
                    </div>
                    <!--  Content  end -->

                    
                    ';
                     ?> 