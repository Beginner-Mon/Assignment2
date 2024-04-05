<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Jobs</title>
</head>

<body>

    <?php
    $toolid = 2;
    require_once "header.php";
    ?>
    <section class="first_window">
        <div class="job__container-1">
            <div class="job__container-1__title">
                <h1>Be a part of this community</h1>
                <p>Join us and be part of something extraordinary</p>
                <a href="#a_jobs" class="available_button">Available jobs</a>
            </div>
            <div class="job__container-1__figure">
                <!-- <figure class="img_career">
                <img src="images/career2.png" alt="Career" class="center">
            </figure> -->
            </div>
        </div>
    </section>

    <section class="second_window">
        <div class="job__container-2">
            <h1 class="job__container-2__title">why working with us</h1>
            <div class="job__container-2__content">
                <div class="job__container-2__content__benefit">
                    <h2>REWARDS AND ADVANTAGES</h2>
                    <hr>
                    <ol class="content__list__benefit">
                        <li>Competitive salary and performance bonuses.</li>
                        <li>Comprehensive health and wellness benefits.</li>
                        <li>Opportunities for growth and development.</li>
                        <li>A collaborative and innovative work environment.</li>
                    </ol>
                </div>
                <div class="job__container-2__content__location">
                    <h2>FIND YOUR PLACE WITH US</h2>
                    <hr>
                    <ul class="content__list__location">
                        <li>Diverse opportunities across the globe</li>
                        <li>Flexible Work Arrangements</li>
                        <li>Work from Anywhere</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="third_window">
        <div class="third_window_aside">
            <h1>Come build the future with us.</h1>
            <p>At Lapis, we believe in shaping tomorrow's world through innovation, collaboration, and a relentless pursuit of excellence. We're not just offering jobs; we're inviting you to join a community of forward-thinkers and change-makers who are passionate about making a difference. Here, you'll have the opportunity to unleash your creativity, challenge the status quo, and contribute to groundbreaking projects that have the potential to transform industries and improve lives. Together, let's build a future where possibilities are limitless and dreams become reality.</p>
        </div>
    </section>

    <main class="job__main">
        <h1 id="a_jobs">Available jobs</h1>
        <div class="job_detail">
            <input type="checkbox" id="check1">
            <div class="job_detail_title">
                <h2 class="job_detail_title_name">AI Engineer</h2>
                <h2 class="job_id">ID: AIE01</h2>
            </div>
            <p><strong><i class="fa-solid fa-location-dot"></i> &nbsp;Melbourne, VIC, AUS</strong></p><br>
            <div class="job_detail_aside">
                <p>AI is growing stronger and faster than ever. Are you passionate about shaping the future with Artificial Intelligence? Join our dynamic team at Lapis as an AI Engineer!</p>
                <aside>
                    <a href="apply.php" class="aside_apply_button" target="_blank">Apply now</a>
                </aside>
            </div>
            <div class="job_detail_content1">
                <hr>
                <p class="salary"><i class="fa-solid fa-circle-dollar-to-slot"></i>&nbsp;10000-12000 USD</p>
                <h2>DESCRIPTION</h2>
                <p>Lapis is looking for an AI engineer to join our research and development team. The AI engineer will work on cutting-edge AI projects, including machine learning, natural language processing, computer vision, and robotics.</p>
                <h2>Responsibilities</h2>
                <ol>
                    <li>Develop and deploy cutting-edge machine learning models and AI algorithms.</li>
                    <li>Collaborate closely with our research and development team to design effective solutions for complex technical challenges.</li>
                    <li>Train and optimize machine learning models for real-world applications.</li>
                    <li>Ensure the seamless deployment of AI models into production environments.</li>
                </ol>
                <h2>BASIC QUALIFICATIONS</h2>
                <ul>
                    <li>Bachelor's, Master's, or Ph.D. degree in Computer Science, Artificial Intelligence, Machine Learning, or a related field.</li>
                    <li>Proven experience in developing and implementing machine learning models.</li>
                    <li>Proficiency in programming languages such as Python, Java, or C++.</li>
                    <li>Strong knowledge of machine learning frameworks like TensorFlow, PyTorch, or scikit-learn.</li>
                    <li>Excellent problem-solving skills and a keen interest in tackling complex challenges.</li>
                    <li>Effective communication skills to collaborate with diverse teams and convey technical concepts.</li>
                </ul>
                <h2>PREFERRED QUALIFICATIONS</h2>
                <ul>
                    <li>Advanced degree (Master's or Ph.D.) in Computer Science, Artificial Intelligence, or a related field.</li>
                    <li>Previous experience working on projects related to natural language processing (NLP), computer vision, or reinforcement learning.</li>
                    <li>Familiarity with cloud computing platforms (e.g., AWS, Azure, Google Cloud) and experience deploying models in a cloud environment.</li>
                    <li>Experience with big data technologies and frameworks (e.g., Hadoop, Spark).</li>
                    <li>Track record of contributing to open-source AI projects or publications in reputable conferences or journals.</li>
                </ul>
                <div class="job_detail_benefit">
                    <p><em>* Benefits/perks listed below may vary depending on the nature of your employment with Lapis and the country where you work.</em></p>
                    <div class="job_detail_benefit_list">
                        <div class="first_benefit_list">
                            <ul>
                                <li><i class="fa-solid fa-heart-pulse"></i>&nbsp;Industry leading healthcare</li>
                                <li><i class="fa-solid fa-tags"></i>&nbsp;Discounts on products and services</li>
                                <li><i class="fa-solid fa-person-breastfeeding"></i>&nbsp;Maternity and paternity leave</li>
                                <li><i class="fa-solid fa-heart"></i>&nbsp;Giving programs</li>
                            </ul>
                        </div>
                        <div class="second_benefit_list">
                            <ul>
                                <li><i class="fa-solid fa-graduation-cap"></i>&nbsp;Educational resources</li>
                                <li><i class="fa-solid fa-money-bills"></i>&nbsp;Savings and investments</li>
                                <li>&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Generous time away</li>
                                <li><i class="fa-solid fa-user-group"></i>&nbsp;Opportunities to network and connect</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="apply.php" class="aside_apply_button" target="_blank">Apply now</a>
            </div>
            <label class="Readmore" for="check1">Read more...</label>
        </div>
        <div class="job_detail">
            <input type="checkbox" id="check2">
            <div class="job_detail_title">
                <h2 class="job_detail_title_name">SERVER TECHNICIAN</h2>
                <h2 class="job_id">ID: SER15</h2>
            </div>
            <p><strong><i class="fa-solid fa-location-dot"></i> &nbsp;Perth, WA, AU</strong></p><br>
            <div class="job_detail_aside">
                <p>Server is a crucial part of a tech company. We're seeking for skilled Server Technicians to ensure the seamless operation of our server infrastructure.</p>
                <aside>
                    <a href="apply.php" class="aside_apply_button" target="_blank">Apply now</a>
                </aside>
            </div>
            <div class="job_detail_content2">
                <hr>
                <p class="salary"><i class="fa-solid fa-circle-dollar-to-slot"></i>&nbsp;4000-6000 USD</p>
                <h2>DESCRIPTION</h2>
                <p>Are you passionate about maintaining a robust and efficient server infrastructure? Join Lapis as we look for a skilled and dedicated Server Technician to play a key role in ensuring the reliability and performance of our server systems.</p>
                <h2>Responsibilities</h2>
                <ol>
                    <li>Install, configure, and maintain server hardware and software.</li>
                    <li>Monitor server performance and troubleshoot issues promptly to minimize downtime.</li>
                    <li>Collaborate with IT and development teams to optimize server efficiency and implement upgrades.</li>
                    <li>Conduct routine system audits to ensure security and compliance standards are met.</li>
                    <li>Provide technical support and resolve server-related incidents and service requests.</li>
                </ol>
                <h2>BASIC QUALIFICATIONS</h2>
                <ul>
                    <li>Proven experience as a Server Technician or in a similar role.</li>
                    <li>In-depth knowledge of server hardware, operating systems, and virtualization technologies.</li>
                    <li>Familiarity with network protocols, security measures, and best practices.</li>
                    <li>Hands-on experience with server hardware installation, maintenance, and upgrades.</li>
                    <li>Strong troubleshooting and problem-solving skills.</li>
                    <li>Excellent communication and collaboration skills within a team environment.</li>
                </ul>
                <h2>PREFERRED QUALIFICATIONS</h2>
                <ul>
                    <li>Industry certifications (e.g., CompTIA Server+, Microsoft Certified: Windows Server, etc.).</li>
                    <li>Experience with cloud platforms (e.g., AWS, Azure) and virtualization technologies.</li>
                    <li>Familiarity with scripting languages for automation (e.g., PowerShell, Bash).</li>
                    <li>Knowledge of containerization technologies (e.g., Docker).</li>
                    <li>Previous experience in data center management and optimization.</li>
                </ul>
                <div class="job_detail_benefit">
                    <p><em>* Benefits/perks listed below may vary depending on the nature of your employment with Lapis and the country where you work.</em></p>
                    <div class="job_detail_benefit_list">
                        <div class="first_benefit_list">
                            <ul>
                                <li><i class="fa-solid fa-heart-pulse"></i>&nbsp;Industry leading healthcare</li>
                                <li><i class="fa-solid fa-tags"></i>&nbsp;Discounts on products and services</li>
                                <li><i class="fa-solid fa-person-breastfeeding"></i>&nbsp;Maternity and paternity leave</li>
                                <li><i class="fa-solid fa-heart"></i>&nbsp;Giving programs</li>
                            </ul>
                        </div>
                        <div class="second_benefit_list">
                            <ul>
                                <li><i class="fa-solid fa-graduation-cap"></i>&nbsp;Educational resources</li>
                                <li><i class="fa-solid fa-money-bills"></i>&nbsp;Savings and investments</li>
                                <li>&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Generous time away</li>
                                <li><i class="fa-solid fa-user-group"></i>&nbsp;Opportunities to network and connect</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="apply.php" class="aside_apply_button" target="_blank">Apply now</a>
            </div>
            <label class="Readmore" for="check2">Read more...</label>
        </div>
        <div class="job_detail">
            <input type="checkbox" id="check3">
            <div class="job_detail_title">
                <h2 class="job_detail_title_name">QUALITY ASSURANCE TESTER</h2>
                <h2 class="job_id">ID: TES11</h2>
            </div>
            <p><strong><i class="fa-solid fa-location-dot"></i> &nbsp;Sydney, NSW, AU</strong></p> <br>
            <div class="job_detail_aside">
                <p>Are you dedicated to maintaining excellence in software product quality? Take the opportunity to join our dynamic team as a Quality Assurance Tester today!</p>
                <aside>
                <a href="apply.php" class="aside_apply_button" target="_blank">Apply now</a>
                </aside>
            </div>
            <div class="job_detail_content3">
                <hr>
                <p class="salary"><i class="fa-solid fa-circle-dollar-to-slot"></i>&nbsp;1000-1200 USD</p>
                <h2>DESCRIPTION</h2>
                <p>Are you passionate about ensuring the quality and reliability of software products? Do you have a keen eye for detail and enjoy the thrill of identifying and fixing bugs? If so, we want you on our team!</p>
                <h2>Responsibilities</h2>
                <ol>
                    <li>Conduct thorough testing of mobile applications across various devices and platforms.</li>
                    <li>Develop and execute comprehensive test plans and test cases to identify bugs and ensure functionality.</li>
                    <li>Collaborate closely with developers, product managers, and UX designers to understand requirements and user scenarios.</li>
                    <li>Perform regression testing to verify bug fixes and ensure new features meet quality standards.</li>
                    <li>Report and document issues with clarity, including steps to reproduce and severity assessments.</li>
                    <li>Participate in the continuous improvement of testing processes and methodologies. </li>
                </ol>
                <h2>BASIC QUALIFICATIONS</h2>
                <ul>
                    <li>Proven experience as an App Tester or in a similar quality assurance role.</li>
                    <li>Familiarity with mobile testing tools and frameworks.</li>
                    <li>Strong understanding of software testing methodologies and best practices.</li>
                    <li>Detail-oriented with excellent problem-solving and communication skills.</li>
                    <li>Strong troubleshooting skills.</li>
                    <li>Ability to work collaboratively in a fast-paced, dynamic environment.</li>
                </ul>
                <h2>PREFERRED QUALIFICATIONS</h2>
                <ul>
                    <li>Experience with automated testing tools and frameworks for mobile applications.</li>
                    <li>Familiarity with performance testing and security testing concepts.</li>
                    <li>Previous exposure to Agile or Scrum development methodologies.</li>
                    <li>Knowledge of the mobile app development lifecycle.</li>
                    <li>Certification in software testing (e.g., ISTQB) is a plus.</li>
                </ul>

                <div class="job_detail_benefit">
                    <p><em>* Benefits/perks listed below may vary depending on the nature of your employment with Lapis and the country where you work.</em></p>
                    <div class="job_detail_benefit_list">
                        <div class="first_benefit_list">
                            <ul>
                                <li><i class="fa-solid fa-heart-pulse"></i>&nbsp;Industry leading healthcare</li>
                                <li><i class="fa-solid fa-tags"></i>&nbsp;Discounts on products and services</li>
                                <li><i class="fa-solid fa-person-breastfeeding"></i>&nbsp;Maternity and paternity leave</li>
                                <li><i class="fa-solid fa-heart"></i>&nbsp;Giving programs</li>
                            </ul>
                        </div>
                        <div class="second_benefit_list">
                            <ul>
                                <li><i class="fa-solid fa-graduation-cap"></i>&nbsp;Educational resources</li>
                                <li><i class="fa-solid fa-money-bills"></i>&nbsp;Savings and investments</li>
                                <li>&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Generous time away</li>
                                <li><i class="fa-solid fa-user-group"></i>&nbsp;Opportunities to network and connect</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="apply.php" class="aside_apply_button" target="_blank">Apply now</a>
            </div>
            <label class="Readmore" for="check3">Read more...</label>
        </div>
    </main>


    <!-- <footer class="footer">
        <div class="footer__container">
            <div class="footer__container--row">
                <div class="footer__container--col footer__container--col--1">
                    <h4 class="footer__container--col--title">Our group</h4>
                    <ul class="footer__container--col__lists">
                        <li class="footer__container--col--name"><a href="mailto:104993925@student.swin.edu.au"
                                class="footer__container--col--name--link">Tran&nbsp;Buu&nbsp;Duc&nbsp;Tri</a>
                        </li>
                        <li class="footer__container--col--name"><a href="malito:104992981@student.swin.edu.au"
                                class="footer__container--col--name--link">Nguyen&nbsp;Duy&nbsp;Quang</a>
                        </li>
                        <li class="footer__container--col--name"><a href="mailto:104841290@student.swin.edu.au"
                                class="footer__container--col--name--link">Le&nbsp;Hac&nbsp;Du</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__container--col footer__container--col--2">
                    <h4 class="footer__container--col--title">Follow Us</h4>
                    <div class="footer__container--col--social_link">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <?php
    require_once "footer.inc";
    ?>
</body>