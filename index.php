<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/daisyui@2.31.0/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script> 

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" /> -->
<link href="css/main.css" rel="stylesheet" type="text/css" />
<style>
  :root {
  --color-default: #fff;
}
@media (prefers-color-scheme: dark){
	:root{
		--color-default: #252b30;
	}
}
[data-theme='dark'] {
  --color-default: retro;
}
  </style>
    <title>inventory</title>
</head>
<body>
<?php include "./Components/navbar.php";?>
<script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
</script>
</body>
</html>