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
 * Automatic scaling rule based on load metrics
 *
 * @method integer getStrategyId() Obtain Rule ID.
 * @method void setStrategyId(integer $StrategyId) Set Rule ID.
 * @method string getStrategyName() Obtain Rule name.
 * @method void setStrategyName(string $StrategyName) Set Rule name.
 * @method integer getCalmDownTime() Obtain Cooling time for a rule to take effect.
 * @method void setCalmDownTime(integer $CalmDownTime) Set Cooling time for a rule to take effect.
 * @method integer getScaleAction() Obtain Scaling action. 1: scale-out, 2: scale-in.
 * @method void setScaleAction(integer $ScaleAction) Set Scaling action. 1: scale-out, 2: scale-in.
 * @method integer getScaleNum() Obtain Scaling amount each time the rule takes effect.
 * @method void setScaleNum(integer $ScaleNum) Set Scaling amount each time the rule takes effect.
 * @method integer getProcessMethod() Obtain Metric processing method. 1: MAX, 2: MIN, 3: AVG.
 * @method void setProcessMethod(integer $ProcessMethod) Set Metric processing method. 1: MAX, 2: MIN, 3: AVG.
 * @method integer getPriority() Obtain Rule priority, which is not applicable during adding. The default is auto-increment.
 * @method void setPriority(integer $Priority) Set Rule priority, which is not applicable during adding. The default is auto-increment.
 * @method integer getStrategyStatus() Obtain Rule status. 1: enabled, 3: disabled.
 * @method void setStrategyStatus(integer $StrategyStatus) Set Rule status. 1: enabled, 3: disabled.
 * @method string getYarnNodeLabel() Obtain Specified Yarn Node Label for rule scale-out.
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set Specified Yarn Node Label for rule scale-out.
 * @method string getPeriodValid() Obtain Effective time of the rule
 * @method void setPeriodValid(string $PeriodValid) Set Effective time of the rule
 * @method boolean getGraceDownFlag() Obtain Graceful scale-in switch
 * @method void setGraceDownFlag(boolean $GraceDownFlag) Set Graceful scale-in switch
 * @method integer getGraceDownTime() Obtain Graceful scale-in wait time
 * @method void setGraceDownTime(integer $GraceDownTime) Set Graceful scale-in wait time
 * @method array getTags() Obtain Bound tag list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Bound tag list

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConfigGroupAssigned() Obtain Preset configuration group.
 * @method void setConfigGroupAssigned(string $ConfigGroupAssigned) Set Preset configuration group.
 * @method string getMeasureMethod() Obtain Calculation method of scale-out resources:"DEFAULT","INSTANCE", "CPU", "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
 * @method void setMeasureMethod(string $MeasureMethod) Set Calculation method of scale-out resources:"DEFAULT","INSTANCE", "CPU", "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
 * @method array getSoftDeployDesc() Obtain Node deployment service list, such as ["HDFS-3.1.2","YARN-3.1.2"].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSoftDeployDesc(array $SoftDeployDesc) Set Node deployment service list, such as ["HDFS-3.1.2","YARN-3.1.2"].
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getServiceNodeDesc() Obtain Startup process list, such as ["NodeManager"].
 * @method void setServiceNodeDesc(string $ServiceNodeDesc) Set Startup process list, such as ["NodeManager"].
 * @method array getServiceNodeInfo() Obtain Startup process list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set Startup process list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSoftDeployInfo() Obtain Node deployment service list. Only HDFS and YARN should be specified in the deployment service list. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set Node deployment service list. Only HDFS and YARN should be specified in the deployment service list. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method LoadMetricsConditions getLoadMetricsConditions() Obtain Multi-metric trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLoadMetricsConditions(LoadMetricsConditions $LoadMetricsConditions) Set Multi-metric trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGroupId() Obtain Scaling group ID.
 * @method void setGroupId(integer $GroupId) Set Scaling group ID.
 * @method string getSoft() Obtain Soft (for example, YARN).
 * @method void setSoft(string $Soft) Set Soft (for example, YARN).
 */
class LoadAutoScaleStrategy extends AbstractModel
{
    /**
     * @var integer Rule ID.
     */
    public $StrategyId;

    /**
     * @var string Rule name.
     */
    public $StrategyName;

    /**
     * @var integer Cooling time for a rule to take effect.
     */
    public $CalmDownTime;

    /**
     * @var integer Scaling action. 1: scale-out, 2: scale-in.
     */
    public $ScaleAction;

    /**
     * @var integer Scaling amount each time the rule takes effect.
     */
    public $ScaleNum;

    /**
     * @var integer Metric processing method. 1: MAX, 2: MIN, 3: AVG.
     */
    public $ProcessMethod;

    /**
     * @var integer Rule priority, which is not applicable during adding. The default is auto-increment.
     */
    public $Priority;

    /**
     * @var integer Rule status. 1: enabled, 3: disabled.
     */
    public $StrategyStatus;

    /**
     * @var string Specified Yarn Node Label for rule scale-out.
     */
    public $YarnNodeLabel;

    /**
     * @var string Effective time of the rule
     */
    public $PeriodValid;

    /**
     * @var boolean Graceful scale-in switch
     */
    public $GraceDownFlag;

