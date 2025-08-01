<!-- 게시판상담 섹션 시작 { -->
<div class="sub">
    <div class="counsellingWrArti ani">
        <section class="inner">
            <div class="formWrap">
                <div class="formTit">
                    무엇이든 물어보세요.<br />
                    익명 100% 보장, <br class="mBr" />모든 상담은 세무사가 직접 답변 드립니다.
                </div>
                <form action="/counseling/upload" method="POST" enctype="multipart/form-data">
                    <ul class="formList">
                        <li>
                            <label for="name"><span>[필수] </span>이름</label>
                            <input type="text" id="name" class="ipt" name="name" placeholder="이름을 입력해주세요.">
                        </li>
                        <li>
                            <label for="pwd"><span>[필수] </span>비밀번호</label>
                            <input type="password" id="pwd" class="ipt" name="pwd" placeholder="비밀번호 입력해주세요.">
                        </li>
                        <li>
                            <label for="phone"><span>[필수] </span>휴대폰 번호</label>
                            <input type="text" id="phone" class="ipt" name="phone" placeholder="휴대폰 번호를 입력해주세요.">
                        </li>
                        <li>
                            <label for="category"><span>[필수] </span> 상담분야</label>
                            <select class="ipt" id="category" name="category">
                                <option value="">상담분야를 선택해주세요.</option>
                                <option value="세무기장(1개월 무료 이벤트)">세무기장(1개월 무료 이벤트)</option>
                                <option value=" 종합소득세">종합소득세</option>
                                <option value=" 법인세">법인세</option>
                                <option value=" 부가가치세">부가가치세</option>
                                <option value=" 사업자등록">사업자등록</option>
                                <option value=" 양도세">양도세</option>
                                <option value=" 재산세">재산세</option>
                                <option value=" 상속세">상속세</option>
                                <option value=" 증여세">증여세</option>
                                <option value=" 기타">기타</option>
                            </select>
                        </li>
                        <li>
                            <label for="title">제목</label> <span class="noti">10자 이상</span>
                            <input type="text" id="title" class="ipt" name="title" minlength ="10" placeholder="제목을 작성해주세요.">
                        </li>
                        <li>
                            <label for="content">문의내용</label>
                            <textarea class="ipt" id="content" name="content" placeholder="상담 받으실 내용을 입력해주세요."></textarea>
                        </li>
                        <li>
                            <label for="file1">첨부파일1</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file1" class="ipt" name="fake_file1" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file1" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file2">첨부파일2</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file2" class="ipt" name="fake_file2" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file2" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file3">첨부파일3</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file3" class="ipt" name="fake_file3" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file3" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file4">첨부파일4</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file4" class="ipt" name="fake_file4" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file4" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <label for="file5">첨부파일5</label>
                            <div class="fileWrap">
                                <input type="text" id="fake_file5" class="ipt" name="fake_file5" placeholder="첨부파일을 등록해주세요.">
                                <div class="file-input">
                                    <button type="button" class="uploadBtn"></button>
                                    <button type="button" class="delBtn"></button>
                                    <input type="file" name="file5" value="" class="file_hidden">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="agreeWrap">
                                개인정보처리방침 
                                <label class="agreeBox">
                                    <input type="checkbox" name="agree">
                                    <div class="txt">개인정보 수집 및 이용에 동의합니다.</div>
                                </label>
                            </div>
                            <div class="agreeCont">
                                <div class="agreeContInner">
                                    세무법인 테헤란(이하 ‘회사’라 한다)은 개인정보 보호법 제30조에 따라 정보주체의 개인정보를 보호하고 이와 관련한 고충을 신속하고 원활하게 처리할 수 있도록 하기 위하여 다음과 같이 개인정보 처리지침을 수립·공개합니다. <br /><br />

                                    <b>제1조 (개인정보의 처리목적)</b><br />
                                    회사는 다음의 목적을 위하여 개인정보를 처리합니다. 처리하고 있는 개인정보는 다음의 목적 이외의 용도로는 이용되지 않으며, 이용 목적이 변경되는 경우에는 개인정보보호법 제18조에 따라 별도의 동의를 받는 등 필요한 조치를 이행할 예정입니다.<br /><br />

                                    1. 홈페이지 회원 가입 및 관리<br />
                                    회원 가입의사 확인, 회원제 서비스 제공에 따른 본인 식별·인증, 회원자격 유지·관리, 제한적 본인확인제 시행에 따른 본인확인, 서비스 부정이용 방지, 만 14세 미만 아동의 개인정보처리시 법정대리인의 동의여부 확인, 각종 고지·통지, 고충처리 등을 목적으로 개인정보를 처리합니다.<br /><br />

                                    2. 재화 또는 서비스 제공<br />
                                    물품배송, 서비스 제공, 계약서·청구서 발송, 콘텐츠 제공, 맞춤서비스 제공, 본인인증, 연령인증, 요금결제,정산, 채권추심 등을 목적으로 개인정보를 처리합니다.<br /><br />

                                    3. 고충처리<br />
                                    민원인의 신원 확인, 민원사항 확인, 사실조사를 위한 연락·통지, 처리결과 통보 등의 목적으로 개인정보를 처리합니다.<br /><br />

                                    <b>제2조 (개인정보의 처리 및 보유기간)</b><br />
                                    ① 회사는 법령에 따른 개인정보 보유·이용기간 또는 정보주체로부터 개인정보를 수집시에 동의받은 개인정보 보유·이용기간 내에서 개인정보를 처리·보유합니다.<br />
                                    ② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.<br /><br />

                                    1. 홈페이지 회원 가입 및 관리 : 사업자/단체 홈페이지 탈퇴시까지<br />
                                    다만, 다음의 사유에 해당하는 경우에는 해당 사유 종료시까지<br />
                                    1) 관계 법령 위반에 따른 수사·조사 등이 진행중인 경우에는 해당 수사·조사 종료시까지<br />
                                    2) 홈페이지 이용에 따른 채권·채무관계 잔존시에는 해당 채권·채무관계 정산시까지<br /><br />

                                    <b>제5조(정보주체의 권리·의무 및 행사방법)</b><br />

                                    ① 정보주체는 회사에 대해 언제든지 다음 각 호의 개인정보 보호 관련 권리를 행사할 수 있습니다.<br />
                                    1. 개인정보 열람요구<br />
                                    2. 오류 등이 있을 경우 정정 요구<br />
                                    3. 삭제요구<br />
                                    4. 처리정지 요구<br />
                                    ② 제1항에 따른 권리 행사는 회사에 대해 서면, 전화, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 회사는 이에 대해 지체없이 조치하겠습니다.<br />
                                    ③ 정보주체가 개인정보의 오류 등에 대한 정정 또는 삭제를 요구한 경우에는 회사는 정정 또는 삭제를 완료할 때까지 당해 개인정보를 이용하거나 제공하지 않습니다.<br />
                                    ④ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.<br />
                                    ⑤ 정보주체는 개인정보 보호법 등 관계법령을 위반하여 회사가 처리하고 있는 정보주체 본인이나 타인의 개인정보 및 사생활을 침해하여서는 아니됩니다.<br /><br />


                                    <b>제6조(처리하는 개인정보 항목)</b><br />
                                    회사는 다음의 개인정보 항목을 처리하고 있습니다.<br /><br />

                                    1. 인터넷 서비스 이용과정에서 아래 개인정보 항목이 자동으로 생성되어 수집될 수 있습니다.<br />
                                    IP주소, 쿠키, MAC주소, 서비스 이용기록, 방문기록, 불량 이용기록 등<br /><br />

                                    <b>제7조(개인정보의 파기)</b><br />
                                    ① 회사는 개인정보 보유기간의 경과, 처리목적 달성 등 개인정보가 불필요하게 되었을 때에는 지체없이 해당 개인정보를 파기합니다.<br />
                                    ② 정보주체로부터 동의받은 개인정보 보유기간이 경과하거나 처리목적이 달성되었음에도 불구하고 다른 법령에 따라 개인정보를 계속 보존하여야 하는 경우에는, 해당 개인정보를 별도의 데이터베이스(DB)로 옮기거나 보관장소를 달리하여 보존합니다.<br />
                                    ③ 개인정보 파기의 절차 및 방법은 다음과 같습니다.<br />
                                    1. 파기절차<br />
                                    회사는 파기 사유가 발생한 개인정보를 선정하고, 회사의 개인정보 보호책임자의 승인을 받아 개인정보를 파기합니다.<br />
                                    2. 파기방법<br />
                                    회사는 전자적 파일 형태로 기록·저장된 개인정보는 기록을 재생할 수 없도록 로우레밸포멧(Low Level Format) 등의 방법을 이용하여 파기하며, 종이 문서에 기록·저장된 개인정보는 분쇄기로 분쇄하거나 소각하여 파기합니다.<br /><br />

                                    <b>제8조(개인정보의 안전성 확보조치)</b><br />
                                    회사는 개인정보의 안전성 확보를 위해 다음과 같은 조치를 취하고 있습니다.<br />
                                    1. 관리적 조치 : 내부관리계획 수립·시행, 정기적 직원 교육 등<br />
                                    2. 기술적 조치 : 개인정보처리시스템 등의 접근권한 관리, 접근통제시스템 설치, 고유식별정보 등의 암호화, 보안프로그램 설치<br />
                                    3. 물리적 조치 : 전산실, 자료보관실 등의 접근통제<br /><br />

                                    <b>제9조(개인정보 자동 수집 장치의 설치·운영 및 거부에 관한 사항)</b><br />
                                    ① 회사는 이용자에게 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠키(cookie)’를 사용합니다.<br />
                                    ② 쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다.<br />
                                    가. 쿠키의 사용목적: 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해
                                    사용됩니다.<br />
                                    나. 쿠키의 설치·운영 및 거부 : 웹브라우저 상단의 도구&gt;인터넷 옵션&gt;개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다.<br />
                                    다. 쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생할 수 있습니다.<br /><br />

                                    <b>제10조(개인정보 보호책임자)</b><br />
                                    ① 회사는 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.<br /><br />

                                    ▶ 개인정보 보호책임자<br />
                                    성명 : 백상희<br />
                                    직책 : 대표<br />
                                    연락처 : &lt;전화번호&gt;010-8000-6240, &lt;이메일&gt;kikak_2000@hanmail.net, &lt;팩스번호&gt;02-6499-3678<br />
                                    ※ 개인정보 보호 담당부서로 연결됩니다.<br /><br />

                                    ▶ 개인정보 보호 담당부서<br />
                                    부서명 : 마케팅부서<br />
                                    담당자 : 백상희<br />
                                    연락처 : &lt;전화번호&gt;010-8000-6240, &lt;이메일&gt;bsh@in-consulting.co.kr, &lt;팩스번호&gt;02-6499-3678<br /><br />

                                    ② 정보주체께서는 회사의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. 회사는 정보주체의 문의에 대해 지체없이 답변 및 처리해드릴 것입니다.<br /><br />

                                    <b>제11조(개인정보 열람청구)</b><br />
                                    정보주체는 개인정보 보호법 제35조에 따른 개인정보의 열람 청구를 아래의 부서에 할 수 있습니다. 회사는 정보주체의 개인정보 열람청구가 신속하게 처리되도록 노력하겠습니다.<br /><br />

                                    ▶ 개인정보 열람청구 접수·처리 부서<br />
                                    부서명 : 마케팅부서<br />
                                    담당자 : 백상희<br />
                                    연락처 : &lt;전화번호&gt;010-8000-6240, &lt;이메일&gt;bsh@in-consulting.co.kr, &lt;팩스번호&gt;02-6499-3678<br /><br />

                                    <b>제12조(권익침해 구제방법)</b><br />
                                    정보주체는 아래의 기관에 대해 개인정보 침해에 대한 피해구제, 상담 등을 문의하실 수 있습니다.<br /><br />

                                    ▶ 개인정보 침해신고센터 (한국인터넷진흥원 운영)<br />
                                    - 소관업무 : 개인정보 침해사실 신고, 상담 신청<br />
                                    - 홈페이지 : privacy.kisa.or.kr<br />
                                    - 전화 : (국번없이) 118<br />
                                    - 주소 : (58324) 전남 나주시 진흥길 9(빛가람동 301-2) 3층 개인정보침해신고센터<br /><br />

                                    ▶ 개인정보 분쟁조정위원회<br />
                                    - 소관업무 : 개인정보 분쟁조정신청, 집단분쟁조정 (민사적 해결)<br />
                                    - 홈페이지 : www.kopico.go.kr<br />
                                    - 전화 : (국번없이) 1833-6972<br />
                                    - 주소 : (03171)서울특별시 종로구 세종대로 209 정부서울청사 4층<br /><br />

                                    ▶ 대검찰청 사이버범죄수사단 : 02-3480-3573 (www.spo.go.kr)<br />
                                    ▶ 경찰청 사이버안전국 : 182 (http://cyberbureau.police.go.kr)<br /><br />


                                    <b>제13조(개인정보 처리방침 시행 및 변경)</b><br />
                                    이 개인정보 처리방침은 2020. 06. 01부터 적용됩니다.
                                </div>
                            </div>
                        </li>
                        <!-- <li>
                            <label for="captcha"><span>[필수] </span>자동등록방지</label>
                            <input type="text" id="captcha" class="ipt" name="captcha" placeholder="입력해주세요.">
                            <img src="/img/consult/cap_ex.gif" alt="">
                        </li> -->
                    </ul>
                    <button type="submit" class="btnCsApply ga_board">상담신청완료</button>
                </form>
            </div>
        </section>
    </div>
</div>
<!-- 게시판상담 섹션 끝 } -->

<!-- 전용 스크립트 -->
<script src="/assets/script/counselling.js"></script>