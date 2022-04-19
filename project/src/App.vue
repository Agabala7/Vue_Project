<script setup>
import { RouterLink, RouterView } from 'vue-router'
import '@/assets/catalog/view/javascript/jquery/jquery-2.1.1.min.js'
import '@/assets/catalog/view/javascript/jquery/owl-carousel/js/owl.carousel.min.js'
import '@/assets/catalog/view/javascript/opentheme/countdown/jquery.plugin.min.js'
import '@/assets/catalog/view/javascript/ocmegamenu/menu.js'
import '@/assets/catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js'
import '@/assets/catalog/view/javascript/cloudzoom/cloud-zoom.1.0.2.min.js'
import '@/assets/catalog/view/javascript/cloudzoom/zoom.js'
import '@/assets/catalog/view/javascript/opentheme/jquery.bpopup.min.js'
import '@/assets/catalog/view/javascript/opentheme/jquery.cookie.js'
import '@/assets/catalog/view/javascript/opentheme/ocajaxlogin/ocajaxlogin.js'
import '@/assets/catalog/view/javascript/jquery/swiper/js/swiper.jquery.js'
import '@/assets/catalog/view/javascript/common.js'
import '@/assets/catalog/view/javascript/bootstrap/js/bootstrap.min.js'

    // $(document).ready(function () {
    //     var flag = false;
    //     var ajax_search_enable = $('#ajax-search-enable').val();
        
    //     var current_cate_value = $('ul.cate-items li.selected').data('value');
    //     var current_cate_text = $('ul.cate-items li.selected').html();
        
    //     $('.cate-selected').attr('data-value', current_cate_value);
    //     $('.cate-selected').html(current_cate_text);
        
    //     $('.hover-cate p').click(function () {
    //         $( ".cate-items" ).toggle("slow");
    //     });
        
    //     $('.ajax-result-container').hover(
    //         function() {
    //             flag = true;
    //         },
    //         function() {
    //             flag = false;
    //         }
    //     );
        
    //     $('.hover-cate').hover(
    //         function() {
    //             flag = true;
    //         },
    //         function() {
    //             flag = false;
    //         }
    //     );
        
    //     $('#search-by-category').focusout(function() {
    //         if(flag == true) {
    //             $('.ajax-result-container').show();
    //         } else {
    //             $('.ajax-result-container').hide();
    //         }
    //     });
        
    //     $('#search-by-category').focusin(function() {
    //         $('.ajax-result-container').show();
    //     });

    //     $('#btn-search-category').click(function () {
    //         var url = 'index64b3.html?route=product/search';
    //         var text_search = $('#text-search').val();
    //         if(text_search) {
    //             url += '&search=' + encodeURIComponent(text_search);
    //         }

    //         var category_search = $('.cate-selected').attr("data-value");
    //         if(category_search) {
    //             url += '&category_id=' + encodeURIComponent(category_search);
    //         }

    //         location = url;
    //     });

    //     if(ajax_search_enable == '1') {
    //         $('#text-search').keyup(function(e) {
    //             var text_search = $(this).val();
    //             var cate_search = $('.cate-selected').attr("data-value");
    //             if(text_search != null && text_search != '') {
    //                 ajaxSearch(text_search, cate_search);
    //             } else {
    //                 $('.ajax-result-container').html('');
    //                 $('.ajax-loader-container').hide();
    //             }
    //         });

    //         $('ul.cate-items li.item-cate').click(function() {
    //             var cate_search = $(this).data('value');
    //             var text_search = $('#text-search').val();
    //             $('.cate-selected').attr('data-value', cate_search);
    //             $('.cate-selected').html($(this).html());
    //             if(text_search != null && text_search != '') {
    //                 ajaxSearch(text_search, cate_search);
    //             } else {
    //                 $('.ajax-result-container').html('');
    //                 $('.ajax-loader-container').hide();
    //             }
    //             $( ".cate-items" ).hide();
    //             $('#text-search').focus();
    //         });

    //     }
        
    //     function ajaxSearch(text_search, cate_search) {
    //         $.ajax({
    //             url         : 'http://smartbook4.demo.towerthemes.com/index.php?route=extension/module/ocsearchcategory/ajaxSearch',
    //             type        : 'post',
    //             data        : { text_search : text_search, cate_search : cate_search },
    //             beforeSend  : function () {
    //                 $('.ajax-loader-container').show();
    //             },
    //             success     : function(json) {
    //                 if(json['success'] == true) {
    //                     $('.ajax-result-container').html(json['result_html']);
    //                     $('.ajax-loader-container').hide();
    //                 }
    //             }
    //         });
    //     }

    // });    

  
  // $('#banner0').swiper({
  // 	slidesPerView: 6,
  // 	spaceBetween: 30,
  // 	autoplay: false,
  // 	loop: false,
  //     autoplayDisableOnInteraction: false,
  // 	// Responsive breakpoints
  // 	breakpoints: {
  // 		479: {
  // 		  slidesPerView: 2
  // 		},
  // 		767: {
  // 		  slidesPerView: 3
  // 		},
  // 		991: {
  // 		  slidesPerView: 4
        
  // 		},
  // 		1199: {
  // 		  slidesPerView: 5
        
  // 		}
  // 	}
  // });

// $(document).ready(function() {
// 		$('#subscribe_email').keypress(function(e) {
//             if(e.which == 13) {
//                 e.preventDefault();
//                 email_subscribe();
//             }
// 			var name= $(this).val();
// 		  	$('#subscribe_name').val(name);
//         });
// 		$('#subscribe_email').change(function() {
// 		 var name= $(this).val();
// 		  		$('#subscribe_name').val(name);
// 		});
//     });


// function email_subscribe(){
// 	$.ajax({
// 		type: 'post',
// 		url: 'index.php?route=extension/module/newslettersubscribe/subscribe',
// 		dataType: 'html',
// 		data:$("#subscribe-normal").serialize(),
// 		success: function (html) {
// 			try {
// 				eval(html);
// 			} 
// 			catch (e) {
// 			}				
// 		}});
// }
// function email_unsubscribe(){
// 	$.ajax({
// 		type: 'post',
// 		url: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
// 		dataType: 'html',
// 		data:$("#subscribe").serialize(),
// 		success: function (html) {
// 			try {
// 				eval(html);
// 			} catch (e) {
// 			}
// 		}}); 
// 	$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
// }

</script>

