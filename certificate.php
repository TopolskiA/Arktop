<!--  Content  --> 
                    <div class="content ">
                        <section class="no-padding no-border">
                            <div class="flexbox-container">
                                <!-- 1 -->
                                <?php 
                                
                                $type='crt';
                                $i='0';
                                $dir= 'images/certyfikat/';
                                $handle = scandir($dir);
                                  foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..'){
                                    $i++;
                                  $h=$i-1;
                                  $j=$i+1;
                                  echo '<div class="'.$type.'" id="'.$type.$i.'">


                                            <a href="#'.$i.'" alt="zoom">
                                            <img  src="'.$dir.$fid.'"  class="thumbnail" alt="'.$fid.'">
                                            </a>
                                            
                                             <div class="lightbox" id="'.$i.'">
                                              <a href="#'.$h.'"><div class="click"><i class="fas fa-caret-left click-l"></i></div></a>
                                              <a href="#"> <img src="'.$dir.$fid.'" alt="'.$fid.'"></a>
                                              <a href="#'.$j.'"><div class="click"><i class="fas fa-caret-right click-r"></i></div></a>
                                            </div>
                                        


                                </div>';
                                  
                                
                                  }}
                                 ?>
                               
</div>
                            <!-- end gallery items -->					
                        </section>
                    </div>
                    <!--  Content  end --> 