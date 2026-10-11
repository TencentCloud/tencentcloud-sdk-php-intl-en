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
 * Automatic scaling rule based on load metrics.
 *
 * @method integer getStrategyId() Obtain Rule ID.
 * @method void setStrategyId(integer $StrategyId) Set Rule ID.
 * @method string getStrategyName() Obtain Rule name.
 * @method void setStrategyName(string $StrategyName) Set Rule name.
 * @method integer getCalmDownTime() Obtain Cooldown time for a rule to take effect.
 * @method void setCalmDownTime(integer $CalmDownTime) Set Cooldown time for a rule to take effect.
 * @method integer getScaleAction() Obtain Scaling action. Valid values: 1 (scale-out) and 2 (scale-in).
 * @method void setScaleAction(integer $ScaleAction) Set Scaling action. Valid values: 1 (scale-out) and 2 (scale-in).
 * @method integer getScaleNum() Obtain Number of scaling items each time the rule takes effect.
 * @method void setScaleNum(integer $ScaleNum) Set Number of scaling items each time the rule takes effect.
 * @method integer getProcessMethod() Obtain Metric processing method. Valid values: 1 (MAX), 2 (MIN), and 3 (AVG).
 * @method void setProcessMethod(integer $ProcessMethod) Set Metric processing method. Valid values: 1 (MAX), 2 (MIN), and 3 (AVG).
 * @method integer getPriority() Obtain Rule priority, which is invalid during addition. By default, the auto-increment rule is used.
 * @method void setPriority(integer $Priority) Set Rule priority, which is invalid during addition. By default, the auto-increment rule is used.
 * @method integer getStrategyStatus() Obtain Rule status. Valid values: 1 (enabled) and 3 (disabled).
 * @method void setStrategyStatus(integer $StrategyStatus) Set Rule status. Valid values: 1 (enabled) and 3 (disabled).
 * @method string getYarnNodeLabel() Obtain YARN node label specified for the rule-based scale-out.
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set YARN node label specified for the rule-based scale-out.
 * @method string getPeriodValid() Obtain Effective time of the rule.
 * @method void setPeriodValid(string $PeriodValid) Set Effective time of the rule.
 * @method boolean getGraceDownFlag() Obtain Graceful scale-in switch.
 * @method void setGraceDownFlag(boolean $GraceDownFlag) Set Graceful scale-in switch.
 * @method integer getGraceDownTime() Obtain Graceful scale-in wait time.
 * @method void setGraceDownTime(integer $GraceDownTime) Set Graceful scale-in wait time.
 * @method boolean getGraceDownProtectFlag() Obtain Whether to enable task protection.
 * @method void setGraceDownProtectFlag(boolean $GraceDownProtectFlag) Set Whether to enable task protection.
 * @method array getTags() Obtain Bound tag list.
 * @method void setTags(array $Tags) Set Bound tag list.
 * @method string getConfigGroupAssigned() Obtain Preset configuration group.
 * @method void setConfigGroupAssigned(string $ConfigGroupAssigned) Set Preset configuration group.
 * @method string getMeasureMethod() Obtain Calculation method for scaled‑out resources. Valid values: "DEFAULT", "INSTANCE", "CPU", and "MEMORYGB".
"DEFAULT" indicates the default calculation method, which is identical to "INSTANCE".
"INSTANCE" indicates the calculation method based on nodes. This is the default method.
"CPU" indicates the calculation method based on the number of cores of the machine.
"MEMORYGB" indicates the calculation method based on the memory size of the machine.
 * @method void setMeasureMethod(string $MeasureMethod) Set Calculation method for scaled‑out resources. Valid values: "DEFAULT", "INSTANCE", "CPU", and "MEMORYGB".
