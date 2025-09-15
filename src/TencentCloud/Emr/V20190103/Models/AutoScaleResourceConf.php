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
 * Elastic scaling specification configuration
 *
 * @method integer getId() Obtain Configuration ID.
 * @method void setId(integer $Id) Set Configuration ID.
 * @method integer getClusterId() Obtain Cluster instance ID.
 * @method void setClusterId(integer $ClusterId) Set Cluster instance ID.
 * @method integer getScaleLowerBound() Obtain Minimum number of instances retained for automatic scaling
 * @method void setScaleLowerBound(integer $ScaleLowerBound) Set Minimum number of instances retained for automatic scaling
 * @method integer getScaleUpperBound() Obtain Maximum number of instances for auto scaling
 * @method void setScaleUpperBound(integer $ScaleUpperBound) Set Maximum number of instances for auto scaling
 * @method integer getStrategyType() Obtain Scale-out rule type. 1: load-based scale-out rule, 2: time-based scale-out rule
 * @method void setStrategyType(integer $StrategyType) Set Scale-out rule type. 1: load-based scale-out rule, 2: time-based scale-out rule
 * @method integer getNextTimeCanScale() Obtain Next scale-out time.
 * @method void setNextTimeCanScale(integer $NextTimeCanScale) Set Next scale-out time.
 * @method boolean getGraceDownFlag() Obtain Graceful scale-in switch.
 * @method void setGraceDownFlag(boolean $GraceDownFlag) Set Graceful scale-in switch.
 * @method string getHardwareType() Obtain "CVM" indicates that the CVM type is used for all specifications, and "Pod" indicates that the container type is used for specifications. The default value is "CVM".
 * @method void setHardwareType(string $HardwareType) Set "CVM" indicates that the CVM type is used for all specifications, and "Pod" indicates that the container type is used for specifications. The default value is "CVM".
 * @method string getPayMode() Obtain "POSTPAY" indicates the sole adoption of pay-as-you-go, and "SPOT_FIRST" indicates spot instance first, which is only supported when HardwareType is "HOST". "Pod" only supports pay-as-you-go.
 * @method void setPayMode(string $PayMode) Set "POSTPAY" indicates the sole adoption of pay-as-you-go, and "SPOT_FIRST" indicates spot instance first, which is only supported when HardwareType is "HOST". "Pod" only supports pay-as-you-go.
 * @method integer getPostPayPercentMin() Obtain The minimum percentage of pay-as-you-go resources in scenarios with spot instance first. It is an integer.
 * @method void setPostPayPercentMin(integer $PostPayPercentMin) Set The minimum percentage of pay-as-you-go resources in scenarios with spot instance first. It is an integer.
 * @method integer getChangeToPod() Obtain When resource type is preset to HOST: Supports enabling/disabling "Fallback to pod when resources are insufficient"; Default state: 0 (disabled), Toggle state: 1 (enabled).
 * @method void setChangeToPod(integer $ChangeToPod) Set When resource type is preset to HOST: Supports enabling/disabling "Fallback to pod when resources are insufficient"; Default state: 0 (disabled), Toggle state: 1 (enabled).
 * @method string getGroupName() Obtain Scaling group name.
 * @method void setGroupName(string $GroupName) Set Scaling group name.
 * @method string getYarnNodeLabel() Obtain Tag.
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set Tag.
 * @method integer getGroupStatus() Obtain Scaling group status.
 * @method void setGroupStatus(integer $GroupStatus) Set Scaling group status.
 * @method integer getParallel() Obtain Parallel scaling. 0: disabled; 1: enabled.
 * @method void setParallel(integer $Parallel) Set Parallel scaling. 0: disabled; 1: enabled.
 * @method integer getEnableMNode() Obtain Whether MNode is supported.
 * @method void setEnableMNode(integer $EnableMNode) Set Whether MNode is supported.
 * @method AutoScaleGroupAdvanceAttrs getExtraAdvanceAttrs() Obtain More scaling group settings.
 * @method void setExtraAdvanceAttrs(AutoScaleGroupAdvanceAttrs $ExtraAdvanceAttrs) Set More scaling group settings.
 */
class AutoScaleResourceConf extends AbstractModel
{
    /**
     * @var integer Configuration ID.
     */
    public $Id;

    /**
     * @var integer Cluster instance ID.
     */
    public $ClusterId;

    /**
     * @var integer Minimum number of instances retained for automatic scaling
     */
    public $ScaleLowerBound;

    /**
     * @var integer Maximum number of instances for auto scaling
     */
    public $ScaleUpperBound;

    /**
     * @var integer Scale-out rule type. 1: load-based scale-out rule, 2: time-based scale-out rule
     */
    public $StrategyType;

    /**
     * @var integer Next scale-out time.
     */
    public $NextTimeCanScale;

    /**
     * @var boolean Graceful scale-in switch.
     */
    public $GraceDownFlag;

