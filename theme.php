<?php
// ၁။ User ထိန်းချုပ်မှု- Theme ပြောင်းရင် Cookie ထဲ သိမ်းမည်
if (isset($_GET['set_theme'])) {
    setcookie("user_theme", $_GET['set_theme'], time() + (86400 * 30), "/");
    header("Location: theme.php");
    exit();
}

// ၂။ Cookie စစ်မည် (မရှိရင် default 'light' ဟု ယူမည်)
$current_theme = $_COOKIE['user_theme'] ?? 'light';

// Theme အလိုက် အရောင် သတ်မှတ်ခြင်း
$bg_class = ($current_theme === 'dark') ? 'bg-dark text-white' : 'bg-light text-dark';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Theme Switcher</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="<?php echo $bg_class; ?> p-5">

    <div class="container text-center">
        <h2>Cookie Example</h2>
        <p>လက်ရှိ Theme: <strong><?php echo ucfirst($current_theme); ?> Mode</strong></p>
        
        <!-- Theme ပြောင်းရန် ခလုတ်များ -->
        <a href="theme.php?set_theme=light" class="btn btn-primary">Light Mode</a>
        <a href="theme.php?set_theme=dark" class="btn btn-secondary">Dark Mode</a>
    </div>

</body>
</html>