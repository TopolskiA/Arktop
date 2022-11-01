<!--  Content  --> 
                    <div class="content ">
                        <section class="no-padding no-border">
                            <!-- Filters-->
                            <div id="filter" class="filter-holder filter-nvis-column hide">
                                <div class="gallery-filters at">
                                    <a href="#" id="fall" class="gallery-filter gallery-filter-active"  onclick="dall()">All</a>		
                                    <a href="#" id="fphoto" class="gallery-filter" onclick="dphoto()">Fotografia</a>
                                    <a href="#" id="fgraphic" class="gallery-filter" onclick="dgraphic()">Grafika</a>
                                    <a href="#" id="fwizual" class="gallery-filter" onclick="dwizual()">Indetyfikacja wizualna</a>
                                </div>
                            </div>
                            <!-- filters end -->
                            <!--  filter-button-->
                            <div class="filter-button vis-fc" onclick="Filter()">Filtrowanie</div>
                            <!--  filter-button end -->
                            <!--  gallery-items -->
                            <div class="gallery-items   hid-port-info">
                                <!-- 1 -->
                                <div id="dphoto" class="dphoto">
                                
                                
                                
                                <?php 
                                
                                $type='photo';
                                $dir= './images/galeria/'.$type.'/';
                                $handle = scandir($dir);
                                  foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..'){
                                    
                                  echo '<div class="'.$type.'">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            
                                            <img  src="'.$dir.$fid.'"   alt="">
                                        </div>
                                    </div>
                                </div>';
                                  
                                
                                  }}
                                 ?>
                                </div>                               
                                <!-- 1 end -->
                                <!-- 2 -->
                                <div id="dgraphic" class="dgraphic">
                                <?php 
                                
                                $type='graphic';
                                $dir= './images/galeria/'.$type.'/';
                                $handle = scandir($dir);
                                  foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..'){
                                    
                                  echo '<div class="'.$type.'">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            
                                            <img  src="'.$dir.$fid.'"   alt="">
                                        </div>
                                    </div>
                                </div>';
                                  
                                
                                  }}
                                 ?>
                                 </div> 
                                <!-- 2 end -->
                                <!-- 3 -->
                                <div id="dwizual" class="dwizual">
                                
                                
                                
                                <?php 
                                
                                $type='iv';
                                $dir= './images/galeria/'.$type.'/';
                                $handle = scandir($dir);
                                  foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..'){
                                    
                                  echo '<div class="'.$type.'">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            
                                            <img  src="'.$dir.$fid.'"   alt="">
                                        </div>
                                    </div>
                                </div>';
                                  
                                
                                  }}
                                 ?> 
                                </div>  
                                <!-- 3 end -->
                            </div>
                            <!-- end gallery items -->					
                        </section>
                    </div>
                    <!--  Content  end --> 