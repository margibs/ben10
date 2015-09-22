
                        <!-- Categories Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Select Category </h4>
                                        </div>
                                        <div class="modal-body">

                                            <select id="categoryoptions" name="categoryoptions" class="form-control"> 
												<option value="0" selected> Select Category </option>
												<option value="1"> Complete Outfits </option>						
											</select>

											<div id="complete-outfits-sub-wrapper">
												<h2> Please select a sub-category: </h2>
												

                                                    <div class="rate-main-wrapper">
                                                        <div class="row">
                                                              <div class="col-xs-6 col-md-3">
                                                                <a href="{{ url('/rate/1/1') }}" class="thumbnail">
                                                                  <img alt="100%x180" src="{{ asset('images/extras/200x200.gif') }}" style="width: 100%; display: block;">
                                                                </a>
                                                                <p>Complete Outfit </p>
                                                              </div>
                                                              <div class="col-xs-6 col-md-3">
                                                                <a href="{{ url('/rate/2/2') }}" class="thumbnail">
                                                                  <img alt="100%x180" src="{{ asset('images/extras/200x200.gif') }}" style="width: 100%; display: block;">
                                                                </a>
                                                                <p> Shoes </p>
                                                              </div>
                                                              <div class="col-xs-6 col-md-3">
                                                                <a href="{{ url('/rate/3/3') }}" class="thumbnail">
                                                                  <img alt="100%x180" src="{{ asset('images/extras/200x200.gif') }}" style="width: 100%; display: block;">
                                                                </a>
                                                                <p> Dresses </p>
                                                              </div>
                                                              <div class="col-xs-6 col-md-3">
                                                                <a href="{{ url('/rate/4/4') }}" class="thumbnail">
                                                                  <img alt="100%x180" src="{{ asset('images/extras/200x200.gif') }}" style="width: 100%; display: block;">
                                                                </a>
                                                                <p> Accessories </p>
                                                              </div>
                                                        </div>
                                                    </div>

											</div> 

                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Buy Coins Modal -->
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Select Payment Method </h4>
                                        </div>
                                        <div class="modal-body">
                                             
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <h3 class="paymentTitle"> Pay through Stripe </h3>   
                                                    <form action="http://lilotime.com/charge/" method="POST">
                                                      <input type="text" name="stripeqty" />

                                                      <script>

                                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                        data-key="pk_test_Mhw3R4b6a3BKyPAdPzkqQXIl"
                                                        data-image="http://lilotime.com/wp-content/themes/bootstrap/pic_uploads/35008nb.jpg"
                                                        data-name="Demo Site"
                                                        data-description="2 widgets"
                                                        data-amount="0">

                                                      </script>

                                                    </form>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <h3 class="paymentTitle"> Pay through Paypal </h3>

                                                         <form id="t2" method="post" action="http://lilotime.com/wp-content/themes/bootstrap/process.php">
                                                            <input type="hidden" name="itemname" value="Lilo Coins" /> 
                                                            <input type="hidden" name="itemnumber" value="20000" /> 
                                                            <input type="hidden" name="itemdesc" value="Lilo Coins" /> 
                                                            <input type="hidden" name="itemprice" value="100.00" /> Quantity : <select name="itemQty"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>                                              
                                                        </form>     
                                                         
                                                        <script>
                                                          window.paypalCheckoutReady = function() {
                                                            paypal.checkout.setup("6XF3MPZBZV6HU", {
                                                              locale: 'en_US',
                                                              environment: 'sandbox',
                                                              container: ['t2']
                                                            });
                                                          }
                                                        </script>

                                                        <script src="//www.paypalobjects.com/api/checkout.js" async></script>
                                                </div>
                                            </div>
                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email Referral Modal -->
                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Enter Emails </h4>
                                        </div>
                                        <div class="modal-body" style="overflow:hidden;">

                                        	<p style="font-family:lato;"> Enter email separated with a comma (,) </p>
                                        	
											<input class="input-tag" type="text" name="tags" data-role="tagsinput">
                                            <a href="#" class="button button-3d pull-right"> Submit </a>

                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Buy Lotto Modal -->
                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Buy Tickets </h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                           <div class="row">
                                             <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 col-lg-offset-4">
                                                     <form action="{{url('lottery/buy_ticket')}}" method="post">
                                                     {!! csrf_field() !!}
                                                        <input type="number" id="numfield" class="form-control" name="qty" min="1" step="1" value="1" style="  margin-top: 6px;  font-size: 22px; height: 40px; text-align: center; font-weight: 700; width: 50%; float: left;" required>                                        
                                                        <input type="submit" id="numfieldsub" class="button button-3d" value="Buy Tickets">
                                                    </form>
                                             </div>
                                           </div>
                                      


                                            <div class="clearfix"></div>
                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- Profile Modal -->
                        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">  Lotto Tally </h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                           <div class="container">
                                                  <div class="row">
                  
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 toppad" >
                                               
                                               
                                                      <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                          <h3 class="panel-title"></h3>
                                                        </div>
                                                        <div class="panel-body">
                                                          <div class="row">
                                                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                                                            
                                                            <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                                                              <dl>
                                                                <dt>DEPARTMENT:</dt>
                                                                <dd>Administrator</dd>
                                                                <dt>HIRE DATE</dt>
                                                                <dd>11/12/2013</dd>
                                                                <dt>DATE OF BIRTH</dt>
                                                                   <dd>11/12/2013</dd>
                                                                <dt>GENDER</dt>
                                                                <dd>Male</dd>
                                                              </dl>
                                                            </div>-->
                                                            <div class=" col-md-9 col-lg-9 "> 
                                                              <table class="table table-user-information">
                                                                <tbody>
                                                                  <tr>
                                                                    <td>Department:</td>
                                                                    <td>Programming</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Hire date:</td>
                                                                    <td>06/23/2013</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Date of Birth</td>
                                                                    <td>01/24/1988</td>
                                                                  </tr>
                                                               
                                                                     <tr>
                                                                         <tr>
                                                                    <td>Gender</td>
                                                                    <td>Male</td>
                                                                  </tr>
                                                                    <tr>
                                                                    <td>Home Address</td>
                                                                    <td>Metro Manila,Philippines</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td>Email</td>
                                                                    <td><a href="mailto:info@support.com">info@support.com</a></td>
                                                                  </tr>
                                                                    <td>Phone Number</td>
                                                                    <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                                                                    </td>
                                                                       
                                                                  </tr>
                                                                 
                                                                </tbody>
                                                              </table>
                                                              
                                                              <a href="#" class="btn btn-primary">My Sales Performance</a>
                                                              <a href="#" class="btn btn-primary">Team Sales Performance</a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                             <div class="panel-footer">
                                                                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                                                    <span class="pull-right">
                                                                        <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                                                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                                                    </span>
                                                                </div>
                                                        
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                        </div>                                 
                                    </div>
                                </div>
                            </div>
                        </div>

                     


<script type="text/javascript">
    
    jQuery('#categoryoptions').change(function()
        {
            /* setting currently changed option value to option variable */
            var option = jQuery(this).find('option:selected').val();
            /* setting input box value to selected option value */
            if(option == 1){
                jQuery('#complete-outfits-sub-wrapper').css({'display':'block'});
            }
            else{
                jQuery('#complete-outfits-sub-wrapper').css({'display':'none'});
            }
    });

</script>

<script type="text/javascript" src="{{ asset('js/bootstrap-tag.js') }}"></script>