    /**
     * @var string "CVM" indicates that the CVM type is used for all specifications, and "Pod" indicates that the container type is used for specifications. The default value is "CVM".
     */
    public $HardwareType;

    /**
     * @var string "POSTPAY" indicates the sole adoption of pay-as-you-go, and "SPOT_FIRST" indicates spot instance first, which is only supported when HardwareType is "HOST". "Pod" only supports pay-as-you-go.
     */
    public $PayMode;

    /**
     * @var integer The minimum percentage of pay-as-you-go resources in scenarios with spot instance first. It is an integer.
     */
    public $PostPayPercentMin;

    /**
     * @var integer When resource type is preset to HOST: Supports enabling/disabling "Fallback to pod when resources are insufficient"; Default state: 0 (disabled), Toggle state: 1 (enabled).
     */
    public $ChangeToPod;

    /**
     * @var string Scaling group name.
     */
    public $GroupName;

    /**
     * @var string Tag.
     */
    public $YarnNodeLabel;

    /**
     * @var integer Scaling group status.
     */
    public $GroupStatus;

    /**
     * @var integer Parallel scaling. 0: disabled; 1: enabled.
     */
    public $Parallel;

    /**
     * @var integer Whether MNode is supported.
     */
    public $EnableMNode;

    /**
     * @var AutoScaleGroupAdvanceAttrs More scaling group settings.
     */
    public $ExtraAdvanceAttrs;

    /**
     * @param integer $Id Configuration ID.
     * @param integer $ClusterId Cluster instance ID.
     * @param integer $ScaleLowerBound Minimum number of instances retained for automatic scaling
     * @param integer $ScaleUpperBound Maximum number of instances for auto scaling
     * @param integer $StrategyType Scale-out rule type. 1: load-based scale-out rule, 2: time-based scale-out rule
     * @param integer $NextTimeCanScale Next scale-out time.
     * @param boolean $GraceDownFlag Graceful scale-in switch.
     * @param string $HardwareType "CVM" indicates that the CVM type is used for all specifications, and "Pod" indicates that the container type is used for specifications. The default value is "CVM".
     * @param string $PayMode "POSTPAY" indicates the sole adoption of pay-as-you-go, and "SPOT_FIRST" indicates spot instance first, which is only supported when HardwareType is "HOST". "Pod" only supports pay-as-you-go.
     * @param integer $PostPayPercentMin The minimum percentage of pay-as-you-go resources in scenarios with spot instance first. It is an integer.
     * @param integer $ChangeToPod When resource type is preset to HOST: Supports enabling/disabling "Fallback to pod when resources are insufficient"; Default state: 0 (disabled), Toggle state: 1 (enabled).
     * @param string $GroupName Scaling group name.
     * @param string $YarnNodeLabel Tag.
     * @param integer $GroupStatus Scaling group status.
     * @param integer $Parallel Parallel scaling. 0: disabled; 1: enabled.
     * @param integer $EnableMNode Whether MNode is supported.
     * @param AutoScaleGroupAdvanceAttrs $ExtraAdvanceAttrs More scaling group settings.
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ScaleLowerBound",$param) and $param["ScaleLowerBound"] !== null) {
            $this->ScaleLowerBound = $param["ScaleLowerBound"];
        }

        if (array_key_exists("ScaleUpperBound",$param) and $param["ScaleUpperBound"] !== null) {
            $this->ScaleUpperBound = $param["ScaleUpperBound"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("NextTimeCanScale",$param) and $param["NextTimeCanScale"] !== null) {
            $this->NextTimeCanScale = $param["NextTimeCanScale"];
        }

        if (array_key_exists("GraceDownFlag",$param) and $param["GraceDownFlag"] !== null) {
            $this->GraceDownFlag = $param["GraceDownFlag"];
        }

        if (array_key_exists("HardwareType",$param) and $param["HardwareType"] !== null) {
            $this->HardwareType = $param["HardwareType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PostPayPercentMin",$param) and $param["PostPayPercentMin"] !== null) {
            $this->PostPayPercentMin = $param["PostPayPercentMin"];
        }

        if (array_key_exists("ChangeToPod",$param) and $param["ChangeToPod"] !== null) {
            $this->ChangeToPod = $param["ChangeToPod"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("YarnNodeLabel",$param) and $param["YarnNodeLabel"] !== null) {
            $this->YarnNodeLabel = $param["YarnNodeLabel"];
        }

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }

        if (array_key_exists("Parallel",$param) and $param["Parallel"] !== null) {
            $this->Parallel = $param["Parallel"];
        }

        if (array_key_exists("EnableMNode",$param) and $param["EnableMNode"] !== null) {
            $this->EnableMNode = $param["EnableMNode"];
        }

        if (array_key_exists("ExtraAdvanceAttrs",$param) and $param["ExtraAdvanceAttrs"] !== null) {
            $this->ExtraAdvanceAttrs = new AutoScaleGroupAdvanceAttrs();
            $this->ExtraAdvanceAttrs->deserialize($param["ExtraAdvanceAttrs"]);
        }
    }
}
