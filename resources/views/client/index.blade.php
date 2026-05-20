<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | PawRescue</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      font-family: 'Poppins', sans-serif;
      color: #333;
      background: linear-gradient(-45deg, #95cf90, #86ccc0, #8abdc9, #98acdb);
      background-size: 400% 400%;
      animation: gradient 10s ease infinite;
      overflow: hidden;
    }

    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    h1 {
      font-size: 3em;
      margin: 0;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.1);
      animation: fadeIn 1.5s ease-in-out;
    }

    button {
      margin-top: 30px;
      padding: 12px 35px;
      border: none;
      border-radius: 30px;
      background: #4CAF50;
      color: white;
      font-size: 1em;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      animation: fadeIn 2s ease-in-out;
    }

    button:hover {
      background: #45a049;
      transform: scale(1.05);
    }

    .cat, .dog, .chick {
      position: absolute;
      transition: transform 0.3s ease;
      opacity: 0.95;
    }

    .cat {
      width: 100px;
      bottom: 50px;
      left: 80px;
    }

    .dog {
      width: 110px;
      top: 50px;
      left: 80px;
    }

    .chick {
      width: 80px;
      top: 60px;
      right: 80px;
    }

    .cat:hover, .dog:hover, .chick:hover {
      transform: scale(1.1);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="yis">
    <h1>Welcome</h1>
    <button onclick="window.location.href='home.html'">Start Browsing</button>
  </div>

  <img src="images/cat.png" class="cat" alt="cat">
  <img src="images/woof.png" class="dog" alt="dog">
  <img src="images/chick.png" class="chick" alt="chick">
</body>
</html>
