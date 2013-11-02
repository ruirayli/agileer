<?php
  require( dirname( __FILE__ ) . '/blog/wp-blog-header.php' ); 
  define('HOMEPAGE', true);
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
    <!-- NAVBAR
    ================================================== -->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="assets/img/slide-04.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>经验心得</h1>
              <p class="lead">生活、技术碎碎念；经验、心得共分享。</p>
              <a class="btn btn-large btn-primary" href="#">去围观</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/slide-05.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>项目案例</h1>
              <p class="lead">听说技术出身的都有完美主义倾向，但这里有好多残缺....</p>
              <a class="btn btn-large btn-primary" href="#">去指导他</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="assets/img/slide-06.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>本站福利</h1>
              <p class="lead">我不是土豪，但我会给你提供小福利....</p>
              <a class="btn btn-large btn-primary" href="#">问他要</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="assets/img/work.jpg" >
          <h2>工作</h2>
          <p>虽然不能“do right thing in right time”，但至少可以“do something rightly in some right time”。有时身居光环之中视野会比较狭窄，没太多时间去思考其他东西，也许在空旷大地上更可能会找到一飞冲天的地方......</p>
          <p><a class="btn" href="#">工作思考 &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="assets/img/agile.jpg">
          <h2>项目</h2>
          <p>互联网产品研发的特色，兴奋协作的敏捷文化，从用户反馈、产品规划、项目跟踪、质量保证到构建发布的企业级研发协作生态圈，小项目，大视角，敏捷迭代，小步快跑。一起来体会程序之美、架构之美和全局之美。</p>
          <p><a class="btn" href="#">项目经验 &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="assets/img/life_min.jpg">
          <h2>生活</h2>
          <p>深圳是个年轻、有活力，和有爱心的城市，这里的很多设施都强调人性化。来了就是深圳人，热情与包容，压力与现实。精神从来都是很丰满的，只是现实也总是很骨感。深圳生活不能承受之轻，你想轻还是重？</p>
          <p><a class="btn" href="#">生活感悟 &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right project-img-circle" src="assets/img/project_1.jpg">
        <h2 class="featurette-heading">研发管理 <span class="muted">敏捷开发</span></h2>
        <p class="lead">通过提炼主流敏捷研发模式和方法论的精髓，结合互联网产品研发的特色，融合社区化理念和兴奋协作的敏捷文化，提供贯穿敏捷研发生命周期的一站式服务。</p>
        <p class="lead">采用LNMP架构，改良的Cakephp框架，利用MHA的高可用Mysql架构设计，并使用LVS和Haproxy做负载均衡，敏捷的开发迭代、单元测试和代码重构，保证代码活力和业务健壮。</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left project-img-circle" src="assets/img/project_2.jpg">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right project-img-circle" src="assets/img/project_3.jpg">
        <h2 class="featurette-heading">管理系统 <span class="muted">质量&&性能</span></h2>
        <p class="lead">迭代开发，小步快跑，在系统稳速增长中，统计并进行系统的前端、后台、数据库性能优化，在瓶颈中追求性能的快感。</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">回到顶部</a></p>
        <p>Copyright&copy;2012-2013 Ray Inc. All Rights Reserved. 瑞家园 版权所有. &middot;</p>
      </footer>

    </div><!-- /.main -->
</div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
