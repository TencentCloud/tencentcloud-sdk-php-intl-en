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
 * Rule Group Scheduling Information
 *
 * @method integer getId() Obtain Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(integer $Id) Set Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMonitorType() Obtain 1: Unconfigured 2: Associated with production scheduling 3: Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMonitorType(integer $MonitorType) Set 1: Unconfigured 2: Associated with production scheduling 3: Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleType() Obtain Abbreviation for cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleType(string $CycleType) Set Abbreviation for cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCycleStep() Obtain Cycle step length
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleStep(integer $CycleStep) Set Cycle step length
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleDesc() Obtain Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleDesc(string $CycleDesc) Set Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskAction() Obtain Specified time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAction(string $TaskAction) Set Specified time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDelayTime() Obtain Delay time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDelayTime(integer $DelayTime) Set Delay time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleTaskId() Obtain Task ID registered to the task scheduler under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleTaskId(string $CycleTaskId) Set Task ID registered to the task scheduler under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getAssociateTaskIds() Obtain Associated task ID under associated production scheduling
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAssociateTaskIds(array $AssociateTaskIds) Set Associated task ID under associated production scheduling
Note: This field may return null, indicating that no valid value can be obtained.
 */
class RuleGroupSchedulerInfo extends AbstractModel
{
    /**
     * @var integer Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var integer 1: Unconfigured 2: Associated with production scheduling 3: Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MonitorType;

    /**
     * @var string Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string End timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Abbreviation for cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleType;

    /**
     * @var integer Cycle step length
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleStep;

    /**
     * @var string Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleDesc;

    /**
     * @var string Specified time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAction;

    /**
     * @var integer Delay time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DelayTime;

    /**
     * @var string Task ID registered to the task scheduler under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleTaskId;

    /**
     * @var array Associated task ID under associated production scheduling
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AssociateTaskIds;

    /**
     * @param integer $Id Rule Group IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MonitorType 1: Unconfigured 2: Associated with production scheduling 3: Offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime End timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleType Abbreviation for cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CycleStep Cycle step length
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleDesc Cycle type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskAction Specified time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DelayTime Delay time under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleTaskId Task ID registered to the task scheduler under offline cycle detection
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $AssociateTaskIds Associated task ID under associated production scheduling
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("CycleDesc",$param) and $param["CycleDesc"] !== null) {
            $this->CycleDesc = $param["CycleDesc"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("CycleTaskId",$param) and $param["CycleTaskId"] !== null) {
            $this->CycleTaskId = $param["CycleTaskId"];
        }

        if (array_key_exists("AssociateTaskIds",$param) and $param["AssociateTaskIds"] !== null) {
            $this->AssociateTaskIds = $param["AssociateTaskIds"];
        }
    }
}
