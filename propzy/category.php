<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>category-propzy</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/js/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

	<script src="../assets/js/jquery.js"></script>
</head>

<body>
	<main class="l-main text-sm font-normal">
		<div class="bg-gray-100 py-3  hidden lg:block relative z-50">
			<div class="container px-3 md:px-4 mx-auto">
				<div class="flex flex-wrap -mx-2 md:-mx-4">
					<div class="w-full md:w-4/12 px-2 md:pl-4 md:pr-0">
						<form class="flex border border-gray-200 bg-white rounded">
							<div class="relative w-3/12 md:w-3/12">
								<div class="px-2 border-r border-gray-300 divide-solid">
									<select class="w-full border-0 h-10 text-gray-700 appearance-none">
										<option>Loại BĐS</option>
										<option>Bán</option>
										<option>Mua</option>
									</select>
									<svg class="h-5 w-5 absolute top-2.5 right-0.5 text-gray-500" 
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
									</svg>
								</div>
							</div>
							<div class="w-9/12 md:w-9/12 flex items-center">
								<input class="block w-full px-2 h-full" 
									type="" name="" placeholder="Nhập từ khoá tìm kiếm">
								<button type="submit" class="w-12 cursor-pointer bg-transparent hover:text-cl1 ml-2 h-full text-center">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
										class="w-4 h-4 mx-auto">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
									</svg>
								</button>
							</div>
						</form>
					</div>

					<div class="w-full md:w-8/12 px-2 md:pl-0 md:pr-4">
						<div class="flex flex-wrap -mx-1">
							<div class="w-2/12 px-1">
								<div class="toggleClass ml-2">
									<div
										class="toggle bg-gray-200 h-10 rounded cursor-pointer text-sm leading-5 px-2 pt-2.5 relative">
										<span>Cho Thuê</span>
										<svg class="h-5 w-5 absolute top-2.5 right-1 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd"
												d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
												clip-rule="evenodd"></path>
										</svg>
									</div>
									<div
										class="content shadow-lg border border-gray-100 bg-white rounded hidden p-2  left-0 whitespace-normal w-screen   md:max-w-xs">
										<div class="flex flex-wrap -mx-6 mb-2 relative">
											<div class="w-1/2 px-6"><input
													class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
													placeholder="Thấp nhất"></div>
											<div class="w-1/2 px-6"><input
													class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
													placeholder="Cao nhất"></div>
											<span class="absolute middle">đến</span>
										</div>

										<div class="flex flex-wrap ">
											<span class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-cl1">
												&lt;= 1 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
										</div>
									</div>
								</div>
							</div>

							<?php for($i = 0; $i < 5; $i++):?>
							<div class="w-2/12 px-1">
								<div class="toggleClass">
									<div
										class="toggle bg-gray-200 h-10 rounded cursor-pointer text-sm leading-5 px-2 pt-2.5 relative">
										<span>Cho Thuê</span>
										<svg class="h-5 w-5 absolute top-2.5 right-0.5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
											<path fill-rule="evenodd"
												d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
												clip-rule="evenodd"></path>
										</svg>
									</div>
									<div
										class="content shadow-lg border border-gray-100 bg-white rounded hidden p-2  left-0 whitespace-normal w-screen   md:max-w-xs">
										<div class="flex flex-wrap -mx-6 mb-2 relative">
											<div class="w-1/2 px-6"><input
													class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
													placeholder="Thấp nhất"></div>
											<div class="w-1/2 px-6"><input
													class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
													placeholder="Cao nhất"></div>
											<span class="absolute middle">đến</span>
										</div>

										<div class="flex flex-wrap ">
											<span class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-cl1">
												&lt;= 1 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
												1-3 Tỷ
											</span>
										</div>
									</div>
								</div>
							</div>
							<?php endfor;?>
							<!-- <div class="toggleClass ml-2">
								<div
									class="toggle flex   whitespace-nowrap justify-center bg-white rounded border-solid border cursor-pointer text-sm leading-5   p-2 relative border-gray-300  hover:border-cl1">
									<span>Khu vực</span>
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd"></path>
									</svg>
								</div>
								<div
									class="content shadow-lg border border-gray-100 bg-white rounded hidden left-0 whitespace-normal w-screen   md:max-w-xs">
									<div class="wcountry overflow-hidden relative">
										<div class="wcity">
											<div class="p-2">
												<input class="border border-gray-200 py-1 px-2 tex-sm rounded w-full" placeholder="Chọn tỉnh">
											</div>
											<div id="slb_city_top" class="slb_city h-80 overflow-y-auto">
												<div class="city item-search active" data-value="89">An Giang</div>
												<div class="city item-search" data-value="62">Kon Tum</div>
												<div class="city item-search" data-value="67">Đắk Nông</div>
												<div class="city item-search" data-value="94">Sóc Trăng</div>
												<div class="city item-search" data-value="70">Bình Phước</div>
												<div class="city item-search" data-value="33">Hưng Yên</div>
												<div class="city item-search" data-value="38">Thanh Hóa</div>
												<div class="city item-search" data-value="45">Quảng Trị</div>
												<div class="city item-search" data-value="08">Tuyên Quang</div>
												<div class="city item-search" data-value="51">Quảng Ngãi</div>
												<div class="city item-search" data-value="01">Hà Nội</div>
												<div class="city item-search" data-value="10">Lào Cai</div>
												<div class="city item-search" data-value="86">Vĩnh Long</div>
												<div class="city item-search" data-value="68">Lâm Đồng</div>
												<div class="city item-search" data-value="52">Bình Định</div>
												<div class="city item-search" data-value="40">Nghệ An</div>
												<div class="city item-search" data-value="91">Kiên Giang</div>
												<div class="city item-search" data-value="02">Hà Giang</div>
												<div class="city item-search" data-value="54">Phú Yên</div>
												<div class="city item-search" data-value="20">Lạng Sơn</div>
												<div class="city item-search" data-value="48">Đà Nẵng</div>
												<div class="city item-search" data-value="14">Sơn La</div>
												<div class="city item-search" data-value="72">Tây Ninh</div>
												<div class="city item-search" data-value="36">Nam Định</div>
												<div class="city item-search" data-value="12">Lai Châu</div>
												<div class="city item-search" data-value="83">Bến Tre</div>
												<div class="city item-search" data-value="56">Khánh Hòa</div>
												<div class="city item-search" data-value="60">Bình Thuận</div>
												<div class="city item-search" data-value="04">Cao Bằng</div>
												<div class="city item-search" data-value="31">Hải Phòng</div>
												<div class="city item-search" data-value="37">Ninh Bình</div>
												<div class="city item-search" data-value="15">Yên Bái</div>
												<div class="city item-search" data-value="64">Gia Lai</div>
												<div class="city item-search" data-value="17">Hoà Bình</div>
												<div class="city item-search" data-value="77">Bà Rịa - Vũng Tàu</div>
												<div class="city item-search" data-value="96">Cà Mau</div>
												<div class="city item-search" data-value="74">Bình Dương</div>
												<div class="city item-search" data-value="92">Cần Thơ</div>
												<div class="city item-search" data-value="46">Thừa Thiên Huế</div>
												<div class="city item-search" data-value="75">Đồng Nai</div>
												<div class="city item-search" data-value="82">Tiền Giang</div>
												<div class="city item-search" data-value="11">Điện Biên</div>
												<div class="city item-search" data-value="26">Vĩnh Phúc</div>
												<div class="city item-search" data-value="49">Quảng Nam</div>
												<div class="city item-search" data-value="66">Đắk Lắk</div>
												<div class="city item-search" data-value="19">Thái Nguyên</div>
												<div class="city item-search" data-value="30">Hải Dương</div>
												<div class="city item-search" data-value="95">Bạc Liêu</div>
												<div class="city item-search" data-value="84">Trà Vinh</div>
												<div class="city item-search" data-value="34">Thái Bình</div>
												<div class="city item-search" data-value="42">Hà Tĩnh</div>
												<div class="city item-search" data-value="58">Ninh Thuận</div>
												<div class="city item-search" data-value="87">Đồng Tháp</div>
												<div class="city item-search" data-value="80">Long An</div>
												<div class="city item-search" data-value="93">Hậu Giang</div>
												<div class="city item-search" data-value="22">Quảng Ninh</div>
												<div class="city item-search" data-value="25">Phú Thọ</div>
												<div class="city item-search" data-value="44">Quảng Bình</div>
												<div class="city item-search" data-value="79">Hồ Chí Minh</div>
												<div class="city item-search" data-value="35">Hà Nam</div>
												<div class="city item-search" data-value="27">Bắc Ninh</div>
												<div class="city item-search" data-value="24">Bắc Giang</div>
												<div class="city item-search" data-value="06">Bắc Kạn</div>
											</div>
										</div>

										<div class="wdistrict bg-white rounded absolute inset-0">
											<div class="top" onclick="closeDistrict(this)">An Giang</div>
											<div class="p-2">
												<input class="border border-gray-200 py-1 px-2 tex-sm rounded w-full"
													placeholder="Tìm Quận/ Huyện">
											</div>
											<div id="slb_district_top" class="overflow-y-auto absolute inset-x-0 bottom-0" style="top:76px">
												<div class="item-search active" data-value="0">Tất cả quận, huyện</div>
												<div class="item-search" data-value="883" data-parent="89">Long Xuyên</div>
												<div class="item-search" data-value="884" data-parent="89">Châu Đốc</div>
												<div class="item-search" data-value="886" data-parent="89">An Phú</div>
												<div class="item-search" data-value="887" data-parent="89">Tân Châu</div>
												<div class="item-search" data-value="888" data-parent="89">Phú Tân</div>
												<div class="item-search" data-value="889" data-parent="89">Châu Phú</div>
												<div class="item-search" data-value="890" data-parent="89">Tịnh Biên</div>
												<div class="item-search" data-value="891" data-parent="89">Tri Tôn</div>
												<div class="item-search" data-value="892" data-parent="89">Châu Thành</div>
												<div class="item-search" data-value="893" data-parent="89">Chợ Mới</div>
												<div class="item-search" data-value="894" data-parent="89">Thoại Sơn</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="toggleClass ml-2">
								<div
									class="toggle flex   whitespace-nowrap justify-center bg-white rounded border-solid border cursor-pointer text-sm leading-5   p-2 relative border-gray-300  hover:border-cl1">
									<span>Khoảng giá</span>
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd"></path>
									</svg>
								</div>
								<div
									class="content shadow-lg border border-gray-100 bg-white rounded hidden p-2  left-0 whitespace-normal w-screen   md:max-w-xs">
									<div class="flex flex-wrap -mx-6 mb-2 relative">
										<div class="w-1/2 px-6"><input
												class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
												placeholder="Thấp nhất"></div>
										<div class="w-1/2 px-6"><input
												class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
												placeholder="Cao nhất"></div>
										<span class="absolute middle">đến</span>
									</div>

									<div class="flex flex-wrap ">
										<span class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-cl1">
											&lt;= 1 Tỷ
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											1-3 Tỷ
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											1-3 Tỷ
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											1-3 Tỷ
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											1-3 Tỷ
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											1-3 Tỷ
										</span>
									</div>
								</div>
							</div>
							<div class="toggleClass ml-2">
								<div
									class="toggle flex whitespace-nowrap justify-center bg-white rounded border-solid border cursor-pointer text-sm leading-5   p-2 relative border-gray-300  hover:border-cl1">
									<span>Diện tích</span>
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd"></path>
									</svg>
								</div>
								<div
									class="content shadow-lg border border-gray-100 bg-white rounded hidden p-2  left-0 whitespace-normal w-screen   md:max-w-xs">
									<div class="flex flex-wrap -mx-6 mb-2 relative">
										<div class="w-1/2 px-6"><input
												class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
												placeholder="Thấp nhất"></div>
										<div class="w-1/2 px-6"><input
												class="w-full bg-white rounded border-solid border block   text-xs py-1 px-2 border-gray-200"
												placeholder="Cao nhất"></div>
										<span class="absolute middle">đến</span>
									</div>

									<div class="flex flex-wrap ">
										<span class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-cl1">
											&lt;= 30 m2
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											30-50 m2
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											30-50 m2
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											30-50 m2
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											30-50 m2
										</span>
										<span
											class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">
											30-50 m2
										</span>
									</div>
								</div>
							</div>
							<select class="select ml-2">
								<option>Số phòng</option>
								<option>1+</option>
								<option>2+</option>
								<option>3+</option>
								<option>4+</option>
							</select>
							<div class="toggleClass ml-2">
								<div
									class="toggle flex whitespace-nowrap justify-center bg-white rounded border-solid border cursor-pointer text-sm leading-5   p-2 relative border-gray-300  hover:border-cl1">
									<span>Khác</span>
									<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd"></path>
									</svg>
								</div>

								<div
									class="content shadow-lg border border-gray-100 bg-white rounded hidden p-2  right-0 whitespace-normal w-screen   md:max-w-sm ">
									<div class="mb-4">
										<div class="flex items-center mb-1">
											<strong>Phòng ngủ</strong> <span class="ml-auto text-cl1 hover:text-cl2 cursor-pointer">Xoá</span>
										</div>
										<div class="flex flex-wrap ">
											<span class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl bg-cl1">Tất
												cả</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">1+</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">2+</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">3+</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">4+</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">5+</span>
										</div>
									</div>
									<div class="mb-4">
										<div class="flex items-center mb-1">
											<strong>Trạng thái</strong> <span
												class="ml-auto text-cl1 hover:text-cl2 cursor-pointer">Xoá</span>
										</div>
										<div class="flex flex-wrap ">
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">Trạng
												thái 1</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">Trạng
												thái 2</span>
											<span
												class="cursor-pointer leading-7  mr-2 mb-2  px-4 text-white rounded-2xl  bg-gray-300 hover:bg-cl1">Trạng
												thái 3</span>
										</div>
									</div>


									<div class="mb-4">
										<div class="flex items-center mb-1">
											<strong>Hướng</strong> <span class="ml-auto text-cl1 hover:text-cl2 cursor-pointer">Xoá</span>
										</div>
										<div class="grid grid-cols-2 gap-3 ">
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox" checked=""></span>
												<span> Hướng 1 </span>
											</label>
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox"></span>
												<span> Hướng 2 </span>
											</label>
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox"></span>
												<span> Hướng 3 </span>
											</label>
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox"></span>
												<span> Hướng 4 </span>
											</label>
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox"></span>
												<span> Hướng 5 </span>
											</label>
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox"></span>
												<span> Hướng 6 </span>
											</label>
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox"></span>
												<span> Hướng 7 </span>
											</label>
											<label class="flex items-center">
												<span class="mr-1"><input type="checkbox"></span>
												<span> Hướng 8 </span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div
								class="whitespace-nowrap ml-2 bg-white rounded border-solid border cursor-pointer text-sm leading-5   p-2 relative border-gray-300  hover:border-cl1 hover:bg-cl1 hover:text-white">
								Lưu tìm kiếm
							</div>
							<div
								class="whitespace-nowrap ml-2 bg-white rounded border-solid border cursor-pointer text-sm leading-5   p-2 relative border-gray-300  hover:border-cl1 hover:bg-cl1 hover:text-white">
								Xoá lọc
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="py-10 md:py-20 bg-gray-100">
			<section class="container px-3 md:px-4 mx-auto">
				<div class="flex flex-wrap -mx-2 md:-mx-2 mb-5">
					<aside class="w-full md:w-1/4 px-2 md:px-2 mb-6 md:mb-0">
						<div class="bg-white rounded-b-lg rounded-t-lg shadow mb-5">
							<div class="widget-title rounded-t-lg uppercase 
							  font-bold text-sm lg:text-xs xl:text-sm u-bg-green text-white p-4">Tất cả sản phẩm</div>

							<div class="widget-content text-gray-800">
								<ul class="list-none">
									<li class="p-4 border-b border-gray-400 divide-solid">
										<a class="pb-1 font-bold block text-green-600 text-base hover:text-green-600"
											href="https://foodmap.asia/category/di-cho-online">Đi chợ online</a>
										<ul class="list-none">
											<?php 
												$arr = ['Rau củ quả', 'Thịt - Hải sản tươi ngon',
													'Nhu yếu phẩm', 'Thực phẩm chế biến sẵn', 
													'Phiên Chợ Xanh Tử Tế', 'Đồ sấy, ăn vặt'];
												for($i = 0; $i < sizeof($arr); $i++):?>
											<li>
												<a class="py-1 block hover:text-green-600" href="https://foodmap.asia/category/rau-cu-qua">
													<?php echo $arr[$i];?>
												</a>
											</li>
											<?php endfor;?>
										</ul>
									</li>

									<?php 
										$arr = ['Trái cây tươi ngon', 'Đặc sản vùng miền', 
											'Trà - Cà phê - Socola', 'Quà tặng sức khỏe', 
											'Sống xanh', 'Quà tặng đặc biệt', 
											'Hành trình Những Bước Chân Xanh'];
										for($j = 0; $j < sizeof($arr); $j++):?>
									<li class="p-4 
										<?php echo $j < sizeof($arr)-1?'border-b border-gray-400':null;?>
									  divide-solid">
										<a class="pb-1 font-bold block text-gray-700 text-base hover:text-green-600"
											href="https://foodmap.asia/category/di-cho-online"><?php echo $arr[$j];?></a>
										<ul class="list-none hidden">
											<?php 
												$arr2 = ['Rau củ quả'];
												for($i = 0; $i < sizeof($arr2); $i++):?>
											<li>
												<a class="py-1 block hover:text-green-600" href="https://foodmap.asia/category/rau-cu-qua">
													<?php echo $arr2[$i];?>
												</a>
											</li>
											<?php endfor;?>
										</ul>
									</li>
									<?php endfor;?>
								</ul>
							</div>
						</div>

						<div class="bg-white rounded-b-lg rounded-t-lg shadow mb-5">
							<div class="widget-title rounded-t-lg uppercase font-bold 
							text-sm lg:text-xs xl:text-sm u-bg-green text-white p-4">NHỮNG THƯƠNG HIỆU UY TÍN</div>

							<ul class="list-none flex flex-wrap items-center pt-4 pb-3">
								<?php 
									$arr = ['logo1.jpeg', 'logo2.png', 'logo3.png', 'logo4.png',
									'logo5.jpeg', 'logo6.jpeg', 'logo7.jpeg', 'logo8.jpeg', 'logo9.png'];
									for($i = 0; $i < 9; $i++):?>
								<li class="w-1/3 mb-3">
									<a class="block px-3 hover:opacity-80 transition-opacity ease-linear text-center"
										href="https://foodmap.asia/category/di-cho-online">
										<img class="lazy-hidden max-w-full" data-lazy-type="image"
											data-lazy-src="../assets/images/footmap/<?php echo $arr[$i];?>" alt="img" src="" />
									</a>
								</li>
								<?php endfor;?>

								<?php 
									$arr = ['logo1.jpeg', 'logo2.png', 'logo3.png', 'logo4.png',
									'logo5.jpeg', 'logo6.jpeg', 'logo7.jpeg', 'logo8.jpeg', 'logo9.png'];
									for($i = 0; $i < 9; $i++):?>
								<li class="w-1/3 mb-3">
									<a class="block px-3 hover:opacity-80 transition-opacity ease-linear text-center"
										href="https://foodmap.asia/category/di-cho-online">
										<img class="lazy-hidden max-w-full" data-lazy-type="image"
											data-lazy-src="../assets/images/footmap/<?php echo $arr[$i];?>" alt="img" src="" />
									</a>
								</li>
								<?php endfor;?>
							</ul>
						</div>

						<div class="bg-white rounded-b-lg rounded-t-lg shadow">
							<div class="widget-title rounded-t-lg uppercase font-bold 
							text-sm lg:text-xs xl:text-sm u-bg-green text-white p-4">KHOẢNG GIÁ (TRÊN MỖI KG)</div>

							<ul class="list-none pt-4 pb-3 px-4 text-xs font-normal">
								<?php 
									$arr = ['30.000 - 50.000', '50.000 - 100.000', 
										'100.000 - 200.000', '200.000 - 500.000', '500.000 - 1 Triệu đồng'];
									for($i = 0; $i < 5; $i++):?>
								<li class="mb-3">
									<label class="relative flex items-center">
										<input type="checkbox"
											class="form-tick appearance-none h-5 w-5 border border-gray-300 rounded checked:bg-green-700 checked:border-transparent focus:outline-none text-white">
										<svg class="absolute left-0.5 top-px fill-current hidden w-4 h-4 text-white font-bold text-base"
											viewBox="0 0 20 20">
											<path d="M0 11l2-2 5 5L18 3l2 2L7 18z" /></svg>
										<span class="ml-2"><?php echo $arr[$i];?></span>
									</label>
								</li>
								<?php endfor;?>
							</ul>
						</div>
					</aside>

					<div class="w-full md:w-3/4 px-2 md:px-2">
						<section class="p-4 md:p-5 bg-white rounded-b-lg rounded-t-lg shadow-md mb-5">
							<h2 class="font-bold text-base uppercase mb-5">Đi chợ online</h2>

							<div class="p-slider1-js">
								<div class="tRes_39">
									<img src="../assets/images/footmap/banner.png" loading="lazy" />
								</div>
							</div>
						</section>

						<section class="p-5 bg-white rounded-b-lg rounded-t-lg shadow-md">
							<div class="pb-4 border-b divide-solid border-gray-300">
								<div class="lg:float-left font-light lg:pt-2 mb-4 lg:mb-0">
									<span class="hidden">Bộ lọc:</span>
									<a class="text-green-800 inline-block mr-2" href="#" data-sort="latest">Mới nhất</a>
									<a class="inline-block mr-2 mb-1 md:mb-0 hover:text-green-700 transition-all" href="#"
										data-sort="best">Bán
										chạy</a>
									<a class="inline-block mr-2 mb-1 md:mb-0 hover:text-green-700 transition-all" href="#"
										data-sort="lowtohigh">Giá:
										từ thấp đến cao</a>
									<a class="inline-block mr-2 mb-1 md:mb-0 hover:text-green-700 transition-all" href="#"
										data-sort="hightolow">Giá:
										từ cao đến thấp</a>
								</div>
								<form action="/" class="max-w-xs lg:float-right relative">
									<input type="text" placeholder="Tìm kiếm" value="" name="keyword" class="block pl-2 pr-9 w-full rounded-md bg-white 
											border divide-solid border-gray-400 h-8">
									<button class="absolute top-0 right-0 w-9 h-full border-none 
									  text-base text-green-800 font-bold">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-auto" fill="none" viewBox="0 0 24 24"
											stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
										</svg>
									</button>
								</form>
								<div class="clear-both"></div>
							</div>

							<div class="flex flex-wrap -mx-3 md:-mx-2 mt-5">
								<div class="w-1/2 lg:w-1/3 xl:w-1/4 px-2 md:px-2 mb-4">
									<div class="block bg-white border divide-solid 
										rounded	border-gray-300 hover:shadow-lg transition-shadow" data-product-id="G500010000135">
										<a href="detail.php" class="tRes_68">
											<img class="lazy-hidden" data-lazy-type="image" data-lazy-src="../assets/images/footmap/img1.jpeg"
												src="" />
										</a>

										<div class="p-3">
											<h3 class="text-sm c-line1 font-bold mb-2">
												<a href="detail.php">Son
													Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
											</h3>

											<a class="text-green-700 text-sm mb-2 block"
												href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
											<div class="mb-2 text-xs">
												<?php for($i = 0; $i < 5; $i++):?>
												<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block text-yellow-400"
													viewBox="0 0 20 20" fill="currentColor">
													<path
														d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
												</svg>
												<?php endfor;?>
												<a href="#" class="text-green-800 text-sm 
													inline-block align-bottom">(1)</a>
											</div>
											<ul class="list-none text-green-800 mb-2">
												<li><span>41 Đã bán</span></li>
											</ul>

											<div class="text-green-800 mb-3 text-lg">
												<strong>285.000 ₫</strong>
											</div>

											<a class="px-1 py-2 text-center uppercase block 
												hover:text-white hover:bg-green-700 transition-all
												border divide-solid text-xs md:text-sm  border-green-800 cursor-pointer" data-id="5700" data-qty="1"
												data-district="" data-city="" data-type="product">thêm vào giỏ hàng</a>
										</div>
									</div>
								</div>

								<?php for($j = 0; $j < 18; $j++):?>
								<div class="w-1/2 lg:w-1/3 xl:w-1/4 px-2 md:px-2 mb-4">
									<div class="block bg-white border divide-solid 
										rounded	border-gray-300 hover:shadow-lg transition-shadow" data-product-id="G500010000135">
										<a href="detail.php" class="tRes_68">
											<img class="lazy-hidden" data-lazy-type="image" data-lazy-src="../assets/images/footmap/img1.jpeg"
												src="" />
										</a>

										<div class="p-3">
											<h3 class="text-sm c-line1 font-bold mb-2">
												<a href="detail.php">Son
													Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
											</h3>

											<a class="text-green-700 text-sm mb-2 block"
												href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
											<div class="mb-2 text-xs">
												<?php for($i = 0; $i < 5; $i++):?>
												<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block text-yellow-400" fill="none"
													viewBox="0 0 24 24" stroke="currentColor">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
														d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
												</svg>
												<?php endfor;?>
												<a href="#" class="text-green-800 text-sm 
													inline-block align-bottom">(1)</a>
											</div>
											<ul class="list-none text-green-800 mb-2">
												<li><span>41 Đã bán</span></li>
											</ul>

											<div class="text-green-800 mb-3 text-lg">
												<strong>285.000 ₫</strong>
											</div>

											<a class="px-1 py-2 text-center uppercase block 
												hover:text-white hover:bg-green-700 transition-all
												border divide-solid text-xs md:text-sm border-green-800 cursor-pointer" data-id="5700" data-qty="1"
												data-district="" data-city="" data-type="product" href="javascript:void(0);">thêm vào giỏ
												hàng</a>
										</div>
									</div>
								</div>
								<?php endfor;?>
							</div>

							<ul class="text-xs list-none text-center 
								py-5 md:py-8">
								<li class="inline-block align-bottom">
									<a class="block w-8 h-8 pt-2 rounded-md bg-gray-300 text-gray-700
									hover:text-white hover:bg-green-700 transition-all" href="https://foodmap.asia/category/di-cho-online?page=1">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 m-auto" fill="none" viewBox="0 0 24 24"
											stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
										</svg>
									</a>
								</li>

								<li class="inline-block">
									<a class="block bg-green-700 text-white 
										w-8 h-8 pt-2 rounded-md hover:text-white hover:bg-green-700 transition-all">
										1
									</a>
								</li>

								<li class="inline-block">
									<a class="block bg-gray-300 
										w-8 h-8 pt-2 rounded-md 
										hover:text-white hover:bg-green-700 transition-all" href="#">2</a>
								</li>

								<li class="inline-block">
									<a class="block bg-gray-300 
										w-8 h-8 pt-2 rounded-md 
										hover:text-white hover:bg-green-700 transition-all" href="#">3</a>
								</li>

								<li class="inline-block align-bottom">
									<a class="block w-8 h-8 pt-2 rounded-md 
										bg-gray-300 text-gray-700 
										hover:text-white hover:bg-green-700 transition-all"
										href="https://foodmap.asia/category/di-cho-online?page=1">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 m-auto" fill="none" viewBox="0 0 24 24"
											stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
										</svg>
									</a>
								</li>
							</ul>
						</section>
					</div>
				</div>
			</section>

			<div class="container mx-auto px-3 md:px-4 mb-5">
				<section class="bg-white rounded-b-lg rounded-t-lg shadow-md">
					<h2 class="font-bold text-base uppercase
						px-5 py-3 mb-5 border-b divide-solid border-gray-100">SẢN PHẨM ĐÃ XEM</h2>

					<div class="px-5 pb-2">
						<div class="flex flex-wrap -mx-2">
							<div class="w-1/2 md:w-1/5 pr-2 pl-2 mb-4">
								<div class="block bg-white border divide-solid 
									rounded	border-gray-300 hover:shadow-lg transition-shadow" data-product-id="G500010000135">
									<a href="detail.php" class="tRes_68">
										<img class="lazy-hidden" data-lazy-type="image" data-lazy-src="../assets/images/footmap/img2.jpeg"
											src="" />
									</a>

									<div class="p-3">
										<h3 class="text-sm c-line1 font-bold mb-2">
											<a href="detail.php">Son
												Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
										</h3>

										<a class="text-green-700 text-sm mb-2 block"
											href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
										<div class="mb-2 text-xs">
											<?php for($i = 0; $i < 5; $i++):?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block text-yellow-400"
												viewBox="0 0 20 20" fill="currentColor">
												<path
													d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
											</svg>
											<?php endfor;?>
											<a href="#" class="text-green-800 text-sm 
												inline-block align-bottom">(1)</a>
										</div>
										<ul class="list-none text-green-800 mb-2">
											<li><span>41 Đã bán</span></li>
										</ul>

										<div class="text-green-800 mb-3 text-lg">
											<strong>285.000 ₫</strong>
										</div>

										<a class="px-1 py-2 text-center uppercase block 
											hover:text-white hover:bg-green-700 transition-all
											border divide-solid text-xs md:text-sm border-green-800 cursor-pointer" data-id="5700" data-qty="1"
											data-district="" data-city="" data-type="product">thêm vào giỏ hàng</a>
									</div>
								</div>
							</div>

							<?php for($j = 0; $j < 1; $j++):?>
							<div class="w-1/2 md:w-1/5 px-2 md:px-2 mb-4">
								<div class="block bg-white border divide-solid 
									rounded	border-gray-300 hover:shadow-lg transition-shadow" data-product-id="G500010000135">
									<a href="detail.php" class="tRes_68">
										<img class="lazy-hidden" data-lazy-type="image" data-lazy-src="../assets/images/footmap/img2.jpeg"
											src="" />
									</a>

									<div class="p-3">
										<h3 class="text-sm c-line1 font-bold mb-2">
											<a href="detail.php">Son
												Màu Bơ Cacao - Thỏi Tre - Zeni Vietnam Thỏi Tre - Zeni Vietnam</a>
										</h3>

										<a class="text-green-700 text-sm mb-2 block"
											href="https://foodmap.asia/brands/zeni-vietnam/products">Zeni VietNam</a>
										<div class="mb-2 text-xs">
											<?php for($i = 0; $i < 5; $i++):?>
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block text-yellow-400" fill="none"
												viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
											</svg>
											<?php endfor;?>
											<a href="#" class="text-green-800 text-sm 
												inline-block align-bottom">(1)</a>
										</div>
										<ul class="list-none text-green-800 mb-2">
											<li><span>41 Đã bán</span></li>
										</ul>

										<div class="text-green-800 mb-3 text-lg">
											<strong>285.000 ₫</strong>
										</div>

										<a class="px-1 py-2 text-center uppercase block hover:text-white hover:bg-green-700 transition-all border divide-solid text-xs md:text-sm border-green-800 cursor-pointer"
											data-id="5700" data-qty="1" data-district="" data-city="" data-type="product"
											href="javascript:void(0);">thêm vào giỏ hàng</a>
									</div>
								</div>
							</div>
							<?php endfor;?>
						</div>
					</div>
				</section>
			</div>

			<div class="container mx-auto px-3 md:px-4 mb-5">
				<section class="bg-white rounded-b-lg rounded-t-lg shadow-md">
					<h2 class="font-bold text-base uppercase
						px-5 py-3 mb-5 border-b divide-solid border-gray-100">CÁC DANH MỤC KHÁC</h2>

					<div class="px-4 md:px-5 pb-2">
						<div class="flex flex-wrap -mx-3 md:-mx-2">
							<?php 
								$arr = ['Đi chợ online', 'Trái cây tươi ngon', 'Đặc sản vùng miền', 
									'Trà - Cà phê - Socola', 'Quà tặng sức khỏe',
									'Sống xanh', 'Quà tặng đặc biệt', 'Hành trình Những Bước Chân Xanh'];
								for($i = 0; $i < sizeof($arr); $i++):?>
							<div class="w-1/2 md:w-1/4 px-3 md:px-2 mb-4">
								<a href="detail.php" class="block rounded hover:shadow-lg transition-shadow">
									<div class="tRes_62">
										<img class="lazy-hidden" data-lazy-type="image" data-lazy-src="../assets/images/footmap/img3.jpeg"
											src="" />
									</div>
									<p class="mb-0 py-3 px-2 font-bold text-base text-center">
										<?php echo $arr[$i];?></p>
								</a>
							</div>
							<?php endfor;?>
						</div>
					</div>
				</section>
			</div>

			<div class="container mx-auto px-3 md:px-4 mb-5">
				<section class="bg-white rounded-b-lg rounded-t-lg shadow-md">
					<h2 class="font-bold text-base uppercase
						px-5 py-3 mb-5 border-b divide-solid border-gray-100">TIN TỨC LIÊN QUAN</h2>

					<div class="px-4 md:px-5 pb-2">
						<div class="flex flex-wrap -mx-3 md:-mx-2">
							<div class="w-full md:w-2/4 px-3 md:px-2 mb-4">
								<a href="detail.php" class="block rounded group">
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

							<div class="w-full md:w-1/4 px-2 md:px-2 mb-4">
								<?php 
									$arr = ['Trên Quýt Thơm Trĩu Cành, Dưới Thả Gà Ta, Lão Nông Thu Nửa Tỷ/Năm', 'Nghề làm nước mắm truyền thống Phú Quốc'];
									for($i = 0; $i < sizeof($arr); $i++):?>
								<a href="detail.php" class="block group mb-4">
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
								<a href="detail.php" class="block group mb-4">
									<div class="float-left w-20">
										<div class="tRes_60">
											<img class="lazy-hidden group-hover:scale-105 transform transition-all duration-500"
												data-lazy-type="image" data-lazy-src="../assets/images/footmap/img6.jpeg" src="" />
										</div>
									</div>

									<section class="overflow-hidden pl-2">
										<h6
											class="mb-0 font-semibold group-hover:text-green-700 transition-shadow text-gray-700 text-sm md:text-xs">
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

<script type="text/javascript" src="../assets/js/slick/slick.min.js"></script>
<script type="text/javascript" src="../assets/js/script.js"></script>
<script type="text/javascript" src="../assets/js/common.js"></script>

</html>