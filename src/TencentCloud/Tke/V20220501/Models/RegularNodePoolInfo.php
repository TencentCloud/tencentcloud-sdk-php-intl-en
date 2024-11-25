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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * General node pool information
 *
 * @method string getLaunchConfigurationId() Obtain LaunchConfigurationId configuration
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set LaunchConfigurationId configuration
 * @method string getAutoscalingGroupId() Obtain Auto-scaling group ID
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) Set Auto-scaling group ID
 * @method NodeCountSummary getNodeCountSummary() Obtain NodeCountSummary node list
 * @method void setNodeCountSummary(NodeCountSummary $NodeCountSummary) Set NodeCountSummary node list
 * @method string getAutoscalingGroupStatus() Obtain Status information
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAutoscalingGroupStatus(string $AutoscalingGroupStatus) Set Status information
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getMaxNodesNum() Obtain Maximum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMaxNodesNum(integer $MaxNodesNum) Set Maximum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getMinNodesNum() Obtain Minimum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMinNodesNum(integer $MinNodesNum) Set Minimum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getDesiredNodesNum() Obtain Desired number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDesiredNodesNum(integer $DesiredNodesNum) Set Desired number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getNodePoolOs() Obtain Node pool osName
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodePoolOs(string $NodePoolOs) Set Node pool osName
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method InstanceAdvancedSettings getInstanceAdvancedSettings() Obtain Node configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setInstanceAdvancedSettings(InstanceAdvancedSettings $InstanceAdvancedSettings) Set Node configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class RegularNodePoolInfo extends AbstractModel
{
    /**
     * @var string LaunchConfigurationId configuration
     */
    public $LaunchConfigurationId;

    /**
     * @var string Auto-scaling group ID
     */
    public $AutoscalingGroupId;

    /**
     * @var NodeCountSummary NodeCountSummary node list
     */
    public $NodeCountSummary;

    /**
     * @var string Status information
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AutoscalingGroupStatus;

    /**
     * @var integer Maximum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MaxNodesNum;

    /**
     * @var integer Minimum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MinNodesNum;

    /**
     * @var integer Desired number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DesiredNodesNum;

    /**
     * @var string Node pool osName
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodePoolOs;

    /**
     * @var InstanceAdvancedSettings Node configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $InstanceAdvancedSettings;

    /**
     * @param string $LaunchConfigurationId LaunchConfigurationId configuration
     * @param string $AutoscalingGroupId Auto-scaling group ID
     * @param NodeCountSummary $NodeCountSummary NodeCountSummary node list
     * @param string $AutoscalingGroupStatus Status information
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $MaxNodesNum Maximum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $MinNodesNum Minimum number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $DesiredNodesNum Desired number of nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $NodePoolOs Node pool osName
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param InstanceAdvancedSettings $InstanceAdvancedSettings Node configuration
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }

        if (array_key_exists("NodeCountSummary",$param) and $param["NodeCountSummary"] !== null) {
            $this->NodeCountSummary = new NodeCountSummary();
            $this->NodeCountSummary->deserialize($param["NodeCountSummary"]);
        }

        if (array_key_exists("AutoscalingGroupStatus",$param) and $param["AutoscalingGroupStatus"] !== null) {
            $this->AutoscalingGroupStatus = $param["AutoscalingGroupStatus"];
        }

        if (array_key_exists("MaxNodesNum",$param) and $param["MaxNodesNum"] !== null) {
            $this->MaxNodesNum = $param["MaxNodesNum"];
        }

        if (array_key_exists("MinNodesNum",$param) and $param["MinNodesNum"] !== null) {
            $this->MinNodesNum = $param["MinNodesNum"];
        }

        if (array_key_exists("DesiredNodesNum",$param) and $param["DesiredNodesNum"] !== null) {
            $this->DesiredNodesNum = $param["DesiredNodesNum"];
        }

        if (array_key_exists("NodePoolOs",$param) and $param["NodePoolOs"] !== null) {
            $this->NodePoolOs = $param["NodePoolOs"];
        }

        if (array_key_exists("InstanceAdvancedSettings",$param) and $param["InstanceAdvancedSettings"] !== null) {
            $this->InstanceAdvancedSettings = new InstanceAdvancedSettings();
            $this->InstanceAdvancedSettings->deserialize($param["InstanceAdvancedSettings"]);
        }
    }
}
