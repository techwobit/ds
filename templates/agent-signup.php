<?php
/**
 * Template Name: Agent Signup
 * Template Post Type: page
 *
 * @package WordPress
 */

get_header();
?>

<main id="site-content" role="main">

	<div class="container">
        <div class="col-8 offset-sm-2 col-xs-12">
            <form action="" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text text-center">Agent Registration</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" id="" class="form-control" />                            
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" id="" class="form-control" />                            
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" />                            
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="user_email" id="userEmail" class="form-control" />                            
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Ref ID</label>
                                    <input type="text" name="reference_id" id="" class="form-control" />                            
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Referral link</label>
                                    <input type="link" name="referral_link" id="" class="form-control" />                            
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-group">
                                    <label>License number</label>
                                    <input type="number" name="license_number" id="" class="form-control" />                            
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Profile Photo</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>        
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="user_password" id="userPassword" class="form-control" />                            
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" id="confirmPassword" class="form-control" />                            
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
