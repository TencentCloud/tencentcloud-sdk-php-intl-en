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
 * 
 *
 * @method string getSlaveZone() Obtain Replica AZ.
 * @method void setSlaveZone(string $SlaveZone) Set Replica AZ.
 * @method integer getStockCount() Obtain Inventory quantity in spare availability zone.	
 * @method void setStockCount(integer $StockCount) Set Inventory quantity in spare availability zone.	
 * @method boolean getHasStock() Obtain Whether there is inventory in the spare availability zone.	
 * @method void setHasStock(boolean $HasStock) Set Whether there is inventory in the spare availability zone.	
 */
class SlaveZoneStockInfo extends AbstractModel
{
    /**
     * @var string Replica AZ.
     */
    public $SlaveZone;

    /**
     * @var integer Inventory quantity in spare availability zone.	
     */
    public $StockCount;

    /**
     * @var boolean Whether there is inventory in the spare availability zone.	
     */
    public $HasStock;

    /**
     * @param string $SlaveZone Replica AZ.
     * @param integer $StockCount Inventory quantity in spare availability zone.	
     * @param boolean $HasStock Whether there is inventory in the spare availability zone.	
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
        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("StockCount",$param) and $param["StockCount"] !== null) {
            $this->StockCount = $param["StockCount"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }
    }
}
