<!-- 게시판상담 섹션 시작 { -->
<div class="sub">
    <article class="counsellingArti ani">
        <div class="inner">
            <div class="tabMenu">
                <ul>
                    <li><a href="/counseling/visit">방문상담</a></li>
                    <li class="active">게시판 상담</li>
                </ul>
            </div>
            <div class="tabCont">
                <div class="contWrap">
                <div class="contTit">게시판 상담</div>
                <div class="contSubTit">모든 상담은 세무사가 직접 답변 드립니다.</div>
                <div class="cont">
                    <div class="searchBox">
                        <form action="/counseling/search">
                            <input type="text" name="search" placeholder="검색해보세요" value="">
                            <button class="deleteBtn"></button>
                            <button class="searchBtn"></button>
                        </form>
                    </div>
                    <div class="btnWrap">
                        <a class="goToCounselling" href="/counseling/write">게시판 상담 신청하기</a>
                    </div>
                    <div class="tableWrap pcTable">
                        <table style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>작성일</th>
                                    <th>상담여부</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $i = 1;
                            foreach($boards as $bo){
                            ?>
                                <tr onClick="location.href='/counseling/check/<?=$bo['no']?>'">
                                    <td><?=sprintf('%04d', $i);?></td>
                                    <td><?=$bo['title']?></td>
                                    <td><?=cu_mask_name($bo['name'])?></td>
                                    <td><?=cu_conv_date($bo['create_date'])?></td>
                                    <td>
                                        <div class="status <?=($bo['status']=='complete')? 'complete' : 'not_complete' ?>"><?=($bo['status']=='complete')? '접수완료' : '상담신청' ?></div>
                                        <!-- <div class="status not_complete">상담신청</div> -->
                                    </td>
                                </tr>
                            <?php 
                            $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tableWrap moTable">
                        <table style="table-layout: fixed">
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>작성자</th>
                                    <th>작성일</th>
                                    <th>상담여부</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $j = 1;
                            foreach($boards as $bo){
                            ?>
                                <tr onClick="location.href='/counseling/check/<?=$bo['no']?>'">
                                    <td><?=sprintf('%04d', $i);?></td>
                                    <td><?=$bo['title']?></td>
                                    <td><?=cu_mask_name($bo['name'])?></td>
                                    <td><?=cu_conv_date($bo['create_date'])?></td>
                                    <td>
                                        <div class="status <?=($bo['status']=='complete')? 'complete' : 'not_complete' ?>"><?=($bo['status']=='complete')? '접수완료' : '상담신청' ?></div>
                                        <!-- <div class="status not_complete">상담신청</div> -->
                                    </td>
                                </tr>
                            <?php 
                            $j++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagin">
                    <?= $pagerBoards->links('boards', 'custom_pagin') ?>
                    </div>
                    <button class="moreBtn">더보기</button>
                </div>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- 게시판상담 섹션 끝 } -->

<!-- 전용 스크립트 -->
<script src="/assets/script/counselling.js"></script>