    /**
     * @var integer Graceful scale-in wait time
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
     * @var string Calculation method of scale-out resources:"DEFAULT","INSTANCE", "CPU", "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
     */
    public $MeasureMethod;

    /**
     * @var array Node deployment service list, such as ["HDFS-3.1.2","YARN-3.1.2"].
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SoftDeployDesc;

    /**
     * @var string Startup process list, such as ["NodeManager"].
     */
    public $ServiceNodeDesc;

    /**
     * @var array Startup process list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceNodeInfo;

    /**
     * @var array Node deployment service list. Only HDFS and YARN should be specified in the deployment service list. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SoftDeployInfo;

    /**
     * @var LoadMetricsConditions Multi-metric trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LoadMetricsConditions;

    /**
     * @var integer Scaling group ID.
     */
    public $GroupId;

    /**
     * @var string Soft (for example, YARN).
     */
    public $Soft;

    /**
     * @param integer $StrategyId Rule ID.
     * @param string $StrategyName Rule name.
     * @param integer $CalmDownTime Cooling time for a rule to take effect.
     * @param integer $ScaleAction Scaling action. 1: scale-out, 2: scale-in.
     * @param integer $ScaleNum Scaling amount each time the rule takes effect.
     * @param integer $ProcessMethod Metric processing method. 1: MAX, 2: MIN, 3: AVG.
     * @param integer $Priority Rule priority, which is not applicable during adding. The default is auto-increment.
     * @param integer $StrategyStatus Rule status. 1: enabled, 3: disabled.
     * @param string $YarnNodeLabel Specified Yarn Node Label for rule scale-out.
     * @param string $PeriodValid Effective time of the rule
     * @param boolean $GraceDownFlag Graceful scale-in switch
     * @param integer $GraceDownTime Graceful scale-in wait time
     * @param array $Tags Bound tag list

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConfigGroupAssigned Preset configuration group.
     * @param string $MeasureMethod Calculation method of scale-out resources:"DEFAULT","INSTANCE", "CPU", "MEMORYGB".
"DEFAULT" indicates the default method, which is the same as "INSTANCE".
"INSTANCE" indicates calculation based on nodes (default mode).
"CPU" indicates calculation based on the quantity of cores of the machine.
"MEMORYGB" indicates calculation based on the memory size of the machine.
     * @param array $SoftDeployDesc Node deployment service list, such as ["HDFS-3.1.2","YARN-3.1.2"].
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceNodeDesc Startup process list, such as ["NodeManager"].
     * @param array $ServiceNodeInfo Startup process list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SoftDeployInfo Node deployment service list. Only HDFS and YARN should be specified in the deployment service list. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param LoadMetricsConditions $LoadMetricsConditions Multi-metric trigger condition.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GroupId Scaling group ID.
     * @param string $Soft Soft (for example, YARN).
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("CalmDownTime",$param) and $param["CalmDownTime"] !== null) {
            $this->CalmDownTime = $param["CalmDownTime"];
        }

        if (array_key_exists("ScaleAction",$param) and $param["ScaleAction"] !== null) {
            $this->ScaleAction = $param["ScaleAction"];
        }

        if (array_key_exists("ScaleNum",$param) and $param["ScaleNum"] !== null) {
            $this->ScaleNum = $param["ScaleNum"];
        }

        if (array_key_exists("ProcessMethod",$param) and $param["ProcessMethod"] !== null) {
            $this->ProcessMethod = $param["ProcessMethod"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("StrategyStatus",$param) and $param["StrategyStatus"] !== null) {
            $this->StrategyStatus = $param["StrategyStatus"];
        }

        if (array_key_exists("YarnNodeLabel",$param) and $param["YarnNodeLabel"] !== null) {
            $this->YarnNodeLabel = $param["YarnNodeLabel"];
        }

        if (array_key_exists("PeriodValid",$param) and $param["PeriodValid"] !== null) {
            $this->PeriodValid = $param["PeriodValid"];
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

        if (array_key_exists("SoftDeployDesc",$param) and $param["SoftDeployDesc"] !== null) {
            $this->SoftDeployDesc = $param["SoftDeployDesc"];
        }

        if (array_key_exists("ServiceNodeDesc",$param) and $param["ServiceNodeDesc"] !== null) {
            $this->ServiceNodeDesc = $param["ServiceNodeDesc"];
        }

        if (array_key_exists("ServiceNodeInfo",$param) and $param["ServiceNodeInfo"] !== null) {
            $this->ServiceNodeInfo = $param["ServiceNodeInfo"];
        }

        if (array_key_exists("SoftDeployInfo",$param) and $param["SoftDeployInfo"] !== null) {
            $this->SoftDeployInfo = $param["SoftDeployInfo"];
        }

        if (array_key_exists("LoadMetricsConditions",$param) and $param["LoadMetricsConditions"] !== null) {
            $this->LoadMetricsConditions = new LoadMetricsConditions();
            $this->LoadMetricsConditions->deserialize($param["LoadMetricsConditions"]);
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Soft",$param) and $param["Soft"] !== null) {
            $this->Soft = $param["Soft"];
        }
    }
}
