<?php
/**
 * @file
 * Returns the HTML for the site's page (except the front page, which uses page--front.tpl.php.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>




    <!-- Header -->
    <header id="header">
        <?php if ($site_name || $site_slogan): ?>
            <h1 id="logo">
                <a href="<?php print $front_page; ?>"><?php print $site_name; ?> <span><?php print $site_slogan; ?></span></a>
            </h1>
        <?php endif; ?>

        <nav id="nav">
            <ul>
                <li class="current"><a href="/">Welcome</a></li>
                <li class="submenu">
                    <a href="">Menu</a>
                    <?php if($menu_expanded) {
                        print render($menu_expanded);
                      }
                    ?>
                </li>
                <li><?php print $log_button; ?></li>
            </ul>
        </nav>

    </header>

    <!-- Main -->
    <article id="main">

        <header class="special container">

            <?php if ($messages): ?>
                <div id="messages"><div class="section clearfix">
                        <?php print $messages; ?>
                </div></div> <!-- /.section, /#messages -->
            <?php endif; ?>
            <?php if ($tabs): ?>
                <div class="tabs">
                    <?php print render($tabs); ?>
                </div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
                <ul class="action-links">
                    <?php print render($action_links); ?>
                </ul>
            <?php endif; ?>

            <span class="icon fa-laptop"></span>
            <?php print render($title_prefix); ?>
            <h2>
                <?php if ($title):
                   print $title;
                endif; ?>
            </h2>
            <?php print render($title_suffix); ?>
            <?php if(isset($node)): ?>
                <p>
                    <?php

                    print render(field_view_field('node', $node, 'body', array(
                        'label'=>'hidden',
                        'type' => 'text_summary_or_trimmed',
                        'settings'=>array('trim_length' => 50),
                    )));
                    ?>
                </p>
            <? endif; ?>
        </header>

        <!-- One -->
        <section class="wrapper style4 container">

            <div class="row oneandhalf">
                <div class="4u">

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <section>
                            <header>
                                <h3>Magna Feugiat</h3>
                            </header>
                            <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit..</p>
                            <footer>
                                <ul class="buttons">
                                    <li><a href="#" class="button small">Learn More</a></li>
                                </ul>
                            </footer>
                        </section>

                        <section>
                            <a href="#" class="image feature"><img src="images/pic03.jpg" alt="" /></a>
                            <header>
                                <h3>Amet Lorem Tempus</h3>
                            </header>
                            <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                            <footer>
                                <ul class="buttons">
                                    <li><a href="#" class="button small">Learn More</a></li>
                                </ul>
                            </footer>
                        </section>
                    </div>

                </div>
                <div class="8u skel-cell-important">

                    <!-- Content -->
                    <div class="content">
                        <section>
                            <?php print render($page['content']); ?>
                        </section>
                    </div>

                </div>
            </div>
        </section>

        <!-- Two -->
        <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
            <section class="wrapper style1 container special">
                <div class="row">
                    <?php if ($page['triptych_first']): ?>
                        <div class="4u">
                            <section>
                                <span class="icon feature fa-check"></span>
                                <?php print render($page['triptych_first']); ?>
                            </section>
                        </div>
                    <?php endif; ?>
                    <?php if ($page['triptych_middle']): ?>
                        <div class="4u">
                            <section>
                                <span class="icon feature fa-check"></span>
                                <?php print render($page['triptych_middle']); ?>
                            </section>
                        </div>
                    <?php endif; ?>
                    <?php if ($page['triptych_last']): ?>
                        <div class="4u">
                            <section>
                                <span class="icon feature fa-check"></span>
                                <?php print render($page['triptych_last']); ?>
                            </section>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

    </article>

    <!-- Footer -->
    <footer id="footer">

        <?php print $footer_icons; ?>

        <span class="copyright">&copy; <?php print $site_name; ?>. All rights reserved. Design: <a href="http://html5up.net">HTML5 UP</a>.</span>

    </footer>