<?php
/**
 * Apache Solr Search Engine for Magento
 *
 * @category  DMC
 * @package   DMC_Solr
 * @author    Team Magento <magento@digitalmanufaktur.com>
 * @version   0.1.6
 */
class DMC_Solr_Model_SolrServer_Adapter_Landingpage_TypeConverter extends DMC_Solr_Model_SolrServer_TypeConverter
{
    static protected $_staticFields = array(
        'id' => null,
        'name' => null,
        'type_id' => 'simple',
        'store_id' => null,
        'redirect_url' => null
    );
	
    static public function getStaticFields() {
        return self::$_staticFields;
    }
}
