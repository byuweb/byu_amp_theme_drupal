<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function byu_amp_d8_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {

// Search Settings

    $form['header_style']['search'] = array(
        '#type' => 'fieldset',
        '#title' => 'Search Settings',
        '#open' => FALSE,
    );
    $form['header_style']['search']['search_use'] = array(
        '#type'          => 'checkbox',
        '#title'         => t('Display a Search bar in the header'),
        '#default_value' => theme_get_setting('search_use'),
    );

// Hero
    $form['header_style']['hero'] = array(
        '#type' => 'fieldset',
        '#title' => t('Hero Settings'),
        '#open' => FALSE,
    );

    $form['header_style']['hero']['hero_width'] = array(
        '#type' => 'select',
        '#title' => t('Hero Space Width'),
        '#options' => array(
            0 => t("Full Width (default)"),
            1 => t('Custom Width'),
        ),
        '#description' => t('The custom page width setting is under BYU General Page. See the next section of settings.'),
        '#default_value' => theme_get_setting('hero_width'),
    );

    $form['header_style']['hero']['hero_image_width'] = array(
        '#type'          => 'checkbox',
        '#title'         => t('Make images stretch full width'),
        '#default_value' => theme_get_setting('hero_image_width'),
        '#description'   => t("Whether you are using a full width or constrained width hero, use this setting to tell images to expand to the full width of the hero space."),
    );


    /* ---- General Page settings -- */
    $form['general_page'] = array(
        '#type' => 'details',
        '#title' => t('BYU General Page'),
        '#group' => 'design',
    );
    $form['general_page']['custom_width'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Custom Page Width'),
        '#default_value' => theme_get_setting('custom_width'),
        '#description'   => t("Enter the number of pixels you would like. i.e. '1200' fof 1200px. Defaults to 1000px."),
    );

}
