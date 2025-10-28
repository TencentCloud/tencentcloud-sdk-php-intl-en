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
 * @method TradePrice getInstancePrice() Obtain Specifies the instance price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstancePrice(TradePrice $InstancePrice) Set Specifies the instance price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TradePrice getStoragePrice() Obtain Specifies the storage price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStoragePrice(TradePrice $StoragePrice) Set Specifies the storage price.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method GoodsSpec getGoodsSpec() Obtain Specifies the product specification.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGoodsSpec(GoodsSpec $GoodsSpec) Set Specifies the product specification.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class GoodsPrice extends AbstractModel
{
    /**
     * @var TradePrice Specifies the instance price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstancePrice;

    /**
     * @var TradePrice Specifies the storage price.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StoragePrice;

    /**
     * @var GoodsSpec Specifies the product specification.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GoodsSpec;

    /**
     * @param TradePrice $InstancePrice Specifies the instance price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TradePrice $StoragePrice Specifies the storage price.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param GoodsSpec $GoodsSpec Specifies the product specification.
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