<template>
  <div>

    <div class="wrapper">

      <!-- HEADER -->

      <header>
        <div class="header-inner ">
          <div class="container">
          <div class="container-inner">
            <div class="inner">
              <div class="inner-inner">
                <div class="col-menu-mobile">
                                    
          
              
                  <div class="oc-menu mobile-menu hidden-lg" id="oc-menu-7847">
                                  <input type="hidden" id="menu-effect-7847" class="menu-effect" value="none">
                      <div class="oc-menu-bar">
                          <div class="left"><i class="fas fa-bars"></i> <span>Mobile Menu</span></div>
                          <div class="right"><i class="fas fa-chevron-down" aria-hidden="true"></i></div>
                      </div>
                      <ul class="ul-top-items">
                                                                              <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index9328.html?route=common/home">
                                                                                                                                  <span>Home</span>
                                                                                  </a>
                                                                                                                                      </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index98dc.html?route=product/category&amp;path=20">
                                                                                                                                  <span>Shop</span>
                                                                                  </a>
                                                                                  <span class="top-click-show a-click-show">
                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                  <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                              </span>
                                                                                                                                              
                                                                                                                              <div class="sub-menu-container">
                                                      <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                  <li class="li-second-items">
                                                                              <a href="indexb114.html?route=product/category&amp;path=20_307" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Saws</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index9233.html?route=product/category&amp;path=20_307_424" class="a-third-link"><span class="a-third-title">All-in-One Computers</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index1c7f.html?route=product/category&amp;path=20_307_423" class="a-third-link"><span class="a-third-title">Computer Cards &amp; Components</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexa91e.html?route=product/category&amp;path=20_307_415" class="a-third-link"><span class="a-third-title">Fans, Heatsinks &amp; Cooling</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index27c8.html?route=product/category&amp;path=20_307_416" class="a-third-link"><span class="a-third-title">GPUs / Video Graphics Cards</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index8065.html?route=product/category&amp;path=20_307_417" class="a-third-link"><span class="a-third-title">Hard Drives &amp; Storage</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexfd50.html?route=product/category&amp;path=20_307_360" class="a-third-link"><span class="a-third-title">Microsoft Surface Go</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexbd0b.html?route=product/category&amp;path=20_307_414" class="a-third-link"><span class="a-third-title">Optical Drives</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="indexedea.html?route=product/category&amp;path=20_48" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Concrete Tools</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index6d9b.html?route=product/category&amp;path=20_48_361" class="a-third-link"><span class="a-third-title">4G LTE Tablets</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index9ca1.html?route=product/category&amp;path=20_48_358" class="a-third-link"><span class="a-third-title">Apple iPad</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexb02b.html?route=product/category&amp;path=20_48_365" class="a-third-link"><span class="a-third-title">E-Readers</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index60ef.html?route=product/category&amp;path=20_48_364" class="a-third-link"><span class="a-third-title">iPad &amp; Tablet Accessories</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index36d4.html?route=product/category&amp;path=20_48_362" class="a-third-link"><span class="a-third-title">Kids' Tablets</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index4b08.html?route=product/category&amp;path=20_50" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Drills</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index50a6.html?route=product/category&amp;path=20_50_418" class="a-third-link"><span class="a-third-title">Cables &amp; Connectors</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index692d.html?route=product/category&amp;path=20_50_419" class="a-third-link"><span class="a-third-title">Cleaning Equipment &amp; Kits</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index921f.html?route=product/category&amp;path=20_50_420" class="a-third-link"><span class="a-third-title">Computer Speakers</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index8d41.html?route=product/category&amp;path=20_50_421" class="a-third-link"><span class="a-third-title">Graphics Tablets</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index09c0.html?route=product/category&amp;path=20_50_359" class="a-third-link"><span class="a-third-title">Microsoft Surface Pro</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexda69.html?route=product/category&amp;path=20_50_422" class="a-third-link"><span class="a-third-title">Printers, Ink &amp; Toner</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexc21a.html?route=product/category&amp;path=20_50_363" class="a-third-link"><span class="a-third-title">Refurbished Tablets</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index6771.html?route=product/category&amp;path=20_304" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Sanders</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                              </ul>
                                                  </div>
                                                                                                                                              </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index0217.html?route=product/category&amp;path=56">
                                                                                                                                  <span>Tools</span>
                                                                                  </a>
                                                                                  <span class="top-click-show a-click-show">
                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                  <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                              </span>
                                                                                                                                              
                                                                                                                              <div class="sub-menu-container">
                                                      <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                  <li class="li-second-items">
                                                                              <a href="index1c89.html?route=product/category&amp;path=56_84" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Wheel Simulators</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index213b.html?route=product/category&amp;path=56_84_329" class="a-third-link"><span class="a-third-title">Bags &amp; Cases</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexbe22.html?route=product/category&amp;path=56_84_330" class="a-third-link"><span class="a-third-title">Binoculars &amp; Scopes</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexff08.html?route=product/category&amp;path=56_84_331" class="a-third-link"><span class="a-third-title">Digital Cameras</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexa3f5.html?route=product/category&amp;path=56_84_332" class="a-third-link"><span class="a-third-title">Film Photography</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index5a63.html?route=product/category&amp;path=56_84_334" class="a-third-link"><span class="a-third-title">Lighting &amp; Studio</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index65c3.html?route=product/category&amp;path=56_86" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Seals &amp; Hubs</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index8bf3.html?route=product/category&amp;path=56_86_396" class="a-third-link"><span class="a-third-title">DSLR Body &amp; Lens</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexfa3f.html?route=product/category&amp;path=56_86_397" class="a-third-link"><span class="a-third-title">DSLR Body Only</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index3e0d.html?route=product/category&amp;path=56_86_399" class="a-third-link"><span class="a-third-title">DSLR Lenses</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index548a.html?route=product/category&amp;path=56_86_398" class="a-third-link"><span class="a-third-title">DSLR Package Deals</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index9137.html?route=product/category&amp;path=56_62" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Wheel Rim Screws</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexb55a.html?route=product/category&amp;path=56_62_401" class="a-third-link"><span class="a-third-title">Camera Lenses</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexfa97.html?route=product/category&amp;path=56_62_400" class="a-third-link"><span class="a-third-title">DSLR Lenses</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index8cda.html?route=product/category&amp;path=56_62_402" class="a-third-link"><span class="a-third-title">Lens Accessories</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index379c.html?route=product/category&amp;path=56_62_408" class="a-third-link"><span class="a-third-title">Lowepro</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexbfd0.html?route=product/category&amp;path=56_62_410" class="a-third-link"><span class="a-third-title">SanDisk</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index0991.html?route=product/category&amp;path=56_91" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Wheel Bearings</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index3038.html?route=product/category&amp;path=56_91_407" class="a-third-link"><span class="a-third-title">Bower</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index2e99.html?route=product/category&amp;path=56_91_411" class="a-third-link"><span class="a-third-title">Celestron</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index7a0a.html?route=product/category&amp;path=56_91_412" class="a-third-link"><span class="a-third-title">Flipbac</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index5746.html?route=product/category&amp;path=56_91_409" class="a-third-link"><span class="a-third-title">Gary Fong</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexc676.html?route=product/category&amp;path=56_91_413" class="a-third-link"><span class="a-third-title">GigaPan</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                              </ul>
                                                  </div>
                                                                                                                                              </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index0217.html?route=product/category&amp;path=56">
                                                                                                                                  <span>Wheels &amp; Tires</span>
                                                                                  </a>
                                                                                  <span class="top-click-show a-click-show">
                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                  <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                              </span>
                                                                                                                                              
                                                                                                                              <div class="sub-menu-container">
                                                      <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                  <li class="li-second-items">
                                                                              <a href="index1c89.html?route=product/category&amp;path=56_84" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Wheel Simulators</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index213b.html?route=product/category&amp;path=56_84_329" class="a-third-link"><span class="a-third-title">Bags &amp; Cases</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexbe22.html?route=product/category&amp;path=56_84_330" class="a-third-link"><span class="a-third-title">Binoculars &amp; Scopes</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexff08.html?route=product/category&amp;path=56_84_331" class="a-third-link"><span class="a-third-title">Digital Cameras</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexa3f5.html?route=product/category&amp;path=56_84_332" class="a-third-link"><span class="a-third-title">Film Photography</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index5a63.html?route=product/category&amp;path=56_84_334" class="a-third-link"><span class="a-third-title">Lighting &amp; Studio</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index65c3.html?route=product/category&amp;path=56_86" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Seals &amp; Hubs</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index8bf3.html?route=product/category&amp;path=56_86_396" class="a-third-link"><span class="a-third-title">DSLR Body &amp; Lens</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexfa3f.html?route=product/category&amp;path=56_86_397" class="a-third-link"><span class="a-third-title">DSLR Body Only</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index3e0d.html?route=product/category&amp;path=56_86_399" class="a-third-link"><span class="a-third-title">DSLR Lenses</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index548a.html?route=product/category&amp;path=56_86_398" class="a-third-link"><span class="a-third-title">DSLR Package Deals</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index9137.html?route=product/category&amp;path=56_62" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Wheel Rim Screws</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexb55a.html?route=product/category&amp;path=56_62_401" class="a-third-link"><span class="a-third-title">Camera Lenses</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexfa97.html?route=product/category&amp;path=56_62_400" class="a-third-link"><span class="a-third-title">DSLR Lenses</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index8cda.html?route=product/category&amp;path=56_62_402" class="a-third-link"><span class="a-third-title">Lens Accessories</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index379c.html?route=product/category&amp;path=56_62_408" class="a-third-link"><span class="a-third-title">Lowepro</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexbfd0.html?route=product/category&amp;path=56_62_410" class="a-third-link"><span class="a-third-title">SanDisk</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index0991.html?route=product/category&amp;path=56_91" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Wheel Bearings</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index3038.html?route=product/category&amp;path=56_91_407" class="a-third-link"><span class="a-third-title">Bower</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index2e99.html?route=product/category&amp;path=56_91_411" class="a-third-link"><span class="a-third-title">Celestron</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index7a0a.html?route=product/category&amp;path=56_91_412" class="a-third-link"><span class="a-third-title">Flipbac</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index5746.html?route=product/category&amp;path=56_91_409" class="a-third-link"><span class="a-third-title">Gary Fong</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexc676.html?route=product/category&amp;path=56_91_413" class="a-third-link"><span class="a-third-title">GigaPan</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                              </ul>
                                                  </div>
                                                                                                                                              </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index1cd8.html?route=product/category&amp;path=451">
                                                                                                                                  <span>Brake Parts</span>
                                                                                  </a>
                                                                                  <span class="top-click-show a-click-show">
                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                  <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                              </span>
                                                                                                                                              
                                                                                                                              <div class="sub-menu-container">
                                                      <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                  <li class="li-second-items">
                                                                              <a href="index0152.html?route=product/category&amp;path=451_452" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Brake Tools</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="indexa100.html?route=product/category&amp;path=451_453" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Driveshafts</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="indexaf44.html?route=product/category&amp;path=451_455" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Emergency Brake</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index46c1.html?route=product/category&amp;path=451_454" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Spools</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                              </ul>
                                                  </div>
                                                                                                                                              </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index7737.html?route=product/category&amp;path=124">
                                                                                                                                  <span>Outdoor Living </span>
                                                                                  </a>
                                                                                  <span class="top-click-show a-click-show">
                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                  <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                              </span>
                                                                                                                                              
                                                                                                                              <div class="sub-menu-container">
                                                      <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                  <li class="li-second-items">
                                                                              <a href="indexbd0f.html?route=product/category&amp;path=124_305" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Handbag</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index675b.html?route=product/category&amp;path=124_305_338" class="a-third-link"><span class="a-third-title">CD Players &amp; Turntables</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexc1b8.html?route=product/category&amp;path=124_305_335" class="a-third-link"><span class="a-third-title">Home Theater Systems</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexaed8.html?route=product/category&amp;path=124_305_337" class="a-third-link"><span class="a-third-title">Receivers &amp; Amplifiers</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexc9e3.html?route=product/category&amp;path=124_305_336" class="a-third-link"><span class="a-third-title">Speakers</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index5863.html?route=product/category&amp;path=124_305_339" class="a-third-link"><span class="a-third-title">Stereo Shelf Systems</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index257f.html?route=product/category&amp;path=124_305_340" class="a-third-link"><span class="a-third-title">Wireless &amp; Multiroom Audio</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="indexe2fa.html?route=product/category&amp;path=124_125" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Accessories</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index8547.html?route=product/category&amp;path=124_133" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Clothing</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index913e.html?route=product/category&amp;path=124_137" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Shoes</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexbdd1.html?route=product/category&amp;path=124_137_347" class="a-third-link"><span class="a-third-title">4K UHD Streaming Media Players</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index7a41.html?route=product/category&amp;path=124_137_341" class="a-third-link"><span class="a-third-title">Apple TV</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexba80.html?route=product/category&amp;path=124_137_342" class="a-third-link"><span class="a-third-title">Fire TV Streaming Media Devices</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index58fb.html?route=product/category&amp;path=124_137_343" class="a-third-link"><span class="a-third-title">Google Chromecast</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index74ac.html?route=product/category&amp;path=124_137_346" class="a-third-link"><span class="a-third-title">NVIDIA Shield</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexc5f9.html?route=product/category&amp;path=124_137_344" class="a-third-link"><span class="a-third-title">Roku</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index26b3.html?route=product/category&amp;path=124_137_348" class="a-third-link"><span class="a-third-title">Streaming Blu-ray Players</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index78a7.html?route=product/category&amp;path=124_137_349" class="a-third-link"><span class="a-third-title">Streaming Media Player Accessories</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexee70.html?route=product/category&amp;path=124_137_345" class="a-third-link"><span class="a-third-title">TiVo</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                              </ul>
                                                  </div>
                                                                                                                                              </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index67c6.html?route=product/category&amp;path=312">
                                                                                                                                  <span>Indoor Living</span>
                                                                                  </a>
                                                                                  <span class="top-click-show a-click-show">
                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                  <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                              </span>
                                                                                                                                              
                                                                                                                              <div class="sub-menu-container">
                                                      <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                  <li class="li-second-items">
                                                                              <a href="indexa76f.html?route=product/category&amp;path=312_386" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Bridge</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="indexf490.html?route=product/category&amp;path=312_385" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Hub</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index053e.html?route=product/category&amp;path=312_384" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Repeater</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index7003.html?route=product/category&amp;path=312_387" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Switch</span>
                                                                              </a>
                                                                                                                                                                                                                          </li>
                                                                                                                                          <li class="li-second-items">
                                                                              <a href="index8c49.html?route=product/category&amp;path=312_308" class="a-second-link a-item">
                                                                                  <span class="a-second-title">Video Games Cosoles</span>
                                                                              </a>
                                                                                                                                                          <span class="second-click-show a-click-show">
                                                                                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                      <i class="fas fa-chevron-up" aria-hidden="true"></i>
                                                                                  </span>
                                                                                                                                                                                                                                  <div class="flyout-third-items">
                                                                                      <ul class="ul-third-items">
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index6de0.html?route=product/category&amp;path=312_308_373" class="a-third-link"><span class="a-third-title">PlayStation 3</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="indexfbb6.html?route=product/category&amp;path=312_308_372" class="a-third-link"><span class="a-third-title">PlayStation 4</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index85c8.html?route=product/category&amp;path=312_308_375" class="a-third-link"><span class="a-third-title">Xbox 360</span></a>
                                                                                              </li>
                                                                                                                                                                                  <li class="li-third-items">
                                                                                                  <a href="index8472.html?route=product/category&amp;path=312_308_374" class="a-third-link"><span class="a-third-title">Xbox One</span></a>
                                                                                              </li>
                                                                                                                                                                          </ul>
                                                                                  </div>
                                                                                                                                                  </li>
                                                                                                                                                                                                                                                                                              </ul>
                                                  </div>
                                                                                                                                              </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index8816.html?route=information/information&amp;information_id=4">
                                                                                                                                  <span>About us</span>
                                                                                  </a>
                                                                                                                                      </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index2724.html?route=information/contact">
                                                                                                                                  <span>Contact us</span>
                                                                                  </a>
                                                                                                                                      </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="indexf110.html?route=product/special">
                                                                                                                                  <span>Specials</span>
                                                                                  </a>
                                                                                                                                      </li>
                                                                                                      <li class="li-top-item">
                                                                          <a class="a-top-link a-item" href="index8024.html?route=blog/blog">
                                                                                                                                  <span>Blog</span>
                                                                                  </a>
                                                                                                                                      </li>
                                                                  </ul>
                          </div>
          
        
                            </div>
                <div class="logo-container">
                  <div id="logo">
                                  <a href="index9328.html?route=common/home"><img src="@/assets/image/catalog/logo/logo.png" title="Smartbooks4" alt="Smartbooks4" class="img-responsive"></a>
                                </div>
                </div>
                
                <div class="box-cart">
                  <div id="top-links">
                                    <ul class="user ul-account list-unstyled">

                                        <li>
                                          <RouterLink to="/login" exact-active-class="active">
                                                <a id="a-login-link">Daxil ol</a>
                                          </RouterLink>
                                        </li>

                                    
                                            <li>
                                            ya
                                              <RouterLink to="/register" exact-active-class="active">
                                                <a id="a-register-link">Qeydiyyatdan keçin</a>
                                              </RouterLink>
                                            </li>
                                    </ul>
                  </div>
                  <div id="cart" class="btn-group btn-block">
        <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn dropdown-toggle"><span id="cart-total"><span class="txt_number">0</span><span class="txt_items">Shopping Cart</span><span class="total-price">$0.00 <i class="fas fa-chevron-down"></i></span></span></button>
        <ul class="dropdown-menu pull-right">
              <li>
            <p class="text-center cart-empty">Your shopping cart is empty!</p>
          </li>
            </ul>
      </div>

                </div>
                
                
              </div>
              <div class="col-search">
                <div id="search-by-category">
          <div class="search-container">
              <div class="categories-container">
                  <div class="hover-cate">
                  <p><span class="cate-selected" data-value="0">All Categories</span><i class="fa fa-caret-down"></i></p>
                  <ul class="cate-items">
                      <li class="item-cate" data-value="0">All Categories</li>
                                                              <li data-value="428" class="item-cate">Accessories</li>
                                                                                                      <li data-value="451" class="item-cate">Arts &amp; Photography</li>
                                                                                              <li data-value="452" class="item-cate f1">Brake Tools</li>
                                                                                                                          <li data-value="453" class="item-cate f1">Driveshafts</li>
                                                                                                                          <li data-value="455" class="item-cate f1">Emergency Brake</li>
                                                                                                                          <li data-value="454" class="item-cate f1">Spools</li>
                                                                                                                                  <li data-value="56" class="item-cate">Biographies</li>
                                                                                              <li data-value="84" class="item-cate f1">Wheel Simulators</li>
                                                                                                              <li data-value="329" class="item-cate f2">Bags &amp; Cases</li>
                                                                                                                  <li data-value="330" class="item-cate f2">Binoculars &amp; Scopes</li>
                                                                                                                  <li data-value="331" class="item-cate f2">Digital Cameras</li>
                                                                                                                  <li data-value="332" class="item-cate f2">Film Photography</li>
                                                                                                                  <li data-value="334" class="item-cate f2">Lighting &amp; Studio</li>
                                                                                                                              <li data-value="86" class="item-cate f1">Seals &amp; Hubs</li>
                                                                                                              <li data-value="396" class="item-cate f2">DSLR Body &amp; Lens</li>
                                                                                                                  <li data-value="397" class="item-cate f2">DSLR Body Only</li>
                                                                                                                  <li data-value="399" class="item-cate f2">DSLR Lenses</li>
                                                                                                                  <li data-value="398" class="item-cate f2">DSLR Package Deals</li>
                                                                                                                              <li data-value="62" class="item-cate f1">Wheel Rim Screws</li>
                                                                                                              <li data-value="401" class="item-cate f2">Camera Lenses</li>
                                                                                                                  <li data-value="400" class="item-cate f2">DSLR Lenses</li>
                                                                                                                  <li data-value="402" class="item-cate f2">Lens Accessories</li>
                                                                                                                  <li data-value="408" class="item-cate f2">Lowepro</li>
                                                                                                                  <li data-value="410" class="item-cate f2">SanDisk</li>
                                                                                                                              <li data-value="91" class="item-cate f1">Wheel Bearings</li>
                                                                                                              <li data-value="407" class="item-cate f2">Bower</li>
                                                                                                                  <li data-value="411" class="item-cate f2">Celestron</li>
                                                                                                                  <li data-value="412" class="item-cate f2">Flipbac</li>
                                                                                                                  <li data-value="409" class="item-cate f2">Gary Fong</li>
                                                                                                                  <li data-value="413" class="item-cate f2">GigaPan</li>
                                                                                                                                      <li data-value="456" class="item-cate">Business &amp; Money</li>
                                                                                              <li data-value="457" class="item-cate f1">2-Stroke</li>
                                                                                                                          <li data-value="460" class="item-cate f1">4-Stroke</li>
                                                                                                                          <li data-value="459" class="item-cate f1">Diesel</li>
                                                                                                                          <li data-value="458" class="item-cate f1">Gasoline</li>
                                                                                                                                  <li data-value="429" class="item-cate">Calendars</li>
                                                                                              <li data-value="434" class="item-cate f1">Turbo Blanket </li>
                                                                                                                          <li data-value="435" class="item-cate f1">Turbo Kits</li>
                                                                                                                          <li data-value="433" class="item-cate f1">Turbo Wrap</li>
                                                                                                                          <li data-value="432" class="item-cate f1">Turbocharger</li>
                                                                                                                                  <li data-value="446" class="item-cate">Children's Books</li>
                                                                                              <li data-value="450" class="item-cate f1">Bulbs</li>
                                                                                                                          <li data-value="448" class="item-cate f1">Headlights</li>
                                                                                                                          <li data-value="447" class="item-cate f1">Light Bars</li>
                                                                                                                          <li data-value="449" class="item-cate f1">Light Kits</li>
                                                                                                                                  <li data-value="124" class="item-cate">Comics</li>
                                                                                              <li data-value="305" class="item-cate f1">Handbag</li>
                                                                                                              <li data-value="338" class="item-cate f2">CD Players &amp; Turntables</li>
                                                                                                                  <li data-value="335" class="item-cate f2">Home Theater Systems</li>
                                                                                                                  <li data-value="337" class="item-cate f2">Receivers &amp; Amplifiers</li>
                                                                                                                  <li data-value="336" class="item-cate f2">Speakers</li>
                                                                                                                  <li data-value="339" class="item-cate f2">Stereo Shelf Systems</li>
                                                                                                                  <li data-value="340" class="item-cate f2">Wireless &amp; Multiroom Audio</li>
                                                                                                                              <li data-value="125" class="item-cate f1">Accessories</li>
                                                                                                                          <li data-value="133" class="item-cate f1">Clothing</li>
                                                                                                                          <li data-value="137" class="item-cate f1">Shoes</li>
                                                                                                              <li data-value="347" class="item-cate f2">4K UHD Streaming Media Players</li>
                                                                                                                  <li data-value="341" class="item-cate f2">Apple TV</li>
                                                                                                                  <li data-value="342" class="item-cate f2">Fire TV Streaming Media Devices</li>
                                                                                                                  <li data-value="343" class="item-cate f2">Google Chromecast</li>
                                                                                                                  <li data-value="346" class="item-cate f2">NVIDIA Shield</li>
                                                                                                                  <li data-value="344" class="item-cate f2">Roku</li>
                                                                                                                  <li data-value="348" class="item-cate f2">Streaming Blu-ray Players</li>
                                                                                                                  <li data-value="349" class="item-cate f2">Streaming Media Player Accessories</li>
                                                                                                                  <li data-value="345" class="item-cate f2">TiVo</li>
                                                                                                                                      <li data-value="309" class="item-cate">Cookbooks</li>
                                                                                              <li data-value="376" class="item-cate f1">Calculators</li>
                                                                                                                          <li data-value="425" class="item-cate f1">Check Trousers</li>
                                                                                                                          <li data-value="377" class="item-cate f1">Ink &amp; Toner</li>
                                                                                                                          <li data-value="426" class="item-cate f1">Low-Cut Jeans</li>
                                                                                                                                  <li data-value="430" class="item-cate">Education</li>
                                                                                                      <li data-value="312" class="item-cate">Indoor Living</li>
                                                                                              <li data-value="386" class="item-cate f1">Bridge</li>
                                                                                                                          <li data-value="385" class="item-cate f1">Hub</li>
                                                                                                                          <li data-value="384" class="item-cate f1">Repeater</li>
                                                                                                                          <li data-value="387" class="item-cate f1">Switch</li>
                                                                                                                          <li data-value="308" class="item-cate f1">Video Games Cosoles</li>
                                                                                                              <li data-value="373" class="item-cate f2">PlayStation 3</li>
                                                                                                                  <li data-value="372" class="item-cate f2">PlayStation 4</li>
                                                                                                                  <li data-value="375" class="item-cate f2">Xbox 360</li>
                                                                                                                  <li data-value="374" class="item-cate f2">Xbox One</li>
                                                                                                                                      <li data-value="427" class="item-cate">Perfomance Filters</li>
                                                                                                      <li data-value="20" class="item-cate">Shop</li>
                                                                                              <li data-value="307" class="item-cate f1">Saws</li>
                                                                                                              <li data-value="424" class="item-cate f2">All-in-One Computers</li>
                                                                                                                  <li data-value="423" class="item-cate f2">Computer Cards &amp; Components</li>
                                                                                                                  <li data-value="415" class="item-cate f2">Fans, Heatsinks &amp; Cooling</li>
                                                                                                                  <li data-value="416" class="item-cate f2">GPUs / Video Graphics Cards</li>
                                                                                                                  <li data-value="417" class="item-cate f2">Hard Drives &amp; Storage</li>
                                                                                                                  <li data-value="360" class="item-cate f2">Microsoft Surface Go</li>
                                                                                                                  <li data-value="414" class="item-cate f2">Optical Drives</li>
                                                                                                                              <li data-value="48" class="item-cate f1">Concrete Tools</li>
                                                                                                              <li data-value="361" class="item-cate f2">4G LTE Tablets</li>
                                                                                                                  <li data-value="358" class="item-cate f2">Apple iPad</li>
                                                                                                                  <li data-value="365" class="item-cate f2">E-Readers</li>
                                                                                                                  <li data-value="364" class="item-cate f2">iPad &amp; Tablet Accessories</li>
                                                                                                                  <li data-value="362" class="item-cate f2">Kids' Tablets</li>
                                                                                                                              <li data-value="50" class="item-cate f1">Drills</li>
                                                                                                              <li data-value="418" class="item-cate f2">Cables &amp; Connectors</li>
                                                                                                                  <li data-value="419" class="item-cate f2">Cleaning Equipment &amp; Kits</li>
                                                                                                                  <li data-value="420" class="item-cate f2">Computer Speakers</li>
                                                                                                                  <li data-value="421" class="item-cate f2">Graphics Tablets</li>
                                                                                                                  <li data-value="359" class="item-cate f2">Microsoft Surface Pro</li>
                                                                                                                  <li data-value="422" class="item-cate f2">Printers, Ink &amp; Toner</li>
                                                                                                                  <li data-value="363" class="item-cate f2">Refurbished Tablets</li>
                                                                                                                              <li data-value="304" class="item-cate f1">Sanders</li>
                                                                                                      </ul>
                  </div>
              </div>
              <input type="text" name="search" id="text-search" value="" placeholder="Search entire store here ..." class="">
              
          </div>
          <div id="sp-btn-search" class="">
                  <button type="button" id="btn-search-category" class="btn btn-default btn-lg">
                      <span>Search</span>
                  </button>
              </div>
          <div class="search-ajax">
              <div class="ajax-loader-container" style="display: none;">
                  <img src="image/catalog/AjaxLoader.gif" class="ajax-load-img" width="30" height="30" alt="plazathemes.com">
              </div>
              <div class="ajax-result-container">
                  <!-- Content of search results -->
              </div>
          </div>
          <input type="hidden" id="ajax-search-enable" value="1">
      </div>

              </div>
            </div>
            
            <div class="clearfix"></div>
          </div>
          </div>
        </div>
        <div class="top-menu ">
          <div class="container">
            <div class="container-inner">
              <div class="col-ver">

          
                              <div class="oc-menu vertical-menu visible-lg" id="oc-menu-5001">
                                  <input type="hidden" id="menu-effect-5001" class="menu-effect" value="none">
                      <div class="oc-menu-bar">
                          <div class="left"><i class="fas fa-bars"></i> <span>Browse categories</span></div>
                          <div class="right"><i class="fas fa-chevron-down" aria-hidden="true"></i></div>
                      </div>
                      <ul class="ul-top-items">
                                                                                                          <li class="li-top-item left  has-child">
                                                                          <a class="a-top-link a-item" href="index1cd8.html?route=product/category&amp;path=451">
                                                                                                                                  <span>Arts &amp; Photography</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="index0152.html?route=product/category&amp;path=451_452" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Brake Tools</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexa100.html?route=product/category&amp;path=451_453" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Driveshafts</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexaf44.html?route=product/category&amp;path=451_455" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Emergency Brake</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index46c1.html?route=product/category&amp;path=451_454" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Spools</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                                                                  <li class="li-top-item left  has-child">
                                                                          <a class="a-top-link a-item" href="index0217.html?route=product/category&amp;path=56">
                                                                                                                                  <span>Biographies</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                                                                                                                                                              <div class="mega-menu-container sub-menu-container ">
                                                          <div class="row">
                                                                                                                                                                                                                                                                                        <div class="col-md-6 sub-item2-content" data-cols="6">
                                                                                                                                                      <h4><a class="a-mega-second-link" href="index1c89.html?route=product/category&amp;path=56_84">Wheel Simulators</a></h4>
                                                                                                                                                          <div class="sub_item3-content">
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index213b.html?route=product/category&amp;path=56_84_329">Bags &amp; Cases</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexbe22.html?route=product/category&amp;path=56_84_330">Binoculars &amp; Scopes</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexff08.html?route=product/category&amp;path=56_84_331">Digital Cameras</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexa3f5.html?route=product/category&amp;path=56_84_332">Film Photography</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index5a63.html?route=product/category&amp;path=56_84_334">Lighting &amp; Studio</a></h5>
                                                                                                                                                                  </div>
                                                                                                                                                  </div>
                                                                                                                                          <div class="col-md-6 sub-item2-content" data-cols="6">
                                                                                                                                                      <h4><a class="a-mega-second-link" href="index65c3.html?route=product/category&amp;path=56_86">Seals &amp; Hubs</a></h4>
                                                                                                                                                          <div class="sub_item3-content">
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index8bf3.html?route=product/category&amp;path=56_86_396">DSLR Body &amp; Lens</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexfa3f.html?route=product/category&amp;path=56_86_397">DSLR Body Only</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index3e0d.html?route=product/category&amp;path=56_86_399">DSLR Lenses</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index548a.html?route=product/category&amp;path=56_86_398">DSLR Package Deals</a></h5>
                                                                                                                                                                  </div>
                                                                                                                                                  </div>
                                                                                                                                          <div class="col-md-6 sub-item2-content" data-cols="6">
                                                                                                                                                      <h4><a class="a-mega-second-link" href="index9137.html?route=product/category&amp;path=56_62">Wheel Rim Screws</a></h4>
                                                                                                                                                          <div class="sub_item3-content">
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexb55a.html?route=product/category&amp;path=56_62_401">Camera Lenses</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexfa97.html?route=product/category&amp;path=56_62_400">DSLR Lenses</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index8cda.html?route=product/category&amp;path=56_62_402">Lens Accessories</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index379c.html?route=product/category&amp;path=56_62_408">Lowepro</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexbfd0.html?route=product/category&amp;path=56_62_410">SanDisk</a></h5>
                                                                                                                                                                  </div>
                                                                                                                                                  </div>
                                                                                                                                          <div class="col-md-6 sub-item2-content" data-cols="6">
                                                                                                                                                      <h4><a class="a-mega-second-link" href="index0991.html?route=product/category&amp;path=56_91">Wheel Bearings</a></h4>
                                                                                                                                                          <div class="sub_item3-content">
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index3038.html?route=product/category&amp;path=56_91_407">Bower</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index2e99.html?route=product/category&amp;path=56_91_411">Celestron</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index7a0a.html?route=product/category&amp;path=56_91_412">Flipbac</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="index5746.html?route=product/category&amp;path=56_91_409">Gary Fong</a></h5>
                                                                                                                                                                          <h5><a class="a-mega-third-link" href="indexc676.html?route=product/category&amp;path=56_91_413">GigaPan</a></h5>
                                                                                                                                                                  </div>
                                                                                                                                                  </div>
                                                                                                                                                                                          
                                                                                                                                            </div>
                                                      </div>
                                                                                                                              
                                          <!-- Flyout Menu -->
                                                                                                      </li>
                                                                                                                                  <li class="li-top-item left  has-child">
                                                                          <a class="a-top-link a-item" href="index8170.html?route=product/category&amp;path=456">
                                                                                                                                  <span>Business &amp; Money</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="index3b99.html?route=product/category&amp;path=456_457" class="a-second-link a-item">
                                                                                      <span class="a-second-title">2-Stroke</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index6513.html?route=product/category&amp;path=456_460" class="a-second-link a-item">
                                                                                      <span class="a-second-title">4-Stroke</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index80d4.html?route=product/category&amp;path=456_459" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Diesel</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexa314.html?route=product/category&amp;path=456_458" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Gasoline</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                                                                  <li class="li-top-item left  has-child">
                                                                          <a class="a-top-link a-item" href="indexb823.html?route=product/category&amp;path=429">
                                                                                                                                  <span>Calendars</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="index2c4c.html?route=product/category&amp;path=429_434" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Turbo Blanket </span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index5b18.html?route=product/category&amp;path=429_435" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Turbo Kits</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index9fca.html?route=product/category&amp;path=429_433" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Turbo Wrap</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexe12a.html?route=product/category&amp;path=429_432" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Turbocharger</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                                                                  <li class="li-top-item left  has-child">
                                                                          <a class="a-top-link a-item" href="index2245.html?route=product/category&amp;path=446">
                                                                                                                                  <span>Children's Books</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="indexc613.html?route=product/category&amp;path=446_450" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Bulbs</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexf95e.html?route=product/category&amp;path=446_448" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Headlights</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index9541.html?route=product/category&amp;path=446_447" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Light Bars</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index885b.html?route=product/category&amp;path=446_449" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Light Kits</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                                                                  <li class="li-top-item left  has-child">
                                                                          <a class="a-top-link a-item" href="index7737.html?route=product/category&amp;path=124">
                                                                                                                                  <span>Comics</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="indexbd0f.html?route=product/category&amp;path=124_305" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Handbag</span>
                                                                                                                                                                          <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                                                                                                  </a>
                                                                                                                                                                  <div class="flyout-third-items left">
                                                                                          <ul class="ul-third-items">
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index675b.html?route=product/category&amp;path=124_305_338" class="a-third-link"><span class="a-third-title">CD Players &amp; Turntables</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexc1b8.html?route=product/category&amp;path=124_305_335" class="a-third-link"><span class="a-third-title">Home Theater Systems</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexaed8.html?route=product/category&amp;path=124_305_337" class="a-third-link"><span class="a-third-title">Receivers &amp; Amplifiers</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexc9e3.html?route=product/category&amp;path=124_305_336" class="a-third-link"><span class="a-third-title">Speakers</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index5863.html?route=product/category&amp;path=124_305_339" class="a-third-link"><span class="a-third-title">Stereo Shelf Systems</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index257f.html?route=product/category&amp;path=124_305_340" class="a-third-link"><span class="a-third-title">Wireless &amp; Multiroom Audio</span></a>
                                                                                                  </li>
                                                                                                                                                                                  </ul>
                                                                                      </div>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexe2fa.html?route=product/category&amp;path=124_125" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Accessories</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index8547.html?route=product/category&amp;path=124_133" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Clothing</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index913e.html?route=product/category&amp;path=124_137" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Shoes</span>
                                                                                                                                                                          <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                                                                                                  </a>
                                                                                                                                                                  <div class="flyout-third-items left">
                                                                                          <ul class="ul-third-items">
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexbdd1.html?route=product/category&amp;path=124_137_347" class="a-third-link"><span class="a-third-title">4K UHD Streaming Media Players</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index7a41.html?route=product/category&amp;path=124_137_341" class="a-third-link"><span class="a-third-title">Apple TV</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexba80.html?route=product/category&amp;path=124_137_342" class="a-third-link"><span class="a-third-title">Fire TV Streaming Media Devices</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index58fb.html?route=product/category&amp;path=124_137_343" class="a-third-link"><span class="a-third-title">Google Chromecast</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index74ac.html?route=product/category&amp;path=124_137_346" class="a-third-link"><span class="a-third-title">NVIDIA Shield</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexc5f9.html?route=product/category&amp;path=124_137_344" class="a-third-link"><span class="a-third-title">Roku</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index26b3.html?route=product/category&amp;path=124_137_348" class="a-third-link"><span class="a-third-title">Streaming Blu-ray Players</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index78a7.html?route=product/category&amp;path=124_137_349" class="a-third-link"><span class="a-third-title">Streaming Media Player Accessories</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexee70.html?route=product/category&amp;path=124_137_345" class="a-third-link"><span class="a-third-title">TiVo</span></a>
                                                                                                  </li>
                                                                                                                                                                                  </ul>
                                                                                      </div>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                                                                  <li class="li-top-item left  ">
                                                                          <a class="a-top-link a-item" href="index6ba1.html?route=product/category&amp;path=427">
                                                                                                                                  <span>Perfomance Filters</span>
                                                                                                                          </a>
                                                                                                  </li>
                                                                                                                                  <li class="li-top-item left  has-child">
                                                                          <a class="a-top-link a-item" href="index062c.html?route=product/category&amp;path=309">
                                                                                                                                  <span>Cookbooks</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="index1b69.html?route=product/category&amp;path=309_376" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Calculators</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index7d8e.html?route=product/category&amp;path=309_425" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Check Trousers</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index61d5.html?route=product/category&amp;path=309_377" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Ink &amp; Toner</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexa729.html?route=product/category&amp;path=309_426" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Low-Cut Jeans</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                                                                  <li class="li-top-item left  ">
                                                                          <a class="a-top-link a-item" href="index1ebe.html?route=product/category&amp;path=428">
                                                                                                                                  <span>Accessories</span>
                                                                                                                          </a>
                                                                                                  </li>
                                                                                                                                  <li class="li-top-item left  ">
                                                                          <a class="a-top-link a-item" href="index98d5.html?route=product/category&amp;path=430">
                                                                                                                                  <span>Education</span>
                                                                                                                          </a>
                                                                                                  </li>
                                                                                                                                  <li class="li-top-item left over has-child">
                                                                          <a class="a-top-link a-item" href="index67c6.html?route=product/category&amp;path=312">
                                                                                                                                  <span>Indoor Living</span>
                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="indexa76f.html?route=product/category&amp;path=312_386" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Bridge</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="indexf490.html?route=product/category&amp;path=312_385" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Hub</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index053e.html?route=product/category&amp;path=312_384" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Repeater</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index7003.html?route=product/category&amp;path=312_387" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Switch</span>
                                                                                                                                                                  </a>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index8c49.html?route=product/category&amp;path=312_308" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Video Games Cosoles</span>
                                                                                                                                                                          <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                                                                                                  </a>
                                                                                                                                                                  <div class="flyout-third-items left">
                                                                                          <ul class="ul-third-items">
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index6de0.html?route=product/category&amp;path=312_308_373" class="a-third-link"><span class="a-third-title">PlayStation 3</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexfbb6.html?route=product/category&amp;path=312_308_372" class="a-third-link"><span class="a-third-title">PlayStation 4</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index85c8.html?route=product/category&amp;path=312_308_375" class="a-third-link"><span class="a-third-title">Xbox 360</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index8472.html?route=product/category&amp;path=312_308_374" class="a-third-link"><span class="a-third-title">Xbox One</span></a>
                                                                                                  </li>
                                                                                                                                                                                  </ul>
                                                                                      </div>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                              <li class="li-top-item li-over li-plus">
                                  <a href="javascript:void(0);" class="a-top-link a-plus a-over"><span>More Categories</span></a>
                              </li>
                              <li class="li-top-item li-over li-minus over">
                                  <a href="javascript:void(0);" class="a-top-link a-minus a-over"><span>Hide Categories</span></a>
                              </li>
                                          </ul>
                          </div>
          
          
        
                        </div>
                            <div class="header-phone">
      <p>Free Support 24/7</p>
      <p>+01-202-555-0181</p>
      </div>
        
                      <div class="col-hoz fix">
                                
                  <div class="oc-menu horizontal-menu oc-menu-bar visible-lg" id="oc-menu-3785">
            
                                  <input type="hidden" id="menu-effect-3785" class="menu-effect" value="none">
                      <ul class="ul-top-items">

                                                                   

                                                                        <li class="li-top-item left " style="float: left">
                                                                          <a class="a-top-link" href="">
                                                                          <RouterLink to="/" exact-active-class="active">
                                                                            <span>Home</span>
                                                                          </RouterLink>
                                                                          </a>
                                                                        </li>

                                                                   

                                                                                                      <li class="li-top-item left has-child" style="float: left">
                                                                          <a class="a-top-link" href="index98dc.html?route=product/category&amp;path=20">
                                                                                                                                  <span>Shop</span>
                                                                                                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                                                                  
                                              
                                                                                                                                          <div class="mega-menu-container sub-menu-container left ">
                                                          <div class="row">
                                                                                                                                                                                                                                                                                                                                                                <div class="col-md-4 sub-item2-content sub-item2-category-content" data-cols="4">
                                                                                                                                                              <h4><a class="a-mega-second-link" href="indexd056.html?route=product/category&amp;path=50">Drills</a></h4>
                                                                                                                                                                  <div class="sub_item3-content">
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index456d.html?route=product/category&amp;path=50_418">Cables &amp; Connectors</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index4711.html?route=product/category&amp;path=50_419">Cleaning Equipment &amp; Kits</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index6da7.html?route=product/category&amp;path=50_420">Computer Speakers</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index821d.html?route=product/category&amp;path=50_421">Graphics Tablets</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index6ca7.html?route=product/category&amp;path=50_359">Microsoft Surface Pro</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index50a0.html?route=product/category&amp;path=50_422">Printers, Ink &amp; Toner</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="indexb74e.html?route=product/category&amp;path=50_363">Refurbished Tablets</a></h5>
                                                                                                                                                                          </div>
                                                                                                                                                          </div>
                                                                          
                                                                          
                                                                          
                                                                                                                                                                                                                                                                                      <div class="col-md-4 sub-item2-content sub-item2-category-content" data-cols="4">
                                                                                                                                                              <h4><a class="a-mega-second-link" href="indexab90.html?route=product/category&amp;path=307">Saws</a></h4>
                                                                                                                                                                  <div class="sub_item3-content">
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index1861.html?route=product/category&amp;path=307_424">All-in-One Computers</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index95dc.html?route=product/category&amp;path=307_423">Computer Cards &amp; Components</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index5fa7.html?route=product/category&amp;path=307_415">Fans, Heatsinks &amp; Cooling</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="indexbf29.html?route=product/category&amp;path=307_416">GPUs / Video Graphics Cards</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index596a.html?route=product/category&amp;path=307_417">Hard Drives &amp; Storage</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index5963.html?route=product/category&amp;path=307_360">Microsoft Surface Go</a></h5>
                                                                                                                                                                                  <h5><a class="a-mega-third-link" href="index27f3.html?route=product/category&amp;path=307_414">Optical Drives</a></h5>
                                                                                                                                                                          </div>
                                                                                                                                                          </div>
                                                                          
                                                                          
                                                                          
                                                                                                                                                                                                              
                                                                          
                                                                                                                                                  <div class="col-md-4 sub-item2-content" data-cols="4">
                                                                                  <p class="widget-html-title"></p>
                                                                                  <div><div class="banner-static static-menu-right">
      <div class="image">
      <a href="#">
      <img src="image/catalog/cmsblock/img-right-menu.jpg" alt="img-right-menu">
      </a>
      </div>
      </div></div>
                                                                              </div>
                                                                          
                                                                                                                                                                                                                                                                                                                                            </div>
                                                      </div>
                                                                                                                              
                                          <!-- Flyout Menu -->
                                                                                                      </li>
                                                                                                      <li class="li-top-item left has-child" style="float: left">
                                                                          <a class="a-top-link" href="index0217.html?route=product/category&amp;path=56">
                                                                                                                                  <span>Tools</span>
                                                                                                                                  <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                                                                  </a>
                                                                                                          <!-- Mega Menu -->
                                          
                                          <!-- Flyout Menu -->
                                                                                  
                                                                                                                                          <div class="flyout-menu-container sub-menu-container left">
                                                          <ul class="ul-second-items">
                                                                                                                                                                                                                                                                                                                                      <li class="li-second-items">
                                                                                  <a href="index1c89.html?route=product/category&amp;path=56_84" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Wheel Simulators</span>
                                                                                                                                                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                                                                                                                                                                                                                                                                          </a>
                                                                                                                                                                  <div class="flyout-third-items left">
                                                                                          <ul class="ul-third-items">
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index213b.html?route=product/category&amp;path=56_84_329" class="a-third-link"><span class="a-third-title">Bags &amp; Cases</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexbe22.html?route=product/category&amp;path=56_84_330" class="a-third-link"><span class="a-third-title">Binoculars &amp; Scopes</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexff08.html?route=product/category&amp;path=56_84_331" class="a-third-link"><span class="a-third-title">Digital Cameras</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexa3f5.html?route=product/category&amp;path=56_84_332" class="a-third-link"><span class="a-third-title">Film Photography</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index5a63.html?route=product/category&amp;path=56_84_334" class="a-third-link"><span class="a-third-title">Lighting &amp; Studio</span></a>
                                                                                                  </li>
                                                                                                                                                                                  </ul>
                                                                                      </div>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index65c3.html?route=product/category&amp;path=56_86" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Seals &amp; Hubs</span>
                                                                                                                                                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                                                                                                                                                                                                                                                                          </a>
                                                                                                                                                                  <div class="flyout-third-items left">
                                                                                          <ul class="ul-third-items">
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index8bf3.html?route=product/category&amp;path=56_86_396" class="a-third-link"><span class="a-third-title">DSLR Body &amp; Lens</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexfa3f.html?route=product/category&amp;path=56_86_397" class="a-third-link"><span class="a-third-title">DSLR Body Only</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index3e0d.html?route=product/category&amp;path=56_86_399" class="a-third-link"><span class="a-third-title">DSLR Lenses</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index548a.html?route=product/category&amp;path=56_86_398" class="a-third-link"><span class="a-third-title">DSLR Package Deals</span></a>
                                                                                                  </li>
                                                                                                                                                                                  </ul>
                                                                                      </div>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index9137.html?route=product/category&amp;path=56_62" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Wheel Rim Screws</span>
                                                                                                                                                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                                                                                                                                                                                                                                                                          </a>
                                                                                                                                                                  <div class="flyout-third-items left">
                                                                                          <ul class="ul-third-items">
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexb55a.html?route=product/category&amp;path=56_62_401" class="a-third-link"><span class="a-third-title">Camera Lenses</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexfa97.html?route=product/category&amp;path=56_62_400" class="a-third-link"><span class="a-third-title">DSLR Lenses</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index8cda.html?route=product/category&amp;path=56_62_402" class="a-third-link"><span class="a-third-title">Lens Accessories</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index379c.html?route=product/category&amp;path=56_62_408" class="a-third-link"><span class="a-third-title">Lowepro</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexbfd0.html?route=product/category&amp;path=56_62_410" class="a-third-link"><span class="a-third-title">SanDisk</span></a>
                                                                                                  </li>
                                                                                                                                                                                  </ul>
                                                                                      </div>
                                                                                                                                                          </li>
                                                                                                                                                  <li class="li-second-items">
                                                                                  <a href="index0991.html?route=product/category&amp;path=56_91" class="a-second-link a-item">
                                                                                      <span class="a-second-title">Wheel Bearings</span>
                                                                                                                                                                                                                                                                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                                                                                                                                                                                                                                                                                                          </a>
                                                                                                                                                                  <div class="flyout-third-items left">
                                                                                          <ul class="ul-third-items">
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index3038.html?route=product/category&amp;path=56_91_407" class="a-third-link"><span class="a-third-title">Bower</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index2e99.html?route=product/category&amp;path=56_91_411" class="a-third-link"><span class="a-third-title">Celestron</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index7a0a.html?route=product/category&amp;path=56_91_412" class="a-third-link"><span class="a-third-title">Flipbac</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="index5746.html?route=product/category&amp;path=56_91_409" class="a-third-link"><span class="a-third-title">Gary Fong</span></a>
                                                                                                  </li>
                                                                                                                                                                                          <li class="li-third-items">
                                                                                                      <a href="indexc676.html?route=product/category&amp;path=56_91_413" class="a-third-link"><span class="a-third-title">GigaPan</span></a>
                                                                                                  </li>
                                                                                                                                                                                  </ul>
                                                                                      </div>
                                                                                                                                                          </li>
                                                                                                                                                                                                                                                                                                                  </ul>
                                                      </div>
                                                                                                                                                                                          </li>
                                                                                                      <li class="li-top-item left " style="float: left">
                                                                          <a class="a-top-link" href="index2724.html?route=information/contact">
                                                                                                                                  <span>Contact us</span>
                                                                                                                          </a>
                                                                                                  </li>
                                                                                                      <li class="li-top-item left " style="float: left">
                                                                          <a class="a-top-link" href="indexf110.html?route=product/special">
                                                                                                                                  <span>Specials</span>
                                                                                                                          </a>
                                                                                                  </li>
                                                                                                      <li class="li-top-item left " style="float: left">
                                                                          <a class="a-top-link" href="index8024.html?route=blog/blog">
                                                                                                                                  <span>Blog</span>
                                                                                                                          </a>
                                                                                                  </li>
                                                                  </ul>
                        
              </div>
          
              
          
        
                          
              </div>
            </div>
          </div>
          
          
          
        </div>
        
      </header>

     

      <RouterView/>

      <!-- Footer -->

      <footer>
	<div class="container">
					    <div class="brand-slider">
  
  <div id="banner0" class="swiper-container swiper-container-horizontal">
    <div class="swiper-wrapper">      <div class="swiper-slide swiper-slide-active" style="width: 170px; margin-right: 30px;"><a href="#"><img src="@/assets/image/cache/catalog/brand/br6-170x58.jpg" alt="br6" class="img-responsive"></a></div>
            <div class="swiper-slide swiper-slide-next" style="width: 170px; margin-right: 30px;"><a href="#"><img src="@/assets/image/cache/catalog/brand/br5-170x58.jpg" alt="br5" class="img-responsive"></a></div>
            <div class="swiper-slide" style="width: 170px; margin-right: 30px;"><a href="#"><img src="@/assets/image/cache/catalog/brand/br4-170x58.jpg" alt="br4" class="img-responsive"></a></div>
            <div class="swiper-slide" style="width: 170px; margin-right: 30px;"><a href="#"><img src="@/assets/image/cache/catalog/brand/br1-170x58.jpg" alt="br1" class="img-responsive"></a></div>
            <div class="swiper-slide" style="width: 170px; margin-right: 30px;"><a href="#"><img src="@/assets/image/cache/catalog/brand/br2-170x58.jpg" alt="br2" class="img-responsive"></a></div>
            <div class="swiper-slide" style="width: 170px; margin-right: 30px;"><a href="#"><img src="@/assets/image/cache/catalog/brand/br3-170x58.jpg" alt="br3" class="img-responsive"></a></div>
      </div>
  </div>
  
