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
 * Describes the details of an instance.
 *
 * @method string getInstanceKey() Obtain Instance unique identifier.

 * @method void setInstanceKey(string $InstanceKey) Set Instance unique identifier.

 * @method integer getLifeRoundNum() Obtain **Instance lifecycle number, identifies one-time execution of the instance.**.

For example, the first run of a periodic instance is numbered 0. if the user reruns the instance subsequently, the second execution is numbered 1.

 * @method void setLifeRoundNum(integer $LifeRoundNum) Set **Instance lifecycle number, identifies one-time execution of the instance.**.

For example, the first run of a periodic instance is numbered 0. if the user reruns the instance subsequently, the second execution is numbered 1.

 * @method string getInstanceState() Obtain **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.

 * @method void setInstanceState(string $InstanceState) Set **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.

 * @method string getRunType() Obtain **Trigger type for instance running**.

-RERUN indicates a rerun.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates rerun - empty run.
-ADDITION_SKIP_RUN indicates a supplementary empty run.
-PERIODIC_SKIP_RUN indicates cycle - empty run.
-APERIODIC_SKIP_RUN indicates non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
 * @method void setRunType(string $RunType) Set **Trigger type for instance running**.

-RERUN indicates a rerun.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates rerun - empty run.
-ADDITION_SKIP_RUN indicates a supplementary empty run.
-PERIODIC_SKIP_RUN indicates cycle - empty run.
-APERIODIC_SKIP_RUN indicates non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
 * @method integer getTries() Obtain Specifies the number of retry attempts on failure.

 * @method void setTries(integer $Tries) Set Specifies the number of retry attempts on failure.

 * @method array getExecutionPhaseList() Obtain **Specifies the lifecycle list for instance execution.**.

 * @method void setExecutionPhaseList(array $ExecutionPhaseList) Set **Specifies the lifecycle list for instance execution.**.

 * @method integer getCostTime() Obtain Time spent, in milliseconds.

 * @method void setCostTime(integer $CostTime) Set Time spent, in milliseconds.
 */
class InstanceExecution extends AbstractModel
{
    /**
     * @var string Instance unique identifier.

     */
    public $InstanceKey;

    /**
     * @var integer **Instance lifecycle number, identifies one-time execution of the instance.**.

For example, the first run of a periodic instance is numbered 0. if the user reruns the instance subsequently, the second execution is numbered 1.

     */
    public $LifeRoundNum;

    /**
     * @var string **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.

     */
    public $InstanceState;

    /**
     * @var string **Trigger type for instance running**.

-RERUN indicates a rerun.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates rerun - empty run.
-ADDITION_SKIP_RUN indicates a supplementary empty run.
-PERIODIC_SKIP_RUN indicates cycle - empty run.
-APERIODIC_SKIP_RUN indicates non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
     */
    public $RunType;

    /**
     * @var integer Specifies the number of retry attempts on failure.

     */
    public $Tries;

    /**
     * @var array **Specifies the lifecycle list for instance execution.**.

     */
    public $ExecutionPhaseList;

    /**
     * @var integer Time spent, in milliseconds.

     */
    public $CostTime;

    /**
     * @param string $InstanceKey Instance unique identifier.

     * @param integer $LifeRoundNum **Instance lifecycle number, identifies one-time execution of the instance.**.

For example, the first run of a periodic instance is numbered 0. if the user reruns the instance subsequently, the second execution is numbered 1.

     * @param string $InstanceState **Instance status**.
-WAIT_EVENT: specifies the wait for event.
-WAIT_UPSTREAM: waiting for upstream.
- WAIT_RUN: awaiting execution.
- RUNNING: indicates the instance is RUNNING.
- SKIP_RUNNING: SKIP RUNNING.
- FAILED_RETRY: RETRY on failure.
- EXPIRED: failed.
-COMPLETED: success.

     * @param string $RunType **Trigger type for instance running**.

-RERUN indicates a rerun.
-ADDITION indicates supplementary recording.
-PERIODIC indicates a period.
-APERIODIC indicates non-periodic.
-RERUN_SKIP_RUN indicates rerun - empty run.
-ADDITION_SKIP_RUN indicates a supplementary empty run.
-PERIODIC_SKIP_RUN indicates cycle - empty run.
-APERIODIC_SKIP_RUN indicates non-periodic empty run.
-MANUAL_TRIGGER indicates manual triggering.
-RERUN_MANUAL_TRIGGER indicates manual triggering - rerun.
     * @param integer $Tries Specifies the number of retry attempts on failure.

     * @param array $ExecutionPhaseList **Specifies the lifecycle list for instance execution.**.

     * @param integer $CostTime Time spent, in milliseconds.
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

        if (array_key_exists("LifeRoundNum",$param) and $param["LifeRoundNum"] !== null) {
            $this->LifeRoundNum = $param["LifeRoundNum"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("ExecutionPhaseList",$param) and $param["ExecutionPhaseList"] !== null) {
            $this->ExecutionPhaseList = [];
            foreach ($param["ExecutionPhaseList"] as $key => $value){
                $obj = new InstanceExecutionPhase();
                $obj->deserialize($value);
                array_push($this->ExecutionPhaseList, $obj);
            }
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }
    }
}
