<?php

echo '<form class="addForm form" action="admin.php?action=edit_table" method="post">
						<p>Name<input type="text" class="input" name="name" required></p>
						<p>Number of columns<input type="number" min="0" class="input" name="cols" required></p>

						<p>Enter price<input type="number" min="0" class="guitar" name="price" required></p>		
						<input type="submit" name="submit" class="submit" value="Add new table">			
							</div>
						</div>';


?>