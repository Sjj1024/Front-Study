参考链接：https://www.cnblogs.com/asqq/archive/2012/12/26/2833487.html
https://www.cnblogs.com/huangcong/archive/2011/07/04/2097764.html


WordPress各种标签调用集合
wordpress是一种使用PHP语言开发的博客平台，用户可以在支持PHP和MySQL 数据库的服务器上架设自己的网志，插件众多，易于扩充功能。安装和使用都非常方便。目前 WordPress 已经成为主流的 Blog 搭建平台。这个网站就用的是WordPress构建的。

WordPress模板基本文件

style.css 样式表文件

index.php 主页文件

single.php 文章单页文件

page.php 页面文件

archvie.php 分类和日期存档页文件

searchform.php 搜索表单文件

search.php 搜索页面文件

comments.php 留言区域文件(包括留言列表和留言框)

404.php 404错误页面

header.php 网页头部文件

sidebar.php 网页侧边栏文件

footer.php 网页底部文件

WordPress Header头部 PHP代码

注: 也就是位于<head>和</head>之间的PHP代码

<?php bloginfo(‘name’); ?> 网站标题
<?php wp_title(); ?> 文章或页面标题

<?php bloginfo(‘stylesheet_url’); ?> WordPress主题样式表文件style.css的相对地址

<?php bloginfo(‘pingback_url’); ?> WordPress博客的Pingback地址

<?php bloginfo(‘template_url’); ?> WordPress主题文件的相对地址

<?php bloginfo(‘version’); ?> 博客的Wordpress版本

<?php bloginfo(‘atom_url’); ?> WordPress博客的Atom地址

<?php bloginfo(‘rss2_url’); ?> WordPress博客的RSS2地址

<?php bloginfo(‘url’); ?> WordPress博客的绝对地址

<?php bloginfo(‘name’); ?> WordPress博客的名称

<?php bloginfo(‘html_type’); ?> 网站的HTML版本

<?php bloginfo(‘charset’); ?> 网站的字符编码格式
WordPress 主体模板 PHP代码

<?php the_content(); ?> 文章内容
<?php if(have_posts()) : ?> 确认是否有文章

<?php while(have_posts()) : the_post(); ?> 如果有，则显示全部文章

<?php endwhile; ?> 结束PHP函数”while”

<?php endif; ?> 结束PHP函数”if”

<?php get_header(); ?> header.php文件的内容

<?php get_sidebar(); ?> sidebar.php文件的内容

<?php get_footer(); ?> footer.php文件的内容

<?php the_time(‘m-d-y’) ?> 显示格式为”02-19-08″的日期

<?php comments_popup_link(); ?> 显示一篇文章的留言链接

<?php the_title(); ?> 显示一篇文章或页面的标题

<?php the_permalink() ?> 显示一篇文章或页面的永久链接/URL地址

<?php the_category(‘, ‘) ?> 显示一篇文章或页面的所属分类

<?php the_author(); ?> 显示一篇文章或页面的作者

<?php the_ID(); ?> 显示一篇文章或页面的ID

<?php edit_post_link(); ?> 显示一篇文章或页面的编辑链接

<?php get_links_list(); ?> 显示Blogroll中的链接

<?php comments_template(); ?> comments.php文件的内容

<?php wp_list_pages(); ?> 显示一份博客的页面列表

<?php wp_list_cats(); ?> 显示一份博客的分类列表

<?php next_post_link(‘ %link ‘) ?> 下一篇文章的URL地址

<?php previous_post_link(‘%link’) ?> 上一篇文章的URL地址

<?php get_calendar(); ?> 调用日历

<?php wp_get_archives() ?> 显示一份博客的日期存档列表

<?php posts_nav_link(); ?> 显示较新文章链接(上一页)和较旧文章链接（下一页）

<?php bloginfo(‘description’); ?> 显示博客的描述信息
其它的一些Wordpress模板代码

/%postname%/ 显示博客的自定义永久链接
<?php the_search_query(); ?> 搜索表单的值

<?php _e(‘Message’); ?> 打印输出信息