</div>
			</div>
	<div class="footer-top ">
	  <div class="container">
		<div class="container-inner">
		<div class="row">
			<div class="col1  col-md-3 col-sm-6 col-xs-12 col-footer">
									    										  										  										  										  										  										  										  										  										  										  										  										  										  <div class="footer-contact">

<div class="footer-content">
<a class="logo-footer" href="#"><img src="@/assets/image/catalog/logo/logo.png" alt="logo-footer"></a>

<ul class="list-unstyled text-content">
<li class="address"><p>Address:</p><p>Example Street 98, HH2 
BacHa, New York, USA</p></li>

<li class="phone"><p>Phone:</p><p>+18088 234 5678</p></li>
<li class="email"><p>Email:</p><p>suport@plazathemes.com</p></li>
</ul>
</div> 		
</div>							 									 									 									 									 									 									 									 									 									 									 									 									 									
  
													
			</div>
			<div class="col2 col-md-3 col-sm-6 col-xs-12 col-footer">
				<div class="footer-title"><h5>Information</h5></div>
				<div class="footer-content">
					<ul class="list-unstyled text-content">
											  					  <li><a href="index8816.html?route=information/information&amp;information_id=4">About Us</a></li>
					  					  <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery Information</a></li>
					  					  <li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy Policy</a></li>
					  					  <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms &amp; Conditions</a></li>
					  					  					  <li><a href="index2724.html?route=information/contact">Contact Us</a></li>
					  <li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
					  <li><a href="indexe223.html?route=account/newsletter">Newsletter</a></li>
					</ul>
				</div>
			  </div>
			  <div class="col3 col-md-3 col-sm-6 col-xs-12 col-footer">
				<div class="footer-title"><h5>Extras</h5></div>
				<div class="footer-content">
					<ul class="list-unstyled text-content">
						<li><a href="indexd773.html?route=product/manufacturer">Brands</a></li>
						<li><a href="index4dd2.html?route=account/voucher">Gift Certificates</a></li>
						<li><a href="index3d18.html?route=affiliate/login">Affiliate</a></li>
						<li><a href="indexf110.html?route=product/special">Specials</a></li>
						<li><a href="index71ba.html?route=account/return/add">Returns</a></li>
						<li><a href="indexe223.html?route=account/order">Order History</a></li>
						<li><a href="indexe223.html?route=account/wishlist">Wish List</a></li>
						
					</ul>
				</div>
			  </div>	
			  
			<div class="col4  col-md-3 col-sm-6 col-xs-12 col-footer">
									    <div class="newletter-subscribe-container">
