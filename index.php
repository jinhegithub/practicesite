<?php
/**********************************************\
* Copyright (c) 2013 Manolis Agkopian          *
* See the file LICENCE for copying permission. *
\**********************************************/

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Bootstrap Sample</title>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="assets/css/bootstrap.min-3.3.7.css" />
  <link rel="stylesheet" href="assets/css/codingBooster.css" />
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min-3.3.7.js"></script>
  <style type="text/css">
    .jombotron{
      background-image: url("assets/img/background.jpg");
      background-size: cover;
      text-shadow:black 0.2em 0.2em 0.2em;
      color: white;
    }
    .main {
      max-width: 320px;
      margin: 0 auto;
    }

    .login-or {
      position: relative;
      font-size: 18px;
      color: #aaa;
      margin-top: 10px;
      margin-bottom: 10px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .span-or {
      display: block;
      position: absolute;
      left: 50%;
      top: -2px;
      margin-left: -25px;
      background-color: #fff;
      width: 50px;
      text-align: center;
    }

    .hr-or {
      background-color: #cdcdcd;
      height: 1px;
      margin-top: 0px !important;
      margin-bottom: 0px !important;
    }

    h3 {
      text-align: center;
      line-height: 300%;
    }

  </style>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
        aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Coding Booster</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="active"><a href="#">소개<span class="sr-only"></span></a></li>
        <li class="" ><a href="#">강의자</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
          aria-haspopup="true" aria-expanded="false">강의<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#">C언어</a></li>
            <li class="dropdown-item"><a href="#">Cobol언어</a></li>
            <li class="dropdown-item"><a href="#">Javascript언어</a></li>
          </ul>
        </li>
      </ul>
      <!--  Serch  Part-->

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="검색어를 입력하십시오" />
        </div>
        <button type="submit" class="btn btn-default">검색</button>
      </form>

      <!-- login -->
      <?php
      session_start();
      define('INCLUDED',true);
      require 'includes/core_func.php';
      if(!user_logged_in()){
        echo "
        <ul class='nav navbar-nav navbar-right'>
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button'
            aria-haspopup='true' aria-expanded='false'>접속하기<span class='caret'></span></a>

            <ul class='dropdown-menu'>
              <li class='dropdown-item' id='login'><a href='#'><span class='glyphicon glyphicon-log-in'>&nbsp;로그인</span></a></li>
              <li class='dropdown-item' id='register'><a href='#'><span class='glyphicon glyphicon-user'>&nbsp;새로등록</span></a></li>
            </ul>
          </li>
        </ul>";
      }else {
        echo "
        <ul class='nav navbar-nav navbar-right'>
          <li class='' id='gmap'><a href='#'><span class='glyphicon glyphicon-globe'>&nbsp;G-MAP</span></a></li>
          <li class='' id='fileupload'><a href='#'><span class='glyphicon glyphicon-upload'>&nbsp;화일올리기</span></a></li>
          <li class='' id='chating'><a href='chatroom.php'><span class='glyphicon glyphicon-comment'>&nbsp;채팅방</span></a></li>
          <li class='' id='logout'><a href='logout.php'><span class='glyphicon glyphicon-log-out'>&nbsp;가입탈퇴</a></li>
          </ul>";
        };


        ?>

      </div>
    </div>
  </nav>

  <div class="container">
    <div class="jombotron">
      <h1 class="text-center">프로그람교육강좌를 운영합니다.</h1>
      <p class="text-center">Coding Booster는 IT교육싸이트입니다. 다양한 프로그람언어들에 대한 교육을 목적으로 합니다.</p>
      <!-- <p class="text-center"><a class="btn btn-success" href="#" role="button">강의받기</a> -->
    </div>
    <div class="panel panel-success" style="height:800px">
      <div class="panel-heading">
        Study
      </div>


      <div class="panel-body">

        <!-- user login -->

        <div id="login_panel" style="display:none">
          <div class='container'>
            <div class='row'>
              <div class='main'>
                <h3>사용자가입</h3>
                <form id='loginform' action='login.php' method='post'>
                  <div class='form-group'>
                    <label for='inputUsername'>사용자이름(ID)</label>
                    <input type='text' class='form-control' id='inputUsername' name='uname'>
                  </div>
                  <div class='form-group'>
                    <a class='pull-right' href='#'>암호를 잊으셨습니까?</a>
                    <label for='inputPassword'>암호입력</label>
                    <input type='password' class='form-control' id='inputPassword' name='passwd'>
                  </div>
                  <div class='checkbox pull-right'>
                    <label><input type='checkbox'> 기억하기 </label>
                  </div>

                  <button id='btn_login' type='button' class='btn btn btn-primary' >로그인</button>

                </form>

              </div>

            </div>
          </div>
        </div>

        <!-- user register -->

        <div id="register_panel" style="display:none">
          <div class='container'>
            <div class='row'>
              <div class='main'>
                <h3>사용자등록</h3>
                <form id='signupform' action='register.php' method='post'>
                  <div class='form-group'>
                    <label for='inputUsername'>사용자이름(ID)</label>
                    <input type='text' class='form-control' id='inputUsername' name='uname'><i class="glyphicon glyphicon-search"></i></input>
                  </div>
                  <div class='form-group'>
                    <label for='inputPassword'>암호입력</label>
                    <input type='password' class='form-control' id='inputPassword' name='passwd' />
                  </div>
                  <div class='form-group'>
                    <label for='confirmPassword'>암호반복</label>
                    <input type='password' class='form-control' id='confirmPassword' name='passwd' />
                  </div>

                  <button id='btn_signup' type='button' class='btn btn btn-primary'>등록</button>

                </form>

              </div>

            </div>
          </div>
        </div>

        <!-- file upload  -->
        <div id="file_upload_panel" style="display:none">
          <form class="form-horizontal" action="file_upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label" for="file_title">화일제목:</label>
              <input type="text" class="form-control" id="file_title" name="file_title" placeholder="화일이름을 입력하십시오" />
            </div>
            <div class="form-group">
              <label class="control-label" for="file_discription">화일내용설명:</label>
              <textarea class="form-control" rows="5" id="file_discription" name="file_discription" placeholder="화일에 대한 설명을 입력하십시오" ></textarea>
            </div>
            <div class="form-group">
              <label class="control-label" for="upload">화일선택:</label>
              <input type="file" class="form-control" id="upload" name="fileupload" placeholder="화일을 선택해주십시오" />
            </div>
            <button type="submit" class="btn btn-primary" id="btn_upload"><span class='glyphicon glyphicon-upload'>&nbsp올리적재</span></button>
          </form>

        </div>

        <!-- filelist -->
        <br /><br />
        <div id="file_list_panel" style="display:none">
          <table class="table table-hover" style="align:center">
            <thead  style="align:center"><tr><th>화일제목</th><th>화일에 대한 설명</th>
              <th>화일명</th><th>down</th></tr></thead>
              <tbody>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'chat');
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM fileupload ORDER BY id";
                $result=$conn->query($sql);


                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()){
                    echo "<tr><td>$row[filetitle]</td>
                      <td>$row[filedescription]</td>
                      <td>$row[filename]</td>
                      <td><a href='$row[filepath]'><span class='glyphicon glyphicon-download'></span></a></td>
                    </tr>";
                  }
                }else{
                  echo "<tr><td colspan=4>0 results</td></tr";
                  }

                  //$conn->close();
                  ?>

              </tbody>
            </table>
          </div>

            <!-- google maps -->
          <div id="google_map_panel" style="display:none">
            <div id="googlemap" style="width:100%;height:400px;"></div>
            <div id="mapinformation" class="container" style="margin-top:12px">
              <form class="form-inline" id="map_info" action="map_upload.php" method="post" enctype="multipart/form-data">

                <div class="form-group" id="upload_map_img" >
                  <label class="control-label" for="map_img">지도화상: </label>
                  <input class="form-control" type="file" id="map_img" name="map_img"/>
                </div>

                <div class="form-group" id="input_areaname_group">
                  <label class="control-label" for="input_areaname">지역명: </label>
                  <input class="form-control" type="text" id="input_areaname" name="areaname" />
                </div>

                <div class="form-group" id="input_latitude_group">
                  <label class="control-label" for="input_latitude">위도: </label>
                  <input class="form-control" type="text" id="input_latitude" name="latitude"/>
                </div>

                <div class="form-group" id="input_longitude_group">
                  <label class="control-label" for="input_longitude">경도: </label>
                  <input class="form-control" type="text" id="input_longitude" name="longitude" />
                </div>

                <button type="submit" class="btn btn-primary">등록</button>
              </form>
            </div>
          </div>

          <div id="map_datalist_panel" style="display:none;margin-top:18px;float:center">
            <form class="form-inline">
              <span style="font-size:16px; margin-left:12px;">해당 지역명을 선택하십시오&nbsp;&nbsp;&nbsp;</span>
              <div id="arealist" class="form-group">
                <label class="control-label" for="areaname"></label>
                <select class="form-control" name="" id="selectarea">
                  <!-- addition area data -->
                  <?php
                  $sql = "SELECT * FROM gmap ORDER BY id";
                  $result=$conn->query($sql);

                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                      echo "<option value='$row[id]'>$row[areaname]</option>" ;
                    }
                  }else{
                    echo "<option value=''>추가된 지역명이 없습니다</option>";
                  }

                  ?>
                  <!-- <option value="">남포시</option> -->

                </select>
              </div>
              <div class="form-group" >
                <label class="control-label" for="">위도:</label>
                <input class="form-control" type="text" id="latitude" value="" />
              </div>
              <div class="form-group">
                <label class="control-label" for="">경도:</label>
                <input class="form-control" type="text" id="longitude" value="" />
              </div>
              <div class="form-group">
                <label class="control-label" for="">확대</label>
                <input class="form-control" type="number" id="map_zoom" value="1" />
              </div>
              <input type="hidden" id="imgpath" />
              <button type="button" class="btn btn-primary" id="addmarker">보기</button>
            </form>
          </div>

        </div>
      </div>


    </div>
      <!-- container end -->

  </div>
    <!-- center panel end -->
  </div>
  <!-- main part end -->

  <footer style="background-color:black; color:white;">
    <div class="container">
      <br />
      <div class="row">
        <div class="col-sm-2" style="text-align:center;"><h5>Copyright &copy; 2018</h5><h5>wujinhe</h5></div>
        <div class="col-sm-4"><h4>소개:</h4><br /><p>
          교육은 부흥으로 가는 진로입니다. 그럼 교육자는요? 더우기 IT교육은 더 말할바가 아니지요.</p></div>
          <div class="col-sm-4"><h4 style="text-align:center;">안 &nbsp;&nbsp;내</h4>
            <div class="list-group" style="display:inline-block;">
              <a href="#" class="list-group-item">소개</a>
              <a href="#" class="list-group-item">강의자</a>
              <a href="#" class="list-group-item">강의</a>
            </div>
          </div>
          <!-- <div class="col-sm-2">
          <div class="list-group"><h4 style="text-align:center;">SNS</h4>
          <a href="#" class="list-group-item">유트뷰</a>
          <a href="#" class="list-group-item">페이스북</a>
          <a href="#" class="list-group-item">네이버</a>
        </div>
      </div> -->
      <div class="col-sm-2"><h4 style="text-align:center;s">contact us</h4>
        <div style="text-align:center">
          <span class="glyphicon glyphicon-earphone"> (86)17154672637</span>
          <!-- <span class="glyphicon glyphicon-phone-alt"> (86)17154672637</span>
          <span class="glyphicon glyphicon-envelope"> (86)17154672637</span>
          <span class="glyphicon glyphicon-home"> (86)17154672637</span> -->
        </div>

      </div>
    </div>
  </div>
