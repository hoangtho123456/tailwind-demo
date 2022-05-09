<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>detail-product-footmap</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/js/slick/slick.css">
	<!-- <link rel="stylesheet" type="text/css" href="../assets/js/slick/slick-theme.css"> -->
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

	<script src="../assets/js/jquery.js"></script>

	<style>
		.expander {
			max-height: 1600px;
		}

		@media only screen and (max-width:767px) {
			.expander {
				max-height: 700px;
			}
		}

		.expander:before {
			content: "";
			width: 100%;
			height: 50px;
			position: absolute;
			left: 0;
			bottom: 0;
			background: linear-gradient(#F9FBFB00 50%, #F9FBFB);
			transition: opacity 0.5s ease-in-out;
			-moz-transition: opacity 0.5s ease-in-out;
			-webkit-transition: opacity 0.5s ease-in-out;
		}

		.expander.expanded:before {
			opacity: 0;
		}

		.fieldset-rating {
			display: inline-block;
			min-width: 0;
			padding: 0;
			margin: 0;
			border: 0;
		}

		.fieldset-rating>input {
			display: none;
		}

		.fieldset-rating>label {
			margin: 0;
			padding-right: 4px;
			float: right;
			-webkit-transition: 200ms ease-in-out;
			-o-transition: 200ms ease-in-out;
			transition: 200ms ease-in-out;
			/* color: #ffc107; */
		}

		.fieldset-rating>label {
			cursor: pointer;
		}

		/* .fieldset-rating label>.fieldset-star-yes { display: none; } */
		/* .fieldset-rating > input:checked ~ label {
			color: #ffc107;
		} */
		/* .fieldset-rating > input:checked ~ label>.fieldset-star-yes {
			display: block;
		} */
		.fieldset-rating>input:checked~label>.fieldset-star-yes {
			color: #ffc107;
		}

		/* .fieldset-rating > input:checked ~ label>.fieldset-star-no {
			display: none;
		} */
		/* .fieldset-rating > input:checked ~ label:before {
			content: "\e920";
		} */
		.fieldset-rating:not(:checked)>label:hover>.fieldset-star-yes {
			color: #ffc107;
		}

		/* .fieldset-rating:not(:checked) > label:hover:before {
			content: "\e920";
		} */
		/* .fieldset-rating:not(:checked) > label:hover:before>.fieldset-star-yes {
			display: block;
		} */
		.fieldset-rating:not(:checked)>label:hover:before>.fieldset-star-yes {
			color: #ffc107;
		}

		/* .fieldset-rating:not(:checked) > label:hover:before>.fieldset-star-no {
			display: none;
		} */
		/* .fieldset-rating:not(:checked) > label:hover ~ label {
			color: #ffc107;
		} */
		/* .fieldset-rating:not(:checked) > label:hover ~ label:before {
			content: "\e920";
		} */
		/* .fieldset-rating:not(:checked) > label:hover ~ label>.fieldset-star-yes {
			display: block;
		} */
		.fieldset-rating:not(:checked)>label:hover~label>.fieldset-star-yes {
			color: #ffc107;
		}

		/* .fieldset-rating:not(:checked) > label:hover ~ label>.fieldset-star-no {
			display: none;
		} */
		.fieldset-rating>input:checked+label:hover,
		.fieldset-rating>input:checked~label:hover {
			opacity: 0.6;
		}

		.fieldset-rating>input:checked~label:hover~label,
		.fieldset-rating>label:hover~input:checked~label {
			opacity: 0.6;
		}

		/* .fieldset-rating + .help-block {
			margin-top: -10px;
			margin-bottom: 15px;
			color: red;
		} */
	</style>
</head>

<body>
	<main class="l-main text-sm font-normal">
		<div class="py-10 md:py-20 bg-gray-100">
			<div class="bg-gray-200 py-3 mb-8">
				<div class="container mx-auto px-3 md:px-4 font-light text-xs">
					<a class="hover:text-green-600 minus" href="index.php">
						Trang chủ
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block font-thin mx-0.5" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</a>
					<a class="hover:text-green-600" href="https://foodmap.asia/category/di-cho-online">
						Đi chợ online
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mx-0.5" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
					</a>
					<span>Son Dưỡng Bơ Cacao - Thỏi Tre - Zeni Vietnam</span>
				</div>
			</div>

			<div class="container c-xl-w1 mx-auto px-3 md:px-4 mb-5">
				<section class="bg-white rounded-b-lg rounded-t-lg shadow-md py-4 px-3 md:px-5 md:py-5">
					<div class="flex flex-wrap -mx-2">
						<div class="w-full md:w-1/2 lg:w-5/12 px-2 mb-3">
							<div class="p-async-slider1-js mb-3">
								<?php 
									$arr = ['img7.jpeg', 'img8.jpeg', 'img8.jpeg', 
										'img7.jpeg', 'img8.jpeg'];
									for($i = 0; $i < sizeof($arr); $i++):?>
								<div class="tRes_76">
									<img class="lazy-hidden" data-lazy-type="image"
										data-lazy-src="../assets/images/footmap/post/<?php echo $arr[$i];?>" src="" />
								</div>
								<?php endfor;?>
							</div>

							<div class="c-slider2 p-async-slider1-child-js">
								<?php 
									$arr = ['img7.jpeg', 'img8.jpeg', 'img8.jpeg', 
										'img7.jpeg', 'img8.jpeg'];
									for($i = 0; $i < sizeof($arr); $i++):?>
								<div class="mx-1">
									<div class="tRes_76">
										<img class="lazy-hidden" data-lazy-type="image"
											data-lazy-src="../assets/images/footmap/post/<?php echo $arr[$i];?>" src="" />
									</div>
								</div>
								<?php endfor;?>
							</div>
						</div>

						<div class="w-full md:w-1/2 lg:w-4/12 px-2 mb-3">
							<section class="px-1 md:px-4">
								<h2 class="text-xl md:text-2xl font-bold mb-4">
									Son Dưỡng Bơ Cacao - Thỏi Tre - Zeni Vietnam
								</h2>

								<div class="align-bottom text-xs">
									<div class="mb-1 md:mb-2 text-xs inline-block border-r divide-solid border-gray-300 pr-2 mr-2 md:pr-3 md:mr-3">
										<?php for($i = 0; $i < 4; $i++):?>
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block text-yellow-400"
											viewBox="0 0 21 21" fill="currentColor">
											<path
												d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
										</svg>
										<?php endfor;?>
										<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline-block text-yellow-400" fill="none"
											viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
										</svg>
									</div>
									<a href="#boxRatingCmt" 
										class="inline-block border-r divide-solid border-gray-300 pr-2 mr-1 md:pr-3 md:mr-2 underline text-xs md:text-sm text-green-700">Xem 0 đánh giá</a>
									<span class="text-gray-400 text-xs md:text-sm font-light">19 đã bán</span>
								</div>
								<p class="text-green-800 text-lg pb-4 mb-3 border-b divide-solid border-gray-300">
									<strong>135.000 ₫</strong></p>

								<div class="mb-2 font-light text-gray-500">
									<p class="float-left w-28 mr-3 mb-0">Vận chuyển đến:</p>
									<div class="overflow-hidden">
										<div class="relative">
											<select class="font-normal text-green-700 underline appearance-none">
												<?php 
													$arr = ['Quận 1 - Tp. HCM', 'Hà Nội', 'Thái Nguyên', 
														'Hải Phòng', 'Bắc Giang', 'Vĩnh Phúc', 'Thanh Hoá',
														'Hà Tĩnh', 'Quảng Nam'];
													for($i = 0; $i < sizeof($arr); $i++):?>
												<option value="<?php echo $arr[$i];?>"><?php echo $arr[$i];?></option>
												<?php endfor;?>
											</select>
											<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 ml-0 text-green-700"
												fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
											</svg>
										</div>
									</div>
									<div class="clear-both"></div>
								</div>

								<div class="mb-3 font-light text-gray-500">
									<p class="float-left w-28 mr-3 mb-0">Phí vận chuyển:</p>
									<div class="overflow-hidden">
										<div class="delivery-content">
											<p href="#" class="delivery-select pb-0 font-normal text-green-700 underline">
												25.000 đ
											</p>
										</div>
									</div>
									<div class="clear-both"></div>
								</div>

								<div class="mb-3 font-light text-gray-500">
									<p class="float-left w-28 mr-3 mb-0">Đóng Gói:</p>
									<div class="overflow-hidden">
										<span data-val="Thỏi"
											class="inline-block cursor-pointer border divide-solid border-green-700 py-0.5 pl-1.5 pr-5 font-normal">
											<svg xmlns="http://www.w3.org/2000/svg"
												class="h-3 w-3 inline-block mr-1 rounded-full bg-green-700 text-white" viewBox="0 0 20 20"
												fill="currentColor">
												<path fill-rule="evenodd"
													d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
													clip-rule="evenodd" />
											</svg>Thỏi</span>
									</div>
									<div class="clear-both"></div>
								</div>

								<form method="POST" action="">
									<div class="relative w-40 px-10 mb-5" data-min="1">
										<a href="javascript:void(0)" onclick="decreaseValue();"
											class="absolute top-0 left-0 w-10 h-full text-xs border divide-solid border-gray-300 pt-2 minus rounded-tl-md rounded-bl-md">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" viewBox="0 0 20 20"
												fill="currentColor">
												<path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
													clip-rule="evenodd" />
											</svg>
										</a>
										<input id="number-1" type="number" min="1" value="1" name="qty"
											class="w-full text-center appearance-none h-10 border-t border-b divide-solid border-gray-300 focus-visible:border-gray-300 focus:appearance-none"
											onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 ? true : !isNaN(Number(event.key))"
											onchange="if(parseInt(this.value) < 1 || parseInt(this.value) > 10000 || parseInt(this.value) == NaN) this.value = 1;">
										<a href="javascript:void(0)" onclick="increaseValue()"
											class="absolute top-0 right-0 w-10 h-full text-xs border divide-solid border-gray-300 pt-2 plus rounded-tr-md rounded-br-md">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 m-auto" viewBox="0 0 20 20"
												fill="currentColor">
												<path fill-rule="evenodd"
													d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
													clip-rule="evenodd" />
											</svg>
										</a>
									</div>

									<div>
										<a class="px-4 py-2 text-center uppercase mr-1 md:mr-2 inline-block hover:text-white hover:bg-green-800 transition-all border divide-solid text-xs md:text-sm border-green-800 cursor-pointer"
											data-id="5689" data-name="Son Dưỡng Bơ Cacao - Thỏi Tre - Zeni Vietnam" data-price="135000.0000"
											data-type="hasgift">
											thêm vào giỏ hàng
										</a>
										<button
											class="px-4 py-2 text-center uppercase inline-block text-white bg-green-700 hover:bg-green-800 transition-all border divide-solid text-xs md:text-sm border-green-800 cursor-pointer">Mua
											ngay</button>
									</div>
								</form>
							</section>
						</div>

						<div class="w-full md:w-1/2 lg:w-3/12 px-2 mb-3">
							<section class="xl:px-4">
								<h3 class="text-base text-green-700 font-bold mb-6">Thông tin thêm:</h3>

								<div class="relative pl-7 text-xs pb-4 mb-2 border-b divide-solid border-gray-200 font-normal">
									<span
										class="h-4 w-4 absolute left-0 top-0 rounded-full bg-white text-green-700 border divide-solid border-green-700 text-center">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 m-auto" viewBox="0 0 20 20"
											fill="currentColor">
											<path fill-rule="evenodd"
												d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
												clip-rule="evenodd" />
										</svg>
									</span>
									<p class="mb-0">
										Hoàn Ngay 20% tối đa 100k cho ĐH từ 300k khi thanh toán qua Moca (Mỗi khách hàng được sử dụng 2 lần)
									</p>
								</div>

								<p class="mb-2 text-sm text-gray-500">Mua sỉ vui lòng liên hệ chúng tôi:</p>

								<div class="flex flex-wrap -mx-1">
									<div class="max-w-xs mx-auto w-full md:w-1/2 px-1 mb-2 md:mb-0">
										<a
											class="px-4 py-1.5 text-center block text-white bg-green-700 hover:bg-green-800 transition-all border divide-solid text-xs md:text-sm cursor-pointer">
											Gọi ngay
										</a>
									</div>

									<div class="max-w-xs mx-auto w-full md:w-1/2 px-1">
										<button
											class="w-full px-3 lg:px-3 xl:px-4 py-1.5 text-center block text-white bg-blue-500 hover:bg-blue-700 transition-all border divide-solid text-xs md:text-sm cursor-pointer">Gửi
											tin nhắn</button>
									</div>
								</div>
							</section>
						</div>
					</div>
				</section>
			</div>
			<!--end block-->

			<div class="container c-xl-w1 mx-auto px-3 md:px-4 mb-5">
				<div class="bg-white rounded-b-lg rounded-t-lg shadow-md">
					<div class="menuajax-js flex flex-wrap border-b divide-solid border-gray-200">
						<a class="px-3 py-3 md:px-5 md:py-3 text-center block text-white bg-green-700 hover:bg-green-700 hover:text-white transition-all rounded-tl-md font-bold text-xs md:text-base cursor-pointer"
							data-tab="product-info" href="javascript:void(0);">Thông tin sản phẩm</a>

						<a class="px-3 py-3 md:px-5 md:py-3 text-center block bg-white text-green-700 hover:bg-green-700 hover:text-white transition-all font-bold text-xs md:text-base cursor-pointer"
							data-tab="product-additional-info" href="javascript:void(0);">Thông tin bổ sung</a>
					</div>

					<div class="p-4 md:p-5">
						<div class="flex flex-wrap -mx-2 lg:-mx-3 mb-5">
							<div class="w-full md:w-8/12 px-2 lg:px-3 mb-4 md:mb-0 text-sm">
								<div class="the-tabs product-info">
									<div class="expander relative transition-all overflow-hidden product-content-wrapper-js">
										<div class="inner-bit-js">
											<p class="mb-4">
												<img class="w-full text-center"
													src="https://food-map.s3.ap-southeast-1.amazonaws.com/news/2020/11/500010000120_001.jpg"
													alt="img" />
											</p>
											<p class="mb-4">
												<img class="w-full text-center"
													src="https://food-map.s3.ap-southeast-1.amazonaws.com/news/2020/11/500010000120_002.jpg"
													alt="img" />
											</p>

											<p class="mb-4">
												<img class="w-full text-center"
													src="https://food-map.s3.ap-southeast-1.amazonaws.com/news/2020/11/500010000120_003.jpg"
													alt="img" />
											</p>

											<p class="mb-4">
												<img class="w-full text-center"
													src="https://food-map.s3.ap-southeast-1.amazonaws.com/news/2020/11/500010000120_004.jpg"
													alt="img" />
											</p>

											<p class="mb-4">
												<img class="w-full text-center"
													src="https://food-map.s3.ap-southeast-1.amazonaws.com/news/2020/11/500010000120_005.jpg"
													alt="img" />
											</p>

											<p class="mb-4">
												<img class="w-full text-center"
													src="https://food-map.s3.ap-southeast-1.amazonaws.com/news/2020/11/500010000120_006.jpg"
													alt="img" />
											</p>
										</div>
									</div>
									<p class="mb-0 py-2 cursor-pointer text-center text-green-700 expand-toggle-js">Xem thêm</p>
								</div>

								<div class="the-tabs product-additional-info" style="display: none">
									<p class="mb-0 py-2 cursor-pointer text-center text-green-700 expand-toggle">Xem thêm</p>
								</div>
							</div>

							<aside class="w-full md:w-4/12 px-2 lg:px-3">
								<div class="bg-gray-50 rounded-b-lg rounded-t-lg shadow mb-5">
									<h6 class="rounded-t-md font-bold text-sm mb-0 px-3 py-4 border-b border-gray-400 divide-solid">Thương
										hiệu</h6>

									<div class="py-3 px-4">
										<a href="detail.php" class="group flex items-center">
											<div class="w-28">
												<img class="lazy-hidden w-full" data-lazy-type="image"
													data-lazy-src="../assets/images/footmap/post/img9.png" src="" />
											</div>

											<section class="flex-1 pl-4 text-green-700">
												<h3 class="mb-2 font-semibold transition-shadow text-base">
													Zeni VietNam</h3>
												<p class="mb-0 group-hover:text-green-800">Xem thêm
													<svg xmlns="http://www.w3.org/2000/svg" class="relative -top-0.5 inline-block h-4 w-4 ml-0"
														fill="none" viewBox="0 0 24 24" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
														</path>
													</svg></p>
											</section>
										</a>
									</div>
								</div>

								<div class="bg-gray-50 rounded-b-lg rounded-t-lg shadow py-2 mb-7">
									<table class="table font-light text-xs sm:text-sm">
										<tbody>
											<?php 
												$arr = ['Mã nhóm', 'Mã sản phẩm', 'Xuất xứ', 'Ngày sản xuất',
													'Hạn sử dụng', 'Thành phần', 'Hướng dẫn sử dụng', 
													'Hướng dẫn bảo quản'];
												$arr2 = ['G500010000120', '500010000120', 'Đắk Lắk - Việt Nam',
													'In trên bao bì', '12 tháng kể từ NSX', 
													'Bơ ca cao, dầu dừa, dầu Castor, dầu hạnh nhân, dầu cám gạo, dầu jojoba, dầu hướng dương, sáp ong, sáp cọ, sáp khoáng, sáp Candelilla', 
													'· Thoa 1 lớp son dưỡng không màu lên môi sau đó thoa son màu để có đôi môi khỏe và đẹp· Buổi tối trước khi đi ngủ thì nên thoa một lớp son bơ ca cao dưỡng môi để sáng hôm sau môi sẽ mềm mịn hơn',
													'Bảo quản nơi khô ráo thoáng mát'];
												for($i = 0; $i < sizeof($arr) - 1; $i++):?>
											<tr class="border-b divide-solid border-gray-300">
												<th class="font-bold pl-4 pr-1 py-3 text-left w-1/3 sm:w-44 align-top"><?php echo $arr[$i];?>
												</th>
												<td class="px-3 py-3 w-auto"><?php echo $arr2[$i];?></td>
											</tr>
											<?php endfor;?>

											<tr>
												<th class="font-bold pl-4 pr-1 py-3 text-left w-1/3 sm:w-44 align-top"><?php echo $arr[7];?>
												</th>
												<td class="px-3 py-3 w-auto"><?php echo $arr2[7];?></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="bg-white">
									<h6 class="rounded-t-md font-normal text-lg mb-4 px-3 text-center">Giấy chứng nhận sản phẩm</h6>

									<div class="p-slider2-js c-slider3">
										<?php for($i = 0; $i < 3; $i++):?>
										<div>
											<img class="w-full" src="../assets/images/footmap/post/slide1.jpeg" loading="lazy" />
										</div>
										<?php endfor;?>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
			<!--end block-->

			<div class="container c-xl-w1 mx-auto px-3 md:px-4 mb-5">
				<div class="flex flex-wrap -mx-2 lg:-mx-3 mb-5">
					<div class="w-full md:w-8/12 px-2 lg:px-3 mb-4 md:mb-0 rounded">
						<section class="bg-white rounded-b-lg mb-5 rounded-t-lg shadow-md">
							<div class="p-3 md:p-5">
								<div class="p-slider3-js c-slider3 c-slider-flex-1">
									<div class="px-2 md:px-2">
										<div
											class="block bg-white border divide-solid rounded	border-gray-300 hover:shadow-lg transition-shadow">
											<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam" class="tRes_68">
												<img class="lazy-hidden" data-lazy-type="image"
													data-lazy-src="../assets/images/footmap/img2.jpeg" src="" />
											</a>

											<div class="p-3">
												<h3 class="text-sm c-line1 font-bold mb-2">
													<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam">Son
														Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
												</h3>

												<a class="text-green-700 text-sm mb-1 block"
													href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
												<div class="mb-2 text-xs">
													<?php for($i = 0; $i < 2; $i++):?>
													<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block text-yellow-400"
														viewBox="0 0 20 20" fill="currentColor">
														<path
															d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
													</svg>
													<?php endfor;
                            for($i = 0; $i < 3; $i++):?>
													<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline-block text-yellow-400"
														fill="none" viewBox="0 0 22 22" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
															d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
													</svg>
													<?php endfor;?>
													<a href="#" class="text-green-800 text-xs 
                            inline-block align-bottom ml-1">(1)</a>
												</div>
												<ul class="list-none text-green-800 mb-1">
													<li><span>41 Đã bán</span></li>
												</ul>
												<div class="text-green-800 text-lg">
													<strong>285.000 ₫</strong>
												</div>
											</div>
										</div>
									</div>

									<?php for($j = 0; $j < 5; $j++):?>
									<div class="px-2 md:px-2">
										<div
											class="block bg-white border divide-solid rounded	border-gray-300 hover:shadow-lg transition-shadow">
											<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam" class="tRes_68">
												<img class="lazy-hidden" data-lazy-type="image"
													data-lazy-src="../assets/images/footmap/img2.jpeg" src="" />
											</a>

											<div class="p-3">
												<h3 class="text-sm c-line1 font-bold mb-2">
													<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam">Son
														Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
												</h3>

												<a class="text-green-700 text-sm mb-2 block"
													href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
												<div class="mb-2 text-xs">
													<?php for($i = 0; $i < 5; $i++):?>
													<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block text-yellow-400"
														viewBox="0 0 20 20" fill="currentColor">
														<path
															d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
													</svg>
													<?php endfor;?>
													<a href="#" class="text-green-800 text-xs 
                            inline-block align-bottom ml-1">(1)</a>
												</div>
												<ul class="list-none text-green-800 mb-1">
													<li><span>41 Đã bán</span></li>
												</ul>
												<div class="text-green-800 text-lg">
													<strong>285.000 ₫</strong>
												</div>
											</div>
										</div>
									</div>
									<?php endfor;?>
								</div>
							</div>
						</section>
						<section class="bg-white rounded-b-lg rounded-t-lg shadow-md">
							<h2 class="font-semibold text-base px-5 pt-5 mb-5">Đánh giá sản phẩm</h2>

							<div class="px-2 sm:px-3 md:px-5 pb-4">
								<div class="mb-5 rounded-md border divide-solid border-gray-200">
									<div class="py-3 px-2 md:py-3 md:px-3 h-auto xl:h-32">
										<div
											class="w-32 sm:w-3/12 lg:w-1/6 sm:h-28 md:h-32 lg:h-48 xl:h-full sm:float-left mx-auto mb-2.5 sm:mb-0 sm:mx-0 pb-2 sm:pt-7 sm:pb-0 xl:pt-9 border-b sm:border-r sm:border-b-0 divide-solid border-gray-200 text-yellow-500 text-center text-3xl sm:text-2xl lg:text-3xl xl:text-4xl"
											data-gpa="4.7">
											<b>3.5
												<svg xmlns="http://www.w3.org/2000/svg"
													class="relative -left-1 -top-0.5 h-9 w-9 inline-block text-yellow-400" viewBox="0 0 20 20"
													fill="currentColor">
													<path
														d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
												</svg>
											</b>
										</div>

										<div class="w-full max-w-xs sm:max-w-full sm:w-9/12 mx-auto sm:mx-0 lg:w-3/6 h-full sm:float-left pt-1 lg:border-r lg:divide-solid lg:border-gray-200">
											<div class="sm:px-2 md:px-3 lg:px-5 md:mb-1 xl:mb-0">
												<span class="inline-block">
													5
													<svg xmlns="http://www.w3.org/2000/svg"
														class="relative -top-0.5 h-4 w-4 sm:h-5 sm:w-5 -ml-0.5 inline-block text-yellow-400" viewBox="0 0 20 20"
														fill="currentColor">
														<path
															d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
													</svg>
												</span>
												<div class="relative -top-0.5 w-7/12 bg-gray-100 h-1.5 inline-block mx-1.5 sm:mx-2 lg:mx-3 rounded">
													<div class="w-1/2 bg-yellow-500 absolute top-0 left-0 h-full"></div>
												</div>
												<span class="text-xs text-blue-500 lg:block xl:inline" data-buy="16"><strong>0</strong> đánh giá</span>
											</div>

											<?php
												$arr = [4,3,2,1]; 
												for($i = 0; $i < 4; $i++):?>
											<div class="sm:px-2 md:px-3 lg:px-5 md:mb-1 xl:mb-0">
												<span class="inline-block"><?php echo $arr[$i];?> <svg xmlns="http://www.w3.org/2000/svg"
														class="relative -top-0.5 h-4 w-4 sm:h-5 sm:w-5 -ml-0.5 inline-block text-yellow-400" viewBox="0 0 20 20"
														fill="currentColor">
														<path
															d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
													</svg>
												</span>
												<div class="relative -top-0.5 w-7/12 bg-gray-100 h-1.5 inline-block mx-1.5 sm:mx-2 lg:mx-3 rounded"></div>
												<span class="text-xs text-blue-500 lg:block xl:inline" data-buy="16"><strong>0</strong> đánh giá</span>
											</div>
											<?php endfor;?>
										</div>

										<div class="lg:w-2/6 h-full clear-both lg:clear-none lg:float-left pt-4 lg:pt-8 text-center md:text-left lg:text-center">
											<a class="px-4 py-2 text-center uppercase xl:mr-2 inline-block text-white bg-green-500 hover:bg-green-800 transition-all border divide-solid text-xs md:text-sm border-green-800 cursor-pointer lg:text-xs xl:text-sm"
												href="javascript:showInputRating()">Gửi đánh giá của bạn</a>
										</div>
										<div class="clear-both"></div>
									</div>

									<form class="fRatingComment-js px-3 pb-4 md:px-4" name="fRatingComment" method="POST"
										action="https://foodmap.asia/products/9345/reviews" novalidate="novalidate">
										<input type="hidden" name="_token" value="xu03ZiMmbwmfQ4lEnvCvh1qb49MR3O8PAMATUw1j">
										<div class="mb-4">
											<span class="inline-block mr-2 font-light">Chọn đánh giá của bạn</span>
											<fieldset class="fieldset-rating">
												<?php for($i = 5; $i >= 1; $i--):?>
												<input type="radio" id="star-<?php echo $i;?>" name="rating" value="<?php echo $i;?>">
												<label class="relative -left-1 top-1" for="star-<?php echo $i;?>" data-toggle="tooltip"
													title="<?php echo $i;?> sao">
													<svg xmlns="http://www.w3.org/2000/svg"
														class="fieldset-star-yes h-5 w-5 inline-block text-gray-500" viewBox="0 0 20 20"
														fill="currentColor">
														<path
															d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
													</svg>
												</label>
												<?php endfor;?>
											</fieldset>
										</div>

										<div class="fieldinput-js">
											<div class="flex flex-wrap -mx-3">
												<div class="w-full lg:w-6/12 px-3 mb-3 md:mb-0">
													<textarea class="w-full p-3 h-24 border divide-solid border-gray-300 rounded" name="content"
														placeholder="Nhập đánh giá về sản phẩm (tối thiểu 80 ký tự)"></textarea>
												</div>
												<div class="w-full md:w-6/12 lg:w-3/12 px-3 mb-3 md:mb-0">
													<input class="w-full p-3 h-10 border divide-solid border-gray-300 rounded mb-1.5" 
														type="text" name="name" placeholder="Họ tên" value="">
													<input class="w-full p-3 h-10 border divide-solid border-gray-300 rounded" type="text"
														name="email" placeholder="Email" value="">
												</div>
												<div class="w-full md:w-6/12 lg:w-3/12 px-3 mb-3 md:mb-0">
													<input class="w-full p-3 h-10 border divide-solid border-gray-300 rounded mb-1.5" type="text"
														name="phone" placeholder="Số điện thoại" value="">
													<button
														class="w-full p-3 h-10 inline-block text-white bg-green-600 hover:bg-green-800 transition-all">GỬI
														ĐÁNH GIÁ</button>
												</div>
											</div>
										</div>
									</form>
								</div>

								<ul class="px-2 sm:px-0 list-none text-xs">
									<?php for($j = 0; $j < 2; $j++):?>
									<li class="mb-4">
										<p class="mb-1.5">
											<strong>Thanh Huyền</strong>
										</p>
										<div class="mb-1.5 md:mb-2">
											<?php for($i = 0; $i < 2; $i++):?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block text-yellow-400"
												viewBox="0 0 20 20" fill="currentColor">
												<path
													d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
											</svg>
											<?php endfor;
												for($i = 0; $i < 3; $i++):?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline-block text-yellow-400"
												fill="none" viewBox="0 0 22 22" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
											</svg>
											<?php endfor;?>
										</div>
										<div class="mb-2 md:mb-4">dùng cngg được, nhưng giá hơi cao. Ship nhanh, chăm sóc nhiệt tình</div>
										<div class="mb-3">
											<span class="cursor-pointer">1 thảo luận</span>
											<span class="cursor-pointer">• Trả lời</span> • <span class="text-gray-500">22 giờ trước</span>
										</div>
										
										<div class="pl-5 md:pl-6 pr-4">
											<ul class="pl-3 mb-3 border-solid border-l-4 border-gray-200">
												<?php 
													$arr = ['Cảm ơn bạn nhé !', 
														'Mình thấy mùi tanh ko như trà đài loan, không hài lòng lắm ! Mình có được đổi ko hay hoàn tiền !',
														'dạ chị gọi tổng đài 02877702614 , bên em sẽ đổi trả nhé ! Em cảm ơn chị đã sử dụng dịch vụ !'];
													for($i = 0; $i < 3; $i++):?>
												<li class="mb-2 border-gray-200">
													<p class="mb-1">
														<strong>Thanh Huyền</strong>
													</p>
													<div class="mb-1">
														<?php echo $arr[$i];?>
													</div>
													<div>
														<span class="cursor-pointer">Trả lời</span> • <span class="text-gray-400">22 giờ trước</span>
													</div>
												</li>
												<?php endfor;?>
											</ul>
										</div>
									</li>
									<?php endfor;?>
								</ul>
							</div>
						</section>
					</div>

					<aside class="w-full md:w-4/12 px-2 lg:px-3">
						<div class="bg-white rounded-b-lg rounded-t-lg shadow">
							<h2 class="widget-title rounded-t-lg uppercase font-bold 
              text-sm md:text-base u-bg-green text-center text-white p-4">TIN TỨC NỔI BẬT</h2>

							<div class="w-full bg-white p-3 md:p-3 lg:p-5">
								<?php 
									$arr = ['Bơ 034 - Giống Bơ Siêu Dài, Siêu Khủng', 'Tổng Hợp 7 Loại Bơ Ngon Phổ Biến Nhất Việt Nam',
										'Bơ 034 có ngon không?', 'Thanh trà - thứ quả đặc sản thơm ngon, tao nhã của người cố đô'];
									for($i = 0; $i < sizeof($arr); $i++):?>
								<a href="detail.php" class="block group mb-4">
									<div class="float-left w-24 md:w-28 lg:w-36 xl:w-40">
										<div class="tRes_66">
											<img class="lazy-hidden group-hover:scale-105 transform transition-all duration-500"
												data-lazy-type="image" data-lazy-src="../assets/images/footmap/post/img1.jpeg" src="" />
										</div>
									</div>

									<section class="overflow-hidden pl-4">
										<h6
											class="mb-0 font-semibold group-hover:text-green-700 transition-shadow text-gray-700 md:text-xs">
											<?php echo $arr[$i];?></h6>
									</section>
									<div class="clear-both"></div>
								</a>
								<?php endfor;?>
							</div>
						</div>
					</aside>
				</div>
			</div>
			<!--end block-->

			<div class="container c-xl-w1 mx-auto px-3 md:px-4 mb-5">
				<section class="bg-white rounded-b-lg rounded-t-lg shadow-md">
					<h2 class="font-bold text-base uppercase
						px-5 py-3 mb-5 border-b divide-solid border-gray-100">SẢN PHẨM ĐÃ XEM</h2>

					<div class="px-2 pb-5">
						<div class="p-slider4-js c-slider3 c-slider-flex-1">
							<div class="px-2 md:px-2">
								<div
									class="block bg-white border divide-solid rounded	border-gray-300 hover:shadow-lg transition-shadow">
									<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam" class="tRes_68">
										<img class="lazy-hidden" data-lazy-type="image"
											data-lazy-src="../assets/images/footmap/img2.jpeg" src="" />
										<span class="absolute bg-yellow-400 text-green-600 top-0 right-2.5 z-10 text-xs font-bold w-11 text-center py-1">
											-13%
											<span style="
												position: absolute;
												left: 0;
												top: 100%;
												border-left: 22px solid #FFBE00;
												border-right: 22px solid #FFBE00;
												border-bottom: 10px solid transparent;"></span>
										</span>
									</a>

									<div class="p-3">
										<h3 class="text-sm c-line1 font-bold mb-2">
											<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam">Son
												Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
										</h3>

										<a class="text-green-700 text-sm mb-1 block"
											href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
										<div class="mb-2 text-xs">
											<?php for($i = 0; $i < 2; $i++):?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block text-yellow-400"
												viewBox="0 0 20 20" fill="currentColor">
												<path
													d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
											</svg>
											<?php endfor;
												for($i = 0; $i < 3; $i++):?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline-block text-yellow-400"
												fill="none" viewBox="0 0 22 22" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
											</svg>
											<?php endfor;?>
											<a href="#" class="text-green-800 text-xs 
												inline-block align-bottom ml-1">(1)</a>
										</div>
										<ul class="list-none text-green-800 mb-1">
											<li><span>41 Đã bán</span></li>
										</ul>
										<div class="text-green-800 text-lg">
											<strong>285.000 ₫</strong>
										</div>
									</div>
								</div>
							</div>

							<?php for($j = 0; $j < 5; $j++):?>
							<div class="px-2 md:px-2">
								<div
									class="w-full block bg-white border divide-solid rounded	border-gray-300 hover:shadow-lg transition-shadow">
									<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam" class="tRes_68">
										<img class="lazy-hidden" data-lazy-type="image"
											data-lazy-src="../assets/images/footmap/img2.jpeg" src="" />
									</a>

									<div class="p-3">
										<h3 class="text-sm c-line1 font-bold mb-2">
											<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam">Son
												Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
										</h3>

										<a class="text-green-700 text-sm mb-2 block"
											href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
										<div class="mb-2 text-xs">
											<?php for($i = 0; $i < 5; $i++):?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block text-yellow-400"
												viewBox="0 0 20 20" fill="currentColor">
												<path
													d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
											</svg>
											<?php endfor;?>
											<a href="#" class="text-green-800 text-xs 
												inline-block align-bottom ml-1">(1)</a>
										</div>
										<ul class="list-none text-green-800 mb-1">
											<li><span>41 Đã bán</span></li>
										</ul>
										<div class="text-green-800 text-lg">
											<strong>285.000 ₫</strong>
										</div>
									</div>
								</div>
							</div>
							<?php endfor;?>
						</div>
					</div>
				</section>
			</div>
			<!--end block-->

			<div class="container c-xl-w1 mx-auto px-3 md:px-4 mb-5">
				<section class="bg-white rounded-b-lg rounded-t-lg shadow-md">
					<h2 class="font-bold text-base uppercase
						px-5 py-3 mb-5 border-b divide-solid border-gray-100">TIN TỨC LIÊN QUAN</h2>

					<div class="px-4 md:px-5 pb-2">
						<div class="flex flex-wrap -mx-3 md:-mx-2">
							<div class="w-full md:w-3/5 lg:w-2/4 px-3 md:px-2 mb-4">
								<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam"
									class="block rounded group">
									<div class="tRes_62">
										<img class="lazy-hidden group-hover:scale-105 transform transition-all duration-500"
											data-lazy-type="image" data-lazy-src="../assets/images/footmap/img4.jpeg" src="" />
									</div>
									<h6 class="mb-0 pt-3 font-semibold 
										group-hover:text-green-700 transition-shadow text-gray-700 text-sm">
										Phân Biệt Hạnh Nhân Rang Bơ Trung Quốc Và Mỹ</h6>
									<p class="mb-0 pt-3 text-xs 
										text-gray-400 font-light">ngày 12/10/2020</p>
								</a>
							</div>

							<div class="w-full md:w-2/5 lg:w-1/4 px-2 md:px-2 mb-4">
								<?php 
									$arr = ['Trên Quýt Thơm Trĩu Cành, Dưới Thả Gà Ta, Lão Nông Thu Nửa Tỷ/Năm', 'Nghề làm nước mắm truyền thống Phú Quốc'];
									for($i = 0; $i < sizeof($arr); $i++):?>
								<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam" class="block group mb-4">
									<div class="tRes_60">
										<img class="lazy-hidden group-hover:scale-105 transform transition-all duration-500"
											data-lazy-type="image" data-lazy-src="../assets/images/footmap/img5.jpeg" src="" />
									</div>
									<h6 class="mb-0 pt-3 font-semibold 
										group-hover:text-green-700 transition-shadow text-gray-700
										text-sm md:text-xs">
										<?php echo $arr[$i];?></h6>
								</a>
								<?php endfor;?>
							</div>

							<div class="w-full sm:w-3/4 md:w-2/4 lg:w-1/4 px-3 md:px-2">
								<?php 
									$arr = ['Cách ủ bơ 034 chín tự nhiên - không cần dùng hóa chất', 'Tham quan vườn Bơ 034 - Ngon dẻo béo tuyệt vời',
										'Bơ 034 có ngon không?', 'Thanh trà - thứ quả đặc sản thơm ngon, tao nhã của người cố đô', 'Dùng ShopeePay - Giảm ngay nửa giá',
										'Nấm Mối Tự Nhiên - Mùa Nào Thức Ấy'];
									for($i = 0; $i < sizeof($arr); $i++):?>
								<a href="https://foodmap.asia/product/son-mau-bo-cacao-thoi-tre-zeni-vietnam" class="block group mb-4">
									<div class="float-left w-20">
										<div class="tRes_60">
											<img class="lazy-hidden group-hover:scale-105 transform transition-all duration-500"
												data-lazy-type="image" data-lazy-src="../assets/images/footmap/img6.jpeg" src="" />
										</div>
									</div>

									<section class="overflow-hidden pl-2">
										<h6 class="mb-0 font-semibold 
										group-hover:text-green-700 transition-shadow 
											text-gray-700 text-sm md:text-xs">
											<?php echo $arr[$i];?></h6>
									</section>
									<div class="clear-both"></div>
								</a>
								<?php endfor;?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</main>
</body>

<script>
	function increaseValue() {
		var value = parseInt(document.getElementById('number-1').value, 10);
		value = isNaN(value) ? 1 : value;
		value++;
		document.getElementById('number-1').value = value;
	}

	function decreaseValue() {
		var value = parseInt(document.getElementById('number-1').value, 10);
		value = isNaN(value) ? 1 : value;
		// value <= 1 ? value = 1 : '';
		if (value > 1) {
			value--;
		}
		document.getElementById('number-1').value = value;
	}

	jQuery(document).ready(function ($) {
		$('.menuajax-js>a').on('click', function (e) {
			e.preventDefault();
			var data = $(this).data('tab');
			$('.menuajax-js>a').removeClass('bg-green-700 text-white');
			$('.menuajax-js>a').addClass('bg-white text-green-700');
			$(this).addClass('bg-green-700 text-white');
			$(this).removeClass('bg-white text-green-700');
			$('.the-tabs').hide();
			$('.the-tabs.' + data).show();
		});

		// let initExpandPostContent = () => {
		// 	var that = null,
		// 			mainHeight = 0;
		// 	$('.product-content-wrapper-js').each(function(index, element) {
		// 		that = $(this);
		// 		mainHeight = that.height();

		// 		if (mainHeight != 1600 || mainHeight != 700) {
		// 			that.next('.expand-toggle-js').addClass('hidden');
		// 			console.log(mainHeight);
		// 		} else {
		// 			that.next('.expand-toggle-js').removeClass('hidden');
		// 		}
		// 	});
		// 	// var mainHeight = $('.product-content-wrapper-js').height();
		// 	// var sidebarHeight = $('#product-sidebar').height();
		// 	// if (mainHeight != 1600 && mainHeight < sidebarHeight)

		// 	// var additionalHeight = $('#product-additional-content-wrapper').height();
		// 	// if (additionalHeight != 1600 && additionalHeight < sidebarHeight) {
		// 	// 		$('.product-additional-info .expand-toggle').addClass('hide');
		// 	// } else {
		// 	// 		$('.product-additional-info .expand-toggle').removeClass('hide');
		// 	// }
		// }
		// initExpandPostContent();

		$(".expand-toggle-js").click(function (e) {
			e.preventDefault();
			var $this = $(this);
			var expandHeight = $this.prev().find(".inner-bit-js").height();
			if ($this.prev().hasClass("expanded")) {
				$this.prev().removeClass("expanded");
				$this.prev().attr("style", "");
				$this.html("Xem thêm");
			} else {
				$this.prev().addClass("expanded");
				$this.prev().css("max-height", expandHeight);
				$this.html("Thu gọn");
			}
		});
	});
</script>

<script type="text/javascript" src="../assets/js/slick/slick.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script type="text/javascript" src="../assets/js/common.js"></script>

</html>