<!--  Content  --> 
                    <div class="content ">
                        <section class="no-padding no-border">
                                                        <!--  gallery-items -->
                            <div class="gallery-items   hid-port-info">
                                <!-- 1 -->
                                <div id="dphoto" class="dphoto">
                                
                                
                                
                                <?php 
                                
                                $type='photo_produkt';
                                $i='0';
                                $dir= './images/galeria/'.$type.'/';
                                $handle = scandir($dir);
                                  foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..'){
                                  $i++;
                                  $h=$i-1;
                                  $j=$i+1;    
                                  echo '<div class="'.$type.'">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <a href="#'.$i.'">
                                            <img  src="'.$dir.$fid.'"  class="thumbnail" alt="">
                                            </a>
                                            
                                             <div class="lightbox" id="'.$i.'">
                                              <a href="#'.$h.'"><div class="click"><i class="fas fa-chevron-left"></i></div></a>
                                              <a href="#"> <img src="'.$dir.$fid.'"></a>
                                              <a href="#'.$j.'"><div class="click"><i class="fas fa-chevron-right"></i></div></a>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>';
                                  
                                
                                  }}
                                 ?>
                                </div>                               
                                <!-- 1 end -->
                                
                            </div>
                            <!-- end gallery items -->					
                        </section>
                    </div>
                    <!--  Content  end --> 