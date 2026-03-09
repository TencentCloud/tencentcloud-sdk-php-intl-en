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
 * Task scheduling configuration information.
 *
 * @method array getUpstreamDependencyConfigList() Obtain Upstream dependency array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamDependencyConfigList(array $UpstreamDependencyConfigList) Set Upstream dependency array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRunPriorityType() Obtain Task scheduling priority. execution priority. valid values: 4 (high), 5 (medium), 6 (low). default: 6.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunPriorityType(integer $RunPriorityType) Set Task scheduling priority. execution priority. valid values: 4 (high), 5 (medium), 6 (low). default: 6.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRetryWaitMinute() Obtain Retry policy retry wait time, in minutes: default: 5.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetryWaitMinute(integer $RetryWaitMinute) Set Retry policy retry wait time, in minutes: default: 5.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxRetryNumber() Obtain Retry policy maximum attempts. default: 4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxRetryNumber(integer $MaxRetryNumber) Set Retry policy maximum attempts. default: 4.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExecutionTTLMinute() Obtain Timeout handling strategy runtime timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionTTLMinute(integer $ExecutionTTLMinute) Set Timeout handling strategy runtime timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWaitExecutionTotalTTLMinute() Obtain Timeout handling strategy wait duration timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWaitExecutionTotalTTLMinute(integer $WaitExecutionTotalTTLMinute) Set Timeout handling strategy wait duration timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAllowRedoType() Obtain Rerun & replenishment configuration, defaults to ALL. ALL allows rerun or replenishment after successful or failed running. FAILURE does not allow rerun or replenishment after successful running but allows after failed running. NONE does not allow rerun or replenishment after either successful or failed running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowRedoType(string $AllowRedoType) Set Rerun & replenishment configuration, defaults to ALL. ALL allows rerun or replenishment after successful or failed running. FAILURE does not allow rerun or replenishment after successful running but allows after failed running. NONE does not allow rerun or replenishment after either successful or failed running.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getParamTaskOutList() Obtain Output parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamTaskOutList(array $ParamTaskOutList) Set Output parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getParamTaskInList() Obtain Input parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParamTaskInList(array $ParamTaskInList) Set Input parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTaskOutputRegistryList() Obtain Output registration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskOutputRegistryList(array $TaskOutputRegistryList) Set Output registration.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TriggerTaskSchedulerConfiguration extends AbstractModel
{
    /**
     * @var array Upstream dependency array.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamDependencyConfigList;

    /**
     * @var integer Task scheduling priority. execution priority. valid values: 4 (high), 5 (medium), 6 (low). default: 6.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunPriorityType;

    /**
     * @var integer Retry policy retry wait time, in minutes: default: 5.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetryWaitMinute;

    /**
     * @var integer Retry policy maximum attempts. default: 4.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxRetryNumber;

    /**
     * @var integer Timeout handling strategy runtime timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionTTLMinute;

    /**
     * @var integer Timeout handling strategy wait duration timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WaitExecutionTotalTTLMinute;

    /**
     * @var string Rerun & replenishment configuration, defaults to ALL. ALL allows rerun or replenishment after successful or failed running. FAILURE does not allow rerun or replenishment after successful running but allows after failed running. NONE does not allow rerun or replenishment after either successful or failed running.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowRedoType;

    /**
     * @var array Output parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamTaskOutList;

    /**
     * @var array Input parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ParamTaskInList;

    /**
     * @var array Output registration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskOutputRegistryList;

    /**
     * @param array $UpstreamDependencyConfigList Upstream dependency array.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RunPriorityType Task scheduling priority. execution priority. valid values: 4 (high), 5 (medium), 6 (low). default: 6.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RetryWaitMinute Retry policy retry wait time, in minutes: default: 5.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxRetryNumber Retry policy maximum attempts. default: 4.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExecutionTTLMinute Timeout handling strategy runtime timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WaitExecutionTotalTTLMinute Timeout handling strategy wait duration timeout (unit: minutes) defaults to -1.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AllowRedoType Rerun & replenishment configuration, defaults to ALL. ALL allows rerun or replenishment after successful or failed running. FAILURE does not allow rerun or replenishment after successful running but allows after failed running. NONE does not allow rerun or replenishment after either successful or failed running.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ParamTaskOutList Output parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ParamTaskInList Input parameter array.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TaskOutputRegistryList Output registration.
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
        if (array_key_exists("UpstreamDependencyConfigList",$param) and $param["UpstreamDependencyConfigList"] !== null) {
            $this->UpstreamDependencyConfigList = [];
            foreach ($param["UpstreamDependencyConfigList"] as $key => $value){
                $obj = new DependencyTriggerTaskBrief();
                $obj->deserialize($value);
                array_push($this->UpstreamDependencyConfigList, $obj);
            }
        }

        if (array_key_exists("RunPriorityType",$param) and $param["RunPriorityType"] !== null) {
            $this->RunPriorityType = $param["RunPriorityType"];
        }

        if (array_key_exists("RetryWaitMinute",$param) and $param["RetryWaitMinute"] !== null) {
            $this->RetryWaitMinute = $param["RetryWaitMinute"];
        }

        if (array_key_exists("MaxRetryNumber",$param) and $param["MaxRetryNumber"] !== null) {
            $this->MaxRetryNumber = $param["MaxRetryNumber"];
        }

        if (array_key_exists("ExecutionTTLMinute",$param) and $param["ExecutionTTLMinute"] !== null) {
            $this->ExecutionTTLMinute = $param["ExecutionTTLMinute"];
        }

        if (array_key_exists("WaitExecutionTotalTTLMinute",$param) and $param["WaitExecutionTotalTTLMinute"] !== null) {
            $this->WaitExecutionTotalTTLMinute = $param["WaitExecutionTotalTTLMinute"];
        }

        if (array_key_exists("AllowRedoType",$param) and $param["AllowRedoType"] !== null) {
            $this->AllowRedoType = $param["AllowRedoType"];
        }

        if (array_key_exists("ParamTaskOutList",$param) and $param["ParamTaskOutList"] !== null) {
            $this->ParamTaskOutList = [];
            foreach ($param["ParamTaskOutList"] as $key => $value){
                $obj = new OutTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskOutList, $obj);
            }
        }

        if (array_key_exists("ParamTaskInList",$param) and $param["ParamTaskInList"] !== null) {
            $this->ParamTaskInList = [];
            foreach ($param["ParamTaskInList"] as $key => $value){
                $obj = new InTaskParameter();
                $obj->deserialize($value);
                array_push($this->ParamTaskInList, $obj);
            }
        }

        if (array_key_exists("TaskOutputRegistryList",$param) and $param["TaskOutputRegistryList"] !== null) {
            $this->TaskOutputRegistryList = [];
            foreach ($param["TaskOutputRegistryList"] as $key => $value){
                $obj = new TaskDataRegistry();
                $obj->deserialize($value);
                array_push($this->TaskOutputRegistryList, $obj);
            }
        }
    }
}
