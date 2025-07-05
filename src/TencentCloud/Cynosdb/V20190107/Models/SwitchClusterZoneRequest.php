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
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getOldZone() Obtain The current AZ
 * @method void setOldZone(string $OldZone) Set The current AZ
 * @method string getNewZone() Obtain New AZ
 * @method void setNewZone(string $NewZone) Set New AZ
 * @method string getIsInMaintainPeriod() Obtain Valid values: `yes` (execute during maintenance time), `no` (execute now)
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Valid values: `yes` (execute during maintenance time), `no` (execute now)
 */
class SwitchClusterZoneRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string The current AZ
     */
    public $OldZone;

    /**
     * @var string New AZ
     */
    public $NewZone;

    /**
     * @var string Valid values: `yes` (execute during maintenance time), `no` (execute now)
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $OldZone The current AZ
     * @param string $NewZone New AZ
     * @param string $IsInMaintainPeriod Valid values: `yes` (execute during maintenance time), `no` (execute now)
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
