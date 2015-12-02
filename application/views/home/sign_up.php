
    <!-- end nav -->
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="account-login">
                <div class="page-title">
                    <h2>Create an Account</h2>
                </div>
                <fieldset class="col2-set">
                    <legend>Create an Account</legend>
                    <div class="col-8 new-users form content"><strong>New Customers</strong>
                        <form role="form" id="new_user" form="new_user" method="post" action="<?=site_url()?>home/after_post_sign_up" enctype="multipart/form-data">
                            <div class="box-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <label>User Name</label>
                                            <input type="text" class="form-control" id="name" name="username" />
                                            <span id="name_error" class="label label-danger"></span>
                                        </td>
                                        <td>
                                            <label>Email Address</label>
                                            <input type="text" class="form-control" name="contact" id="contact" />
                                            <span id="email" class="label label-danger"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="address">Password</label>
                                            <input type="password" id="pass1" class="form-control" name="password" />
                                            <span id="pass1_error" class="label label-danger"></span>
                                        </td>
                                        <td>
                                            <label for="address">RePassword</label>
                                            <input type="password" id="pass2" class="form-control" name="re_password" />
                                            <span id="pass2_error" class="label label-danger"></span>
                                        </td>
                                    </tr>
                            </div>
                            </table>
                            <div class="buttons-set">
                                <button type="submit" name="submit" id="register" class="button center-block">Register</button>
                            </div>

                            <!-- /.box-body -->
                        </form>

                </fieldset>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>

<?php
/**
 * Created by PhpStorm.
 * User: Hanif
 * Date: 12/1/2015
 * Time: 4:47 PM
 */