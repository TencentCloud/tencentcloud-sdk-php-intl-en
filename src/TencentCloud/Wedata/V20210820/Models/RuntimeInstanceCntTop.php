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
 * Specify Time Window Instance Duration Ranking
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInCharge() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInCharge(string $InCharge) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleUnit() Obtain Task Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleUnit(string $CycleUnit) Set Task Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getState() Obtain Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setState(string $State) Set Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRunTime() Obtain Time Consumption
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunTime(integer $RunTime) Set Time Consumption
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurRunTime() Obtain Instance Running TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurRunTime(string $CurRunTime) Set Instance Running TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getWaitScheduleTime() Obtain Waiting for Scheduling Duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWaitScheduleTime(integer $WaitScheduleTime) Set Waiting for Scheduling Duration
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuntimeInstanceCntTop extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InCharge;

    /**
     * @var string Task Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleUnit;

    /**
     * @var string Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $State;

    /**
     * @var integer Time Consumption
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunTime;

    /**
     * @var string Instance Running TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurRunTime;

    /**
     * @var integer Waiting for Scheduling Duration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WaitScheduleTime;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName 1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InCharge Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleUnit Task Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $State Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RunTime Time Consumption
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurRunTime Instance Running TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $WaitScheduleTime Waiting for Scheduling Duration
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("CurRunTime",$param) and $param["CurRunTime"] !== null) {
            $this->CurRunTime = $param["CurRunTime"];
        }

        if (array_key_exists("WaitScheduleTime",$param) and $param["WaitScheduleTime"] !== null) {
            $this->WaitScheduleTime = $param["WaitScheduleTime"];
        }
    }
}
