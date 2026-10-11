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
 * Auto scaling specification configuration.
 *
 * @method integer getId() Obtain <p>Configuration ID.</p>
 * @method void setId(integer $Id) Set <p>Configuration ID.</p>
 * @method integer getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(integer $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getScaleLowerBound() Obtain <p>Minimum number of reserved instances for auto scaling.</p>
 * @method void setScaleLowerBound(integer $ScaleLowerBound) Set <p>Minimum number of reserved instances for auto scaling.</p>
 * @method integer getScaleUpperBound() Obtain <p>Maximum number of instances for auto scaling.</p>
 * @method void setScaleUpperBound(integer $ScaleUpperBound) Set <p>Maximum number of instances for auto scaling.</p>
 * @method integer getStrategyType() Obtain <p>Scale-out rule type. Valid values: 1 (scale-out rule by load metrics) and 2 (scale-out rule by time).</p>
 * @method void setStrategyType(integer $StrategyType) Set <p>Scale-out rule type. Valid values: 1 (scale-out rule by load metrics) and 2 (scale-out rule by time).</p>
 * @method integer getNextTimeCanScale() Obtain <p>Next scale-out time.</p>
 * @method void setNextTimeCanScale(integer $NextTimeCanScale) Set <p>Next scale-out time.</p>
 * @method boolean getGraceDownFlag() Obtain <p>Graceful scale-in switch.</p>
 * @method void setGraceDownFlag(boolean $GraceDownFlag) Set <p>Graceful scale-in switch.</p>
 * @method string getHardwareType() Obtain <p>&quot;CVM&quot; indicates that all specifications use CVM-related types, and &quot;POD&quot; indicates that specifications use container-related types. The default value is &quot;CVM&quot;.</p>
 * @method void setHardwareType(string $HardwareType) Set <p>&quot;CVM&quot; indicates that all specifications use CVM-related types, and &quot;POD&quot; indicates that specifications use container-related types. The default value is &quot;CVM&quot;.</p>
 * @method string getPayMode() Obtain <p>&quot;POSTPAY&quot; indicates that only pay-as-you-go billing is used. &quot;SPOT_FIRST&quot; indicates that spot instances are preferred, which is supported only when HardwareType is &quot;HOST&quot;. &quot;POD&quot; only supports pure pay-as-you-go billing.</p>
 * @method void setPayMode(string $PayMode) Set <p>&quot;POSTPAY&quot; indicates that only pay-as-you-go billing is used. &quot;SPOT_FIRST&quot; indicates that spot instances are preferred, which is supported only when HardwareType is &quot;HOST&quot;. &quot;POD&quot; only supports pure pay-as-you-go billing.</p>
 * @method integer getPostPayPercentMin() Obtain <p>Minimum percentage of pay-as-you-go resources in the scenario where spot instances are preferred. It is an integer.</p>
 * @method void setPostPayPercentMin(integer $PostPayPercentMin) Set <p>Minimum percentage of pay-as-you-go resources in the scenario where spot instances are preferred. It is an integer.</p>
 * @method integer getChangeToPod() Obtain <p>When the preset resource type is HOST, you can select &quot;switch to POD when resources are insufficient&quot; or clear the selection. 0 indicates that it is not selected by default (0), and 1 indicates that it is selected.</p>
 * @method void setChangeToPod(integer $ChangeToPod) Set <p>When the preset resource type is HOST, you can select &quot;switch to POD when resources are insufficient&quot; or clear the selection. 0 indicates that it is not selected by default (0), and 1 indicates that it is selected.</p>
 * @method string getGroupName() Obtain <p>Scaling group name.</p>
 * @method void setGroupName(string $GroupName) Set <p>Scaling group name.</p>
 * @method string getYarnNodeLabel() Obtain <p>Tag.</p>
 * @method void setYarnNodeLabel(string $YarnNodeLabel) Set <p>Tag.</p>
 * @method string getWarehouseName() Obtain <p>Corresponding computing group.</p>
 * @method void setWarehouseName(string $WarehouseName) Set <p>Corresponding computing group.</p>
 * @method integer getGroupStatus() Obtain <p>Scaling group status.</p>
 * @method void setGroupStatus(integer $GroupStatus) Set <p>Scaling group status.</p>
 * @method integer getParallel() Obtain <p>Parallel scaling. Valid values: 0 (disabled) and 1 (enabled).</p>
 * @method void setParallel(integer $Parallel) Set <p>Parallel scaling. Valid values: 0 (disabled) and 1 (enabled).</p>
 * @method integer getEnableMNode() Obtain <p>Whether MNode is supported.</p>
 * @method void setEnableMNode(integer $EnableMNode) Set <p>Whether MNode is supported.</p>
 * @method AutoScaleGroupAdvanceAttrs getExtraAdvanceAttrs() Obtain <p>More scaling group settings.</p>
 * @method void setExtraAdvanceAttrs(AutoScaleGroupAdvanceAttrs $ExtraAdvanceAttrs) Set <p>More scaling group settings.</p>
 * @method string getCustomNodeName() Obtain <p>Custom hostname.</p>
 * @method void setCustomNodeName(string $CustomNodeName) Set <p>Custom hostname.</p>
 */
class AutoScaleResourceConf extends AbstractModel
{
    /**
     * @var integer <p>Configuration ID.</p>
     */
    public $Id;

    /**
     * @var integer <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Minimum number of reserved instances for auto scaling.</p>
     */
    public $ScaleLowerBound;

    /**
     * @var integer <p>Maximum number of instances for auto scaling.</p>
     */
    public $ScaleUpperBound;

    /**
     * @var integer <p>Scale-out rule type. Valid values: 1 (scale-out rule by load metrics) and 2 (scale-out rule by time).</p>
     */
    public $StrategyType;

    /**
     * @var integer <p>Next scale-out time.</p>
     */
    public $NextTimeCanScale;

    /**
     * @var boolean <p>Graceful scale-in switch.</p>
     */
    public $GraceDownFlag;

    /**
     * @var string <p>&quot;CVM&quot; indicates that all specifications use CVM-related types, and &quot;POD&quot; indicates that specifications use container-related types. The default value is &quot;CVM&quot;.</p>
     */
    public $HardwareType;

    /**
     * @var string <p>&quot;POSTPAY&quot; indicates that only pay-as-you-go billing is used. &quot;SPOT_FIRST&quot; indicates that spot instances are preferred, which is supported only when HardwareType is &quot;HOST&quot;. &quot;POD&quot; only supports pure pay-as-you-go billing.</p>
     */
    public $PayMode;

    /**
     * @var integer <p>Minimum percentage of pay-as-you-go resources in the scenario where spot instances are preferred. It is an integer.</p>
     */
    public $PostPayPercentMin;

    /**
     * @var integer <p>When the preset resource type is HOST, you can select &quot;switch to POD when resources are insufficient&quot; or clear the selection. 0 indicates that it is not selected by default (0), and 1 indicates that it is selected.</p>
     */
    public $ChangeToPod;

    /**
     * @var string <p>Scaling group name.</p>
     */
    public $GroupName;

    /**
     * @var string <p>Tag.</p>
     */
    public $YarnNodeLabel;

    /**
     * @var string <p>Corresponding computing group.</p>
     */
    public $WarehouseName;

    /**
     * @var integer <p>Scaling group status.</p>
     */
    public $GroupStatus;

    /**
     * @var integer <p>Parallel scaling. Valid values: 0 (disabled) and 1 (enabled).</p>
     */
    public $Parallel;

    /**
     * @var integer <p>Whether MNode is supported.</p>
     */
    public $EnableMNode;

    /**
     * @var AutoScaleGroupAdvanceAttrs <p>More scaling group settings.</p>
     */
    public $ExtraAdvanceAttrs;

    /**
     * @var string <p>Custom hostname.</p>
     */
    public $CustomNodeName;

    /**
     * @param integer $Id <p>Configuration ID.</p>
     * @param integer $ClusterId <p>Cluster ID.</p>
     * @param integer $ScaleLowerBound <p>Minimum number of reserved instances for auto scaling.</p>
     * @param integer $ScaleUpperBound <p>Maximum number of instances for auto scaling.</p>
     * @param integer $StrategyType <p>Scale-out rule type. Valid values: 1 (scale-out rule by load metrics) and 2 (scale-out rule by time).</p>
     * @param integer $NextTimeCanScale <p>Next scale-out time.</p>
     * @param boolean $GraceDownFlag <p>Graceful scale-in switch.</p>
     * @param string $HardwareType <p>&quot;CVM&quot; indicates that all specifications use CVM-related types, and &quot;POD&quot; indicates that specifications use container-related types. The default value is &quot;CVM&quot;.</p>
     * @param string $PayMode <p>&quot;POSTPAY&quot; indicates that only pay-as-you-go billing is used. &quot;SPOT_FIRST&quot; indicates that spot instances are preferred, which is supported only when HardwareType is &quot;HOST&quot;. &quot;POD&quot; only supports pure pay-as-you-go billing.</p>
     * @param integer $PostPayPercentMin <p>Minimum percentage of pay-as-you-go resources in the scenario where spot instances are preferred. It is an integer.</p>
     * @param integer $ChangeToPod <p>When the preset resource type is HOST, you can select &quot;switch to POD when resources are insufficient&quot; or clear the selection. 0 indicates that it is not selected by default (0), and 1 indicates that it is selected.</p>
     * @param string $GroupName <p>Scaling group name.</p>
     * @param string $YarnNodeLabel <p>Tag.</p>
     * @param string $WarehouseName <p>Corresponding computing group.</p>
     * @param integer $GroupStatus <p>Scaling group status.</p>
     * @param integer $Parallel <p>Parallel scaling. Valid values: 0 (disabled) and 1 (enabled).</p>
     * @param integer $EnableMNode <p>Whether MNode is supported.</p>
     * @param AutoScaleGroupAdvanceAttrs $ExtraAdvanceAttrs <p>More scaling group settings.</p>
     * @param string $CustomNodeName <p>Custom hostname.</p>
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

        if (array_key_exists("WarehouseName",$param) and $param["WarehouseName"] !== null) {
            $this->WarehouseName = $param["WarehouseName"];
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

        if (array_key_exists("CustomNodeName",$param) and $param["CustomNodeName"] !== null) {
            $this->CustomNodeName = $param["CustomNodeName"];
        }
    }
}
