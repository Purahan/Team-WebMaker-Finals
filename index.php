<?php
  include('includes/functions.php');
  page_header();
  nav_bar();
?>
  
  <!-- Main -->
  <main class="main">
    <!-- Hero -->
    <section id="hero" class="mt-5 ms-md-0 ms-5 hero text-center text-md-start">
      <div class="hero__container mt-md-1 container container--px flex">
        <div class="hero__text">
          <h1 class="hero__title">Welcome to <span class="hero__title-underline">Experimento.</span></h1>
          <p class="hero__paragraph">We are a virtual lab, here you can conduct experiments.
          </p>
          <a href="#" class="hero__cta cta cta--primary p-3">Get Started!</a>
        </div>
  
        <div class="hero__image-wrapper">
          <img src="assets/img/hero-bg.png " alt="lab" class="hero__image">
        </div>
      </div>
    </section>
  
    <!-- About -->
   <section id="about" class="about">
    <div class="about-section">
        <div class="inner-container">
            <h1 class="features__subtitle subtitle-primary">About Us</h1>
            <h2 class="features__title title-primary">Who Are We?</h2>
          <p class="features_paragraph">
          We team web maker presents you a Experimento which allows you to go deep into the ocean named science and learn in a very interactive way because we humans learn more when we do things in practical especially science but due to pandemic we can’t go to labs and perform experiment but we provide with you virtual labs, quiz to test your learning. We provide videos and details about the experiment for your reference. You can have your personal account you can perform experiment of your choice.
          </p>
          
        </div>
      </div>
      </section>
    <!-- Features -->
    <section id="features" class="features">
      <div class="features__container container container--px">
        <div class="features__text">
          <h1 class="features__subtitle subtitle-primary">Features</h1>
          <h2 class="features__title title-primary">What we are Offering?</h2>
          <p class="features__paragraph">
            Features and Services of our Virtual Lab.
          </p>
        </div>
  
        <div class="features__wrapper">
          <div class="features__feature feature--1">
            <div class="feature__icon-wrapper flex">
              <svg class="feature__icon" viewBox="0 0 39 39" aria-hidden="true" focusable='false'>
                <path d="M2 21.4444H37M15.125 29.2222L13.6667 35.0556L11.7222 37H27.2778L25.3333 35.0556L23.875 29.2222H15.125ZM5.88889 29.2222H33.1111C34.1425 29.2222 35.1317 28.8125 35.861 28.0832C36.5903 27.3539 37 26.3647 37 25.3333V5.88889C37 4.85749 36.5903 3.86834 35.861 3.13903C35.1317 2.40972 34.1425 2 33.1111 2H5.88889C4.85749 2 3.86834 2.40972 3.13903 3.13903C2.40972 3.86834 2 4.85749 2 5.88889V25.3333C2 26.3647 2.40972 27.3539 3.13903 28.0832C3.86834 28.8125 4.85749 29.2222 5.88889 29.2222Z" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
  
            <h3 class="feature__title">Interactive</h3>
            <p class="feature__paragraph">
              All of the experiments are fully Interactive.
            </p>
          </div>
  
          <div class="features__feature feature--2">
            <div class="feature__icon-wrapper flex">
              <svg class="feature__icon" viewBox="0 0 39 39" aria-hidden="true" focusable='false'>
                <path d="M22.6749 10.8681C21.9916 10.8681 21.3236 11.0707 20.7555 11.4504C20.1874 11.83 19.7446 12.3696 19.4831 13.0008C19.2216 13.6321 19.1532 14.3268 19.2865 14.9969C19.4198 15.6671 19.7488 16.2827 20.232 16.7659C20.6337 17.1676 21.1283 17.4641 21.672 17.629C22.2157 17.794 22.7917 17.8223 23.3489 17.7114C23.9062 17.6006 24.4275 17.354 24.8667 16.9936C25.3059 16.6331 25.6494 16.17 25.8668 15.6451C26.0842 15.1201 26.1688 14.5497 26.1131 13.9843C26.0575 13.4189 25.8632 12.8759 25.5475 12.4035C25.2319 11.9311 24.8046 11.5438 24.3035 11.276C23.8024 11.0082 23.243 10.8681 22.6749 10.8681ZM23.8473 15.5043C23.6942 15.6685 23.5097 15.8003 23.3046 15.8916C23.0996 15.983 22.8782 16.0321 22.6537 16.0361C22.4293 16.04 22.2063 15.9988 21.9982 15.9147C21.79 15.8306 21.6009 15.7055 21.4422 15.5467C21.2834 15.388 21.1583 15.1989 21.0742 14.9907C20.9901 14.7826 20.9489 14.5596 20.9528 14.3352C20.9568 14.1107 21.0059 13.8893 21.0973 13.6843C21.1886 13.4792 21.3204 13.2947 21.4846 13.1416C21.8041 12.8392 22.2278 12.6714 22.6677 12.6731C23.1077 12.6748 23.5301 12.8457 23.8473 13.1505C24.1603 13.464 24.3362 13.8889 24.3362 14.3319C24.3362 14.7749 24.1603 15.1998 23.8473 15.5132V15.5043Z"  stroke-width="0.5"/>
                <path d="M5.94897 29.7872L2.52087 33.2109C2.35298 33.3787 2.25867 33.6064 2.25867 33.8439C2.25867 34.0813 2.35298 34.309 2.52087 34.4769C2.68876 34.6448 2.91646 34.7391 3.15389 34.7391C3.39132 34.7391 3.61902 34.6448 3.7869 34.4769L7.215 31.0488C7.3823 30.8815 7.47628 30.6546 7.47628 30.418C7.47628 30.1814 7.3823 29.9545 7.215 29.7872C7.04771 29.6199 6.82081 29.5259 6.58421 29.5259C6.34762 29.5259 6.12072 29.6199 5.95343 29.7872H5.94897Z"  stroke-width="0.5"/>
                <path d="M35.7363 1.26139C35.6399 1.16492 35.5227 1.09185 35.3936 1.0478C35.2646 1.00374 35.1271 0.989887 34.9919 1.00729L26.4149 2.05935C25.2342 2.20954 24.1367 2.74733 23.2944 3.58839L20.5618 6.32106L15.939 6.01793C14.3202 5.90167 12.7203 6.42326 11.4811 7.47119L5.09743 12.8429C4.97512 12.9464 4.88297 13.081 4.83067 13.2325C4.77838 13.384 4.76787 13.5467 4.80026 13.7037C4.83266 13.8606 4.90674 14.0059 5.01474 14.1243C5.12273 14.2427 5.26063 14.3298 5.41394 14.3764L10.8525 16.0125L9.13626 17.751C9.05336 17.8338 8.9876 17.9322 8.94273 18.0404C8.89786 18.1486 8.87477 18.2647 8.87477 18.3818C8.87477 18.499 8.89786 18.615 8.94273 18.7232C8.9876 18.8315 9.05336 18.9298 9.13626 19.0126L9.35915 19.2355L6.60419 20.7289C6.3008 20.8953 6.04032 21.1301 5.8434 21.4146C5.64647 21.6992 5.5185 22.0257 5.46962 22.3683C5.42075 22.7108 5.4523 23.0601 5.5618 23.3883C5.67129 23.7166 5.85571 24.0149 6.10045 24.2595L12.7293 30.8973C13.1452 31.3145 13.7094 31.5501 14.2985 31.5526C14.4058 31.5527 14.5131 31.5452 14.6194 31.5303C14.964 31.4827 15.2926 31.355 15.579 31.1576C15.8654 30.9603 16.1017 30.6986 16.2688 30.3935L17.7711 27.6564L17.994 27.8793C18.0768 27.9622 18.1752 28.028 18.2834 28.0728C18.3916 28.1177 18.5077 28.1408 18.6248 28.1408C18.742 28.1408 18.858 28.1177 18.9662 28.0728C19.0745 28.028 19.1728 27.9622 19.2556 27.8793L20.9897 26.1452L22.6258 31.5838C22.6722 31.7374 22.7592 31.8757 22.8777 31.9839C22.9962 32.0922 23.1417 32.1665 23.2989 32.199C23.3597 32.2052 23.4209 32.2052 23.4817 32.199C23.6115 32.1991 23.7399 32.1708 23.8577 32.1161C23.9755 32.0615 24.0799 31.9817 24.1637 31.8825L29.5399 25.5077C30.5883 24.2688 31.1099 22.6686 30.9932 21.0499L30.6767 16.436L33.4093 13.7033C34.2488 12.8604 34.7849 11.763 34.9339 10.5828L35.9904 2.00585C36.0078 1.87059 35.994 1.73314 35.9499 1.60408C35.9059 1.47502 35.8328 1.35778 35.7363 1.26139ZM7.50468 13.1505L12.6357 8.82193C13.5252 8.08059 14.6683 7.71447 15.8231 7.80107L18.8856 8.01059L12.288 14.5859L7.50468 13.1505ZM14.6952 29.5332C14.662 29.5937 14.6153 29.6456 14.5586 29.685C14.5019 29.7243 14.4369 29.75 14.3686 29.7599C14.3003 29.7698 14.2307 29.7638 14.1651 29.7422C14.0996 29.7207 14.0399 29.6842 13.9909 29.6357L7.35311 23.0069C7.30459 22.9578 7.26812 22.8982 7.24656 22.8326C7.22501 22.7671 7.21896 22.6974 7.2289 22.6291C7.23884 22.5609 7.26449 22.4958 7.30384 22.4391C7.34318 22.3825 7.39515 22.3357 7.45564 22.3025L10.6475 20.5506L16.4427 26.3458L14.6952 29.5332ZM29.1966 21.1747C29.276 22.3288 28.9035 23.4685 28.158 24.3531L23.8472 29.493L22.4118 24.7098L29.005 18.1166L29.1966 21.1747ZM33.1463 10.3599C33.0496 11.1492 32.6918 11.8835 32.1299 12.4462L18.6181 25.9847L11.013 18.3796L24.5426 4.84997C25.1053 4.28805 25.8396 3.9303 26.6289 3.83358L34.1003 2.89742L33.1463 10.3599Z"  stroke-width="0.5"/>
                <path d="M6.93408 35.7385C7.01689 35.8214 7.11522 35.8871 7.22345 35.932C7.33169 35.9769 7.4477 36 7.56487 36C7.68204 36 7.79805 35.9769 7.90629 35.932C8.01453 35.8871 8.11286 35.8214 8.19566 35.7385L10.0278 33.884C10.1951 33.7167 10.2891 33.4898 10.2891 33.2532C10.2891 33.0166 10.1951 32.7897 10.0278 32.6224C9.86055 32.4551 9.63364 32.3611 9.39705 32.3611C9.16046 32.3611 8.93356 32.4551 8.76627 32.6224L6.91179 34.4769C6.83034 34.5612 6.76631 34.6606 6.72334 34.7697C6.68037 34.8787 6.65932 34.9951 6.66139 35.1123C6.66346 35.2295 6.68861 35.3451 6.7354 35.4525C6.78219 35.56 6.84971 35.6571 6.93408 35.7385Z"  stroke-width="0.5"/>
                <path d="M1.88783 30.3267C2.12391 30.3257 2.34995 30.2311 2.51639 30.0637L4.37086 28.2092C4.49845 28.0366 4.55948 27.8237 4.54276 27.6098C4.52603 27.3958 4.43267 27.195 4.27981 27.0443C4.12696 26.8936 3.92487 26.8031 3.71066 26.7895C3.49646 26.7758 3.28451 26.8399 3.11374 26.9699L1.25927 28.8244C1.13534 28.9491 1.05102 29.1076 1.01693 29.28C0.982835 29.4525 1.00048 29.6312 1.06766 29.7936C1.13483 29.9561 1.24853 30.0951 1.39446 30.1931C1.54039 30.2911 1.71204 30.3438 1.88783 30.3445V30.3267Z"  stroke-width="0.5"/>
              </svg>
            </div>
  
            <h3 class="feature__title">Speed</h3>
            <p class="feature__paragraph">
              Our website is fast and easy to use.
            </p>
          </div>
  
          <div class="features__feature feature--3">
            <div class="feature__icon-wrapper flex">
              <svg class="feature__icon" viewBox="0 0 39 39" aria-hidden="true" focusable='false'>
                <path d="M23.3889 15.6111H32.6522C33.315 15.6111 33.9668 15.7806 34.5457 16.1033C35.1246 16.426 35.6115 16.8914 35.96 17.4552C36.3085 18.0189 36.5071 18.6624 36.537 19.3245C36.5669 19.9867 36.4271 20.6454 36.1308 21.2383L29.3253 34.8494C29.0022 35.4959 28.5055 36.0396 27.8907 36.4194C27.2759 36.7993 26.5674 37.0003 25.8447 37H18.0339C17.7169 37 17.4 36.9611 17.0908 36.8833L9.77778 35.0556M23.3889 15.6111V5.88889C23.3889 4.85749 22.9792 3.86834 22.2499 3.13903C21.5206 2.40972 20.5314 2 19.5 2H19.3153C18.3431 2 17.5556 2.7875 17.5556 3.75972C17.5556 5.14806 17.1453 6.50528 16.3733 7.66028L9.77778 17.5556V35.0556M23.3889 15.6111H19.5M9.77778 35.0556H5.88889C4.85749 35.0556 3.86834 34.6458 3.13903 33.9165C2.40972 33.1872 2 32.1981 2 31.1667V19.5C2 18.4686 2.40972 17.4794 3.13903 16.7501C3.86834 16.0208 4.85749 15.6111 5.88889 15.6111H10.75" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3 class="feature__title">Safe and Trustworthy</h3>
            <p class="feature__paragraph">
              Our Website is completely safe so, you can trust us.
            </p>
          </div>
  
          <div class="features__feature feature--4">
            <div class="feature__icon-wrapper flex">
              <svg class="feature__icon" viewBox="0 0 31 39" aria-hidden="true" focusable='false'>
                <path d="M9.77778 29.2222V25.3333M15.6111 29.2222V21.4444M21.4444 29.2222V17.5556M25.3333 37H5.88889C4.85749 37 3.86834 36.5903 3.13903 35.861C2.40972 35.1317 2 34.1425 2 33.1111V5.88889C2 4.85749 2.40972 3.86834 3.13903 3.13903C3.86834 2.40972 4.85749 2 5.88889 2H16.7506C17.2662 2.00011 17.7607 2.20504 18.1253 2.56972L28.6525 13.0969C29.0172 13.4615 29.2221 13.956 29.2222 14.4717V33.1111C29.2222 34.1425 28.8125 35.1317 28.0832 35.861C27.3539 36.5903 26.3647 37 25.3333 37Z" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3 class="feature__title">Always and Everywhere</h3>
            <p class="feature__paragraph">
              You can use this virtual lab 24/7 and wherever you are.
            </p>
          </div>
        </div>
      </div>
    </section>
  

    <!-- Testimonial -->
    <section id="testimonial" class="testimonial">
      <div class="testimonial__container container container--px">
        <div class="testimonial__header flex">
          <div class="testimonial__text">
            <h1 class="subtitle-primary">Testimonial</h1>
            <h2 class="title-primary">What are they saying?</h2>
          </div>
  
          <div class="testimonial__controls flex">
            <button type="button" id="sliderPrevBtn" class="testimonials__prev cta cta--btn cta--btn_gray disabled" aria-label="Previous testimonial">
              <svg class="cta--btn-icon" viewBox="0 0 14 11" aria-hidden="true" focusable='false'>
                <path d="M13 5.5L1 5.5M1 5.5L5.5 10M1 5.5L5.5 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
  
            <button type="button" id="sliderNextBtn" class="testimonials__next cta cta--btn cta--btn_yellow" aria-label="Next testimonial">
              <svg class="cta--btn-icon" viewBox="0 0 14 11" aria-hidden="true" focusable='false'>
                <path d="M1 5.5L13 5.5M13 5.5L8.5 1M13 5.5L8.5 10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
        </div>
  
        <div class="testimonial__wrapper">
          <div id="sliderArea" class="testimonial__slider flex">
            <div class="testimonial__slide">
              <div class="testimonial__slide-header flex">
                <div class="testimonial__slide-data flex">
                  <img src="https://img.freepik.com/free-photo/portrait-white-man-isolated_53876-40306.jpg?size=626&ext=jpg" alt="testimonial user avatar" class="testimonial__slide-img">
                  <div class="testimonial__slide-info">
                    <h3 class="testimonial__slide-name">Bill Clinton</h3>
                    <span class="testimonial__slide-subtitle">Physicist</span>
                  </div>
                </div>
  
             
              </div>
  
              <div class="testimonial__slide-body">
                <p class="testimonial__slide-description">
                  I like this website not because it’s free but the content it provides like details of experiment, videos for reference or for help to perform experiment.
                </p>
              </div>
            </div>
  
            <div class="testimonial__slide">
              <div class="testimonial__slide-header flex">
                <div class="testimonial__slide-data flex">
                  <img src="https://www.photographers.ch/wp/wp-content/uploads/2016/01/PW_151015_001-farbe.jpg" alt="testimonial user avatar" class="testimonial__slide-img">
                  <div class="testimonial__slide-info">
                    <h3 class="testimonial__slide-name">George Bush</h3>
                    <span class="testimonial__slide-subtitle">Mathematician</span>
                  </div>
                </div>
  
              </div>
  
              <div class="testimonial__slide-body">
                <p class="testimonial__slide-description">
                  It’s out of the box website with experiments to perform and details about it, videos.
                </p>
              </div>
            </div>

            <div class="testimonial__slide">
                <div class="testimonial__slide-header flex">
                  <div class="testimonial__slide-data flex">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cG9ydHJhaXR8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80" alt="testimonial user avatar" class="testimonial__slide-img">
                    <div class="testimonial__slide-info">
                      <h3 class="testimonial__slide-name">Astrid Shen</h3>
                      <span class="testimonial__slide-subtitle">Biologist</span>
                    </div>
                  </div>
    
              
                </div>
    
                <div class="testimonial__slide-body">
                  <p class="testimonial__slide-description">
                    I am addicted to this website because it helps me convert my nightmare subject science into my most favorite.
                  </p>
                </div>
              </div>
  
            <div class="testimonial__slide">
              <div class="testimonial__slide-header flex">
                <div class="testimonial__slide-data flex">
                  <img src="https://you.stonybrook.edu/xinyhe/files/2016/03/maxresdefault-1ilft0i.jpg" alt="testimonial user avatar" class="testimonial__slide-img">
                  <div class="testimonial__slide-info">
                    <h3 class="testimonial__slide-name">Bille Ellish</h3>
                    <span class="testimonial__slide-subtitle">Chemist</span>
                  </div>
                </div>

                
  
                
              </div>
  
              <div class="testimonial__slide-body">
                <p class="testimonial__slide-description">
                  It perfectly analysis the need of the people and place down in this masterpiece at no cost. My favorite part is Quiz as it tell me my mistakes and so I can improve and show the improvement in real time studies.
                </p>
              </div>
            </div>
          </div>
        </div>
        
  
        
      </div>
    </section>
  
    <!-- Team -->
    <section class="team">
      <div class="team__container container container--px">
        <div class="team__text">
          <h1 class="subtitle-primary">Team</h1>
          <h2 class="title-primary">Meet our team</h2>
        </div>
  
        <div class="team__wrapper">
          <div class="team__member member member--1">
            <img src="https://www.nicepng.com/png/detail/144-1446162_pin-businessman-clipart-png-flat-user-icon.png" alt="team member avatar" class="member__image" loading="lazy">
  
            <div class="member__info">
              <h3 class="member__title">Purahan Gupta</h3>
              <span class="member__designation">Manager, Frontend Handler, Backend Handler, Made experiments, designed Profile page</span>
            </div>
          </div>
  
          <div class="team__member member member--2">
            <img src="https://www.nicepng.com/png/detail/144-1446162_pin-businessman-clipart-png-flat-user-icon.png" alt="team member avatar" class="member__image" loading="lazy">
  
            <div class="member__info">
              <h3 class="member__title">Navjot Singh Aulakh</h3>
              <span class="member__designation">Frontend Handler, designed experiments list page</span>
            </div>
          </div>
  
          <div class="team__member member member--3">
            <img src="https://www.nicepng.com/png/detail/144-1446162_pin-businessman-clipart-png-flat-user-icon.png" alt="team member avatar" class="member__image" loading="lazy">
  
            <div class="member__info">
              <h3 class="member__title">Rishabh Tandon</h3>
              <span class="member__designation">Manager, Frontend Handler, Made Experiments, designed home page</span>
            </div>
          </div>
        </div>
  
    
      </div>
    </section>

    <section id="support" class="bg-white container-fluid">
      <div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="row justify-content-center">
                <div class="testimonial__text">
                  <h1 class="subtitle-primary">Support</h1>
                  <h2 class="title-primary">Let's talk about everything!</h2>
                </div>
                <div class="col-md-6">
                  <p>Please contact us to give us any suggestions, report any kind of problem faced by you, and ask any doubt related to our website we will always be there.</p>
                  <p>
                    <script data-pagespeed-no-defer>
                      ![CDATA[
                          (function() {
                            for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                              }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                              var m = k[l];
                              m in h || (h[m] = {});
                              h = h[m]
                            }
                            var n = k[k.length - 1],
                              p = h[n],
                              q = p ? p : function(b) {
                                var c;
                                if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                c = this + "";
                                if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                b |= 0;
                                for (var a = ""; b;)
                                  if (b & 1 && (a += c), b >>>= 1) c += c;
                                return a
                              };
                            q != p && null != q && g(h, n, {
                              configurable: !0,
                              writable: !0,
                              value: q
                            });
                            var t = this;

                            function u(b, c) {
                              var a = b.split("."),
                                d = t;
                              a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                              for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                            };

                            function v(b) {
                              var c = b.length;
                              if (0 < c) {
                                for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                return a
                              }
                              return []
                            };

                            function w(b) {
                              var c = window;
                              if (c.addEventListener) c.addEventListener("load", b, !1);
                              else if (c.attachEvent) c.attachEvent("onload", b);
                              else {
                                var a = c.onload;
                                c.onload = function() {
                                  b.call(this);
                                  a && a.call(this)
                                }
                              }
                            };
                            var x;

                            function y(b, c, a, d, e) {
                              this.h = b;
                              this.j = c;
                              this.l = a;
                              this.f = e;
                              this.g = {
                                height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                              };
                              this.i = d;
                              this.b = {};
                              this.a = [];
                              this.c = {}
                            }

                            function z(b, c) {
                              var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                              if (a = e && !(e in b.c))
                                if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                else {
                                  d = c.getBoundingClientRect();
                                  var f = document.body;
                                  a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                  d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                  f = a.toString() + "," + d;
                                  b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                } a && (b.a.push(e), b.c[e] = !0)
                            }
                            y.prototype.checkImageForCriticality = function(b) {
                              b.getBoundingClientRect && z(this, b)
                            };
                            u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                              x.checkImageForCriticality(b)
                            });
                            u("pagespeed.CriticalImages.checkCriticalImages", function() {
                              A(x)
                            });

                            function A(b) {
                              b.b = {};
                              for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                              if (a.length && a[0].getBoundingClientRect) {
                                for (d = 0; c = a[d]; ++d) z(b, c);
                                a = "oh=" + b.l;
                                b.f && (a += "&n=" + b.f);
                                if (c = !!b.a.length)
                                  for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                    var e = "," + encodeURIComponent(b.a[d]);
                                    131072 >= a.length + e.length && (a += e)
                                  }
                                b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                C = a;
                                if (c) {
                                  d = b.h;
                                  b = b.j;
                                  var f;
                                  if (window.XMLHttpRequest) f = new XMLHttpRequest;
                                  else if (window.ActiveXObject) try {
                                    f = new ActiveXObject("Msxml2.XMLHTTP")
                                  } catch (r) {
                                    try {
                                      f = new ActiveXObject("Microsoft.XMLHTTP")
                                    } catch (D) {}
                                  }
                                  f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                }
                              }
                            }

                            function B() {
                              var b = {},
                                c;
                              c = document.getElementsByTagName("IMG");
                              if (!c.length) return {};
                              var a = c[0];
                              if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                              for (var d = 0; a = c[d]; ++d) {
                                var e = a.getAttribute("data-pagespeed-url-hash");
                                e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                  rw: a.width,
                                  rh: a.height,
                                  ow: a.naturalWidth,
                                  oh: a.naturalHeight
                                })
                              }
                              return b
                            }
                            var C = "";
                            u("pagespeed.CriticalImages.getBeaconData", function() {
                              return C
                            });
                            u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                              var r = new y(b, c, a, e, f);
                              x = r;
                              d && w(function() {
                                window.setTimeout(function() {
                                  A(r)
                                }, 0)
                              })
                            });
                          })(); pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'https://preview.colorlib.com/theme/bootstrap/contact-form-16/', '-ilGEe-FWC', true, false, 'THmFphKNhmk');
                          ]]>
                    </script><img src="assets/img/contact.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="827056895" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                  </p>
                </div><div class="col-md-6"><form class="mb-5" method="post" id="contactForm" name="contactForm">
                    <div class="row mb-2">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-md-12 form-group">
                        <textarea class="form-control" name="message" id="message" placeholder="Write your message"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                        <span class="submitting"></span>
                      </div>
                    </div>
                  </form>
                  <div id="form-message-warning mt-4"></div>
                  <div id="form-message-success"> Your message was sent, thank you! </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php page_footer(); ?>