<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calvin Christian Ho</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="MainPage.css">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <div style="width: 32px; height: 32px; overflow: hidden; border-radius: 50%;">    
                        <img src="images/CircleProfile.jpg" alt="Foto Profil" style="width: 100%; height: auto; display: block;">
                    </div>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Calvin Chritsian Ho</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <!-- Biodata -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link active" onclick="toggleActive(this, 'about')">
                        <i class="lni lni-user"></i>
                        <span>About</span>
                    </a>
                </li>
                <!-- Resume -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" onclick="toggleActive(this, 'resume')">
                        <i class="lni lni-empty-file"></i>
                        <span>Resume</span>
                    </a>
                </li>
                <!-- My Portfolio -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" onclick="toggleActive(this, 'portfolio')" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-folder"></i>
                        <span>Portfolio</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <!-- Final Project 3th Semester -->
                        <li class="sidebar-item">
                            <a href="https://github.com/CalvinChristian27/Final-Project-OOP" class="sidebar-link">Puskesmas Dangun Java Project</a>
                        </li>
                        <!-- AR Project 4th Semester -->
                        <li class="sidebar-item">
                            <a href="https://drive.google.com/drive/folders/1Ac2U2th6Kg1ec8bmUh3A9UMRMAWpzL3U" class="sidebar-link">Digital Realty AR Project</a>
                        </li>
                    </ul>
                </li>
                <!-- My Contact and Social Media -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link" onclick="toggleActive(this, 'contact')">
                        <i class="lni lni-envelope"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Exit</span>
                </a>
            </div>
        </aside>
        <div class="main p-3" id="content">
            <h1>
            </h1>
        </div>
    </div>
    <script>
        window.onload = function() {
            loadMenu('about');
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="scriptMainPage.js"></script>
</body>
</html>