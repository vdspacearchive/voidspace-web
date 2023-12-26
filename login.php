session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "password") {
    $_SESSION['username'] = $username;

    header("Location: protected_page.php");
} else {
    echo "Username or password is incorrect.";
}