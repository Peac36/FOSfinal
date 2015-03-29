<!DOCTYPE HTML>
<html>
<head>
<link rel='stylesheet' href='css/index.css'>
<link rel='stylesheet' href='js/jquery-ui-1.11.3.custom/jquery-ui.min.css'>
<script src='js/jquery-2.1.3.min.js'></script>
<script src='js/jquery-ui-1.11.3.custom/jquery-ui.min.js'></script>
<script src='js/calendar.js'></script>

</head>
<body>
	<!--start mainwrapper -->
	<div class='mainwrapper'>
		<nav>
			<ul>
				<li class='activeNav'>Home</li>
				<li>About</li>
				<li>FAQ</li>
				<li>Contact</li>

			</ul>
		</nav>
		<div class='bodyholder'>
			<!-- start of top part of body -->
				<div id='loren'>
					<p>About Us</p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
					when an unknown printer took a galley of type and scrambled it to make a type spe
					cimen book.</br>
					<span>more..<span>
					</div>
			<!-- end of top part of body -->



		</div>
			<!-- start of middle part of body -->
			<div class='middle'>
				<div class='leftcol'>
					<div class='holder'>
						<div class='theader'><div>Result</div></div>
						<div class='tbody'>
							<table id='result'>
								<tr>
									<th>Make</th>
									<th>Model</th>
									<th>Reg.Number</th>
									<th>Power</th>
									<th>Color</th>
								</tr>
								<tr>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
								</tr>
								<tr>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
								</tr>
							</table>
						</div>
						<div class='tfooter'></div>
					</div>


				</div>

				<div class='rightcol'>
					<div class='rightbody'>
							<form>
								<!-- start of first row -->
								<div class='row'>

									<div class='cell'>
									<div><p>Make</p></div>
									<select>
										<option value='1'>1</option>
									</select>
									</div>

									<div class='cell'>
									<div><p>Model</p></div>
									<select>
										<option value='1'>1</option>
									</select>
									</div>
									<div class='clear'></div>
								</div>
								<!-- end of first row -->

								<!-- start of second row -->
								<div class='row'>

									<div class='cell'>
									<div><p>Registration Number</p></div>
									<select>
										<option value='1'>1</option>
									</select>
									</div>

									<div class='cell'>
									<div><p>Power</p></div>
									<select>
										<option value='1'>1</option>
									</select>
									</div>
									<div class='clear'></div>
								</div>
								<!-- end of second row -->

								<!-- start of third row -->
								<div class='row'>

									<div class='cell'>
									<div><p>Color</p></div>
									<select>
										<option value='1'>1</option>
									</select>
									</div>

									<div class='cell'>
									<div><p>Type</p></div>
									<select>
										<option value='rend'>Rended</option>
										<option value='rend'>Free</option>
									</select>
									</div>
									<div class='clear'></div>
								</div>
								<!-- end of third row -->

								<!-- start of fourth row -->
								<div class='row'>

									<div class='cell'>
									<div><p>From</p></div>
									<input type='text' name='from' id='from' style='width:120px'/>
									<button  type='button'></button>
									</div>

									<div class='cell'>
									<div><p>To</p></div>
									<input type='text' name='to' id='to' style='width:120px'/>
									<button type='button'></button>
									</div>
									<div class='clear'></div>
								</div>
								<!-- end of fourth row -->

								<!-- start of last row -->
								<div class='row'>

									<div class='cell'>

									</div>

									<div class='cell'>
									<button  type='button' id='search'>Search</button>
									</div>
									<div class='clear'></div>
								</div>
								<!-- end of last row -->




							</form>
					</div>
				</div>
			</div>
			<div class='clear'></div>
			<!-- end of middle part of body -->
		<footer>
			<span>All right reserved solutions</span>
		</footer>

	</div>
	<!--end mainwrapper -->
</body>
</html>