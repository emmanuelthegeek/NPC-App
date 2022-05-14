<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>National Population Commission</title>
    <!-- Favicons -->
    <link href="images/favicon.webp" rel="icon">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/npc1.jpg" alt="" style="height: auto;">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>User Data Record</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email :</label>
                            <input type="email" name="email" id="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number :</label>
                            <input type="number" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="text" id="address" required/>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">GENDER :</label>
                                <div class="form-select">
                                    <select name="gender" id="gender">
                                        <option value=""></option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>