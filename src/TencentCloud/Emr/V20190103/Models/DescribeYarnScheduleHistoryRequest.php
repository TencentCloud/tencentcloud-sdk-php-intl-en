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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeYarnScheduleHistory request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Start time
 * @method void setStartTime(integer $StartTime) Set Start time
 * @method integer getEndTime() Obtain End time
 * @method void setEndTime(integer $EndTime) Set End time
 * @method integer getLimit() Obtain Page number.
 * @method void setLimit(integer $Limit) Set Page number.
 * @method integer getOffset() Obtain Page size.
 * @method void setOffset(integer $Offset) Set Page size.
 * @method string getSchedulerType() Obtain Scheduler type. The values are ALL, Capacity Scheduler, and Fair Scheduler.
 * @method void setSchedulerType(string $SchedulerType) Set Scheduler type. The values are ALL, Capacity Scheduler, and Fair Scheduler.
 * @method integer getTaskState() Obtain Task type. 0: waiting; 1: executing; 2: completed; -1: failed; -99: all.
 * @method void setTaskState(integer $TaskState) Set Task type. 0: waiting; 1: executing; 2: completed; -1: failed; -99: all.
 */
class DescribeYarnScheduleHistoryRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Start time
     */
    public $StartTime;

    /**
     * @var integer End time
     */
    public $EndTime;

    /**
     * @var integer Page number.
     */
    public $Limit;

    /**
     * @var integer Page size.
     */
    public $Offset;

    /**
     * @var string Scheduler type. The values are ALL, Capacity Scheduler, and Fair Scheduler.
     */
    public $SchedulerType;

    /**
     * @var integer Task type. 0: waiting; 1: executing; 2: completed; -1: failed; -99: all.
     */
    public $TaskState;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Start time
     * @param integer $EndTime End time
     * @param integer $Limit Page number.
     * @param integer $Offset Page size.
     * @param string $SchedulerType Scheduler type. The values are ALL, Capacity Scheduler, and Fair Scheduler.
     * @param integer $TaskState Task type. 0: waiting; 1: executing; 2: completed; -1: failed; -99: all.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SchedulerType",$param) and $param["SchedulerType"] !== null) {
            $this->SchedulerType = $param["SchedulerType"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }
    }
}
