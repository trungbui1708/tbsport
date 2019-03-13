<?php $__env->startSection('content'); ?>
	<!-- Blog Single Start Here -->
		
		<div class="single-blog-details sec-spacer">
            <div class="container">
                <div class="row">
                	<h1>Tin tức</h1>
                    <div class="col-md-8 col-sm-12">
                    	<h3><?php echo $news->tittle; ?></h3>
						<div class="single-image">
							
							<img src="<?php echo e(asset('upload/news/'.$news->image)); ?>"/>
                                           
						</div>
						<p style="text-align: justify"><?php echo $news->content; ?></p>
						<div class="share-section">
							<div class="row">
								<div class="col-sm-6 col-xs-12 life-style">
									<span class="author"> 
										<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i><?php echo $news->author; ?></a>
									</span> 
									<span class="date">
										<i class="fa fa-calendar" aria-hidden="true"></i><?php echo $news->created_at; ?>

									</span>
									<span class="comment"> 
										<a href="#"> 
											<i class="fa fa-commenting-o" aria-hidden="true"></i> 12
										</a>
									</span>
								</div>
							</div>
						</div>

  
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
										<img src="<?php echo e(asset('upload/news/'.$news->image)); ?>"/>                                
									</div>                                
									<h3><a href="<?php echo e($news->id); ?>"><?php echo e($news['tittle']); ?></a></h3>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo e($news['created_at']); ?></span>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>  
						<div class="author-comment">
							<h3 class="title-bg">Bình luận</h3>
							<ul>
								<li>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="<?php echo e(asset('index/images/blog-details/comment.png')); ?>" alt="Blog Details photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
											<span class="reply"> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span></span>
											<div class="dsc-comments">
												<h4>Thesera Minton</h4>                                            
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
												<a href="#"> Reply</a>
											</div>    
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="<?php echo e(asset('index/images/blog-details/comment.png')); ?>" alt="Blog Details photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
											<span class="reply"> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span></span>
											<div class="dsc-comments">
												<h4>Thesera Minton</h4>                                            
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
												<a href="#"> Reply</a>
											</div>    
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="<?php echo e(asset('index/images/blog-details/comment.png')); ?>" alt="Blog single photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
											<span class="reply"><span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span></span>
											<div class="dsc-comments">
												<h4>Thesera Minton</h4>                                            
												<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
												<a href="#"> Reply</a>
											</div>    
										</div>
									</div>
								</li>
							</ul>
						</div>
				        <div class="leave-comments-area">
				            <form>
								<fieldset>
                                    <div class="form-group">
                                        <label>Fast Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                        <label>Your comment here...</label>
                                        <textarea cols="40" rows="10" class="textarea form-control"></textarea>
                                    </div>       
                                    <div class="form-group">
                                        <button class="btn-send" type="submit">Post Comment</button>
                                    </div> 
								</fieldset>
							</form>
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
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="<?php echo e(url('list-news')); ?>"><?php echo $key->name; ?></a>
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
                                                            <h4><a href="<?php echo e($news->id); ?>"><?php echo $news['tittle']; ?></a></h4>
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
                </div>
            </div>
        </div>
        <!-- Blog Single End Here --> 
        
        <!-- Search Modal Start Here -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Soccer News" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End Here -->
        
		<!-- Start scrollUp  -->
		<div id="return-to-top">
			<span>Top</span>
		</div>
		<!-- End scrollUp  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>