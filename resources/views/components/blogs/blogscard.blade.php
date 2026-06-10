<!-- BLOG POST #1 -->
 @props(['data'])
									<div class="blog-post">

			 			
							 			<!-- BLOG POST IMAGE -->
							 			<div class="blog-post-img mb-30">
											<img class="img-fluid" src={{$data['img']}} alt="blog-post-image" />	
										</div>

										<!-- BLOG POST TEXT -->
										<div class="blog-post-txt">

											<!-- Post Meta -->
											<p class="post-meta"><a href="#" class="grey-color">{{$data['name']}}</a> - 12 min read</p>

											<!-- Title -->
											<h4 class="h4-xs">
												<a href="single-post.html" class="darkblue-color">{{$data['name']}}</a>
											</h4>

											<!-- Text -->
											<p >{{$data['des']}}
											</p>

											<!-- Post Data -->
											<p class="post-data">By <a href="#">Sean McMarthy</a> - 18 hours ago</p>	

										</div>


									</div>	<!-- END BLOG POST #1 -->