<!--메인 섹션 시작 { -->
<section class="sub">
  <article class="caseArti2 ani" id="case">
    <div class="inner">
      <div class="searchBox">
        <div class="searchWrap">
          <input type="text" class="ipt" placeholder="키워드 검색" value="<?=$searchText?>" />
          <button type="button" class="searchBtn"><img src="/assets/img/sub/caseArti2/searchIcon.svg" alt="검색" class="icon" /></button>
        </div>
      </div>
    </div>
    <div class="tabContainer">
      <div class="inner">
        <ul class="tabBtnList">
        <li><button type="button" class="item <?= $tags === "" || !$tags ? "active" : "" ?>" value="">전체</button></li>
        <li><button type="button" class="item <?= $tags === "세무기장" ? "active" : "" ?>" value="세무기장">세무기장</button></li>
        <li><button type="button" class="item <?= $tags === "재산세" ? "active" : "" ?>" value="재산세">재산세</button></li>
        </ul>
      </div>
      <div class="brownBg">
        <div class="inner">
          <input type="hidden" name="search" value="">

          <ul class="cateTabContentList">
            <li class="active">
              <ul class="caseList ul-victim">
              <?php foreach ($cases as $case) { ?>
                <li>
                  <a href="/cases/view/<?= $case['no'] ?>">
                    <div class="item">
                      <div class="imgBox bg1" style="background-image: url('<?= $thumbUrl.$case['thumbnail'] ?>');"></div>
                      <div class="contentBox">
                        <div class="t1">
                          <div class="txt"><?= $case['case_number'] ?></div>
                          <img src="/assets/img/sub/caseArti2/arrow.svg" alt="화살표" class="icon" />
                        </div>
                        <div class="date"><?=cu_conv_date($case['create_date'])?></div>
                      </div>
                    </div>
                  </a>
                </li>
                <?php } ?>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="inner">
      <div class="pagingWrap">
        <!-- custom_pagin -->
        <?= $pagerCases->links('cases', 'custom_pagin') ?>
        <!-- // custom_pagin -->
      </div>
    </div>
  </article>
</section>
<!-- } 메인 섹션 끝-->


<!-- 전용 스크립트 -->
<script src="/assets/script/cases.js"></script>