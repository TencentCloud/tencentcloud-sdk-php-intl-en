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
 * Inventory information of regions sold by Libra
 *
 * @method string getZone() Obtain Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHasStock() Obtain whether there is inventory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasStock(boolean $HasStock) Set whether there is inventory
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ZoneStockInfo4Libra extends AbstractModel
{
    /**
     * @var string Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var boolean whether there is inventory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasStock;

    /**
     * @param string $Zone Availability zone
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HasStock whether there is inventory
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("HasStock",$param) and $param["HasStock"] !== null) {
            $this->HasStock = $param["HasStock"];
        }
    }
}
