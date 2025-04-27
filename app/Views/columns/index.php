<!--메인 섹션 시작 { -->
<section class="sub">
  <article class="bestArti ani" id="menu3">
    <div class="inner">
      <div class="mainTitleBox mobile">
        <div class="t1">Columns</div>
        <div class="title">한 주의 칼럼</div>
      </div>
      <div class="mainTitleBox pc">
        <div class="t1">Columns</div>
        <div class="content">엄선된 칼럼을 소개합니다</div>
      </div>
      <div class="slideWrap">
        <div class="swiper bestSwiper">
          <ul class="slideBtnWrap">
            <button type="button" class="slideBtn prevBtn"><img src="/assets/img/sub/bestArti/slidePrevBtn.svg" alt="이전" class="icon" /></button>
            <button type="button" class="slideBtn nextBtn"><img src="/assets/img/sub/bestArti/slideNextBtn.svg" alt="다음" class="icon" /></button>
          </ul>
          <div class="swiper-wrapper">
          <?php foreach ($columnsHead as $column) { ?>
            <div class="swiper-slide">
              <div class="item">
                <div class="imgBox img1" style="background-image: url('<?= $thumbUrl.$column['thumbnail'] ?>');">
                  <!-- 
                  예시 이미지 사용 안할시에는 img1클래스를 제거해주세요. 
                  배경이미지는 imgBox에 background-image로 넣어주시면 됩니다. 
                -->
                  <a href="/columns/view/<?= $column['no'] ?>" class=""></a>
                </div>
                <div class="contentBox">
                  <div class="title">한 주의 칼럼</div>

                  <ul class="writer">
                    <li class="brown">이번 주 칼럼 작성자 </li>
                    <li class="txt">
                      <img src="/assets/img/sub/bestArti/bi_person-circle.svg" alt="프로필" class="icon" />
                      <p><?= $column['expert_name'] ?></p>
                    </li>
                  </ul>

                  <a href="/columns/view/<?= $column['no'] ?>">
                    <div class="content">
                    <?= $column['title'] ?>
                    </div>
                  </a>
                  <div class="moreBtn">
                    <a href="/columns/view/<?= $column['no'] ?>" class="reservedBtn">
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

  <article class="columnsArti ani">
    <div class="inner">
      <ul class="columnList">
      <?php foreach ($columns as $column) { ?>
        <li>
          <a href="/columns/view/<?= $column['no'] ?>">
            <div class="item">
              <div class="category"><?= $column['category'] ?></div>
              <div class="title">
              <?= $column['title'] ?>
              </div>
              <div class="writer"><?= $column['expert_name'] ?></div>
              <div class="dateBox">
                <div class="date"><?=cu_conv_dateYear($column['create_date'])?></div>
                <div class="arrowBox">
                  <img src="/assets/img/common/commonArrow.svg" alt="화살표" class="white icon" />
                  <img src="/assets/img/common/blueArrow.svg" alt="화살표" class="blue icon" />
                  <img src="/assets/img/common/boardArrow.svg" alt="화살표" class="mobile icon" />
                </div>
              </div>
            </div>
          </a>
        </li>
        <?php } ?>
      </ul>

      <div class="pagingWrap">
        <!-- custom_pagin -->
        <?= $pagerColumns->links('columns', 'custom_pagin') ?>
        <!-- // custom_pagin -->
      </div>
    </div>
  </article>
</section>
<!-- } 메인 섹션 끝-->
  <!-- 전용 스크립트 -->
<script src="/assets/script/column.js"></script>