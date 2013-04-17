<div id="right">

<div id="about">
<h2>About</h2>
Здравейте, това е сайт на който ще намерите <a title="Ръководства" href="http://momo1234.co.nf/wordpress/?page_id=2">ръководства</a>  и <a title="Ресурси" href="http://momo1234.co.nf/wordpress/?page_id=34">ресурси</a> за това как да свършите някоя административна дейност във <a title="ФМИ" href="http://www.fmi.uni-sofia.bg/">ФМИ</a>

Проектът е на отбор "Зеленчук" от състезанието <a title="HackFmi" href="http://hackfmi.com/">HackFmi</a>.
</div>

<div id="category">
<ul>
<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
</ul>
</div>

<div id="recentpost">
<ul>
<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
</ul>
</div>

<div id="recentcomment">
<h2>Recent Comments</h2>
<?php
    global $wpdb;

    $sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID,
    comment_post_ID, comment_author, comment_date_gmt, comment_approved,
    comment_type,comment_author_url,
    SUBSTRING(comment_content,1,30) AS com_excerpt
    FROM $wpdb->comments
    LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID =
    $wpdb->posts.ID)
    WHERE comment_approved = '1' AND comment_type = '' AND
    post_password = ''
    ORDER BY comment_date_gmt DESC
    LIMIT 10";
    $comments = $wpdb->get_results($sql);

    $output = $pre_HTML;
    $output .= "\n<ul>";
    foreach ($comments as $comment) {

    $output .= "\n<li>".strip_tags($comment->comment_author)
    .":" . "&nbsp;<a href=\"" . get_permalink($comment->ID) .
    "#comment-" . $comment->comment_ID . "\" title=\"on " .
    $comment->post_title . "\">" . strip_tags($comment->com_excerpt)
    ."</a></li>";

    }
    $output .= "\n</ul>";
    $output .= $post_HTML;

    echo $output;?>
</div>


</div>

