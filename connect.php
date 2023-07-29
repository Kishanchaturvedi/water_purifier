<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$massage = $_POST['massage'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'text');
if ($conn->connect_error) {
    die('Connecting failed' . $conn->connect_error);
} else {
    //THE CORRECTED 'INSERT INTO' STATEMENT
    $text = $conn->prepare("insert into registration(name,email,number,massage)
    values(?,?,?,?)");
    $text->bind_param('ssis', $name, $email, $number, $massage);
    $text->execute();
        $subject = "New Inquiry from Website";
    $to = "kisan12chaturvedi@gmail.com";
    $message = "
<html>
<head>
<title>New Inquiry from Website</title>
</head>
<body>
<p>New Inquiry from Website</p>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Messages</th>
</tr>
<tr>
<td>$name</td>
<td>$email</td>
<td>$number</td>
<td>$massage</td>
</tr>
</table>
</body>
</html>
";

        // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
    $headers .= 'From: <no_reply@example.com>' . "\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";

        mail($to, $subject, $message, $headers);


    if ($text->execute()) {
        // Registration Successful

        // Close the statement and connection
        $text->close();
        $conn->close();

        // Redirect to contact.php with success message
        header("Location: contact.php?success=true");
        exit;
    } else {
        echo "Registration Failed. Please try again later.";
    }
    // echo "Registration Succsesflly.....";
    // $text->close();
    // $conn->close();
}
?>