<?=$this->layout('index');?>
<div id="content">

    <!-- SERVICES -->
    <section class="services padding-top-70 padding-bottom-70">
        <div class="container">
            <!-- Heading -->
            <div class="heading text-center">
                <h4><?=$this->e($pages['title']);?></h4>
            </div>
        </div>
        <div class="best-services">
            <!-- Row -->
            <div class="container">
                <p><?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?></p>
            </div>
        </div>
    </section>
</div>
