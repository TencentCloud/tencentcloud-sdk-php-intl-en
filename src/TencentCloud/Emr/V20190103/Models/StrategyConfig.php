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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Restart, stop, or start of service/monitoring configurations
 *
 * @method integer getRollingRestartSwitch() Obtain `0`: Disable rolling restart
`1`: Enable rolling restart
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRollingRestartSwitch(integer $RollingRestartSwitch) Set `0`: Disable rolling restart
`1`: Enable rolling restart
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBatchSize() Obtain The quantity of restarts per batch during a rolling restart, with the maximum number of restarts being 99999
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBatchSize(integer $BatchSize) Set The quantity of restarts per batch during a rolling restart, with the maximum number of restarts being 99999
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeWait() Obtain The wait time (in seconds) per batch in rolling restart, with a maximum value of 5 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeWait(integer $TimeWait) Set The wait time (in seconds) per batch in rolling restart, with a maximum value of 5 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDealOnFail() Obtain The failure handling policy. Valid values: `0` (blocks the process) and `1` (skips).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDealOnFail(integer $DealOnFail) Set The failure handling policy. Valid values: `0` (blocks the process) and `1` (skips).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class StrategyConfig extends AbstractModel
{
    /**
     * @var integer `0`: Disable rolling restart
`1`: Enable rolling restart
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RollingRestartSwitch;

    /**
     * @var integer The quantity of restarts per batch during a rolling restart, with the maximum number of restarts being 99999
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BatchSize;

    /**
     * @var integer The wait time (in seconds) per batch in rolling restart, with a maximum value of 5 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeWait;

    /**
     * @var integer The failure handling policy. Valid values: `0` (blocks the process) and `1` (skips).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DealOnFail;

    /**
     * @param integer $RollingRestartSwitch `0`: Disable rolling restart
`1`: Enable rolling restart
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BatchSize The quantity of restarts per batch during a rolling restart, with the maximum number of restarts being 99999
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeWait The wait time (in seconds) per batch in rolling restart, with a maximum value of 5 minutes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DealOnFail The failure handling policy. Valid values: `0` (blocks the process) and `1` (skips).
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
        if (array_key_exists("RollingRestartSwitch",$param) and $param["RollingRestartSwitch"] !== null) {
            $this->RollingRestartSwitch = $param["RollingRestartSwitch"];
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("TimeWait",$param) and $param["TimeWait"] !== null) {
            $this->TimeWait = $param["TimeWait"];
        }

        if (array_key_exists("DealOnFail",$param) and $param["DealOnFail"] !== null) {
            $this->DealOnFail = $param["DealOnFail"];
        }
    }
}
