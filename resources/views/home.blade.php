@include("layouts.header")
<div class="overflow-hidden">


    <div class="background1">
        <div class="container">
            <div class="row d-felx justify-content-between">
                <div data-aos="fade-right" data-aos-duration="1000"
                    data-aos-easing="ease-in-sine" class="col-md-5  white px-5 " style="padding:10% 0">
                    <p class=" bold" style="font-size:23px">Hello it’s Me </p>
                    <p class="inter bold" style="font-size:64px">Rohit Singh</p>
                    <p class="inter bold" style="font-size:32px">I'm a <span style="color:#0080FF">Full Stack Developer </span></p>
                    <p>I'm a Full Stack Developer passionate about building dynamic web applications that deliver exceptional user experiences. With expertise in PHP frameworks like Laravel and CodeIgniter, I create secure and scalable back-end solutions, complemented by my proficiency in front-end technologies such as React.js, JavaScript, jQuery, and Bootstrap. I have experience deploying applications on AWS, utilizing its services to enhance performance and reliability.</p>
                    <a href="{{asset('documents/enhancedresume.pdf')}}"><button class="btn btn-primary download_button mt-4 px-5 py-2 inter" style="font-size:20px">Download CV</button></a>
                </div>
                <div data-aos="fade-left"


                    data-aos-duration="1000" class="col-md-5 d-flex justify-content-center align-items-center  position-relative py-3" style="height: 800px;"> <!-- Set a fixed height -->
                    <img class="position-absolute img-fluid" src="{{ asset('images/Polygon 1 (1).png') }}" alt="Polygon 1" style="width: 100%; height: auto; top: 149px;">
                    <img class="position-absolute img-fluid" src="{{ asset('images/Polygon 1 (3).png') }}" alt="Polygon 3" style="width: 100%; height: auto; top: 142px;">

                    <img src="{{ asset('images/rohit1.png') }}" alt="Developer" class="position-absolute " style="width: 22rem; height: auto; top: 73px;">
                </div>

            </div>

        </div>
    </div>



    <div class="background2">
        <div class="  mx-3 ">
            <div class="row mx-0">
                <div data-aos="fade-right" data-aos-duration="1000" class="col-md-6 position-relative">
                    <img src="{{ asset('images/rohit.png') }}" alt="Developer" class="position-absolute"
                        style="width: 100%; max-width: 22rem; height: auto; top: 25px;left:17%">
                    <img class="circlepng" src="{{ asset('images/Group 2.png') }}" alt="Circle">
                </div>




                <div class="col-md-5 px-5 py-5 white d-flex flex-column justify-content-around">
                    <div data-aos="fade-left" data-aos-duration="1000">
                        <p class="inter bold" style="font-size:32px">ABOUT <span style="color:#0080FF">ME</span></p>
                        <p class="inter" style="font-size:24px">FULL STACK DEVELOPER</p>

                        A skilled Laravel developer based in Lucknow, this professional specializes in building robust APIs using the Laravel framework and has extensive experience in developing admin panels with CodeIgniter. With a strong foundation in back-end development, they excel in creating scalable and efficient applications tailored to meet specific business needs. Their expertise extends to cloud technologies, particularly AWS, allowing them to deploy and manage applications with enhanced performance and reliability</p>
                    </div>
                    <div>
                        <button class="btn btn-primary px-5 py-2 download_button">See More</button>
                    </div>
                    <p>


                </div>


            </div>
        </div>

    </div>


    <div class="background3">
        <h1 data-aos="fade-right" data-aos-duration="2000" class="white text-center py-3">Our <span style="color:#0080FF;">Services</span></h1>
        <div class="container pb-5">
            <div data-aos="fade-up "
                data-aos-duration="3000" class="row d-flex justify-content-between mx-3 mt-5">
                <div class="col-md-3 card_box white p-3">
                    <div class="d-flex justify-content-center">
                        <i class="fa-brands fa-laravel" style="color: #d70f2d; font-size: 4rem;"></i>
                    </div>
                    <div>
                        <h3 class="text-center my-3">LARAVEL</h3>
                        <p class="summary">A skilled Laravel developer specializing in creating dynamic websites that deliver exceptional user experiences. With a strong command of the Laravel framework, they excel in building robust, scalable applications tailored to meet client needs.</p>
                        <div class="extra-content" style="display: none;">
                            Their expertise includes designing RESTful APIs for seamless integration and implementing best practices for security and performance. Committed to clean and efficient coding, they stay updated on the latest Laravel features and trends, ensuring that their projects are both modern and maintainable.
                        </div>

                        <button class="toggle-btn btn btn-primary  px-4 py-2 m-3 download_button " style="border-radius:12px" onclick="toggleContent(this)">Read More</button>
                    </div>
                </div>

                <div class="col-md-3 card_box white p-3">
                    <div class="d-flex justify-content-center">
                        <i class="fa-brands fa-react" style="color: #74C0FC;font-size:4rem"></i>
                    </div>
                    <div>
                        <h3 class="text-center my-3">React JS</h3>
                        <p class="summary">A skilled developer specializing in React.js, focusing on creating dynamic and responsive user interfaces that enhance the overall user experience. With a strong understanding of front-end development, they excel in building interactive web applications that are both visually appealing and highly functional. </p>
                        <div class="extra-content" style="display: none;">
                            Their expertise includes integrating RESTful APIs for seamless data exchange and ensuring optimal performance through best coding practices. Committed to staying current with the latest React.js features and trends, they aim to deliver modern and maintainable solutions
                        </div>
                        <button class="toggle-btn btn btn-primary  px-4 py-2 m-3 download_button " style="border-radius:12px" onclick="toggleContent(this)">Read More</button>
                    </div>
                </div>

                <div class="col-md-3 card_box white p-3">
                    <div class="d-flex justify-content-center">
                        <img width="20%" src="{{asset('images/codeignitor.png')}}"></img>
                    </div>
                    <div>
                        <h3 class="text-center my-3">CODEIGNITOR</h3>
                        <p class="summary">I have extensive experience working with CodeIgniter, where I developed several robust admin panels tailored to meet specific client needs. Utilizing the framework's MVC architecture, I efficiently managed database interactions, enabling seamless CRUD operations.</p>
                        <div class="extra-content" style="display: none;">
                            My projects involved implementing user authentication, role-based access control, and data visualization, all while ensuring a smooth user experience. By leveraging CodeIgniter's built-in libraries and helpers, I streamlined the development process, resulting in highly functional and secure applications that effectively handle complex data management tasks.
                        </div>
                        <button class="toggle-btn btn btn-primary  px-4 py-2 m-3 download_button " style="border-radius:12px" onclick="toggleContent(this)">Read More</button>
                    </div>
                </div>

                <!-- Add more cards as needed -->
            </div>
            <div data-aos="fade-up"
                data-aos-duration="3000" class="row d-flex justify-content-between mt-5 mx-3">
                <div class="col-md-3 card_box white p-3">
                    <div class="d-flex justify-content-center">
                        <img width="23%" src="{{'images/browser.png'}}"></img>
                    </div>
                    <div>
                        <h3 class="text-center my-3">CSS/HTML</h3>
                        <p class="summary">I have a solid background in HTML and CSS, which I have used to create responsive and visually appealing web pages. My expertise includes crafting semantic HTML structures that enhance accessibility and SEO, while utilizing CSS for layout design and styling. I am proficient in implementing modern design techniques, such as Flexbox and Grid, to ensure that my layouts are adaptable across various devices</p>
                        <div class="extra-content" style="display: none;">
                            Additionally, I have experience with preprocessors like SASS, allowing me to write more maintainable and organized styles. Through this combination of skills, I consistently deliver user-friendly interfaces that engage visitors and improve overall site functionality.
                        </div>

                        <button class="toggle-btn btn btn-primary  px-4 py-2 m-3 download_button " style="border-radius:12px" onclick="toggleContent(this)">Read More</button>
                    </div>
                </div>

                <div class="col-md-3 card_box white p-3">
                    <div class="d-flex justify-content-center">
                        <i class="fa-brands fa-js" style="color: #B197FC;font-size:4rem"></i>
                    </div>
                    <div>
                        <h3 class="text-center my-3">JAVASCRIPT</h3>
                        <p class="summary">I have a strong foundation in JavaScript, which I've used to enhance interactivity and functionality on web applications. My experience includes manipulating the DOM to create dynamic user experiences, implementing event handling, and utilizing AJAX for seamless data updates without page reloads.</p>
                        <div class="extra-content" style="display: none;">
                            am familiar with modern JavaScript features, such as ES6 syntax, promises, and async/await, which allow me to write cleaner and more efficient code. Additionally, I've worked with popular libraries like jQuery and frameworks like React, enabling me to build responsive and high-performance web applications.
                        </div>
                        <button class="toggle-btn btn btn-primary  px-4 py-2 m-3 download_button " style="border-radius:12px" onclick="toggleContent(this)">Read More</button>
                    </div>
                </div>

                <div class="col-md-3 card_box white p-3">
                    <div class="d-flex justify-content-center">
                        <i class="fa-solid fa-database" style="color: #FFD43B;font-size:4rem"></i>
                    </div>
                    <div>
                        <h3 class="text-center my-3">MYSQL</h3>
                        <p class="summary">I have a solid understanding of MySQL, which I've utilized extensively for database management in my web development projects. My experience includes designing relational database schemas, writing complex SQL queries for data retrieval and manipulation, and optimizing database performance through indexing and query optimization.</p>
                        <div class="extra-content" style="display: none;">
                            I am proficient in implementing data security measures, such as prepared statements, to protect against SQL injection attacks. Additionally, I have worked with MySQL in conjunction with PHP and CodeIgniter, allowing for efficient data handling and integration within my applications
                        </div>
                        <button class="toggle-btn btn btn-primary  px-4 py-2 m-3 download_button " style="border-radius:12px" onclick="toggleContent(this)">Read More</button>
                    </div>
                </div>

                <!-- Add more cards as needed -->
            </div>
        </div>
    </div>
    <div class="background4">
        <h1 data-aos="fade-right" data-aos-duration="2000" class="text-center  white py-3" style="font-size:32px;font-weight:bold;">Projects</h1>
        <div class=" container pb-5 px-3">
            <div class="row d-flex justify-content-between p-1  mx-3">
                <div data-aos="zoom-out-up" data-aos-duration="3000" class="col-md-5  card2 white px-0 position-relative" style="height:370px">
                    <img src="{{asset('images/chalksnboard.jpg')}}" style="height: 100%; width: 100%; border-radius: 20px; object-fit: cover;"></img>
                    <a href="https://chalksnboard.com/" style="text-decoration: none; color: inherit;" target="_blank">
                        <div class="overlay position-absolute  d-flex flex-column justify-content-center px-2  p-md-5">
                            <p class="text-center ">CHALKSNBOARD</p>
                            Chalks N Board is an innovative web platform designed to enhance the learning experience for students. With a user-friendly interface, it offers a wide range of courses across various subjects, catering to diverse learning needs
                            <p class="text-center mt-5">
                                <i class="fa-solid fa-square-arrow-up-right" style="color: #B197FC;font-size:3rem"></i>
                            </p>

                        </div>
                    </a>
                </div>
                <div data-aos="zoom-out-up" data-aos-duration="3000" class="col-md-5  card2 white position-relative px-0" style="height:370px">
                    <img src="{{asset('images/findmyschool.jpg')}}" style="height: 100%; width: 100%; border-radius: 20px; object-fit: cover;"></img>
                    <a href="https://findmyschools.co.in/" style="text-decoration:none;color:inherit" target="_blank">
                        <div class="overlay position-absolute d-flex flex-column justify-content-center px-2 p-md-5">
                            <p class="text-center ">FINDMYSCHOOL</p>
                            <p>FindMySchool is a comprehensive platform designed to help parents discover the best schools for their children. With an intuitive interface, the site allows users to search for schools based on various criteria, including location, curriculum, and extracurricular activities</p>

                            <p class="text-center mt-2 mt-md-5">
                                <i class="fa-solid fa-square-arrow-up-right" style="color: #B197FC;font-size:3rem"></i>
                            </p>

                        </div>
                    </a>


                </div>

            </div>
            <div class="row d-flex justify-content-between p-1 mx-3 mt-3 ">
                <div data-aos="zoom-out-up" data-aos-duration="3000" class="col-md-5  card2 white px-0 position-relative" style="height:370px">
                    <img src="{{asset('images/admin_panel.jpg')}}" style="height: 100%; width: 100%; border-radius: 20px; object-fit: cover;"></img>
                    <a href="https://dikshant.chalksnboard.com/admin/" style="text-decoration:none;color:inherit" target="_blank">
                        <div class="overlay position-absolute overlay position-absolute  d-flex flex-column justify-content-center px-2 p-md-5">
                            <p class="text-center ">DIKSHAT ADMIN PANEL</p>
                            The Dikshant admin panel is a powerful and user-friendly interface designed to facilitate effective management of the educational platform. It provides administrators with the tools necessary to oversee operations, manage content, and ensure a smooth user experience.
                            <p class="text-center mt-5">
                                <i class="fa-solid fa-square-arrow-up-right" style="color: #B197FC;font-size:3rem"></i>
                            </p>

                        </div>
                    </a>

                </div>
                <div data-aos="zoom-out-up" data-aos-duration="3000" class="col-md-5  card2 white position-relative px-0" style="height:370px">
                    <img src="{{asset('images/admin_panelcsu.png')}}" style="height: 100%; width: 100%; border-radius: 20px; object-fit: cover;"></img>
                    <a href="https://csumanage.chalksnboard.com/" style="text-decoration:none;color:inherit">
                        <div class="overlay position-absolute overlay position-absolute  d-flex flex-column justify-content-center px-2 p-md-5">
                            <p class="text-center ">CSU ADMIN PANEL</p>
                            The CSU admin panel is a comprehensive management interface designed for efficient handling of course and fee systems.
                            <p class="text-center mt-5">
                                <i class="fa-solid fa-square-arrow-up-right" style="color: #B197FC;font-size:3rem"></i>
                            </p>

                        </div>
                    </a>


                </div>

            </div>
            <div class="row d-flex justify-content-between p-1 mx-3 mt-3">
                <div data-aos="zoom-out-up" data-aos-duration="3000" class="col-md-5  card2 white px-0 position-relative" style="height:370px">
                    <img src="{{asset('images/portfolio.jpg')}}" style="height: 100%; width: 100%; border-radius: 20px; object-fit: cover;"></img>
                    <a href="https://portfolio-374a4.web.app/" style="text-decoration:none;color:inherit">
                        <div class="overlay position-absolute overlay position-absolute  d-flex flex-column justify-content-center px-2 p-md-5">
                            <p class="text-center ">OLD PORTFOLIO</p>

                            I created an old portfolio website using HTML, CSS, and JavaScript, designed to be fully responsive and provide an optimal user experience across all devices.
                            <p class="text-center mt-5">
                                <i class="fa-solid fa-square-arrow-up-right" style="color: #B197FC;font-size:3rem"></i>
                            </p>

                        </div>
                    </a>

                </div>
                <div data-aos="zoom-out-up" data-aos-duration="3000" class="col-md-5  card2 white position-relative px-0" style="height:370px">
                    <img src="{{asset('images/movie.jpg')}}" style="height: 100%; width: 100%; border-radius: 20px; object-fit: cover;"></img>
                    <a href="https://movieapp-9a3b4.web.app/" style="text-decoration:none;color:inherit">
                        <div class="overlay position-absolute overlay position-absolute  d-flex flex-column justify-content-center px-2 p-md-5">
                            <p class="text-center ">Movie App</p>
                            I built a Movie App in React where users can browse movies and watch their trailers via YouTube integration for a seamless experience.
                            <p class="text-center mt-5">
                                <i class="fa-solid fa-square-arrow-up-right" style="color: #B197FC;font-size:3rem"></i>
                            </p>

                        </div>
                    </a>


                </div>

            </div>


        </div>

    </div>
    <div class="background5">
        <h1 data-aos="fade-right"
            data-aos-duration="1000" class="white text-center inter bold py-5" style="font-size:2rem">Contact <span style="color:#0080FF">Me ?</span> </h1>
        <div class="container">
            <div class="row px-3 pb-md-5">

                <div data-aos="fade-right" data-aos-duration="2000" class="col-md-6  white me-md-5 p-5" style="background-color:white;border-radius:12px">
                    <h4 class="white text-dark inter">Get In touch</h4>
                    <form id="formsubmit">
                        <div class="row">

                            <div class="col-md-6 white">

                                <p class="black mb-0">First Name</p>
                                <input class="w-100  px-3 py-2 outlinenone" placeholder="enter your first name" required>


                            </div>
                            <div class="col-md-6 white">
                                <p class="black mb-0">Email</p>
                                <input class="w-100  px-3 py-2 outlinenone" placeholder="enter your mail" required>
                            </div>

                        </div>
                        <div class="row mt-md-3 ">
                            <div class="col-md-12 white">

                                <p class="black mb-0">Subject</p>
                                <input class="w-100 px-3 py-2 outlinenone" placeholder="enter the subject" required>


                            </div>


                        </div>
                        <div class="row mt-md-3 ">
                            <div class="col-md-12 white">

                                <p class="text-dark mb-0">Message</p>
                                <textarea class="w-100 px-3  py-2 outlinenone" style="height:200px" placeholder="enter your Message" required></textarea>



                            </div>


                        </div>
                        <div>
                            <button class="btn btn-primary px-5 py-2 mt-3 download_button" style="border-radius:12px">SEND</button>
                        </div>



                </div>
                </form>
                <div data-aos="fade-left" data-aos-duration="2000" class="col-md-5 mt-5 mt-md-0  white px-3 p-md-5">
                    <div class="row">
                        <div class="col-md-12 d-flex   " style="border-radius:10px">
                            <div class="me-3 bg-warning justify-content-center align-content-center px-4 py-2" style="border-radius:12px">
                                <i class="fa-solid fa-phone" style="font-size:1.5rem"></i>
                            </div>

                            <div>
                                <p class="mb-0">Phone</p>
                                <p>+91 7754093527</p>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mt-5" style="border-radius:10px">
                            <div class="me-3  justify-content-center align-content-center px-4 icon_height " style="border-radius:12px;background-color:#74C0FC">
                                <i class="fa-solid fa-envelope" style="font-size:1.5rem"></i>
                            </div>

                            <div>
                                <p class="mb-0">Email</p>
                                <p class="text-break">rohitsinghsuriyal@gmial.com</p>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mt-5   " style="border-radius:10px">
                            <div class="me-3  icon_height justify-content-center align-content-center px-4 py-2" style="border-radius:12px;background-color:#B197F6">
                                <i class="fa-brands fa-linkedin" style="font-size:1.5rem"></i>
                            </div>

                            <div>
                                <p class="mb-0">Email</p>
                                <p class="text-break">rohitsinghsuriyal@gmial.com</p>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex mt-5   " style="border-radius:10px">
                            <div class="me-3 icon_height justify-content-center align-content-center px-4 py-2" style="border-radius:12px;background-color:#63E6BE">
                                <i class="fa-brands fa-github" style="font-size:1.5rem"></i>
                            </div>

                            <div>
                                <p class="mb-0">Email</p>
                                <p class="text-break">rohitsinghsuriyal@gmial.com</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>



    </div>
</div>

<script>
    $("#formsubmit").on("submit", function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Success!',
            text: 'Your Message was successfully sent...!!!',
            icon: 'success',
            confirmButtonText: 'OK'
        });
        $("#formsubmit")[0].reset();
    })

    function toggleContent(button) {
        const extraContent = button.previousElementSibling;
        const isExpanded = extraContent.style.display === 'block';

        extraContent.style.display = isExpanded ? 'none' : 'block';
        button.textContent = isExpanded ? 'Read More' : 'Read Less';
    }
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButtons = document.querySelectorAll('.toggle-button');

        toggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Find the parent  and then locate the .more-text span within it
                const card = this.closest('.card');
                const moreText = card.querySelector('.more-text');

                if (moreText) {
                    // Toggle display and button text
                    if (moreText.style.display === "none" || moreText.style.display === "") {
                        moreText.style.display = "inline";
                        this.textContent = "Read Less";
                    } else {
                        moreText.style.display = "none";
                        this.textContent = "Read More";
                    }
                }
            });
        });
    });
</script>



@include("layouts.footer")