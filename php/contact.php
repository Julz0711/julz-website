<div class="container mx-auto mt-5 mb-5 myContainer" id="smContact">
    <h1 class="mb-5">Contact Me</h1>


    <form action="https://formsubmit.co/gtkncht.business@gmail.com" method="POST" class="row g-6" id="form" autocomplete="off" />
        <input type="hidden" name="_subject" value="New Enquiry!">
        <!-- <input type="hidden" name="_next" value="contactPost.php"> -->

        <div class="col-md-6">
            <label for="firstName" class="form-label italic">First Name</label>
            <input type="text" name="firstname" class="form-control myFormInput" id="firstName">
            <div class="errorMsg" id="errorFirstName"></div>
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label italic">Last Name</label>
            <input type="text" name="lastname" class="form-control myFormInput" id="lastName">
            <div class="errorMsg" id="errorLastName"></div>
        </div>

        <div class="col-md-8">
            <label for="emailAdress" class="form-label italic">E-Mail Adress</label>
            <input type="text" name="email" class="form-control myFormInput" id="emailAdress">
            <div class="errorMsg col-md-8" id="errorEmail"></div>
        </div>
        <div class="col-md-4">
            <label for="phone" class="form-label italic">Phone Number (optional)</label>
            <input type="text" name="phonenumber" class="form-control myFormInput" id="phone">
            <div class="errorMsg col-md-4" id=""></div>
        </div>

        <div class="col-md-12">
            <label for="subject" class="form-label italic">Subject</label>
            <input type="text" name="subject" class="form-control myFormInput" id="subject">
            <div class="errorMsg col-md-12" id="errorSubject"></div>
        </div>

        <div class="col-md-12">
            <label for="message" class="form-label italic">Message</label>
            <textarea name="message" class="form-control myTextarea" id="message" rows="4"></textarea>
            <div class="errorMsg col-md-12" id="errorMessage"></div>
        </div>

        <input type="hidden" name="_next" value="#">
        <input type="hidden" name="_template" value="box">
        <input type="hidden" name="_captcha" value="false">
        <input type="hidden" name="_autoresponse" value="Thank you for your message! I will get in touch shortly.">

        <div class="col-md-12 mt-4 jenson">
            <a><input type="submit" class="myBtn" value="Submit"></a>
        </div>

        <a href="../php/contactPost.php">test submit</a>
    </form>
</div>