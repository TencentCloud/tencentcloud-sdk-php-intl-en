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
 * Price details by node part, used for creating the cluster price list
 *
 * @method string getInstanceType() Obtain The type. Valid values: `node` (node); `rootDisk` (system disk); `dataDisk` and `metaDB` (cloud data disk)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set The type. Valid values: `node` (node); `rootDisk` (system disk); `dataDisk` and `metaDB` (cloud data disk)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getPrice() Obtain Rate (original)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrice(float $Price) Set Rate (original)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getRealCost() Obtain Rate (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealCost(float $RealCost) Set Rate (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getRealTotalCost() Obtain Total price (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealTotalCost(float $RealTotalCost) Set Total price (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getPolicy() Obtain Discount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicy(float $Policy) Set Discount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGoodsNum() Obtain Quantity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGoodsNum(integer $GoodsNum) Set Quantity
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PartDetailPriceItem extends AbstractModel
{
    /**
     * @var string The type. Valid values: `node` (node); `rootDisk` (system disk); `dataDisk` and `metaDB` (cloud data disk)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var float Rate (original)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Price;

    /**
     * @var float Rate (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealCost;

    /**
     * @var float Total price (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealTotalCost;

    /**
     * @var float Discount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Policy;

    /**
     * @var integer Quantity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GoodsNum;

    /**
     * @param string $InstanceType The type. Valid values: `node` (node); `rootDisk` (system disk); `dataDisk` and `metaDB` (cloud data disk)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Price Rate (original)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $RealCost Rate (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $RealTotalCost Total price (discounted)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Policy Discount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GoodsNum Quantity
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }
    }
}
