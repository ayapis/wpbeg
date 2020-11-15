<?php get_header(); ?><!-- header.phpを読み込むテンプレートタグ（インクルードタグ） -->
		<div class="c-wrap">
			<div class="c-grid">
				<div class="p-contents">
				<?php
					if( have_posts() ) :
							while( have_posts() ) :
									the_post(); ?>
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
											<h2 class="post__ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<ul class="post__meta">
													<li class="post__meta__item">
															<date class="post__meta__date"><?php echo get_the_date(); ?></date>
													</li>
													<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
													<li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
											</ul>
											<?php the_post_thumbnail(); ?>
											<?php the_content(); ?>
											<?php $args = array (
													'before' => '<div class="page-split">',
													'after' => '</div>',
													'link_before' => '<span>',
													'link_after' => '</span>',
													);
													wp_link_pages( $args );
													?>
													<div class="post__author">
															<p class="post__author__ttl">投稿者</p>
															<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
															<div class="post__author__name"><?php the_author_posts_link(); ?></div>
															<p class="post__author__comment"><?php echo get_the_author_meta( 'description' ) ?></p>
													</div>
													<?php comments_template(); ?>
													<?php if( get_previous_post() || get_next_post() ) : ?>
														<ul class="p-pagenation">
																<?php if ( get_previous_post() ) : ?>
																		<li class="prevpostslink"><?php previous_post_link( '%link', 'Prev' ); ?></li>
																<?php endif; ?>
																<?php if( get_next_post() ): ?>
																		<li class="prevpostslink"><?php next_post_link( '%link', 'Next' ); ?></li>
																<?php endif; ?>
														</ul>
													<?php endif; ?>
							<?php endwhile;
					else :
					?><p>表示する記事がありません</p><?php
					endif; ?>
					<!-- <div class="p-post">
						<h2 class="p-post__ttl"><a href="#">記事タイトル</a></h2>
						<ul class="post__meta">
							<li class="post__meta__item">
								<date class="post__meta__date">2017年10月31日</date>
							</li>
							<li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><a class="post__meta__link" href="#">カテゴリ名</a></i></li>
							<li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><a class="post__meta__link" href="#">タグ名</a></i></li>
						</ul><img class="attachment-post-thumbnail" src="images/eyecatch/001.png" alt="アイキャッチ">
						<p>本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。本文の抜粋が入ります。</p>
						<h3>h3見出し</h3>
						<h4>h4見出し</h4>
						<h5>h5見出し</h5>
						<h6>h6見出し</h6>
						<hr>
						<h3>段落</h3>
						<p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
						<p>本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
						<hr>
						<h3>リストタイプ</h3>
						<h4>定義リスト</h4>
						<dl>
							<dt>定義リスト</dt>
							<dd>定義リスト</dd>
						</dl>
						<ol>
							<li>番号付きリスト</li>
							<li>番号付きリスト
								<ol>
									<li>番号付きリスト</li>
									<li>番号付きリスト</li>
								</ol>
							</li>
						</ol>
						<ul>
							<li>番号無しリスト</li>
							<li>番号無しリスト
								<ul>
									<li>番号無しリスト</li>
									<li>番号無しリスト</li>
								</ul>
							</li>
						</ul>
						<h3>引用文章</h3>
						<blockquote>引用文章が入ります<br><span>http://wp.yat-net.com</span></blockquote><code>&lt;div&gt;<br>    &lt;ul&gt;<br>         &lt;li&gt;text&lt;/li&gt;<br>        &lt;li&gt;text&lt;/li&gt;<br>        &lt;li&gt;text&lt;/li&gt;<br>    &lt;/ul&gt;<br>&lt;/div&gt;</code><img class="alignleft" src="images/004.png" alt="" width="400">
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><img class="alignright" src="images/005.png" alt="" width="400">
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><img class="aligncenter" src="images/006.png" alt="" width="400">
						<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
						<table>
							<tbody>
								<tr>
									<th>テーブルです</th>
									<th>テーブルです</th>
								</tr>
								<tr>
									<td>テーブルです</td>
									<td>テーブルです</td>
								</tr>
							</tbody>
						</table> -->
						<!-- <div class="page-split"><span>1</span><a href="#"><span>2</span></a><a href="#"><span>3</span></a></div>
					</div> -->
					<!-- <div class="p-comment">
						<h2 class="p-comment__ttl">Comment</h2>
						<ol class="p-comment__list">
							<li class="comment parent">
								<div class="comment-body">
									<div class="comment-author"><img class="avatar" src="images/common/ico/author_default.png" alt="auhor">
										<cite>ユーザー名</cite><span>より:</span>
									</div>
									<div class="comment-meta commentmetadata"><a href="#">Octber 11, 2017 at 11:45 pm</a></div>
									<p>コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。</p>
									<div class="reply"><a class="comment-reply-link" href="#">返信</a></div>
								</div>
								<ul class="children">
									<li class="comment bypostauthor">
										<div class="comment-body">
											<div class="comment-author"><img class="avatar" src="images/common/ico/author_default.png" alt="auhor">
												<cite>ユーザー名</cite><span>より:</span>
											</div>
											<div class="comment-meta commentmetadata"><a href="#">Octber 11, 2017 at 11:45 pm</a></div>
											<p>コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。コメントが入ります。</p>
											<div class="reply"><a class="comment-reply-link" href="#">返信</a></div>
										</div>
									</li>
								</ul>
							</li>
						</ol>
						<div class="comment-page-link"><a class="prev page-numbers" href="#">&laquo; 前へ</a></a><a class="page-numbers" href="#">1</a><a class="page-numbers" href="#">2</a><a class="page-numbers" href="#">3</a><span class="page-numbers current">4</span></div> -->
						<!-- <div class="comment-respond">
							<h3 class="comment-respond__ttl">Leave a Reply</h3>
							<p class="comment-notes">メールアドレスが公開されることはありません。<br><span class="required">*</span> が付いている欄は必須項目です</p>
							<form id="commentform" method="post" action="">
								<p class="comment-form-comment">
									<label for="name">name<span class="required">*</span></label>
									<input id="author" name="name" type="text" value="" size="30">
								</p>
								<p class="comment-form-author">
									<label for="email">email<span class="required">*</span></label>
									<input id="email" name="email" type="text" value="" size="30">
								</p>
								<p class="comment-form-email">
									<label for="website">website</label>
									<input id="website" name="website" type="text" value="" size="30">
								</p>
								<p class="comment-form-url">
									<label for="comment">comment<span class="required">*</span>
										<textarea id="comment" name="comment" type="text" value="" size="30"></textarea>
									</label>
								</p>
								<p class="form-submit">
									<input id="submit" name="submit" type="submit" value="POST COMMENT">
								</p>
							</form>
						</div> -->
					<!-- </div>
				</div>
				<div class="p-pagenation"><a class="prevpostslink" rel="next" href="#">Prev</a><a class="nextpostslink" rel="next" href="#">Next</a></div> -->
				</div>
				</div>
				<?php get_sidebar(); ?><!-- //siderbar.phpを読み込むテンプレートタグ（インクルードタグ） -->
			</div>
		</div>
		<?php get_footer(); ?><!-- //footer.phpを読み込むテンプレートタグ（インクルードタグ） -->