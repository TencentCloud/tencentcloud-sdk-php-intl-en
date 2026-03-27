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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specification Sellable Status in a Specific Region's AZ
 *
 * @method string getZone() Obtain Specification AZ
 * @method void setZone(string $Zone) Set Specification AZ
 * @method string getRegion() Obtain Specification Region
 * @method void setRegion(string $Region) Set Specification Region
 * @method integer getStatus() Obtain Specification Sale Status in the AZ: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
 * @method void setStatus(integer $Status) Set Specification Sale Status in the AZ: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
 */
class ZoneStatus extends AbstractModel
{
    /**
     * @var string Specification AZ
     */
    public $Zone;

    /**
     * @var string Specification Region
     */
    public $Region;

    /**
     * @var integer Specification Sale Status in the AZ: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
     */
    public $Status;

    /**
     * @param string $Zone Specification AZ
     * @param string $Region Specification Region
     * @param integer $Status Specification Sale Status in the AZ: 1 - Normal, 2 - Sale disabled but upgradable, 3 - Sale completely disabled.
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
