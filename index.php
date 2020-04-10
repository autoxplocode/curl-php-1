                       <form method="post">
                                <div class="">
                                            <label class="">Target anda :</label>
                                            <div class="">
                                                <input type="text" name="target" id="targrt" 0 class="form-control" placeholder="cth(https://autoxplocode.tech/)" required>
                                            </div>
                                </div>
                        </div>
                        <button style="background-color: red;" name="start" id="start" type="submit" class="btn btn-primary btn-lg"><i class="icon-arrow-right6 mr-2"></i> SUBMIT</button>
                        </form>
                        
                        <!-- kode di bawah ini untuk menampilkan hasil dari curl -->
<?php 
                          error_reporting(0);
                          $domain = htmlspecialchars($_POST['target']);
                          $dkp = $_POST['start'];
                          $strr = "tes.php?domain=" . $domain;
                          if(isset($dkp)){
                          echo '<h4 class="tile-title"><i class="fa fa-exclamation-triangle"></i>Target : '.$str.'</h4>';
                          echo '<iframe src="'.$strr.'" height="600" width="100%" weight="100%" size="100%" frameborder="0" scrolling="auto" noresize></iframe>';
                          }
?>
<?php 
//CopyRight AutoXploCode
?>
