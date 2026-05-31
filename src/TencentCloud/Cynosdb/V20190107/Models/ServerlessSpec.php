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
 * serverless specification.
 *
 * @method float getMinCpu() Obtain <p>cpu minimum value</p>
 * @method void setMinCpu(float $MinCpu) Set <p>cpu minimum value</p>
 * @method float getMaxCpu() Obtain <p>Maximum value of cpu</p>
 * @method void setMaxCpu(float $MaxCpu) Set <p>Maximum value of cpu</p>
 * @method integer getMaxStorageSize() Obtain <p>Maximum storage space</p>
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set <p>Maximum storage space</p>
 * @method integer getIsDefault() Obtain <p>Is the default specification</p>
 * @method void setIsDefault(integer $IsDefault) Set <p>Is the default specification</p>
 * @method boolean getHasStock() Obtain <p>Whether there is inventory</p>
 * @method void setHasStock(boolean $HasStock) Set <p>Whether there is inventory</p>
 * @method integer getStockCount() Obtain <p>Inventory quantity</p>
 * @method void setStockCount(integer $StockCount) Set <p>Inventory quantity</p>
 * @method array getZoneStockInfos() Obtain <p>Availability zone inventory information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneStockInfos(array $ZoneStockInfos) Set <p>Availability zone inventory information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServerlessSpec extends AbstractModel
{
    /**
     * @var float <p>cpu minimum value</p>
     */
    public $MinCpu;

    /**
     * @var float <p>Maximum value of cpu</p>
     */
    public $MaxCpu;

    /**
     * @var integer <p>Maximum storage space</p>
     */
    public $MaxStorageSize;

    /**
     * @var integer <p>Is the default specification</p>
     */
    public $IsDefault;

    /**
     * @var boolean <p>Whether there is inventory</p>
     */
    public $HasStock;

    /**
     * @var integer <p>Inventory quantity</p>
     */
    public $StockCount;

    /**
     * @var array <p>Availability zone inventory information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneStockInfos;

    /**
     * @param float $MinCpu <p>cpu minimum value</p>
     * @param float $MaxCpu <p>Maximum value of cpu</p>
     * @param integer $MaxStorageSize <p>Maximum storage space</p>
     * @param integer $IsDefault <p>Is the default specification</p>
     * @param boolean $HasStock <p>Whether there is inventory</p>
     * @param integer $StockCount <p>Inventory quantity</p>
     * @param array $ZoneStockInfos <p>Availability zone inventory information</p>
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
        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("MaxStorageSize",$param) and $param["MaxStorageSize"] !== null) {
            $this->MaxStorageSize = $param["MaxStorageSize"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }

        if (array_key_exists("StockCount",$param) and $param["StockCount"] !== null) {
            $this->StockCount = $param["StockCount"];
        }

        if (array_key_exists("ZoneStockInfos",$param) and $param["ZoneStockInfos"] !== null) {
            $this->ZoneStockInfos = [];
            foreach ($param["ZoneStockInfos"] as $key => $value){
                $obj = new ServerlessZoneStockInfo();
                $obj->deserialize($value);
                array_push($this->ZoneStockInfos, $obj);
            }
        }
    }
}
