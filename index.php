<?php 
    if(isset($_POST['library']))
    {
        if(!empty($_GET['id'])){
    $result = $conn->query("SELECT Box FROM library WHERE id = {$_GET['id']}");

        if($result->num_rows >0){
        $row = $result->fetch_assoc();

        header("Content-type: image/jpeg");
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $fetch['Box'] ).'"/>';
        }else {
        echo 'Image not found...';
        }
        }
    }
    else {
        $query = "SELECT * FROM library";
        $result = filterTable($query);
        
    }
    
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "gamelib");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="kisspng-playstation-2-playstation-3-playstation-4-5ae05cf79e15a3.3611433615246533036475.png" type="image/gif" sizes="16x16">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <link rel="stylesheet" href="main.css"> 
    
       <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
      
      <title>| PlayStation |</title>
      
      
      <style>
          
            #librarys{
                text-align: center;
            }
        
          .library{
                text-align: center;
            }
          
          #image{
              display: inline;
            
            }

            table,tr,th,td
            {
                border: 1px solid black;
/*                width: 990px;*/

            }
      
      </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <br><br>
   <div class="bounce"><img src="playstation-network-logo-png-22.png" alt="Italian Trulli" style="width:150px; height: 150px;"><span class="letter">P</span><span class="letter">l</span><span class="letter">a</span><span class="letter">y</span><div class="col-sm-1">
       <img src="kisspng-playstation-2-playstation-3-playstation-4-5ae05cf79e15a3.3611433615246533036475.png" alt="Italian Trulli" style="width:150px; height: 150px;">

        </div> <span class="letter">S</span><span class="letter">t</span><span class="letter">a</span><span class="letter">t</span><span class="letter">i</span>
    <span
        class="letter">o</span><span class="letter">n</span><img src="playstation-network-logo-png-22.png" alt="Italian Trulli" style="width:150px; height: 150px;">
        </div>
      
      
      <div class="container">
      <div class="col-sm-12" >
        <div class="jumbotron" style="background-color: transparent;">
       <div class="library">
          <div class="form">
              
        <h1>Add Game to Library</h1>
              <br>
    
        <form name="form" method="post" action="dbEntry.php"> 
        <input type="hidden" name="new" value="1" />
        <p><input type="text" id="fname" name="name" placeholder="Name" required /></p>
        <p><input type="text" id="plat" name="platform" placeholder="Platform" required /></p>
        <p><input type="text" id="gen" name="genre" placeholder="Genre" required /></p>
            <p><input type="date" id="date" name="date" placeholder="Date" required /></p>
        <p><input type="text" id="play" name="players" placeholder="Players" required /></p>
        <p><input type="text" id="pub" name="publisher" placeholder="Publisher" required /></p>
           <p><input type="file" id="image" name="image"/></p>
            
        <p><input name="submit" type="submit" value="Add Game" /></p>
        </form>
          
          </div>
          </div>
            </div>

          <div class="row">
          <svg class="c-symbol c-symbol--x" xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20" viewBox="0 0 20 20">  
  <circle cx="10" cy="10" r="10"/>
  <polygon points="16.107,5.608 14.514,4.015 10.061,8.468 5.608,4.015 4.016,5.608 8.469,10.061 4.016,14.514    5.608,16.106 10.061,11.653 14.514,16.106 16.107,14.514 11.654,10.061  "/>  
</svg><!-- /c-symbol--x -->


<svg class="c-symbol c-symbol--square" xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20" viewBox="0 0 20 20">  
  <circle cx="10" cy="10" r="10"/>
  <path d="M14.122,5.878v8.244H5.878V5.878H14.122 M16.007,3.993H3.993v12.014h12.014V3.993L16.007,3.993z"/>  
</svg><!-- /c-symbol--square -->


<svg class="c-symbol c-symbol--triangle" xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20" viewBox="0 0 20 20">
  
  <circle cx="10" cy="10" r="10"/>
  <path d="M10.042,5.904l1.924,3.333l1.925,3.333h-3.849H6.192l1.924-3.333L10.042,5.904 M10.042,2.354L6.58,8.35   l-3.461,5.995h6.923h6.923L13.502,8.35L10.042,2.354L10.042,2.354z"/>
  
</svg><!-- /c-symbol--triangle -->


<svg class="c-symbol c-symbol--circle" xmlns="http://www.w3.org/2000/svg" version="1.1" height="20" width="20" viewBox="0 0 20 20">
  
  <circle cx="10" cy="10" r="10"/>
  <path d="M9.998,5.177c2.658,0,4.82,2.163,4.82,4.82s-2.162,4.82-4.82,4.82c-2.658,0-4.819-2.163-4.819-4.82   S7.34,5.177,9.998,5.177 M9.998,3.293c-3.703,0-6.705,3.002-6.705,6.705c0,3.703,3.002,6.705,6.705,6.705   c3.704,0,6.706-3.002,6.706-6.705C16.704,6.295,13.702,3.293,9.998,3.293L9.998,3.293z"/>
  
</svg><!-- /c-symbol--circle -->
          
          </div>
        <div class="jumbotron" id="librarys"><h1><img src="kisspng-playstation-2-playstation-3-playstation-4-5ae05cf79e15a3.3611433615246533036475.png" alt="Italian Trulli" style="width:50px; height: 50px;">View Added Games<img src="kisspng-playstation-2-playstation-3-playstation-4-5ae05cf79e15a3.3611433615246533036475.png" alt="Italian Trulli" style="width:50px; height: 50px;"></h1>
            <form name="form" method="GET" action="view.php">

                    <table class="tg"  style="width:100%">
                      <thead>
                        <tr>
                        <th>ID</th>
                          <th>Name</th>
                        <th>Platform</th>
                          <th>Genre</th>
                        <th>Date</th>
                          <th>Players</th>
                        <th>Publisher</th>
                          <th>Box Art</th>
                       
                      </tr>
                    </thead>
            
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tbody>
                  <tr>
                    
                    <td><?php echo $row['Id'];?></td>  
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Platform'];?></td>
                    <td><?php echo $row['Genre'];?></td>
                    <td><?php echo $row['Date'];?></td> 
                    <td><?php echo $row['Players'];?></td>
                    <td><?php echo $row['Publisher'];?></td>
                    <td><img src="images/" .row[Box]. /><?php echo $row['Box'] ;?></td>
                    

                  </tr>
                </tbody>      
                <?php endwhile;?>
                        
                   
                <?php 

                        
//                echo "<table>";
//                        while($row = mysqli_fetch_array($result))
//                        {
//                            echo "<tbody>";
//							echo "<tr>";
//                            echo "<td>".$row['Name']."</td>";
//                            echo "<td>".$row['Platform']."</td>";
//                            echo "<td>".$row['Genre']."</td>";
//                            echo "<td>".$row['Date']."</td>";
//                            echo "<td>".$row['Players']."</td>";
//                            echo "<td>".$row['Publisher']."</td>";
//                            echo "<td>".$row['Box']."</td>";
////                          echo "<img src='images/".$row['Box']."' >";
//							echo "</tr>";
//                            echo "</tbody>";
//                         
//                        }
//						echo "</table>";
             ?>
                    </table>
              </form>        
          </div>        
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>