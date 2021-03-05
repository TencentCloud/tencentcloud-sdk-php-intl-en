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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReadOnlyGroupConfig request structure.
 *
 * @method string getReadOnlyGroupId() Obtain RO group ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group ID
 * @method string getReadOnlyGroupName() Obtain RO group name
 * @method void setReadOnlyGroupName(string $ReadOnlyGroupName) Set RO group name
 * @method integer getReplayLagEliminate() Obtain Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) Set Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method integer getReplayLatencyEliminate() Obtain Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) Set Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
 * @method integer getMaxReplayLatency() Obtain Delayed log size threshold in MB
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) Set Delayed log size threshold in MB
 * @method integer getMaxReplayLag() Obtain Delay threshold in ms
 * @method void setMaxReplayLag(integer $MaxReplayLag) Set Delay threshold in ms
 * @method integer getRebalance() Obtain Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
 * @method void setRebalance(integer $Rebalance) Set Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
 * @method integer getMinDelayEliminateReserve() Obtain The minimum number of read-only replicas that must be retained in an RO group
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) Set The minimum number of read-only replicas that must be retained in an RO group
 */
class ModifyReadOnlyGroupConfigRequest extends AbstractModel
{
    /**
     * @var string RO group ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var string RO group name
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
     * @var integer Delayed log size threshold in MB
     */
    public $MaxReplayLatency;

    /**
     * @var integer Delay threshold in ms
     */
    public $MaxReplayLag;

    /**
     * @var integer Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
     */
    public $Rebalance;

    /**
     * @var integer The minimum number of read-only replicas that must be retained in an RO group
     */
    public $MinDelayEliminateReserve;

    /**
     * @param string $ReadOnlyGroupId RO group ID
     * @param string $ReadOnlyGroupName RO group name
     * @param integer $ReplayLagEliminate Whether to remove a read-only replica from an RO group if the delay between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param integer $ReplayLatencyEliminate Whether to remove a read-only replica from an RO group if the sync log size difference between the read-only replica and the primary instance exceeds the threshold. Valid values: `0` (no), `1` (yes).
     * @param integer $MaxReplayLatency Delayed log size threshold in MB
     * @param integer $MaxReplayLag Delay threshold in ms
     * @param integer $Rebalance Whether to enable automatic load balancing. Valid values: `0` (disable), `1` (enable).
     * @param integer $MinDelayEliminateReserve The minimum number of read-only replicas that must be retained in an RO group
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
