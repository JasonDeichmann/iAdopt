<?php
 include '/curl_funcs.php';
//name age type
    // Adding
    $pet1 = array(
            'name'=>'Mark',
            'age'=>'69',
            'type' =>'turtle',
            'gender'=>'male'
    );
    $pet2 = array(
            'name'=>'markbarraquias@gmail.com',
            'age'=>'mark barraquias',
            'type' =>'user',
            'gender'=>'female'
    );

    curl_post('/db/accounts/', $pet1);
    curl_post('/db/accounts/', $pet2);

    curl_post('/db/accounts/', $pet3);
    curl_post('/db/accounts/', $pet4);

    curl_post('/db/accounts/', $pet5);
    curl_post('/db/accounts/', $pet6);

    curl_post('/db/accounts/', $pet7);
    curl_post('/db/accounts/', $pet8);

    curl_post('/db/accounts/', $pet9);
    curl_post('/db/accounts/', $pet10);
    

    /* Delete
    curl_delete("/db/accounts/5a113f700bbc74fc2aa2e129");
    curl_delete("/db/accounts/5a113f700bbc74fc2aa2e127");
    */

    // Getting
    /* 
    $email = curl_getByEmail("/db/accounts/", "jasondeichmann@yahoo.com");
    echo $email['email'];
    echo $email['password'];
    */


?>