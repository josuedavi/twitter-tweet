<!DOCTYPE HTML>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Twitter Tweet 🐦 </title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

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
      div.profile-name
      {
        margin-left: 10px;
      }
      div#name
      {

      }
      h4#twit-name
      {

        color: grey;
      }
      button#btn
      {
        background-color: #66b3ff;
        color: white;

        margin-left: 480px;
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
      div#description
      {
        margin-top:20px;
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
      #retweets
      {

      display: flex;
    }

    #retweets div {
      flex-grow: 0;
      flex-shrink: 0;
      flex-basis: 40px;
    }
      p#retweets
      {
        color:#1da1f2;

      }
      p#desc
      {
        font-size: 20px;
      }
      h4#ret-txt
      {
        margin-right: 15px;
      }
      p#likes{
        color:#1da1f2;
      }
      p#current-time
      {
        color: gray;
        font-size: 1.5rem;
      }
      img#textarea
      {
        border-radius: 100%;
      }
      footer
      {
        display: flex;
      }
      form#tweet
      {
        background-color: #99ccff;
        height: 100px;
        width: 100%;

      }
      form input
      {
        margin-top: 30px;

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
          <h3 id="name" >Josue <img style="margin-left: 5px; margin-top: 7px;" src="verifiedcheck.png" height="20px"></h3>
          <h4 id="twit-name">@sway</h4>
        </div>

        <div id="follow-btn">
          <button type="button" class="btn btn-outline-primary" class="btn float-right" id="btn">Following</button>
        </div>
      </header>


      <main id = "main">

        <div id="profile-status" >

          <div id ="description">
            <b><p id="desc">
              I hope for a better tomorrow by working today to discipline myself today so that tomorrow I can reep my benefits.
              It may be hard to believe, but discipline provides freedom. "We should all attempt to reach a point in our lives where our minds
              can be liberated by discipline."
              <p></b>
          </div>
          <hr/>
          <div id="retweets" style="height:60px;">
            <h4 id="ret-txt">RETWEETS<p id="retweets">612</p></h4>



            <h4 id="lik-txt">LIKES<p id="likes">5642</p></h4>

          </div>






          <hr/>
          <p id="current-time"></p>
            <button type="button" onclick="incrementLikes()"><img id="text" src="unlike.png" height="20px" width="20px"></button>
       </div>


      </main>

      <footer id = "footer">










        <form id="tweet">

         <input type="text" class="form-control" placeholder="Tweet your reply" >

       </form>

      </footer>
  

      <script>
      function run()
      {
        var d = new Date();
        var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"];
      document.getElementById("current-time").innerHTML = d.getHours()+":"+d.getMinutes()+" AM"+" - "+ d.getDate() + " " + months[d.getMonth()] +" " +  d.getFullYear();
      }
      run();
    </script>

    </body>
</html>
