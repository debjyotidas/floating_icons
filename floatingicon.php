<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
crossorigin="anonymous" referrerpolicy="no-referrer" /> 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&family=Staatliches&display=swap" rel="stylesheet">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Map_circle</title>
<style>

.fab-container {
  position: fixed;
  bottom: 50px;
  right: 50px;
  z-index: 999;
  cursor: pointer;
}

.fab-icon-holder {
  width: 40px;
  height: 40px;
  border-radius: 100%;
  background: #016fb9;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
}

.fab-icon-holder:hover {
  opacity: 0.8;
}

.fab-icon-holder i {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-size: 20px;
  color: #ffffff;
}

.fab {
  width: 60px;
  height: 60px;
  background: #d23f31;
}

.fab-options {
  list-style-type: none;
  margin: 0;
  position: absolute;
  bottom: 70px;
  right: 0;
  opacity: 0;
  transition: all 0.6s ease;
  transform: scale(0);
  transform-origin: 85% bottom;
}

.fab:hover+.fab-options,
.fab-options:hover {
  opacity: 1;
  transform: scale(1);
}

.fab-options li {
  display: flex;
  justify-content: flex-end;
  padding: 5px;
}

.fab-label {
  padding: 2px 5px;
  align-self: center;
  user-select: none;
  white-space: nowrap;
  border-radius: 3px;
  font-size: 16px;
  background: #666666;
  color: #ffffff;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  margin-right: 10px;
}

.bt_top{   
    background-color:#016fb9;
    border: none;
    color: #ffffff;
    padding: 10px 12px !important ;
    
    text-align: center;
    text-decoration: none;
    display: block;
    margin: 0px 0px;
    cursor: pointer;
    border-top-left-radius: 50%!important;
    border-top-right-radius: 50% !important;
    width: 35px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

 button +.bt_bot{
  background-color:#016fb9;
  border: none;
  color: #ffffff;
  text-align: center;
  text-decoration: none;
  display: block;
  margin: 0px 0px;
  cursor: pointer;
  border-bottom-left-radius: 50% !important;
  border-bottom-right-radius: 50% !important;
  width: 35px;  
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.btn-group button {
    
  display: block; /* Make the buttons appear below each other */
  background-color:#016fb9;
  border: none;
  padding: 10px 9px;
  text-align: center;
  text-decoration: none;
  display: block;
  margin: 0px 0px !important;
  cursor: pointer;

}
button:hover {
  opacity: 0.8;  
  transform: scale(1.08);
  
}

/* Add a background color on hover */
.btn-group  {
  position: absolute;
  bottom:280px;
  right: 7.5px;
  display: block;
  
}

</style>
</head>
<body>
   <!-- <div id="map"> -->
   <!-- </div> -->

    <div class="fab-container">
        <div class="fab fab-icon-holder">
            <i class="fa-solid fa-plus"></i>
        </div>
        
           
        <ul class="fab-options">
            <!-- <li> -->
            <div class="btn-group">
                <button class="bt_top text-center" style="border-top-left-radius: 50%; border-top-right-radius: 50%;padding-left: 1px;"><strong>+</strong></button> 
                <button class="bt_bot" style="border-bottom-left-radius: 50%;border-bottom-right-radius: 50%;border-top-style: solid;border-width:0.5px;border-top-color: #ffff;"><strong>-</strong></button><br>   
            </div>                              
                      
            <!-- </li> -->
        
            <li>
                <span class="fab-label">Map View/Satellite View</span>
                <div class="fab-icon-holder">
                    <i class="fas fa-layer-group"></i>
                </div>
            </li>
            <li>
                <span class="fab-label">Show Arrow/Dots</span>
                <div class="fab-icon-holder">
                    <i class="fas fa-location-pin"></i>
                </div>
            </li>
            <li>
                <span class="fab-label">Show Past Location</span>
                <div class="fab-icon-holder">
                    <i class="fas fa-clock"></i>
                </div>
            </li>
            <li>
                <span class="fab-label">Show Geofence</span>
                <div class="fab-icon-holder">
                    <i class="fas fa-circle"></i>
                </div>
            </li>
           
            <li>
                <span class="fab-label">Refresh Tracker Location</span>
                <div class="fab-icon-holder">
                    <i class="fas fa-arrows-rotate"></i>
                </div>
            </li>
            <li>
                <span class="fab-label">Road Side Assistancet</span>
                <div class="fab-icon-holder">
                    <i class="fas fa-truck-fast"></i>
                </div>
            </li>
        </ul>
    </div>
<script>

function initMap() 
    {
        const map = new google.maps.Map(document.getElementById("map"), 
            {
                zoom: 4,
                center: { lat: 40.714, lng: -74.005 },
                mapTypeId: "terrain",
            });
            
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHa0THDQTfC-ZnJfEpVXsmK5UvogCbPG4&callback=initMap&libraries=&v=weekly"></script>
</body>
</html>