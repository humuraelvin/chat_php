<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Time Chatapp</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: "Poppins", sans-serif;
      }

      body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #f7f7f7;
      }

      .wrapper {
        background: #fff;
        width: 450px;
        border-radius: 16px;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
          0 32px 64px -48px rgba(0, 0, 0, 0.5);
      }

      .users header,
      .users-list a {
        display: flex;
        align-items: center;
        padding-bottom: 20px;
        justify-content: space-between;
        border-bottom: 1px solid #e6e6e6;
      }

      .wrapper img {
        object-fit: cover;
        border-radius: 50%;
      }

      .chat-area header {
        display: flex;
        align-items: center;
        padding: 18px 30px;
      }
      .chat-area header .back-icon {
        color: #333;
        font-size: 18px;
      }
      .chat-area header img {
        height: 45px;
        width: 45px;
        margin: 0 15px;
      }
      .chat-area header .details span {
        font-size: 17px;
        font-weight: 500;
      }
      .chat-box {
        position: relative;
        min-height: 500px;
        max-height: 500px;
        overflow-y: auto;
        padding: 10px 30px 20px 30px;
        background: #f7f7f7;
        box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
          inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
      }
      .chat-box .text {
        position: absolute;
        top: 45%;
        left: 50%;
        width: calc(100% - 50px);
        text-align: center;
        transform: translate(-50%, -50%);
      }
      .chat-box .chat {
        margin: 15px 0;
      }
      .chat-box .chat p {
        word-wrap: break-word;
        padding: 8px 16px;
        box-shadow: 0 0 32px rgb(0 0 0 / 8%),
          0rem 16px 16px -16px rgb(0 0 0 / 10%);
      }
      .chat-box .outgoing {
        display: flex;
      }
      .chat-box .outgoing .details {
        margin-left: auto;
        max-width: calc(100% - 130px);
      }
      .outgoing .details p {
        background: #333;
        color: #fff;
        border-radius: 18px 18px 0 18px;
      }
      .chat-box .incoming {
        display: flex;
        align-items: flex-end;
      }
      .chat-box .incoming img {
        height: 35px;
        width: 35px;
      }
      .chat-box .incoming .details {
        margin-right: auto;
        margin-left: 10px;
        max-width: calc(100% - 130px);
      }
      .incoming .details p {
        background: #fff;
        color: #333;
        border-radius: 18px 18px 18px 0;
      }
      .typing-area {
        padding: 18px 30px;
        display: flex;
        justify-content: space-between;
      }
      .typing-area input {
        height: 45px;
        width: calc(100% - 58px);
        font-size: 16px;
        padding: 0 13px;
        border: 1px solid #e6e6e6;
        outline: none;
        border-radius: 5px 0 0 5px;
      }
      .typing-area button {
        color: #fff;
        width: 55px;
        border: none;
        outline: none;
        background: #333;
        font-size: 19px;
        cursor: pointer;
        opacity: 0.7;
        pointer-events: none;
        border-radius: 0 5px 5px 0;
        transition: all 0.3s ease;
      }
      .typing-area button.active {
        opacity: 1;
        pointer-events: auto;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <section class="chat-area">
        <header>
          <a href="#" class="back-icon"><i class="fas fa-arrow-left"></i></a>
          <img src="./profile.jpg" alt="" />
          <div class="details">
            <span>Humura Elvin</span>
            <p>Active now</p>
          </div>
        </header>
        <div class="chat-box">
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./profile.jpg" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./profile.jpg" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./profile.jpg" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./profile.jpg" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>

        <form action="#" class="typing-area">
          <input
            type="text"
            name=""
            id=""
            placeholder="Type a message here..."
          />
          <button><i class="fab fa-telegram-plane"></i></button>
        </form>
      </section>
    </div>
  </body>
</html>
