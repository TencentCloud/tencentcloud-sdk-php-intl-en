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
 * Availability zone inventory information
 *
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method boolean getHasStock() Obtain Whether there is inventory
 * @method void setHasStock(boolean $HasStock) Set Whether there is inventory
 * @method integer getStockCount() Obtain Inventory quantity
 * @method void setStockCount(integer $StockCount) Set Inventory quantity
 * @method array getSlaveZoneStockInfos() Obtain AZ inventory information
 * @method void setSlaveZoneStockInfos(array $SlaveZoneStockInfos) Set AZ inventory information
 */
class ZoneStockInfo extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var boolean Whether there is inventory
     */
    public $HasStock;

    /**
     * @var integer Inventory quantity
     */
    public $StockCount;

    /**
     * @var array AZ inventory information
     */
    public $SlaveZoneStockInfos;

    /**
     * @param string $Zone Availability zone
     * @param boolean $HasStock Whether there is inventory
     * @param integer $StockCount Inventory quantity
     * @param array $SlaveZoneStockInfos AZ inventory information
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }

        if (array_key_exists("StockCount",$param) and $param["StockCount"] !== null) {
            $this->StockCount = $param["StockCount"];
        }

        if (array_key_exists("SlaveZoneStockInfos",$param) and $param["SlaveZoneStockInfos"] !== null) {
            $this->SlaveZoneStockInfos = [];
            foreach ($param["SlaveZoneStockInfos"] as $key => $value){
                $obj = new SlaveZoneStockInfo();
                $obj->deserialize($value);
                array_push($this->SlaveZoneStockInfos, $obj);
            }
        }
    }
}
