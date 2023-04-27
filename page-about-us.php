<?php

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package parkland-theme

?>

<?php get_header(); ?>

<div class="about-us-top-banner">
<div class="about-us-banner-image" >
    <h1 class="top-of-page-banner-text" >ABOUT <img src="/wp-content/themes/parkland-theme/images/banner-underline.png" alt="styled brush stroke"></h1>
</div>
</div>


<div class="about-us-container">
<div class="ptc-video">
    <video width="1280" height="auto" controls loop autoplay muted>
        <source src="/wp-content/themes/parkland-theme/images/ptc-video.mp4" type="video/mp4">
    </video>

</div>

<div class="about-us-section"  id="about-us">
    <h2>Brief history of Parkland Tai Chi<img src="/wp-content/themes/parkland-theme/images/brush-vector-1.svg" alt="styled brush stroke"></h2>

    <div class="about-us-section-intro">

        <div class="about-us-section-image">
            <image><img src="/wp-content/themes/parkland-theme/images/ptc-about-us-section-image.jpg" alt="photo of tai chi class"></image>
        </div>

        <div class="about-us-section-written-content">
            <p>
            A non-profit organization to promote health and longevity. Our mandate is to empower people to take charge of their entire wellbeing by providing expert personalized instruction in a supportive environment.
            </p>
            <p>
            Our goal of “health for life” provides the backbone of our organization.As a root system, Earlier Heaven Tai Chi is designed to affect the source of the “dis-ease”, over and above symptoms.
            </p>
            <p>
                Committed practitioners therefore experience results which are long term.
                Our senior instructors are leaders in this discipline. All have more than 20 years teaching
                experience and, following a tradition of Earlier Heaven Tai Chi initiates have achieved the internal level of “Return to the Origin”.
            </p>
            <p>
                Our classes are designed to provided maximum benefit to members. Limited class size and the
                availability of extra practice times accomplish this.The result is personalized one on one expert training. Members also enjoy the benefits of the knowledge and support of their fellow students
            </p>
        </div>
    </div>
</div>

<div class="contact-info-section">
    <div class="about-contact-info">
        <h2>Parkland Contact Information</h2>
        <ul>
            <li><span>Our Studio is located at:</span></li>
            <li>Center 16 Building</li>
            <li>Suite 205, 95 McLeod Avenue</li>
            <li>Spruce Grove, Alberta</li>
            <li><a href="tel:+1780-982-3033">(780) 982-3033</a></li>
            <li><a href="tel:+1780-940-0381">(780) 940-0381</a></li>
        </ul>
    </div>
    
    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1185.4165046320666!2d-113.91222073598198!3d53.542895833042174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x539f8ef6b54a508d%3A0x69465565d685ae47!2sParkland%20Tai%20Chi%20Association!5e0!3m2!1sen!2sca!4v1678395661040!5m2!1sen!2sca" width="600" height="500" style="border: 1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<div class="faq-container" id="faq" >
    <h2>FAQ</h2>
    <div class="about-us-faq"  >
            <div class="faq-item">
                <h4>I'm in my mid 60's, is it too late to reap the benefits from Tai Chi?</h4>
                <p>Not too late at all, many people start at that age.</p>
            </div>
            <div class="faq-item">
                <h4>Approximately how long does it take to learn Tai Chi?</h4>
                <p>As a beginner, about 4 to 5 months with classes 2 times per week to learn the full set of movements. Then you can enjoy intermediate classes.</p>
            </div>
            <div class="faq-item">
                <h4>What happens after I learn 108 Moves/The Set, do I actually know Tai Chi?</h4>
                <p>Once you learn the sequence of movements, you will have the tools to further learn about Tai Chi.</p>
            </div>
            <div class="faq-item">
                <h4>How long are classes? How frequent are they?</h4>
                <p>Classes are 25 minutes in duration and each class is offered multiple times per week.</p>
            </div>
            <div class="faq-item">
                <h4>Will I be building muscle when I practice Tai Chi?</h4>
                <p>We train the muscle to support a balanced skeleton.</p>
            </div>
            <div class="faq-item">
                <h4>Do I need any special clothing for Tai Chi classes?</h4>
                <p>No, just some loose fitting pants and a t-shirt with flat indoor shoes.</p>
            </div>
            <div class="faq-item">
                <h4>Can I do Tai Chi in bare feet?</h4>
                <p>It is not recommended. Your feet should be supported to ensure balance and a strong structure.</p>
            </div>
            <div class="faq-item">
                <h4>What does it mean to be non-profit?</h4>
                <p>In our organization, this means that we are volunteers and we pay no salaries. We pay for rent, sundries and occasional expenses. We are 100% volunteer based with our senior instructors having 20 to 40 years of experience.
                </p>
            </div>
    </div>
</div>
</div>

<?php get_footer(); ?>