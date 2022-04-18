@extends('layouts.master')
@section('title')
Sobre nosotros
@endsection

@section('content')
<div class="container">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th><span>Usuario</span></th>
							<th class="text-center"><span>Rol</span></th>
							<th><span>Email</span></th>
                            <th><span>Teléfono</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="100" height="100">

								<a href="#" class="user-link">Ricardo Delgado</a>

							</td>
							<td class="text-center">
                                <span class="user-subhead">Admin</span>
							</td>
							<td>
								<a href="#">richardelgado@gmail.com</a>
							</td>
                            <td>
								<span>3122732018</span>
							</td>
						</tr>
                        <tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" width="100" height="100">
								<a href="#" class="user-link">Jairo Rosero</a>

							</td>
							<td class="text-center">
                                 <span class="user-subhead">Admin</span>
							</td>
							<td>
								<a href="#">jairorosero2@gmail.com</a>
							</td>
                            <td>
								<span>3147240214</span>
							</td>
						</tr>
						<tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" width="100" height="100">
								<a href="#" class="user-link">Esteban Meneses</a>

							</td>
							<td class="text-center">
                                 <span class="user-subhead">Miembro</span>
							</td>
							<td>
								<a href="#">estebanmeneses103@gmail.com</a>
							</td>
                            <td>
								<span>3136317665</span>
							</td>

						</tr>
						<tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" width="100" height="100">
								<a href="#" class="user-link">Camilo Bastidas</a>

							</td>
							<td class="text-center">
                                 <span class="user-subhead">Miembro</span>
							</td>
							<td>
								<a href="#">hermanbastidas27@gmail.com</a>
							</td>
                            <td>
								<span>3022542605</span>
							</td>

						</tr>
						<!-- <tr>
							<td>
								<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="100" height="100">
								<a href="#" class="user-link">Emma Watson</a>

							</td>
							<td class="text-center">
                            <span class="user-subhead">Miembro</span>
							</td>
							<td>
								<a href="#">humphrey@bogart.com</a>
							</td>
                            <td>
								<span>31226573</span>
							</td>

						</tr> -->

					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>
</div>
@endsection
