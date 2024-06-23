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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAlarmRegularNameExist request structure.
 *
 * @method string getProjectId() Obtain Project name
 * @method void setProjectId(string $ProjectId) Set Project name
 * @method string getAlarmRegularName() Obtain Rule name
 * @method void setAlarmRegularName(string $AlarmRegularName) Set Rule name
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getId() Obtain Primary key ID
 * @method void setId(string $Id) Set Primary key ID
 * @method integer getTaskType() Obtain Task type: 201.Real-time, 202.Offline
 * @method void setTaskType(integer $TaskType) Set Task type: 201.Real-time, 202.Offline
 * @method integer getMonitorType() Obtain Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
 * @method void setMonitorType(integer $MonitorType) Set Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
 */
class CheckAlarmRegularNameExistRequest extends AbstractModel
{
    /**
     * @var string Project name
     */
    public $ProjectId;

    /**
     * @var string Rule name
     */
    public $AlarmRegularName;

    /**
     * @var string Task ID
     * @deprecated
     */
    public $TaskId;

    /**
     * @var string Primary key ID
     */
    public $Id;

    /**
     * @var integer Task type: 201.Real-time, 202.Offline
     */
    public $TaskType;

    /**
     * @var integer Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
     */
    public $MonitorType;

    /**
     * @param string $ProjectId Project name
     * @param string $AlarmRegularName Rule name
     * @param string $TaskId Task ID
     * @param string $Id Primary key ID
     * @param integer $TaskType Task type: 201.Real-time, 202.Offline
     * @param integer $MonitorType Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AlarmRegularName",$param) and $param["AlarmRegularName"] !== null) {
            $this->AlarmRegularName = $param["AlarmRegularName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
