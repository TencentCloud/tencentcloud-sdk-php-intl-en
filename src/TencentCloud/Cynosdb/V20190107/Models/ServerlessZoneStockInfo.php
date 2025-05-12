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
 * serverless type availability zone inventory information.
 *
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method integer getStockCount() Obtain Specifies the stored amount.
 * @method void setStockCount(integer $StockCount) Set Specifies the stored amount.
 * @method boolean getHasStock() Obtain Whether it contains inventory.
 * @method void setHasStock(boolean $HasStock) Set Whether it contains inventory.
 * @method array getSlaveZoneStockInfos() Obtain Inventory information from availability zone.
 * @method void setSlaveZoneStockInfos(array $SlaveZoneStockInfos) Set Inventory information from availability zone.
 */
class ServerlessZoneStockInfo extends AbstractModel
{
    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var integer Specifies the stored amount.
     */
    public $StockCount;

    /**
     * @var boolean Whether it contains inventory.
     */
    public $HasStock;

    /**
     * @var array Inventory information from availability zone.
     */
    public $SlaveZoneStockInfos;

    /**
     * @param string $Zone Availability zone
     * @param integer $StockCount Specifies the stored amount.
     * @param boolean $HasStock Whether it contains inventory.
     * @param array $SlaveZoneStockInfos Inventory information from availability zone.
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
