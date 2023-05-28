<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <div class="bg-danger">
        <marquee behavior="scroll" direction="alternate" scrollamount='4'>
            <span class="fw-bold">Breaking News: </span>
            <span class=""> NASA Pursues Lunar Terrain Vehicle Services for Artemis Missions</span>
            NASA is seeking industry proposals for a next-generation LTV (Lunar Terrain Vehicle) that will allow astronauts to go farther and conduct more science than ever before as they explore the south polar region of the Moon during Artemis missions.

            Artemis astronauts will drive to explore and sample more of the lunar surface using the LTV than they could on foot. NASA will contract LTV as a service from industry rather than owning the rover. Contracting services from industry partners allows NASA to leverage commercial innovation and provide the best value to U.S. taxpayers while achieving its human spaceflight scientific and exploration goals.

            “We want to leverage industry’s knowledge and innovation, combined with NASA’s history of successfully operating rovers, to make the best possible surface rover for our astronaut crews and scientific researchers,” said Lara Kearney, manager of NASA’s Extravehicular Activity and Human Surface Mobility program at the agency’s Johnson Space Center in Houston.

            The LTV will function like a cross between an Apollo-style lunar rover and a Mars-style uncrewed rover. It will support phases driven by astronauts and phases as an uncrewed mobile science exploration platform, similar to NASA’s Curiosity and Perseverance Mars rovers. This will enable continued performance of science even when crews are not present on the lunar surface. Artemis astronauts will use the LTV to traverse the lunar surface and transport scientific equipment, extending the distances they can cover on each moonwalk.

            Under the Lunar Terrain Vehicle Services request for proposals, NASA has provided requirements for companies interested in developing and demonstrating the LTV, including an approach that encourages companies to produce an innovative rover for use by NASA and other commercial customers for multiple years.


        </marquee>
    </div>


    <!-- weather -->
    <div class="containers">
        <div class="cloud front">
            <span class="left-front"></span>
            <span class="right-front"></span>
        </div>
        <span class="sun sunshine"></span>
        <span class="sun"></span>
        <div class="cloud back">
            <span class="left-back"></span>
            <span class="right-back"></span>
        </div>
    </div>





    <!-- time -->
    <h5 class="animate__animated animate__bounce" style="text-shadow: 1px 1px 1px black;">
        <div class="text-end mx-3 mt-1 text-danger ">
            Myanmar Time:<?php
                            // echo date_default_timezone_set('Asia,Rangoon');
                            // echo date('h:m A');
                            $timeZone = 'Asia/Rangoon';
                            $dateTime = new DateTime('now', new DateTimeZone($timeZone));
                            $formattedTime = $dateTime->format('Y-m-d H:i a');
                            echo $formattedTime;
                            ?>
        </div>
    </h5>




    <div class="container rounded-lg mt-4">


        <!-- Create  -->
        <h1 class="text-center mt-3 text-decoration-underline" style="text-shadow: 1px 1px 1px #000000;">ToDo List</h1>


        <div class="row mt-3  rounded">


            <div class="col-4 shadow-sm  rounded text-dark ">
                <h3 class="text-shadow mt-3">create todoList</h3>
                <form action="" method="post">

                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <!-- <input required type="text" name="description" class="form-control" id="exampleInputPassword1"> -->
                        <textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mt-2">
                        <label for="exampleInputEmail1" class="form-label">Status</label>

                        <select class="form-select" name="status" id="floatingSelect" aria-label="Floating label select example">
                            <!-- <option selected>Open this select menu</option> -->
                            <option value="active" selected>Active</option>
                            <option value="disabled">Disabled</option>
                            <!-- <option value="3">Three</option> -->
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" name="subBtn">Create</button>


                    <!-- <button class="btn btn-primary" type="submit">Create</button> -->
                </form>

                <!-- panda -->
                <div class="loader"></div>






            </div>



            <!-- View  -->
            <div class="col shadow-sm rounded text-dark">
                <h3 class='mt-3'>Lists</h3>
                <div class="table-responsive rounded">
                    <table class="table table-striped ">
                        <thead>
                            <tr class="bg-primary">
                                <th scope="col" class="text-center">id</th>
                                <th scope="col" class="text-center">name</th>
                                <th scope="col" class="text-center">description</th>
                                <th scope="col" class="text-center">status</th>
                                <th scope="col" class="text-center">created time</th>
                                <th scope="col" class="text-center">action</th>

                            </tr>
                        </thead>
                        <tbody>



                </div>
            </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<footer class="bg-dark text-center text-lg-start text-warning shadow">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-danger" href="https://github.com/Ch4Rmn">github.com/Ch4Rmn</a>
    </div>
    <!-- Copyright -->
</footer>

</html>



<!-- create -->
<?php
session_start();

require_once('db_connection.php');



if (isset($_POST['subBtn'])) {
    // echo $_POST['name'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $sql = "INSERT INTO TodoList (name,description,status) VALUES ('$name','$description','$status')";

    if (mysqli_query($conn, $sql)) {
        // $_SESSION['status'] = 'complete process';
        // mysqli_query($conn, $sql);
        # code...
    } else {
        echo 'fail' . mysqli_error($conn);
        # code...
    }
};



//view
// <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">



// require_once('db_connection.php');

$readSql = "SELECT * FROM TodoList ORDER BY id DESC";

$readData = mysqli_query($conn, $readSql);

// var_dump($readData);

// $totalRow = mysqli_num_rows($readData);

// if (mysqli_num_rows($readData) > 0) {
//     foreach ($readData as $student) {

while ($read = mysqli_fetch_assoc($readData)) {
    $id = $read['id'];
    $name = substr($read['name'], 0, 10);

    $time = date('h:m:i A', strtotime($read['created_at']));

    $description = substr($read['description'], 0, 15);

    $status = $read['status'];


    // echo $read['name'];
    echo " <tr>
                    <td scope='col'> $id</td>
                    <td scope='col'> $name </td>
                    <td scope='col'>$description</td>
                    <td scope='col'>$status</td>
                    <td scope='col'>$time</td>
                    <td scope='col'>
                    <a href='update.php?id=$id' class='btn btn-sm btn-warning'>Edit</a>
                    <a href='delete.php?id=$id' class='btn btn-sm btn-danger'>Delete</a>
                    </td>
                
                </tr>";





    // var_dump($student);
    # code...
    // echo $student['name'];
}



// $totalRow = mysqli_num_rows($readData);

// while ($read = mysqli_fetch_assoc($readData))


// echo $read['name'];
// echo $read['id'];
// echo $read['description'];
// echo $read['status'];


// return $read;

// echo "<pre></pre>";
// var_dump($read);


// var_dump($readData);


// View 
?>