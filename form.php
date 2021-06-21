 <!-- section -->
   <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" method="post" action="?page=simpan">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="nama" placeholder="Your name" required/>
                                </div>
                                <div>
                                    <input type="radio" name="gender"value="L"checked>
                                    <label for="1"style="color:white" >laki laki</label>
                                    <input type="radio" name="gender"value="P">
                                    <label for="2" style="color:white">perempuan</label>

                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" required/>
                                </div>
                                <div class="field">
                                    <input type="text" name="nohp" placeholder="Phone number"  required/>
                                </div>
                                <div class="field">
                                    <textarea placeholder="Message" name="pesan"></textarea>
                                </div>
                                <div class="field center">
                                    <button type="submit">SEND</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->