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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Item price.
 *
 * @method TradePrice getInstancePrice() Obtain Instance price
 * @method void setInstancePrice(TradePrice $InstancePrice) Set Instance price
 * @method TradePrice getStoragePrice() Obtain Storage price
 * @method void setStoragePrice(TradePrice $StoragePrice) Set Storage price
 * @method GoodsSpec getGoodsSpec() Obtain Product specification
 * @method void setGoodsSpec(GoodsSpec $GoodsSpec) Set Product specification
 */
class GoodsPrice extends AbstractModel
{
    /**
     * @var TradePrice Instance price
     */
    public $InstancePrice;

    /**
     * @var TradePrice Storage price
     */
    public $StoragePrice;

    /**
     * @var GoodsSpec Product specification
     */
    public $GoodsSpec;

    /**
     * @param TradePrice $InstancePrice Instance price
     * @param TradePrice $StoragePrice Storage price
     * @param GoodsSpec $GoodsSpec Product specification
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
        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new TradePrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("StoragePrice",$param) and $param["StoragePrice"] !== null) {
            $this->StoragePrice = new TradePrice();
            $this->StoragePrice->deserialize($param["StoragePrice"]);
        }

        if (array_key_exists("GoodsSpec",$param) and $param["GoodsSpec"] !== null) {
            $this->GoodsSpec = new GoodsSpec();
            $this->GoodsSpec->deserialize($param["GoodsSpec"]);
        }
    }
}
