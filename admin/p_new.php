<?php

    require_once('head.php')

?>
<style>
    .bord li{
        list-style-type: none;
        border: 2px solid black;
        margin: 5px 0px;
    }
    #sub-form li{
        list-style-type: none;
        border: 2px solid black;
        margin: 5px 0px;
    }
    button{
        color: black;
    }
    .mix label{
        font-weight: bold;
    }
    h3{
        text-decoration: underline;
    }
    body{
        color: black;
    }
</style>

<div class=" page-banner-section section" style=" margin-top:2rem;">
    <div class="container">
        <h3>New Product Ad</h3>
        <form action="../p_upload.php" method="post" enctype="multipart/form-data">
            <div class="container mix  border p-3" >
                
                <div>
                    <label for="name">Game Name</label>
                   <br>
                    <input class="form-control" type="text" name="title">
                </div>
                <div>
                    <label for="price">Price</label>
                   <br>
                    <input class="form-control" type="text" name="price">
                </div>
                <div>
                    <label for="type">type</label>
                   <br>
                    <input class="form-control" type="text" name="type">
                </div>
                <div>
                    <label for="size">size</label>
                   <br>
                    <input class="form-control" type="text" name="size">
                </div>

                <div>
                    <label for="image1">Images</label>
                        <br>
                    <input class="form-control" type="file" name="image[]" id="" multiple>
                </div>
                
                
            </div>


            <div class="button mt-3 mb-2 d-flex justify-content-between  mx-auto bg-secondary rounded shadow p-3 text-white ">
                <div>
                    <p class="fw-bold">Set your Specifications</p>
                </div>
                <div>
                    <a href="javascript:void(0)" onclick="duplicateDiv()" class="btn btn-primary rounded shadow" id="add" style="max-width:10rem; height:5rem">Add more specs</a>
                </div>
            </div>

            
            <ol class="bord">
                <li id="main-form">
                    <div class="w-75 mx-auto p-3" >
                        
                        
                        <div class="mb-3">
                        

                        <label for="question" class="form-label">Type your Specifications</label><br>
                        <input type="text"
                            class="form-control" name="specification[]" id="" aria-describedby="helpId" placeholder="">
                        <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                        </div>
                        <div>
                            <!-- <p>Type your Answer</p> -->
                            <div class="mb-3">
                            

                                <label for="question" class="form-label">Type your answer</label><br>
                                <input type="text"
                                    name="a[]" class="form-control" id="" aria-describedby="helpId" placeholder="">
                                    
                                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                            </div>
                            
                            
                        </div>

                    </div>
                </li>
            </ol>
            

            <div class="w-75 mx-auto p-3" id="sub-form"></div>

            <div class="container border p-2 mix">
                
                <div>
                    <label for="Status">Status</label>
                    <!-- <label for="" class="form-label">state</label> -->
                        <select class="form-select form-select-lg" name="status" id="">
                            <option selected>Select one</option>
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                            
                        </select>
                </div>
                <div class="mt-3">
                    <label for="category">Category</label>
                    <input class="form-control" type="text" name="category">
                </div>
                
                <div>
                    <label for="tag">Tag</label>
                    <input class="form-control" type="text" name="tag">
                </div>
                <div>
                    <label for="brand">Brand</label>
                    <input class="form-control" type="text" name="brand">
                </div>
               <br>
            
            
            
                <div class="mt-3" style="text-align:left">
                    <label for="description">Description</label><br>
                    <textarea class="form-control" name="description" id=""  rows="5"></textarea>
                </div>
            </div>
            <div class="w-75 mx-auto mt-2 text-center">
                <button type="submit" name="btn"  class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>

</div>


<!-- <div id="original-div">
  This is the original div.
</div> -->
<!-- <button onclick="duplicateDiv()">Duplicate Div</button>
<div id="div-container">
</div> -->


<script>
    function duplicateDiv() {
  // Get the original div element
  var originalDiv = document.getElementById("main-form");

  // Create a new div element
  var newDiv = document.createElement("li");

  // Copy the content of the original div into the new div
  newDiv.innerHTML = originalDiv.innerHTML;

   // Add a delete button to the new div
  var deleteButton = document.createElement("button");
//   var deleteButton = document.getElementById("delete");
  deleteButton.innerText = "Delete";
  deleteButton.onclick = function() {
    // Remove the new div from the container
    newDiv.parentNode.removeChild(newDiv);
  };
  newDiv.appendChild(deleteButton);

  // Add the new div to the container
  var divContainer = document.getElementById("sub-form");
  divContainer.appendChild(newDiv);
}

</script>

<?php
    require_once('footer.php')
?>