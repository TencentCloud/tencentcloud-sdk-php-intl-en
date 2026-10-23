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
 * Inventory information of availability zones for serverless type
 *
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method integer getStockCount() Obtain Stored amount
 * @method void setStockCount(integer $StockCount) Set Stored amount
 * @method boolean getHasStock() Obtain Whether inventory is included
 * @method void setHasStock(boolean $HasStock) Set Whether inventory is included
 * @method array getSlaveZoneStockInfos() Obtain Secondary AZ inventory information
 * @method void setSlaveZoneStockInfos(array $SlaveZoneStockInfos) Set Secondary AZ inventory information
 */
class ServerlessZoneStockInfo extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var integer Stored amount
     */
    public $StockCount;

    /**
     * @var boolean Whether inventory is included
     */
    public $HasStock;

    /**
     * @var array Secondary AZ inventory information
     */
    public $SlaveZoneStockInfos;

    /**
     * @param string $Zone Availability zone
     * @param integer $StockCount Stored amount
     * @param boolean $HasStock Whether inventory is included
     * @param array $SlaveZoneStockInfos Secondary AZ inventory information
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

        if (array_key_exists("StockCount",$param) and $param["StockCount"] !== null) {
            $this->StockCount = $param["StockCount"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
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
