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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule for time-based scaling
 *
 * @method string getStrategyName() Obtain Policy name, which is unique within one cluster.
 * @method void setStrategyName(string $StrategyName) Set Policy name, which is unique within one cluster.
 * @method integer getIntervalTime() Obtain Cooling time after policy trigger, during which auto scaling cannot be triggered.
 * @method void setIntervalTime(integer $IntervalTime) Set Cooling time after policy trigger, during which auto scaling cannot be triggered.
 * @method integer getScaleAction() Obtain Scaling action. 1: scale-out, 2: scale-in.
 * @method void setScaleAction(integer $ScaleAction) Set Scaling action. 1: scale-out, 2: scale-in.
 * @method integer getScaleNum() Obtain Scaling amount.
 * @method void setScaleNum(integer $ScaleNum) Set Scaling amount.
 * @method integer getStrategyStatus() Obtain Rule status. 1: valid; 2: invalid; 3: suspended. This field is required.
 * @method void setStrategyStatus(integer $StrategyStatus) Set Rule status. 1: valid; 2: invalid; 3: suspended. This field is required.
 * @method integer getPriority() Obtain Rule priority. The smaller value indicates the higher priority.
 * @method void setPriority(integer $Priority) Set Rule priority. The smaller value indicates the higher priority.
 * @method integer getRetryValidTime() Obtain When multiple rules are triggered at the same time and some are not really executed, retries will be performed within this time range.
 * @method void setRetryValidTime(integer $RetryValidTime) Set When multiple rules are triggered at the same time and some are not really executed, retries will be performed within this time range.
 * @method RepeatStrategy getRepeatStrategy() Obtain Time scaling repetition policy

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRepeatStrategy(RepeatStrategy $RepeatStrategy) Set Time scaling repetition policy

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStrategyId() Obtain Unique policy ID.
 * @method void setStrategyId(integer $StrategyId) Set Unique policy ID.
 * @method boolean getGraceDownFlag() Obtain Graceful scale-in switch.
 * @method void setGraceDownFlag(boolean $GraceDownFlag) Set Graceful scale-in switch.
 * @method integer getGraceDownTime() Obtain Graceful scale-in wait time.
 * @method void setGraceDownTime(integer $GraceDownTime) Set Graceful scale-in wait time.
 * @method array getTags() Obtain Bound tag list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Bound tag list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigGroupAssigned() Obtain Preset configuration group.
 * @method void setConfigGroupAssigned(string $ConfigGroupAssigned) Set Preset configuration group.
 * @method string getMeasureMethod() Obtain Calculation method of scale-out resources. Valid values: "DEFAULT","INSTANCE", "CPU" and "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
 * @method void setMeasureMethod(string $MeasureMethod) Set Calculation method of scale-out resources. Valid values: "DEFAULT","INSTANCE", "CPU" and "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
 * @method string getTerminatePolicy() Obtain Termination policy. "DEFAULT" denotes the default policy, which indicates that scale-in is triggered by scale-in rules. "TIMING" denotes timed destruction.
 * @method void setTerminatePolicy(string $TerminatePolicy) Set Termination policy. "DEFAULT" denotes the default policy, which indicates that scale-in is triggered by scale-in rules. "TIMING" denotes timed destruction.
 * @method integer getMaxUse() Obtain Maximum use time in seconds. The minimum value is 1 hour, and the maximum is 24 hours.
 * @method void setMaxUse(integer $MaxUse) Set Maximum use time in seconds. The minimum value is 1 hour, and the maximum is 24 hours.
 * @method array getSoftDeployInfo() Obtain Node deployment service list. Fill in only HDFS and YARN. For details, see [Mapping Table for Component Names](https://intl.cloud.tencent.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set Node deployment service list. Fill in only HDFS and YARN. For details, see [Mapping Table for Component Names](https://intl.cloud.tencent.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getServiceNodeInfo() Obtain Startup process list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set Startup process list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCompensateFlag() Obtain Compensatory scale-out. 0: disable, 1: enable.
 * @method void setCompensateFlag(integer $CompensateFlag) Set Compensatory scale-out. 0: disable, 1: enable.
 * @method integer getGroupId() Obtain Scaling group ID.
 * @method void setGroupId(integer $GroupId) Set Scaling group ID.
 * @method array getGraceDownLabel() Obtain Graceful scale-in business pod tag. Nodes are scaled in when the pod mentioned above is not found on the node or the graceful scale-in time is passed.
 * @method void setGraceDownLabel(array $GraceDownLabel) Set Graceful scale-in business pod tag. Nodes are scaled in when the pod mentioned above is not found on the node or the graceful scale-in time is passed.
 */
class TimeAutoScaleStrategy extends AbstractModel
{
    /**
     * @var string Policy name, which is unique within one cluster.
     */
    public $StrategyName;

    /**
     * @var integer Cooling time after policy trigger, during which auto scaling cannot be triggered.
     */
    public $IntervalTime;

    /**
     * @var integer Scaling action. 1: scale-out, 2: scale-in.
     */
    public $ScaleAction;

    /**
     * @var integer Scaling amount.
     */
    public $ScaleNum;

    /**
     * @var integer Rule status. 1: valid; 2: invalid; 3: suspended. This field is required.
     */
    public $StrategyStatus;

    /**
     * @var integer Rule priority. The smaller value indicates the higher priority.
     */
    public $Priority;

    /**
     * @var integer When multiple rules are triggered at the same time and some are not really executed, retries will be performed within this time range.
     */
    public $RetryValidTime;

    /**
     * @var RepeatStrategy Time scaling repetition policy

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RepeatStrategy;

    /**
     * @var integer Unique policy ID.
     */
    public $StrategyId;

    /**
     * @var boolean Graceful scale-in switch.
     */
    public $GraceDownFlag;

    /**
     * @var integer Graceful scale-in wait time.
     */
    public $GraceDownTime;

    /**
     * @var array Bound tag list

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Preset configuration group.
     */
    public $ConfigGroupAssigned;

    /**
     * @var string Calculation method of scale-out resources. Valid values: "DEFAULT","INSTANCE", "CPU" and "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
     */
    public $MeasureMethod;

    /**
     * @var string Termination policy. "DEFAULT" denotes the default policy, which indicates that scale-in is triggered by scale-in rules. "TIMING" denotes timed destruction.
     */
    public $TerminatePolicy;

    /**
     * @var integer Maximum use time in seconds. The minimum value is 1 hour, and the maximum is 24 hours.
     */
    public $MaxUse;

    /**
     * @var array Node deployment service list. Fill in only HDFS and YARN. For details, see [Mapping Table for Component Names](https://intl.cloud.tencent.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SoftDeployInfo;

    /**
     * @var array Startup process list

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceNodeInfo;

    /**
     * @var integer Compensatory scale-out. 0: disable, 1: enable.
     */
    public $CompensateFlag;

    /**
     * @var integer Scaling group ID.
     */
    public $GroupId;

    /**
     * @var array Graceful scale-in business pod tag. Nodes are scaled in when the pod mentioned above is not found on the node or the graceful scale-in time is passed.
     */
    public $GraceDownLabel;

    /**
     * @param string $StrategyName Policy name, which is unique within one cluster.
     * @param integer $IntervalTime Cooling time after policy trigger, during which auto scaling cannot be triggered.
     * @param integer $ScaleAction Scaling action. 1: scale-out, 2: scale-in.
     * @param integer $ScaleNum Scaling amount.
     * @param integer $StrategyStatus Rule status. 1: valid; 2: invalid; 3: suspended. This field is required.
     * @param integer $Priority Rule priority. The smaller value indicates the higher priority.
     * @param integer $RetryValidTime When multiple rules are triggered at the same time and some are not really executed, retries will be performed within this time range.
     * @param RepeatStrategy $RepeatStrategy Time scaling repetition policy

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StrategyId Unique policy ID.
     * @param boolean $GraceDownFlag Graceful scale-in switch.
     * @param integer $GraceDownTime Graceful scale-in wait time.
     * @param array $Tags Bound tag list

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigGroupAssigned Preset configuration group.
     * @param string $MeasureMethod Calculation method of scale-out resources. Valid values: "DEFAULT","INSTANCE", "CPU" and "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
     * @param string $TerminatePolicy Termination policy. "DEFAULT" denotes the default policy, which indicates that scale-in is triggered by scale-in rules. "TIMING" denotes timed destruction.
     * @param integer $MaxUse Maximum use time in seconds. The minimum value is 1 hour, and the maximum is 24 hours.
     * @param array $SoftDeployInfo Node deployment service list. Fill in only HDFS and YARN. For details, see [Mapping Table for Component Names](https://intl.cloud.tencent.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ServiceNodeInfo Startup process list

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CompensateFlag Compensatory scale-out. 0: disable, 1: enable.
     * @param integer $GroupId Scaling group ID.
     * @param array $GraceDownLabel Graceful scale-in business pod tag. Nodes are scaled in when the pod mentioned above is not found on the node or the graceful scale-in time is passed.
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("IntervalTime",$param) and $param["IntervalTime"] !== null) {
            $this->IntervalTime = $param["IntervalTime"];
        }

        if (array_key_exists("ScaleAction",$param) and $param["ScaleAction"] !== null) {
            $this->ScaleAction = $param["ScaleAction"];
        }

        if (array_key_exists("ScaleNum",$param) and $param["ScaleNum"] !== null) {
            $this->ScaleNum = $param["ScaleNum"];
        }

        if (array_key_exists("StrategyStatus",$param) and $param["StrategyStatus"] !== null) {
            $this->StrategyStatus = $param["StrategyStatus"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RetryValidTime",$param) and $param["RetryValidTime"] !== null) {
            $this->RetryValidTime = $param["RetryValidTime"];
        }

        if (array_key_exists("RepeatStrategy",$param) and $param["RepeatStrategy"] !== null) {
            $this->RepeatStrategy = new RepeatStrategy();
            $this->RepeatStrategy->deserialize($param["RepeatStrategy"]);
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("GraceDownFlag",$param) and $param["GraceDownFlag"] !== null) {
            $this->GraceDownFlag = $param["GraceDownFlag"];
        }

        if (array_key_exists("GraceDownTime",$param) and $param["GraceDownTime"] !== null) {
            $this->GraceDownTime = $param["GraceDownTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ConfigGroupAssigned",$param) and $param["ConfigGroupAssigned"] !== null) {
            $this->ConfigGroupAssigned = $param["ConfigGroupAssigned"];
        }

        if (array_key_exists("MeasureMethod",$param) and $param["MeasureMethod"] !== null) {
            $this->MeasureMethod = $param["MeasureMethod"];
        }

        if (array_key_exists("TerminatePolicy",$param) and $param["TerminatePolicy"] !== null) {
            $this->TerminatePolicy = $param["TerminatePolicy"];
        }

        if (array_key_exists("MaxUse",$param) and $param["MaxUse"] !== null) {
            $this->MaxUse = $param["MaxUse"];
        }

        if (array_key_exists("SoftDeployInfo",$param) and $param["SoftDeployInfo"] !== null) {
            $this->SoftDeployInfo = $param["SoftDeployInfo"];
        }

        if (array_key_exists("ServiceNodeInfo",$param) and $param["ServiceNodeInfo"] !== null) {
            $this->ServiceNodeInfo = $param["ServiceNodeInfo"];
        }

        if (array_key_exists("CompensateFlag",$param) and $param["CompensateFlag"] !== null) {
            $this->CompensateFlag = $param["CompensateFlag"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GraceDownLabel",$param) and $param["GraceDownLabel"] !== null) {
            $this->GraceDownLabel = [];
            foreach ($param["GraceDownLabel"] as $key => $value){
                $obj = new TkeLabel();
                $obj->deserialize($value);
                array_push($this->GraceDownLabel, $obj);
            }
        }
    }
}