<div class="container-inner">
<div class="newletter-subscribe">
	<div id="boxes-normal" class="newletter-container">
		<div style="" id="dialog-normal">
			<div class="box">
				<div class="newletter-title">
					<h5>Newsletter Subscribe</h5>
					<p class="des">We’ll never share your email address with a third-party.</p>
				</div>
				<div class="box-content newleter-content">
					
					<div id="frm_subscribe-normal">
						<form name="subscribe" id="subscribe-normal">
							<input type="text" value="" name="subscribe_email" id="subscribe_email-normal" placeholder="Enter you email address here...">
							<input type="hidden" value="" name="subscribe_name" id="subscribe_name">
							<a class="btn" onclick="email_subscribe()" title="Subscribe"><span>Subscribe</span></a>
							 
							<div id="notification-normal"></div>  
						</form>
						
					</div><!-- /#frm_subscribe -->
					
				</div><!-- /.box-content -->
			</div>
		</div>
</div>
</div>
</div>
</div>
  
													    										  										  										  <div class="follow">
<label>Stay Connected</label>
<ul class="link-follow">
<li><a class="facebook ion-social-facebook" title="Facebook" href="https://www.facebook.com/plazathemes1"><span>facebook</span></a></li>
<li><a class="twitter ion-social-twitter" title="Twitter" href="https://twitter.com/plazathemes"><span>twitter</span></a></li>
<li><a class="google ion-social-googleplus-outline" title="Google" href="#"><span>google </span></a></li>

