<?php

namespace Drupal\socialmedia\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "socialmedia_example",
 *   admin_label = @Translation("Social Media Websites"),
 *   category = @Translation("socialmedia")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $useFontAwesome  = \Drupal::config('socialmedia.settings')->get('use_fontawesome');
    if ($useFontAwesome == 'Y'){
      
      $socialmedia = views_embed_view('socialmediafa', 'block_1');  
      $build['content'] = [
        '#markup' => \Drupal::service('renderer')->render($socialmedia) ,   
      ];

      $build['#attached']['library'][] = 'socialmedia/font-awesome';
    } else {
     
      $socialmedia = views_embed_view('socialmedia', 'block_1');
 
      $build['content'] = [                                                   
        '#markup' => \Drupal::service('renderer')->render($socialmedia) ,                                   
      ]; 
    }
    $build['subject'] = 'Social Media';
    return $build;
  }

}
