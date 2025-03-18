<?php include 'header.php'; ?>

<div class="contact">
    <div class="contact-head" data-aos="fade-up" data-aos-duration="2000">
        <h1>Contact Us</h1>
        <p>Have an issue? No worries , contact now...</p>
    </div>
</div>

<div class="container">
    <div class="row pt-5 pb-5 gap-5">
        <div class="col d-flex justify-content-center align-items-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.528010310659!2d79.96440337478651!3d6.827109619561148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2511a49d13135%3A0x5b924e541f040741!2sWave%20Park%20Music%20Productions%20Studio!5e0!3m2!1sen!2slk!4v1742312300820!5m2!1sen!2slk" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col">
            <form style="border: 1px solid #0077cc; padding: 30px; background-color: white; box-shadow: 5px 5px 5px 5px rgba(54, 54, 54, 0.18); border-radius: 10px;">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="name" class="form-control" id="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="phonenumber" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div><br>

                <center><button type="submit" class="btn btn-custom-1">Submit</button></center>
            </form>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>
