<?php

require_once( 'core'.DIRECTORY_SEPARATOR.'autoload.php' );

use Core\UserAgent;


if( isset( $_GET['user_agent'] ) )
	// Custom User Agent
	$instance = new UserAgent( $_GET['user_agent'] );

else
	// System User Agent
	$instance = new UserAgent();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>User Agent Analayser</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<form method="get">
						<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="user_agent" class="form-control" value="<?php echo !empty($_GET['user_agent']) ? $_GET['user_agent'] : '' ?>" placeholder="Type User Agent String" required minLength="20" >
									</div>
									<div class="col-xs-6 col-sm-2">
										<button class="btn btn-success btn-block">Analayse</button>
									</div>
									<div class="col-xs-6 col-sm-2">
										<a class="btn btn-warning btn-block" href="<?php echo $_SERVER['PHP_SELF']; ?>">Reset</a>
									</div>
									
								</div>
								
								
						</div>
					</form>

					<h4 class="text-center text-info">User Agent Information</h4>
					
					<div class="table-responsive">
						<table class="table table-bordered table-striped text-center table-hover">
							
							<thead>
								<tr class="text-primary">
									<th class="col-xs-3 text-center">Property</th>
									<th class="col-xs-3 text-center">Property Key</th>
									<th class="col-xs-1 text-center">Data Type</th>
									<th class="col-xs-5 text-center">Value</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-info"><strong>User Agent String</strong></td>
									<td><code>string<code></td>
									<td rowspan="8"><code>String<code></td>
									<td class="text-left"><small><samp><?php echo $instance->string; ?><samp></small></td>
								</tr>

								<tr>
									<td class="text-info"><strong>System String</strong></td>
									<td><code>systemString<code></td>
									<td class="text-left"><small><samp><?php echo $instance->systemString; ?><samp></small></td>
								</tr>

								<tr>
									<td class="text-info"><strong>Browser Name</strong></td>
									<td><code>browserName<code></td>
									<td class="text-left"><samp><?php echo $instance->browserName; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info"><strong>Browser Version</strong></td>
									<td><code>browserVersion<code></td>
									<td class="text-left"><samp><?php echo $instance->browserVersion; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info"><strong>Platform</strong></td>
									<td><code>osPlatform<code></td>
									<td class="text-left"><samp><?php echo $instance->osPlatform; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info"><strong>OS Version</strong></td>
									<td><code>osVersion<code></td>
									<td class="text-left"><samp><?php echo $instance->osVersion; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info"><strong>OS Short Version</strong></td>
									<td><code>osShortVersion<code></td>
									<td class="text-left"><samp><?php echo $instance->osShortVersion; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info"><strong>Os Architecture</strong></td>
									<td><code>osArch<code></td>
									<td class="text-left"><samp><?php echo $instance->osArch ? $instance->osArch : '-'; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info text-center" rowspan="3"><strong>CPU Brand</strong></td>
									<td><code>isIntel<code></td>
									<td rowspan="4"><code>Boolean<code></td>
									<td class="text-left"><samp><?php echo $instance->isIntel ? 'Yes' : '-'; ?><samp></td>
								</tr>

								<tr>
									<td><code>isAMD<code></td>
									<td class="text-left"><samp><?php echo $instance->isAMD ? 'Yes' : '-'; ?><samp></td>
								</tr>

								<tr>
									<td><code>isPPC<code></td>
									<td class="text-left"><samp><?php echo $instance->isPPC ? 'Yes' : '-'; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info"><strong>Is Mobile</strong></td>
									<td><code>isMobile<code></td>
									<td class="text-left"><samp><?php echo $instance->isMobile ? 'Yes' : '-'; ?><samp></td>
								</tr>

								<tr>
									<td class="text-info"><strong>Mobile Name</strong></td>
									<td><code>mobileName<code></td>
									<td><code>String<code></td>
									<td class="text-left"><samp><?php echo $instance->mobileName ? $instance->mobileName : '-'; ?><samp></td>
								</tr>

							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>

		<div class="row">
			<footer id="footer">
			
				<div class="col-sm-6">
					Developed By Ahmed Saad &copy; 2013-2016<br />
					<small>a7mad.sa3d.2014@gmail.com</small><br />
					<cite title="telephone">Tel: +2  01011772100</cite>
				</div>
				<div class="col-sm-6">
				
					<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.
				</div>
			</footer>
		</div>
		

		<!-- Foot Scripts -->
		<script type="text/javascript">

			function setFooterHeight(){
				// sticky Footer
				var footer = document.getElementById( 'footer' );

				var footerHeight = footer.scrollHeight,
					body = document.getElementsByTagName('body')[0];

				body.style.marginBottom = footerHeight + 'px';
			}

			setFooterHeight();

			window.onresize = function(){

				setFooterHeight();
			}
			
		
		</script>

	</body>
</html>

