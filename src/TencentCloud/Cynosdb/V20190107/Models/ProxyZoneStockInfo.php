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
 * Database proxy specification
 *
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method integer getCpuStock() Obtain <p>CPU inventory</p><p>This field is not a judgment standard for whether there are resources for delivery. For resources, refer to CheckProxyStockInfos</p>
 * @method void setCpuStock(integer $CpuStock) Set <p>CPU inventory</p><p>This field is not a judgment standard for whether there are resources for delivery. For resources, refer to CheckProxyStockInfos</p>
 * @method integer getMemStock() Obtain <p>Memory inventory</p><p>This field is not used as a judgment standard for whether there are resources for delivery. For resources, see CheckProxyStockInfos</p>
 * @method void setMemStock(integer $MemStock) Set <p>Memory inventory</p><p>This field is not used as a judgment standard for whether there are resources for delivery. For resources, see CheckProxyStockInfos</p>
 */
class ProxyZoneStockInfo extends AbstractModel
{
    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var integer <p>CPU inventory</p><p>This field is not a judgment standard for whether there are resources for delivery. For resources, refer to CheckProxyStockInfos</p>
     */
    public $CpuStock;

    /**
     * @var integer <p>Memory inventory</p><p>This field is not used as a judgment standard for whether there are resources for delivery. For resources, see CheckProxyStockInfos</p>
     */
    public $MemStock;

    /**
     * @param string $Region <p>Region.</p>
     * @param string $Zone <p>AZ.</p>
     * @param integer $CpuStock <p>CPU inventory</p><p>This field is not a judgment standard for whether there are resources for delivery. For resources, refer to CheckProxyStockInfos</p>
     * @param integer $MemStock <p>Memory inventory</p><p>This field is not used as a judgment standard for whether there are resources for delivery. For resources, see CheckProxyStockInfos</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CpuStock",$param) and $param["CpuStock"] !== null) {
            $this->CpuStock = $param["CpuStock"];
        }

        if (array_key_exists("MemStock",$param) and $param["MemStock"] !== null) {
            $this->MemStock = $param["MemStock"];
        }
    }
}
