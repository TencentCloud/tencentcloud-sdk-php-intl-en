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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node pool description
 *
 * @method string getNodePoolId() Obtain Node pool ID
 * @method void setNodePoolId(string $NodePoolId) Set Node pool ID
 * @method string getName() Obtain Node pool name
 * @method void setName(string $Name) Set Node pool name
 * @method string getClusterInstanceId() Obtain Cluster instance ID
 * @method void setClusterInstanceId(string $ClusterInstanceId) Set Cluster instance ID
 * @method string getLifeState() Obtain Status
 * @method void setLifeState(string $LifeState) Set Status
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method string getAutoscalingGroupId() Obtain Auto-scaling group ID
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) Set Auto-scaling group ID
 * @method array getLabels() Obtain Labels
 * @method void setLabels(array $Labels) Set Labels
 * @method array getTaints() Obtain Array of taint
 * @method void setTaints(array $Taints) Set Array of taint
 * @method NodeCountSummary getNodeCountSummary() Obtain Node list
 * @method void setNodeCountSummary(NodeCountSummary $NodeCountSummary) Set Node list
 * @method string getAutoscalingGroupStatus() Obtain 
 * @method void setAutoscalingGroupStatus(string $AutoscalingGroupStatus) Set 
 * @method integer getMaxNodesNum() Obtain Maximum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMaxNodesNum(integer $MaxNodesNum) Set Maximum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getMinNodesNum() Obtain Minimum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMinNodesNum(integer $MinNodesNum) Set Minimum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getDesiredNodesNum() Obtain Desired number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setDesiredNodesNum(integer $DesiredNodesNum) Set Desired number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getNodePoolOs() Obtain The operating system of the node pool
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setNodePoolOs(string $NodePoolOs) Set The operating system of the node pool
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getOsCustomizeType() Obtain Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setOsCustomizeType(string $OsCustomizeType) Set Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getImageId() Obtain Image ID
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setImageId(string $ImageId) Set Image ID
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class NodePool extends AbstractModel
{
    /**
     * @var string Node pool ID
     */
    public $NodePoolId;

    /**
     * @var string Node pool name
     */
    public $Name;

    /**
     * @var string Cluster instance ID
     */
    public $ClusterInstanceId;

    /**
     * @var string Status
     */
    public $LifeState;

    /**
     * @var string Launch configuration ID
     */
    public $LaunchConfigurationId;

    /**
     * @var string Auto-scaling group ID
     */
    public $AutoscalingGroupId;

    /**
     * @var array Labels
     */
    public $Labels;

    /**
     * @var array Array of taint
     */
    public $Taints;

    /**
     * @var NodeCountSummary Node list
     */
    public $NodeCountSummary;

    /**
     * @var string 
     */
    public $AutoscalingGroupStatus;

    /**
     * @var integer Maximum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MaxNodesNum;

    /**
     * @var integer Minimum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MinNodesNum;

    /**
     * @var integer Desired number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $DesiredNodesNum;

    /**
     * @var string The operating system of the node pool
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $NodePoolOs;

    /**
     * @var string Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $OsCustomizeType;

    /**
     * @var string Image ID
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ImageId;

    /**
     * @param string $NodePoolId Node pool ID
     * @param string $Name Node pool name
     * @param string $ClusterInstanceId Cluster instance ID
     * @param string $LifeState Status
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $AutoscalingGroupId Auto-scaling group ID
     * @param array $Labels Labels
     * @param array $Taints Array of taint
     * @param NodeCountSummary $NodeCountSummary Node list
     * @param string $AutoscalingGroupStatus 
     * @param integer $MaxNodesNum Maximum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $MinNodesNum Minimum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $DesiredNodesNum Desired number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $NodePoolOs The operating system of the node pool
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $OsCustomizeType Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $ImageId Image ID
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterInstanceId",$param) and $param["ClusterInstanceId"] !== null) {
            $this->ClusterInstanceId = $param["ClusterInstanceId"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }

        if (array_key_exists("LaunchConfigurationId",$param) and $param["LaunchConfigurationId"] !== null) {
            $this->LaunchConfigurationId = $param["LaunchConfigurationId"];
        }

        if (array_key_exists("AutoscalingGroupId",$param) and $param["AutoscalingGroupId"] !== null) {
            $this->AutoscalingGroupId = $param["AutoscalingGroupId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
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

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
