<!DOCTYPE HTML>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Twitter Tweet 🐦 </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link rel="stylesheet" href="stylce.css">

      <style>
      body
      {
        height: 1024px;
        width: 764px;
      }
      img#me
      {
        border-radius: 15px;
      }
      header
      {
        display: flex;
      }
      header#profile
      {

      }
      header#profile-info
      {
        display: flex;
      }
      h4#twit-name
      {
        color: grey;
      }
      button#btn
      {
        background-color: #1da1f2;
        color: white;

        margin-left: 700px;
        margin-top:25px;

      }
      img#verified
      {
        margin-top: 7px;
        margin-left: 5px;
      }
      header h3, header h4
      {
        display: flex;
      }
      main
      {

      }
      div#profile-status
      {


      }
      div#retweets
      {


      }
      h4#ret-txt
      {
        color: gray;
      }
      h4#lik-txt
      {
        color: gray;
      }
      p#retweets
      {
        color:#1da1f2;
      }
      p#likes{
        color:#1da1f2;
      }
      footer
      {
        display: flex;
      }
      footer#bottom
      {
        display: flex;
      }
      </style>
      <script>
      //cnters so you can only like/unlike once
     let incrementcnt = 0;


     function incrementLikes()
     {
     if(incrementcnt == 0)
       {
         var likeAmnt = document.getElementById('likes');
         var number = likes.innerHTML;
         number++;
         document.getElementById('text').src = 'like.png';
         likeAmnt.innerHTML = number;
         incrementcnt++;
       }else
       {
       var likeAmnt = document.getElementById('likes');
       var number = likes.innerHTML;
       number--;
       document.getElementById('text').src = 'unlike.png';
       likeAmnt.innerHTML = number;
       incrementcnt--;
       }
     }
      </script>
    </head>
    <body>
      <header>
        <img id="me" height="80px" width="80px" src="me.jpeg">
        <div class="profile-name">
          <h3 style="display: inline;">Josue Castillo</h3>
          <h4 id="twit-name">@sway</h4>
        </div>
        <div id="follow-btn">
          <button type="button" class="btn btn-outline-primary" class="btn float-right" id="btn">Following</button>
        </div>
      </header>


      <main id = "main">

        <div id="profile-status" >
          <hr/>
          <div id="retweets">
            <b><h4 id="ret-txt">RETWEETS</h4><h4><p id="retweets">612</p></h4></b>
          </div>

          <div id="likes">
            <b><h4 id="lik-txt">LIKES</h4><h4><p id="likes">5642</p></h4></b>
            <button type="button" onclick="incrementLikes()"><img id="text" src="unlike.png" height="20px" width="20px"></button>
          </div>

          <hr/>
       </div>


      </main>

      <footer id = "footer">

        <div id="bottom">






          <div id="post-time">
            <?php


            ?>
          </div>

          <div id="twitter-btns">


         </div>

         </div>
         <input type="text" class="form-control" placeholder="Tweet your reply" >
         </div>

       <div>
      </footer>

    </body>
</html>
