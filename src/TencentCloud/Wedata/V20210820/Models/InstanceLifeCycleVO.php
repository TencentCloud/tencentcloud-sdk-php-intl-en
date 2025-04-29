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
 * Details of a scheduled instance.
 *
 * @method string getInstanceKey() Obtain Unique identifier of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set Unique identifier of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInstanceState() Obtain Instance status.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceState(integer $InstanceState) Set Instance status.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLifeRoundNum() Obtain Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifeRoundNum(integer $LifeRoundNum) Set Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRunType() Obtain Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunType(string $RunType) Set Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTries() Obtain Number of retries after failure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTries(integer $Tries) Set Number of retries after failure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLifeCycleDetailList() Obtain List of instance lifecycle.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLifeCycleDetailList(array $LifeCycleDetailList) Set List of instance lifecycle.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCodeFileName() Obtain Instance code file.
The file content specifies the code used for running the execution instance this time. only some tasks support it.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCodeFileName(string $CodeFileName) Set Instance code file.
The file content specifies the code used for running the execution instance this time. only some tasks support it.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionJobId() Obtain Dispatch execution ID.
The unified execution platform dispatches execution to the new version executor with a unique ID to identify a specific execution, while the existing old executors do not have this ID when dispatching execution.
If it is unknown whether the executor version supports this ID, contact tencent cloud's operations team.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionJobId(string $ExecutionJobId) Set Dispatch execution ID.
The unified execution platform dispatches execution to the new version executor with a unique ID to identify a specific execution, while the existing old executors do not have this ID when dispatching execution.
If it is unknown whether the executor version supports this ID, contact tencent cloud's operations team.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBrokerIp() Obtain The execution node where the log resides.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBrokerIp(string $BrokerIp) Set The execution node where the log resides.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginFileName() Obtain Log file name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginFileName(string $OriginFileName) Set Log file name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogType() Obtain Instance log type.

-run: indicates the state of functioning. 
-kill: terminates.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogType(string $LogType) Set Instance log type.

-run: indicates the state of functioning. 
-kill: terminates.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCostTime() Obtain Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCostTime(string $CostTime) Set Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceLifeCycleVO extends AbstractModel
{
    /**
     * @var string Unique identifier of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceKey;

    /**
     * @var integer Instance status.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceState;

    /**
     * @var integer Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifeRoundNum;

    /**
     * @var string Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunType;

    /**
     * @var integer Number of retries after failure.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tries;

    /**
     * @var array List of instance lifecycle.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LifeCycleDetailList;

    /**
     * @var string Instance code file.
The file content specifies the code used for running the execution instance this time. only some tasks support it.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CodeFileName;

    /**
     * @var string Dispatch execution ID.
The unified execution platform dispatches execution to the new version executor with a unique ID to identify a specific execution, while the existing old executors do not have this ID when dispatching execution.
If it is unknown whether the executor version supports this ID, contact tencent cloud's operations team.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionJobId;

    /**
     * @var string The execution node where the log resides.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BrokerIp;

    /**
     * @var string Log file name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginFileName;

    /**
     * @var string Instance log type.

-run: indicates the state of functioning. 
-kill: terminates.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogType;

    /**
     * @var string Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CostTime;

    /**
     * @param string $InstanceKey Unique identifier of the instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InstanceState Instance status.

-[0] Indicates waiting for event.
-[12] indicates waiting for upstream.
-[6, 7, 9, 10, 18] indicates awaiting execution.
-[1, 19, 22] indicate running.
-[21] skip running.
-[3] indicates retry on failure.
-[8, 4, 5, 13] indicates a failure.
-[2] indicates a success.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LifeRoundNum Instance lifetime number, which identifies one-time execution of the instance.

For example: the number of the first run of a periodic instance is 0. when the user reruns the instance later, the number of the second execution is 1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RunType Instance running trigger type.

-RERUN indicates rerunning.
-ADDITION indicates data replenishment.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN means empty run for re-run.
-ADDITION_SKIP_RUN indicates data replenishment - empty run.
-PERIODIC_SKIP_RUN indicates an empty run in a periodic cycle.
-APERIODIC_SKIP_RUN indicates a non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Tries Number of retries after failure.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LifeCycleDetailList List of instance lifecycle.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CodeFileName Instance code file.
The file content specifies the code used for running the execution instance this time. only some tasks support it.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionJobId Dispatch execution ID.
The unified execution platform dispatches execution to the new version executor with a unique ID to identify a specific execution, while the existing old executors do not have this ID when dispatching execution.
If it is unknown whether the executor version supports this ID, contact tencent cloud's operations team.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BrokerIp The execution node where the log resides.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginFileName Log file name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogType Instance log type.

-run: indicates the state of functioning. 
-kill: terminates.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CostTime Time spent.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("LifeCycleDetailList",$param) and $param["LifeCycleDetailList"] !== null) {
            $this->LifeCycleDetailList = [];
            foreach ($param["LifeCycleDetailList"] as $key => $value){
                $obj = new InstanceLifeDetailDto();
                $obj->deserialize($value);
                array_push($this->LifeCycleDetailList, $obj);
            }
        }

        if (array_key_exists("CodeFileName",$param) and $param["CodeFileName"] !== null) {
            $this->CodeFileName = $param["CodeFileName"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("OriginFileName",$param) and $param["OriginFileName"] !== null) {
            $this->OriginFileName = $param["OriginFileName"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }
    }
}
