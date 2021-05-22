<?php

//Field Variables
$membership_description = carbon_get_the_post_meta('membership_description');
$membership_price_individual = carbon_get_the_post_meta('membership_price_individual');
$membership_price_household = carbon_get_the_post_meta('membership_price_household');
$membership_highlight = carbon_get_the_post_meta('membership_highlight');
$membership_benefits = carbon_get_the_post_meta('membership_benefits');
?>
<div class="col-lg-6 col-xl-4 d-flex justify-content-center">
  <div class="membership-card">
      <?php
      if ($membership_highlight): ?>
        <div class='membership-card__top membership-card__top--highlight'>
          <span>Most Popular</span>
        </div>
      <?php
      else: ?>
        <div class='membership-card__top'></div>
      <?php
      endif; ?>
    <div class="membership-card__header">
      <h3 class="membership-card__title text-center"><?php
          the_title(); ?></h3>
      <div class="membership-card__prices">
          <?php
          if ($membership_price_individual): ?>
            <div class="membership-card__prices--individual">
              <h4 class="price text-center">$<?= $membership_price_individual ?></h4>
              <h5 class="text-center">Individual</h5>
            </div>
          <?php
          endif; ?>
          <?php
          if ($membership_price_household): ?>
            <div class="membership-card__prices--household">
              <h4 class="price text-center">$<?= $membership_price_household ?></h4>
              <h5 class="text-center">Household</h5>
            </div>
          <?php
          endif; ?>
      </div>
    </div>
    <span class='membership-card__divider'></span>
    <div class="membership-card__body">
        <?= $membership_description ?: null ?>
        <?php
        if ($membership_benefits): ?>
          <ul class='fa-ul'>
              <?php
              foreach ($membership_benefits as $benefit): ?>
                <li class='pb-2'>
                  <span class="fa-li"><i class='<?= $benefit['icon'] ?> fa-lg'></i></span>
                  <span><?= $benefit['description'] ?></span>
                </li>
              <?php
              endforeach; ?>
          </ul>
        <?php
        endif ?>
    </div>
    <div class="membership-card__footer text-center">
      <a class="btn btn-md btn-blue text-white" href="<?php
      the_permalink(); ?>">Sign Up</a>
      <a class="btn btn-md btn-green text-white" href="<?php
      the_permalink(); ?>">Renew</a>
    </div>
  </div>
</div>
