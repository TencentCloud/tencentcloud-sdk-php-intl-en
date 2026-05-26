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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReadOnlyGroupConfig request structure.
 *
 * @method string getReadOnlyGroupId() Obtain Read-Only group ID.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set Read-Only group ID.
 * @method string getReadOnlyGroupName() Obtain Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
 * @method integer getReplayLagEliminate() Obtain Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) Set Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method integer getReplayLatencyEliminate() Obtain Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) Set Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method integer getMaxReplayLatency() Obtain Delay log size threshold in MB. specifies a positive integer when enabling the delay log size configuration.
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) Set Delay log size threshold in MB. specifies a positive integer when enabling the delay log size configuration.
 * @method integer getMaxReplayLag() Obtain Delay time size threshold, unit: s. when enabling the delay time configuration, manually input a positive integer.
 * @method void setMaxReplayLag(integer $MaxReplayLag) Set Delay time size threshold, unit: s. when enabling the delay time configuration, manually input a positive integer.
 * @method integer getRebalance() Obtain Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
 * @method void setRebalance(integer $Rebalance) Set Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
 * @method integer getMinDelayEliminateReserve() Obtain Specifies the minimum number of instances to retain with delay removal. value range [0,100].
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) Set Specifies the minimum number of instances to retain with delay removal. value range [0,100].
 */
class ModifyReadOnlyGroupConfigRequest extends AbstractModel
{
    /**
     * @var string Read-Only group ID.
     */
    public $ReadOnlyGroupId;

    /**
     * @var string Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
     */
    public $ReadOnlyGroupName;

    /**
     * @var integer Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     */
    public $ReplayLagEliminate;

    /**
     * @var integer Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     */
    public $ReplayLatencyEliminate;

    /**
     * @var integer Delay log size threshold in MB. specifies a positive integer when enabling the delay log size configuration.
     */
    public $MaxReplayLatency;

    /**
     * @var integer Delay time size threshold, unit: s. when enabling the delay time configuration, manually input a positive integer.
     */
    public $MaxReplayLag;

    /**
     * @var integer Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
     */
    public $Rebalance;

    /**
     * @var integer Specifies the minimum number of instances to retain with delay removal. value range [0,100].
     */
    public $MinDelayEliminateReserve;

    /**
     * @param string $ReadOnlyGroupId Read-Only group ID.
     * @param string $ReadOnlyGroupName Read-Only group name. only supports chinese, english, digits, "_", or "-" with length less than 60.
     * @param integer $ReplayLagEliminate Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param integer $ReplayLatencyEliminate Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param integer $MaxReplayLatency Delay log size threshold in MB. specifies a positive integer when enabling the delay log size configuration.
     * @param integer $MaxReplayLag Delay time size threshold, unit: s. when enabling the delay time configuration, manually input a positive integer.
     * @param integer $Rebalance Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
     * @param integer $MinDelayEliminateReserve Specifies the minimum number of instances to retain with delay removal. value range [0,100].
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
        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("ReadOnlyGroupName",$param) and $param["ReadOnlyGroupName"] !== null) {
            $this->ReadOnlyGroupName = $param["ReadOnlyGroupName"];
        }

        if (array_key_exists("ReplayLagEliminate",$param) and $param["ReplayLagEliminate"] !== null) {
            $this->ReplayLagEliminate = $param["ReplayLagEliminate"];
        }

        if (array_key_exists("ReplayLatencyEliminate",$param) and $param["ReplayLatencyEliminate"] !== null) {
            $this->ReplayLatencyEliminate = $param["ReplayLatencyEliminate"];
        }

        if (array_key_exists("MaxReplayLatency",$param) and $param["MaxReplayLatency"] !== null) {
            $this->MaxReplayLatency = $param["MaxReplayLatency"];
        }

        if (array_key_exists("MaxReplayLag",$param) and $param["MaxReplayLag"] !== null) {
            $this->MaxReplayLag = $param["MaxReplayLag"];
        }

        if (array_key_exists("Rebalance",$param) and $param["Rebalance"] !== null) {
            $this->Rebalance = $param["Rebalance"];
        }

        if (array_key_exists("MinDelayEliminateReserve",$param) and $param["MinDelayEliminateReserve"] !== null) {
            $this->MinDelayEliminateReserve = $param["MinDelayEliminateReserve"];
        }
    }
}
