<?php

echo '<form class="addForm form" action="admin.php" method="post">
						<p>Enter a company<input type="text" class="input guitar" name="company" required></p>
						<p>Enter a name<input type="text" class="input guitar" name="name" required></p>
						<p>Choose the type 
							<label>
								<input type="radio" name="type" value="acoustic" class="guitar">Acoustic
							</label>
							<label>
								<input type="radio" name="type" value="electric" class="guitar">Electric
							</label>					
						</p>
						<p>Enter price<input type="number" min="0" class="input guitar" name="price" required></p>		
						<input type="submit" name="submit" class="submit" value="Add new guitar">			
							</div>
						</div>';


?>