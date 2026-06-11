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
 * SwitchClusterZone request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster Id</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster Id</p>
 * @method string getOldZone() Obtain <p>Current availability zone</p>
 * @method void setOldZone(string $OldZone) Set <p>Current availability zone</p>
 * @method string getNewZone() Obtain <p>Availability zone to switch to</p>
 * @method void setNewZone(string $NewZone) Set <p>Availability zone to switch to</p>
 * @method string getIsInMaintainPeriod() Obtain <p>Execute during maintenance period - yes, immediately execute - no</p>
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set <p>Execute during maintenance period - yes, immediately execute - no</p>
 */
class SwitchClusterZoneRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster Id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Current availability zone</p>
     */
    public $OldZone;

    /**
     * @var string <p>Availability zone to switch to</p>
     */
    public $NewZone;

    /**
     * @var string <p>Execute during maintenance period - yes, immediately execute - no</p>
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId <p>Cluster Id</p>
     * @param string $OldZone <p>Current availability zone</p>
     * @param string $NewZone <p>Availability zone to switch to</p>
     * @param string $IsInMaintainPeriod <p>Execute during maintenance period - yes, immediately execute - no</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OldZone",$param) and $param["OldZone"] !== null) {
            $this->OldZone = $param["OldZone"];
        }

        if (array_key_exists("NewZone",$param) and $param["NewZone"] !== null) {
            $this->NewZone = $param["NewZone"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
