<?php

$title = isset($_title) && $_title ? $_title : 'RVDT 2016';

?>

<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UxA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="components/reset.css">
  <link rel="stylesheet" type="text/css" href="components/site.css">

  <link rel="stylesheet" type="text/css" href="components/container.css">
  <link rel="stylesheet" type="text/css" href="components/grid.css">
  <link rel="stylesheet" type="text/css" href="components/header.css">
  <link rel="stylesheet" type="text/css" href="components/image.css">
  <link rel="stylesheet" type="text/css" href="components/menu.css">

  <link rel="stylesheet" type="text/css" href="components/divider.css">
  <link rel="stylesheet" type="text/css" href="components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="components/segment.css">
  <link rel="stylesheet" type="text/css" href="components/button.css">
  <link rel="stylesheet" type="text/css" href="components/list.css">
  <link rel="stylesheet" type="text/css" href="components/icon.css">
  <link rel="stylesheet" type="text/css" href="components/table.css">
  <?php if($user_device == 'mobile') { ?>
  <link rel="stylesheet" type="text/css" href="components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="components/transition.css">
  <?php } ?>

  <link rel="stylesheet" type="text/css" href="stylesheets/main.css">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="components/visibility.js"></script>
  <script src="components/sidebar.js"></script>
  <script src="components/transition.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>