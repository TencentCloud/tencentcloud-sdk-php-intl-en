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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartNodes request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID.
 * @method array getNodeNames() Obtain Node name list
 * @method void setNodeNames(array $NodeNames) Set Node name list
 * @method boolean getForceRestart() Obtain Whether to perform forced reboot.
 * @method void setForceRestart(boolean $ForceRestart) Set Whether to perform forced reboot.
 * @method string getRestartMode() Obtain Optional restart mode. `in-place`: restart; `blue-green`: blue-green restart. Default value: `in-place`.
 * @method void setRestartMode(string $RestartMode) Set Optional restart mode. `in-place`: restart; `blue-green`: blue-green restart. Default value: `in-place`.
 * @method boolean getIsOffline() Obtain Node status, for use in blue-green mode; offline node blue/green at risk
 * @method void setIsOffline(boolean $IsOffline) Set Node status, for use in blue-green mode; offline node blue/green at risk
 * @method integer getCvmDelayOnlineTime() Obtain cvm delay listing time
 * @method void setCvmDelayOnlineTime(integer $CvmDelayOnlineTime) Set cvm delay listing time
 * @method integer getShardAllocationConcurrents() Obtain Number of concurrent shard migrations
 * @method void setShardAllocationConcurrents(integer $ShardAllocationConcurrents) Set Number of concurrent shard migrations
 * @method integer getShardAllocationBytes() Obtain Shard migration concurrency speed
 * @method void setShardAllocationBytes(integer $ShardAllocationBytes) Set Shard migration concurrency speed
 * @method boolean getEnableScheduleRecoverGroup() Obtain Whether to enable the placement group asynchronous task
 * @method void setEnableScheduleRecoverGroup(boolean $EnableScheduleRecoverGroup) Set Whether to enable the placement group asynchronous task
 * @method EnableScheduleOperationDuration getEnableScheduleOperationDuration() Obtain Time period of the async task for the placement group
 * @method void setEnableScheduleOperationDuration(EnableScheduleOperationDuration $EnableScheduleOperationDuration) Set Time period of the async task for the placement group
 * @method array getEventTypeIds() Obtain Event ID list.
 * @method void setEventTypeIds(array $EventTypeIds) Set Event ID list.
 */
class RestartNodesRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID.
     */
    public $InstanceId;

    /**
     * @var array Node name list
     */
    public $NodeNames;

    /**
     * @var boolean Whether to perform forced reboot.
     */
    public $ForceRestart;

    /**
     * @var string Optional restart mode. `in-place`: restart; `blue-green`: blue-green restart. Default value: `in-place`.
     */
    public $RestartMode;

    /**
     * @var boolean Node status, for use in blue-green mode; offline node blue/green at risk
     */
    public $IsOffline;

    /**
     * @var integer cvm delay listing time
     */
    public $CvmDelayOnlineTime;

    /**
     * @var integer Number of concurrent shard migrations
     */
    public $ShardAllocationConcurrents;

    /**
     * @var integer Shard migration concurrency speed
     */
    public $ShardAllocationBytes;

    /**
     * @var boolean Whether to enable the placement group asynchronous task
     */
    public $EnableScheduleRecoverGroup;

    /**
     * @var EnableScheduleOperationDuration Time period of the async task for the placement group
     */
    public $EnableScheduleOperationDuration;

    /**
     * @var array Event ID list.
     */
    public $EventTypeIds;

    /**
     * @param string $InstanceId Cluster instance ID.
     * @param array $NodeNames Node name list
     * @param boolean $ForceRestart Whether to perform forced reboot.
     * @param string $RestartMode Optional restart mode. `in-place`: restart; `blue-green`: blue-green restart. Default value: `in-place`.
     * @param boolean $IsOffline Node status, for use in blue-green mode; offline node blue/green at risk
     * @param integer $CvmDelayOnlineTime cvm delay listing time
     * @param integer $ShardAllocationConcurrents Number of concurrent shard migrations
     * @param integer $ShardAllocationBytes Shard migration concurrency speed
     * @param boolean $EnableScheduleRecoverGroup Whether to enable the placement group asynchronous task
     * @param EnableScheduleOperationDuration $EnableScheduleOperationDuration Time period of the async task for the placement group
     * @param array $EventTypeIds Event ID list.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("ForceRestart",$param) and $param["ForceRestart"] !== null) {
            $this->ForceRestart = $param["ForceRestart"];
        }

        if (array_key_exists("RestartMode",$param) and $param["RestartMode"] !== null) {
            $this->RestartMode = $param["RestartMode"];
        }

        if (array_key_exists("IsOffline",$param) and $param["IsOffline"] !== null) {
            $this->IsOffline = $param["IsOffline"];
        }

        if (array_key_exists("CvmDelayOnlineTime",$param) and $param["CvmDelayOnlineTime"] !== null) {
            $this->CvmDelayOnlineTime = $param["CvmDelayOnlineTime"];
        }

        if (array_key_exists("ShardAllocationConcurrents",$param) and $param["ShardAllocationConcurrents"] !== null) {
            $this->ShardAllocationConcurrents = $param["ShardAllocationConcurrents"];
        }

        if (array_key_exists("ShardAllocationBytes",$param) and $param["ShardAllocationBytes"] !== null) {
            $this->ShardAllocationBytes = $param["ShardAllocationBytes"];
        }

        if (array_key_exists("EnableScheduleRecoverGroup",$param) and $param["EnableScheduleRecoverGroup"] !== null) {
            $this->EnableScheduleRecoverGroup = $param["EnableScheduleRecoverGroup"];
        }

        if (array_key_exists("EnableScheduleOperationDuration",$param) and $param["EnableScheduleOperationDuration"] !== null) {
            $this->EnableScheduleOperationDuration = new EnableScheduleOperationDuration();
            $this->EnableScheduleOperationDuration->deserialize($param["EnableScheduleOperationDuration"]);
        }

        if (array_key_exists("EventTypeIds",$param) and $param["EventTypeIds"] !== null) {
            $this->EventTypeIds = $param["EventTypeIds"];
        }
    }
}
