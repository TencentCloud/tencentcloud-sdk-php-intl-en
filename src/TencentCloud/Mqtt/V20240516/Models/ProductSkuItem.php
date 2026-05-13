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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT ProductSkuItem
 *
 * @method string getInstanceType() Obtain Specification type
BASIC: Basic Edition.
PRO: Professional Edition
PLATINUM: Platinum version
 * @method void setInstanceType(string $InstanceType) Set Specification type
BASIC: Basic Edition.
PRO: Professional Edition
PLATINUM: Platinum version
 * @method string getSkuCode() Obtain Specification code
 * @method void setSkuCode(string $SkuCode) Set Specification code
 * @method boolean getOnSale() Obtain whether required or not
1: available for sale
0: unsellable
 * @method void setOnSale(boolean $OnSale) Set whether required or not
1: available for sale
0: unsellable
 * @method integer getTopicNumLimit() Obtain Limit on the number of topics.
 * @method void setTopicNumLimit(integer $TopicNumLimit) Set Limit on the number of topics.
 * @method integer getTpsLimit() Obtain Sum of the quantity of messages produced and consumed per second in an MQTT cluster.
 * @method void setTpsLimit(integer $TpsLimit) Set Sum of the quantity of messages produced and consumed per second in an MQTT cluster.
 * @method integer getClientNumLimit() Obtain Number of client connections
 * @method void setClientNumLimit(integer $ClientNumLimit) Set Number of client connections
 * @method integer getMaxSubscriptionPerClient() Obtain Maximum number of subscriptions for a single client
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) Set Maximum number of subscriptions for a single client
 * @method integer getAuthorizationPolicyLimit() Obtain Number of authorization rules
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) Set Number of authorization rules
 * @method array getPriceTags() Obtain Billing item information
 * @method void setPriceTags(array $PriceTags) Set Billing item information
 */
class ProductSkuItem extends AbstractModel
{
    /**
     * @var string Specification type
BASIC: Basic Edition.
PRO: Professional Edition
PLATINUM: Platinum version
     */
    public $InstanceType;

    /**
     * @var string Specification code
     */
    public $SkuCode;

    /**
     * @var boolean whether required or not
1: available for sale
0: unsellable
     */
    public $OnSale;

    /**
     * @var integer Limit on the number of topics.
     */
    public $TopicNumLimit;

    /**
     * @var integer Sum of the quantity of messages produced and consumed per second in an MQTT cluster.
     */
    public $TpsLimit;

    /**
     * @var integer Number of client connections
     */
    public $ClientNumLimit;

    /**
     * @var integer Maximum number of subscriptions for a single client
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer Number of authorization rules
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var array Billing item information
     */
    public $PriceTags;

    /**
     * @param string $InstanceType Specification type
BASIC: Basic Edition.
PRO: Professional Edition
PLATINUM: Platinum version
     * @param string $SkuCode Specification code
     * @param boolean $OnSale whether required or not
1: available for sale
0: unsellable
     * @param integer $TopicNumLimit Limit on the number of topics.
     * @param integer $TpsLimit Sum of the quantity of messages produced and consumed per second in an MQTT cluster.
     * @param integer $ClientNumLimit Number of client connections
     * @param integer $MaxSubscriptionPerClient Maximum number of subscriptions for a single client
     * @param integer $AuthorizationPolicyLimit Number of authorization rules
     * @param array $PriceTags Billing item information
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

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("MaxSubscriptionPerClient",$param) and $param["MaxSubscriptionPerClient"] !== null) {
            $this->MaxSubscriptionPerClient = $param["MaxSubscriptionPerClient"];
        }

        if (array_key_exists("AuthorizationPolicyLimit",$param) and $param["AuthorizationPolicyLimit"] !== null) {
            $this->AuthorizationPolicyLimit = $param["AuthorizationPolicyLimit"];
        }

        if (array_key_exists("PriceTags",$param) and $param["PriceTags"] !== null) {
            $this->PriceTags = [];
            foreach ($param["PriceTags"] as $key => $value){
                $obj = new PriceTag();
                $obj->deserialize($value);
                array_push($this->PriceTags, $obj);
            }
        }
    }
}
