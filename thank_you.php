<?php
include('header.php');
include('./files/DB_conn.php');

    if (isset($_POST['submit'])) { // Fetching variables of the form which travels in URL
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $adharno = $_POST['adharno'];
        $education = $_POST['education'];
        $occupation = $_POST['occupation'];
        $district = $_POST['district'];
        $subdivision = $_POST['subdivision'];
        $city = $_POST['city'];
        //echo "$name $email $mobile $adharno $education $occupation";
        if ($name != '' || $email != '') {
            $sql = "INSERT INTO stud_data (full_name, email, mobile, aadhar_card, education, occupation, district, sub_division, city) VALUES('$name', '$email', '$mobile', '$adharno' ,'$education', '$occupation', '$district', '$subdivision', '$city')";
            $result = $conn->query($sql);
            //echo "$result";
            if ($result) {  
                //echo "Data is inserted successfully";
                ?>
                <section class="mt-5 mb-5">
                    <div class="container">
                       <h1 class="message">Thank you for Registration. We will connect with you shortly</h1>
                    </div>
                </section>

    <?php        }
        } else {
            echo "please try later...!!!";
        }
    }
    $conn->close(); // Closing Connection with Server
    ?>


<?php
include('footer.php')
?>