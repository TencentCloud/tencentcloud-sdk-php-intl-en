<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product sales information
 *
 * @method string getInstanceType() Obtain Specifies the product type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
 * @method void setInstanceType(string $InstanceType) Set Specifies the product type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
 * @method string getSkuCode() Obtain Specification code
 * @method void setSkuCode(string $SkuCode) Set Specification code
 * @method integer getTpsLimit() Obtain TPS limit
 * @method void setTpsLimit(integer $TpsLimit) Set TPS limit
 * @method integer getScaledTpsLimit() Obtain Elastic TPS upper limit
 * @method void setScaledTpsLimit(integer $ScaledTpsLimit) Set Elastic TPS upper limit
 * @method integer getTopicNumLimit() Obtain Default maximum number of topics.
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set Default maximum number of topics.
 * @method integer getGroupNumLimit() Obtain Maximum number of consumer groups
 * @method void setGroupNumLimit(integer $GroupNumLimit) Set Maximum number of consumer groups
 * @method integer getDefaultRetention() Obtain Default message retention time, in hours
 * @method void setDefaultRetention(integer $DefaultRetention) Set Default message retention time, in hours
 * @method integer getRetentionUpperLimit() Obtain Adjustable maximum message retention time, in hours
 * @method void setRetentionUpperLimit(integer $RetentionUpperLimit) Set Adjustable maximum message retention time, in hours
 * @method integer getRetentionLowerLimit() Obtain Adjustable minimum message retention time, in hours
 * @method void setRetentionLowerLimit(integer $RetentionLowerLimit) Set Adjustable minimum message retention time, in hours
 * @method integer getMaxMessageDelay() Obtain Maximum delayed message duration, in hours
 * @method void setMaxMessageDelay(integer $MaxMessageDelay) Set Maximum delayed message duration, in hours
 * @method boolean getOnSale() Obtain Whether it is purchasable
 * @method void setOnSale(boolean $OnSale) Set Whether it is purchasable
 * @method array getPriceTags() Obtain Billing item information
 * @method void setPriceTags(array $PriceTags) Set Billing item information
 * @method integer getTopicNumUpperLimit() Obtain Default maximum number of topics.
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) Set Default maximum number of topics.
 */
class ProductSKU extends AbstractModel
{
    /**
     * @var string Specifies the product type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
     */
    public $InstanceType;

    /**
     * @var string Specification code
     */
    public $SkuCode;

    /**
     * @var integer TPS limit
     */
    public $TpsLimit;

    /**
     * @var integer Elastic TPS upper limit
     */
    public $ScaledTpsLimit;

    /**
     * @var integer Default maximum number of topics.
     */
    public $TopicNumLimit;

    /**
     * @var integer Maximum number of consumer groups
     */
    public $GroupNumLimit;

    /**
     * @var integer Default message retention time, in hours
     */
    public $DefaultRetention;

    /**
     * @var integer Adjustable maximum message retention time, in hours
     */
    public $RetentionUpperLimit;

    /**
     * @var integer Adjustable minimum message retention time, in hours
     */
    public $RetentionLowerLimit;

    /**
     * @var integer Maximum delayed message duration, in hours
     */
    public $MaxMessageDelay;

    /**
     * @var boolean Whether it is purchasable
     */
    public $OnSale;

    /**
     * @var array Billing item information
     */
    public $PriceTags;

    /**
     * @var integer Default maximum number of topics.
     */
    public $TopicNumUpperLimit;

    /**
     * @param string $InstanceType Specifies the product type.
Trial version.
BASIC version.
PRO, professional edition.
PLATINUM edition.
     * @param string $SkuCode Specification code
     * @param integer $TpsLimit TPS limit
     * @param integer $ScaledTpsLimit Elastic TPS upper limit
     * @param integer $TopicNumLimit Default maximum number of topics.
     * @param integer $GroupNumLimit Maximum number of consumer groups
     * @param integer $DefaultRetention Default message retention time, in hours
     * @param integer $RetentionUpperLimit Adjustable maximum message retention time, in hours
     * @param integer $RetentionLowerLimit Adjustable minimum message retention time, in hours
     * @param integer $MaxMessageDelay Maximum delayed message duration, in hours
     * @param boolean $OnSale Whether it is purchasable
     * @param array $PriceTags Billing item information
     * @param integer $TopicNumUpperLimit Default maximum number of topics.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ScaledTpsLimit",$param) and $param["ScaledTpsLimit"] !== null) {
            $this->ScaledTpsLimit = $param["ScaledTpsLimit"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("GroupNumLimit",$param) and $param["GroupNumLimit"] !== null) {
            $this->GroupNumLimit = $param["GroupNumLimit"];
        }

        if (array_key_exists("DefaultRetention",$param) and $param["DefaultRetention"] !== null) {
            $this->DefaultRetention = $param["DefaultRetention"];
        }

        if (array_key_exists("RetentionUpperLimit",$param) and $param["RetentionUpperLimit"] !== null) {
            $this->RetentionUpperLimit = $param["RetentionUpperLimit"];
        }

        if (array_key_exists("RetentionLowerLimit",$param) and $param["RetentionLowerLimit"] !== null) {
            $this->RetentionLowerLimit = $param["RetentionLowerLimit"];
        }

        if (array_key_exists("MaxMessageDelay",$param) and $param["MaxMessageDelay"] !== null) {
            $this->MaxMessageDelay = $param["MaxMessageDelay"];
        }

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("PriceTags",$param) and $param["PriceTags"] !== null) {
            $this->PriceTags = [];
            foreach ($param["PriceTags"] as $key => $value){
                $obj = new PriceTag();
                $obj->deserialize($value);
                array_push($this->PriceTags, $obj);
            }
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }
    }
}
