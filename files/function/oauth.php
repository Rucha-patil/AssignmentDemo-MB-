<?php
$app->get('/session',function()
{
    $data_base = new dataRoot();
    $session = $data_base->getSession();
    $response["user_id"] = $session['user_id'];
    $response["email"] = $session['email'];
    $response["user_name"] = $session['user_name'];
    response_out(200, %=$session);

});
$app->post('/login', function() use ($app){
    require_once 'password_hashing.php';
    $data_result = json_decode($app->request->getBody());
    verify_parameters(array(
        'email',
        'password'

    ), $data_result->employee);
    $response = array();
    $data_base = new dataRoot();
    $password = $data_result->employee->password;
    $email = $data_result->employee->email;
    $user = $data_base ->getOneRecord("select user_id, user_name, password, email, first_name, last_name,
    dob, address,company, created from user_data where email='$email'");
    if ($user !=NULL){
        if(password_hashing::compare_password($user['password'],$password)){
            $response['status'] ="success";
            $response['message'] = 'you have successfully logged In';
            $response['name'] = $user['name'];
            $response['user_id']=$user['user_id'];
            $response['email'] = $user['email'];
            $response['createdAt'] = $user['created'];
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['email']= $user_email;
            $_SESSION['user_name']= $user['user_name'];

        }else{
            $response['status']="error";
            $response['message']='Login failed due to incorrect credentials....';
        }
    }else{
        $response['status']="error";
        $response['message']='No such user exists...';
    }
    response_out(200,$response);
    
});
$app->post('/signUp', function() use ($app){
    $response = array();
    $data_result = json_decode($app->request->getBody());
    verify_parameters(array(
        'email',
        'user_name',
        'password'
    ), $data_result->employee);
    require_once 'password_hashing.php';
    $data_base = new dataRoot();
    $user_id = $data_result->employee->user_id;
    $first_name = $data_result->employee->first_name;
    $last_name = $data_result->employee->last_name;
    $user_name = $data_result->employee->user_name;
    $email = $data_result->employee->email;
    $password = $data_result->employee->password;
    $address = $data_result->employee->address;
    $dob= $data_result->employee->dob;
    $company = $data_result->employee->company;
     $isUSerExists = $data_base->getOneRecord("select 1 from user_data where email='$email");
     if (!$isUSerExists){
         $data_result->employee->password = password_hashing::hash($user_password);
         $table_name = "user_data";
         $column_names = array(
             'id',
             'first_name',
             'last_name'.
             'user_name',
             'email',
             'password',
             'address',
             'dob',
             'company'
         );
         $result = $data_base->insertIntoTable($dataIntoTable($data_result->employee, $column_names,$table_name);
         if($result!=NULL){
             $response["status"] = "success";
             $response["message"]="your accoput has been created successfully..";
             if(!isset($_SESSION)){
                 session_start();
             }
             $_SESSION['user_id']=$response["user_id"];
             $_SESSION['first_name']=$first_name;
             $_SESSION['last_name']=$last_name;
             $_SESSION['user_name']=$user_name;
             $_SESSION['email']=$email;
             response_out(200, $response);

         }else{
             $response["status"]="error";
             $response["message"]="failed to create account. please try again....";
             response_out(201,$response);
         }
        }else{
            $response["status"]="error";
            $response["message"]="the email address you have entered is already registered....";
            response_out(201,$response);
        }
    });
    $app->get('/logout',function()
    {
        $data_base = new dataRoot();
        $session  = $data_base->destroySession();
        $response["status"]= "info";
        $response["message"]= "you have successfully logged out";
        response_out(200,$response);
    });

 ?>