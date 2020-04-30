<div class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">
 <div class="navbar-header">
      <a class="navbar-brand" href="">
 </div>
 <div class="collapse navbar-collapse">
     <ul class="nav navbar-nav navbar-right">
        <li><a href="#/login">Log In</li>
     </ul>
 </div>
</div>
</div>
<h2 align="center">AngularJS User signup and login</h2>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
           <form name="signupForm" class="form-horizontal" role="form">
              <h3 align="center">Sign Up</h3>
              </br>
              <div class="form-group">
                  <input type="text" id="display_fname" class="form-control input-lg" placeholder="Firstname" ng-model="signup.first_name">
              </div>
              <div class="form-group">
                  <input type="text" id="display_lname" class="form-control input-lg" placeholder="Lastname" ng-model="signup.last_name">
              </div>
              <div class="form-group">
                  <input type="text" id="display_name" class="form-control input-lg" placeholder="Username" ng-model="signup.user_name">
              </div>
              <div class="form-group">
                  <input type="text" id="display_address" class="form-control input-lg" placeholder="Address" ng-model="signup.address">
              </div>
              <div class="form-group">
                  <input type="date" id="display_dob" class="form-control input-lg" placeholder="DOB" ng-model="signup.dob">
              </div>
              <div class="form-group">
                  <input type="text" id="display_company" class="form-control input-lg" placeholder="Company" ng-model="signup.company">
              </div>
              
              <div class="form-group">
                  <input type="email"  class="form-control input-lg" placeholder="Email" ng-model="signup.email" focus>
                  <span ng-show="signupForm.email.$error.email" class="help-inline">Invalid email address</span>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                   <div class="form-group">
                        <input type="password" class="form-control input-lg" name="password" placeholder="Password" ng-model="signup.password" required>
                              <span class="errorMessage" data-ng-show="signupForm.password.$dirty && signupForm.password.$invalid">Enter Password</span>

                    </div>
                    </div>
                    <div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                         <div class="form-group">
                             <input type="password" class="form-control input-lg" name="confPassword" placeholder="Password again" 
                             ng-model="signup.confPassword" password-match="signup.password" required>
                                 <span class="errorMessage" data-ng-show="signupForm.confPassword.$dirty && signupForm.confPassword.$error.required">
                                 Enter Confirm Password</span>

                                 <span style="color:#F00" class="errorMessage" data-ng-show="signUpForm.confPassword.$dirty &&
                                 signupForm.confPassword.$error.passwordNoMatch && :signupForm.confPassword.$error.required">
                                 Password do not match, please retype..</span>
                          </div>
                     </div>
                    </div>

                    <div class="row">
                         <div class="col-xs-12 col-md-6"><a href="#/login" class="btn btn-success btn-lg">Log In></a></div>
                         <div class="col-xs-12 col-md-6">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" ng-click="signUp(signup)" data-ng-disbled="signupForm.$invalid">
                            Sign Up</button>
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>
                    </div>



