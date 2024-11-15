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
 * @method string getLifeState() Obtain The lifecycle state of the current node pool. Valid values: `creating`, `normal`, `updating`, `deleting`, and `deleted`.
 * @method void setLifeState(string $LifeState) Set The lifecycle state of the current node pool. Valid values: `creating`, `normal`, `updating`, `deleting`, and `deleted`.
 * @method string getLaunchConfigurationId() Obtain Launch configuration ID
 * @method void setLaunchConfigurationId(string $LaunchConfigurationId) Set Launch configuration ID
 * @method string getAutoscalingGroupId() Obtain Auto-scaling group ID
 * @method void setAutoscalingGroupId(string $AutoscalingGroupId) Set Auto-scaling group ID
 * @method array getLabels() Obtain Labels
 * @method void setLabels(array $Labels) Set Labels
 * @method array getTaints() Obtain Array of taint
 * @method void setTaints(array $Taints) Set Array of taint
 * @method array getAnnotations() Obtain Node Annotation List
 * @method void setAnnotations(array $Annotations) Set Node Annotation List
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
 * @method RuntimeConfig getRuntimeConfig() Obtain Runtime Description
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRuntimeConfig(RuntimeConfig $RuntimeConfig) Set Runtime Description
Note: This field may return "null", indicating that no valid value can be obtained.
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
 * @method integer getDesiredPodNum() Obtain This parameter is required when the custom PodCIDR mode is enabled for the cluster.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setDesiredPodNum(integer $DesiredPodNum) Set This parameter is required when the custom PodCIDR mode is enabled for the cluster.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getUserScript() Obtain Custom script
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setUserScript(string $UserScript) Set Custom script
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getTags() Obtain Resource tag
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Resource tag
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getDeletionProtection() Obtain Whether Deletion Protection is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether Deletion Protection is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method InstanceExtraArgs getExtraArgs() Obtain Node Configuration

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setExtraArgs(InstanceExtraArgs $ExtraArgs) Set Node Configuration

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method GPUArgs getGPUArgs() Obtain GPU Driver-related Parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setGPUArgs(GPUArgs $GPUArgs) Set GPU Driver-related Parameters
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getDockerGraphPath() Obtain Specified value of dockerd --graph. Default value: /var/lib/docker

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDockerGraphPath(string $DockerGraphPath) Set Specified value of dockerd --graph. Default value: /var/lib/docker

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getDataDisks() Obtain Multiple Disk Data Disk Mount Information: When creating a new node, make sure that the CVM purchase parameters include the information of purchasing multiple data disks. For example, in the DataDisks under RunInstancesPara of CreateClusterInstances API, it must also be set to purchase multiple data disks. Refer to the example of adding cluster nodes (multiple data disks) of CreateClusterInstances API; when adding existing nodes, ensure that the specified partition information actually exists on the node.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDataDisks(array $DataDisks) Set Multiple Disk Data Disk Mount Information: When creating a new node, make sure that the CVM purchase parameters include the information of purchasing multiple data disks. For example, in the DataDisks under RunInstancesPara of CreateClusterInstances API, it must also be set to purchase multiple data disks. Refer to the example of adding cluster nodes (multiple data disks) of CreateClusterInstances API; when adding existing nodes, ensure that the specified partition information actually exists on the node.
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getUnschedulable() Obtain Unschedulable or not
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUnschedulable(integer $Unschedulable) Set Unschedulable or not
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getPreStartUserScript() Obtain Custom script, executed before UserScript
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setPreStartUserScript(string $PreStartUserScript) Set Custom script, executed before UserScript
Note: This field may return "null", indicating that no valid value can be obtained.
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
     * @var string The lifecycle state of the current node pool. Valid values: `creating`, `normal`, `updating`, `deleting`, and `deleted`.
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
     * @var array Node Annotation List
     */
    public $Annotations;

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
     * @var RuntimeConfig Runtime Description
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $RuntimeConfig;

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
     * @var integer This parameter is required when the custom PodCIDR mode is enabled for the cluster.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $DesiredPodNum;

    /**
     * @var string Custom script
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $UserScript;

    /**
     * @var array Resource tag
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Whether Deletion Protection is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeletionProtection;

    /**
     * @var InstanceExtraArgs Node Configuration

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ExtraArgs;

    /**
     * @var GPUArgs GPU Driver-related Parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $GPUArgs;

    /**
     * @var string Specified value of dockerd --graph. Default value: /var/lib/docker

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DockerGraphPath;

    /**
     * @var array Multiple Disk Data Disk Mount Information: When creating a new node, make sure that the CVM purchase parameters include the information of purchasing multiple data disks. For example, in the DataDisks under RunInstancesPara of CreateClusterInstances API, it must also be set to purchase multiple data disks. Refer to the example of adding cluster nodes (multiple data disks) of CreateClusterInstances API; when adding existing nodes, ensure that the specified partition information actually exists on the node.
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DataDisks;

    /**
     * @var integer Unschedulable or not
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Unschedulable;

    /**
     * @var string Custom script, executed before UserScript
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $PreStartUserScript;

    /**
     * @param string $NodePoolId Node pool ID
     * @param string $Name Node pool name
     * @param string $ClusterInstanceId Cluster instance ID
     * @param string $LifeState The lifecycle state of the current node pool. Valid values: `creating`, `normal`, `updating`, `deleting`, and `deleted`.
     * @param string $LaunchConfigurationId Launch configuration ID
     * @param string $AutoscalingGroupId Auto-scaling group ID
     * @param array $Labels Labels
     * @param array $Taints Array of taint
     * @param array $Annotations Node Annotation List
     * @param NodeCountSummary $NodeCountSummary Node list
     * @param string $AutoscalingGroupStatus 
     * @param integer $MaxNodesNum Maximum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $MinNodesNum Minimum number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $DesiredNodesNum Desired number of nodes
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param RuntimeConfig $RuntimeConfig Runtime Description
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $NodePoolOs The operating system of the node pool
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $OsCustomizeType Container image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $ImageId Image ID
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $DesiredPodNum This parameter is required when the custom PodCIDR mode is enabled for the cluster.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $UserScript Custom script
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $Tags Resource tag
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $DeletionProtection Whether Deletion Protection is enabled
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param InstanceExtraArgs $ExtraArgs Node Configuration

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param GPUArgs $GPUArgs GPU Driver-related Parameters
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $DockerGraphPath Specified value of dockerd --graph. Default value: /var/lib/docker

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $DataDisks Multiple Disk Data Disk Mount Information: When creating a new node, make sure that the CVM purchase parameters include the information of purchasing multiple data disks. For example, in the DataDisks under RunInstancesPara of CreateClusterInstances API, it must also be set to purchase multiple data disks. Refer to the example of adding cluster nodes (multiple data disks) of CreateClusterInstances API; when adding existing nodes, ensure that the specified partition information actually exists on the node.
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $Unschedulable Unschedulable or not
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $PreStartUserScript Custom script, executed before UserScript
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

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new AnnotationValue();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
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

        if (array_key_exists("RuntimeConfig",$param) and $param["RuntimeConfig"] !== null) {
            $this->RuntimeConfig = new RuntimeConfig();
            $this->RuntimeConfig->deserialize($param["RuntimeConfig"]);
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

        if (array_key_exists("DesiredPodNum",$param) and $param["DesiredPodNum"] !== null) {
            $this->DesiredPodNum = $param["DesiredPodNum"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new InstanceExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("GPUArgs",$param) and $param["GPUArgs"] !== null) {
            $this->GPUArgs = new GPUArgs();
            $this->GPUArgs->deserialize($param["GPUArgs"]);
        }

        if (array_key_exists("DockerGraphPath",$param) and $param["DockerGraphPath"] !== null) {
            $this->DockerGraphPath = $param["DockerGraphPath"];
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("PreStartUserScript",$param) and $param["PreStartUserScript"] !== null) {
            $this->PreStartUserScript = $param["PreStartUserScript"];
        }
    }
}
