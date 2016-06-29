<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Tabel</span> - Status</h4>
						</div>

						<!--<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>-->
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href=""><i class="icon-home2 position-left"></i> Tabel</a></li>
							<li><a href="">Status</a></li>
							<li class="active">Lihat</li>
						</ul>

						<!--<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>-->
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Left fixed column -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Status</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<!--<li><a data-action="close"></a></li>-->
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<a href="<?php echo base_url(); ?>status/create" class="btn btn-primary btn-rounded"><i class="icon-add position-left"></i> Buat</a>
							<!--When displaying a table which scrolls along the <code>x-axis</code>, it can sometimes be useful to the end user for the left most column to be <code>fixed</code> in place, if it shows grouping, index or similar information. This is basically the same idea as <code>'freeze columns'</code> in Excel. This can be achieved with the <code>FixedColumns</code> plug-in for DataTables, as shown below.-->
						</div>

						<table class="table" width="100%">
							<thead>
						        <tr>
						            <th>Nama</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						    	<?php foreach ($h->result() as $row){?>
						        <tr>
						            <td><?php echo $row->NAMA_STS;?></td>
					                <td>
					                	<ul class="icons-list">
											<li class="text-primary-600"><a href="<?php echo base_url(); ?>status/update/<?php echo $row->ID_STS;?>"><i class="icon-pencil7"></i></a></li>
											<li class="text-danger-600"><a href="<?php echo base_url(); ?>status/delete/<?php echo $row->ID_STS;?>"><i class="icon-trash"></i></a></li>
										</ul>
									</td>
						        </tr>
						        <?php }?>
						        
						        <!--<tr>
						            <td>Garrett</td>
						            <td>Winters</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>63</td>
						            <td>2011/07/25</td>
					                <td><span class="label label-danger">$170,750</span></td>
						            <td>8422</td>
						            <td><a href="#">g.winters@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Ashton</td>
						            <td>Cox</td>
						            <td>Junior Technical Author</td>
						            <td>San Francisco</td>
						            <td>66</td>
						            <td>2009/01/12</td>
					                <td><span class="label label-default">$86,000</span></td>
						            <td>1562</td>
						            <td><a href="#">a.cox@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Cedric</td>
						            <td>Kelly</td>
						            <td>Senior Javascript Developer</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2012/03/29</td>
					                <td><span class="label label-success">$433,060</span></td>
						            <td>6224</td>
						            <td><a href="#">c.kelly@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Airi</td>
						            <td>Satou</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>33</td>
						            <td>2008/11/28</td>
					                <td><span class="label label-danger">$162,700</span></td>
						            <td>5407</td>
						            <td><a href="#">a.satou@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Brielle</td>
						            <td>Williamson</td>
						            <td>Integration Specialist</td>
						            <td>New York</td>
						            <td>61</td>
						            <td>2012/12/02</td>
					                <td><span class="label label-info">$372,000</span></td>
						            <td>4804</td>
						            <td><a href="#">b.williamson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Herrod</td>
						            <td>Chandler</td>
						            <td>Sales Assistant</td>
						            <td>San Francisco</td>
						            <td>59</td>
						            <td>2012/08/06</td>
					                <td><span class="label label-danger">$137,500</span></td>
						            <td>9608</td>
						            <td><a href="#">h.chandler@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Rhona</td>
						            <td>Davidson</td>
						            <td>Integration Specialist</td>
						            <td>Tokyo</td>
						            <td>55</td>
						            <td>2010/10/14</td>
					                <td><span class="label label-default">$97,900</span></td>
						            <td>6200</td>
						            <td><a href="#">r.davidson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Colleen</td>
						            <td>Hurst</td>
						            <td>Javascript Developer</td>
						            <td>San Francisco</td>
						            <td>39</td>
						            <td>2009/09/15</td>
					                <td><span class="label label-success">$405,500</span></td>
						            <td>2360</td>
						            <td><a href="#">c.hurst@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Sonya</td>
						            <td>Frost</td>
						            <td>Software Engineer</td>
						            <td>Edinburgh</td>
						            <td>23</td>
						            <td>2008/12/13</td>
					                <td><span class="label label-danger">$103,600</span></td>
						            <td>1667</td>
						            <td><a href="#">s.frost@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Jena</td>
						            <td>Gaines</td>
						            <td>Office Manager</td>
						            <td>London</td>
						            <td>30</td>
						            <td>2008/12/19</td>
					                <td><span class="label label-default">$90,560</span></td>
						            <td>3814</td>
						            <td><a href="#">j.gaines@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Quinn</td>
						            <td>Flynn</td>
						            <td>Support Lead</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2013/03/03</td>
					                <td><span class="label label-info">$342,000</span></td>
						            <td>9497</td>
						            <td><a href="#">q.flynn@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Charde</td>
						            <td>Marshall</td>
						            <td>Regional Director</td>
						            <td>San Francisco</td>
						            <td>36</td>
						            <td>2008/10/16</td>
					                <td><span class="label label-success">$470,600</span></td>
						            <td>6741</td>
						            <td><a href="#">c.marshall@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Haley</td>
						            <td>Kennedy</td>
						            <td>Senior Marketing Designer</td>
						            <td>London</td>
						            <td>43</td>
						            <td>2012/12/18</td>
					                <td><span class="label label-danger">$113,500</span></td>
						            <td>3597</td>
						            <td><a href="#">h.kennedy@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Tatyana</td>
						            <td>Fitzpatrick</td>
						            <td>Regional Director</td>
						            <td>London</td>
						            <td>19</td>
						            <td>2010/03/17</td>
					                <td><span class="label label-info">$385,750</span></td>
						            <td>1965</td>
						            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
						        </tr>-->
						    </tbody>
						</table>
					</div>
					<!-- /left fixed column -->


					<!-- Right fixed column -->
					<!--<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Right fixed column</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							FixedColumns has the ability to freeze columns on both the left and right hand sides of the table. By default it will fix the first column on the left, but using the initialisation parameters <code>leftColumns</code> and <code>rightColumns</code> you can alter this to fix the columns on the right as well. This example shows a single column fixed in place, in this case the right most column.
						</div>

						<table class="table datatable-fixed-right" width="100%">
							<thead>
						        <tr>
						            <th>First name</th>
						            <th>Last name</th>
						            <th>Position</th>
						            <th>Office</th>
						            <th>Age</th>
						            <th>Start date</th>
						            <th>Salary</th>
						            <th>Extn.</th>
						            <th>E-mail</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>Tiger</td>
						            <td>Nixon</td>
						            <td>System Architect</td>
						            <td>Edinburgh</td>
						            <td>61</td>
						            <td>2011/04/25</td>
					                <td><span class="label label-info">$320,800</span></td>
						            <td>5421</td>
						            <td><a href="#">t.nixon@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Garrett</td>
						            <td>Winters</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>63</td>
						            <td>2011/07/25</td>
					                <td><span class="label label-danger">$170,750</span></td>
						            <td>8422</td>
						            <td><a href="#">g.winters@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Ashton</td>
						            <td>Cox</td>
						            <td>Junior Technical Author</td>
						            <td>San Francisco</td>
						            <td>66</td>
						            <td>2009/01/12</td>
					                <td><span class="label label-default">$86,000</span></td>
						            <td>1562</td>
						            <td><a href="#">a.cox@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Cedric</td>
						            <td>Kelly</td>
						            <td>Senior Javascript Developer</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2012/03/29</td>
					                <td><span class="label label-success">$433,060</span></td>
						            <td>6224</td>
						            <td><a href="#">c.kelly@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Airi</td>
						            <td>Satou</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>33</td>
						            <td>2008/11/28</td>
					                <td><span class="label label-danger">$162,700</span></td>
						            <td>5407</td>
						            <td><a href="#">a.satou@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Brielle</td>
						            <td>Williamson</td>
						            <td>Integration Specialist</td>
						            <td>New York</td>
						            <td>61</td>
						            <td>2012/12/02</td>
					                <td><span class="label label-info">$372,000</span></td>
						            <td>4804</td>
						            <td><a href="#">b.williamson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Herrod</td>
						            <td>Chandler</td>
						            <td>Sales Assistant</td>
						            <td>San Francisco</td>
						            <td>59</td>
						            <td>2012/08/06</td>
					                <td><span class="label label-danger">$137,500</span></td>
						            <td>9608</td>
						            <td><a href="#">h.chandler@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Rhona</td>
						            <td>Davidson</td>
						            <td>Integration Specialist</td>
						            <td>Tokyo</td>
						            <td>55</td>
						            <td>2010/10/14</td>
					                <td><span class="label label-default">$97,900</span></td>
						            <td>6200</td>
						            <td><a href="#">r.davidson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Colleen</td>
						            <td>Hurst</td>
						            <td>Javascript Developer</td>
						            <td>San Francisco</td>
						            <td>39</td>
						            <td>2009/09/15</td>
					                <td><span class="label label-success">$405,500</span></td>
						            <td>2360</td>
						            <td><a href="#">c.hurst@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Sonya</td>
						            <td>Frost</td>
						            <td>Software Engineer</td>
						            <td>Edinburgh</td>
						            <td>23</td>
						            <td>2008/12/13</td>
					                <td><span class="label label-danger">$103,600</span></td>
						            <td>1667</td>
						            <td><a href="#">s.frost@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Jena</td>
						            <td>Gaines</td>
						            <td>Office Manager</td>
						            <td>London</td>
						            <td>30</td>
						            <td>2008/12/19</td>
					                <td><span class="label label-default">$90,560</span></td>
						            <td>3814</td>
						            <td><a href="#">j.gaines@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Quinn</td>
						            <td>Flynn</td>
						            <td>Support Lead</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2013/03/03</td>
					                <td><span class="label label-info">$342,000</span></td>
						            <td>9497</td>
						            <td><a href="#">q.flynn@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Charde</td>
						            <td>Marshall</td>
						            <td>Regional Director</td>
						            <td>San Francisco</td>
						            <td>36</td>
						            <td>2008/10/16</td>
					                <td><span class="label label-success">$470,600</span></td>
						            <td>6741</td>
						            <td><a href="#">c.marshall@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Haley</td>
						            <td>Kennedy</td>
						            <td>Senior Marketing Designer</td>
						            <td>London</td>
						            <td>43</td>
						            <td>2012/12/18</td>
					                <td><span class="label label-danger">$113,500</span></td>
						            <td>3597</td>
						            <td><a href="#">h.kennedy@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Tatyana</td>
						            <td>Fitzpatrick</td>
						            <td>Regional Director</td>
						            <td>London</td>
						            <td>19</td>
						            <td>2010/03/17</td>
					                <td><span class="label label-info">$385,750</span></td>
						            <td>1965</td>
						            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
						        </tr>
						    </tbody>
						</table>
					</div>-->
					<!-- /right fixed column -->


					<!-- Multiple fixed columns -->
					<!--<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Multiple fixed columns</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							FixedColumns allows columns to be fixed from both the left and right hand sides of the table. Fixing right hand-side columns is done by using the <code>rightColumns</code> initialisation parameter, which works just the same as <code>leftColumns</code> does for the left side of the table. This example shows both the left and right columns being fixed in place.
						</div>

						<table class="table datatable-fixed-both" width="100%">
							<thead>
						        <tr>
						            <th>First name</th>
						            <th>Last name</th>
						            <th>Position</th>
						            <th>Office</th>
						            <th>Age</th>
						            <th>Start date</th>
						            <th>Salary</th>
						            <th>Extn.</th>
						            <th>E-mail</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>Tiger</td>
						            <td>Nixon</td>
						            <td>System Architect</td>
						            <td>Edinburgh</td>
						            <td>61</td>
						            <td>2011/04/25</td>
					                <td><span class="label label-info">$320,800</span></td>
						            <td>5421</td>
						            <td><a href="#">t.nixon@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Garrett</td>
						            <td>Winters</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>63</td>
						            <td>2011/07/25</td>
					                <td><span class="label label-danger">$170,750</span></td>
						            <td>8422</td>
						            <td><a href="#">g.winters@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Ashton</td>
						            <td>Cox</td>
						            <td>Junior Technical Author</td>
						            <td>San Francisco</td>
						            <td>66</td>
						            <td>2009/01/12</td>
					                <td><span class="label label-default">$86,000</span></td>
						            <td>1562</td>
						            <td><a href="#">a.cox@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Cedric</td>
						            <td>Kelly</td>
						            <td>Senior Javascript Developer</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2012/03/29</td>
					                <td><span class="label label-success">$433,060</span></td>
						            <td>6224</td>
						            <td><a href="#">c.kelly@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Airi</td>
						            <td>Satou</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>33</td>
						            <td>2008/11/28</td>
					                <td><span class="label label-danger">$162,700</span></td>
						            <td>5407</td>
						            <td><a href="#">a.satou@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Brielle</td>
						            <td>Williamson</td>
						            <td>Integration Specialist</td>
						            <td>New York</td>
						            <td>61</td>
						            <td>2012/12/02</td>
					                <td><span class="label label-info">$372,000</span></td>
						            <td>4804</td>
						            <td><a href="#">b.williamson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Herrod</td>
						            <td>Chandler</td>
						            <td>Sales Assistant</td>
						            <td>San Francisco</td>
						            <td>59</td>
						            <td>2012/08/06</td>
					                <td><span class="label label-danger">$137,500</span></td>
						            <td>9608</td>
						            <td><a href="#">h.chandler@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Rhona</td>
						            <td>Davidson</td>
						            <td>Integration Specialist</td>
						            <td>Tokyo</td>
						            <td>55</td>
						            <td>2010/10/14</td>
					                <td><span class="label label-default">$97,900</span></td>
						            <td>6200</td>
						            <td><a href="#">r.davidson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Colleen</td>
						            <td>Hurst</td>
						            <td>Javascript Developer</td>
						            <td>San Francisco</td>
						            <td>39</td>
						            <td>2009/09/15</td>
					                <td><span class="label label-success">$405,500</span></td>
						            <td>2360</td>
						            <td><a href="#">c.hurst@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Sonya</td>
						            <td>Frost</td>
						            <td>Software Engineer</td>
						            <td>Edinburgh</td>
						            <td>23</td>
						            <td>2008/12/13</td>
					                <td><span class="label label-danger">$103,600</span></td>
						            <td>1667</td>
						            <td><a href="#">s.frost@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Jena</td>
						            <td>Gaines</td>
						            <td>Office Manager</td>
						            <td>London</td>
						            <td>30</td>
						            <td>2008/12/19</td>
					                <td><span class="label label-default">$90,560</span></td>
						            <td>3814</td>
						            <td><a href="#">j.gaines@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Quinn</td>
						            <td>Flynn</td>
						            <td>Support Lead</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2013/03/03</td>
					                <td><span class="label label-info">$342,000</span></td>
						            <td>9497</td>
						            <td><a href="#">q.flynn@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Charde</td>
						            <td>Marshall</td>
						            <td>Regional Director</td>
						            <td>San Francisco</td>
						            <td>36</td>
						            <td>2008/10/16</td>
					                <td><span class="label label-success">$470,600</span></td>
						            <td>6741</td>
						            <td><a href="#">c.marshall@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Haley</td>
						            <td>Kennedy</td>
						            <td>Senior Marketing Designer</td>
						            <td>London</td>
						            <td>43</td>
						            <td>2012/12/18</td>
					                <td><span class="label label-danger">$113,500</span></td>
						            <td>3597</td>
						            <td><a href="#">h.kennedy@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Tatyana</td>
						            <td>Fitzpatrick</td>
						            <td>Regional Director</td>
						            <td>London</td>
						            <td>19</td>
						            <td>2010/03/17</td>
					                <td><span class="label label-info">$385,750</span></td>
						            <td>1965</td>
						            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
						        </tr>
						    </tbody>
						</table>
					</div>-->
					<!-- /multiple fixed columns -->


					<!-- Complex headers example -->
					<!--<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Complex headers</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							If you are using multiple rows in the table header, it can be useful to have a <code>rowspanning</code> cell on the column(s) you have fixed in place - equally at other times it can be useful to not and make use of the two or more cells per column. FixedColumns builds on the complex header support in DataTables to make this trivial to use in FixedColumns. Just initialise your <code>FixedColumns</code> instance as you normally would!
						</div>

						<table class="table datatable-fixed-complex">
							<thead>
								<tr>
			                        <th rowspan="2">Name</th>
			                        <th colspan="4">HR Information</th>
			                        <th colspan="4">Details</th>
			                    </tr>
						        <tr>
						        	<th>Username</th>
						            <th>Position</th>
						            <th>Office</th>
						            <th>Age</th>
						            <th>Start date</th>
						            <th>Salary</th>
						            <th>Extn.</th>
						            <th>E-mail</th>
						        </tr>
						    </thead>
						    <tbody>
						        <tr>
						            <td>Tiger</td>
						            <td>Nixon</td>
						            <td>System Architect</td>
						            <td>Edinburgh</td>
						            <td>61</td>
						            <td>2011/04/25</td>
					                <td><span class="label label-info">$320,800</span></td>
						            <td>5421</td>
						            <td><a href="#">t.nixon@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Garrett</td>
						            <td>Winters</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>63</td>
						            <td>2011/07/25</td>
					                <td><span class="label label-danger">$170,750</span></td>
						            <td>8422</td>
						            <td><a href="#">g.winters@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Ashton</td>
						            <td>Cox</td>
						            <td>Junior Technical Author</td>
						            <td>San Francisco</td>
						            <td>66</td>
						            <td>2009/01/12</td>
					                <td><span class="label label-default">$86,000</span></td>
						            <td>1562</td>
						            <td><a href="#">a.cox@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Cedric</td>
						            <td>Kelly</td>
						            <td>Senior Javascript Developer</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2012/03/29</td>
					                <td><span class="label label-success">$433,060</span></td>
						            <td>6224</td>
						            <td><a href="#">c.kelly@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Airi</td>
						            <td>Satou</td>
						            <td>Accountant</td>
						            <td>Tokyo</td>
						            <td>33</td>
						            <td>2008/11/28</td>
					                <td><span class="label label-danger">$162,700</span></td>
						            <td>5407</td>
						            <td><a href="#">a.satou@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Brielle</td>
						            <td>Williamson</td>
						            <td>Integration Specialist</td>
						            <td>New York</td>
						            <td>61</td>
						            <td>2012/12/02</td>
					                <td><span class="label label-info">$372,000</span></td>
						            <td>4804</td>
						            <td><a href="#">b.williamson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Herrod</td>
						            <td>Chandler</td>
						            <td>Sales Assistant</td>
						            <td>San Francisco</td>
						            <td>59</td>
						            <td>2012/08/06</td>
					                <td><span class="label label-danger">$137,500</span></td>
						            <td>9608</td>
						            <td><a href="#">h.chandler@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Rhona</td>
						            <td>Davidson</td>
						            <td>Integration Specialist</td>
						            <td>Tokyo</td>
						            <td>55</td>
						            <td>2010/10/14</td>
					                <td><span class="label label-default">$97,900</span></td>
						            <td>6200</td>
						            <td><a href="#">r.davidson@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Colleen</td>
						            <td>Hurst</td>
						            <td>Javascript Developer</td>
						            <td>San Francisco</td>
						            <td>39</td>
						            <td>2009/09/15</td>
					                <td><span class="label label-success">$405,500</span></td>
						            <td>2360</td>
						            <td><a href="#">c.hurst@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Sonya</td>
						            <td>Frost</td>
						            <td>Software Engineer</td>
						            <td>Edinburgh</td>
						            <td>23</td>
						            <td>2008/12/13</td>
					                <td><span class="label label-danger">$103,600</span></td>
						            <td>1667</td>
						            <td><a href="#">s.frost@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Jena</td>
						            <td>Gaines</td>
						            <td>Office Manager</td>
						            <td>London</td>
						            <td>30</td>
						            <td>2008/12/19</td>
					                <td><span class="label label-default">$90,560</span></td>
						            <td>3814</td>
						            <td><a href="#">j.gaines@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Quinn</td>
						            <td>Flynn</td>
						            <td>Support Lead</td>
						            <td>Edinburgh</td>
						            <td>22</td>
						            <td>2013/03/03</td>
					                <td><span class="label label-info">$342,000</span></td>
						            <td>9497</td>
						            <td><a href="#">q.flynn@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Charde</td>
						            <td>Marshall</td>
						            <td>Regional Director</td>
						            <td>San Francisco</td>
						            <td>36</td>
						            <td>2008/10/16</td>
					                <td><span class="label label-success">$470,600</span></td>
						            <td>6741</td>
						            <td><a href="#">c.marshall@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Haley</td>
						            <td>Kennedy</td>
						            <td>Senior Marketing Designer</td>
						            <td>London</td>
						            <td>43</td>
						            <td>2012/12/18</td>
					                <td><span class="label label-danger">$113,500</span></td>
						            <td>3597</td>
						            <td><a href="#">h.kennedy@datatables.net</a></td>
						        </tr>
						        <tr>
						            <td>Tatyana</td>
						            <td>Fitzpatrick</td>
						            <td>Regional Director</td>
						            <td>London</td>
						            <td>19</td>
						            <td>2010/03/17</td>
					                <td><span class="label label-info">$385,750</span></td>
						            <td>1965</td>
						            <td><a href="#">t.fitzpatrick@datatables.net</a></td>
						        </tr>
						    </tbody>
						</table>
					</div>-->
					<!-- /complex headers example -->