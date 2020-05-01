<!-- welcome page (main tab) -->
<div id="yui-main">
    <div class="yui-a">
        <div>
            <?php
            $this->widget('lms_tab', array(
                'active' => 'home'
            ));
            ?>
        </div>
    </div>
    <div id="tab_content"></div>
</div>

<script type="text/javascript">
    document.getElementById('tab_content').innerHTML = '<?php echo trim(json_encode($_content, JSON_HEX_APOS),'"');  ?>';
</script>

<style type="text/css">
    #tab_content {
        background: #FFF;
        
        text-align: left;
        
    }
    #tab_content h1 {
        padding-bottom: 1rem;
    }
</style>