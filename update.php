<?php 
$id = $_GET['id'];

$sql="SELECT * FROM t_tabel WHERE no=$id";
$sql_select = mysql_query($sql);
$data = mysql_fetch_array($sql_select);
 ?>

<!-- section -->
   <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" method="post" action="?page=prosesupdate">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="nama" placeholder="Your name" required value=<?php echo $data['nama'];?> />
                                   <!-- <input type="hidden" name ="no"value=<?php echo $data['no'];?>-->
                                </div>
                                 <input type="hidden" name ="no"value=<?php echo $data['no'];?>>
                                <div>
                                    <input type="radio" name="gender"value="L"required>
                                    <label for="1"style="color:white" >laki laki</label>
                                    <input type="radio" name="gender"value="P" required>
                                    <label for="2" style="color:white">perempuan</label>

                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" required  value=<?php echo $data['email'];?> />
                                </div>
                                <div class="field">
                                    <input type="text" name="nohp" placeholder="Phone number"  required value=<?php echo $data['nohp'];?> />
                                </div>
                                <div class="field">
                                    <textarea placeholder="Message" name="pesan"><?php echo $data['pesan'];?> </textarea>
                                </div>
                                <div class="field center">
                                    <button type="submit">update</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->


