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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rollback Task Record
 *
 * @method string getTargetInstanceId() Obtain Target Instance ID
 * @method void setTargetInstanceId(string $TargetInstanceId) Set Target Instance ID
 * @method string getTargetInstanceName() Obtain Target Instance Name
 * @method void setTargetInstanceName(string $TargetInstanceName) Set Target Instance Name
 * @method integer getTargetInstanceStatus() Obtain Target Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
11: Read-Only
12: Restarting
 * @method void setTargetInstanceStatus(integer $TargetInstanceStatus) Set Target Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
11: Read-Only
12: Restarting
 * @method string getTargetRegion() Obtain Target Instance Region
 * @method void setTargetRegion(string $TargetRegion) Set Target Instance Region
 * @method integer getRestoreId() Obtain Rollback Record ID
 * @method void setRestoreId(integer $RestoreId) Set Rollback Record ID
 * @method integer getTargetType() Obtain Restoration target instance type: 0 - current instance, 1 - existing instance, 2 - new instance
 * @method void setTargetType(integer $TargetType) Set Restoration target instance type: 0 - current instance, 1 - existing instance, 2 - new instance
 * @method integer getRestoreType() Obtain Rollback method: 0 - by point-in-time, 1 - by backup set
 * @method void setRestoreType(integer $RestoreType) Set Rollback method: 0 - by point-in-time, 1 - by backup set
 * @method string getRestoreTime() Obtain Rollback Target Time
 * @method void setRestoreTime(string $RestoreTime) Set Rollback Target Time
 * @method string getStartTime() Obtain Start Time
 * @method void setStartTime(string $StartTime) Set Start Time
 * @method string getEndTime() Obtain End Time
 * @method void setEndTime(string $EndTime) Set End Time
 * @method integer getStatus() Obtain Rollback status: 0 - Initialization, 1 - Running, 2 - Success, 3 - Failure
 * @method void setStatus(integer $Status) Set Rollback status: 0 - Initialization, 1 - Running, 2 - Success, 3 - Failure
 * @method integer getFlowId() Obtain Rollback Asynchronous Task ID
 * @method void setFlowId(integer $FlowId) Set Rollback Asynchronous Task ID
 */
class RestoreTask extends AbstractModel
{
    /**
     * @var string Target Instance ID
     */
    public $TargetInstanceId;

    /**
     * @var string Target Instance Name
     */
    public $TargetInstanceName;

    /**
     * @var integer Target Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
11: Read-Only
12: Restarting
     */
    public $TargetInstanceStatus;

    /**
     * @var string Target Instance Region
     */
    public $TargetRegion;

    /**
     * @var integer Rollback Record ID
     */
    public $RestoreId;

    /**
     * @var integer Restoration target instance type: 0 - current instance, 1 - existing instance, 2 - new instance
     */
    public $TargetType;

    /**
     * @var integer Rollback method: 0 - by point-in-time, 1 - by backup set
     */
    public $RestoreType;

    /**
     * @var string Rollback Target Time
     */
    public $RestoreTime;

    /**
     * @var string Start Time
     */
    public $StartTime;

    /**
     * @var string End Time
     */
    public $EndTime;

    /**
     * @var integer Rollback status: 0 - Initialization, 1 - Running, 2 - Success, 3 - Failure
     */
    public $Status;

    /**
     * @var integer Rollback Asynchronous Task ID
     */
    public $FlowId;

    /**
     * @param string $TargetInstanceId Target Instance ID
     * @param string $TargetInstanceName Target Instance Name
     * @param integer $TargetInstanceStatus Target Instance Status. Valid values:
1: Creating
2: Running
3: Restricted Running (primary/secondary switching)
4: Isolated
5: Recycling
6: Recycled
7: Task Executing (instance backup, rollback, etc.)
8: Offline
9: Instance Scaling
10: Instance Migrating
11: Read-Only
12: Restarting
     * @param string $TargetRegion Target Instance Region
     * @param integer $RestoreId Rollback Record ID
     * @param integer $TargetType Restoration target instance type: 0 - current instance, 1 - existing instance, 2 - new instance
     * @param integer $RestoreType Rollback method: 0 - by point-in-time, 1 - by backup set
     * @param string $RestoreTime Rollback Target Time
     * @param string $StartTime Start Time
     * @param string $EndTime End Time
     * @param integer $Status Rollback status: 0 - Initialization, 1 - Running, 2 - Success, 3 - Failure
     * @param integer $FlowId Rollback Asynchronous Task ID
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
        if (array_key_exists("TargetInstanceId",$param) and $param["TargetInstanceId"] !== null) {
            $this->TargetInstanceId = $param["TargetInstanceId"];
        }

        if (array_key_exists("TargetInstanceName",$param) and $param["TargetInstanceName"] !== null) {
            $this->TargetInstanceName = $param["TargetInstanceName"];
        }

        if (array_key_exists("TargetInstanceStatus",$param) and $param["TargetInstanceStatus"] !== null) {
            $this->TargetInstanceStatus = $param["TargetInstanceStatus"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("RestoreId",$param) and $param["RestoreId"] !== null) {
            $this->RestoreId = $param["RestoreId"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("RestoreType",$param) and $param["RestoreType"] !== null) {
            $this->RestoreType = $param["RestoreType"];
        }

        if (array_key_exists("RestoreTime",$param) and $param["RestoreTime"] !== null) {
            $this->RestoreTime = $param["RestoreTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }
    }
}
