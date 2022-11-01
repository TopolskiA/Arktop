
                    <!--  Content  --> 
                    <div class="content galeria">
                        <section class="no-padding no-border no-bg">
                            <!-- Filters-->
                           
                            <div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> All</button>
  <button class="btn" onclick="filterSelection('logo')"> Sesje</button>
  <button class="btn" onclick="filterSelection('card')"> Widoki</button>
  <button class="btn" onclick="filterSelection('biuro')"> Zwierzęta</button>
  <button class="btn" onclick="filterSelection('plakat')"> Okoliczności</button>
  <button class="btn" onclick="filterSelection('baner')"> Produktowe</button>
  <button class="btn" onclick="filterSelection('inne')"> Inne</button>
</div>
                            
                            
                            
                           
                            <!-- filters end -->
                            <!-- gallery-items -->
                            <div class="gallery-items gallery-items hid-port-info grid-small-pad">
                                <?
                                
                                $i='0';
                                $dir= 'images/galeria/photo/';
                                $dirt='images/galeria/photo/thumbnails/';
                                $handle = scandir($dir);
                                foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..' & $fid !=='thumbnails'){
                                  
                                  
                                  $i++;
                                  $h=$i-1; /*poprzredni projekt*/
                                  $j=$i+1; /*nastepny projekt*/
                                  /*fid = folder id & NAZWA*/
                                    $info = $dir.'/'.$fid.'/info.txt';
                                                                        
                                  echo '<!-- '.$i.' -->
                                <div class="gallery-item filterDiv '.$filtr.'">
                                    <a href="https://www.arktop.pl/?p=galeria-photo-nowa&proj='.$fid.'">
                                    <div>
                                        <div class="box-item">';
                                        if (file_exists($dirt.'/'.$fid))
                                          {    
                                            echo '<img src="'.$dirt.'/'.$fid.'"   alt="'.$fid.'">';
                                          }else{
                                            echo '<img src="'.$dir.'/'.$fid.'"   alt="'.$fid.'">';
                                          
                                          }
                                          $exif_data = exif_read_data ('images/bg/fotografia.jpg');
if (!empty($exif_data['DateTime'])) {
    $exif_date = $exif_data['DateTime'];
}
                                          echo'
                                          <div class="grid-item">
                                            <h3>'.$fid.'</h3>
                                            
                                            <span>'.$exif_data.'</span>
                                          </div>
                                        </div>
                                        
                                    </div>
                                    </a>
                                </div>'; }}?>
                                
                                
                            </div>
                            <!-- end gallery items -->					
                        </section>
                    </div>
                    <!--  Content  end --> 
                    