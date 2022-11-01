<!--  Content -->
<div class="content-holder-home">
<script defer src="js/contact.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
	<div class="contact">
		<div class="wrapper-inner">
			<div id="contact" class="align-content">
				<div class="container small-container"> <!--KONTAKT adres mail-->
					<h3 class="dec-text">Kontakt</h3>
					<ul class="contact-list">
						 <li><span>E-mail </span>
							<a href="#">poczta@arktop.pl</a>
						</li>
					</ul>
					<a href="#" class=" btn anim-button   trans-btn   transition  fl-l showform" onclick="Writeme()" onkeypress="Writeme()" onkeyup="Writeme()">
					<span>Napisz do mnie</span><i class="fas fa-pen-alt"></i></a>
				</div>
			</div>
			<!--  contactbox  --> 
			<div id="contactbox" class="contact-form-holder hide">
                                <div class="close-contact" onclick="Closeform()" onkeypress="Closeform()" onkeyup="Closeform()"></div>
                                <div class="align-content">
                                    <section>
                                        <div id="contact-form">
                                            <div id="message"></div>
                                            <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                                <label for="name">Imię/Nazwa</label>
                                                <input name="name" type="text" id="name"  onClick="this.select()" value="Imię/Nazwa" >
                                                <br />
                                                <label for="email">E-mail</label>
                                                <input name="email" type="text" id="email" onClick="this.select()" value="E-mail" >
                                                  <br />
                                                 <label for="phone">Telefon</label>           
												<input type="text"  name="phone" id="phone" onClick="this.select()" value="Telefon" />
												<br /> 
                                                <label for="comments">Wiadomość</label>
                                                <textarea name="comments"  id="comments" onClick="this.select()" onkeypress="this.select()" onkeyup="this.select()"></textarea>
                                                <div><div class="g-recaptcha" data-sitekey="6LffaUkUAAAAAN9sxgLcS7dE0uViuY42Nzcmk-rd"></div>   
                                                <button type="submit"  id="submit"><span>Wyślij </span> <i class="fa fa-long-arrow-right"></i></button>     </div>
                                                      										           											
                                            </form>
                                        </div>
                                        </section>
                                </div>
                            </div>
		</div>
		<div class="bg" style="background-image:url(images/bg/about2.jpg)" ></div>
	</div>	
	
</div>