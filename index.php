<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form action="functions/queries.php" method="post">
                <div class="from-group">
                <label for="">Names</label>
                    <input class="form-control" type="text" name="names" id="">
                </div>
                <div class="from-group">
                <label for="">Subject</label>
                    <input class="form-control" type="text" name="subject" id="">
                </div>
                <div class="from-group">
                <label for="">Email</label>
                    <input class="form-control" type="email" name="email" id="">
                </div>
                <div class="from-group">
                <label for="">Phone</label>
                    <input class="form-control" type="text" name="phone" id="">
                </div>
                <div class="from-group">
                <label for="">Message</label>
                <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="from-group mt-4">
                    <button class="btn btn-md btn-primary" name="sendEmail" type="submit" value="">Send</button>            
                </div>
            </form>
        </div>
    <div class="col-sm-4"></div>
    </div>
    </div>
</body>
</html>