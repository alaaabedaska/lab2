<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- 
    @php
    <h1>Hello , <?= $name; ?></h1>
    <h3>my age is : <?= $age; ?></h3>
    @endphp
     --}}
    <ul>
     <?php foreach($data as $value): ?>
     <li><?= $value; ?> </li>
     <?php endforeach; ?>
    </ul>
</body>
</html>