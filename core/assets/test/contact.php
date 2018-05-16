<?=$this->layout('index');?>
<div id="content">
    <section class="padding-bottom-70">
        <div class="container">

            <!-- Heading -->
            <div class="heading text-left margin-top-70 margin-bottom-30">
                <h4>drop us a line</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- CONTACT FORM -->
                    <div class="contact-form">
                        <!-- Success Msg -->
                        <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>

                        <!-- FORM -->
                        <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <input type="text" class="form-control" name="company" id="company" placeholder="Subject">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>
                                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <button type="submit" value="submit" class="btn btn-1" id="btn_submit" onClick="proceed();">Send Message <i class="fa fa-caret-right"></i></button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <!-- MAP -->
                <div class="col-md-6">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
</div>
