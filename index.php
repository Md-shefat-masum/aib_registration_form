<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIB Registration Form</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/google_icon/google_icons.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>

<body>
    <div class="form">
        <div class="form_body">
            <div class="class">
                <h2>Equivalent to AIB Form-128</h2>
            </div>
            <div class="header">
                <div class="logo">
                    <img src="./assets/images/logo.jpg" alt="">
                </div>
                <div class="information">
                    <h2 class="campus">
                        AERONAUTICAL INSTITUTE OF BANGLADESH
                    </h2>
                    <h3>
                        Registration Form
                    </h3>
                    <h4>
                        Part-66 Module Examination
                    </h4>
                </div>
                <div class="photo">
                    <label for="profile_pic">
                        <input type="file" accept="image/*" onchange="profile_pic_preview.src = window.URL.createObjectURL(event.target.files[0])" id="profile_pic">
                        <span>
                            Attach a Passport Size Photo
                        </span>
                        <img src="" id="profile_pic_preview">
                    </label>
                </div>
            </div>
            <div class="intro">
                <h2 class="heading">Instruction</h2>
                <p>
                    Please fill up the form in BLOCK CAPITALS as per NID/Birth Certificate/Passport using black ink.
                    Attach the required documents.
                </p>
            </div>
            <div class="p_details">
                <h2 class="heading">
                    Personal Details
                </h2>
                <table class="form_table">
                    <tbody>
                        <?php
                        $fields = [
                            "Full Name",
                            "Father's Name",
                            "NID/B.C./Passport Number",
                            "Date of Birth",
                            "Gender",
                            "Present Address",
                            "Permanent Address",
                            "Nationality",
                            "Phone Number",
                            "Email",
                        ];
                        function strim($str)
                        {
                            return trim(strtolower(str_replace(" ", "_", $str)), " ");
                        }
                        ?>
                        <?php
                        foreach ($fields as $key => $value) {
                        ?>
                            <tr>
                                <td>
                                    <label for="<?= strim($value) ?>">
                                        <?= $value ?>
                                    </label>
                                </td>
                                <td>
                                    <input id="<?= strim($value) ?>" name="<?= strim($value) ?>" placeholder="..." type="text">
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="education">
                <h2 class="heading">
                    Educational Qualification(s)
                </h2>
                <table>
                    <tbody>
                        <tr>
                            <td>SI. No.</td>
                            <td>Qualification</td>
                            <td>Group/Subject </td>
                            <td>Result/Grade </td>
                            <td>Passing Year </td>
                        </tr>
                        <?php
                        for ($i = 0; $i < 3; $i++) {

                        ?>
                            <tr>
                                <td><input type="text" placeholder="..."></td>
                                <td><input type="text" placeholder="..."></td>
                                <td><input type="text" placeholder="..."></td>
                                <td><input type="text" placeholder="..."></td>
                                <td><input type="text" placeholder="..."></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <p>
                    N.B.: HSC/Diploma/Equivalent Qualification must be mentioned.

                </p>
            </div>

            <div class="category">
                <h2 class="heading">
                    Category / Subcategory of Examination (Tick as Appropriate)
                </h2>
                <table>
                    <tbody>

                        <tr>
                            <td>Please Select</td>
                            <td colspan="2">Category / Subcategory</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                B1.1
                            </td>
                            <td>
                                Aeroplane Turbine
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                B1.2
                            </td>
                            <td>
                                Helicopter Turbine
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="checkbox">
                            </td>
                            <td>
                                B2
                            </td>
                            <td>
                                Avionics
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="application_for">
                <h2 class="heading">
                    Application for:
                </h2>
                <p>
                    Please tick the box corresponding to the module that you like to sit for:
                </p>
                <table>
                    <tbody>
                        <tr>
                            <td>Please Select</td>
                            <td>Module Number</td>
                            <td>Module Name</td>
                        </tr>
                        <?php
                        $application_fors = [
                            [
                                "module" => "1",
                                "name" => "Mathematics"
                            ],
                            [
                                "module" => "2",
                                "name" => "Physics"
                            ],
                            [
                                "module" => "3",
                                "name" => "Electrical Fundamentals"
                            ],
                            [
                                "module" => "4",
                                "name" => "Electronic Fundamentals"
                            ],
                            [
                                "module" => "5",
                                "name" => "Digital Techniques / Electronic Instrument Systems"
                            ],
                            [
                                "module" => "6",
                                "name" => "Materials & Hardware"
                            ],
                            [
                                "module" => "7A",
                                "name" => "Maintenance Practices"
                            ],
                            [
                                "module" => "8",
                                "name" => "Basic Aerodynamics"
                            ],
                            [
                                "module" => "9A",
                                "name" => "Human Factors"
                            ],
                            [
                                "module" => "10",
                                "name" => "Aviation Legislation"
                            ],
                            [
                                "module" => "11A",
                                "name" => "Aeroplane Aerodynamics, Structures and Systems"
                            ],
                            [
                                "module" => "12",
                                "name" => "Helicopter Aerodynamics, Structures and Systems"
                            ],
                            [
                                "module" => "13",
                                "name" => "Aircraft Aerodynamics, Structures and Systems"
                            ],
                            [
                                "module" => "12",
                                "name" => "Helicopter Aerodynamics, Structures and Systems"
                            ],
                            [
                                "module" => "14",
                                "name" => "Propulsion"
                            ],
                            [
                                "module" => "15",
                                "name" => "Gas Turbine Engines"
                            ],
                            [
                                "module" => "17A",
                                "name" => "Propellers"
                            ],
                        ];
                        ?>
                        <?php
                        foreach ($application_fors as $key => $value) {
                        ?>
                            <tr>
                                <td>
                                    <input class="" type="checkbox">
                                </td>
                                <td>
                                    <?= $value["module"] ?>
                                </td>
                                <td>
                                    <?= $value["name"] ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="essay">
                <div class="left">
                    <b>ESSAY</b>
                </div>
                <div class="right">
                    <?php
                    $essays = ["Module 7A", "Module 9A", "Module 10"];
                    ?>
                    <?php
                    foreach ($essays as $item) {
                    ?>
                        <label for="">
                            <input type="checkbox">
                            <?= $item ?>
                        </label>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="previous_attemp_module">
                <h2 class="heading">
                    Information of Previously Attempted Modules:
                </h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Module No.</td>
                            <td>Date of 1st Attempt & Exam Center</td>
                            <td>Date of 2nd Attempt & Exam Center</td>
                            <td>Date of 3rd Attempt & Exam Center</td>
                        </tr>
                        <?php
                        for ($i = 0; $i < 4; $i++) {
                        ?>
                            <tr>
                                <td><input type="text" placeholder="..."></td>
                                <td><input type="text" placeholder="..."></td>
                                <td><input type="text" placeholder="..."></td>
                                <td><input type="text" placeholder="..."></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="previous_attemp_module">
                <h2 class="heading">
                    Information of Previously Attempted Modules:
                </h2>
                <p>
                    I hereby declare that the information I have submitted is correct. I have not taken the above module
                    exam(s) within the last 90 days. I shall abide by the rules and regulations of the Aeronautical Institute of
                    Bangladesh (AIB).
                </p>
            </div>
            <div class="signature">
                <div class="left">
                    <b>Signature of Applicant</b>
                </div>
                <div class="right">
                    <b>Date:</b>
                </div>
            </div>
            <div class="previous_attemp_module">
                <h2 class="heading">
                    Information of Previously Attempted Modules:
                </h2>
                <div>
                    <b>Registration Number:</b>
                    <b>Comments:</b>
                </div>
            </div>
            <div class="signature signature2">
                <div class="left">
                    <b>Signature of Admin Officer</b>
                </div>
                <div class="right">
                    <b>Signature of Training Manager</b>
                </div>
            </div>
        </div>
    </div>
</body>

</html>