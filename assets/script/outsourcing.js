$(() => {
	// fixBtnChange();
	osScollHandler();
    commonDisplay();
    rateplanActive();
    faqActive();
	consultPopupBtn();

	document.addEventListener("scroll", function () {
		/* 스크롤 애니메이션 */
		osScollHandler();
	});
});

// 하단 버튼 이미지 바꾸기 
// const fixBtnChange = () => {
// 	$('.fixCallBtn img').attr('src', '/assets/img/outsourcing/common/fixCallBtn.svg');
// }

// 스크롤 애니메이션션
const osScollHandler = () => {
    const scroll_y = window.scrollY + window.innerHeight / 1.5;
    const animationContainer = document.querySelectorAll(".osAni");

    animationContainer.forEach((element) => {
        const itemTop = element.getBoundingClientRect().top + window.scrollY;
		const triggerPoint = window.scrollY + (window.innerHeight * (80 / 100)); // 화면의 90/100(99%) 지점

		// 스크롤 위치에 따라 'on' 클래스 추가/제거
		if (triggerPoint > itemTop) {
			element.classList.add("on");
		} else {
			element.classList.remove("on");
		}
    });
};

// 하단 상담신청 가리기
const commonDisplay = () => {
    $('.applyPcSec, .applyMoSec').hide();
    // $('header').addClass('white');
};

