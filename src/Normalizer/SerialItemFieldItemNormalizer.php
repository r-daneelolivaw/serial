<?php

namespace Drupal\serial\Normalizer;

use Drupal\serial\Plugin\Field\FieldType\SerialItem;
use Drupal\serialization\Normalizer\ComplexDataNormalizer;

/**
 * Class SerialItemFieldItemNormalizer.
 *
 * @package Drupal\serial\Normalizer
 */
class SerialItemFieldItemNormalizer extends ComplexDataNormalizer {

  /**
   * The interface or class that this Normalizer supports.
   *
   * @var string
   */
  protected $supportedInterfaceOrClass = SerialItem::class;

  /**
   * {@inheritdoc}
   */
  public function normalize($object, $format = NULL, array $context = []) {
    /** @var \Drupal\serial\Plugin\Field\FieldType\SerialItem $object */
    return $object->getValue();
  }

}
