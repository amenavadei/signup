<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Mybook</title>
</head>
   
<style type="text/css">

body{
    font-family:Tahoma;
    background-color:#d0d8e4 ;
    
}

  #blue_bar{
      height: 50px;
      background-color: #405d9b;
      color: #d9dfeb;
     
  }

  #search_box{
    width: 400px;
    height: 20px;
    border-radius: 4px;
    border:none;
    padding: 4px;
    font-size: 14px;
    background-image: url(images/search.png);
    background-repeat: no-repeat;
    background-position: right;

  }

  #content{
      width: 800px;
      min-height: 400px;
      margin: auto;
  }
  
  #profile_pic{
      width: 150px;
      margin-top: -200px;
      border-radius: 150px;
      border: solid 2px white;

  }

  #menu_buttons{
      width: 100px;
      display: inline-block;
      margin: 2px;
  }

  #profile_name{
    font-size: 20px;
    font-family: tahoma;
    color: black;
    font-weight: bold;
  }

  #friends_bar{
      margin-top: 10px;
      min-height: 400px;
      color: #aaa;
      padding: 8px;
  }



  #friends_img{
      width: 75px;
      margin: 8px;
      border-radius: 4px;
      float: left;
  }

  #friends{
      clear: both;
      font-size: 12px;
      font-weight: bold;
      color: #405d9b;
  }

  textarea{
      width: 100%;
      border:none;
      font-family: tahoma;
      font-size: 14px;
      height: 60px;
  }


   #post_button{
       float: right;
       background-color:rgb(24, 119, 242);
       border: none;
       border-radius: 5px;
       font-size: 14px;
       font-family: tahoma;
       color: white;
       padding: 4px;
       width:50px;
    }

    #post_bar{
        margin-top: 10px;
        background-color:white;
        padding: 10px;
    }

    #post{
        padding: 4px;
        display: flex;
        margin-bottom: 20px;
    }


</style>

<body>

   <br>
  <!--top bar -->
 <div id="blue_bar">
    <div style="width: 800px; margin:auto; font-size:30px;">
         Mybook &nbsp; &nbsp; &nbsp;  <input type="text" id="search_box" placeholder="Search for people">
        <img src="images/selfie.jpg" alt="" style="width: 50px; float:right;">
    </div>
    
 </div>


 <!--Cover Area-->

  <div id="content">
      <div style="background-color:white; text-align:center;color:#405d9b;">
          <img src="images/mountain.jpg" alt="" style="width:800px;">
          <img id="profile_pic" src="images/selfie.jpg" alt="">
          <br>
          <div id="profile_name">Amena Vadei</div> 
           <br>
         <div id="menu_buttons">Timeline</div> 
         <div id="menu_buttons">About</div> 
         <div id="menu_buttons">Friends</div>
         <div id="menu_buttons">Photos</div>
         <div id="menu_buttons">Settings</div>
      </div>

<!--Below Cover Area-->


    <div style="display: flex;">

          <!--friends Area-->
        <div style="background-color: white; min-height:400px; flex:1;">

         <div id="friends_bar">
              friends  
              <br>

              <div id="friends">
                  <img id="friends_img" src="images/user1.jpg" alt="">
                  <br>
                  First User - Lorem ipsum dolor sit amet.
              </div>

              <div id="friends">
                  <img id="friends_img" src="images/user2.jpg" alt="">
                  <br>
                  Second User- Lorem ipsum dolor sit.
              </div>

              <div id="friends">
                  <img id="friends_img" src="images/user3.jpg" alt="">
                  <br>
                  Third User - Lorem ipsum dolor sit amet.
              </div>

              <div id="friends">
                  <img id="friends_img" src="images/user4.jpg" alt="">
                  <br>
                  Fourth User- Lorem ipsum dolor sit amet consectetur.
              </div>




         </div>  
       
           <br>
        </div>

           <!--Post Area-->
        <div style="min-height:400px;flex:2.5; padding: 20px; padding-right: 0px;">
          
           <div style="border: solid thin #aaa; padding:10px; background-color:white;">
                 <textarea  placeholder="What's on your mind"></textarea>
                 <input id="post_button" type="submit" value="Post">
                 <br>

           </div>

           <div id="post_bar">

                <!--Post 1 -->
                <div id="post">
                  <div>
                    <img src="images/user1.jpg" width="75px" style="margin-right: 4px;" alt="">
                  </div>
                  <div>
                     <div style="font-weight: bold; color:#405d9d">First Guy</div>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores possimus provident laboriosam quo 
                     ipsam amet ex dolorum nostrum distinctio quaerat.
                     <br> <br>
                     <a style="text-decoration: none;" href="">Like</a> . <a style="text-decoration: none;" href="">Comment</a> . <span style="color:#999;">April 8 2021</span>
                  </div>
                </div> <!-- End Post 1 -->


                <!--Post 2 -->
                <div id="post">
                  <div>
                    <img src="images/user2.jpg" width="75px" style="margin-right: 4px;" alt="">
                  </div>
                  <div>
                     <div style="font-weight: bold; color:#405d9d">2nd Guy</div>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores possimus provident laboriosam quo 
                     ipsam amet ex dolorum nostrum distinctio quaerat.
                     <br> <br>
                     <a style="text-decoration: none;" href="">Like</a> . <a style="text-decoration: none;" href="">Comment</a> . <span style="color:#999;">April 8 2021</span>
                  </div>
                </div> <!-- End Post 2 -->

                 <!--Post 3 -->
                 <div id="post">
                  <div>
                    <img src="images/user3.jpg" width="75px" style="margin-right: 4px;" alt="">
                  </div>
                  <div>
                     <div style="font-weight: bold; color:#405d9d">3rd Guy</div>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores possimus provident laboriosam quo 
                     ipsam amet ex dolorum nostrum distinctio quaerat.
                     <br> <br>
                     <a style="text-decoration: none;" href="">Like</a> . <a style="text-decoration: none;" href="">Comment</a> . <span style="color:#999;">April 8 2021</span>
                  </div>
                </div> <!-- End Post 3 -->

                
                <!--Post 4-->
                <div id="post">
                  <div>
                    <img src="images/user4.jpg" width="75px" style="margin-right: 4px;" alt="">
                  </div>
                  <div>
                     <div style="font-weight: bold; color:#405d9d">4th Guy</div>
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores possimus provident laboriosam quo 
                     ipsam amet ex dolorum nostrum distinctio quaerat.
                     <br> <br>
                     <a style="text-decoration: none;" href="">Like</a> . <a style="text-decoration: none;" href="">Comment</a> . <span style="color:#999;">April 8 2021</span>
                  </div>
                </div> <!-- End Post 3 -->


           
           </div>

        </div> <!--End Post -->

    </div>



  </div>




    
</body>
</html>