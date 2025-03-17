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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load configuration for RPS mode.
 *
 * @method integer getMaxRequestsPerSecond() Obtain Maximum rps.

Note: This field may return null, indicating that no valid value is found.
 * @method void setMaxRequestsPerSecond(integer $MaxRequestsPerSecond) Set Maximum rps.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getDurationSeconds() Obtain Duration time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setDurationSeconds(integer $DurationSeconds) Set Duration time.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getTargetVirtualUsers() Obtain Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTargetVirtualUsers(integer $TargetVirtualUsers) Set Deprecated.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getResources() Obtain Number of resources.

Note: This field may return null, indicating that no valid value is found.
 * @method void setResources(integer $Resources) Set Number of resources.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getStartRequestsPerSecond() Obtain Initial rps.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStartRequestsPerSecond(integer $StartRequestsPerSecond) Set Initial rps.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getTargetRequestsPerSecond() Obtain Target rps, invalid as an input parameter.

Note: This field may return null, indicating that no valid value is found.
 * @method void setTargetRequestsPerSecond(integer $TargetRequestsPerSecond) Set Target rps, invalid as an input parameter.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getGracefulStopSeconds() Obtain Graceful shutdown waiting time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setGracefulStopSeconds(integer $GracefulStopSeconds) Set Graceful shutdown waiting time.

Note: This field may return null, indicating that no valid value is found.
 */
class RequestsPerSecond extends AbstractModel
{
    /**
     * @var integer Maximum rps.

Note: This field may return null, indicating that no valid value is found.
     */
    public $MaxRequestsPerSecond;

    /**
     * @var integer Duration time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $DurationSeconds;

    /**
     * @var integer Deprecated.

Note: This field may return null, indicating that no valid value is found.
     */
    public $TargetVirtualUsers;

    /**
     * @var integer Number of resources.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Resources;

    /**
     * @var integer Initial rps.

Note: This field may return null, indicating that no valid value is found.
     */
    public $StartRequestsPerSecond;

    /**
     * @var integer Target rps, invalid as an input parameter.

Note: This field may return null, indicating that no valid value is found.
     */
    public $TargetRequestsPerSecond;

    /**
     * @var integer Graceful shutdown waiting time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $GracefulStopSeconds;

    /**
     * @param integer $MaxRequestsPerSecond Maximum rps.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $DurationSeconds Duration time.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $TargetVirtualUsers Deprecated.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Resources Number of resources.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $StartRequestsPerSecond Initial rps.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $TargetRequestsPerSecond Target rps, invalid as an input parameter.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $GracefulStopSeconds Graceful shutdown waiting time.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("MaxRequestsPerSecond",$param) and $param["MaxRequestsPerSecond"] !== null) {
            $this->MaxRequestsPerSecond = $param["MaxRequestsPerSecond"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("TargetVirtualUsers",$param) and $param["TargetVirtualUsers"] !== null) {
            $this->TargetVirtualUsers = $param["TargetVirtualUsers"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("StartRequestsPerSecond",$param) and $param["StartRequestsPerSecond"] !== null) {
            $this->StartRequestsPerSecond = $param["StartRequestsPerSecond"];
        }

        if (array_key_exists("TargetRequestsPerSecond",$param) and $param["TargetRequestsPerSecond"] !== null) {
            $this->TargetRequestsPerSecond = $param["TargetRequestsPerSecond"];
        }

        if (array_key_exists("GracefulStopSeconds",$param) and $param["GracefulStopSeconds"] !== null) {
            $this->GracefulStopSeconds = $param["GracefulStopSeconds"];
        }
    }
}