<?php wp_register(); ?> 显示注册链接

<?php wp_loginout(); ?> 显示登入/登出链接

<!–next page–> 在文章或页面中插入分页

<!–more–> 截断文章

<?php wp_meta(); ?> 显示管理员的相关控制信息

<?php timer_stop(1); ?> 显示载入页面的时间

<?php echo get_num_queries(); ?> 显示载入页面查询
1. wordpress调用最新文章

WordPress最新文章的调用可以使用一行很简单的模板标签wp_get_archvies来实现. 代码如下：

<?php get_archives(‘postbypost’, 10); ?> (显示10篇最新更新文章)
或者

<?php wp_get_archives(‘type=postbypost&limit=20&format=custom’); ?>
后面这个代码显示你博客中最新的20篇文章，其中format=custom这里主要用来自定义这份文章列表的显示样式。具体的参数和使用方法你可 以参考官方的使用说明- wp_get_archvies。(fromat=custom也可以不要，默认以UL列表显示文章标题。)

补充: 通过WP的query_posts()函数也能调用最新文章列表， 虽然代码会比较多一点，但可以更好的控制Loop的显示，比如你可以设置是否显示摘要。具体的使用方法也可以查看官方的说明。

2. wordpress调用随机文章

<?php
$rand_posts = get_posts(‘numberposts=10&orderby=rand’);

foreach( $rand_posts as $post ) :

?>

<!–下面是你想自定义的Loop–>

<li><a href=”<?php the_permalink(); ?>”><?php the_title(); ?></a></li>

<?php endforeach; ?>
3. wordpress调用最新留言

下面是我之前在一个Wordpress主题中代到的最新留言代码，具体也记不得是哪个主题了。该代码直接调用数据库显示一份最新留言。其中 LIMIT 10限制留言显示数量。绿色部份则是每条留言的输出样式。

<?php
global $wpdb;

$sql = “SELECT DISTINCT ID, post_title, post_password, comment_ID,

comment_post_ID, comment_author, comment_date_gmt, comment_approved,

comment_type,comment_author_url,

SUBSTRING(comment_content,1,30) AS com_excerpt

FROM $wpdb->comments

LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =

$wpdb->posts.ID)

WHERE comment_approved = ’1′ AND comment_type = ” AND

post_password = ”

ORDER BY comment_date_gmt DESC

LIMIT 10″;

$comments = $wpdb->get_results($sql);

$output = $pre_HTML; foreach ($comments as $comment) {

$output .= “n<li>”.strip_tags($comment->comment_author)

.”:” . ” <a href=”” . get_permalink($comment->ID) .

“#comment-” . $comment->comment_ID . “” title=”on ” .

$comment->post_title . “”>” . strip_tags($comment->com_excerpt)

.”</a></li>”;

} $output .= $post_HTML;

echo $output;?>
4.wordpress调用相关文章

在文章页显示相关文章

<?php
$tags = wp_get_post_tags($post->ID);

if ($tags) {

$first_tag = $tags[0]->term_id;

$args=array(

‘tag__in’ => array($first_tag),

‘post__not_in’ => array($post->ID),

‘showposts’=>10,

‘caller_get_posts’=>1

);

$my_query = new WP_Query($args);

if( $my_query->have_posts() ) {

while ($my_query->have_posts()) : $my_query->the_post(); ?>

<li><a href=”<?php the_permalink() ?>” rel=”bookmark” title=”<?php the_title_attribute(); ?>”><?php the_title();?> <?php comments_number(‘ ‘,’(1)’,’(%)’); ?></a></li>

<?php

endwhile;

}

}

wp_reset_query();

?>
5.wordpress调用指定分类的文章

<?php $posts = get_posts( “category=4&numberposts=10″ ); ?>
<?php if( $posts ) : ?>

<ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

<li>

<a href=”<?php the_permalink() ?>” rel=”bookmark” title=”<?php the_title(); ?>”><?php the_title(); ?></a>

</li>

<?php endforeach; ?>

</ul>

<?php endif; ?>
6.wordpress去评论者链接的评论输出

