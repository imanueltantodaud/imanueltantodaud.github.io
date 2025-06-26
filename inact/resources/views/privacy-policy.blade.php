@extends('layout')
@section('title', 'Privacy Policy')
@section('content')
<main>
    <div class="social-icons">
      <div class="icon facebook">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
          <span class="icon-label">Facebook</span>
        </a>
      </div>
      <div class="icon instagram">
        <a href="#">
          <!-- <i class="fab fa-instagram"></i> -->
          <img src="assets/images/instagram-icon.png" style="width: 40px;">
          <span class="icon-label">Instagram</span>
        </a>
      </div>
      <div class="icon linkedin">
        <a href="#">
          <i class="fab fa-linkedin-in"></i>
          <span class="icon-label">Linkedin</span>
        </a>
      </div>
    </div>

    @include('chat-bot')

    <section class="privacy-sec">
     <div class="privacy-banner">
       <div class="overlay">
        <h1>OUR POLICIES</h1>
       </div>
     </div>

      <div class="container">
        <ul id="myTabs" class="nav nav-pills privacyTabs" role="tablist" data-tabs="tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#Conditions" data-toggle="tab"><img src="assets/images/terms-and-condition.png">Terms & Conditions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Conduct" data-toggle="tab"><img src="assets/images/code-of-conduct.png">Code of Conduct</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Privacy" data-toggle="tab"><img src="assets/images/privacy-policy.png">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Abuse" data-toggle="tab"><img src="assets/images/abuse.png">Abuse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Termination" data-toggle="tab"><img src="assets/termination.png">Termination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Social" data-toggle="tab"><img src="assets/images/social media.png" style="height: 40px;">Social Media</a>
          </li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane in active" id="Conditions">
            <div class="tab-inner-content">
              <h3>Terms & Conditions</h3>
              <div class="content">
                <div id="tCaccordion" class="accordion">
                  <div class="card">
                    <div class="card-header" id="tCOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseOne" aria-expanded="false" aria-controls="collapseOne">
                          Account <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                
                    <div id="tCCollapseOne" class="collapse" aria-labelledby="tCOne" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p> Most activities on our platform need to be accounted for. Keep your password somewhere safe, as you are responsible for all your account activity. Please, tell us by contacting our Support Team, if you suspect someone else's usage. The age of consent for the use of InAct in your country for online service must have been reached. You need to have an account for most actions, including buying and accessing content or submitting content to be published on our platform. You must provide accurate and complete information, including a valid email address, when you are establishing and maintaining your account and maintaining it. You have full responsibility and liability for everything that happens on your account, including any losses or damages caused by someone who uses your account without your permission (to us or anyone else). This means that with your password you have to be careful. You may not transfer your account to another person or use the account of someone else. We will not allow you this access if you contact us to request access to an account, unless you can provide us with the information that we need to demonstrate that you are the owner of the account. In case of the user's death, the user's account is closed.</p>
                        <p> Nobody else is permitted to share your account login credentials. InAct will not interfere in disputes between students/trainers who share account login credentials and you are responsible for what happens in your account. Use your account without your permission (or if you suspect any other security breaches) immediately after learning by contacting our Support Team. We may ask you for information to confirm that you actually own your account</p>
                        <p> To establish an accounts on InAct and use the Services, students and teachers must be at least 18 years of age. You may not set up an account when you are younger than 18 but above the age of consent to use online services where you live (for example 13 in the United States, or 16 in Ireland), but you are encouraged to invite a parent or guardian to open an account and to help you access the appropriate content to use. You may not create an inAct  account if you are below this age of agreement in the use of online services. We will terminate your account if we find that you have created an account which violates these rules. Under our Terms of Instruction, before you are permitted to submit content to inAct, you may be asked to verify your identity.
                          <br>
                          <br>
                        Our refund policy  :- no refund will be issued in case of cancelling  your purchase as it is one way payment 
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCTwo">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Lifetime Access and Content Registration  <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseTwo" class="collapse" aria-labelledby="tCTwo" data-parent="#tCaccordion">
                      <div class="card-body">
                      <p> You get a licence from us when you sign up for a course or other content to view it via the inAct Services, and no use. Do not attempt in any way to transfer or resell content. We usually grant you a lifetime access licence, except for legal or policy reasons or for registration through subscription plans. The content of the programme must be disabled.</p>
                      <p> In the course of publishing content on InAct, our Instructor Conditions provide InAct  with a licence to offer content licences to students. That means that the contents of registered students can be sub-licensed. As a pupil, you receive a licence from InAct for viewing content through InAct platform and services, whether it is free or paid content, and InAct is a registered author. Content is and will not be sold to you, licenced. This licence will not allow you to resell the content in any way (including by sharing account information with a purchaser or illegally downloading the content and sharing it on torrent sites).</p>
                      <p> InAct, in legally more comprehensive terms, grants you (as a student) only, in compliance with these Conditions and with any conditions or restrictions relating to the content or functionality of our Services, a limited and non-exclusive non-transferable licence to access and see the content for which you have all charges paid, for your personal non-comercial educational purposes through this Service. All other applications are expressly prohibited. You may not, without explicit permission from a written agreement signed by InAct's authorised representative, reproduce, redistribute, transmit, assign, sell, broadcast, rent, share, lend, modify, adapt, edit, create derivative materials for, sublicense or any other transmission or use of any content. This applies also to content accessible through any of our APIs</p>
                      <p> In general, when our students sign up for a course or other content, we offer a lifetime licence. In case we decide or are obliged to delete access to content on legal grounds, such as for example, when the course or other content you are registered in is the subject of a copyright complaint or if we find that this is in violation of our Trust & Safety Guidelines, we reserve the right to withhold licences to access and use content at any point in time. This lifetime access licence is not applicable to subscription entries or add-ons or services associated with the course or other content that you subscribe to. This lifetime access licence. For example, instructors can choose not to provide teaching support or questions/responses related to content at any time. The access to the course content, but not the instructor, for the duration of life is clear. </p>
                      <p> Teachers are not allowed to grant their content directly to students and such a direct authorisation shall be invalid and in breach of these Terms and Conditions.</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCThree">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Payments, loans and repayments  <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseThree" class="collapse" aria-labelledby="tCThree" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>You agree to use a valid method of payment when making a payment. InAct offers a redeeming or credit of 30 days for most content purchases if you're not happy with your content.</p>
                        <ul>
                          <li>3.1 Tariffs 
                            <ul class="nested-list">
                              <li>The prices of the InAct contents are based on the instructor's terms and conditions and our promotion policy. In certain circumstances, because of pricing systems and the policy of mobile platform providers in terms of sales and promotion, the price of the content on the inAct website may not be exactly the same as that offered on our mobile or TV applications.</li>
                              <li>We sometimes promote and market our content, which allows certain content to be offered for a fixed duration at discounted prices. At the time of your purchase of the contents, the price applicable is the price (at checkout). Any price offered for specific content may also differ when you are logged in from the price for users not registered or logged into your account, as some of our promotions are only available for new users.</li>
                              <li>If your account is logged in, the currency you see depends on your location when your account is created. The price currency is based on the country you're in if you're not logged to your account. In other currencies, we do not allow the users to view prices.</li>
                              <li>We are responsible for the collection and referral of this tax to the appropriate tax authorities if you are a student located in a country where use and selling tax, goods and services or value added tax is applicable to consumer selling. The price you see may include taxes, or taxes can be added upon check-out depending on your location.</li>
                            </ul>
                          </li>
                          <li>3.2 Payments 
                            <ul class="nested-list">
                              <li>You agree to pay your debit/credit cards fee or process other payment methods (e.g. Bollard, SEPA, direct debit or mobile wallet) to pay for your content. inAct cooperates with payment service providers to provide you and keep your payment information safe with the most convenient payment procedures in your country. We can update your payment procedures using our payment service provider information.</li>
                              <li>You agree not to use an invalid or unauthorised method of payment when making a purchase. If you do not use your payment method and you still have access to the content that you have registered, you agree to pay us the relevant fees within thirty (30) days of receipt by us. We reserve the right to deactivate access to content that is not adequately paid for.</li>
                            </ul>
                          </li>
                          <li>3.3 Codes of gifts and advocacy 
                            <ul class="nested-list">
                              <li> InAct or our partners can provide students with gift and promotional codes. You can use certain codes to purchase eligible content on our platform, subject to terms and conditions contained in your codes, for donation or promotional loans that are available to you on your inAct account. For specific content, other codes can be redeemed directly. Gift and promotional appropriations cannot be used in our mobile or TV applications for purchases.</li>
                              <li>These and any promotional values linked to these codes and credits may expire if they are not used within the period set on your inAct  account. Unless otherwise specified in the terms contained in your codes or as required by law, gifts and promotional codes offered to inAct shall not be refunded for cash. The partner's gift and promotional codes are subject to the reimbursement policies of the partner. inAct can determine which of your loans to apply to the purchase if you have multiple saved credit amounts. See our Support Page for more details on all terms and conditions included in your codes.</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCFour">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Content and Behaviour Guidelines   <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseFour" class="collapse" aria-labelledby="tCFour" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>You may only use inAct for lawful purposes. You are solely responsible for all content that you post on our platform. You must keep the reviews, questions, posts, courses, and other content you upload in accordance with our Trust & Safety Guidelines and the law, and you must respect the intellectual property rights of others. We reserve the right to terminate your account if you commit repeated or serious offences. Please notify us if you believe someone is violating your copyright on our platform.</p>
                        <p>You may not access or use the Services for illegal purposes, nor may you create an account. Your use of the Services and behaviour on our platform must comply with your country's applicable local or national laws or regulations. You are solely responsible for knowing and adhering to the laws and regulations that apply to you. </p>
                        <p>If you are a student, the Services allow you to ask questions of instructors of courses or other content in which you are enrolled, as well as post content reviews. The instructor may ask you to submit content as "homework" or tests for certain topics. Nothing that is not yours should be posted or submitted.</p>
                        <p>If you are an instructor, you can publish content on the platform and communicate with students who have enrolled in your courses or other content. In both cases, you must follow the law and respect the rights of others: you are not permitted to post any course, question, answer, review, or other content that violates your country's applicable local or national laws or regulations. You are solely responsible for any courses, content, and actions you post or take through the platform and Services, as well as the consequences of those actions. Before you submit any content for publication on InAct, make sure you understand all of the copyright restrictions outlined in the Instructor Terms.</p>
                        <p>If we are notified that your course or content violates the law or the rights of others (for example, if it is established that it violates intellectual property or image rights of others, or is about an illegal activity), if we discover that your content or behaviour violates our Trust & Safety Guidelines, or if we believe your content or behaviour is unlawful, inappropriate, or objectionable, we may suspend or terminate your course or content. InAct abides by copyright laws. For more information, please see our Intellectual Property Policy.</p>
                        <p>InAct reserves the right to enforce these Terms and our Trust & Safety Guidelines. We may restrict or terminate your permission to use our platform and Services, or ban your account, at any time, with or without notice, for any or no reason, including any violation of these Terms, failure to pay any fees when due, fraudulent chargeback requests, at the request of law enforcement or government agencies, extended periods of inactivity, unexpected technical issues, or any other reason.</p>
                        <p>If we terminate your account, we may delete your content and prevent you from accessing the platforms or using our Services in the future. Even if your account is terminated or suspended, your content may still be available on the platforms. You agree that we will have no liability to you or any third party if your account is terminated, your content is removed, or your access to our platforms and services is blocked.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCFive">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseFive" aria-expanded="false" aria-controls="collapseFive">
                          InAct's Rights to Your Content   <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseFive" class="collapse" aria-labelledby="tCFive" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>You own the content you post to our platform, including your courses. We have permission to share your content with anyone via any medium, including advertising on other websites.</p></p>
                        <p>The content you create as a student or instructor (including courses) is yours to keep. By posting courses and other content on InAct, you grant InAct permission to reuse and share it, but you retain any ownership rights you may have over your content. If you are an instructor, make certain that you understand the content licencing terms outlined in the Instructor Terms.</p></p>
                        <p>You may use and share this content with everyone, distribute it and promote it on any plats and on any media, and make changes or edits to the content, as we see fit. If you post content, comments, question and reviews and send ideas and recommendations on new features or enhancements to us.</p></p>
                        <p>You allow us, in legal language, to use, copy, reproduce, process, adapt, modify, publish, transmit, display, and distribute your content (including the image and its name) using a global, unreliable, non-exclusive licence to use, copy, transmit or publish content through or on the platform</p></p>
                        <p>It includes making your contents available for the syndication, broadcast, distribution, or release of content on other media to other companies, organisations, or people who are partners in inAct, and using your content for marketing purposes. You also waive, to the extent permissible under applicable law, any privacy, publicity or other similar rights that apply for all such uses. You guarantee that you have all the rights, authority and authority to allow us to use all content you submit. You agree that you are not compensated for all such uses of your content.</p></p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCSix">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Your Own Risk Using inAct   <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseSix" class="collapse" aria-labelledby="tCSix" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>Anyone can use inAct to create and publish content and teachers, and teachers and students can interact to teach and learn. Some things could go wrong, like other platforms where people can post and talk, and you use inAct at your own risk.</p>
                        <p>We do not review or edit our content in connection with legal matters and cannot determine the legality of the content from our platform models. We have no editorial control over the content on the platform and therefore do not guarantee the reliability, accuracy, validity or truthfulness of the content in any way. You rely on any data that an instructor provides at your own risk if you access content.</p>
                        <p>You can be exposed to content you see as offensive, indecent, or objectionable by using the Services. InAct shall not be liable to maintain such content from you, and to the extent permitted under the law for your access or registration in any course or other content. This also applies to all health, well-being and physical exercise content. You acknowledge the risks and hazards inherent in the exhausting nature of those content and choose to take those risk, including disease risk, corporal injury, disability, or death, voluntarily by using these contents.</p>
                        <p>The choices that you make before, during and after your content access are entirely your responsibility.</p>
                        <p>You need to be careful about the kinds of personal information you share when interacting directly with a student or an instructor. While we limit the types of information instructors that students may be required for, the information they receive from other users on the platform does not control what students and instructors do. For your safety, you should not share your email or other personal information about you.</p>
                        <p>We are not responsible or accountable for interactions between instructors and students or employ instructors. Disputes, claims, losses, injuries, and damages of any kind arising from the conduct of instructors or students are not liable to us.</p>
                        <p>You will find links to other websites that we do not own or control when you use our Services. We are not responsible for, including the collection of information about, the content or anything else on these third-party sites. The terms and conditions and privacy policies you should also read.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCSeven">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          Terms and conditions of subscription.   <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseSeven" class="collapse" aria-labelledby="tCSeven" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>This section covers additional terms for your use as a student of our collections based on subscriptions ("Subscription Plans"). You agree to the additional terms in this section by using a Subscription Plan. It should be noted that inAct is not subject to the terms but rather to inAct 's and the subscription agency. inAct is not subject to these terms.</p>
                        <ul>
                          <li>8.1 Plans to subscribe 
                            <ul class="child-list">
                              <li>You receive a limited, non-exclusive and non-transferable licence from us when you subscribe to the Subscription Plan to access and view the content contained in the Subscription Plan through the Services. The terms of the above "Content Registrations and Lifetime Access" are applicable to registrations through a Subscription Plan with the exception of lifetime access grants.</li>
                              <li>The amount, features and price of your access to a subscription plan are determined by the subscription you purchase or renew. You are not allowed to transfer, assign or share with anyone else your subscription. </li>
                              <li>We reserve the right, for law or for policy reasons at all times and at our sole discretion, to withdraw a licence for using the content in our subscription plans, for example if we are no longer entitled to offer the content in a subscription plan. The "Content Enrollment and Life-time Access" section provides further information about our right to withdraw.</li>
                            </ul>
                          </li>
                          <li>8.2 Management of accounts 
                            <ul class="child-list">
                              <li>By following the steps described on our support page, you can cancel your subscription. You will automatically end your subscription in the last day of your billing period when you cancel a subscription plan. When you cancel your subscription you will not be entitled to a refund or credit, unless otherwise required by law, for any fees that you have already paid for your subscription. To be clear, your InAct account does not terminate by cancelling a subscription.</li>
                            </ul>
                          </li>
                          <li>8.3 Free tests and renovations 
                            <ul class="child-list">
                              <li>A free trial may begin your subscription. The duration of your subscription's free trial period during registration is specified. inAct determines, at our sole discretion, free trial eligibility, and can limit the duration or eligibility. If we determine that you are not eligible, we reserve the right to end the free trial and suspend your subscription.</li>
                              <li>At the end of the free trial period, we charge the subscription fee for your next accounting cycle. Unless you cancel your subscription before the end of the free trial period, the subscription automatically renewed according to your subscribers' settings (for example, each month or annually)</li>
                            </ul>
                          </li>
                          <li>8.4 Billing and Payments 
                            <ul class="child-list">
                              <li>At the time of your purchase the subscription fee will be shown. To learn more about finding the fees and dates for your subscription, visit our Support page. In addition to your subscription fee, we may have to add taxes as outlined in the section "Payments, Credits and Refunds." Unless otherwise required by law, payments are non-refundable and there are no partially used period reimbursements or credits.</li>
                              <li>You must provide a payment method to subscribe to a subscription plan. You grant us and our payment services providers the right to process payments for the applicable fees through the paid method we have in place for you, by subscripting to a subscription plan and providing your billing information during check-out. At the end of every subscription term, your subscription will be automatically renewed for the same period and your payment method is processed to pay your fee.</li>
                              <li>If we are updating your payment method using the information provided by our payment service providers, you will authorise us to continue charging fees for your updated payment method, according to the above section "Payments, credit and refunds."</li>
                              <li>We can discontinue or terminate your subscription when we are unable to process the payment using the payment method that we have on file for you or when you file fee charges for your refund made on your payment method. </li>
                              <li>We retain the right, at our sole discretion, to change our subscription schedules or modify prices for our services. Any changes in prices or subscription changes take effect after notice to you, with the exception of the applicable law.</li>
                            </ul>
                          </li>
                          <li>8.5 Disclaimers for subscription
                            <ul class="child-list">
                              <li>We guarantee not that there are specific contents available in any subscription plan or that any subscription plan contains a minimal amount of content. We reserve the right at any time in the future to offer, to cease or otherwise modify or terminate, at our sole discretion, any additional features of any Subscription Plan or otherwise. In addition to those in the "Disclaimers" section below, these disclaimers are provided.</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCEight">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseEight" aria-expanded="false" aria-controls="collapseEight">
                          Different legal terms and conditions <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseEight" class="collapse" aria-labelledby="tCEight" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>These terms are like all other contracts and they contain boring but significant legal provisions which protect us from innumerable events, and which clarify the legal relationship between us and you. </p>
                        <ul>
                          <li>9.1 Compulsory Agreement 
                            <ul class="nested-list">
                              <li>You accept that you agree to enter into a legally binding contract with inAct by registering, accessing or using our Services. Do not register, access or otherwise use our Services if you do not agree with these Terms.</li>
                              <li>You represent and warrant that you are authorised to do so when you are a trainer who accepts these terms and makes use of our services on behalf of a company, organisation, government or other legal entity. </li>
                              <li>Any version of these terms in a language other than English is conveniently provided and you are aware and agree that if there are any conflicts in the English language will be controlled.</li>
                              <li>If any part of these Terms is determined by applicable law to be null and void, then that provision will, and remaining of the Terms, be deemed to be replaced by a valid, enforceable provision most closely in line and consistent with the purpose of the original provision. </li>
                              <li>Even if we are delayed or fail in the exercise of our rights in some cases, it does not mean that we do not exempt our rights in accordance with these Terms. If we decide in one particular instance to waive any of our rights it does not mean that, generally or in future, we waive our rights.</li>
                              <li>Our platform may be down, either for maintenance planned or because there's something down with the site. There may be sometimes misleading statements by one of our trainers about their content. There can also be security problems. It can happen.</li>
                            </ul>
                          </li>
                          <li>9.3 Liability limitations 
                            <ul class="nested-list">
                              <li>For example, if you access health and well-being content like yoga and injure yourself, there are risks inherent in our Services. You agree fully to these risks and you agree that, even if you suffer loss or damage from our platform and services, you do not have recourse to seek damages. More comprehensive in legal language, In accordances with the law, in any way (including loss of data, sales, profit/profit or corporate opportunities, or injury or death to personality or persons), whether arising from contractual, warranty, tort, product liability or otherwise, or even if the potential for damages is notified to us is not the responsibility of us and our groups, suppliers, partners and agents.</li>
                              <li>We have limited our liability (and liability to you or to any third party in any event, by every one of our Group companies, suppliers, partners and agents) to more than 100 dollars ($100) and/or the amount you paid us in the twelve (12) months prior to this event that gave rise to your claims. There is no disclaimer or limitation of liability for consequential or incidental damages in certain jurisdictions, and some of the above may not apply to you.</li>
                            </ul>
                          </li>
                          <li>9.4 Allowance. 
                            <ul class="nested-list">
                              <li>If you conduct yourself in a way that brings us into a lawsuit, we can take legal action against you. inAct, our group companies and their officers, managers, suppliers, partners and agents, agree to indemnify, hold inAct harmless against any claims, requests, losses, damages and expenses of third parties (including reasonable lawyer fees) arising from (a) the content you post or submit; (b) your Services use (c) your violation of these Conditions or (d) you agree to indemnify, defend and hold inAct harmless. The termination of those Terms and your use of the Services will survive your obligation to indemnify.</li>
                            </ul>
                          </li>
                          <li>9.5 Law of governance and competence 
                            <ul class="nested-list">
                              <li>If "InAct" is mentioned in these terms, they refer to the inAct entity to which you are contracting. If you are a student, your contracting company and the law are generally based on your place of study.</li>
                            </ul>
                          </li>
                          <li>9.6 Legal acts and communications 
                            <ul class="nested-list">
                              <li>No action may be brought by each party for more than one (1) year after the cause, regardless of form, arising out of or concerning this Agreement, except in cases where that limitation is not legally imposed.</li>
                            </ul>
                          </li>
                          <li>9.7 We are interconnected 
                            <ul class="nested-list">
                              <li>You and we agree that there is no relationship between us between joint undertakings, partnerships, jobs, contractors or agencies. </li>
                            </ul>
                          </li>
                          <li>9.8 No allocation 
                            <ul class="nested-list">
                              <li>These conditions cannot be allocated or transferred (or the rights and licences granted under them). For instance, your account cannot be transmitted to another employee, if you have registered as employees of an undertaking. These Terms (or the rights and licences provided under them) may be assigned without restriction to another company or person. Nothing in these Conditions confers on any third party or entity any right, benefit or remedy.</li>
                              <li>You agree that your account is not transferable and that all rights under these Terms and Conditions terminate on your death. </li>
                            </ul>
                          </li>
                          <li>9.9 Export and penalties
                            <ul class="nested-list">
                              <li>You represent yourself (as a person or as the representative of any entity for which you use the Services) in, or as a resident of, any country which is subject to applicable U.S. commercial sanctions or embargoes (such as Cuba, Iran, North Korea, Sudan, Syria, or the Crimea region of Ukraine). You also warrant not being an individual or entity listed on a specifically designated national or denied party list of U.S. governments.</li>
                              <li>You will inform us within 24 hours, if you become subject to such a limitation in the course of any contract with InAct, and we will be entitled, effective immediately and not in any further way, to terminate any further obligations on you (but without prejudice to your outstanding obligations to inAct ). </li>
                              <li>In violation of United States or any other applicable country's export control and trade sanction law, rules and regulations, you may not access, use, export, re-export, divert, transfer or disclose any part of the Services or any related technical informations or materials. You accept no content or technology uploads</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCNine">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseNine" aria-expanded="false" aria-controls="collapseNine">
                          Little demands  <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseNine" class="collapse" aria-labelledby="tCNine" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>Either of us may bring a claim to the court of small lawsuits of (a) the province you live in, San Francisco, California, (b) or (c) another location that we both agree on, as long as it qualifies. </p>
                        <ul>
                          <li>10.1 Arbitration Going 
                            <ul class="nesteed-list">
                              <li>If our dispute cannot be settled amicably, you and inAct agree to settle any claims arising out of these terms or our other legal terms, irrespective of the type of claim or theory, via final and binding arbitration.</li>
                              <li>If one of us brought a complaint that had to be arbitrated and the other party refused to arbitrate it, the other party might request a court to force both of us to arbitrate (compel arbitration). Either of us can also request a court to stop the arbitration while the arbitration is underway. v</li>
                            </ul>
                          </li>
                          <li>10.2 Process of Arbitration 
                            <ul class="nesteed-list">
                              <li>Any dispute involving a claim of less than $10,000 USD is exclusively resolved by binding arbitration. A party electing an arbitration shall commence the procedure by submitting an arbitration request to the U.S. (AAA). AAA Commercial Arbitration Rules, the Consumer Due Process Protocol and additional proceedings on consumer-related dispute resolution shall govern the arbitration procedure. We and you agree that: (a) the proceedings may be carried out by telephone, on-line or based solely on written submissions (on the decision of the party seeking redress); (b) the arbitration shall not involve any personal appearance by the parties or witnesses (unless we and you agree otherwise). Dispute involving a claim in excess of USD $10 thousand must be settled in accordance with the rules of the AAA regarding whether the hearing must be conducted in person.</li>
                            </ul>
                          </li>
                          <li>10.4 Action of no class                            
                            <ul class="nesteed-list">
                              <li>Both of us agree that each of us can only make individual claims against the other. (b) an arbitrator cannot combine multiple claims of persons into one case (or preside over any consolidating, group or representative actions); and (c) the arbitrator's decision or award in one case can only impact that user, not other users; and (c) the arbitrators' decision or award in one case may only influence the applicant and not other users and If a court determines this clause of 'No collective action' is not enforceable or enforceable then this section of the 'Dispute Resolution' is null and void.</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCTen">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseTen" aria-expanded="false" aria-controls="collapseTen">
                          Update these terms and conditions   <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseTen" class="collapse" aria-labelledby="tCTen" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>We may update these Terms from time to time to clarify our practises or reflect new or different practises (as when adding new features), and inAct reserved the right to change and/or modify these Terms at its discretion. We will notify you of any changes to the material by prominent means, such as sending an email notification to the email address stated on your account. Changes shall take effect on the day they are posted unless otherwise specified.</p>
                        <p>You will accept those changes after your continuous use of our Services become effective. Any revised Conditions are substituting for all previous Conditions. </p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="tCEleven">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tCCollapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                          How to get in touch with us   <i class="fas fa-chevron-down"></i>
                        </button>
                      </h5>
                    </div>
                    <div id="tCCollapseEleven" class="collapse" aria-labelledby="tCEleven" data-parent="#tCaccordion">
                      <div class="card-body">
                        <p>Contact our support team is the best way to get in touch with us. Our services are delighted to hear your questions, questions and feedback. </p>
                        <p>Thank you for learning with us</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="Conduct">
            <div class="tab-inner-content">
              <h3>Code of Conduct</h3>
              <div class="content">

              <div id="cOCaccordion" class="accordion">
                <div class="card">
                  <div class="card-header" id="cOCheadingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cOCcollapseOne" aria-expanded="false" aria-controls="cOCcollapseOne">
                         Code Of Conduct<i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
              
                  <div id="cOCcollapseOne" class="collapse" aria-labelledby="cOCheadingOne" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <p>InAct includes people from around the globe from a broad array of cultures, religions and backgrounds. This diversity is one of the things that enhances our Community, but can also challenge communication. </p>
                      <p>The aim of our Code is to ensure that, irrespective of the colour, religion, national origin, sex, age, sexual orientation, gender identity or expression, personal appearance, political affiliation, maritage status, family responsibilities/parenthood, veteran status, training, disability, geneticism, and the use of the inAct Platform remains the welcome place for all members to support.</p>
                      <p>In collaboration with community members, students, teachers and administrators, the code of conduct was prepared to collect feedback to ensure a variety of views are represented. These rules will remain in the establishment and application of only online learning rules in a way involving all stakeholders.</p>
                      <p>The Code of Conduct represents the InAct platform's ethics and values. The code will be checked by the inAct group on a yearly basis and will be disseminated to users through electronics and other means to address and respond to the ongoing collection of data on abuse, cyberbullying, harassment and Bullying. </p>
                      <p>This is not a comprehensive list, but rather a guide to the sort of experiences that we want to see on this website. The final decision on whether or not a conduct is permissible will ultimately be made by the inAct community.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cOCcollapseTwo" aria-expanded="false" aria-controls="cOCcollapseTwo">
                        Guidelines for InAct   <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cOCcollapseTwo" class="collapse" aria-labelledby="cOCheadingTwo" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <p>This code of conduct covers all the forum messages, including classera.org and classera.community, and all courses forums shared in inAct . This code of conduct applies. </p>
                      <p>We hope we will follow the code of conduct in all activities on the website. You or your posts will be deleted from inAct if you do not obey the Code of Conduct. </p>
                      <p>Within the site, inAct and our partners can provide helpful information, but we cannot respond to all posts. inAct or our partners' interactions are not pair responses, though helpful and appreciated.</p>
                      <p>You are entitled to all material posted on the InAct website. InAct has a permanent, global, free royalty licence to use and market any content that you post on the website. The licence will not only be available. By posting on the website, inAct is entitled without limitation or fee to use any material inside the mail.</p>
                      <p>Any contents that you share in the Community, elsewhere on courseera.org, on our social media sites, on our marketing materials or articles published or shared by third parties can be used by InAct. InAct. inAct will apply for authorisation to use your contents in this manner and will maintain all rights to your final work prior to using the picture or full name, in conjunction with any material you have uploaded.</p>
                      <p>All material posted on inAct is freely available and searchable online, unless otherwise indicated.</p>
                      <p>You will delete your private messages if you either delete your inSided or your inAct account. You would be anonymised with any public messages, but they stay in the content.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cODcollapseThree" aria-expanded="false" aria-controls="cODcollapseThree">
                        As an InAct customer, your duties  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cODcollapseThree" class="collapse" aria-labelledby="cOCheadingThree" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <ul>
                        <li>It is the responsibility of all users: 
                          <ul class="nested-list">
                            <li>Enhance a safe, supportive and orderly online learning atmosphere, such that others and property are respected and dignified. </li>
                            <li>Be aware of all policies, rules and regulations on user behaviour, and comply with them. </li>
                            <li>React respectfully and positively to the instructions provided by teachers, managers and other staff of inAct. </li>
                            <li>Always support anyone who uses inAct or works for inAct. </li>
                            <li>Maintain conduct free of all types of abuse, bigotry and bullying.</li>
                            <li>Ask if they don't understand questions. </li>
                            <li>Seek help in solving disciplinary problems. </li>
                            <li>Responsibility for your actions.</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cODcollapseFour" aria-expanded="false" aria-controls="cODcollapseFour">
                        Failure to conduct <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cODcollapseFour" class="collapse" aria-labelledby="cOCheadingFour" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <p>We want to have the best experience possible for all InAct users. We have provided a list of examples of actions inadequate for inAct users, so as to make clear what this means: </p>
                      <p>Hazardous talk. All expressions (e.g. speech, text, or images) which can increase the risk of their audience condoning members of another group or commit violence against them. Hazardous speech Key traits: Targeted at groups, it encourages fear, often false, and indirectly harms. Can include dangerous speech: Logic coded (terms familiar to in-group).</p>
                      <p>Stalking or deliberate bullying. This includes verbal comments about gender, sexual focus, disability, physical appearance, size of the body, race, religion, public sexual pictures, stalking and/or intimidation. </p>
                      <p>Violence or violence threats. There is no acceptable online or offline violence and violence threats. This includes inciting violence against anyone, including encouraging someone to harm themselves. This also means posting or threatening to post information of other people that identify themselves online ("doxing")</p>
                      <p>The online discussion, talks and other events have sustained a disruption. There will be no toleration of sustained event disruptions, online discussion or meetings, including discussions and presentations. This includes speaking about or "checking" event spokespersons or influencing crowd actions that lead to hostility during events. </p>
                      <p>InAct users are requested and should immediately comply with any inappropriate behaviours. If you are the object of an incident report, your personal data shall be processed by InAct as specified in the Code of Conduct when you want to report inappropriate conduct. You agree to such treatment.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingFive">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cODcollapseFive" aria-expanded="false" aria-controls="cODcollapseFive">
                        Potential consequences for breaking the Code <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cODcollapseFive" class="collapse" aria-labelledby="cOCheadingFive" data-parent="#cOCaccordion">
                    <div class="card-body">>
                      <ul>
                        <li>This list is not included, and inAct reserves the right to act as it sees fit. Possible incident responses include: 
                          <ul class="nested-list">
                            <li>Nothing if the behaviour was found not to be a violation of the code of conduct a warning verbally or by email. </li>
                            <li>Require that the person being reported does not direct an online membership message. </li>
                            <li>Require that they do not join certain channels or discussions on the Community. </li>
                            <li>No videos or slides of a speech that contravened the Code of Conduct. </li>
                            <li>Roles such as translators, mentors and beta testers that the reported person has immediately terminated.</li>
                            <li>Requires a person not to be a translator, mentor, or beta tester. </li>
                            <li>Expecting an individual to leave the course, channel and/or inAct immediately and not to return. </li>
                            <li>Remove the person reported from the online chat servers or mailing lists (either indefinitely or for a certain time period). </li>
                            <li>Remove a person from the rights of administrator or moderator of community infrastructure. </li>
                            <li>removing a person from the membership of the institutions concerned.</li>
                          </ul>
                        </li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingSix">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cODcollapseSix" aria-expanded="false" aria-controls="cODcollapseSix">
                        Code of Conduct Implementation  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cODcollapseSix" class="collapse" aria-labelledby="cOCheadingSix" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <ul>
                        <li>All inAct reports are taken seriously. Those who do not follow in good faith the code of conduct can have repercussions that our team deems appropriate. So we usually deal with misconduct: 
                          <ul class="nested-list">
                            <li>Warning. Warning. Warning. Our team will remove offending material and send a warning for the most first time misconduct. Here, most of the problems are fixed. </li>
                            <li>Suspension of account. Our team shall impose temporary suspension for repeated misconduct or conduct containing harassment, bigotry or abuse. </li>
                            <li>Expelled account. In very rare instances, our team will expel people to the InAct community who show the pattern of harmful destructive behaviour.</li>
                          </ul>
                        </li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingSeven">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cODcollapseSeven" aria-expanded="false" aria-controls="cODcollapseSeven">
                        Incident code reporting Reporting   <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cODcollapseSeven" class="collapse" aria-labelledby="cOCheadingSeven" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <p>inAct users are encouraged to report incidents that contravene this Code of Conduct through this Article. The report is managed by the inAct team and contact is made directly to the user who has violated the code of conduct.Incident code reporting Reporting </p>
                      <p>inAct users are encouraged to report incidents that contravene this Code of Conduct through this Article. The report is managed by the inAct team and contact is made directly to the user who has violated the code of conduct.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingEight">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cODcollapseEight" aria-expanded="false" aria-controls="cODcollapseEight">
                        How to report an incident with a code of conduct   <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cODcollapseEight" class="collapse" aria-labelledby="cOCheadingEight" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <ul>
                        <li>Please give the following information in your report: 
                          <ul class="nested-list">
                            <li>Connection to the incident area </li>
                            <li>Infringement and text screenshot </li>
                            <li>Written wrongdoing text </li>
                            <li>User name visible</li>
                          </ul>
                        </li>
                      </ul>                      
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="cOCheadingEight">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cODcollapseEight" aria-expanded="false" aria-controls="cODcollapseEight">
                        Confidentiality  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="cODcollapseEight" class="collapse" aria-labelledby="cOCheadingEight" data-parent="#cOCaccordion">
                    <div class="card-body">
                      <p>We will work to preserve the anonymity and confidentiality of all persons involved if you are the object of a reported incident or want to report incorrect behaviour. However, sometimes the InAct team may seek permission to identify individuals to collect additional information in a correspondence necessary for a just process and resolution. The team may also request permission to identify individuals.</p>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="Privacy">
            <div class="tab-inner-content">
              <h3>Privac Policy</h3>
              <div class="content">

              <div id="PPaccordion" class="accordion">
                <div class="card">
                  <div class="card-header" id="PPheadingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseOne" aria-expanded="false" aria-controls="PPcollapseOne">
                        Our Policy Intro<i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
              
                  <div id="PPcollapseOne" class="collapse" aria-labelledby="PPheadingOne" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>We are a professional online platform. People use our services to find, find and connect with others to find information in order to provide business opportunities. Any member or visitor of our services is subject to our privacy policy.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseTwo" aria-expanded="false" aria-controls="PPcollapseTwo">
                        Key Information <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseTwo" class="collapse" aria-labelledby="PPheadingTwo" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>InAct, Inc. is the personally identifiable controller of any personal data we gain from you (i.e. the entity which determines the means and purposes by which, unless you are a part of a degree, certain MasterTrack programmes, or certain other circumstances that you have received, then InAct is the data processor). InAct is a controller of personal data.</p>
                      <p>We collect the following personal information, including the account registration information such as name, email, details regarding the content you offer, survey information (where you supply it), identity verification and information concerning your use of our site and services, in the "what information we collect" section of this Privacy Notice. This includes personal information about you.</p>
                      <p>In the "what information we collect" section of this Privacy Notice, we collect the following personal information, including registration data, e-mail, information regarding content you are providing, information about the survey (where you supply the information), identity checking and information concerning the application of our website and services. Personal information about you is included.</p>
                      <p>In the "Update or Delete Your Personally Identifiable Information" part of this Privacy Notice following, you have certain rights you may exercise with respect to the use that is made of your personal information.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseThree" aria-expanded="false" aria-controls="PPcollapseThree">
                        What is this privacy statement about?  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseThree" class="collapse" aria-labelledby="PPheadingThree" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>This Privacy Notice contains information that we collect through our Site from you. Certain functions of our Site can be used without disclosing any Personal Information, but personal information is required for features or services relating to the Content Offers. You may have to submit or collect "Personal data" (i.e. information which may be used for identifying you and also be referred to as "personally identifiable information" or "personal information") for access to specific features and benefits. Personal data may include, inter alia, information such as name, email address, IP address and device ID.</p>
                      <p>The exactness of personal data submitted to Coursera is your responsibility. Incorrect information may affect your capacity to use the Site, your information about your use of the Site and your ability to contact you. Your e-mail address, for example, should be kept current since we communicate with you in the main manner.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseFour" aria-expanded="false" aria-controls="PPcollapseFour">
                        What you consent to via our site  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseFour" class="collapse" aria-labelledby="PPheadingFour" data-parent="#PPaccordion">
                    <div class="card-body">
                      <ul>
                        <li>We believe that as set out in the following privacy notice, the legal basis for use of your personal informations is: 
                          <ul class="nested-list">
                            <li>We use your Personally Informed Information to meet our obligations under any contract with you (for example, to comply with the Terms of Use of our Site you accept through browsing our website, and/or to respect our contract to provide you, your university institution, your employer or another organisation that could give you access to our Services); or our use of the Services provided by you; Our use of the Personally Informed Information</li>
                            <li>For our legit interests or the legitimate interests of others, use of your personal information is necessary. Our legitimate interests include: operating, expanding, and developing our business; operating our website; providing our services; selecting qualified suppliers; building relationships with partners and academic institutions; conducting research and statistically analysis; marketing and business development; and conducting internal administration and auditing.</li>
                            <li>Consent, send you certain communications, or you give us some information, or rely on local law consent. </li>
                          </ul>
                        </li>
                      </ul>
                      <p>The legal basis for a particular activity will depend on the type and the context of the personal information used. </p>
                      <p>We will take a balance-tested to ensure that our (or other party's) legitimate interests are not outweighed by your interests, fundamental rights and liberties requiring the protection of personal information, if we rely on our (or another party's) legitimate interests to use your Personal Data.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingFive">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseFive" aria-expanded="false" aria-controls="PPcollapseFive">
                        What information do we gather?  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseFive" class="collapse" aria-labelledby="PPheadingFive" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p><b>We collect two kinds of user information via the Site: </b></p>
                      <p>Your use of our site. Information. We can track and collect and aggregate information when users come to our Site indicating, inter alia, what pages of our Site were visited, how they were visited and what links were clicked on. The URLs from which you link to our site also provide us with information. Collecting this data may include logging of each user of the Site's IP address, operating system, and browser software.</p>
                      <p>We may determine the location of the connectivity point from an IP address of a user's internet service provider. You can use the location data to drive your traffic to the nearest local server to reduce latency and improve your experience.</p>
                      <p>You or third parties provide personal information directly. When you register for an account, update or change information on your account, acquire products or services, complete a sample survey and email updates, participate in our public forums, send us email messages and/or take part in content offerings or other services on our Site, we collect your personal data for us. We may use the personal data you provide to answer your questions, provide you with specific content offering and/or services you choose, submit updates on content offers or other events in Coursera, and email you with e-mails on website maintenance or updates.</p>
                      <ul>
                        <li>Registration of Account. 
                          <ul class="nested-list">
                            <li>You may be asked to provide us with personal data, including your name and email address if you register for an account on our Site. </li>
                          </ul>
                        </li>
                        <li>Updates. 
                          <ul class="nested-list">
                            <li>InAct may provide you with the ability to receive updates via email or post on sections of the site that are only accessible to registered users. You may need to provide us with personal information (for example, your name and email address) to subscribe to these services.</li>
                          </ul>
                        </li>
                        <li>Content Offering Participation. 
                          <ul class="nested-list">
                            <li>InAct allows users to participate in content offers on or via the website. You will be requested to give us certain information necessary for the implementation of a content offer if you are interested in participating in a content offer. This may include your name and email address, among other things.</li>
                            <li>If you take part in a Content Offering, we can gather certain content generated by users, such as assignments, peer graded assignments and feedback from peer grading. We also collect course data like in-video quiz responses, stand-alone questionnaires, examinations and surveys. You should not include any personal data or other personal or sensitive information on assignments, exams, or surveys, whether related to you or someone else, but information necessary for participating in or presenting such assignments, examinations or surveys.</li>
                          </ul>
                        </li>
                        <li>Checking Identity. 
                          <ul class="nested-list">
                            <li>You can check your identity for selected services in InAct. InAct can. You may be required to provide personal information, such as your name, address, date of birth, a headshot made on the webcamp and a photo ID document, to us or to our third-party ID Verification Seller to enrol in this service. In addition, you may be required to provide your income information if you apply for financial assistance related to these services.</li>
                          </ul>
                        </li>
                        <li>InAct communication. 
                          <ul class="nested-list">
                            <li>If you send us an email or otherwise contact us, we can receive personal details. </li>
                          </ul>
                        </li>
                        <li>Sites of the Third Party. 
                          <ul class="nested-list">
                            <li>When you access or log in to a third party site, for example Facebook, on our sites, we may receive Personal data. This may include your text and/or images on the third-party site of your Personal Data. </li>
                          </ul>
                        </li>
                        <li>Surveys.
                          <ul class="nested-list">
                            <li>When you provide data in response to an inquiry by us or by a Content Provider, we can receive personal data.</li>
                          </ul>
                        </li>
                        <li>Sites of the partner. 
                          <ul class="nested-list">
                            <li>InAct users can collect non-financial individual user level data about the usage of that partner site by an individual while the partner sites offer those services to Coursera. The partners' websites may share the information with Coursera in order to improve the services provided by the partner website and to improve the training experience of the individual. These details provide information about how long the partner site spends and pages visited.</li>
                          </ul>
                        </li>
                        <li>Payment processing for third parties. 
                          <ul class="nested-list">
                            <li>With a credit card or other options through a third-party service provider, you have the freedom to pay for content offers and other services. Note that your financial information is collected and processed by our service provider – not InAct</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingSix">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseSix" aria-expanded="false" aria-controls="PPcollapseSix">
                        How we use the data  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseSix" class="collapse" aria-labelledby="PPheadingSix" data-parent="#PPaccordion">
                    <div class="card-body">
                      <ul>
                        <li>Information about the use of our Site by you. 
                          <ul class="nested-list">
                            <li>By conducting statistical analyses of our users' collectivity, behaviour and demographics, as well as measuring interests regarding specific areas of our website, we use information regarding your use of the Site to develop higher quality, more useful services. In order to ensure the security of our services and the Site, we can also use this information.</li>
                            <li>Information that you provide personally identifiable, directly or through third parties. Coursera does not disclose your personal data, except as set out in this Privacy Notice or as specifically agreed by you. We may disclose and otherwise use personal data as described below in addition to the other uses set out in this Privacy Notice. </li>
                          </ul>
                        </li>
                        <li>The website and our services are provided. 
                          <ul class="nested-list">
                            <li>In order to enable you to access and use the Site and to provide any information, products, or services you require us, we use Personal Data that you provide to us.</li>
                          </ul>
                        </li>
                        <li>Security and technical support. 
                          <ul class="nested-list">
                            <li>We may use Personal Data to provide technical assistance and to ensure the safety of our services and website, where necessary. </li>
                          </ul>
                        </li>
                        <li>Updates. 
                          <ul class="nested-list">
                            <li>For sending your information in conjunction with the Site or Content Offerings, we use personal data collected by signing up for different email or update services. We may also archive and/or use this information in future contacts where we have a legal right to do so.</li>
                          </ul>
                        </li>
                        <li>Forums. 
                          <ul class="nested-list">
                            <li>You should not publish any personal identification or other data, whether personally identifiable or sensitive, in a forum post. If you choose to post personal information you can collect personal information during your use of the forums. We may publish this information through extensions of our third-party services platform, such as mobile applications.</li>
                            <li>In future versions of Content Offerings we reserve the right to reuse forum posts that provide personal information and to enhance future content offers. This information may be archived and/or used for future communication with you and/or your designate, and/or forwarded to the content provider, business partners or the trainers for the courses you took. We can, without using any personally identifiable information, use or publish forum posts</li>
                          </ul>
                        </li>
                        <li>Content Offering Participation. 
                          <ul class="nested-list">
                            <li>For processing purposes we use the Personal Data we collect from you when you are part of a content offer via the Site, including but not limited to the follow up, progress and completion of content offerings. You may also share your personal data and performance in any content offering with the trainer or trainer who teached it, with teaching workers or others designated by the instructor or trainer for assistance in creating, modifying and operating the offer and with the content providers they are affiliated. We may also share your personal data and your performance in any content offering.</li>
                            <li>We may also use the information generated in the context of an offer of contents or use the services to predict your content offers performance. We can also archive and/or use this information for future contacts, where we have legal rights to do so. This information.</li>
                          </ul>
                        </li>
                        <li>Checking Identity. 
                          <ul class="nested-list">
                            <li>We may use the Personal Data that we collect for the purpose of verifying your identity for services that require identity verification and for authentication of submits made on the web. This service can be provided via an identity verification third-party seller. After successfully verifying your profile information, your photo ID document will be removed.</li>
                          </ul>
                        </li>
                        <li>Communications from or with InAct. 
                          <ul class="nested-list">
                            <li>We can use information from you to reply to your communications and/or as set out in this Privacy Notice to send us an email message or otherwise contact us. We may also archive and/or use this information for future communications with you where we have a legal right to that. We can track how you deal with those emails when we send you emails (such as when you open an email or click on a link inside an email). For optimization and better customization of our communications, we use this information.</li>
                          </ul>
                        </li>
                        <li>Our partners' communications. 
                          <ul class="nested-list">
                            <li>We are able to share your Personal Data with Content Providers and other Coursera business partners, so that Content Providers and other business partners may share any information you have legal right to do so on their products and services. </li>
                          </ul>
                        </li>
                        <li>Research. 
                          <ul class="nested-list">
                            <li>We may share information about your activities at the Website, and information from surveys that we conduct with our content providers and other business partners so our content providers and other business partners can use information for research related to online education (including quiz or assignment submissions, grades and forum discussions).</li>
                          </ul>
                        </li>
                        <li>Operations and maintenance contractors disclosure to InAct.
                          <ul class="nested-list">
                            <li> In order to help us to provide our services to you, we use different service providers, vendors and contractors (collectively, the "Contractors"). As part of the provision of products or services to us, our Contractors may have little access to your Personal Data in order to supply you with our Services. These Contractors may include vendors and suppliers who provide the technology, services and/or content related to the website or content offerings operation and maintenance. Access by these contractors to your personal data is limited to the reasonably necessary information for the contractor to perform its limited role for us</li>
                          </ul>
                        </li>
                        <li>Legal rights and actions; government authorities. 
                          <ul class="nested-list">
                            <li>In order to establish, exercise or protect legal rights or our property, InAct may share its personal data with different governmental authorities in response to summonses, court orders or other legal processes; defend against legal claims; We reserve the right, if any legal objection or right that we may have, to raise or waive.</li>
                            <li>We may also distribute your Personal Data, where we think it appropriate to investigate, prevent or act on illegal or suspected illegal activity and, in connection with our Terms of Use and other agreements, to protect and defend InAct's rights, property or security on the Site, our users, customers or other parties.</li>
                          </ul>
                        </li>
                        <li>Acquirers' disclosure. 
                          <ul class="nested-list">
                            <li>InAct may, as a result of the sale, merger, or reorganisation of all or substantially all of Coursera's equity, business, or assets, disclose and/or transfer your Personal Data to a purchaser, customer, or other successory entity. </li>
                          </ul>
                        </li>
                        <li>E-readers. 
                          <ul class="nested-list">
                            <li>We may architect, use or otherwise use any Personal Data that is related to your use by designated e-readers or other devices to access Coursera's materials.</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingSeven">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseSeven" aria-expanded="false" aria-controls="PPcollapseSeven">
                        Links to the outside  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseSeven" class="collapse" aria-labelledby="PPheadingSeven" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>For your convenience, we provide links to websites operated by organisations that we believe may be of interest to you other than InAct ("Third Party Sites"). Your personal data will not be disclosed on such third-party sites, except on a legally accepted basis. We do not endorse the privacy practises in these third-party sites and are not responsible for them. You should review the privilege policy posted to the other web site to see how the third party web site collects and uses your personal information if you wish to click on one of these third-party web sites.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingEight">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseEight" aria-expanded="false" aria-controls="PPcollapseEight">
                        Retain personal information Identifiable   <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseEight" class="collapse" aria-labelledby="PPheadingEight" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>For the purpose for which the personal information is collected and processed, we do not keep your personal data longer than necessary. The period of time we retain personal information depends on the aims for which we collect it and/or use it to comply, exercise or advocate our law.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingNine">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseNine" aria-expanded="false" aria-controls="PPcollapseNine">
                        Personally Identifiable Information Privacy & Security  <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseNine" class="collapse" aria-labelledby="PPheadingNine" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>In keeping your Personal Data confident and secure, we will use industry standards for physical, technical, and administrative security and do not share this with third parties, unless otherwise provided in this Privacy Notice or unless such divulgation is necessary in special cases, as a physical threat to you or others, as permitted by applicable legal requirements. As the Internet is not a 100% secure environment we are unable to guarantee personal data security and there is a certain risk of an unauthorised third party finding a way to circumvent our security services or of intercepting the transmission of your information through the Internet. The security of your login information is your responsibility. Please note that typically e-mail communications are not encrypted and should not be regarded as safe.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingTen">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseTen" aria-expanded="false" aria-controls="PPcollapseTen">
                        Your personal data is updated or deleted <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseTen" class="collapse" aria-labelledby="PPheadingTen" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>In relation to your personal data, you have certain rights. You may access and confirm that your Personal Data remains correct and current and choose whether or not you want to receive material from us or some of our partners and request that we delete or copy your Personal Data by logging into the Site, selecting 'Settings' from top-right dropdown and scrolling down to find the correct option. You may also access your Personal Data. Some users, particularly those who are registered in credit offers like degrees, MasterTrack certificate programmes and other such offers, can disable the ability to delete an account.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="PPheadingEleven">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#PPcollapseEleven" aria-expanded="false" aria-controls="PPcollapseEleven">
                        Change of our Notice of Privacy <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
                  <div id="PPcollapseEleven" class="collapse" aria-labelledby="PPheadingEleven" data-parent="#PPaccordion">
                    <div class="card-body">
                      <p>Please note that from time to time we review and subject to change our privacy practises. Any changes, updates or changes shall take effect immediately after posting them to our Site. By posting a notification on our home page or by sending an email address associated with your user account and changing the effective day, we notifying you of any material changes to this privacy policy (located at the top and bottom of this page). Make sure you come back regularly to this page so that you know the latest version of this Data Protection Notice.</p>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="Abuse">
            <div class="tab-inner-content">
              <h3>Abuse</h3>
              <div class="content">

              <div id="Abuseaccordion" class="accordion">
                <div class="card">
                  <div class="card-header" id="AbheadingOne">
                    <!-- <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#AbcollapseOne" aria-expanded="false" aria-controls="AbcollapseOne">
                         <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5> -->
                  </div>
              
                  <div id="AbcollapseOne" class="collapse show" aria-labelledby="AbheadingOne" data-parent="#Abuseaccordion">
                    <div class="card-body">
                      <p>Users have a requirement to treat other learners with respect.</p>
                      <ul>
                        <li>
                          Users must not make any comments towards other users or inAct  staff/administrators that:
                          <ul>
                            <li>Contain any material which is defamatory of any other person;</li>
                            <li>Breach the data protection or privacy rights of any person;</li>
                            <li>Contain any material which is obscene, offensive, hateful or inflammatory;</li>
                            <li>Promote sexually explicit material;</li>
                            <li>Promote violence;</li>
                            <li>Promote discrimination based on race, sex, religion, nationality, disability, sexual orientation or age;</li>
                            <li>Infringe any patent, copyright, database right, trademark or other intellectual property right of any other person;</li>
                            <li>Is likely to deceive any other person;</li>
                            <li>Is made in breach of any legal duty owed to a third party, such as contractual duty or a duty of confidence;</li>
                            <li>Promote any illegal activity;</li>
                            <li>Is threatening, abuse or invade another’s privacy, or cause annoyance, inconvenience or needless anxiety;</li>
                            <li>Is likely to harass, upset, embarrass, alarm or annoy any other person;</li>
                            <li>Is used to impersonate any person, or to misrepresent your identity or affiliation with any person</li>
                            <li>Advocates, promotes or assists any unlawful act such as (by way of example only) copyright infringement or computer misuse.</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
              </div>
              

            </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="Termination">
            <div class="tab-inner-content">
              <h3>Terminations</h3>
              <div class="content">

              <div id="Taccordion" class="accordion">
                <div class="card">
                  <div class="card-header" id="TheadingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#TcollapseOne" aria-expanded="false" aria-controls="TcollapseOne">
                        Termination <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5>
                  </div>
              
                  <div id="TcollapseOne" class="collapse" aria-labelledby="TheadingOne" data-parent="#Taccordion">
                    <div class="card-body">
                      <p>We retain discretion to deactivate your account and access to the Website services at any time for any reason whatsoever at our absolute discretion. You can deactivate your account at any time, but inAct shall maintain course tracking history in our database.</p>
                    </div>
                  </div>
                </div>
                
              </div>
              

            </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="Social">
            <div class="tab-inner-content">
              <h3>Social Media</h3>
              <div class="content">

              <div id="SMaccordion" class="accordion">
                <div class="card">
                  <div class="card-header" id="SMheadingOne">
                    <!-- <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#SMcollapseOne" aria-expanded="false" aria-controls="SMcollapseOne">
                        Social Media <i class="fas fa-chevron-down"></i>
                      </button>
                    </h5> -->
                  </div>
              
                  <div id="SMcollapseOne" class="collapse show" aria-labelledby="SMheadingOne" data-parent="#SMaccordion">
                    <div class="card-body">
                      <ul>
                        <li>
                          inAct  reserves the right and has absolute discretion to screen, review, filter, edit, refuse or remove without notice any content posted on any inAct  social media including:
                          <ul>
                            <li>Comments which include offensive, inappropriate or obscene language or content (including images, videos or links);</li>
                            <li>Threatening, abusive or insulting statements likely to stir up hatred;</li>
                            <li>Material infringing copyright or intellectual property rights;</li>
                            <li>Material in breach of privacy or confidentiality obligation; and</li>
                            <li>Spam messages.</li>
                          </ul>
                        </li>
                      </ul>
                      <p class="pl-2"> Users must be 16 years or older to sign up to and post on inAct social media accounts.                      </p>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    
  </main>
@endsection