"DEFAULT" indicates the default calculation method, which is identical to "INSTANCE".
"INSTANCE" indicates the calculation method based on nodes. This is the default method.
"CPU" indicates the calculation method based on the number of cores of the machine.
"MEMORYGB" indicates the calculation method based on the memory size of the machine.
 * @method array getSoftDeployDesc() Obtain List of node deployment services, for example, ["HDFS-3.1.2","YARN-3.1.2"].
 * @method void setSoftDeployDesc(array $SoftDeployDesc) Set List of node deployment services, for example, ["HDFS-3.1.2","YARN-3.1.2"].
 * @method string getServiceNodeDesc() Obtain Startup process list, for example, ["NodeManager"].
 * @method void setServiceNodeDesc(string $ServiceNodeDesc) Set Startup process list, for example, ["NodeManager"].
 * @method array getServiceNodeInfo() Obtain Startup process list.
 * @method void setServiceNodeInfo(array $ServiceNodeInfo) Set Startup process list.
 * @method array getSoftDeployInfo() Obtain List of services deployed on the node. Valid values: HDFS and YARN. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
 * @method void setSoftDeployInfo(array $SoftDeployInfo) Set List of services deployed on the node. Valid values: HDFS and YARN. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
 * @method LoadMetricsConditions getLoadMetricsConditions() Obtain Multi-metric triggering condition.
 * @method void setLoadMetricsConditions(LoadMetricsConditions $LoadMetricsConditions) Set Multi-metric triggering condition.
 * @method integer getGroupId() Obtain Scaling group ID.
 * @method void setGroupId(integer $GroupId) Set Scaling group ID.
 * @method string getSoft() Obtain Soft. Example value: yarn.
 * @method void setSoft(string $Soft) Set Soft. Example value: yarn.
 * @method integer getGraceDownProtectTime() Obtain Task protection time.
 * @method void setGraceDownProtectTime(integer $GraceDownProtectTime) Set Task protection time.
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
     * @var integer Cooldown time for a rule to take effect.
     */
    public $CalmDownTime;

    /**
     * @var integer Scaling action. Valid values: 1 (scale-out) and 2 (scale-in).
     */
    public $ScaleAction;

    /**
     * @var integer Number of scaling items each time the rule takes effect.
     */
    public $ScaleNum;

    /**
     * @var integer Metric processing method. Valid values: 1 (MAX), 2 (MIN), and 3 (AVG).
     */
    public $ProcessMethod;

    /**
     * @var integer Rule priority, which is invalid during addition. By default, the auto-increment rule is used.
     */
    public $Priority;

    /**
     * @var integer Rule status. Valid values: 1 (enabled) and 3 (disabled).
     */
    public $StrategyStatus;

    /**
     * @var string YARN node label specified for the rule-based scale-out.
     */
    public $YarnNodeLabel;

    /**
     * @var string Effective time of the rule.
     */
    public $PeriodValid;

    /**
     * @var boolean Graceful scale-in switch.
     */
    public $GraceDownFlag;

    /**
     * @var integer Graceful scale-in wait time.
     */
    public $GraceDownTime;

    /**
     * @var boolean Whether to enable task protection.
     */
    public $GraceDownProtectFlag;

    /**
     * @var array Bound tag list.
     */
    public $Tags;

    /**
     * @var string Preset configuration group.
     */
    public $ConfigGroupAssigned;

    /**
     * @var string Calculation method for scaled‑out resources. Valid values: "DEFAULT", "INSTANCE", "CPU", and "MEMORYGB".
"DEFAULT" indicates the default calculation method, which is identical to "INSTANCE".
"INSTANCE" indicates the calculation method based on nodes. This is the default method.
"CPU" indicates the calculation method based on the number of cores of the machine.
"MEMORYGB" indicates the calculation method based on the memory size of the machine.
     */
    public $MeasureMethod;

    /**
     * @var array List of node deployment services, for example, ["HDFS-3.1.2","YARN-3.1.2"].
     */
    public $SoftDeployDesc;

    /**
     * @var string Startup process list, for example, ["NodeManager"].
     */
    public $ServiceNodeDesc;

    /**
     * @var array Startup process list.
     */
    public $ServiceNodeInfo;

    /**
     * @var array List of services deployed on the node. Valid values: HDFS and YARN. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
     */
    public $SoftDeployInfo;

    /**
     * @var LoadMetricsConditions Multi-metric triggering condition.
     */
    public $LoadMetricsConditions;

    /**
     * @var integer Scaling group ID.
     */
    public $GroupId;

    /**
     * @var string Soft. Example value: yarn.
     */
    public $Soft;

    /**
     * @var integer Task protection time.
     */
    public $GraceDownProtectTime;

    /**
     * @param integer $StrategyId Rule ID.
     * @param string $StrategyName Rule name.
     * @param integer $CalmDownTime Cooldown time for a rule to take effect.
     * @param integer $ScaleAction Scaling action. Valid values: 1 (scale-out) and 2 (scale-in).
     * @param integer $ScaleNum Number of scaling items each time the rule takes effect.
     * @param integer $ProcessMethod Metric processing method. Valid values: 1 (MAX), 2 (MIN), and 3 (AVG).
     * @param integer $Priority Rule priority, which is invalid during addition. By default, the auto-increment rule is used.
     * @param integer $StrategyStatus Rule status. Valid values: 1 (enabled) and 3 (disabled).
     * @param string $YarnNodeLabel YARN node label specified for the rule-based scale-out.
     * @param string $PeriodValid Effective time of the rule.
     * @param boolean $GraceDownFlag Graceful scale-in switch.
     * @param integer $GraceDownTime Graceful scale-in wait time.
     * @param boolean $GraceDownProtectFlag Whether to enable task protection.
     * @param array $Tags Bound tag list.
     * @param string $ConfigGroupAssigned Preset configuration group.
     * @param string $MeasureMethod Calculation method for scaled‑out resources. Valid values: "DEFAULT", "INSTANCE", "CPU", and "MEMORYGB".
"DEFAULT" indicates the default calculation method, which is identical to "INSTANCE".
"INSTANCE" indicates the calculation method based on nodes. This is the default method.
"CPU" indicates the calculation method based on the number of cores of the machine.
"MEMORYGB" indicates the calculation method based on the memory size of the machine.
     * @param array $SoftDeployDesc List of node deployment services, for example, ["HDFS-3.1.2","YARN-3.1.2"].
     * @param string $ServiceNodeDesc Startup process list, for example, ["NodeManager"].
     * @param array $ServiceNodeInfo Startup process list.
     * @param array $SoftDeployInfo List of services deployed on the node. Valid values: HDFS and YARN. For details, see [Mapping Table for Component Names](https://www.tencentcloud.com/document/product/589/98760?from_cn_redirect=1).
     * @param LoadMetricsConditions $LoadMetricsConditions Multi-metric triggering condition.
     * @param integer $GroupId Scaling group ID.
     * @param string $Soft Soft. Example value: yarn.
     * @param integer $GraceDownProtectTime Task protection time.
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

        if (array_key_exists("GraceDownProtectFlag",$param) and $param["GraceDownProtectFlag"] !== null) {
            $this->GraceDownProtectFlag = $param["GraceDownProtectFlag"];
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

        if (array_key_exists("GraceDownProtectTime",$param) and $param["GraceDownProtectTime"] !== null) {
            $this->GraceDownProtectTime = $param["GraceDownProtectTime"];
        }
    }
}
