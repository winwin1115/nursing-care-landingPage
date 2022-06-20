<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LPWP
 */

get_header(); 
?>

	<main>
		<section class="section">
			<div class="container">
				<h3 class="section-title">≪2021年8月最新版≫</h3>
				<h3 class="section-subtitle">今注目のおすすめ3社厳選比較！</h3>

				<div class="block-compare-wrapper">
					<div class="block-compare-wrapper-box row">
						<div class="col-12 col-md-4" style="margin: 0; padding: 5px;">
							<div class="block-item" style="background-image: url(<?php echo get_template_directory_uri() .'/assets/img/dummy-img-1.png' ?>)">
								<div class="block-item-content">
									<div class="block-item-title title1">
										<a href="#section_1"><h3><span>1. </span>介護ギフト </h3></a>
									</div>
									<div class="block-item-desc">
										<p>
											・全国に対応!<br />
											・スキルアップ出来る求人多数!<br />
											・職場内情のホントのところを<br />
											<span style="padding-left: 14px;">教えてくれます!</span>
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-4" style="margin: 0; padding: 5px;">
							<div class="block-item" style="background-image: url(<?php echo get_template_directory_uri() .'/assets/img/dummy-img-2.png' ?>)">
								<div class="block-item-content" style="padding-left: 48%">
									<div class="block-item-title title2">
										<a href="#section_2"><h3><span>2. </span> かいご畑 </h3></a>
									</div>
									<div class="block-item-desc">
										<p>
											・未経験に強う!<br />
											・働きなから0円で<br>
											<span style="padding-left: 14px;">資格取得が出来ます!</span><br>
											・派遣求人も多数<br>
											・様々な雇用形態に対応
											<!-- 独自インタビューでココだけの情報満載 -->
											<!-- 厚生労働大臣認可のサイト◎ -->
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-4" style="margin: 0; padding: 5px;">
							<div class="block-item" style="background-image: url(<?php echo get_template_directory_uri() .'/assets/img/dummy-img-3.png' ?>)">
								<div class="block-item-content">
									<div class="block-item-title title3">
										<a href="#section_3"><h3><span>3. </span> ココカイゴ転職 </h3></a>
									</div>
									<div class="block-item-desc">
										<p>
											・独自のインタビューによる<br>
											<span style="padding-left: 14px;">「ココだけ」の情報満載!</span><br>
											・在籍キャリアパートナーは<br>
											<span style="padding-left: 14px;">全員介護資格保有者です</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-compare-details text-left" id="section_1">
			<div class="section-header-wrapper">
				<div class="section-header">
					<div class="container">
						<div class="block-item-title big-title1">
							<h3><span>1. </span>介護ギフト </h3>
						</div>

						<div class="row">
							<div class="col-6 col-md-6 block-item-cmp block-item-seperater">
								<p style="font-size: 16px; font-weight: 600; margin-bottom:0"> <span class="dot"></span> 一人一人に合ったペースで転職活動をサポートしてくれる</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp" style="padding-left: 50px;">
								<p style="font-size: 16px; font-weight: 600; margin-bottom:0"> <span class="dot"></span> 質の高い求人・長く働ける企業のみ紹介</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp block-item-seperater">
								<p style="font-size: 16px; font-weight: 600; margin-bottom:0"> <span class="dot"></span> 好条件の非公開求人を多数保有</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp" style="padding-left: 50px;">
								<p style="font-size: 16px; font-weight: 600; margin-bottom:0"> <span class="dot"></span> 職場の雰囲気や内情、残業・年収を把握している</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="section-body row">
					<div class="col-12 col-md-5">
						<div class="sc-slider  slick-slider-sc">
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-1.png'; ?>" class="slide-img w-100" />
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-2.png'; ?>" class="slide-img w-100" />
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-3.png'; ?>" class="slide-img w-100" />
							</div>
						</div>
						<div class="sc-line-hr"></div>
					</div>
					<div class="col-12 col-md-7 my-5 text-end">
						<h4 class="py-1" style="font-weight: bold; font-size: 24px" >地域密着の介護専門 就職支援センター</h4>
						<h4 class="sc-btn-blue">未経験の全ての方におすすめ</h4>
						<table class="sc-table-list my-3">
							<tbody>
								<tr>
									<th>おすすめ年齢</th>
									<td>20～50代</td>
								</tr>
								<tr>
									<th>対応エリア</th>
									<td>関東・関西・東海・中国・九州</td>
								</tr>
								<tr>
									<th>公開求人数</th>
									<td>9,700件</td>
								</tr>
								<tr>
									<th>資格なし</th>
									<td><span class="dot white"></span></td>
								</tr>
								<tr>
									<th>雇用形態</th>
									<td>正社員・パート・派遣</td>
								</tr>
							</tbody>
						</table>
						<a href="#" class="btn btn-theme-outline">無料登録・公式ページはコチラ 
							<span class="icon"><i class="fas fa-chevron-right"></i></span>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="section section-compare-details section-compare-right text-left" id="section_2">

			<div class="section-header-wrapper" style="background-image: url(<?php echo get_template_directory_uri() .'/assets/img/dummy-back-2.png' ?>)">
				<div class="section-header">
					<div class="container">
						<div class="block-item-title big-title2">
							<h3><span>2. </span>かいご畑 </h3>
						</div>

						<div class="row">
							<div class="col-6 col-md-6 block-item-cmp block-item-seperater">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> 利用者の57％が無資格からスタート!</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp" style="padding-left: 50px;">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> プライベートと両立・残業なしの好条件が満載</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp block-item-seperater">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> 地域密着型の就職支援センター</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp" style="padding-left: 50px;">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> 小さな疑問や悩みもスグに解消できる</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="section-body row">
					<div class="col-12 col-md-7 my-5 text-start">
						<h4  class="py-1" style="font-weight: bold; font-size: 24px">介護のお仕事探しをサポート <br> あなたにピックリの求人は？</h4>
						<h4 class="sc-btn-blue">内情を徹底比較したい方におすすめ</h4>
						<table class="sc-table-list my-3">
							<tbody>
								<tr>
									<th>おすすめ年齢</th>
									<td>20～50代</td>
								</tr>
								<tr>
									<th>対応エリア</th>
									<td>東京・神奈川・大阪・兵庫・京都・奈良</td>
								</tr>
								<tr>
									<th>公開求人数</th>
									<td>3,300件</td>
								</tr>
								<tr>
									<th>資格なし</th>
									<td><span class="dot white"></span></td>
								</tr>
								<tr>
									<th>雇用形態</th>
									<td>正社員・パート・バイト</td>
								</tr>
							</tbody>
						</table>
						<a href="#" class="btn btn-theme-outline">無料登録・公式ページはコチラ <span class="icon"><i class="fas fa-chevron-right"></i></span></a>

					</div>
					<div class="col-12 col-md-5">

						<div class="sc-slider  slick-slider-sc">
							
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-2.png'; ?>" class="slide-img w-100" />
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-3.png'; ?>" class="slide-img w-100" />
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-1.png'; ?>" class="slide-img w-100" />
							</div>
						</div>
						<div class="sc-line-hr"></div>

					</div>
				</div>

			</div>
		</section>

		<section class="section section-compare-details text-left" id="section_3">

			<div class="section-header-wrapper" style="background-image: url(<?php echo get_template_directory_uri() .'/assets/img/dummy-back-3.png' ?>)">
				<div class="section-header">
					<div class="container">
						<div class="block-item-title big-title3">
							<h3><span>3. </span>ココカイゴ転職 </h3>
						</div>

						<div class="row">
							<div class="col-6 col-md-6 block-item-cmp block-item-seperater">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> 利用者の57％が無資格からスタート!</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp" style="padding-left: 50px;">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> 職場の雰囲気・残業・年収などを把握している</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp block-item-seperater">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> 地域密着型の就職支援センター</p>
							</div>
							<div class="col-6 col-md-6 block-item-cmp" style="padding-left: 50px;">
								<p style="font-size: 16px; font-weight: 600; margin-bottom: 0"> <span class="dot"></span> コーディネーターは全員介護の有資格者</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="section-body row">
					<div class="col-12 col-md-5">
						<div class="sc-slider  slick-slider-sc">
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-3.png'; ?>" class="slide-img w-100" />
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-1.png'; ?>" class="slide-img w-100" />
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri().'/assets/img/sc-slide-2.png'; ?>" class="slide-img w-100" />
							</div>
						</div>
						<div class="sc-line-hr"></div>
					</div>
					<div class="col-12 col-md-7 my-5 text-end">

						<h1 style="float: right;
    font-size: 60px;
    text-align: right;
    padding-top: 0;
    font-weight: bold;
	margin-bottom: 0;
	margin-top: 0;
	padding-bottom: 0;
    padding-left: 15px;">NO.1</h1>
						<h4  class="py-1 text-right" style="font-weight: bold; font-size: 24px; line-height: 1.7;">介護職さんが認めた <br> 4年連続支持率</h4>
						
						<h4 class="sc-btn-blue">地方エリアで転職したい方におすすめ</h4>
						<table class="sc-table-list my-3">
							<tbody>
								<tr>
									<th>おすすめ年齢</th>
									<td>20代～</td>
								</tr>
								<tr>
									<th>対応エリア</th>
									<td>全国</td>
								</tr>
								<tr>
									<th>公開求人数</th>
									<td>81,000件</td>
								</tr>
								<tr>
									<th>資格なし</th>
									<td><span class="dot white"></span></td>
								</tr>
								<tr>
									<th>雇用形態</th>
									<td>正社員・派遣</td>
								</tr>
							</tbody>
						</table>
						<a href="#" class="btn btn-theme-outline">無料登録・公式ページはコチラ <span class="icon"><i class="fas fa-chevron-right"></i></span></a>
					</div>
				</div>

			</div>
		</section>

		<section class="section section-form-wrapper">
			<div class="section-form">
				<div class="container">
					<h3 class="section-title">未経験・無資格に強い求人サイトを一括比較！</h3>
					<h3 class="section-subtitle"> 簡単な登録だけで全サービスを無料で利用可能◎</h3>

					<div class="contact-form">
						<table class="text-start">
							<tbody>
								<tr>
									<th>サイト名</th>
									<td>かいご畑</td>
									<td>ココカイゴ転職</td>
									<td>介護ワーカー</td>
								</tr>
								<tr>
									<th>オススメの年齢</th>
									<td>20～50代</td>
									<td>20代～</td>
									<td>20代～</td>
								</tr>
								<tr>
									<th>対応エリア</th>
									<td>関東・関西・東海・中国・九州</td>
									<td>東京・神奈川・大阪・兵庫・京都・奈良</td>
									<td>全国</td>
								</tr>
								<tr>
									<th>公開求人数</th>
									<td>9,700件</td>
									<td>3,300件</td>
									<td>81,000件</td>
								</tr>
								<tr>
									<th>資格なし</th>
									<td><span class="dot black"></span></td>
									<td><span class="dot black"></span></td>
									<td><span class="dot black"></span></td>
								</tr>
								<tr>
									<th>未経験 <br> 雇用形態</th>
									<td>正社員・パート・派遣></td>
									<td>正社員・パート・バイト</td>
									<td>正社員・派遣</td>
								</tr>
								<tr>
									<th>サービス詳細</th>
									<td><a href="#" class="btn btn-theme-outline">公式ページ</a></td>
									<td><a href="#" class="btn btn-theme-outline">公式ページ</a></td>
									<td><a href="#" class="btn btn-theme-outline">公式ページ</a></td>
								</tr>
							</tbody>
						</table>						
					</div>
				</div>
			</div>
		</section>
		


	</main>

<?php

get_footer();