<?php
global $wpdb;

$sql = “SELECT DISTINCT ID, post_title, post_password, comment_ID,

comment_post_ID, comment_author, comment_date_gmt, comment_approved,

comment_type,comment_author_url,

SUBSTRING(comment_content,1,14) AS com_excerpt

FROM $wpdb->comments

LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =

$wpdb->posts.ID)

WHERE comment_approved = ’1′ AND comment_type = ” AND

post_password = ”

ORDER BY comment_date_gmt DESC

LIMIT 10″;

$comments = $wpdb->get_results($sql);

$output = $pre_HTML;

foreach ($comments as $comment) {

$output .= “ <li>”.strip_tags($comment->comment_author).”:” . ” <a href=”” . get_permalink($comment->ID) .

“#comment-” . $comment->comment_ID . “” title=”on ” .

$comment->post_title . “”>” . strip_tags($comment->com_excerpt).”</a></li>”;

}

$output .= $post_HTML;

echo $output;?>
7.wordpress调用含gravatar头像的评论输出

<?php
global $wpdb;

$sql = “SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved,comment_author_email, comment_type,comment_author_url, SUBSTRING(comment_content,1,10) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = ’1′ AND comment_type = ” AND comment_author != ‘郑 永’ AND post_password = ” ORDER BY comment_date_gmt DESC LIMIT 10″;

$comments = $wpdb->get_results($sql);

$output = $pre_HTML;

foreach ($comments as $comment)

{

$output .= “ <li>”.get_avatar(get_comment_author_email(‘comment_author_email’), 18). ” <a href=”” . get_permalink($comment->ID) . “#comment-” . $comment->comment_ID . “” title=”” . $comment->post_title . ” 上的评论”>”. strip_tags($comment->comment_author) .”： “. strip_tags($comment->com_excerpt) .”</a></li>”;

}

$output .= $post_HTML;

$output = convert_smilies($output);

echo $output;

?>
上面代码把comment_author的值改成你的ID，18是头像大小，10是评论数量。

 

8.wordpress调用网站统计大全

1、文章总数：

<?php $count_posts = wp_count_posts(); echo $published_posts = $count_posts->publish;?>
2、草稿数目：

<?php $count_posts = wp_count_posts(); echo $draft_posts = $count_posts->draft; ?>
 

3、评论总数：

<?php echo $wpdb->get_var(“SELECT COUNT(*) FROM $wpdb->comments”);?>
 

4、成立时间：

<?php echo floor((time()-strtotime(“2008-8-18″))/86400); ?>
 

5、标签总数：

<?php echo $count_tags = wp_count_terms(‘post_tag’); ?>
 

6、页面总数：

<?php $count_pages = wp_count_posts(‘page’); echo $page_posts = $count_pages->publish; ?>
 

7、分类总数：

<?php echo $count_categories = wp_count_terms(‘category’); ?>
 

8、链接总数：

<?php $link = $wpdb->get_var(“SELECT COUNT(*) FROM $wpdb->links WHERE link_visible = ‘Y’”); echo $link; ?>
 

9、用户总数：

<?php $users = $wpdb->get_var(“SELECT COUNT(ID) FROM $wpdb->users”); echo $users; ?>
 

10、最后更新：

<?php $last = $wpdb->get_results(“SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = ‘post’ OR post_type = ‘page’) AND (post_status = ‘publish’ OR post_status = ‘private’)”);$last = date(‘Y-n-j’, strtotime($last[0]->MAX_m));echo $last; ?>
9.wordpress判断语句

is_single()

判断是否是具体文章的页面

is_single(’2′)

判断是否是具体文章（id=2）的页面

is_single(‘Beef Stew’)

判断是否是具体文章（标题判断）的页面

is_single(‘beef-stew’)

判断是否是具体文章（slug判断）的页面

comments_open()

是否留言开启

pings_open()

是否开启ping

is_page()

是否是页面

is_page(’42′)

id判断，即是否是id为42的页面

is_page(‘About Me’)

判断标题

is_page(‘about-me’)

slug判断

is_category()

是否是分类

