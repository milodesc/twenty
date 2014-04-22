<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


    <!-- Header -->
    <header id="header" class="alt">
        <?php if ($site_name || $site_slogan): ?>
            <h1 id="logo">
                <a href="<?php print $front_page; ?>"><?php print $site_name; ?> <span><?php print $site_slogan; ?></span></a>
            </h1>
        <?php endif; ?>

        <nav id="nav">
            <ul>
                <li class="current"><a href="/">Welcome</a></li>
                <li class="submenu">
                    <a href="">Layouts</a>
                    <ul>
                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="no-sidebar.html">No Sidebar</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="submenu">
                            <a href="">Submenu</a>
                            <ul>
                                <li><a href="#">Dolore Sed</a></li>
                                <li><a href="#">Consequat</a></li>
                                <li><a href="#">Lorem Magna</a></li>
                                <li><a href="#">Sed Magna</a></li>
                                <li><a href="#">Ipsum Nisl</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php if ($user->uid > 0) {
                        print l("Log Out", "/?q=user/logout", array('attributes' => array('class' => 'button special')));
                    }
                    else {
                        print l("Log In", "/?q=user", array('attributes' => array('class' => 'button special')));
                    } ?>
                </li>
            </ul>
        </nav>
    </header>


    <!-- Banner -->
    <section id="banner">

        <!--
            ".inner" is set up as an inline-block so it automatically expands
            in both directions to fit whatever's inside it. This means it won't
            automatically wrap lines, so be sure to use line breaks where
            appropriate (<br />).
        -->
        <div class="inner">
            <header>
                <h2><?php print $site_name; ?></h2>
            </header>
            <p><?php print $site_slogan; ?></p>
            <footer>
                <ul class="buttons vertical">
                    <li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
                </ul>
            </footer>
        </div>
    </section>

    <!-- Main -->
    <article id="main">

        <header class="special container">
            <span class="icon fa-bar-chart-o"></span>
            <h2>As this is my <strong>twentieth</strong> freebie for HTML5 UP<br />
                I decided to give it a really creative name.</h2>
            <p>Turns out <strong>Twenty</strong> was the best I could come up with. Anyway, lame name aside,<br />
                it's minimally designed, fully responsive, built on HTML5/CSS3/<strong>skel</strong>,
                and, like all my stuff,<br />
                released for free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0</a> license. Have fun!</p>
        </header>

        <!-- One -->
        <section class="wrapper style2 container special-alt">
            <div class="row half">
                <div class="8u">

                    <header>
                        <h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
                    </header>
                    <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
                    <footer>
                        <ul class="buttons">
                            <li><a href="#" class="button">Find Out More</a></li>
                        </ul>
                    </footer>

                </div>
                <div class="4u skel-cell-important">

                    <ul class="feature-icons">
                        <li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
                        <li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
                        <li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
                        <li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
                        <li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
                        <li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
                    </ul>

                </div>
            </div>
        </section>

        <!-- Two -->
        <section class="wrapper style1 container special">
            <div class="row">
                <div class="4u">

                    <section>
                        <span class="icon feature fa-check"></span>
                        <header>
                            <h3>This is Something</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    </section>

                </div>
                <div class="4u">

                    <section>
                        <span class="icon feature fa-check"></span>
                        <header>
                            <h3>Also Something</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    </section>

                </div>
                <div class="4u">

                    <section>
                        <span class="icon feature fa-check"></span>
                        <header>
                            <h3>Probably Something</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                    </section>

                </div>
            </div>
        </section>

        <!-- Three -->
        <section class="wrapper style3 container special">

            <header class="major">
                <h2>Next look at this <strong>cool stuff</strong></h2>
            </header>

            <div class="row">
                <div class="6u">

                    <section>
                        <a href="#" class="image feature"><img src="<?php print drupal_get_path("theme", "twenty"); ?>/images/pic01.jpg" alt="" /></a>
                        <header>
                            <h3>A Really Fast Train</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                    </section>

                </div>
                <div class="6u">

                    <section>
                        <a href="#" class="image feature"><img src="<?php print drupal_get_path("theme", "twenty"); ?>/images/pic02.jpg" alt="" /></a>
                        <header>
                            <h3>An Airport Terminal</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                    </section>

                </div>
            </div>
            <div class="row">
                <div class="6u">

                    <section>
                        <a href="#" class="image feature"><img src="<?php print drupal_get_path("theme", "twenty"); ?>/images/pic03.jpg" alt="" /></a>
                        <header>
                            <h3>Hyperspace Travel</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                    </section>

                </div>
                <div class="6u">

                    <section>
                        <a href="#" class="image feature"><img src="<?php print drupal_get_path("theme", "twenty"); ?>/images/pic04.jpg" alt="" /></a>
                        <header>
                            <h3>And Another Train</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                    </section>

                </div>
            </div>

            <footer class="major">
                <ul class="buttons">
                    <li><a href="#" class="button">See More</a></li>
                </ul>
            </footer>

        </section>

    </article>

    <div id="main">

        <div id="content" class="column" role="main">
            <?php print render($page['highlighted']); ?>
            <?php print $breadcrumb; ?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
                <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
        </div>

        <div id="navigation">

            <?php if ($main_menu): ?>
                <nav id="main-menu" role="navigation" tabindex="-1">
                    <?php
                    // This code snippet is hard to modify. We recommend turning off the
                    // "Main menu" on your sub-theme's settings form, deleting this PHP
                    // code block, and, instead, using the "Menu block" module.
                    // @see https://drupal.org/project/menu_block
                    print theme('links__system_main_menu', array(
                        'links' => $main_menu,
                        'attributes' => array(
                            'class' => array('links', 'inline', 'clearfix'),
                        ),
                        'heading' => array(
                            'text' => t('Main menu'),
                            'level' => 'h2',
                            'class' => array('element-invisible'),
                        ),
                    )); ?>
                </nav>
            <?php endif; ?>

            <?php print render($page['navigation']); ?>

        </div>

        <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_first  = render($page['sidebar_first']);
        $sidebar_second = render($page['sidebar_second']);
        ?>

        <?php if ($sidebar_first || $sidebar_second): ?>
            <aside class="sidebars">
                <?php print $sidebar_first; ?>
                <?php print $sidebar_second; ?>
            </aside>
        <?php endif; ?>

    </div>

    <?php print render($page['footer']); ?>

<?php print render($page['bottom']); ?>
