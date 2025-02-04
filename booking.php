<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Booking</title>
</head>
<body>
<!-- NAVBAR -->
<ul class="nav justify-content-center list-group-item-dark">
    <li class="nav-item mt-2 ">
        <a class="nav-link active text-dark" href="home.html">Home</a>
    </li>
    <li class="nav-item mt-2">
        <a class="nav-link text-dark" href="booking.html">Booking</a>
    </li>
</ul>
<!-- /NAVBAR -->
<!-- FORM -->
<div class="container bg-primary  mt-4 ">
    <div class="row">
        <div class="col bg-white py-5">
            <div class="container">
                <!-- FORM -->
                <form action="index.php" method="POST">
                <div class="form-group">
                    <label class="col col-form-label bold">Nama</label>
                    <div class="col-12">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col col-form-label bold">Check in</label>
                    <div class="col-12">
                        <input type="date" class="form-control" name="checkin" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col col-form-label bold">Duration</label>
                    <div class="col-12">
                        <input type="number" class="form-control" name="duration" placeholder="">
                        <small><p>Day(s)</p></small>
                    </div>
                </div>
                <!-- room type -->
                <fieldset >
                <div class="form-group">
                    <label class="col col-form-label bold">Room type</label>
                    <div class="col-12">
                        <select class="form-control" name="roomtype" >
                            <option>Standard</option>
                            <option>Superior</option>
                            <option>Luxury</option>
                        </select>
                    </div>
                </div>
            </fieldset>

                <div class="form-group">
                    <label class="col col-form-label-lg">Add Service(s)</label>
                    <div class="col-12">
                        <small><p>$20/service</p></small>
                        <input type="checkbox" name="cek[]" value="Room Service"><label for="roomservice">Room Service</label>
                    </div>
                    <div class="col-12">
                        <input type="checkbox" name="cek[]" value="Breakfast"><label for="breakfast">Breakfast</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col col-form-label bold">Phone Number</label>
                    <div class="col-12">
                        <input type="text" class="form-control" name="phonenumber">
                    </div>
                </div>
                <!-- button -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Book</button>
                </div>
            </form>
            </div>
        </div>
        
        <div class="col bg-white py-5 d-flex justify-content-center align-items-center">
            <img src="standard.jpg" class="img-thumbnail">
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>