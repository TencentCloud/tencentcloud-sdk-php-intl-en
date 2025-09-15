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
 * Price details by node part, used for creating the cluster price list
 *
 * @method string getInstanceType() Obtain Types, including node: node (denoting node), rootDisk (denoting system disk), dataDisk (denoting cloud data disk), and metaDB.
 * @method void setInstanceType(string $InstanceType) Set Types, including node: node (denoting node), rootDisk (denoting system disk), dataDisk (denoting cloud data disk), and metaDB.
 * @method float getPrice() Obtain Unit price (original price).
 * @method void setPrice(float $Price) Set Unit price (original price).
 * @method float getRealCost() Obtain Unit price (discounted price).
 * @method void setRealCost(float $RealCost) Set Unit price (discounted price).
 * @method float getRealTotalCost() Obtain Total price (discounted price).
 * @method void setRealTotalCost(float $RealTotalCost) Set Total price (discounted price).
 * @method float getPolicy() Obtain Discount.
 * @method void setPolicy(float $Policy) Set Discount.
 * @method integer getGoodsNum() Obtain Quantity.
 * @method void setGoodsNum(integer $GoodsNum) Set Quantity.
 */
class PartDetailPriceItem extends AbstractModel
{
    /**
     * @var string Types, including node: node (denoting node), rootDisk (denoting system disk), dataDisk (denoting cloud data disk), and metaDB.
     */
    public $InstanceType;

    /**
     * @var float Unit price (original price).
     */
    public $Price;

    /**
     * @var float Unit price (discounted price).
     */
    public $RealCost;

    /**
     * @var float Total price (discounted price).
     */
    public $RealTotalCost;

    /**
     * @var float Discount.
     */
    public $Policy;

    /**
     * @var integer Quantity.
     */
    public $GoodsNum;

    /**
     * @param string $InstanceType Types, including node: node (denoting node), rootDisk (denoting system disk), dataDisk (denoting cloud data disk), and metaDB.
     * @param float $Price Unit price (original price).
     * @param float $RealCost Unit price (discounted price).
     * @param float $RealTotalCost Total price (discounted price).
     * @param float $Policy Discount.
     * @param integer $GoodsNum Quantity.
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