</footer>

<script src = "https://maps.googleapis.com/maps/api/js"></script>
<script>

  //대역변수초기화
  var map_position=new Array();
  var num_point=0;
  var map_position=
  <?php
  $conn = new mysqli('localhost', 'root', '', 'chat');
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT areaname,latitude,longitude,imgpath FROM gmap";
  $result=$conn->query($sql);
  $res=Array();
  $i=0;
  while($row = $result->fetch_array()){
    $res[$i++]=$row;
  }
  echo json_encode($res);
  ?>;

  //alert(map_position[2].areaname);
  //점의 총개수
  num_point=map_position.length;
  //alert(num_point);
  //매프 그리기


  function loadMap(latitude,longitude,map_zoom) {
    //중심점
    if(latitude==null){
      latitude=39.345099;
    }else{
      latitude=parseFloat(latitude);
    };
    if(longitude==null){
      longitude=126.575537;
    }else{
      longitude=parseFloat(longitude);
    }
    map_zoom=parseInt(map_zoom);
    if(!map_zoom){
      map_zoom=12;
    }

    //매프현시
    var mapOptions = {
      center:new google.maps.LatLng(latitude, longitude),
      zoom:map_zoom,
      mapTypeId:google.maps.MapTypeId.SATELLITE
    };

    var map;
    //var bounds = new google.maps.LatLngBounds();

    var map = new google.maps.Map(document.getElementById("googlemap"),mapOptions);
    map.setTilt(45);


    // 다중 마커 매달기
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map
    for( i = 0; i < num_point; i++ ) {

      var position = new google.maps.LatLng(parseFloat(map_position[i].latitude), parseFloat(map_position[i].longitude));
      //bounds.extend(position);
      marker = new google.maps.Marker({
        position: position,
        map: map,
        title: map_position[i].areaname
      });

      // Allow each marker to have an info window
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infoWindow.setContent("<div style='align:center;color:blue'><h4>"+map_position[i].areaname+"</h4></div><br /><img src='"+map_position[i].imgpath+"' width='100px' height='100px' />");
          infoWindow.open(map, marker);
        }
      })(marker, i));

      // Automatically center the map fitting all markers on the screen
      //map.fitBounds(bounds);

      // var marker=new google.maps.Marker({
        //   position:new google.maps.LatLng(latitude,longitude),
        //   map:map,
        //   //icon:imgpath,
        //   animation:google.maps.Animation.Drop
        // });
        //
        // var infowindow = new google.maps.InfoWindow({
          //   content: "<img src='"+imgpath+"' />"  //style='width:50px;height:50px;'
          // });
          //
          // var myListener = google.maps.event.addListener(marker, 'click', function() {
            //   infowindow.open(map,marker);
            // });
          }

        }



        $(document).ready(function(){
          $("#login").click(function(){
            $(".panel-heading").text("사용자가입");
            $("#login_panel").show();
            $("#register_panel").hide();
          });

          $("#register").click(function(){
            $(".panel-heading").text("사용자등록");
            $("#register_panel").show();
            $("#login_panel").hide();
          });

          $("#btn_signup").click(function(){
            $("#signupform").submit();
          });

          $("#btn_login").click(function(){
            $("#loginform").submit();
          });

          $("#fileupload").click(function(){
            $(".panel-heading").text("화일올리적재");
            $("#file_upload_panel").show();
            $("#file_list_panel").show();
            $("#google_map_panel").hide();
            $('#map_datalist_panel').hide();
          });

          $("#gmap").click(function(){
            $("#file_upload_panel").hide();
            $("#file_list_panel").hide();
            $(".panel-heading").text("Google Map 리용실례");
            $("#google_map_panel").show();
            $('#map_datalist_panel').show();
            loadMap();
          });

          $("#addmarker").click(function(){
            var latitude=$("#latitude").val();
            var longitude=$("#longitude").val();
            var imgpath=$("#imgpath").val();
            var map_zoom=$("#map_zoom").val();
            loadMap(latitude,longitude,map_zoom);
          });

          $("#selectarea").change(function(){
            var area=$("#selectarea").val();
            var data = {};
            $.ajax({
              url: 'map_area.php',
              type: 'post',
              dataType: 'json',
              data: {areadata:area},
              success: function (data) {
                //data=JSON.parse(data);
                //alert(data.latitude);
                var latitude=data.latitude;
                var longitude=data.longitude;
                var imgpath=data.imgpath;
                $("#latitude").val(latitude);
                $("#longitude").val(longitude);
                $("#imgpath").val(imgpath);
              }
            });
          });
        });

      </script>


    </body>
    </html>
