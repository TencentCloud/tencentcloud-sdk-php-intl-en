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
 * Inventory information in an AZ
 *
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method boolean getHasStock() Obtain Whether there is an inventory.
 * @method void setHasStock(boolean $HasStock) Set Whether there is an inventory.
 * @method integer getStockCount() Obtain Quantity in stock
 * @method void setStockCount(integer $StockCount) Set Quantity in stock
 * @method array getSlaveZoneStockInfos() Obtain Available zone inventory information.
 * @method void setSlaveZoneStockInfos(array $SlaveZoneStockInfos) Set Available zone inventory information.
 */
class ZoneStockInfo extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var boolean Whether there is an inventory.
     */
    public $HasStock;

    /**
     * @var integer Quantity in stock
     */
    public $StockCount;

    /**
     * @var array Available zone inventory information.
     */
    public $SlaveZoneStockInfos;

    /**
     * @param string $Zone AZ
     * @param boolean $HasStock Whether there is an inventory.
     * @param integer $StockCount Quantity in stock
     * @param array $SlaveZoneStockInfos Available zone inventory information.
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
