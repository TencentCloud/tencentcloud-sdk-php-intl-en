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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceAlarmEvents request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getStartTime() Obtain Event query range start time, closed interval.
 * @method void setStartTime(string $StartTime) Set Event query range start time, closed interval.
 * @method string getEndTime() Obtain End time of the event query range, closed interval.
 * @method void setEndTime(string $EndTime) Set End time of the event query range, closed interval.
 * @method array getEventName() Obtain Event name. Outofmemory - Memory OOM (status event); Switch - primary-secondary switch (status event); Roremove - read-only instance removal (status event); MemoryUsedHigh - high memory utilization (status event); CPUExpansion - CPU performance scale-out (stateless event); CPUExpansionFailed - CPU performance scale-out failed (stateless event); CPUContraction - CPU performance scale-in (stateless event); Restart - instance restart (status event); ServerFailureNodeMigration - ServerFailureNodeMigration (status event); PlannedSwitch - planned active/standby switch (stateless event); OverusedReadonlySet - instance will be locked (stateless event); OverusedReadWriteSet - instance unlock (stateless event).
 * @method void setEventName(array $EventName) Set Event name. Outofmemory - Memory OOM (status event); Switch - primary-secondary switch (status event); Roremove - read-only instance removal (status event); MemoryUsedHigh - high memory utilization (status event); CPUExpansion - CPU performance scale-out (stateless event); CPUExpansionFailed - CPU performance scale-out failed (stateless event); CPUContraction - CPU performance scale-in (stateless event); Restart - instance restart (status event); ServerFailureNodeMigration - ServerFailureNodeMigration (status event); PlannedSwitch - planned active/standby switch (stateless event); OverusedReadonlySet - instance will be locked (stateless event); OverusedReadWriteSet - instance unlock (stateless event).
 * @method string getEventStatus() Obtain Event status. "1" - Event; "0" - Recovery event; "-" - Stateless event.
 * @method void setEventStatus(string $EventStatus) Set Event status. "1" - Event; "0" - Recovery event; "-" - Stateless event.
 * @method string getOrder() Obtain Sorting method. Sort by event occurrence. "DESC" - inverted; "ASC" - in order. Default is inverted.
 * @method void setOrder(string $Order) Set Sorting method. Sort by event occurrence. "DESC" - inverted; "ASC" - in order. Default is inverted.
 * @method string getLimit() Obtain Number of displayed events. Default is 100, maximum is 200.
 * @method void setLimit(string $Limit) Set Number of displayed events. Default is 100, maximum is 200.
 * @method string getOffset() Obtain Offset.
 * @method void setOffset(string $Offset) Set Offset.
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 */
class DescribeInstanceAlarmEventsRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string Event query range start time, closed interval.
     */
    public $StartTime;

    /**
     * @var string End time of the event query range, closed interval.
     */
    public $EndTime;

    /**
     * @var array Event name. Outofmemory - Memory OOM (status event); Switch - primary-secondary switch (status event); Roremove - read-only instance removal (status event); MemoryUsedHigh - high memory utilization (status event); CPUExpansion - CPU performance scale-out (stateless event); CPUExpansionFailed - CPU performance scale-out failed (stateless event); CPUContraction - CPU performance scale-in (stateless event); Restart - instance restart (status event); ServerFailureNodeMigration - ServerFailureNodeMigration (status event); PlannedSwitch - planned active/standby switch (stateless event); OverusedReadonlySet - instance will be locked (stateless event); OverusedReadWriteSet - instance unlock (stateless event).
     */
    public $EventName;

    /**
     * @var string Event status. "1" - Event; "0" - Recovery event; "-" - Stateless event.
     */
    public $EventStatus;

    /**
     * @var string Sorting method. Sort by event occurrence. "DESC" - inverted; "ASC" - in order. Default is inverted.
     */
    public $Order;

    /**
     * @var string Number of displayed events. Default is 100, maximum is 200.
     */
    public $Limit;

    /**
     * @var string Offset.
     */
    public $Offset;

    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $StartTime Event query range start time, closed interval.
     * @param string $EndTime End time of the event query range, closed interval.
     * @param array $EventName Event name. Outofmemory - Memory OOM (status event); Switch - primary-secondary switch (status event); Roremove - read-only instance removal (status event); MemoryUsedHigh - high memory utilization (status event); CPUExpansion - CPU performance scale-out (stateless event); CPUExpansionFailed - CPU performance scale-out failed (stateless event); CPUContraction - CPU performance scale-in (stateless event); Restart - instance restart (status event); ServerFailureNodeMigration - ServerFailureNodeMigration (status event); PlannedSwitch - planned active/standby switch (stateless event); OverusedReadonlySet - instance will be locked (stateless event); OverusedReadWriteSet - instance unlock (stateless event).
     * @param string $EventStatus Event status. "1" - Event; "0" - Recovery event; "-" - Stateless event.
     * @param string $Order Sorting method. Sort by event occurrence. "DESC" - inverted; "ASC" - in order. Default is inverted.
     * @param string $Limit Number of displayed events. Default is 100, maximum is 200.
     * @param string $Offset Offset.
     * @param string $NodeId Node ID.
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventStatus",$param) and $param["EventStatus"] !== null) {
            $this->EventStatus = $param["EventStatus"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