// 요금제 신청하기 
const rateplanActive = () => {
	/// 요금제 모바일 스와이퍼
	var swiperBtnName = ['Standard', 'Premium', 'Vip'];

	if($(window).width() < 1025) {
		var swiper = new Swiper(".rateplanWrap", {
			slidesPerView: 1,
			loop: false,
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
				bulletActiveClass: "on",
				renderBullet: function (index, className) {
					return '<span class="' + className + '">' + (swiperBtnName[index]) + '</span>';
				},
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			on: {
				slideChange: function () {
					updatePaginationClass(this.activeIndex);
				}
			}
		});
		
		// 현재 페이지 인덱스를 pagination에 추가하는 함수
		function updatePaginationClass(activeIndex) {
			var $pagination = $(".swiper-pagination");
		
			// 기존에 추가된 page-숫자 클래스 제거
			$pagination.removeClass(function (index, className) {
				return (className.match(/page-\d+/g) || []).join(" ");
			});
		
			// 현재 인덱스에 해당하는 클래스 추가
			$pagination.addClass("page-" + activeIndex);
		}
		
		// 버튼 클릭 시 페이지 업데이트 (필요할 경우 추가)
		$(".swiper-button-next, .swiper-button-prev").on("click", function () {
			updatePaginationClass(swiper.activeIndex);
		});
		
	}


	// 요금제 상담하기 버튼 클릭
	$('.rateplanArti').find('.changeCardBtn').click(function () {
		$(this).parents('.type').find('.page.start').hide();
		$(this).parents('.type').find('.page.end').css('display', 'block');
	});
	$('.rateplanArti').find('.backCardBtn').click(function () {
		$(this).parents('.type').find('.page.end').hide();
		$(this).parents('.type').find('.page.start').css('display', 'flex');
	});

	// 요금제 상담 신청완료
	const sendData = [];
	$('.rateplanArti').find('.clickToComplete').click(function (event) {
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
				confirmButtonColor: "#000",
				confirmButtonText: "확인",
			});
		} else if (!phone) {
			Swal.fire({
				icon: "warning",
				title: "휴대폰 번호 미입력",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#000",
				confirmButtonText: "확인",
			});
		} else {
			const sendData = {
				category: cate+" / 아웃소싱",
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
						confirmButtonColor: "#000",
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

// 자주 묻는 질문 동작
const faqActive = () => {
    $('.question').click(function (event) {
        $(this).parent().toggleClass('on');
        $(this).parent().find('.answer').stop().slideToggle(300);
    });
};

// 상담 팝업 
const consultPopupBtn = () => {
	$(".outsourcing .mainArti .clickToConsult").click(function () {
		let targetContainer;

		if($(window).width() > 650) {
			targetContainer = $('.outsourcing .mainArti .txtWrap');
		} else {
			targetContainer = $('.outsourcing')
		}

		if (targetContainer.length && $('.consultingBoxWrap').length === 0) {
			let closeBtnSrc = $(window).width() > 650 
				? "/assets/img/outsourcing/mainArti/consultCloseBtn.svg"
				: "/assets/img/outsourcing/mainArti/consultCloseBtnBK.svg";

			targetContainer.append(`
				<div class="consultingBoxWrap">
					<button type="button" class="closeBtn">
						<img src="${closeBtnSrc}" alt="상담신청 닫기 버튼" />
					</button>
					<div class="consultingBox">
						<div class="boxInner">
							<div class="tit">
								상세한 경리대행 상담을<br />
								세무사가 직접 도와드리겠습니다.
							</div>
							<div class="sub">
								연락처를 남겨주시면 순차적으로 연락드리겠습니다.
								<span>*상담에 비용이 발생하지 않습니다.</span>
							</div>
							<form action="">
								<ul>
									<li>
										<label for="phone"><span>[필수]</span> 연락처를 입력해주세요.</label>
										<input type="tel" id="phone" class="ipt" name="phone" placeholder="휴대폰 번호를 입력해주세요.">
									</li>
								</ul>
								<label class="agreeBox">
									<input type="checkbox" name="agree">
									<div class="txt">상담을 위한 전화 및 문자메시지 수신에 동의합니다.</div>
								</label>
								<div class="consultBtnWrap">
									<button type="button" class="submitBtn">신청하기</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			`);

			setTimeout(() => {
				$('.consultingBoxWrap').addClass('show');
			}, 10);
		} 
	});

	$(document).on('click', '.consultingBoxWrap .closeBtn', function () {
		$('.consultingBoxWrap').removeClass('show');
		setTimeout(() => {
			$(this).closest('.consultingBoxWrap').remove();
		}, 500);
	});

	// 모두 입력 되었을 때 버튼 활성화
	const checkFormValues = () => {
		const inputValue = $('.consultingBox #phone').val();    // phone 값
		const agreeChecked = $('.consultingBox input[name="agree"]').is(':checked'); // 개인정보 수집 동의 체크 값

		// 모든 조건이 충족되었는지 확인
		if (inputValue && agreeChecked) {
			$('.consultingBox .consultBtnWrap .submitBtn').addClass('active');
		} else {
			$('.consultingBox .consultBtnWrap .submitBtn').removeClass('active');
		}
    };

	$(document).on('change', 'input[name="agree"]', function() {
        checkFormValues();
    });

	$(document).on('input', '#phone', function() {
        checkFormValues();
    });

	// 신청하기 버튼 클릭
	$(document).on('click', '.consultingBoxWrap .submitBtn', function (event) {
		let phone = $(event.target)
			.parents("form")
			.find("input[name='phone']")
			.val();
		let agree = $(event.target)
			.parents("form")
			.find("input[name='agree']")
			.is(':checked');

		if (!phone) {
			Swal.fire({
				icon: "warning",
				title: "휴대폰 번호 미입력",
				text: "휴대폰 번호를 입력하세요.",
				confirmButtonColor: "#000",
				confirmButtonText: "확인",
			});
		} else if (!agree) {
			Swal.fire({
				icon: "warning",
				title: "동의 항목 미체크",
				text: "상담을 위한 수신에 동의해주세요.",
				confirmButtonColor: "#000",
				confirmButtonText: "확인",
			});
		} else {
			const sendData = {
				category: "아웃소싱 상단",
				phone: phone,
				sites: "세무법인 테헤란",
				type: "main_realtime",
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
						confirmButtonColor: "#000",
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
