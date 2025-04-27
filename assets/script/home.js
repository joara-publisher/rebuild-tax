$(() => {
	mainPopup();
	isScrolledToTop();
	bannerSwiper();
	costConsultActive();
	memberSwiper();
	caseSwiper();
});

$(document).ready(function(){
	document.addEventListener("scroll", function () {
		/* 스크롤 애니메이션 */
		isScrolledToTop();
	});
});

// 메인 팝업
const mainPopup = () => {
	if(getCookie('popup_noraml')=='1'){
		$('.popup').hide();
	}

	$('.popCloseBtn').click(function(){
		if($(this).parent().find('input').prop('checked')){
			setCookie('popup_noraml', 1);
		}
		$('.popup').hide();
		return false;
	});
}; 

function isScrolledToTop() {
	var container = document.documentElement; // 스크롤할 컨테이너 선택 (document.documentElement는 페이지의 최상위 요소, 즉 <html> 요소를 의미합니다.)
	var scrollTop =
		container.scrollTop || window.pageYOffset || document.body.scrollTop;

	if (scrollTop == 0) {
		$(".applyMoSec .applyShowBtn").removeClass("show");
	}

	// 결과 반환
	return scrollTop;
}

const bannerSwiper = () => {
	new Swiper('.bannerArti .swiper-container', {
		slidesPerView: 1,
		spaceBetween: 6,
		initialSlide: 3,
		loop: true,
		autoplay: {
			delay: 1000,
			disableOnInteraction: false,
		},
		breakpoints: {
			650: {
				spaceBetween: 10,  // 화면 너비 650px 이하 시 2개 보이기
			},
		}
	});
};

const costConsultActive = () => {
	$('.costBoxWrap').find('.clickToCost').click(function () {
		$(this).parents('.costBox').addClass('active');
		$(this).parents('.formWrap').find('.page:eq(0)').hide();
		$(this).parents('.formWrap').find('.page:eq(1)').css('display', 'flex');
	});

	const sendData = [];
	$('.costBoxWrap').find('.clickToComplete').click(function (event) {
		let name = $(event.target)
			.parents("form")
			.find("input[name='name']")
			.val();
		let phone = $(event.target)
			.parents("form")
			.find("input[name='phone']")
			.val();
		let cate = $(event.target)
			.parents("form")
			.find("input[name='category']")
			.val();

		if (!name) {
			Swal.fire({
				icon: "warning",
				title: "이름 미입력",
				text: "이름을 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else if (!phone) {
			Swal.fire({
				icon: "warning",
				title: "휴대폰 번호 미입력",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#2B4039",
				confirmButtonText: "확인",
			});
		} else {
			const sendData = {
				category: cate+" / 세무기장",
				name: name,
				phone: phone,
				type: "main_realtime",
				sites: "세무법인 테헤란",
			};

			$.ajax({
				type: "POST",
				url: "",
				data: sendData,
				success: () => {
					Swal.fire({
						icon: "success",
						title: "상담신청 완료",
						text: "신청이 완료되었습니다.",
						confirmButtonColor: "#2B4039",
						confirmButtonText: "확인",
					}).then(() => {
						location.reload();
					});
				},
				error: () => {
					Swal.fire({
						icon: "error",
						title: "오류 발생",
						html: "처리 중 오류가 발생하였습니다.<br>잠시 후 다시 시도해주세요.",
						confirmButtonColor: "#000",
						confirmButtonText: "확인",
					});
				},
			});
		}
	});
};

const memberSwiper = () => {
	// new Swiper('.memberArti .swiper-container', {
	// 	slidesPerView: 5,
	// 	spaceBetween: 10,
	// 	slidesPerGroup: 1,
	// 	loop: false,
	// 	autoplay: {
	// 		delay: 3000,
	// 		disableOnInteraction: false,
	// 	},
	// 	scrollbar: {
	// 		el: ".swiper-scrollbar", // 스크롤바 컨테이너
	// 		draggable: true,        // 드래그 가능하도록 설정
	// 		hide: false,            // 스크롤바 항상 보이기 (true로 설정 시 필요시만 표시)
	// 	},
	// 	breakpoints: {
	// 		650: {
	// 			slidesPerView: 2,
	// 		},
	// 		1000: {
	// 			slidesPerView: 3,
	// 		},
	// 		1280: {
	// 			slidesPerView: 4,
	// 		},
	// 	}
	// });

	new Swiper('.memberArti .swiper-container', {
		slidesPerView: 6,
		spaceBetween: 10,
		slidesPerGroup: 1,
		loop: false,
		autoplay: false,
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true,
			hide: false,
		},
		navigation: false,
		pagination: false,
		mousewheel: {
			releaseOnEdges: true, // 가장자리에서 스와이퍼가 페이지 스크롤로 넘겨지도록 설정
		},
		breakpoints: {
			400: {
				slidesPerView: 2,
				slidesPerGroup: 2,
			},
			1000: {
				slidesPerView: 3,
				slidesPerGroup: 2,
			},
			1500: {
				slidesPerView: 4,
				slidesPerGroup: 2,
			}
		}
	});	
};

const caseSwiper = () => {
	new Swiper('.caseArti .caseSlide.pcList', {
		autoplay: {
			delay: 1,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
		},
		spaceBetween: 20,
		speed: 3000,
		touchRatio: 0,
		loop: true,
		slidesPerView: 'auto',
		observer: true,
		observeParents: true,
		breakpoints: {
			1200: {
				slidesPerView: 4,
				spaceBetween: 18,
			},
			1520: {
				slidesPerView: 5,
				spaceBetween: 18,
			},
			1600: {
				slidesPerView: 6,
				spaceBetween: 18,
			}
		}
	});
};

