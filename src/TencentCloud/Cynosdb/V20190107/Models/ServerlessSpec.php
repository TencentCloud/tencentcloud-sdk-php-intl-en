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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * serverless specification.
 *
 * @method float getMinCpu() Obtain Specifies the minimum value of the cpu.
 * @method void setMinCpu(float $MinCpu) Set Specifies the minimum value of the cpu.
 * @method float getMaxCpu() Obtain Maximum value of cpu.
 * @method void setMaxCpu(float $MaxCpu) Set Maximum value of cpu.
 * @method integer getMaxStorageSize() Obtain Maximum storage space.
 * @method void setMaxStorageSize(integer $MaxStorageSize) Set Maximum storage space.
 * @method integer getIsDefault() Obtain Specifies whether it is the default specification.
 * @method void setIsDefault(integer $IsDefault) Set Specifies whether it is the default specification.
 * @method boolean getHasStock() Obtain Whether there is inventory.
 * @method void setHasStock(boolean $HasStock) Set Whether there is inventory.
 * @method integer getStockCount() Obtain Inventory quantity.
 * @method void setStockCount(integer $StockCount) Set Inventory quantity.
 * @method array getZoneStockInfos() Obtain Availability zone inventory information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneStockInfos(array $ZoneStockInfos) Set Availability zone inventory information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ServerlessSpec extends AbstractModel
{
    /**
     * @var float Specifies the minimum value of the cpu.
     */
    public $MinCpu;

    /**
     * @var float Maximum value of cpu.
     */
    public $MaxCpu;

    /**
     * @var integer Maximum storage space.
     */
    public $MaxStorageSize;

    /**
     * @var integer Specifies whether it is the default specification.
     */
    public $IsDefault;

    /**
     * @var boolean Whether there is inventory.
     */
    public $HasStock;

    /**
     * @var integer Inventory quantity.
     */
    public $StockCount;

    /**
     * @var array Availability zone inventory information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneStockInfos;

    /**
     * @param float $MinCpu Specifies the minimum value of the cpu.
     * @param float $MaxCpu Maximum value of cpu.
     * @param integer $MaxStorageSize Maximum storage space.
     * @param integer $IsDefault Specifies whether it is the default specification.
     * @param boolean $HasStock Whether there is inventory.
     * @param integer $StockCount Inventory quantity.
     * @param array $ZoneStockInfos Availability zone inventory information.
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
