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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Generic cluster sales information
 *
 * @method string getSkuCode() Obtain Specification flag
 * @method void setSkuCode(string $SkuCode) Set Specification flag
 * @method boolean getOnSale() Obtain available for sale
 * @method void setOnSale(boolean $OnSale) Set available for sale
 * @method integer getTpsLimit() Obtain TPS limit
 * @method void setTpsLimit(integer $TpsLimit) Set TPS limit
 * @method integer getTopicNumLimit() Obtain Number of topics free quota
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set Number of topics free quota
 * @method integer getTopicNumUpperLimit() Obtain Number of topics cap
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) Set Number of topics cap
 * @method array getPriceTags() Obtain Billing item information
 * @method void setPriceTags(array $PriceTags) Set Billing item information
 * @method integer getNodeCount() Obtain Number of storage nodes
 * @method void setNodeCount(integer $NodeCount) Set Number of storage nodes
 */
class GeneralSKU extends AbstractModel
{
    /**
     * @var string Specification flag
     */
    public $SkuCode;

    /**
     * @var boolean available for sale
     */
    public $OnSale;

    /**
     * @var integer TPS limit
     */
    public $TpsLimit;

    /**
     * @var integer Number of topics free quota
     */
    public $TopicNumLimit;

    /**
     * @var integer Number of topics cap
     */
    public $TopicNumUpperLimit;

    /**
     * @var array Billing item information
     */
    public $PriceTags;

    /**
     * @var integer Number of storage nodes
     */
    public $NodeCount;

    /**
     * @param string $SkuCode Specification flag
     * @param boolean $OnSale available for sale
     * @param integer $TpsLimit TPS limit
     * @param integer $TopicNumLimit Number of topics free quota
     * @param integer $TopicNumUpperLimit Number of topics cap
     * @param array $PriceTags Billing item information
     * @param integer $NodeCount Number of storage nodes
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
        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }

        if (array_key_exists("PriceTags",$param) and $param["PriceTags"] !== null) {
            $this->PriceTags = [];
            foreach ($param["PriceTags"] as $key => $value){
                $obj = new PriceTag();
                $obj->deserialize($value);
                array_push($this->PriceTags, $obj);
            }
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }
    }
}
