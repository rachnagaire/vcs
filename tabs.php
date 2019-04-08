<!doctype html>
<html lang="en">

<head>
<?php include 'inc/head.php'; ?>
</head>

<body>
    <h1 class="sr-only">Vesuvio Admin Template</h1>
    <div class="wrapper">
        <!-- aside navigation starts -->
        <?php include 'inc/aside.php'; ?>
        <!-- aside navigation ends -->

        <!-- main starts -->
        <main role="main" class="main">
            <!-- topbar starts -->
            <?php include 'inc/top-sticky.php'; ?>
            <!-- topbar ends -->

            <!-- main content starts -->
            <div class="main-content">
                <div class="container-fluid">
                    <!-- page head starts -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-none p-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tabs</li>
                        </ol>
                    </nav>
                    <div class="page-head d-flex justify-content-between">
                        <h3 class="mb-5">Tabs</h3>
                    </div>
                    <!-- page head ends -->
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Tabs</h5>
                                <br>
                                <ul class="nav nav-tabs nav-tabs-custom" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active p-3 py-5" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                        In condimentum, dolor non rutrum suscipit, lacus metus iaculis mauris, sollicitudin
                                        commodo orci mi eu mauris. Sed condimentum eleifend massa eu consequat. Proin et
                                        sollicitudin magna. Phasellus aliquet arcu in euismod ultrices. Ut vestibulum faucibus
                                        lobortis. Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices
                                        libero id mattis. Cras vitae leo ac dolor blandit lacinia ultrices sit amet velit.
                                        Nam velit diam, condimentum vitae ultricies sed, condimentum id urna. Cras vestibulum
                                        et dui pellentesque faucibus. Mauris velit ante, congue at mattis sit amet, molestie
                                        at felis. Etiam tincidunt risus in convallis ultrices. Integer laoreet ante et maximus
                                        sagittis.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices libero id mattis. Cras vitae leo ac dolor blandit
                                        lacinia ultrices sit amet velit. Nam velit diam, condimentum vitae ultricies sed,
                                        condimentum id urna. Cras vestibulum et dui pellentesque faucibus. Mauris velit ante,
                                        congue at mattis sit amet, molestie at felis. Etiam tincidunt risus in convallis
                                        ultrices. Integer laoreet ante et maximus sagittis.
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Pills</h5>
                                <br>
                                <ul class="nav nav-pills" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Contact</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active p-3 py-5" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                        In condimentum, dolor non rutrum suscipit, lacus metus iaculis mauris, sollicitudin
                                        commodo orci mi eu mauris. Sed condimentum eleifend massa eu consequat. Proin et
                                        sollicitudin magna. Phasellus aliquet arcu in euismod ultrices. Ut vestibulum faucibus
                                        lobortis. Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices
                                        libero id mattis. Cras vitae leo ac dolor blandit lacinia ultrices sit amet velit.
                                        Nam velit diam, condimentum vitae ultricies sed, condimentum id urna. Cras vestibulum
                                        et dui pellentesque faucibus. Mauris velit ante, congue at mattis sit amet, molestie
                                        at felis. Etiam tincidunt risus in convallis ultrices. Integer laoreet ante et maximus
                                        sagittis.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                                        Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices libero id mattis. Cras vitae leo ac dolor blandit
                                        lacinia ultrices sit amet velit. Nam velit diam, condimentum vitae ultricies sed,
                                        condimentum id urna. Cras vestibulum et dui pellentesque faucibus. Mauris velit ante,
                                        congue at mattis sit amet, molestie at felis. Etiam tincidunt risus in convallis
                                        ultrices. Integer laoreet ante et maximus sagittis.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Fill and justify</h5>
                                <br>
                                <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active p-3 py-5" id="home3" role="tabpanel" aria-labelledby="home-tab">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                        In condimentum, dolor non rutrum suscipit, lacus metus iaculis mauris, sollicitudin
                                        commodo orci mi eu mauris. Sed condimentum eleifend massa eu consequat. Proin et
                                        sollicitudin magna. Phasellus aliquet arcu in euismod ultrices. Ut vestibulum faucibus
                                        lobortis. Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices
                                        libero id mattis. Cras vitae leo ac dolor blandit lacinia ultrices sit amet velit.
                                        Nam velit diam, condimentum vitae ultricies sed, condimentum id urna. Cras vestibulum
                                        et dui pellentesque faucibus. Mauris velit ante, congue at mattis sit amet, molestie
                                        at felis. Etiam tincidunt risus in convallis ultrices. Integer laoreet ante et maximus
                                        sagittis.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="contact3" role="tabpanel" aria-labelledby="contact-tab">
                                        Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices libero id mattis. Cras vitae leo ac dolor blandit
                                        lacinia ultrices sit amet velit. Nam velit diam, condimentum vitae ultricies sed,
                                        condimentum id urna. Cras vestibulum et dui pellentesque faucibus. Mauris velit ante,
                                        congue at mattis sit amet, molestie at felis. Etiam tincidunt risus in convallis
                                        ultrices. Integer laoreet ante et maximus sagittis.
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Tabs with Vertical Pills</h5>
                                <br>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                aria-selected="true">Home</a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                aria-selected="false">Profile</a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                aria-selected="false">Messages</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                aria-selected="false">Settings</a>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                                felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus
                                                aliquet eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent
                                                maximus viverra orci, id auctor mauris pharetra ut. Donec pharetra rutrum
                                                magna, et euismod orci suscipit quis. Morbi et felis tellus. Vivamus et libero
                                                vel augue sagittis convallis sed sed diam. Maecenas auctor scelerisque neque,
                                                vel dignissim ex porta eget. Proin ornare mollis libero, eu mollis metus
                                                accumsan in. Sed in faucibus velit. Cras euismod pulvinar pulvinar. Proin
                                                mollis, tellus ut vulputate tristique, nisl est hendrerit tortor, quis vehicula
                                                urna sapien sit amet purus. Suspendisse sit amet tellus nisi. In condimentum,
                                                dolor non rutrum suscipit, lacus metus iaculis mauris, sollicitudin commodo
                                                orci mi eu mauris. Sed condimentum eleifend massa eu consequat. Proin et
                                                sollicitudin magna. Phasellus aliquet arcu in euismod ultrices. Ut vestibulum
                                                faucibus lobortis. Vestibulum porttitor purus sed porta varius. Phasellus
                                                cursus ultrices libero id mattis. Cras vitae leo ac dolor blandit lacinia
                                                ultrices sit amet velit. Nam velit diam, condimentum vitae ultricies sed,
                                                condimentum id urna. Cras vestibulum et dui pellentesque faucibus. Mauris
                                                velit ante, congue at mattis sit amet, molestie at felis. Etiam tincidunt
                                                risus in convallis ultrices. Integer laoreet ante et maximus sagittis.
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices libero id mattis. Cras vitae leo ac dolor blandit
                                                lacinia ultrices sit amet velit. Nam velit diam, condimentum vitae ultricies
                                                sed, condimentum id urna. Cras vestibulum et dui pellentesque faucibus. Mauris
                                                velit ante, congue at mattis sit amet, molestie at felis. Etiam tincidunt
                                                risus in convallis ultrices. Integer laoreet ante et maximus sagittis.
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                                morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                                felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus
                                                aliquet eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent
                                                maximus viverra orci, id auctor mauris pharetra ut. Donec pharetra rutrum
                                                magna, et euismod orci suscipit quis. Morbi et felis tellus. Vivamus et libero
                                                vel augue sagittis convallis sed sed diam. Maecenas auctor scelerisque neque,
                                                vel dignissim ex porta eget. Proin ornare mollis libero, eu mollis metus
                                                accumsan in. Sed in faucibus velit. Cras euismod pulvinar pulvinar. Proin
                                                mollis, tellus ut vulputate tristique, nisl est hendrerit tortor, quis vehicula
                                                urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                Cras vestibulum et dui pellentesque faucibus. Mauris velit ante, congue at mattis sit amet, molestie at felis. Etiam tincidunt
                                                risus in convallis ultrices. Integer laoreet ante et maximus sagittis.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="box p-4">
                                <h5>Basic Tabs</h5>
                                <br>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active p-3 py-5" id="home3" role="tabpanel" aria-labelledby="home-tab">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                        In condimentum, dolor non rutrum suscipit, lacus metus iaculis mauris, sollicitudin
                                        commodo orci mi eu mauris. Sed condimentum eleifend massa eu consequat. Proin et
                                        sollicitudin magna. Phasellus aliquet arcu in euismod ultrices. Ut vestibulum faucibus
                                        lobortis. Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices
                                        libero id mattis. Cras vitae leo ac dolor blandit lacinia ultrices sit amet velit.
                                        Nam velit diam, condimentum vitae ultricies sed, condimentum id urna. Cras vestibulum
                                        et dui pellentesque faucibus. Mauris velit ante, congue at mattis sit amet, molestie
                                        at felis. Etiam tincidunt risus in convallis ultrices. Integer laoreet ante et maximus
                                        sagittis.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non vulputate ipsum, eu auctor magna. Pellentesque habitant
                                        morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque
                                        felis velit, molestie vel tortor id, porttitor imperdiet mauris. Sed faucibus aliquet
                                        eros vel commodo. Cras quis semper nibh, vel cursus risus. Praesent maximus viverra
                                        orci, id auctor mauris pharetra ut. Donec pharetra rutrum magna, et euismod orci
                                        suscipit quis. Morbi et felis tellus. Vivamus et libero vel augue sagittis convallis
                                        sed sed diam. Maecenas auctor scelerisque neque, vel dignissim ex porta eget. Proin
                                        ornare mollis libero, eu mollis metus accumsan in. Sed in faucibus velit. Cras euismod
                                        pulvinar pulvinar. Proin mollis, tellus ut vulputate tristique, nisl est hendrerit
                                        tortor, quis vehicula urna sapien sit amet purus. Suspendisse sit amet tellus nisi.
                                    </div>
                                    <div class="tab-pane fade p-3 py-5" id="contact3" role="tabpanel" aria-labelledby="contact-tab">
                                        Vestibulum porttitor purus sed porta varius. Phasellus cursus ultrices libero id mattis. Cras vitae leo ac dolor blandit
                                        lacinia ultrices sit amet velit. Nam velit diam, condimentum vitae ultricies sed,
                                        condimentum id urna. Cras vestibulum et dui pellentesque faucibus. Mauris velit ante,
                                        congue at mattis sit amet, molestie at felis. Etiam tincidunt risus in convallis
                                        ultrices. Integer laoreet ante et maximus sagittis.
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- main content ends -->
        </main>
        <!-- main ends -->
    </div>

    <!-- all js goes here -->
    <?php include 'inc/themejs.php'; ?>

</body>

</html>