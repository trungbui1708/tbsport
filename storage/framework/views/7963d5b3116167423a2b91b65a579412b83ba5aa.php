<?php $__env->startSection('content'); ?>
        
        <!-- All news area Start Here-->
        <div class="all-news-area sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="">Tin mới</h3>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="latest-news-slider">
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $data = $key->news -> sortByDesc('created_at')->take(5);
                                            $post = $data -> shift();
                                         ?>
                                         <?php $__currentLoopData = $data ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div> 
                                        <div class="news-normal-block">
                                            <div class="news-img">
                                                <a href="#">
                                                    
                                                   <img src="upload/news/<?php echo e($news->image); ?>">
                                                    
                                                </a>
                                            </div>
                                            <h4 class="news-title"><a href="news/<?php echo e($news->id); ?>"><?php echo e($news['tittle']); ?></a></h4>
                                            <div class="news-desc">
                                                <p>
                                                    <?php echo e($news['description']); ?>

                                                   
                                                </p>
                                            </div>
                                            <div class="news-btn">
                                                <a class="primary-btn" href="news/<?php echo e($news->id); ?>">Đọc tiếp</a>
                                            </div>
                                        </div>                             
                                        </div>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>                              
                            </div>
                            <div class="col-sm-3">                              
                                <div class="latest-news-nav">
                                 <!--  <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <img src="upload/news/<?php echo e($value); ?>"/>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  -->
                                </div>
                            </div>
                        </div>
                    </div>
                  <div class="col-md-3 col-sm-12">
                        <!-- Blog Single Sidebar Start Here -->
                        <div class="sidebar-area">
                            <div class="search-box">
                                <div class="box-search">
                                    <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>    
                            </div>
                            <div class="cate-box">
                                <span class="title">Tin tức</span>
                                <ul>
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="list-news"><?php echo e($key->name); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <div class="recent-post-area">
                                <span class="title">Bài mới</span>
                                <ul class="news-post">
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $data = $key->news -> sortByDesc('created_at')->take(4);
                                            $post = $data -> shift();
                                         ?>
                                         <?php $__currentLoopData = $data ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 paddimg-right-none">
                                                            <img src="<?php echo e(asset('upload/news/'.$news->image)); ?>"/>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                            <h4><a href="news/<?php echo e($news->id); ?>"><?php echo $news['tittle']; ?></a></h4>
                                                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $news['created_at']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </li>
                                  
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
        <!-- All news area end Here-->
        <div class="single-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
        <div class="like-section">
                            <h3 class="title-bg">Bạn có thể đọc thêm</h3>
                            <div class="row">
                                 <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $data = $key->news -> sortByDesc('created_at')->take(4);
                                            $post = $data -> shift();
                                         ?>
                                         <?php $__currentLoopData = $data ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="popular-post-img">
                                        <img src="upload/news/<?php echo e($news->image); ?>">                                  
                                    </div>                                
                                    <h3><a href="news/<?php echo e($news->id); ?>"><?php echo e($news['tittle']); ?></a></h3>
                                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo e($news['created_at']); ?></span>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div> 
                        </div>
                        </div>
                        </div> 
                    </div>
        <!-- Latest Video Start Here-->
        <div class="rs-point-table sec-spacer">
            <div class="container">
                <ul class="point-menu">
                    <h1>Bảng xếp hạng</h1>
                    <li class="active"><a data-toggle="tab" href="#sfl">Laliga</a></li>
                    <li><a data-toggle="tab" href="#efl">Premier League</a></li>
                    <li><a data-toggle="tab" href="#nfl">V-League</a></li>
                    <li><a data-toggle="tab" href="#ufa">FA</a></li>
                    <li><a data-toggle="tab" href="#world-cup">UFA</a></li>
                </ul>

                <div class="tab-content">
                    <div id="sfl" class="tab-pane fade in active">
                        <table>
                            
                            <tr>
                                <td></td>
                                <td class="team-name">Club</td>
                                <td>Match</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key->id); ?></td>
                                <td class="team-name" ><?php echo e($key->clubs->name); ?></td>
                                <td><?php echo e($key->number_match); ?></td>
                                <td><?php echo e($key->won); ?></td>
                                <td><?php echo e($key->draw); ?></td>
                                <td><?php echo e($key->lost); ?></td>
                                <td><?php echo e($key->goals_for); ?></td>
                                <td><?php echo e($key->goals_against); ?></td>
                                <td><?php echo e($key->goals_difference); ?></td>
                                <td><?php echo e($key->point); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                        </table>
                    </div>
                    <div id="efl" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Banani FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Badda FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Joypur FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Bramma FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Mirpur FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Kapa FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                        </table>
                    </div>
                    <div id="nfl" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Natrok FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Bogro FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Badda FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Mirpur FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Joypur FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Banani FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Bramma FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Kapa FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>                   
                        </table>
                    </div>
                    <div id="ufa" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Badda FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Banani FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Trishal FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Joypur FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Natrok FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr><tr>
                                <td>01</td>
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Banani FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>               
                        </table>
                    </div>
                    <div id="world-cup" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Trishal FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Badda FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Barmma FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Natrok FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Joypur FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Banani FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Barmma FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Dohar</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Latest Video end Here-->

        <!-- Testimonials Sections End Here-->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('index.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>