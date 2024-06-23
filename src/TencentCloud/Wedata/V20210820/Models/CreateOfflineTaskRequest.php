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
 * CreateOfflineTask request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getCycleStep() Obtain Interval, optional, default is 1. Not null. Default is 1
 * @method void setCycleStep(integer $CycleStep) Set Interval, optional, default is 1. Not null. Default is 1
 * @method integer getDelayTime() Obtain Delayed Execution Time, in minutes
 * @method void setDelayTime(integer $DelayTime) Set Delayed Execution Time, in minutes
 * @method string getEndTime() Obtain Task End Data Time. Not Empty. Default to Current Time
 * @method void setEndTime(string $EndTime) Set Task End Data Time. Not Empty. Default to Current Time
 * @method string getNotes() Obtain Remarks
 * @method void setNotes(string $Notes) Set Remarks
 * @method string getStartTime() Obtain Current date
 * @method void setStartTime(string $StartTime) Set Current date
 * @method string getTaskName() Obtain Task Name
 * @method void setTaskName(string $TaskName) Set Task Name
 * @method integer getTypeId() Obtain Keep it consistent with the previous call to the scheduling interface 27
 * @method void setTypeId(integer $TypeId) Set Keep it consistent with the previous call to the scheduling interface 27
 * @method string getTaskAction() Obtain Time Specification, for monthly tasks specify days like 1,3, then enter 1,3. Not Empty. Default "" Monthly Task: For specific days like "1,3", specifying the end of the month cannot be combined with specific dates, can only be "L"
 * @method void setTaskAction(string $TaskAction) Set Time Specification, for monthly tasks specify days like 1,3, then enter 1,3. Not Empty. Default "" Monthly Task: For specific days like "1,3", specifying the end of the month cannot be combined with specific dates, can only be "L"
 * @method string getTaskMode() Obtain Distinguish between canvas and form
 * @method void setTaskMode(string $TaskMode) Set Distinguish between canvas and form
 */
class CreateOfflineTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Interval, optional, default is 1. Not null. Default is 1
     */
    public $CycleStep;

    /**
     * @var integer Delayed Execution Time, in minutes
     */
    public $DelayTime;

    /**
     * @var string Task End Data Time. Not Empty. Default to Current Time
     */
    public $EndTime;

    /**
     * @var string Remarks
     */
    public $Notes;

    /**
     * @var string Current date
     */
    public $StartTime;

    /**
     * @var string Task Name
     */
    public $TaskName;

    /**
     * @var integer Keep it consistent with the previous call to the scheduling interface 27
     */
    public $TypeId;

    /**
     * @var string Time Specification, for monthly tasks specify days like 1,3, then enter 1,3. Not Empty. Default "" Monthly Task: For specific days like "1,3", specifying the end of the month cannot be combined with specific dates, can only be "L"
     */
    public $TaskAction;

    /**
     * @var string Distinguish between canvas and form
     */
    public $TaskMode;

    /**
     * @param string $ProjectId Project ID
     * @param integer $CycleStep Interval, optional, default is 1. Not null. Default is 1
     * @param integer $DelayTime Delayed Execution Time, in minutes
     * @param string $EndTime Task End Data Time. Not Empty. Default to Current Time
     * @param string $Notes Remarks
     * @param string $StartTime Current date
     * @param string $TaskName Task Name
     * @param integer $TypeId Keep it consistent with the previous call to the scheduling interface 27
     * @param string $TaskAction Time Specification, for monthly tasks specify days like 1,3, then enter 1,3. Not Empty. Default "" Monthly Task: For specific days like "1,3", specifying the end of the month cannot be combined with specific dates, can only be "L"
     * @param string $TaskMode Distinguish between canvas and form
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

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }
    }
}
