<!-- page content -->
            <div class="right_col" role="main">
				<?php
					include_once("../dataconfig/dataprovider.php");
					$tongnguoidung = DataProvider::NumRows("SELECT COUNT(*) as Num FROM taikhoan");
					$tongnguoinam = DataProvider::NumRows("SELECT COUNT(*) as Num FROM taikhoan where tk_GioiTinh = 1");
					$tongnguoinu = DataProvider::NumRows("SELECT COUNT(*) as Num FROM taikhoan where tk_GioiTinh = 2");
					$tongbaihoc = DataProvider::NumRows("SELECT COUNT(*) as Num FROM baihoc");
					$tongbaitap = DataProvider::NumRows("SELECT COUNT(*) as Num FROM baitap");
					$tongcautrochoi = DataProvider::NumRows("SELECT COUNT(*) as Num FROM xepchu");
					
					$tongam = DataProvider::NumRows("SELECT COUNT(*) as Num FROM am");
					$tongtu = DataProvider::NumRows("SELECT COUNT(*) as Num FROM tu");
					$tongcau = DataProvider::NumRows("SELECT COUNT(*) as Num FROM cau");
					$tonghinh = DataProvider::NumRows("SELECT COUNT(*) as Num FROM hinhanh");
					$tongloai = $tongam + $tongtu + $tongcau + $tonghinh;
				?>
                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Tổng số người dùng</span>
                            <div class="count"><?php echo $tongnguoidung; ?></div>
                            
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-clock-o"></i> Tổng số bài học</span>
                            <div class="count"><?php echo $tongbaihoc; ?></div>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Tổng số bài tập</span>
                            <div class="count green"><?php echo $tongbaitap; ?></div>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Tổng câu trò chơi</span>
                            <div class="count"><?php echo $tongcautrochoi; ?></div>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Người dùng nam</span>
                            <div class="count"><?php echo $tongnguoinam; ?></div>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top"><i class="fa fa-user"></i> Người dùng nữ</span>
                            <div class="count"><?php echo $tongnguoinu; ?></div>
                        </div>
                    </div>

                </div>
                <!-- /top tiles -->

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">
                            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                                <div class="x_title">
                                    <h2>Thống kê các loại câu</h2>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div>
                                        <p>Đọc theo âm</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo ($tongam*100)/$tongloai; ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>Đọc theo từ</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo ($tongtu*100)/$tongloai; ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div>
                                        <p>Đọc theo câu</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo ($tongcau*100)/$tongloai; ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>Đọc theo hình ảnh</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo ($tonghinh*100)/$tongloai; ?>"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="clearfix"></div>
							
							<p>Tổng số câu: <b><?php echo $tongloai; ?></b></p>
                        </div>
                    </div>

                </div>
                <br />
            </div>
            <!-- /page content -->