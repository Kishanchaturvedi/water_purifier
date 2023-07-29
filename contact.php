<?php
include 'component/header.php';
?>


<!-- registration successfully -->
<div class="login-done position-relative">
    <div class="h-100 w-100">
        <?php
        // contact.php
        
        // Check if the 'success' parameter is present in the URL
        if (isset($_GET['success']) && $_GET['success'] === 'true') {
            echo " <div id='card_div' class='h-100 w-100 bg-blur position-fixed'>
             <div id='card' class='animated fadeIn '>
                    <div id='upper-side'>
                        <?xml version='1.0' encoding='utf-8'?>
                        <!DOCTYPE svg PUBLIC '-//W3C//DTD SVG 1.1//EN' 'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'>
                        <svg version='1.1' id='checkmark' xmlns='http://www.w3.org/2000/svg'
                            xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' xml:space='preserve'>
                            <path
                                d='M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65 c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382 c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209 c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091 c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027 c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865 C131.967,94.755,132.296,93.271,131.583,92.152z' />
                            <circle fill='none' stroke='#ffffff' stroke-width='5' stroke-miterlimit='10' cx='109.486' cy='104.353'
                                r='32.53' />
                        </svg>
                        <h3 id='status'>Form Submited</h3>
                    </div>
                    <div id='lower-side'>
                        <p id='message'>
                            Thank you for your feedback.
                        </p>
                        <a href='index.php' id='contBtn'>Continue</a>
                    </div>
                </div>
                </div>";
        }
        ?>

    </div>


    <!-- ##################### Our Products Starts Here #################### -->
    <div class="pt-5">
        <div style="margin-top:0px;" class="row no-margin pt-5">

            <iframe style="width:100%"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249759.19784092825!2d79.10145254589841!3d12.009924873581818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1448883859107"
                height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


        </div>
    </div>
    <div class="row contact-rooo big-padding no-margin ">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7 ">
                    <h2 class=" fs-4 fw-bold text-blue">Contact Form</h2> <br>
                    <form action="connect.php" method="post" onsubmit="return validateForm()">
                        <div class="row cont-row my-3">
                            <div class="col-sm-3"><label for="name">Enter Name </label><span>:</span></div>
                            <div class="col-sm-8"><input type="text" placeholder="Enter Name" id="name" name="name"
                                    class="form-control input-sm  m-0">
                                <p class="fs-xm text-danger fw-bold" id="nameError"></p>
                            </div>
                        </div>
                        <div class="row cont-row my-3">
                            <div class="col-sm-3"><label for="email">Email Address </label><span>:</span></div>
                            <div class="col-sm-8"><input type="email" name="email" id="email"
                                    placeholder="Enter Email Address" class="form-control input-sm m-0">
                                <p class="fs-xm text-danger fw-bold" id="emailError"></p>
                            </div>
                        </div>
                        <div class="row cont-row my-3">
                            <div class="col-sm-3"><label for="number">Mobile Number</label><span>:</span></div>
                            <div class="col-sm-8"><input type="tel" name="number" id="number"
                                    placeholder="Enter Mobile Number" class="form-control input-sm m-0">
                                <p class="fs-xm text-danger fw-bold" id="numError"></p>
                            </div>
                        </div>
                        <div class="row cont-row my-3">
                            <div class="col-sm-3"><label for="massage">Enter Message</label><span>:</span></div>
                            <div class="col-sm-8">
                                <textarea rows="5" id="massage" name="massage" placeholder="Enter Your Message"
                                    class="form-control input-sm m-0"></textarea>
                                <p class="fs-xm text-danger fw-bold" id="msgError"></p>
                            </div>
                        </div>
                        <div style="margin-top:5px;" class="row">
                            <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                            <div class="col-sm-8">
                                <input type="submit" class="btn btn blue-btn w-100 btn-sm" value="Submit">
                            </div>
                        </div>
                    </form>



                    <!-- Your HTML content for contact.php goes here -->


                </div>
                <div class="col-sm-5">
                    <div style="margin:50px" class="serv">
                        <h2 class="fs-4 fw-bold text-blue">Address</h2>
                        Nallsopara <br>
                        Nallsopara<br>
                        Thane district<br>
                        Phone:+91 63933284388<br>
                        Email:pankaj12@gmail.com<br>
                        Website:www.bajrangi.combr>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> -->
    <!--  -->
    <!--- ############ Footer Starts Here ################## -->


    <script>

    </script>

    <?php
    include 'component/footer.php';
    ?>
</div>