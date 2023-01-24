<div id="gavias_customize_form" class="gavias_customize_form">
  
	<div class="form-group action">
		<input type="button" id="gavias_customize_save" class="btn form-submit" value="Save" />
		<input type="button" id="gavias_customize_preview" class="btn form-submit" value="Preview" />
		<input type="button" id="gavias_customize_reset" class="btn form-submit" value="Reset" />
		<input type="hidden" id="gva_theme_name" name="theme_name" value="conbiz_sub" />
	</div>   

	<div class="clearfix"></div>
	<div id="customize-gavias-preivew">
		<div id="customize-accordion">   
		  
			<!-- Typo -->
			<div class="card">
				<div class="card-header">
				  <a class="card-link" data-toggle="collapse" href="#customize-typo">
					 Colors & Fonts
				  </a>
				</div>
				<div id="customize-typo" class="collapse show" data-parent="#customize-accordion">
					<div class="card-body">
						
						<div class="form-wrapper">
							<div class="form-group">
								<label>Color Theme</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="theme_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>

						<div class="form-wrapper">
							<div class="form-group">
								<label>Color Theme Second</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="theme_color_second" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>

						<div class="form-wrapper">
							<div class="form-group">
								<label>Font Primary</label>
								<div class="input-group">
									 <select name="font_family_primary" class="form-select form-control customize-option">
										{{fonts|raw}}
									 </select>
								</div>
							</div>
						</div>
						
						<div class="form-wrapper">
							<div class="form-group">
								<label class="fw">Font Second (Heading h1, h2, h3...)</label>
								<div class="input-group">
									 <select name="font_family_second" class="form-select form-control customize-option">
										{{fonts|raw}}
									 </select>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Body Font Weight</label>
								<div class="input-group">
									 <select name="font_body_weight" class="form-control customize-option">
										<option value="">-- Default --</option>
										<option value="300">300</option>
										<option value="400">400</option>
										<option value="500">500</option>
										<option value="600">600</option>
										<option value="700">700</option>
										<option value="800">800</option>
										<option value="900">900</option>
									 </select>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Body Font Size</label>
								<div class="input-group">
									 <select name="font_body_size" class="form-control customize-option">
										<option value="">-- Default --</option>
										<option value="12px">12px</option>
										<option value="13px">13px</option>
										<option value="14px">14px</option>
										<option value="15px">15px</option>
										<option value="16px">16px</option>
										<option value="17px">17px</option>
										<option value="18px">18px</option>
										<option value="19px">19px</option>
										<option value="20px">20px</option>
										<option value="21px">21px</option>
										<option value="22px">22px</option>
										<option value="23px">23px</option>
										<option value="24px">24px</option>
										<option value="25px">25px</option>
										<option value="26px">26px</option>
										<option value="27px">27px</option>
										<option value="28px">28px</option>
										<option value="29px">29px</option>
										<option value="30px">30px</option>
									 </select>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div> 

			<!-- General -->
			<div class="card">
				<div class="card-header">
				  <a class="card-link" data-toggle="collapse" href="#customize-general">
					 General
				  </a>
				</div>
				<div id="customize-general" class="collapse" data-parent="#customize-accordion">
					<div class="card-body">
						<div class="form-wrapper">
							<div class="form-group">
								<label>Text color</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="body_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Link color</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="body_link_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Link hover color</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="body_link_color_hover" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div> 

			<!-- Topbar -->
			<div class="card">
				<div class="card-header">
				  <a class="card-link" data-toggle="collapse" href="#customize-topbar">
					 Topbar
				  </a>
				</div>
				 <div id="customize-topbar" class="collapse" data-parent="#customize-accordion">
					 <div class="card-body">
						<div class="form-wrapper">
							<div class="form-group">
								<label>Background</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="topbar_bg" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Topbar Color</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="topbar_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Topbar Color Link</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="topbar_color_link" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Topbar Color Hover</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="topbar_color_link_hover" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>

			<!-- Main menu -->
			 <div class="card">
				<div class="card-header">
				  <a role="button" data-toggle="collapse" href="#customize-mainmenu">
					 Main Menu
				  </a>
				</div>
				<div id="customize-mainmenu" class="collapse" data-parent="#customize-accordion">
					 <div class="card-body">
						<div class="form-wrapper">
							<div class="form-group">
								<label>Menu | Color Link</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="menu_link_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Menu | Color Hover</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="menu_link_color_hover" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Sub Menu | Background</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="submenu_bg_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Sub Menu | Color</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="submenu_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Sub Menu | Color Link</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="submenu_link_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Sub Menu | Color Hover</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="submenu_link_color_hover" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>

			<!-- Footer -->
			<div class="card">
				<div class="card-header">
					  <a class="card-link" data-toggle="collapse"  href="#customize-footer">
						 Footer
					  </a>
				</div>
				<div id="customize-footer" class="collapse" data-parent="#customize-accordion">
					 <div class="card-body">
						<div class="form-wrapper">
							<div class="form-group">
								<label>Background</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="footer_bg" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Text color</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="footer_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Color Link</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="footer_link_color" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>
						<div class="form-wrapper">
							<div class="form-group">
								<label>Color Hover</label>
								<div class="input-group colorselector">
									 <input type="text" value="" name="footer_link_color_hover" class="form-control customize-option" />
									 <span class="input-group-addon"><i></i></span>
									 <span class="remove">x</span>
								</div>
							</div>
						</div>

					</div>
				</div> 
			</div>

		</div>    
	</div>   
</div>
