<!--메인 섹션 시작 { -->
<section class="sub">
  <article class="bestArti ani" id="menu3">
    <div class="inner">
      <div class="mainTitleBox mobile">
        <div class="t1">Story</div>
        <div class="title">실제 테헤란을 찾아주신 고객님들의 이야기입니다.</div>
      </div>
      <div class="mainTitleBox pc">
        <div class="t1">Story</div>
        <div class="content">실제 테헤란을 찾아주신 고객님들의 이야기입니다.</div>
      </div>
      <div class="slideWrap">
        <div class="swiper bestSwiper">
          <ul class="slideBtnWrap">
            <button type="button" class="slideBtn prevBtn"><img src="/assets/img/sub/bestArti/slidePrevBtn.svg" alt="이전" class="icon" /></button>
            <button type="button" class="slideBtn nextBtn"><img src="/assets/img/sub/bestArti/slideNextBtn.svg" alt="다음" class="icon" /></button>
          </ul>
          <div class="swiper-wrapper">
          <?php foreach ($storyHead as $sh) { ?>
            <div class="swiper-slide">
              <div class="item">
                <div class="imgBox img1" style="background-image: url('<?=$thumbUrl.$sh['thumbnail']?>');">
                  <!-- 
                  예시 이미지 사용 안할시에는 img1클래스를 제거해주세요. 
                  배경이미지는 imgBox에 background-image로 넣어주시면 됩니다. 
                -->
                  <a href="/story/view/<?= $sh['no'] ?>" class=""></a>
                </div>
                <div class="contentBox">
                  <div class="title">한 주의 스토리</div>

                  <ul class="writer">
                    <li class="brown">이번 주 스토리 작성자 </li>
                    <li class="txt">
                      <img src="/assets/img/sub/bestArti/bi_person-circle.svg" alt="프로필" class="icon" />
                      <p><?=$sh['name']?></p>
                    </li>
                  </ul>

                  <a href="/story/view/<?= $sh['no'] ?>">
                    <div class="content">
                    <?=$sh['title']?>
                    </div>
                  </a>
                  <div class="moreBtn">
                    <a href="/story/view/<?= $sh['no'] ?>" class="reservedBtn">
                      <div class="txt">더 알아보기</div>
                      <div class="arrowBox">
                        <img src="/assets/img/common/commonArrow.svg" alt="화살표" class="icon">
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          </div>
          <div class="swiper-scrollbar"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </article>

  <article class="storyArti ani">
    <div class="inner">
      <ul class="storyList">
      <?php foreach ($stories as $st) { ?>
        <li>
          <a href="/story/view/<?=$st['no']?>">
            <div class="item">
              <div class="img" style="background-image: url('<?= $thumbUrl.$st['thumbnail'] ?>');"></div>
              <div class="txtBox">
                <div class="title">
                <?= $st['title'] ?>
                </div>
                <div class="dateBox">
                  <div class="date"><?=cu_conv_dateYear($st['create_date'])?></div>
                  <div class="views">조회수 <?=($st['hit_adjust_display']==0) ? $st['hit'] : $st['hit_adjust']?>회</div>
                </div>
              </div>
            </div>
          </a>
        </li>
      <?php } ?>
      </ul>

      <div class="pagingWrap">
        <!-- custom_pagin -->
        <?= $pagerStory->links('story', 'custom_pagin') ?>
        <!-- // custom_pagin -->
      </div>
    </div>
  </article>
</section>
<!-- } 메인 섹션 끝-->

<!-- 전용 스크립트 -->
<script src="/assets/script/story.js"></script>