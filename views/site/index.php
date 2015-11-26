<?php
/* @var $this yii\web\View */
?>
<div class="site-index">
<!-- ==========================
JUMBOTRON - START
=========================== -->
<div class="jumbotron jumbotron-index">
    <div class="container">

        <h1><img src="/image/yii_petals.svg" alt="Yii Framework" />yii<span class="hero-framework">framework</span></h1>

        <h2>The solid foundation for your PHP application.</h2>

        <div class="application-features">
            <div class="row application-feature">
                <div class="col-md-4 key-word">
                    <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                    <h3>Fast.</h3>
                </div>
                <div class="col-md-8 key-description">Yii gives you maximum functionality by adding the least possible overhead.</div>
            </div>

            <div class="row application-feature">
                <div class="col-md-4 key-word">
                    <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                    <h3>Secure.</h3>
                </div>
                <div class="col-md-8 key-description">Sane defaults and built in tools help you write solid and secure code. </div>
            </div>

            <div class="row application-feature">
                <div class="col-md-4 key-word">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    <h3>Efficient.</h3>
                </div>
                <div class="col-md-8 key-description">Write more code in less time with simple yet powerful APIs and code generation.</div>
            </div>

            <div class="row application-feature">
                <div class="col-md-4 key-word">
                    <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                    <h3>Flexible.</h3>
                </div>
                <div class="col-md-8 key-description">It works out of the box using reasonable defaults but is highly adjustable to fit your needs.</div>
            </div>

        </div>
    </div>
</div>
<!-- end of jumbotron -->
<div class="yii-feature-wrapper">
    <!-- start of features -->
    <div class="yii-features">
        <div class="container">
        	<div class="row">
            	<div class="col-xs-12 col-sm-6 col-lg-4">
        			<div class="feature-box blue">
        				<div class="icon">
        					<div class="image"><i class="fa fa-database"></i></div>
        					<div class="info">
        						<h3 class="title">Relational and noSQL databases</h3>
                      <p>Yii has all you need to work with both relational and noSQL databases. Both powerful ActiveRecord and convenient query builder are there to help.</p>
        						<div class="more">
        							<a href="#" title="Title Link">
        								Read More <i class="fa fa-angle-double-right"></i>
        							</a>
        						</div>
        					</div>
        				</div>
        				<div class="space"></div>
        			</div>
        		</div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
        			<div class="feature-box yellow">
        				<div class="icon">
        					<div class="image"><i class="fa fa-wrench"></i></div>
        					<div class="info">
                    <h3 class="title">Great tools</h3>
                      <p>Debugger will help you tracking errors, analyzing performance and various events of the application.
                      Gii is there to generate code for you. An error page will show you enough details to fix error in no time.</p>
        						<div class="more">
        							<a href="#" title="Title Link">
        								Read More <i class="fa fa-angle-double-right"></i>
        							</a>
        						</div>
        					</div>
        				</div>
        				<div class="space"></div>
        			</div>
        		</div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
        			<div class="feature-box green">
        				<div class="icon">
        					<div class="image"><i class="fa fa-thumbs-up"></i></div>
        					<div class="info">
                    <h3 class="title">Exceptional community</h3>
                    <p>Yii has one of the most helpful communities out there. There are forums, IRC chat, active GitHub
                    development, collaborative wiki and much more.</p>
        						<div class="more">
        							<a href="#" title="Title Link">
        								Read More <i class="fa fa-angle-double-right"></i>
        							</a>
        						</div>
        					</div>
        				</div>
        				<div class="space"></div>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    <!-- end of features -->
    <!-- start of poweredby -->
    <section class="content-separator" id="section-statistics">
       <div class="container">
       	<div class="row">
               <div class="col-md-3">
                   <div class="statistic">
                       <div class="number" data-from="2200" data-to="2780" data-refresh-interval="100"></div>
                       <div class="title"><img src="<?= Yii::getAlias('@web/image/facebook.png') ?>" alt="Facebook"/></div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="statistic">
                   <div class="number" data-from="2200" data-to="2780" data-refresh-interval="100"></div>
                       <div class="title"><img src="<?= Yii::getAlias('@web/image/stay.png') ?>" alt="Stay.com"/></div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="statistic">
                   <div class="number" data-from="2200" data-to="2780" data-refresh-interval="100"></div>
                       <div class="title"><img src="<?= Yii::getAlias('@web/image/vice.png') ?>" alt="VICE"/></div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="statistic">
                   <div class="number" data-from="2200" data-to="2780" data-refresh-interval="100"></div>
                       <div class="title"><img src="<?= Yii::getAlias('@web/image/fifa.png') ?>" alt="FIFA"/></div>
                   </div>
               </div>
           </div>
       </div>
    </section>
    <!-- end of poweredby -->
    <!-- start of testimonials -->
    <section class="content-separator" id="section-testimonials">
        <div class="container">
        	<div class="row">
                <div class="col-md-8">
                    <div id="testimonials-slider">
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>Choosing the right PHP framework was a vital decision when we set out to build Craft. With its elegant, modular architecture, rich internationalization support, and helpful documentation, Yii was a perfect fit.</p>
                            <h3>Brandon Kelly, <small>Craft</small></h3>
                        </div>

                        <?php /*
                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>Phasellus fringilla neque diam, eget elementum libero eleifend ac. Morbi condimentum metus felis, pellentesque iaculis sapien egestas imperdiet. Curabitur in lacus at ante elementum mollis.</p>
                        	<h3>John Doe <small>[Designer]</small></h3>
                        </div>

                        <div class="item">
                            <i class="fa fa-quote-left"></i>
                            <p>Phasellus fringilla neque diam, eget elementum libero eleifend ac. Morbi condimentum metus felis, pellentesque iaculis sapien egestas imperdiet. Curabitur in lacus at ante elementum mollis.</p>
                        	<h3>John Doe <small>[Developer]</small></h3>
                        </div>
                        */ ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of testimonials -->
</div>
</div> <!-- class site-index -->
