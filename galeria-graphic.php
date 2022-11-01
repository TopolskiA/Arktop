<!--  Content  --> 
                    <div class="content ">
                        <section class="no-padding no-border">
                            <!-- Filters-->
                            <div id="filter" class="filter-holder filter-nvis-column hide">
                                <div class="gallery-filters at">
                                    <!--<a href="./?p=galeria" id="fall" class="gallery-filter "  onclick="dall()">All</a>		 --> 
                                    <a href="galeria-photo" id="fphoto" class="gallery-filter" onclick="dphoto()">Fotografia</a>
                                    <a href="galeria-graphic" id="fgraphic" class="gallery-filter gallery-filter-active" onclick="dgraphic()">Grafika</a>
                                    <a href="galeria-iv" id="fwizual" class="gallery-filter" onclick="dwizual()">Identyfikacja wizualna</a>
                                </div>
                            </div>
                            <!-- filters end -->
                            <!--  filter-button-->
                            <div class="filter-button vis-fc" onclick="Filter()"><i class="fas fa-filter" aria-label="Filtrowanie"></i></div>
                            <!--  filter-button end -->
                            <!--  gallery-items -->
                            <div class="gallery-items   hid-port-info">
                                <div id="dgraphic" class="dgraphic">
                                <?php 
                                
                                $type='graphic';
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
                                              <a href="#'.$h.'"><div class="click"><i class="fas fa-caret-left click-l"></i></div></a>
                                              <a href="#"> <img src="'.$dir.$fid.'"></a>
                                              <a href="#'.$j.'"><div class="click"><i class="fas fa-caret-right click-r"></i></div></a>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>';
                                  
                                
                                  }}
                                 ?>
                                 </div> 
                                
                            </div>
                            <!-- end gallery items -->					
                        </section>
                    </div>
                    <!--  Content  end --> 


                                
                               