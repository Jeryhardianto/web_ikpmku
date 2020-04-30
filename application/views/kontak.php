 <section class="banner_area">
     <div class="container">
         <div class="banner_text_inner">
             <h4>Hubungi Kami</h4>
             <h5>Beri kami saran & kritik</h5>
         </div>
     </div>
 </section>
 <!--================End Banner Area =================-->

 <!--================Contact Us Area =================-->
 <section class="contact_us_area">
     <div class="container">
         <div id="mapBox" class="mapBox row m0">
             <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.312192851145!2d110.39451892919107!3d-7.763421199650291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a4b5d9d0e7%3A0x6dcc66d30811f65a!2sAsrama+Putra+Kaltara!5e0!3m2!1sid!2sid!4v1562773564005!5m2!1sid!2sid"
                 width="1300" height="520" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div>
         <div class="contact_details_inner">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="contact_text">
                         <div class="main_title">
                             <h2>Kontak Kami</h2>
                             <p>Silahkan isi Form Kritik dan Saran untuk memberikan kritik maupun saran kepada kami.
                                 Jika ingin mengirimkan saran dan kritik melalui email, silahkan kirim melalui e-mail
                                 yang tercantum dibawah.</p>
                         </div>
                         <div class="contact_d_list">
                             <div class="contact_d_list_item">
                                 <a href="mailto:ikpmku@gmail.com"><i class="fa fa-envelope"></i> ikmpku@gmail.com</a>

                             </div>


                         </div>

                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="contact_form">
                         <div class="main_title">
                             <h2>Form Kritik dan Saran</h2>
                             <p>Silahkan isi form dibawah, berikan saran dan kritik.</p>
                             <?= $this->session->flashdata('pesan'); ?>
                         </div>
                         <form class="contact_us_form row" action="" method="post" id="contactForm"
                             novalidate="novalidate">
                             <input type="hidden" class="form-control" id="id" name="id">
                             <div class="form-group col-lg-12">
                                 <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                                 <?= form_error('name', '<small class="text-danger p-3">', '</small>'); ?>
                             </div>
                             <div class="form-group col-lg-12">
                                 <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                 <?= form_error('email', '<small class="text-danger p-3">', '</small>'); ?>
                             </div>
                             <div class="form-group col-lg-12">
                                 <textarea class="form-control" name="message" id="message" rows="1"
                                     placeholder="Kritik & Saran"></textarea>
                                 <?= form_error('message', '<small class="text-danger p-3">', '</small>'); ?>
                             </div>
                             <div class="form-group col-md-12">
                                 <button type="submit" value="submit" class="btn submit_btn2">
                                     Kirim</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================End Contact Us Area =================-->