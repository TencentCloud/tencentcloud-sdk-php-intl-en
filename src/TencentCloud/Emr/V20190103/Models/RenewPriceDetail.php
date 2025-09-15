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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node component renewal pricing details.
 *
 * @method string getBillingName() Obtain Billing item name.
 * @method void setBillingName(string $BillingName) Set Billing item name.
 * @method float getPolicy() Obtain Discount.
 * @method void setPolicy(float $Policy) Set Discount.
 * @method integer getQuantity() Obtain Quantity.
 * @method void setQuantity(integer $Quantity) Set Quantity.
 * @method float getOriginalCost() Obtain Original price.
 * @method void setOriginalCost(float $OriginalCost) Set Original price.
 * @method float getDiscountCost() Obtain Discount price.
 * @method void setDiscountCost(float $DiscountCost) Set Discount price.
 */
class RenewPriceDetail extends AbstractModel
{
    /**
     * @var string Billing item name.
     */
    public $BillingName;

    /**
     * @var float Discount.
     */
    public $Policy;

    /**
     * @var integer Quantity.
     */
    public $Quantity;

    /**
     * @var float Original price.
     */
    public $OriginalCost;

    /**
     * @var float Discount price.
     */
    public $DiscountCost;

    /**
     * @param string $BillingName Billing item name.
     * @param float $Policy Discount.
     * @param integer $Quantity Quantity.
     * @param float $OriginalCost Original price.
     * @param float $DiscountCost Discount price.
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
        if (array_key_exists("BillingName",$param) and $param["BillingName"] !== null) {
            $this->BillingName = $param["BillingName"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }
    }
}
