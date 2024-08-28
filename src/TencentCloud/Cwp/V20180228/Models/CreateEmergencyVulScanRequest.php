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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEmergencyVulScan request structure.
 *
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method array getUuids() Obtain Array of host UUID strings. This parameter is valid for specified servers.
 * @method void setUuids(array $Uuids) Set Array of host UUID strings. This parameter is valid for specified servers.
 * @method integer getTimeoutPeriod() Obtain Scan timeout duration, in seconds.
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) Set Scan timeout duration, in seconds.
 */
class CreateEmergencyVulScanRequest extends AbstractModel
{
    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var array Array of host UUID strings. This parameter is valid for specified servers.
     */
    public $Uuids;

    /**
     * @var integer Scan timeout duration, in seconds.
     */
    public $TimeoutPeriod;

    /**
     * @param integer $VulId Vulnerability ID
     * @param array $Uuids Array of host UUID strings. This parameter is valid for specified servers.
     * @param integer $TimeoutPeriod Scan timeout duration, in seconds.
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("TimeoutPeriod",$param) and $param["TimeoutPeriod"] !== null) {
            $this->TimeoutPeriod = $param["TimeoutPeriod"];
        }
    }
}
