<?php if( !empty($items) ){ ?>
    <?php if ($this->Paginator->counter('{:pages}') > 1 ){ ?>

        <div class="pagination">
            <ul class="page">
            <?php echo $this->Paginator->prev('前へ', $options = array('tag'=>'li', 'class'=>'prev'), $disabledTitle = null, $disabledOptions = array()); ?>
            <?php echo $this->Paginator->numbers( array( 'tag'=>'li', 'before'=>'', 'after'=>'', 'first'=>5, 'last'=>5, 'separator'=>'', 'modulus'=>8, 'ellipsis'=>'' ) ); ?>
            <?php echo $this->Paginator->next('次へ', $options = array('tag'=>'li', 'class'=>'next'), $disabledTitle = null, $disabledOptions = array()); ?>
            </ul>
        </div>

    <?php } ?>
<?php } ?>
