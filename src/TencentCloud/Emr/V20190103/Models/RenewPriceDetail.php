<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 
 *
 * @method string getBillingName() Obtain 
 * @method void setBillingName(string $BillingName) Set 
 * @method float getPolicy() Obtain 
 * @method void setPolicy(float $Policy) Set 
 * @method integer getQuantity() Obtain 
 * @method void setQuantity(integer $Quantity) Set 
 * @method float getOriginalCost() Obtain 
 * @method void setOriginalCost(float $OriginalCost) Set 
 * @method float getDiscountCost() Obtain 
 * @method void setDiscountCost(float $DiscountCost) Set 
 */
class RenewPriceDetail extends AbstractModel
{
    /**
     * @var string 
     */
    public $BillingName;

    /**
     * @var float 
     */
    public $Policy;

    /**
     * @var integer 
     */
    public $Quantity;

    /**
     * @var float 
     */
    public $OriginalCost;

    /**
     * @var float 
     */
    public $DiscountCost;

    /**
     * @param string $BillingName 
     * @param float $Policy 
     * @param integer $Quantity 
     * @param float $OriginalCost 
     * @param float $DiscountCost 
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
