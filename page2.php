<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>🎊 Surprise! 🎊</title>
  <style>
    body {
      margin: 0;
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background: radial-gradient(circle at top, #ffccf9, #b8c0ff);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      text-align: center;
      overflow: hidden;
      color: #4b0082;
    }

    h1 {
      font-size: 3rem;
      margin: 0;
      animation: bounce 1s infinite alternate;
    }

    p {
      font-size: 1.3rem;
      margin-top: 10px;
    }

    a.back-btn {
      margin-top: 30px;
      text-decoration: none;
      padding: 12px 30px;
      background: #7c3aed;
      color: #fff;
      border-radius: 25px;
      font-weight: bold;
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
      transition: 0.3s;
    }

    a.back-btn:hover {
      background-color: #5a1ab0;
      transform: scale(1.05);
    }

    @keyframes bounce {
      from { transform: translateY(0); }
      to { transform: translateY(-15px); }
    }

    .confetti {
      position: absolute;
      width: 10px;
      height: 10px;
      background: red;
      top: 0;
      animation: fall 3s infinite;
    }

    @keyframes fall {
      0% { transform: translateY(-100px) rotate(0deg); opacity: 1; }
      100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
    }
  </style>
</head>
<body>
  <h1>🎊 Surprise! 🎊</h1>
  <p>You just unlocked the FUN mode! <br> </p>
  <a class="back-btn" href="page1.php">Back to Calm 😌</a>

  <!-- Confetti -->
  <?php for ($i = 0; $i < 30; $i++): ?>
    <div class="confetti" style="
      left: <?= rand(0, 100) ?>%;
      background: hsl(<?= rand(0, 360) ?>, 70%, 60%);
      animation-delay: <?= rand(0, 3000) / 1000 ?>s;
      width: <?= rand(6, 12) ?>px;
      height: <?= rand(6, 12) ?>px;
    "></div>
  <?php endfor; ?>
</body>
</html>
