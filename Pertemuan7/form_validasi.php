<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>


        <input type="submit" value="Submit">
    </form>
    <script>
        $("#myForm").submit(function(event){
            event.preventDefault(); // Hindari pengiriman form otomatis
            $.ajax({
                url: 'proses_validasi.php',
                type: 'POST',
                data: $("#myForm").serialize(),
                success : function(hasil){
                    $("#myForm")[0].reset();
                    alert(hasil);
                }
            });
        });
        $(document).ready(function(){
        $("#myForm").submit(function(event){
        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        if (nama === ""){
            $("#nama-error").text("Nama harus diisi");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        if (email === ""){
            $("#email-error").text("Email harus diisi");
            valid = false;
        } else {
            $("#email-error").text("");
        }

        if (password === ""){
            $("#password-error").text("Password harus diisi");
            valid = false;
        } else if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter");
            valid = false;
        } else {
            $("#password-error").text("");
        }

        if (!valid){
            event.preventDefault();
        }
    });
});

    </script>
</body>
</html>