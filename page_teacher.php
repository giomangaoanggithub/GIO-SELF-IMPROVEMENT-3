<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/page_teacher.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Essay Speed Checker</title>
</head>
<body>
    <div id="teacher-navbar">
        <div id="company-title" class="col-12">
            Mother of Divine Providence School
        </div>
        <div id="teacher-details" class="col-12">
            <div><img src="images/profile.jpg" id="profile-pic" alt=""></div>
            <div id="vl"></div>
            <div id="profile-name-email">Name: Gio Allanson Mangaoang <br> Email: giomangaoang215@gmail.com <br> Role: Teacher</div>
        </div>
        <div id="teacher-sub-bar" class="col-12">
            <div class="teacher-sub-bar-tab" id="teacher-sub-bar-tab1">Room</div>
            <div class="teacher-sub-bar-tab" id="teacher-sub-bar-tab1-1"><i class="material-icons">door_front</i></div>
            <div class="teacher-sub-bar-tab" id="teacher-sub-bar-tab2">Create</div>
            <div class="teacher-sub-bar-tab" id="teacher-sub-bar-tab2-2"><i class="material-icons">add_circle</i></div>
            <div class="teacher-sub-bar-tab" id="teacher-sub-bar-tab3">Student Grades</div>
            <div class="teacher-sub-bar-tab" id="teacher-sub-bar-tab3-3"><i class="material-icons">assignment_turned_in</i></div>
        </div>
        <div id="teacher-rooms" class="col-12">
            <div id="list-of-rooms-appli" class="col-12">
                <div>
                    <div id="table-rooms">
                        <table>
                            <thead>
                                <tr>
                                    <th>room name</th>
                                    <th>room code</th>
                                    <th>students</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">45<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">39<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">57<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">45<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">39<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">57<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">45<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                                <tr><td>Computer Science Room 1</td><td>password here</td><td class="see-room-studs-h">39<i class="see-room-studs material-icons">visibility</i></td><td><i class="enter-room material-icons">meeting_room</i><i class="edit-room material-icons">edit</i><i class="delete-room material-icons">delete</i></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="room-sorter">
                        <label for="find-room">Room: </label><input type="text" id="find-room">
                    </div>

                </div>
                <div>
                    <div id="table-newstud">
                        <table>
                            <thead>
                                <tr>
                                    <th>action</th>
                                    <th>time of issue</th>
                                    <th>room name</th>
                                    <th>new students</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                                <tr><td><i class="decline-stud material-icons">close</i><i class="accept-stud material-icons">how_to_reg</i></td><td>####-##-## 23:04:20</td><td>Computer Science Room 1</td><td>Hank Shrader</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="newstud-sorter">
                        <div><label for="find-newstud">Student: </label><input type="text" id="find-newstud"></div>
                        <div><label for="find-newstudroom">Room: </label><input type="text" id="find-newstudroom"></div>
                        
                    </div>

                </div>
                
                
                
            </div>
        </div>
        <div id="teacher-create" class="col-12">
            
        </div>
        <div id="teacher-grades" class="col-12">

        </div>
    </div>





    <script>
        function on(input) {
            document.getElementById("overlay").style.display = "block";
            if(input == "sign-in-btn"){
                document.getElementById("sign-in-modal").style.display = "flex";
            } else {
                document.getElementById("sign-up-modal").style.display = "flex";
            }
        
        
        }

        function off(input) {
            if(input == "overlay"){
                document.getElementById("overlay").style.display = "none";
                document.getElementById("sign-in-modal").style.display = "none";
                document.getElementById("sign-up-modal").style.display = "none";
            }
        
        }

        $("#teacher-sub-bar-tab1").click(
            function(){
                document.getElementById("teacher-rooms").style.display = "flex";
                document.getElementById("teacher-sub-bar-tab1").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-create").style.display = "none";
                document.getElementById("teacher-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("teacher-grades").style.display = "none";
                document.getElementById("teacher-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab1-1").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#teacher-sub-bar-tab2").click(
            function(){
                document.getElementById("teacher-rooms").style.display = "none";
                document.getElementById("teacher-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("teacher-create").style.display = "flex";
                document.getElementById("teacher-sub-bar-tab2").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-grades").style.display = "none";
                document.getElementById("teacher-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab2-2").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-sub-bar-tab3-3").style.backgroundColor = "#379683";
                
            }
        );

        $("#teacher-sub-bar-tab3").click(
            function(){
                document.getElementById("teacher-rooms").style.display = "none";
                document.getElementById("teacher-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("teacher-create").style.display = "none";
                document.getElementById("teacher-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("teacher-grades").style.display = "flex";
                document.getElementById("teacher-sub-bar-tab3").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab3-3").style.backgroundColor = "#5cdb95";
                
            }
        );

        $("#teacher-sub-bar-tab1-1").click(
            function(){
                document.getElementById("teacher-sub-bar-tab1").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("teacher-rooms").style.display = "flex";
                document.getElementById("teacher-create").style.display = "none";
                document.getElementById("teacher-grades").style.display = "none";
                document.getElementById("teacher-sub-bar-tab1-1").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#teacher-sub-bar-tab2-2").click(
            function(){
                document.getElementById("teacher-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab2").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-sub-bar-tab3").style.backgroundColor = "#379683";
                document.getElementById("teacher-rooms").style.display = "none";
                document.getElementById("teacher-create").style.display = "flex";
                document.getElementById("teacher-grades").style.display = "none";
                document.getElementById("teacher-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab2-2").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-sub-bar-tab3-3").style.backgroundColor = "#379683";
            }
        );

        $("#teacher-sub-bar-tab3-3").click(
            function(){
                document.getElementById("teacher-sub-bar-tab1").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab2").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab3").style.backgroundColor = "#5cdb95";
                document.getElementById("teacher-rooms").style.display = "none";
                document.getElementById("teacher-create").style.display = "none";
                document.getElementById("teacher-grades").style.display = "flex";
                document.getElementById("teacher-sub-bar-tab1-1").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab2-2").style.backgroundColor = "#379683";
                document.getElementById("teacher-sub-bar-tab3-3").style.backgroundColor = "#5cdb95";

            }
        );

        function page_start(){
            if(window.innerWidth < 830){
                document.getElementById("teacher-sub-bar-tab1-1").style.display = "block";
                document.getElementById("teacher-sub-bar-tab2-2").style.display = "block";
                document.getElementById("teacher-sub-bar-tab3-3").style.display = "block";
                document.getElementById("teacher-sub-bar-tab1").style.display = "none";
                document.getElementById("teacher-sub-bar-tab2").style.display = "none";
                document.getElementById("teacher-sub-bar-tab3").style.display = "none";
            }
            if(window.innerWidth > 829){
                document.getElementById("teacher-sub-bar-tab1-1").style.display = "none";
                document.getElementById("teacher-sub-bar-tab2-2").style.display = "none";
                document.getElementById("teacher-sub-bar-tab3-3").style.display = "none";
                document.getElementById("teacher-sub-bar-tab1").style.display = "block";
                document.getElementById("teacher-sub-bar-tab2").style.display = "block";
                document.getElementById("teacher-sub-bar-tab3").style.display = "block";
            }
            document.getElementById("teacher-rooms").style.display = "flex";
            document.getElementById("teacher-sub-bar-tab1").style.backgroundColor = "#5cdb95";
            document.getElementById("teacher-create").style.display = "none";
            document.getElementById("teacher-sub-bar-tab2").style.backgroundColor = "#379683";
            document.getElementById("teacher-grades").style.display = "none";
            document.getElementById("teacher-sub-bar-tab3").style.backgroundColor = "#379683";
            document.getElementById("teacher-sub-bar-tab1-1").style.backgroundColor = "#5cdb95";
            document.getElementById("teacher-sub-bar-tab2-2").style.backgroundColor = "#379683";
            document.getElementById("teacher-sub-bar-tab3-3").style.backgroundColor = "#379683";
        }

        $(window).resize(function () {
            page_start();
        });

        page_start();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>