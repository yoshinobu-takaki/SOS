<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOS</title>
</head>
<body>
  <h2>この犬を探してます！！</h2>
  <p>昨日私の愛犬がUFOにさらわれました。もしUFOに拐われたことがある方がいればその時の状況を教えて下さい</p>
  <form action="mailto:yoshinobutakaki0921@gmail.com" method="POST">

    <label for="lastname">あなたの姓：</label>
    <input type="text" id="lastname"  name="lastname"><br>

    <label for="firstname">あなたの名：</label>
    <input type="text" id="firstname"  name="firstname"><br>

    <label for="email">あなたのemailアドレス</label>
    <input type="email" id="email" name="email"><br>
    
    <label for="whenithappened">いつの誘拐されたの？</label>
    <input type="text" id="whenithappened" name="whenithappened"><br>
    
    <label for="howlong">何時間くらい誘拐されたの？</label>
    <input type="text" id="howlong" name="howlong"><br>

    <label for="howmany">宇宙人は何人いました？</label>
    <input type="text" id="howmany" name="howmany"><br>

    <label for="aliendescription">どんな宇宙人でしたか？</label>
    <input type="text" id="aliendescription" name="aliendescription"><br>

    <label for="whattheydid">何をされましたか？</label>
    <input type="text" id="whattheydid" name="whattheydid"><br>

    <label for="fangspotted">そのん時私の愛犬ファングを見ましたか？</label>
    はい<input type="radio" id="fangspotte" name="fangspotte" value="はい">
    いいえ<input type="radio" id="fangspotte" name="fangspotte" value="いいえ"><br>
    <image src="" alt="愛犬ファング"><br>

    <label for="other">他にコメントはありますか？</label>
    <textarea name="other" id="other"></textarea><br>

    <input type="submit" value="送信" name="submit">
  </form>
</body>
</html>