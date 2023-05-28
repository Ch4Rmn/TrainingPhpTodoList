<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
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

    <?php
    // get - show - edit - update  
    require_once('db_connection.php');

    $id = $_GET['id'];
    // echo $id;

    $sql = "SELECT * FROM TodoList WHERE id=$id";

    $query = mysqli_query($conn, $sql);

    $data = (mysqli_fetch_assoc($query));
    $id = $data['id'];

    $name = $data['name'];
    $description = $data['description'];
    $status = $data['status'];

    // update
    if (isset($_POST['subBtn'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        // $Updatestatus = $_GET['status'];

        $updateSql = "UPDATE TodoList SET name='$name',description='$description',status='$status' WHERE id=$id";

        $query = mysqli_query($conn, $updateSql);
        // var_dump($query);



        if (mysqli_query($conn, $updateSql)) {
            return header('location:master.php');
        }


        # code...
    }


    // View 
    ?>
    <!-- time -->
    <h5 class="animate__animated animate__bounce" style="text-shadow: 1px 1px 1px black;">
        <div class="text-end mx-3 text-danger ">
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

    <div class="row">
        <div class="loader col-3" style="margin-top:-18px ;"></div>


    </div>

    <!-- time -->



    <div class="container-md col-6" style="margin-top: -50px;">
        <h3 class="text-shadow" style="text-shadow:1px 1px 1px blue">Update</h3>
        <form method="POST">



            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input required type="text" name="name" value="<?php echo $name ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input required type="text" value="<?php echo $description ?>" name="description" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mt-2">
                <label for="exampleInputEmail1" class="form-label">Status</label>

                <select value="<?php echo $status ?>" class="form-select" name="status" id="floatingSelect" aria-label="Floating label select example">
                    <!-- <option selected>Open this select menu</option> -->
                    <option value="active" selected>Active</option>
                    <option value="disabled">Disabled</option>
                    <!-- <option value="3">Three</option> -->
                </select>
            </div>

            <input type="submit" name="subBtn" value="Update" class="btn btn-primary mt-4">


            <!-- <button class="btn btn-primary" type="submit">Create</button> -->
        </form>
    </div>



</body>

</html>