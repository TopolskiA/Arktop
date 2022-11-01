        <!--  Content  --> 
                    <div class="content portfolio">
                        <section class="no-padding no-border no-bg">
                            <!-- Filters-->
                           
                            <div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> All</button>
  <button class="btn" onclick="filterSelection('logo')"> Logo</button>
  <button class="btn" onclick="filterSelection('card')"> Wizytówki</button>
  <button class="btn" onclick="filterSelection('biuro')"> Pakiet biurowy</button>
  <button class="btn" onclick="filterSelection('plakat')"> Plakaty</button>
  <button class="btn" onclick="filterSelection('baner')"> Banery</button>
  <button class="btn" onclick="filterSelection('inne')"> Inne grafiki</button>
</div>
                            
                            
                            
                           
                            <!-- filters end -->
                            <!-- gallery-items -->
                            <div class="gallery-items logo-items hid-port-info grid-small-pad">
                                <?
                                
                                $i='0';
                                $dir= 'images/galeria/portfolio/';
                                $handle = scandir($dir);
                                foreach($handle as $fid) {
                                  if ($fid !=='.' & $fid !=='..'){
                                  $line[2]='';
                                  $filtr = '';
                                  $opis ='';
                                  if (file_exists($dir.$fid.'/logo.webp')){
                                    $filtr = $filtr.'logo ';
                                    $opis = $opis.'logo ';
                                  }
                                  if (file_exists($dir.$fid.'/card.webp')){
                                    $filtr = $filtr.'card ';
                                    $opis = $opis.'wizytówki ';
                                  }
                                  if (file_exists($dir.$fid.'/biuro.webp')){
                                    $filtr = $filtr.'biuro ';
                                    $opis = $opis.'teczka papier firmowy ';
                                  }
                                  if (file_exists($dir.$fid.'/plakat.webp')){
                                    $filtr = $filtr.'plakat ';
                                    $opis = $opis.'plakat ';
                                  }
                                  if (file_exists($dir.$fid.'/baner.webp')){
                                    $filtr = $filtr.'baner ';
                                    $opis = $opis.'baner ';
                                  }
                                  if (file_exists($dir.$fid.'/inne.webp')){
                                    $filtr = $filtr.'inne ';
                                    $opis = $opis.'inne ';
                                  }
                                  if (strpos($fid, '&') !== false){
                                    $fidlink=(str_replace("&","%26",$fid));
                                    $fidid=(str_replace("&","",$fid));
                                  }else{
                                   $fidlink = $fid;
                                   $fidid = $fid;
                                  }
                                  if (strpos($fid, ' ') !== false){
                                    $fidlink=(str_replace(" ","%20",$fid));
                                    $fidid=(str_replace(" ","",$fid));
                                  }else{
                                   $fidlink = $fid;
                                   $fidid = $fid;
                                  }
                                  $i++;
                                  $h=$i-1; /*poprzredni projekt*/
                                  $j=$i+1; /*nastepny projekt*/
                                  /*fid = folder id & NAZWA*/
                                    $info = $dir.'/'.$fid.'/info.txt';
                                    if (file_exists($info)){
                                        
                                    if ($fh = fopen($info, 'r')) {
                                    $readline=0;
                                        while (!feof($fh)) {
                                        $readline++;
                                        $line[$readline] = fgets($fh);
                                        /*
                                        1 nazwa
                                        2 krotki opis 
                                        3 dlugi opis
                                        4+ sklad
                                                                               
                                          */
                                        }
                                    $filtr = $filtr.$line[40];
                                    $opis = $line[2];    
                                    fclose($fh);
                                      } 
                                    }else{
                                    
                                    }
                                    
                                  echo '<!-- '.$i.' -->
                                <div class="gallery-item filterDiv '.$filtr.'" id="'.$fidid.'">
                                    <a href="./ps-'.$fidlink.'">
                                    <div class="grid-item-holder">
                                        <div class="box-item">';
                                        if (file_exists('images/galeria/portfolio/'.$fid.'/thumbnail.webp'))
                                          {    
                                            echo '<img src="images/galeria/portfolio/'.$fidlink.'/thumbnail.webp"   alt="'.$fid.'">';
                                          }else{
                                            echo '<img src="images/galeria/portfolio/'.$fidlink.'/logo.webp"   alt="'.$fid.'">';
                                          
                                          }
                                          echo'
                                          <div class="grid-item">
                                            <h3>'.$fid.'</h3>
                                            <span>'.$opis.'</span>
                                          </div> 
                                        </div>
                                        
                                    </div>
                                    </a>
                                </div> 
                                <!-- '.$i.' end -->'; }}?>
                                
                                
                            </div>
                            <!-- end gallery items -->					
                        </section>
                    </div>
                    <!--  Content  end --> 
                    