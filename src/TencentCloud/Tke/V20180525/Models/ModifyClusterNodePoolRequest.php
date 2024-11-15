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
 * ModifyClusterNodePool request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getNodePoolId() Obtain Node pool ID
 * @method void setNodePoolId(string $NodePoolId) Set Node pool ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method integer getMaxNodesNum() Obtain Maximum number of nodes
 * @method void setMaxNodesNum(integer $MaxNodesNum) Set Maximum number of nodes
 * @method integer getMinNodesNum() Obtain Minimum number of nodes
 * @method void setMinNodesNum(integer $MinNodesNum) Set Minimum number of nodes
 * @method array getLabels() Obtain Labels
 * @method void setLabels(array $Labels) Set Labels
 * @method array getTaints() Obtain Taints
 * @method void setTaints(array $Taints) Set Taints
 * @method array getAnnotations() Obtain Node Annotation List
 * @method void setAnnotations(array $Annotations) Set Node Annotation List
 * @method boolean getEnableAutoscale() Obtain Indicates whether auto scaling is enabled.
 * @method void setEnableAutoscale(boolean $EnableAutoscale) Set Indicates whether auto scaling is enabled.
 * @method string getOsName() Obtain Operating system name
 * @method void setOsName(string $OsName) Set Operating system name
 * @method string getOsCustomizeType() Obtain Image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
 * @method void setOsCustomizeType(string $OsCustomizeType) Set Image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
 * @method GPUArgs getGPUArgs() Obtain GPU driver version, CUDA version, cuDNN version and wether to enable MIG
 * @method void setGPUArgs(GPUArgs $GPUArgs) Set GPU driver version, CUDA version, cuDNN version and wether to enable MIG
 * @method string getUserScript() Obtain Base64-encoded custom script
 * @method void setUserScript(string $UserScript) Set Base64-encoded custom script
 * @method boolean getIgnoreExistedNode() Obtain Ignore existing nodes when update `Label` and `Taint`
 * @method void setIgnoreExistedNode(boolean $IgnoreExistedNode) Set Ignore existing nodes when update `Label` and `Taint`
 * @method InstanceExtraArgs getExtraArgs() Obtain Node custom parameter
 * @method void setExtraArgs(InstanceExtraArgs $ExtraArgs) Set Node custom parameter
 * @method array getTags() Obtain Resource tag
 * @method void setTags(array $Tags) Set Resource tag
 * @method integer getUnschedulable() Obtain Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run `kubectl uncordon nodename` to enable this node for scheduling.
 * @method void setUnschedulable(integer $Unschedulable) Set Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run `kubectl uncordon nodename` to enable this node for scheduling.
 * @method boolean getDeletionProtection() Obtain Whether Deletion Protection is enabled
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Whether Deletion Protection is enabled
 * @method string getDockerGraphPath() Obtain Specified value of dockerd --graph. Default value: /var/lib/docker
 * @method void setDockerGraphPath(string $DockerGraphPath) Set Specified value of dockerd --graph. Default value: /var/lib/docker
 * @method string getPreStartUserScript() Obtain Base64-encoded custom script
 * @method void setPreStartUserScript(string $PreStartUserScript) Set Base64-encoded custom script
 */
class ModifyClusterNodePoolRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Node pool ID
     */
    public $NodePoolId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var integer Maximum number of nodes
     */
    public $MaxNodesNum;

    /**
     * @var integer Minimum number of nodes
     */
    public $MinNodesNum;

    /**
     * @var array Labels
     */
    public $Labels;

    /**
     * @var array Taints
     */
    public $Taints;

    /**
     * @var array Node Annotation List
     */
    public $Annotations;

    /**
     * @var boolean Indicates whether auto scaling is enabled.
     */
    public $EnableAutoscale;

    /**
     * @var string Operating system name
     */
    public $OsName;

    /**
     * @var string Image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
     */
    public $OsCustomizeType;

    /**
     * @var GPUArgs GPU driver version, CUDA version, cuDNN version and wether to enable MIG
     */
    public $GPUArgs;

    /**
     * @var string Base64-encoded custom script
     */
    public $UserScript;

    /**
     * @var boolean Ignore existing nodes when update `Label` and `Taint`
     */
    public $IgnoreExistedNode;

    /**
     * @var InstanceExtraArgs Node custom parameter
     */
    public $ExtraArgs;

    /**
     * @var array Resource tag
     */
    public $Tags;

    /**
     * @var integer Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run `kubectl uncordon nodename` to enable this node for scheduling.
     */
    public $Unschedulable;

    /**
     * @var boolean Whether Deletion Protection is enabled
     */
    public $DeletionProtection;

    /**
     * @var string Specified value of dockerd --graph. Default value: /var/lib/docker
     */
    public $DockerGraphPath;

    /**
     * @var string Base64-encoded custom script
     */
    public $PreStartUserScript;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $NodePoolId Node pool ID
     * @param string $Name Name
     * @param integer $MaxNodesNum Maximum number of nodes
     * @param integer $MinNodesNum Minimum number of nodes
     * @param array $Labels Labels
     * @param array $Taints Taints
     * @param array $Annotations Node Annotation List
     * @param boolean $EnableAutoscale Indicates whether auto scaling is enabled.
     * @param string $OsName Operating system name
     * @param string $OsCustomizeType Image tag, `DOCKER_CUSTOMIZE` (container customized tag), `GENERAL` (general tag, default value)
     * @param GPUArgs $GPUArgs GPU driver version, CUDA version, cuDNN version and wether to enable MIG
     * @param string $UserScript Base64-encoded custom script
     * @param boolean $IgnoreExistedNode Ignore existing nodes when update `Label` and `Taint`
     * @param InstanceExtraArgs $ExtraArgs Node custom parameter
     * @param array $Tags Resource tag
     * @param integer $Unschedulable Sets whether the added node is schedulable. 0 (default): schedulable; other values: unschedulable. After node initialization is completed, you can run `kubectl uncordon nodename` to enable this node for scheduling.
     * @param boolean $DeletionProtection Whether Deletion Protection is enabled
     * @param string $DockerGraphPath Specified value of dockerd --graph. Default value: /var/lib/docker
     * @param string $PreStartUserScript Base64-encoded custom script
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MaxNodesNum",$param) and $param["MaxNodesNum"] !== null) {
            $this->MaxNodesNum = $param["MaxNodesNum"];
        }

        if (array_key_exists("MinNodesNum",$param) and $param["MinNodesNum"] !== null) {
            $this->MinNodesNum = $param["MinNodesNum"];
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

        if (array_key_exists("EnableAutoscale",$param) and $param["EnableAutoscale"] !== null) {
            $this->EnableAutoscale = $param["EnableAutoscale"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("GPUArgs",$param) and $param["GPUArgs"] !== null) {
            $this->GPUArgs = new GPUArgs();
            $this->GPUArgs->deserialize($param["GPUArgs"]);
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("IgnoreExistedNode",$param) and $param["IgnoreExistedNode"] !== null) {
            $this->IgnoreExistedNode = $param["IgnoreExistedNode"];
        }

        if (array_key_exists("ExtraArgs",$param) and $param["ExtraArgs"] !== null) {
            $this->ExtraArgs = new InstanceExtraArgs();
            $this->ExtraArgs->deserialize($param["ExtraArgs"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("DockerGraphPath",$param) and $param["DockerGraphPath"] !== null) {
            $this->DockerGraphPath = $param["DockerGraphPath"];
        }

        if (array_key_exists("PreStartUserScript",$param) and $param["PreStartUserScript"] !== null) {
            $this->PreStartUserScript = $param["PreStartUserScript"];
        }
    }
}