<li><a class="youtube ion-social-youtube" title="Youtube" href="https://www.youtube.com/user/plazathemes"><span>youtube </span></a></li>

</ul>
</div> 									 									 									
  
								
			</div>
		</div>
		</div>
	  </div>
	</div>

	<div class="footer-bottom ">
		<div class="container">
			<div class="container-inner">
									    										  										  										  <div class="payment">
<p>Suspendisse in auctor augue. Cras fermentum est ac fermentum tempor. Etiam vel magna volutpat, posuere eros</p>
<a href="#"><img src="@/assets/image/catalog/cmsblock/payment.png" alt="payment"></a>
</div> 									 									 									
  
								<div class="footer-copyright">
					<p>Copyright © 2019 <a href="http://www.plazathemes.com/">PlazaThemes</a>. All Right Reserved.<span>Design by Plazathemes.com</span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="back-top"><i class="ion-ios-arrow-up"></i></div>
      </footer>

    </div>

  </div>
</template>

<style>
@import '@/assets/catalog/view/javascript/jquery/owl-carousel/css/owl.carousel.min.css';
@import '@/assets/catalog/view/javascript/jquery/owl-carousel/css/owl.theme.green.min.css';
@import '@/assets/catalog/view/theme/tt_smartbooks4/stylesheet/ocmegamenu/menu.css';
@import '@/assets/catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/css/animate.css';
@import '@/assets/catalog/view/javascript/bootstrap/css/bootstrap.min.css';
@import '@/assets/catalog/view/javascript/fontawesome-free-541/css/brands.min.css';
@import '@/assets/catalog/view/javascript/fontawesome-free-541/css/solid.min.css';
@import '@/assets/catalog/view/javascript/font-awesome/css/font-awesome.min.css';
@import '@/assets/catalog/view/javascript/pe-icon-7-stroke/css/pe-icon-7-stroke.css';
@import '@/assets/catalog/view/javascript/pe-icon-7-stroke/css/helper.css';
@import '@/assets/catalog/view/javascript/elegant-font/style.css';
@import '@/assets/catalog/view/javascript/ionicons/css/ionicons.css';
@import '@/assets/catalog/view/javascript/simple-line-icons/css/simple-line-icons.css';
@import '@/assets/catalog/view/javascript/stroke-gap-icons/css/stroke-gap-icons.css';
@import '@/assets/catalog/view/javascript/linearicons-free/style.css';
@import '@/assets/catalog/view/javascript/plaza-icon/style.css';
@import '@/assets/catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/ocslideshow/ocslideshow.css';
@import '@/assets/catalog/view/theme/tt_smartbooks4/stylesheet/stylesheet.css';
@import '@/assets/catalog/view/theme/tt_smartbooks4/stylesheet/ocquickview/ocquickview.css';
@import '@/assets/catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/ocajaxlogin/css/ocajaxlogin.css';
@import '@/assets/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css';
@import '@/assets/catalog/view/theme/tt_smartbooks4/stylesheet/opentheme/ocpagebuilder.css';
@import '@/assets/catalog/view/javascript/jquery/swiper/css/swiper.min.css';
@import '@/assets/catalog/view/javascript/jquery/swiper/css/opencart.css';

    ul li a .active {
      background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-7847 .oc-menu-bar {
        background: #FFFFFF;
        color: #333333;
		padding: 14px 15px 14px 15px;
		position: relative;
    }
    #oc-menu-7847.oc-menu-bar {
        background: #FFFFFF;
        color: #333333;
    }
    #oc-menu-7847 .ul-top-items .li-top-item {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-7847 .ul-top-items .li-top-item .a-top-link {
        padding: 5px 20px 5px 20px;
        color: #282828;
        font-size: 14px;
        line-height: 25px;
        text-transform: uppercase;
        font-weight: 700;
    }
    #oc-menu-7847 .ul-top-items .li-top-item:hover, #oc-menu-7847 .ul-top-items .li-top-item.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-7847 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-7847 .ul-top-items .li-top-item.active .a-top-link{
        color: #62AB00;
        font-weight: 700;
    }
    #oc-menu-7847 .mega-menu-container {
        width: 100%;
        background: #FFFFFF;
        padding: 30px 30px 30px 30px;
        
    }
    #oc-menu-7847 .mega-menu-container .a-mega-second-link,#oc-menu-7847 .mega-menu-container .widget-html-title {
        color: #FFFFFF;
    }
	#oc-menu-7847 .mega-menu-container .a-mega-third-link {
        color: #FFFFFF;
    }
    #oc-menu-7847 .ul-second-items .li-second-items {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-7847 .ul-second-items .li-second-items:hover, #oc-menu-7847 .ul-second-items .li-second-items.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-7847 .ul-second-items .li-second-items .a-second-link {
        color: #282828;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 600;
    }
    #oc-menu-7847 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-7847 .ul-second-items .li-second-items.active .a-second-link {
        color: #62AB00;
        font-weight: 600;
    }
    #oc-menu-7847 .ul-third-items .li-third-items {
        background: #FFFFFF;
    }
    #oc-menu-7847 .ul-third-items .li-third-items:hover, #oc-menu-7847 .ul-third-items .li-third-items.active {
        background: #FFFFFF;
    }
    #oc-menu-7847 .ul-third-items .li-third-items .a-third-link {
        color: #757575;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-7847 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-7847 .ul-third-items .li-third-items.active .a-third-link {
        color: #62AB00;
        font-weight: 400;
    }
    #oc-menu-5001 .oc-menu-bar {
        background: #62AB00;
        color: #FFFFFF;
		padding: 12px 20px 12px 20px;
		position: relative;
    }
    #oc-menu-5001.oc-menu-bar {
        background: #62AB00;
        color: #FFFFFF;
    }
    #oc-menu-5001 .ul-top-items .li-top-item {
        background: #FFFFFF;
        color: #555555;
    }
    #oc-menu-5001 .ul-top-items .li-top-item .a-top-link {
        padding: 10px 25px 10px 28px;
        color: #555555;
        font-size: 14px;
        line-height: 26px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-5001 .ul-top-items .li-top-item:hover, #oc-menu-5001 .ul-top-items .li-top-item.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-5001 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-5001 .ul-top-items .li-top-item.active .a-top-link{
        color: #62AB00;
        font-weight: 400;
    }
    #oc-menu-5001 .mega-menu-container {
        width: 600px;
        background: #FFFFFF;
        padding: 30px 30px 8px 30px;
        
    }
    #oc-menu-5001 .mega-menu-container .a-mega-second-link,#oc-menu-5001 .mega-menu-container .widget-html-title {
        color: #282828;
    }
	#oc-menu-5001 .mega-menu-container .a-mega-third-link {
        color: #666666;
    }
    #oc-menu-5001 .ul-second-items .li-second-items {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-5001 .ul-second-items .li-second-items:hover, #oc-menu-5001 .ul-second-items .li-second-items.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-5001 .ul-second-items .li-second-items .a-second-link {
        color: #282828;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 600;
    }
    #oc-menu-5001 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-5001 .ul-second-items .li-second-items.active .a-second-link {
        color: #62AB00;
        font-weight: 600;
    }
    #oc-menu-5001 .ul-third-items .li-third-items {
        background: #FFFFFF;
    }
    #oc-menu-5001 .ul-third-items .li-third-items:hover, #oc-menu-5001 .ul-third-items .li-third-items.active {
        background: #FFFFFF;
    }
    #oc-menu-5001 .ul-third-items .li-third-items .a-third-link {
        color: #666666;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-5001 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-5001 .ul-third-items .li-third-items.active .a-third-link {
        color: #62AB00;
        font-weight: 400;
    }
    #oc-menu-3785 .oc-menu-bar {
        background: #FFFFFF;
        color: #FFFFFF;
		padding: 15px 15px 15px 15px;
		position: relative;
    }
    #oc-menu-3785.oc-menu-bar {
        background: #FFFFFF;
        color: #FFFFFF;
    }
    #oc-menu-3785 .ul-top-items .li-top-item {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-3785 .ul-top-items .li-top-item .a-top-link {
        padding: 15px 15px 15px 15px;
        color: #282828;
        font-size: 16px;
        line-height: 24px;
        text-transform: uppercase;
        font-weight: 400;
    }
    #oc-menu-3785 .ul-top-items .li-top-item:hover, #oc-menu-3785 .ul-top-items .li-top-item.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-3785 .ul-top-items .li-top-item:hover .a-top-link, #oc-menu-3785 .ul-top-items .li-top-item.active .a-top-link{
        color: #62AB00;
        font-weight: 400;
    }
    #oc-menu-3785 .mega-menu-container {
        width: 768px;
        background: #FFFFFF;
        padding: 35px 35px 32px 35px;
        
    }
    #oc-menu-3785 .mega-menu-container .a-mega-second-link,#oc-menu-3785 .mega-menu-container .widget-html-title {
        color: #282828;
    }
	#oc-menu-3785 .mega-menu-container .a-mega-third-link {
        color: #666666;
    }
    #oc-menu-3785 .ul-second-items .li-second-items {
        background: #FFFFFF;
        color: #282828;
    }
    #oc-menu-3785 .ul-second-items .li-second-items:hover, #oc-menu-3785 .ul-second-items .li-second-items.active {
        background: #FFFFFF;
        color: #62AB00;
    }
    #oc-menu-3785 .ul-second-items .li-second-items .a-second-link {
        color: #282828;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
    }
    #oc-menu-3785 .ul-second-items .li-second-items:hover .a-second-link, #oc-menu-3785 .ul-second-items .li-second-items.active .a-second-link {
        color: #62AB00;
        font-weight: 600;
    }
    #oc-menu-3785 .ul-third-items .li-third-items {
        background: #FFFFFF;
    }
    #oc-menu-3785 .ul-third-items .li-third-items:hover, #oc-menu-3785 .ul-third-items .li-third-items.active {
        background: #FFFFFF;
    }
    #oc-menu-3785 .ul-third-items .li-third-items .a-third-link {
        color: #666666;
        font-size: 14px;
        text-transform: capitalize;
        font-weight: 400;
    }
    #oc-menu-3785 .ul-third-items .li-third-items:hover .a-third-link, #oc-menu-3785 .ul-third-items .li-third-items.active .a-third-link {
        color: #62AB00;
        font-weight: 400;
    }
</style>