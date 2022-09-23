
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-light">
        <div class="container">
          <div class="card p-6 p-lg-10 space-y-4">
            <h1 class="h3 fw-700">
                New CDB Account Created
            </h1>
            <p>Account Name: {{ $AccountName }}</p>
            <p>Account Group: {{ $AccountGroup }}</p>
            <p>Account Type: {{ $AccountType }}</p>
            <p>Domain Account: {{ $DomainAccount }}</p>
            <p>Nickname: {{ $NickName }}</p>
          </div>

          <div class="text-muted text-center my-6">
            Sent from Integrated Computer Systems Inc. <br>
            Limketkai Building, Ortigas Ave,<br>
            San Juan, 1502 Metro Manila <br>
          </div>
        </div>
</body>
</html>  
