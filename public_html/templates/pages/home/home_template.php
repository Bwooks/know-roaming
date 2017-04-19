<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href=<?php echo TMP_ROOT, "styles/pages/home/home.css"?> rel="stylesheet">
        <link href=<?php echo TMP_ROOT, "styles/common.css"?> rel="stylesheet" type = "text/css">
        <script src = <?php echo TMP_ROOT, "js/helper.js" ?> type = "text/javascript"></script>
        <script src = <?php echo TMP_ROOT, "js/handlers.js" ?> type = "text/javascript"></script>
        <script src = <?php echo TMP_ROOT, "js/events.js" ?> type = "text/javascript"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
</head>
    <body>
        <?php include 'header.php'; ?>
        <main>
            <section id = "about-us">
                <h2>ABOUT US</h2>
                <blockquote cite="https://www.knowroaming.com">
                    <div>
                        The smoothest [roaming] solution is KnowRoaming’s international SIM “sticker,” 
                        which you attach to your current SIM card, magically turning it into two. 
                        The foreign SIM activates when you land in a different country,
                        <div id = "hidden-div"></div> but you can manually flip back to your home SIM. 
                        It costs $29.95 plus usage, and rates are competitive.  
                    </div>
                </blockquote>
                <blockquote cite="https://www.knowroaming.com">
                    <div>
                        KnowRoaming is a tech company that has figured out how to make your smartphone even smarter 
                        when you travel overseas by allowing it to switch to a discounted network provider.
                    </div>
                </blockquote>
                <blockquote cite="https://www.knowroaming.com">
                    <div>
                        If you're prone to Instagramming, texting and streaming the latest YouTube video, have no fears about 
                        racking up a monumental data charge. The KnowRoaming platform operates on a top-up basis, and through the app 
                        you can monitor what you spend and add money to your account as needed.
                    </div>
                </blockquote>
            </section>
            <section id = "apply-now">
                <h2>APPLY NOW</h2>
                <div id = "apply-info">
                    <form id = "applyForm" action = "form.php" method = "POST">
                        <div class = "user-info">
                            <label for = "user-name">Name</label>
                            <input name = "user-email" type = "text" id = "user-name" placeholder = "John Doe"/>
                        </div>
                        <div class = "user-info">
                            <label for = "user-email">Email</label>
                            <input name = "user-email" type = "text" id = "user-email" placeholder = "jd@mail.com"/>
                        </div>
                        <div class = "user-info">
                            <label for = "user-phone">Phone</label>
                            <input name = "user-phone" type = "text" id = "user-phone" placeholder = "1234567890"/>
                        </div>
                        <div class = "user-info">
                            <label for = "user-model">Model</label>
                            <select id = "user-model" name = "user-model">
                                <option selected = "selected" value = "default">Select a Phone Model</option>
                                <option value = "canada">iPhone</option>
                                <option value = "other">Android</option>
                                <option value = "other">Other</option>
                            </select>
                        </div>
                        <div class = "user-info">
                            <label for = "user-country">Country</label>
                            <input name = "user-country" type = "text" id = "user-country" placeholder = "Canada"/>
                        </div>
                        <div class = "user-info">
                            <label for = "user-address">Address</label>
                            <input name = "user-address" type = "text" id = "user-address" placeholder = "10 Mulholland Drive"/>
                        </div>
                        
                        <div class = "user-info submit">
                            <input type = "Submit" value = "Apply Now" id = "apply-form-submit" name = "apply-form-submit"/>
                        </div>
                    </form>
                    <div id = "apply-form-message">
                        <p></p>
                    </div>
                </div>
            </section>
            <section id = "contact-us">
                <h2>CONTACT US</h2>
                <div class = "contact-info user-contact">
                    <form action =<?php echo TMP_ROOT, "pages/home/form.php" ?> id = "contactForm" method = "POST">
                        <div class = "user-info">
                            <label for = "name">Name</label>
                            <input name = "user-name" type = "text" id = "user-name" placeholder = "Your full name"/>
                        </div>
                        <div class = "user-info">
                            <label for = "email">Email</label>
                            <input name = "user-email" type = "text" id = "user-email" placeholder = "Your email address"/>
                        </div>
                        <div class = "user-info">
                            <label for = "phone-number">Phone</label>
                            <input name = "user-phone" type = "text" id = "user-phone" placeholder = "Your phone number"/>
                        </div>
                        <div class = "user-info message-text">
                            <label for = "message">Message</label>
                            <textarea name = "user-message" id = "user-message" placeholder = "Ask us anything!"></textarea>
                        </div>
                        <div class = "user-info submit">
                            <input type = "Submit" value = "Send" id = "contact-form-submit" name = "contact-form-submit" />
                        </div>
                    </form>
                    <div id = "contact-form-message">
                        <p></p>
                    </div>
                </div>
                <div class = "contact-info company-contact">
                    <div class = "company-info" id = "company-address">
                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                        <span>90 Eglinton Ave E, Toronto, ON</span>
                    </div>
                    <div class = "company-info" id = "company-phone">
                        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                        <span>+1 888-357-7347</span>
                    </div>
                    <div class = "company-info" id = "company-email">
                        <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                        <span>jobs@knowroaming.com</span>
                    </div>
                </div>
            </section>
            <div id = "form-modal">
                <p></p>
                <div id = "close-modal">Got It</div>
            </div>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>