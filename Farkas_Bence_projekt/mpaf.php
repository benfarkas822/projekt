<?php
include_once "header.php";
if(!isset($_SESSION['useruid'])){
   header("Location: index.php?error=notsignedin");
   exit();
}
require_once "includes/dbh.inc.php";



if (isset($_POST['update'])) {

	foreach($_POST['positions'] as $position) {
        $index = $position[0];
          $newPosition = $position[1];
		  $newCol= $position[2];
		   
          $conn->query("UPDATE mpaf SET position = '$newPosition', col='$newCol' WHERE id='$index';");
	}
        exit('success');
	}
?>
	<main>
		<div class="row">
			<div class="col-2 col-t-2"> </div>
			<div class="col-8 col-t-8">
				<div class="row lists">
					<div class="col-6 col-t-6">
						<ul id="sortableListA" class="connectedSortable" data-col="1">
							<?php
							$sql = $conn->query("SELECT id, name, position FROM mpaf where col = 1 ORDER BY position");
							while($data = $sql->fetch_array()) {
							    echo '<li class="li1" data-index="'.$data['id'].'" data-position="'.$data['position'].'">
							            '.$data['name'].'</li>';
                            }
						?>
						</ul>
					</div>
					<div class="col-6 col-t-6">
						<ul id="sortableListB" class="connectedSortable" data-col="2">
							<?php
							$sql = $conn->query("SELECT id, name, position FROM mpaf where col = 2 ORDER BY position");
							while($data = $sql->fetch_array()) {
							   echo '<li class="li2" data-index="'.$data['id'].'" data-position="'.$data['position'].'">
							            '.$data['name'].'</li>';
                            }
						?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-2 col-t-2"> </div>
		</div>
		<button type="submit" onClick="saveNewPositions()" name="submit" class="savebtn">save</button>
		<p class="saved" id="saved">Your list has been succesful saved.</p>
	</main>
	<?php
include_once "footer.php";
?>