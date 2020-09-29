<?php

namespace Drupal\socialmedia\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Link;
/**
 * Configure socialmedia settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'socialmedia_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['socialmedia.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['use_fontawesome'] = [
      '#type' => 'select',
      '#title' => $this->t('Use Font Awesome CDN'),
      '#default_value' => $this->config('socialmedia.settings')->get('use_fontawesome'),
      '#options' => [                                                               
        'Y' => $this                                                          
      	  ->t('Yes'),   
        'N' => $this                                                                
          ->t('No')
      ]
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (($form_state->getValue('use_fontawesome') != 'N') && ($form_state->getValue('use_fontawesome') != 'Y')) {
      $form_state->setErrorByName('use_fontawesome', $this->t('This value should be yes or no.'));
    }
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('socialmedia.settings')
      ->set('use_fontawesome', $form_state->getValue('use_fontawesome'))
      ->save();
    
   \Drupal::messenger()->addWarning(t('Do not forget to <a href="/admin/config/development/performance">clear the cache</a>.'));


    parent::submitForm($form, $form_state);
  }

}
