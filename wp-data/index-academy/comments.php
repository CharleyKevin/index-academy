<h1>Comentários</h1>

<div id="comments">
    <h3><?php comments_number('0 Comentários', '1 Comentário', '% Comentários'); ?></h3>

    <?php
        if(have_comments()) : 
    ?>
        <ol class="comment-list">
            <?php 
                wp_list_comments('avatar_size=64&type=comment');
            ?>    
        </ol>
    <?php    
        endif;
        if(comments_open()) : 
    ?>        
        <div id="respond">
            <h3>Deixe o seu comentário:</h3>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">
                <fieldset>
                    <label for="author">Nome:</label>
                    <input type="text" name="author" id="author" value="<?php echo $comment_author;?>"/>
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" value="<?php echo $comment_author_email;?>"/>
                    <label for="comment">Mensagem:</label>
                    <textarea name="comment" id="comment" cols="" rows=""></textarea>

                    <input type="submit" class="commentsubmit" value="Enviar Comentário"/>

                    <?php 
                        comment_id_fields();
                        do_action('comment_form', $post->ID);
                    ?>
                </fieldset>
            </form>
        </div>
    <?php
        else :
    ?>
        <h3>Comentários fechados.</h3>
    <?php
        endif;
    ?>
</div>