



<?php
    require 'db.php';
?>
<!doctype html>
<html class="" lang="">
						<!-- entry-header-area start -->
						<div class="entry-header-area">
							<div class="row">
								<div class="col-md-12">
									<div class="entry-header">
										<h2 class="entry-title">Личные данные</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- entry-header-area end -->
						<!-- Start checkout-area -->
						<div class="checkout-area">
							<div class="row">
								<div class="col-md-12">
									<!-- Accordion start -->
									<div class="panel-group" id="accordion">
										<!-- Start My-First-Address -->
										<div class="panel panel_default">
											<div class="panel-heading">
												<h4 class="panel-title">
													<a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="">Адрес доставки <i class="fa fa-caret-down"></i> </a>
												</h4>
											</div>
											<div id="payment-address" class="collapse">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6 col-xs-12">
														<form method="POST"action="/m-a.php"enctype="multipart/form-data">
															<fieldset id="account">
															<?php
															$id="";
                                                             $name="";
                                                             $lastname="";
                                                             $adress="";
                                                             $indecs="";
                                                             $city="";
                                                             $dop="";
                                                             $pusto="";
                                                             $email="";
                                                             $tel="";
															if ( isset ($_SESSION['logged_user']) ) :
													    $name_p= $_SESSION['logged_user']->login;


														$link=mysqli_connect('localhost', 'root', '', 'userlistdb')
                                                                                or die("Ошибка " . mysqli_error($link));
                                                                            $query ="SELECT * FROM `users` WHERE login='$name_p'";
                                                                            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                                                            while($row = mysqli_fetch_array($result)){
                                                                            $id_p=$row['id'];}
                                                        $link=mysqli_connect('localhost', 'root', '', 'userlistdb')
                                                                                or die("Ошибка " . mysqli_error($link));
                                                                            $query ="SELECT * FROM `dostavka` WHERE pusto='$id_p'";
                                                                            $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                                                                            while($row = mysqli_fetch_array($result)){
                                                                             $id=$row['id'];
                                                                             $name=$row['name'];
                                                                             $lastname=$row['family'];
                                                                             $adress=$row['adre'];
                                                                             $indecs=$row['indecs'];
                                                                             $city=$row['city'];
                                                                             $dop=$row['dop-infa'];
                                                                             $pusto=$row['pusto'];
                                                                             $email=$row['e-mail'];
                                                                             $tel=$row['telephone'];
                                                                                          }

														?><?php endif ?>

																<legend>Ваши личные данные</legend>
																<div class="form-group">
																	<label><sup>*</sup>Имя</label>
											    					<input type="text" class="form-control" placeholder="имя" name="firstname" value="<?php echo $name ?>" />
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Фамилия</label>
																	<input type="text" class="form-control" placeholder="фамилия" name="lastname" value="<?php echo $lastname ?>"/>
																</div>
																<div class="form-group">
																	<label><sup>*</sup>E-mail</label>
																	<input type="email" class="form-control" placeholder="E-mail" name="email" value="<?php echo $email ?>"/>
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Номер телефона</label>
																	<input type="text" class="form-control" placeholder="Номер телефона" name="telephone" value="<?php echo $tel ?>"/>
																</div>
																</fieldset>

															<fieldset>
																<legend>Дополнительная информация</legend>
																<input class="form-control"  rows="6" name="dop-infa" value="<?php echo $dop ?>"></input>
															</fieldset>
														</div>
														<div class="col-md-6 col-xs-12">
															<fieldset id="address">
																<legend>Ваш адрес</legend>

																<div class="form-group">
																	<label><sup>*</sup>Адрес </label>
																	<input type="text" class="form-control" placeholder="Адрес " name="address" value="<?php echo $adress ?>" />
																</div>

																<div class="form-group">
																	<label><sup>*</sup>Город</label>
																	<input type="text" class="form-control" placeholder="Город" name="city" value="<?php echo $city ?>"/>
																</div>
																<div class="form-group">
																	<label><sup>*</sup>Почтовый индекс</label>
																	<input type="text" class="form-control" placeholder="Почтовый индекс" name="postcode" value="<?php echo $indecs ?>"/>
																</div>
															</fieldset>

														</div>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<div class="checkbox">
																<label>

															</div>
															<div class="buttons clearfix">
																<div class="pull-right">
																	Я прочел и согласен с
																	<a href="#"><b>Политикой обработки персональных данных</b></a>
																	<input type="checkbox" name="agree" />

																	<input type="submit"name="submit_image"value="Сохранить">
																</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End My-First-Address -->
										<!-- Start My Address -->
										<!-- End My Address -->
										<!-- End My Wish List -->
									</div>
									<!-- Accordion end -->
								</div>
							</div>
						</div>
						<!-- End Shopping-Cart -->

						<!-- My-Account-Area start -->

						<!-- My-Account-Area end -->
					</div>
				</div>
			</div>

    </body>
</html>
