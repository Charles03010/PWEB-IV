<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="/testpost" method="post">
        @csrf
        <input type="text" name="npm">
        <button type="submit">kirim</button>
    </form>
</body>
</html>