<div class="container mx-auto mt-5 mb-5 myContainer" id="smContact">
    <h1 class="mb-5">Contact Me</h1>
    <form action="contactPost.php" method="POST" class="row g-6" id="form" autocomplete="off">

        <div class="col-md-6">
            <label for="firstName" class="form-label italic">First Name</label>
            <input type="text" class="form-control myFormInput" id="firstName">
            <div class="errorMsg" id="errorFirstName"></div>
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label italic">Last Name</label>
            <input type="text" class="form-control myFormInput" id="lastName">
            <div class="errorMsg" id="errorLastName"></div>
        </div>

        <div class="col-md-8">
            <label for="emailAdress" class="form-label italic">E-Mail Adress</label>
            <input type="text" class="form-control myFormInput" id="emailAdress">
            <div class="errorMsg col-md-8" id="errorEmail"></div>
        </div>
        <div class="col-md-4">
            <label for="phone" class="form-label italic">Phone Number (optional)</label>
            <input type="text" class="form-control myFormInput" id="phone">
            <div class="errorMsg col-md-4" id=""></div>
        </div>

        <div class="col-md-12">
            <label for="subject" class="form-label italic">Subject</label>
            <input type="text" class="form-control myFormInput" id="subject">
            <div class="errorMsg col-md-12" id="errorSubject"></div>
        </div>

        <div class="col-md-12">
            <label for="message" class="form-label italic">Message</label>
            <textarea class="form-control myTextarea" id="message" rows="4"></textarea>
            <div class="errorMsg col-md-12" id="errorMessage"></div>
        </div>

        <div class="col-md-12 mt-4 jenson">
            <!-- <input type="submit" class="myBtn" value="Submit"> -->
            <a href="#"><input type="submit" class="myBtn" value="Submit"></a>
        </div>
    </form>
    
</div>