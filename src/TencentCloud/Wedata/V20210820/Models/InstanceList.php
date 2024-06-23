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
 * Offline operation and maintenance instance list
 *
 * @method string getCostTime() Obtain Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCostTime(string $CostTime) Set Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurRunDate() Obtain Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurRunDate(string $CurRunDate) Set Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleType() Obtain Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleType(string $CycleType) Set Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDoFlag() Obtain Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDoFlag(integer $DoFlag) Set Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInCharge() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInCharge(string $InCharge) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastLog() Obtain LogNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastLog(string $LastLog) Set LogNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchedulerDesc() Obtain Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchedulerDesc(string $SchedulerDesc) Set Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getState() Obtain Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED| COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setState(string $State) Set Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED| COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTryLimit() Obtain Number of trial runs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTryLimit(integer $TryLimit) Set Number of trial runs
Note: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceList extends AbstractModel
{
    /**
     * @var string Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CostTime;

    /**
     * @var string Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurRunDate;

    /**
     * @var string Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleType;

    /**
     * @var integer Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DoFlag;

    /**
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InCharge;

    /**
     * @var string LogNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastLog;

    /**
     * @var string Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchedulerDesc;

    /**
     * @var string Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED| COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $State;

    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var integer Number of trial runs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TryLimit;

    /**
     * @param string $CostTime Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurRunDate Data TimestampNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleType Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DoFlag Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InCharge Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastLog LogNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchedulerDesc Scheduling plan
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $State Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED| COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TryLimit Number of trial runs
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
        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("DoFlag",$param) and $param["DoFlag"] !== null) {
            $this->DoFlag = $param["DoFlag"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("LastLog",$param) and $param["LastLog"] !== null) {
            $this->LastLog = $param["LastLog"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }
    }
}
