<?php

namespace Drupal\iq_multidomain_sitemap_extension;

use Drupal\xmlsitemap\XmlSitemapWriter;

/**
 * Custom XMLSitemapWriter that filters out empty elements.
 */
class MultidomainExtensionXmlSitemapWriter extends XmlSitemapWriter {

  /**
   * {@inheritdoc}
   */
  public function writeElement(string $name, array|string|null $content = null): bool {
    // Only print element if it has non-empty content.
    if ($content !== null && $content !== '' && $content !== []) {
      return parent::writeElement($name, $content);
    }
    return false;
  }

}