is_category(’6′)

id判断，即是否是id为6的分类

is_category(‘Cheeses’)

分类title判断

is_category(‘cheeses’)

分类 slug判断

in_category(’5′)

判断当前的文章是否属于分类5

is_author()

将所有的作者的页面显示出来

is_author(’1337′)

显示author number为1337的页面

is_author(‘Elite Hacker’)

通过昵称来显示当前作者的页面

is_author(‘elite-hacker’)

下面是通过不同的判断实现以年、月、日、时间等方式来显示归档

is_date()

is_year()

is_month()

is_day()

is_time()

判断当前是否是归档页面

is_archive()

判断是否是搜索

is_search()

判断页面是否404

is_404()

判断是否翻页，比如你当前的blog是http://domain.com 显示http://domain.com?paged=2的时候，这个判断将返 回真，通过这个函数可以配合is_home来控制某些只能在首页显示的界面，

例如：

<?php if(is_single()):?>
//这里写你想显示的内容，包括函数

<?php endif;?>

或者：

<?php if(is_home() && !is_paged() ):?>

//这里写你想显示的内容，包括函数

<?php endif;?>
10.wordpress非插件同步twitter

<?php
require_once (ABSPATH . WPINC . ‘/class-feed.php’);

$feed = new SimplePie();

$feed->set_feed_url(‘http://feeds.feedburner.com/agting′);

$feed->set_file_class(‘WP_SimplePie_File’);

$feed->set_cache_duration(600);

$feed->init();

$feed->handle_content_type();

$items = $feed->get_items(0,1);

foreach($items as $item) {

echo ‘<a target=”_blank” rel=”external nofollow” title=”Follow Me on Twitter” href=”http://twitter.com/agting″>@用户名</a>: ‘.$item->get_description();

}

?>
代码中的agting改成你的twitter用户名，改成你的名字。

另一种调用方法需要你的空间是国外主机：

<?php
// Your twitter username.

$username = “wange1228″;

// Prefix – some text you want displayed before your latest tweet.

// (HTML is OK, but be sure to escape quotes with backslashes: for example href=”link.html”)

// Suffix – some text you want display after your latest tweet. (Same rules as the prefix.)

$suffix = “”;

$feed = “http://search.twitter.com/search.atom?q=from:” . $username . “&rpp=1″;

function parse_feed($feed) {

$stepOne = explode(“<content type=”html”>”, $feed);

$stepTwo = explode(“</content>”, $stepOne[1]);

$tweet = $stepTwo[0];

$tweet = str_replace(“&lt;”, “<”, $tweet);

$tweet = str_replace(“&gt;”, “>”, $tweet);

return $tweet;

}

$twitterFeed = file_get_contents($feed);

echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);

?>
总结一下这个方法的特点：

1、非插件.

2、不用验证用户名和密码，也就是说你可以指定调用任何一个人的 tweet.

3、可以自定义 tweet 信息后显示的文字，就是 $suffix = “”; 这里.

4、只能调用最新的一条 tweet，刚好满足我的需求。

5、大概只有国外空间才能使用.（经我验证，确实如此）

11.wordpress 非插件调用评论表情

<!–smilies–>
<?php

function wp_smilies() {

global $wpsmiliestrans;

if ( !get_option(‘use_smilies’) or (empty($wpsmiliestrans))) return;

$smilies = array_unique($wpsmiliestrans);

$link=”;

foreach ($smilies as $key => $smile) {

$file = get_bloginfo(‘wpurl’).’/wp-includes/images/smilies/’.$smile;

$value = ” “.$key.” “;

$img = “<img src=”{$file}” alt=”{$smile}” />”;

$imglink = htmlspecialchars($img);

$link .= “<a href=”#commentform” title=”{$smile}” onclick=”document.getElementByIdx_x(‘comment’).value += ‘{$value}’”>{$img}</a>&nbsp;”;

}

echo ‘<div class=”wp_smilies”>’.$link.’</div>’;

}

?>

<?php wp_smilies();?>
将以上代码复制到 comments.php 中合适的位置。
