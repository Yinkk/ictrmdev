
<!DOCTYPE html>
<html lang="en">
<head>
	<mata charset="utf-8">
		<title>ระบบบริหารงานวิจัยคณะเทคโนโลยีสารสนเทศและการสื่อสาร</title>
		<!-- <link rel="stylesheet" type="text/css" href="{{ url('assets/bootstrap/css/bootstrap.min.css')}}"> -->
		<!-- <link rel="stylesheet" type="text/css" href="{{ url('assets/font-awesome/css/font-awesome.min.css')}}"> -->

		<link rel="stylesheet" type="text/css" href="{{ url('assets/bootstrap/css/justified-nav.css')}}">
		<!-- CSS Admin Theme -->
		<link href="{{ url('assets/admin_theme/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
		<!-- MetisMenu CSS -->
		<link href="{{ url('assets/admin_theme/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
		<!-- Timeline CSS -->
		<link href="{{ url('assets/admin_theme/dist/css/timeline.css') }}" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{ url('assets/admin_theme/dist/css/sb-admin-2.css') }}" rel="stylesheet">
		<!-- Morris Charts CSS -->
		<link href="{{ url('assets/admin_theme/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="{{ url('assets/admin_theme/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<!-- DataTables CSS -->
		<link href="{{ url('assets/admin_theme/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
		<!-- DataTables Responsive CSS -->
		<link href="{{ url('assets/admin_theme/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="{{ url('assets/admin_theme/dist/css/sb-admin-2.css') }}" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="{{ url('assets/admin_theme/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	</head>

	<body>

		<div class="container">
			@if(Request::segment(1) == 'admin')
			<div class="masthead">
				<h3 class="text-muted">ระบบบริหารงานวิจัยคณะเทคโนโลยีสารสนเทศและการสื่อสาร</h3>
			</div>
			@yield('content')
			@else
			<div class="masthead">
				<h3 class="text-muted">ระบบบริหารงานวิจัยคณะเทคโนโลยีสารสนเทศและการสื่อสาร</h3>
				<nav>
					<ul class="nav nav-justified">
						<li class="active"><a href="{{ url('home') }}">หน้าหลัก</a></li>
						<li><a href="#">ข้อมูลนักวิจัย</a></li>
						<li><a href="#">ข้อมูลงานวิจัย</a></li>
						<li><a href="#">เอกสารดาวน์โหลด</a></li>
						<li><a href="#">คู่มือการใช้งาน</a></li>
						<li><a href="#">ติดต่อ</a></li>
						<li><a href="{{ url('admin') }}">เข้าสู่ระบบ</a></li>
					</ul>
				</nav>
			</div>
			@yield('content')
			@endif
			<footer class="well" style="margin-top: 20px;">
				&copy; 2015 ระบบบริหารงานวิจัยคณะเทคโนโลยีสารสนเทศและการสื่อสาร <a href="{{ url('admin') }}">Backend</a>
			</footer>
		</div>

		<!-- JavaScript Admin Theme -->
		<!-- jQuery -->
		<script src="{{ url('assets/admin_theme/bower_components/jquery/dist/jquery.min.js') }}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{ url('assets/admin_theme/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="{{ url('assets/admin_theme/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

		<!-- Morris Charts JavaScript -->
		<script src="{{ url('assets/admin_theme/bower_components/raphael/raphael-min.js') }}"></script>
		<script src="{{ url('assets/admin_theme/bower_components/morrisjs/morris.min.js') }}"></script>
		<!-- <script src="{{ url('assets/admin_theme/js/morris-data.js') }}"></script> -->

		<!-- Custom Theme JavaScript -->
		<script src="{{ url('assets/admin_theme/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ url('assets/admin_theme/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
		<script src="{{ url('assets/admin_theme/dist/js/sb-admin-2.js') }}"></script>
		
		<script>
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});
		</script>

	</body>
	</html>



