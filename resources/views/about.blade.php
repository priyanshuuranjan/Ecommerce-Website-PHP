<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>About Us</title>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap");
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "spartan", sans-serif;
      }
      .wrapper {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .background-container {
        width: 100%;
        min-height: 100vh;
        display: flex;
      }
      .bg-1 {
        flex: 1;
        background-color: rgb(180, 243, 175);
      }
      .bg-2 {
        flex: 1;
        background-color: rgb(163, 236, 240);
      }
      .about-container {
        width: 85%;
        min-height: 80vh;
        position: absolute;
        background-color: white;
        box-shadow: 24px 24px 30px #6d8dad;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 40px;
        border-radius: 5px;
      }
      .image-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .image-container img {
        width: 500px;
        height: 500px;
        margin: 20px;
        border-radius: 10px;
      }
      .text-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        font-size: 22px;
      }
      .text-container h1 {
        font-size: 70px;
        padding: 20px 0px;
      }
      .text-container a {
        text-decoration: none;
        padding: 12px;
        margin: 50px 0px;
        background-color: rebeccapurple;
        border: 2px solid transparent;
        color: white;
        border-radius: 5px;
        transition: 0.3s all ease;
      }
      .text-container a:hover {
        background-color: transparent;
        color: black;
        border: 2px solid rebeccapurple;
      }
      p {
        font-size: 20px;
        font-family: "Roboto";
        margin: 0.5px;
        margin-bottom: 10px;
      }
      @media screen and (max-width: 1600px) {
        .about-container {
          width: 90%;
        }
        .image-container img {
          width: 400px;
          height: 400px;
        }
        .text-container h1 {
          font-size: 50px;
        }
      }
      @media screen and (max-width: 1100px) {
        .about-container {
          flex-direction: column;
        }
        .image-container img {
          width: 300px;
          height: 300px;
        }
        .text-container {
          align-items: center;
        }
      }
    /* this @media screen and (max-width: 477px) is only for cumputer logo*/
      /* @media screen and (max-width: 477px) {
        .about-container {
          width: 95%;
        }
        .image-container img {
          width: 100%;
          height: auto;
          max-width: 300px;
        }
        .text-container h1 {
          font-size: 40px;
        }
        .text-container p {
          font-size: 16px;
          line-height: 1.6;
        }
        .text-container a {
          margin: 20px 0;
          padding: 10px 20px;
        }
      } */
      @media screen and (max-width: 477px) {
        .about-container {
          width: 95%;
        }
        .image-container img {
          width: 100%;
          height: auto;
          max-width: 300px;
        }
        .text-container h1 {
          font-size: 40px;
        }
        .text-container p {
          font-size: 16px;
          line-height: 1.6;
        }
        .text-container a {
          margin: 20px 0;
          padding: 10px 20px;
        }
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="background-container">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
      </div>
      <div class="about-container">
        <div class="image-container">
          <img src="assets/priyanshu formal.jpg" alt="" />
        </div>

        <div class="text-container">
          <h1>About Me</h1>
          <p>
            I am Priyanshu, a student at Lovely Professional University, and I
            have created a captivating website for baby photography enthusiasts.
            My project offers a wide array of frames, giving users the freedom
            to select their favorite ones. With a user-friendly interface and a
            diverse collection of frames, my website aims to make baby
            photography an enjoyable and memorable experience for all users.
            Explore the world of adorable frames and cherish those precious
            moments with our innovative platform.
          </p>
          <a href="index.html">Go to Home</a>
        </div>
      </div>
    </div>
  </body>
</html>
