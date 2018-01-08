<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<section id="head" class="head sectio" >
    <div class="scroll_hidden">
        <div class="container scroll_menu">
            <ul class="menu">
                <li><a href="#head">About Service</a></li>
                <li><a href="#obzor">Market Review</a></li>
                <li><a href="#work">How it works</a></li>
                <li><a href="#proect_creator">Team</a></li>
                <li><a href="#footer">Contacts</a></li>
            </ul>
            <a href="javascript:;" class="lang">
                <?php if($user_language == 'ru') { ?>
                    <span class="display_lang">
                      <img src="img/ru.png" class="" alt="Russian" />
                  </span>
                <?php } ?>
                <?php if($user_language == 'en') { ?>
                    <span class="display_lang">
                      <img src="img/en.png" class="" alt="Usa" />
                  </span>
                <?php } ?>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <ul class="select-lang">
                <?php if($user_language == 'ru') { ?>
                    <li><a href="/en"><img src="img/en.png" class="" alt="Usa" /></a></li>
                    </span>
                <?php } ?>
                <?php if($user_language == 'en') { ?>
                    <li><a href="/ru"><img src="img/ru.png" class="" alt="Russian" /></a></li>
                    </span>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav>
                        <!-- <div id="woho">
                         <svg id="toggle-svg"  width="80px" height="80px">
                           <path id="pathA" d="M 30 40 L 70 40 C 90 40 90 75 60 85 A 40 40 0 0 1 20 20 L 80 80"/>
                           <path id="pathB" d="M 30 50 L 70 50"/>
                           <path id="pathC" d="M 70 60 L 30 60 C 10 60 10 20 40 15 A 40 38 0 1 1 20 80 L 80 20"/>
                         </svg>
                         <button id="toggle">
                         </button>
                       </div> -->
                        <div class="navbar navbar-inverse navbar-fixed-top">
                            <div class="navbar-header">
                                <button id="woho" type="button" class="navbar-toggle" data-toggle=" collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <img src="img/logo.svg" alt="">
                                </div>
                                <a href="javascript:;" class="lang_mob">
                                    <?php if($user_language == 'ru') { ?>
                                        <span class="display_lang_mob">
                              <img src="img/ru.png" class="" alt="Russian" />
                          </span>
                                    <?php } ?>
                                    <?php if($user_language == 'en') { ?>
                                        <span class="display_lang_mob">
                              <img src="img/en.png" class="" alt="Usa" />
                          </span>
                                    <?php } ?>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="select-lang-mob">
                                    <?php if($user_language == 'ru') { ?>
                                        <li><a href="/en"><img src="img/en.png" class="" alt="Usa" /></a></li>
                                    <?php } ?>
                                    <?php if($user_language == 'en') { ?>
                                        <li><a href="/ru"><img src="img/ru.png" class="" alt="Russian" /></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="mob-nav">
                            <!--  <a href="javascript:;" class="lang_mob">
                          <?php if($user_language == 'ru') { ?>
                              <span class="display_lang_mob">
                                  <img src="img/blank.gif" class="flag flag-ru " alt="Russian" />
                              </span>
                          <?php } ?>
                          <?php if($user_language == 'en') { ?>
                              <span class="display_lang_mob">
                                  <img src="img/blank.gif" class="flag flag-us" alt="Usa" />
                              </span>
                          <?php } ?>
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                      </a>
                      <ul class="select-lang-mob">
                          <?php if($user_language == 'ru') { ?>
                              <li><a href="/en"><img src="img/blank.gif" class="flag flag-us" alt="Usa" /></a></li>
                          <?php } ?>
                          <?php if($user_language == 'en') { ?>
                              <li><a href="/ru"><img src="img/blank.gif" class="flag flag-ru" alt="Russian" /></a></li>
                          <?php } ?>
                      </ul> -->
                            <ul class="mob-menu">
                                <li><a href="#head">About Service</a></li>
                                <li><a href="#obzor">Market Review</a></li>
                                <li><a href="#work">How it works</a></li>
                                <li><a href="#proect_creator">Team</a></li>
                                <li><a href="#footer">Contacts</a></li>
                            </ul>
                            <div class="menu-soc">
                                <a href="https://www.facebook.com/Doctor-Smart-294801964343401/" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://t.me/doctor_smart" target="_blank"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                                <a href="https://www.linkedin.com/company/13590576/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row mid-row mid-row-eng">
                <div class="col-lg-6 col-md-6 col-sm-9 col-sm-offset-1">
                    <div class="logo">
                        <img src="img/logo.svg" alt="">
                    </div>
                    <p><span class="docSmart">Doctor Smart</span> is an innovative platform for digital healthcare and wellness services, based on blockchain technology, AI and smart contracts.</p>
                    <p> The system offers a full range of opportunities from telehealth and telemedicine to tele-wellness and offline healthcare, from dietary support to patients recovery as well as opportunities to prolong life.</p>
                    <!-- <p>The platform allows immediate access to highly qualified doctors, nutrition experts and fitness and wellness coaches from all over the world.</p> -->
                    <p>
                        <span class="bottom_span bottom_span_en">We bring health anytime,<br> anywhere!</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="obzor" class="obzor sectio" >
    <div class="container">
        <div class="row bot-row">
            <div class="col-lg-12">
                <h4>DIGITAL TELEHEALTH AND TELEMEDICINE MARKET</h4>
            </div>
        </div>
        <div class="row bot-row">
            <div class="col-lg-12">
                <p>Experts assess the market growth for internet healthcare services at $308* bln by the year 2022, however, we believe that the market can expect much greater changes. The traditional system of interaction between clients and healthcare service providers needs a rethink. And the typical outpatient appointments will be replaced with more convenient and accessible remote consultations. And as a result the market potential for digital healthcare and wellness services forecasted to be over $2 trn by 2022.</p>
                <!-- <span><span class="docSmart">Doctor Smart</span> will make new inroads.</span> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 diagram-block">
                        <div class="main">
                            <img src="img/Diagram.png" alt="" class="diagram">
                            <div class="center">
                                <p>The World Market of traditional outpatient services is estimated to esceed 3.3$ trillion by 2022 *</p>
                            </div>
                            <div class="number">
                                <span class="num num1">60%</span>
                                <span class="num num2">$2 trn</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 diagram-block-right">
                        <div class="line"></div>
                        <p class="top-p"><span class="bold">Up to 60% of outpatient appointments cloud be delivered online</span> and subsequently could be replaced with online healthcare services**</p>
                        <div class="line line2"></div>
                        <ul class="list">
                            <li>* - Grand View Reserch. Inc.</li>
                            <li>** - McKinsey</li>
                        </ul>
                        <p class="potencial potencial-eng">Digital health market potential</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="work" class="work sectio" >
    <div class="overlay1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>WORKING PRINCIPLES</h3>
                    <p><span class="docSmart">Doctor Smart</span> first priority is to put a highly competent team together to provide comprehensive telehealth services that would be fully integratable to traditional healthcare system.</p>
                    <p>We have designed <span class="docSmart">Doctor Smart</span> to raise the quality of digital healthcare and wellness services to new world-class levels and make professional assistance actually available to everyone who needs it here and now. Here are the principles we work by:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 hover_section">
                    <div class="box">
                        <img src="img/w1.png" alt="">
                        <p>Availability </p>
                        <div class="desc">
                            <h5>Availability</h5>
                            <span>Access to the specialist you need in less than 1 minute, 24/7, at weekends, from any point in the world. Consultation fee is half the price of an ordinary daytime visit</span>
                        </div>
                        <div class="mob-view">
                            <h5>Availability</h5>
                            <span>Access to the specialist you need in less than 1 minute, 24/7, at weekends, from any point in the world. Consultation fee is half the price of an ordinary daytime visit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 hover_section">
                    <div class="box">
                        <img src="img/w2.png" alt="">
                        <p>Quality </p>
                        <div class="desc">
                            <h5>Quality</h5>
                            <span>A compulsory system of certifying experts and specialists and an innovative system of vetting and checking the quality of expert recommendations.</span>
                        </div>
                        <div class="mob-view">
                            <h5>Quality</h5>
                            <span>A compulsory system of certifying experts and specialists and an innovative system of vetting and checking the quality of expert recommendations.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 hover_section">
                    <div class="box">
                        <img src="img/w3.png" alt="">
                        <p>Transparency</p>
                        <div class="desc">
                            <h5>Transparency</h5>
                            <span>A transparent financial system and open access to specialist certification history.</span>
                        </div>
                        <div class="mob-view">
                            <h5>Transparency</h5>
                            <span>A transparent financial system and open access to specialist certification history.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="garant" class="garant sectio" >
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1 col-xs-offset-0">
                <h3>OUR PARTNERS</h3>
                <p><span class="docSmart">Doctor Smart</span> uses artificial intelligence technology with applications that are also used by Medicina Clinic. This world class multi-field medical center has an impeccable record in the medical world. Medicina Clinic provides a full range of health care in 69 medical fields. This is the first Russian clinic to gain accreditation by the most prestigious international commissions on medical care quality.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1">
                <p class="serts_head">“Medicina Clinic” Awards & Certificates:</p>
            </div>
        </div>
        <div class="row sert">
            <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-6"><img class="sert1" src="img/sert1.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert2" src="img/sert2.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert3" src="img/sert3.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert4" src="img/sert4.png" alt=""></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6"><img class="sert5" src="img/sert5.png" alt=""></div>
        </div>
    </div>
</section>
<section id="plan" class="plan">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>ROADMAP</h3>
                <div class="map">
                    <img src="img/work-map.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="service" class="service sectio" >
    <div class="overlay1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>QUALITY CONTROL SERVICES</h3>
                    <p>We provide instant telehealth and telemedicine services online, and make the best international experience of<br>
                        authoritative experts accessible. Moreover, we publicly affirm the quality of our services.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box first_box_en">
                        <img src="img/s1.png" alt="">
                        <p>Certification of<br>experts</p>
                        <div class="desc">
                            <span class="service_first_prop"><span class="docSmart">Doctor Smart</span> experts have to be vetted and certified before being entered into the system. Thanks to blockchain technology, experts certification data can't be forged and is available to all users.</span>
                        </div>
                        <div class="mob-view">
                            <h5>Certification of experts :</h5>
                            <span><span class="docSmart">Doctor Smart</span> experts have to be vetted and certified before being entered into the system. Thanks to blockchain technology, experts certification data can't be forged and is available to all users.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box second_box_en">
                        <img src="img/s2.png" alt="">
                        <p>Expert<br> recommendation<br> monitoring system</p>
                        <div class="desc">
                            <span class="check_system">Our vetting algorithm helps ensure that expert recommendations meet international healthcare and wellness standards. Besides, highly qualified experts carry out additional random checking of recommendations.</span>
                        </div>
                        <div class="mob-view">
                            <h5>Expert recommendation monitoring system</h5>
                            <span class="check_system">Our vetting algorithm helps ensure that expert recommendations meet international healthcare and wellness standards. Besides, highly qualified experts carry out additional random checking of recommendations.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box third_box_en">
                        <img src="img/s3.png" alt="">
                        <p>Monitoring  prescribed <br> medicines</p>
                        <div class="desc">
                  <span class="control_system">Our decision support system helps verify whether or not prescribed medicine complies with the stated diagnosis and the client’s Electronic Health Data. In addition, the technology enables us to detect interaction with other therapies.
                  </span>
                        </div>
                        <div class="mob-view">
                            <h5>Monitoring prescribed <br> medicines</h5>
                            <span class="control_system">Our decision support system helps verify whether or not prescribed medicine complies with the stated diagnosis and the client’s Electronic Health Data. In addition, the technology enables us to detect interaction with other therapies.
                  </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 hover_section">
                    <div class="box last_box_en">
                        <img src="img/s4.png" alt="">
                        <p>Electronic Health <br> Data</p>
                        <div class="desc">
                  <span class="service_last_prop">We have created unified Electronic Health Data platform using cryptographic encryption techniques. These  Electronic Health Data provide data on client visit and expert recommendation history, as well as data from connected sports trackers and test results uploaded into the system.
                  </span>
                        </div>
                        <div class="mob-view">
                            <h5>Electronic Health Data</h5>
                            <span>We have created unified Electronic Health Data platform using cryptographic encryption techniques. These  Electronic Health Data provide data on client visit and expert recommendation history, as well as data from connected sports trackers and test results uploaded into the system.
                  </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="proect_creator" class="proect_creator sectio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>DOCTOR SMART FOUNDERS</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 hover_section">
                <div class="box">
                    <div class="round1"></div>
                    <p>Pavel Roytberg<br>
                        <span>Co-founder</span></p>
                    <div class="desc">
                        <h5>Pavel Roytberg<br>
                            <span>Co-founder</span></h5>
                        <span>Digital Worlds Company founder. Board member of Medicina Clinic. Speaker at many international conferences, “Leadership in Healthcare in Harvard University TChang School” participant.
                  Mr. Roytberg has gained more than 20 years of experience in software development for the healthcare industry. He created “Smart Medicina” (2014), Electronic Medical Records system, and fully functional expert Medical Decision Support System (2015), Monitoring System for Prescribed Medicines (2015) as well as a website for patients Chirp.Ru (2017),. Pavel G. Roytberg, holds a PhD in Economics whose Dissertation Theme was “Digitalising cash turnover” (2003).
                  </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 hover_section">
                <div class="left-box">
                    <div class="box">
                        <div class="round2"></div>
                        <p>Vladimir Nikolsky
                            <br>
                            <span>Co-founder</span></p>
                        <div class="desc">
                            <h5>Vladimir Nikolsky<br>
                                <span>Co-founder</span></h5>
                            <span class="right_doc">Chief Operating Officer, Mail.Ru Group, since 2013.He joined Mail.Ru Group as vice-president of Online Games Department in 2009. Mr. Nikolsky operated as CEO for Astrum Online Entertainment Holding (2007-2009). Prior to this Mr. Nikolsky became the co-founder and the CEO of “IT Territory”, a company engaged in online games production (2004-2007).
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="team" class="team sectio" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>PROJECT TEAM</h3>
                <h4></h4>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box1">
                    <div class="round round1"></div>
                    <p>Oleg Grigoryan<br>CEO
                    </p>
                    <div class="desc">
                        <h5>Oleg Grigoryan</h5>
                        <span>
                Graduate of Moscow State Social Sciences Academy. Since 2009, Mr. Grigoryan has lead the largest automobile companies and gained vast experience managing larger structures with complex partnership.  Oleg Grigoryan developed and organized the Сlient Service Department for Jaguar Land Rover Representative Office in Russia.
                </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box2">
                    <div class="round round2"></div>
                    <p>Viacheslav Potyomkin <br>
                        Chief Product Officer</p>
                    <div class="desc">
                        <h5>Viacheslav Potyomkin</h5>
                        <span>Project Leader in mobile and web design with more than 9 years experience. He joined the Doctor Smart team
              through HeadHunter where he led the mobile technology department. Prior to that he led design and launch of
              tens of game projects. He has worked on products with audiences of more than 75 million users in 42 countries.
              Certified agile professional (KMP, ICP, ICP-ATF) and experienced scrum-master and facilitator
              </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box3">
                    <div class="round round3"></div>
                    <p>Kirill Keker <br> System Architect</p>
                    <div class="desc">
                        <h5>Kirill Keker</h5>
                        <span>"TeleLive" startup co-founder, MikroTik certified trainer for equipment. Mr. Keker gained more than 8 years of experience in landline and mobile communication sphere. Kirill Keker became speaker of MUM Conference 2015. “Otkrytie.Life” project software architect (2017) and Investment platform for “Investitsionnye Seminary”, LLC software architect (2015).
              </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="left-box">
                    <div class="box box4">
                        <div class="round round4"></div>
                        <p>Olga Sharkhun <br> Medical Consultant</p>
                        <div class="desc">
                            <h5>Olga Sharkhun</h5>
                            <span>Physician, gastroenterologist, general practitioner. Mrs. Sharkhun is a Member of Russian Gastroenterological Association, Member of Scientific Society of Gastroenterology of Russia, and Member of the European Association for the Study of the Liver (EASL). Mrs. Sharkhun has participated in a wide range of Russian and international conferences. She has more than 18 years of medical experience. In 1998, Olga took her PhD Medical Degree. She is a co-author of the "Metabolic Syndrome" monograph and author of methodological recommendations series. Olga had her traineeship at the University of Iowa (The USA) and Muenster (Germany).
                  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-row battom-row-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box5">
                    <div class="round round5"></div>
                    <p>Ivan Tiutiundzhi<br>CCO</p>
                    <div class="desc">
                        <h5>Ivan Tiutiundzhi</h5>
                        <span>PhD degree in Sociology. Best Public Affairs Director in professional services 2014&2017 according to Managers Association and Kommersant Newspaper managers rating.Career started in Political consulting and marketing researches. During last 7 years worked as PR Head at HeadHunter - Russia and CIS online HR-solutions leader. With Ivan HeadHunter became the most quoted business in Russian labour market as well as one of the most innovative internet companies.
            </span>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="edviser" class="edviser sectio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>PROJECT ADVISERS</h3>
                <h4>We have brought together professionals from all over the world to strengthen our project.</h4>
            </div>
        </div>
        <div class="row top-row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box1">
                    <div class="round round1"></div>
                    <p>Grigory Roytberg<br>Professor</p>
                    <div class="desc">
                        <h5>Grigory Roytberg</h5>
                        <span>President of Medicina Clinic. Mr Roytberg holds a Post-Doctoral Degree in Medicine. Russian Academy of Sciences (RAS) member. Head of the Department for Therapy and Family Medicine at RNRMU. Honored Doctor of the Russian Federation. Winner of the RF Government Award in the field of education.
              In 1990 - founded Medicina Clinic.
              In 2005 - elected Associate Member of the Russian Academy of Medical Sciences.
              In 2014 - elected the Regular Member of RAS.
              On December 21, 2010 by order of V.V. Putin, the Russian Prime Minister, Professor G.E. Roytberg gained the Award of the RF Government in the field of education with rank: "The Winner of the Russian Federation Government Award in the Field of Education".
              </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box2 box2_en">
                    <div class="round round2"></div>
                    <p>Alexander Rumyantsev<br> Professor, Post-Doctoral Degree<br> in Medicine</p>
                    <div class="desc">
                        <h5>Alexander Rumyantsev</h5>
                        <span>Soviet and Russian paediatrician. RAS and Russian Academy of Medical Science member. CEO of  “Dmitry Rogachev National Research Center of Pediatric Hematology, Oncology and Immunology” at Russian Ministry of Health. Mr. Rumyantsev is Honored Professor of Department of oncology, hematology and radiation therapy at RNRMU. Chief external expert for pediatric hematology of the Russian Ministry of Health. President of National Society of Pediatric Hematologists and Oncologists. Member of RAS General Committee (since 2017).
              </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-row">
            <!-- <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="box box3">
                <div class="round round3"></div>
                <p>Dmitry Pushkar</p>
                <div class="desc">
                  <h5>Dmitry Pushkar Professor,<br> Post-Doctoral Degree in Medicine</h5>
                  <span>Chief external expert for urology, RAS Associated Member, Honored Doctor of the Russian Federation, honored worker of science of the Russian Federation. Mr. Pushkar’ is Head of the Urology Department of the Moscow State University of Medicine and Dentistry. The first Russian expert to be invited on regular base as lecture and the surgeon’s sow-case performer to the leading European and USA Clinics. Mr. Pushkar’ is the author of more, than 1000 scientific papers and 40 monographs.
                  </span>
                </div>
              </div>
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="box box5 en_box_5">
                    <div class="round round5"></div>
                    <p>Sergey Chernev<br>Deputy Director for<br>Information Technologies<br>of Kiberplat, LLC.</p>
                    <div class="desc">
                        <h5>Sergey Chernev</h5>
                        <span>Doctor of Engineering. Masters Degree in Physics and Mathematics. Teacher. Mr. Chernev has more than 17 years of experience in creating and distributing systems for development of products. From 2005 to 2009 Mr.  Chernev held CTO position IN GIGAFONE Company, where he developed a ground-breaking mobile advertising platform.
                </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="left-box">
                    <div class="box box4 box4_en">
                        <div class="round round4"></div>
                        <p>Dmitry Khan<br>
                            Co-founder  of “Dauria Aerospace”,<br> the first Russian Private<br> Space Company </p>
                        <div class="desc">
                            <h5>Dmitry Khan</h5>
                            <span>More than 20 years of business activity in IT, bio and space exploration industries.Co-founder of “Rostock Biotech One” investment fund which focuses on biotechnology solutions for prolonging human lifespan, medical problems of aging and cancer treatment. Dmitry has vast experience in investment bank activities, mergers and acquisitions in the telecommunication and IT markets. Dmitry participated in the Management of Sustainable Development program at Sustainability Challenge Foundation. Mr. Khan has experience in the development of international joint ventures. He is keen on such kinds of sport as ultra-marathon and oriental martial arts.
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row bottom-row_2">

       </div> -->
</section>
<section id="welcome" class="welcome sectio">
    <div class="container">
        <div class="row">
            <div class="col-lg-5  col-md-5 col-sm-6 flex-row">
                <div class="left-box">
                    <h4>JOIN THE TEAM!</h4>
                    <p>We welcome professionals who share the idea of implementing the most advanced digital technologies into нealthcare and wellness Industry.</p>
                    <p>Our currently open positions are:</p>
                    <p class="mid-p">
                        - Blockchain technology experts<br>
                        - Artificial intelligence professionals<br>
                        - Marketing specialist<br>
                        - Regional business development leads<br>
                        - Translators<br>
                        - Volunteers<br>
                    </p>
                    <p>Let's join together in developing a new market and world standards of digital healthcare and wellness services!</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-6">
                <div class="right-box">
                    <img class="img-responsive" src="img/bottom-doctor.jpg" alt="">
                    <a href="#form1" class="pop btn send">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="footer sectio" data-hash="footers">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Contacts</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4  col-md-4 col-sm-4">
                <ul class="social_icons">
                    <li><a href="https://t.me/doctor_smart" target="_blank"><img src="img/telegram.svg" alt=""></a></li>
                    <li><a href="https://www.facebook.com/Doctor-Smart-294801964343401/" target="_blank"><img src="img/facebook.svg" alt=""></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 emal">
                <ul class="contacts">
                    <li>Email:<a href="javascript:send_email_1('my massage')">
                            <span>info@drs.team</span>
                        </a></li>
                    <!-- <li><a href="javascript:;">
                      <img src="img/tel.svg" alt=""><br>
                      <span>7(XXX) XXX-XX-XX</span>
                    </a></li> -->
                    <li>Press inquiries:<a href="javascript:send_email_2('my massage')">
                            <span>pr@drs.team</span>
                        </a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 emal">
                <p>More information about product:<a href="http://www.doctorsmart.me">doctorsmart.me</a></p>
                <p>Doctor Smart Initiative for AI-based medical images recognition and analysis: doctorsmart….</p>
            </div>
        </div>
    </div>
    <p class="copyright">© 2018 Doctor Smart</p>
</footer>
<?php
// Top of the page, before sending out ANY output to the page.
$user_is_first_timer = !isset( $_COOKIE["FirstTimer"] );
// Set the cookie so that the message doesn't show again
setcookie( "FirstTimer", 1, strtotime( '+1 year' ) );
?>
<!-- Put this anywhere on your page. -->
<?php if( $user_is_first_timer ): ?>
    <div id="snackbar"><span class="docSmart">Doctor Smart</span> uses cookies and similar  technologies on its websites. By continuing your browsing after being presented with the cookie information you consent to such use. <span class="close_snack">&times;</span><br>
        <a href="/cookie" target="_blank" class="learn_more">Learn more</a>
    </div>
<?php endif; ?>
<div id="myModal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Ваше сообщение отправлено</p>
    </div>
</div>
<!--  <div id="snackbar"><span class="docSmart">Doctor Smart</span> uses cookies and similar  technologies on its websites. By continuing your browsing after being presented with the cookie information you consent to such use. <span class="close_snack">&times;</span><br>
<a href="" class="learn_more">Learn more</a>
</div> -->
<div class="hidden">
    <button id="myBtn">open</button>
    <form id="form1" class="feedback">
        <h3>Contact Us</h3>
        <input type="hidden" class="choose-language" value='ru'><br>

        <input type="text" name="Name" placeholder="Your name" required class="name"><br>
        <input type="text" name="E-mail" placeholder="Your contacts" required class="contacts"><br>
        <input type="text" name="Subject" placeholder="Subject" required class="theme"><br>
        <textarea name="massage" class="text" placeholder="Massage" required></textarea><br>
        <div class="g-recaptcha col-lg-offset-2" data-sitekey="6LcUuzsUAAAAABjamv96ZxkOf6nIl3FKYiOYA9XX"></div>
        <button class="send_massage_btn">Send</button>
    </form>
</div>