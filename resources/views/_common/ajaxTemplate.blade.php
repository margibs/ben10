<script id="template_for_comment" type="nexus/template">
    <li>
        <img src='--image22--' alt=''>
        <span class='name'> 
            <a href='{{url('profile')}}/--id--'> --name-- </a>
            <span class='commentDate'>&middot; --created_at-- </span>
        </span>
        <p class='commentContent'> --comment-- </p>
    </li>
</script>

<script id="template_for_poll_item" type="nexus/template">
	<div class='row no-gutters'>
		<div class='rateEntriesWrapper'>
			<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
				<div class='rateProfile'>
					<div class='arrow-left pull-right'>
					</div>
					<a href='#' data-toggle='modal' data-target='#profileModal'>
						<img src='--profile_image_url--' class='profilePic'>
					</a>
					<p>
						<a href='#commentSection--id--' id='commentSection2--id--'> 
							--comment_count-- 
							<span> comments </span>
						</a>
					</p>
				</div>
			</div>
			<div class='col-xs-10 col-sm-10 col-md-10 col-lg-10'>
				<div class='rateEntry'>
					<div class='rateTopLinks'>
						<div class='row' style='margin: 0;'>
							<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
								<h2>--name--
									<span>
										<a href='#'> 
											by --user_name-- 
										</a>
									</span>
								</h2>
							</div>
							<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>
								<ul class='list-inline ratePinLinks'>
									<li>
										<a href='#'>
											<i class='icon-heart3' style='--rate_style_yes--' get-this='--rate_get_this_yes--' get-poll-id ='--rate_get_poll_id--'></i>
										</a>
									</li>
									<li>
										<a href='#'>
											<i class='icon-heart3' style='--rate_style_no--'></i><i class='icon-line-cross white' get-this='--rate_get_this_no--' get-poll-id ='--rate_get_poll_id--'></i>
										</a>
									</li>
									<li>
										<a href='' style='color:#fff;'>
											<i class='icon-email2'></i>
										</a>
									</li>
								</ul>
							</div>
							<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2' style='text-align: right;'>
								<span id='heart_heart--id--' style='color: #fff; font-family: Roboto; font-weight: 700; font-size: 14px; position: relative; right: -38px; top: -15px;'>
									--rate_yes_percentage--%
								</span>
								<i class='icon-heart3' style='color: #F973A6;font-size: 42px; margin-right: 10px;'></i>
							</div>
						</div>
					</div>
					<img class='load_item_modal' get-this='--id--' get-this-cat='--category_id--' get-this-sub='--sub_category_id--' src='{{url('uploads')}}/--image_url--' alt=''>
					<div id='commentSection--id--'>
						<p class='description'> 
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis enim tenetur ea adipisci illum nisi quas totam earum natus. 
						</p>
						<div id='commentArea' style='padding:0;'>
							<div class='commentWrapper' style='margin-top: 20px;'>
								<h3> Comments  
									<span> &middot; 
										<span class='comment_counter'>
											--comment_count--
										</span>
									</span>
								</h3>
								<ul class='put_comments_here'>
									--comments_men--
								</ul>
								<div class='clearfix'></div>
								<form class='clearfix' action='#' method='post' id='commentform'>
									<textarea class='comment_yeah' name='comment' cols='30' rows='10' get-this-id='--id--'></textarea>
									<input type='submit' id='submit-button' class='commentSubmit pull-right' value='Submit' style=' margin-bottom: 20px; margin-top: 10px;'>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</script>