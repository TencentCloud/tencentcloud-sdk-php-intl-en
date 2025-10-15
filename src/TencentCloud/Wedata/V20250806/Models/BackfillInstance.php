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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Description of a supplementary instance.
 *
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getCurRunDate() Obtain Specifies the instance data time.
 * @method void setCurRunDate(string $CurRunDate) Set Specifies the instance data time.
 * @method string getState() Obtain Execution status.
 * @method void setState(string $State) Set Execution status.
 * @method string getStartTime() Obtain Start time.


 * @method void setStartTime(string $StartTime) Set Start time.


 * @method string getEndTime() Obtain End time.


 * @method void setEndTime(string $EndTime) Set End time.


 * @method string getCostTime() Obtain Execution duration.


 * @method void setCostTime(string $CostTime) Set Execution duration.
 */
class BackfillInstance extends AbstractModel
{
    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Specifies the instance data time.
     */
    public $CurRunDate;

    /**
     * @var string Execution status.
     */
    public $State;

    /**
     * @var string Start time.


     */
    public $StartTime;

    /**
     * @var string End time.


     */
    public $EndTime;

    /**
     * @var string Execution duration.


     */
    public $CostTime;

    /**
     * @param string $TaskName Task name.
     * @param string $TaskId Task ID
     * @param string $CurRunDate Specifies the instance data time.
     * @param string $State Execution status.
     * @param string $StartTime Start time.


     * @param string $EndTime End time.


     * @param string $CostTime Execution duration.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }
    }
}
