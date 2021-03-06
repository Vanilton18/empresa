<?php
	$this->assign('title','EMPRESA VANILTON | Home');
	$this->assign('nav','home');

	$this->display('_Header.tpl.php');
?>

	<div class="modal hide fade" id="getStartedDialog">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">&times;</a>
			<h3>Getting Started With Phreeze</h3>
		</div>
		<div class="modal-body" style="max-height: 300px">
			<p>This site has been generated by Phreeze classbuilder and contains basic DB
			read and write capability.  One UI page has been created for each table in your
			database.  Click on the links in the top navigation bar to view the pages.</p>

			<p>The application is not intended to use as-is unless you only want
			a simple web interface to your data tables and you require some type
			of authorization to access the app.  In order to convert this into
			a real working application you will need to customize each page as needed.
			The philosophy behind the auto-generated code is to
			generate more code than you need.  You can and should delete the controllers,
			methods and views that you don't need.</p>

			<h4>UI Controls</h4>

			<p>The UI controls for editing fields are generated based on the database column types.
			The generator doesn't know the <i>purpose</i> of each field, though.  For example an INT
			field may be best displayed as a regular input, a slider or an on/off switch.  It's
			possible that the field shouldn't be editable by the user at all.
			The generator doesn't know these things and so it makes a best guess based on
			column types and sizes.  You will most likely have to switch out UI controls that
			are best for your application.  Bootstrap provides a lot of great UI controls
			for you to use.</p>

			<h4>Controllers</h4>

			<p>One controller has been created for each table in the application.
			The controllers are located in /libs/Controller/.
			If a particular table is not directly editable then the controller and
			view templates should be deleted.  An example might be a table
			used in a many-to-many assignment.</p>

			<h4>Models</h4>

			<p>Several Model files have been created for each table in the application.
			The model files are located in /libs/Model/.
			If your schema changes you can re-generate only the DAO (data-access object)
			files by selecting the DAO-Only package in class builder.  As long as you
			don't touch files in the /libs/Model/DAO/ folder then you can safely make
			changes to your database schema and regenerate code without losing any
			of your customizations.</p>

		</div>
		<div class="modal-footer">
			<button id="okButton" data-dismiss="modal" class="btn btn-primary">Let's Rock...</button>
		</div>
	</div>

	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
		
			<h1>BEM VINDO! <i class="icon-thumbs-up"></i></h1>
		
		<p>	Esta aplicação foi criada para testes com o uso de Selenium WebDriver e Cucumber-JVM</p>

			<p><em>Generated with Phreeze 3.3.7 HEAD.</p>
		<div class="row">
			<div class="span">
				<h2><p><a class="btn" href="http://phreeze.com/">About Phreeze</a></p></h2>
			</div>
			<div class="span">
				<h2><p><a class="btn" href="http://github.com/vanilton18">Projeto de Teste - GitHub</a></p></h2>
			</div>
			<div class="span">
				<h2><p><a class="btn" href="http://www.seleniumhq.org/">About Selenium</a></p></h2>
			</div>
			<div class="span">
				<h2><p><a class="btn" href="https://cukes.info/">About Cucumber</a></p></h2>
			</div> 
			<div class="span">
				<h2><p><a class="btn" href=" http://maven.apache.org/">About Maven</a></p></h2>
			</div>
			
		</div>
	</div> 

<?php
	$this->display('_Footer.tpl.php');
?>