<!--  Content  --> 
                    <div class="content ">
                           
                                <!-- 1 -->
                                <div id="dphoto" class="flexbox-container">
                                
                                <?php 
                                
                                
                                
                                
                                
                                $type='photo';
                                $i='0';
                                $dirt= 'images/galeria/'.$type.'/thumbnails/';
                                $dir= 'images/galeria/'.$type.'/';
                                $files = array();
                                $handle = scandir($dirt);
                                
                                  foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..' & $fid !=='thumbnails'){
                                  
                                  $i++;
                                  $h=$i-1;
                                  $j=$i+1;    

                                  echo '<div class="'.$type.'">
                                    
                                            <a href="#'.$i.'">
                                            <img src="'.$dirt.$fid.'" 
                                            class="thumbnail" alt="'.$fid.'">
                                            </a>
                                            
                                            
                                             <div class="lightbox" id="'.$i.'">
                                              <a href="#'.$h.'"><div class="click"><i class="fa fas fad far fal fa-caret-left click-l"></i></div></a>
                                              <a href="#" class="lightboxflex"> <img src="'.$dirt.$fid.'" alt="'.$fid.'"></a>
                                              <a href="#'.$j.'"><div class="click"><i class="fa fas fad far fal fa-caret-right click-r"></i></div></a>
                                            </div>
                                       
                                        
                                </div>';
                                  
                                
                                  }}
                                 ?>
                                </div>                               
                                <!-- 1 end -->
                                
                            <!-- end gallery items -->
                    </div>
                    <!--  Content  end --> 