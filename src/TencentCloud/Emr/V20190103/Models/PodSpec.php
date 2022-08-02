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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource description for container resource scale-out
 *
 * @method string getResourceProviderIdentifier() Obtain Identifier of external resource provider, such as "cls-a1cd23fa".
 * @method void setResourceProviderIdentifier(string $ResourceProviderIdentifier) Set Identifier of external resource provider, such as "cls-a1cd23fa".
 * @method string getResourceProviderType() Obtain Type of external resource provider, such as "tke". Currently, only "tke" is supported.
 * @method void setResourceProviderType(string $ResourceProviderType) Set Type of external resource provider, such as "tke". Currently, only "tke" is supported.
 * @method string getNodeType() Obtain Purpose of the resource, which means the node type and can only be "TASK".
 * @method void setNodeType(string $NodeType) Set Purpose of the resource, which means the node type and can only be "TASK".
 * @method integer getCpu() Obtain Number of CPUs
 * @method void setCpu(integer $Cpu) Set Number of CPUs
 * @method integer getMemory() Obtain Memory size in GB.
 * @method void setMemory(integer $Memory) Set Memory size in GB.
 * @method array getDataVolumes() Obtain Mount point of resources for the host. A specified mount point corresponds to the host path and is used as the data storage directory in the pod. (This parameter has been disused)
 * @method void setDataVolumes(array $DataVolumes) Set Mount point of resources for the host. A specified mount point corresponds to the host path and is used as the data storage directory in the pod. (This parameter has been disused)
 * @method string getCpuType() Obtain EKS cluster - CPU type. Valid values: `intel` and `amd`.
 * @method void setCpuType(string $CpuType) Set EKS cluster - CPU type. Valid values: `intel` and `amd`.
 * @method array getPodVolumes() Obtain Data directory mounting information of the pod node.
 * @method void setPodVolumes(array $PodVolumes) Set Data directory mounting information of the pod node.
 * @method integer getIsDynamicSpec() Obtain Whether floating specification is used. `1`: Yes; `0`: No.
 * @method void setIsDynamicSpec(integer $IsDynamicSpec) Set Whether floating specification is used. `1`: Yes; `0`: No.
 * @method DynamicPodSpec getDynamicPodSpec() Obtain Floating specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDynamicPodSpec(DynamicPodSpec $DynamicPodSpec) Set Floating specification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain Unique VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set Unique VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Unique VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Unique VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPodName() Obtain pod name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodName(string $PodName) Set pod name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PodSpec extends AbstractModel
{
    /**
     * @var string Identifier of external resource provider, such as "cls-a1cd23fa".
     */
    public $ResourceProviderIdentifier;

    /**
     * @var string Type of external resource provider, such as "tke". Currently, only "tke" is supported.
     */
    public $ResourceProviderType;

    /**
     * @var string Purpose of the resource, which means the node type and can only be "TASK".
     */
    public $NodeType;

    /**
     * @var integer Number of CPUs
     */
    public $Cpu;

    /**
     * @var integer Memory size in GB.
     */
    public $Memory;

    /**
     * @var array Mount point of resources for the host. A specified mount point corresponds to the host path and is used as the data storage directory in the pod. (This parameter has been disused)
     */
    public $DataVolumes;

    /**
     * @var string EKS cluster - CPU type. Valid values: `intel` and `amd`.
     */
    public $CpuType;

    /**
     * @var array Data directory mounting information of the pod node.
     */
    public $PodVolumes;

    /**
     * @var integer Whether floating specification is used. `1`: Yes; `0`: No.
     */
    public $IsDynamicSpec;

    /**
     * @var DynamicPodSpec Floating specification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DynamicPodSpec;

    /**
     * @var string Unique VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Unique VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string pod name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodName;

    /**
     * @param string $ResourceProviderIdentifier Identifier of external resource provider, such as "cls-a1cd23fa".
     * @param string $ResourceProviderType Type of external resource provider, such as "tke". Currently, only "tke" is supported.
     * @param string $NodeType Purpose of the resource, which means the node type and can only be "TASK".
     * @param integer $Cpu Number of CPUs
     * @param integer $Memory Memory size in GB.
     * @param array $DataVolumes Mount point of resources for the host. A specified mount point corresponds to the host path and is used as the data storage directory in the pod. (This parameter has been disused)
     * @param string $CpuType EKS cluster - CPU type. Valid values: `intel` and `amd`.
     * @param array $PodVolumes Data directory mounting information of the pod node.
     * @param integer $IsDynamicSpec Whether floating specification is used. `1`: Yes; `0`: No.
     * @param DynamicPodSpec $DynamicPodSpec Floating specification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId Unique VPC ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Unique VPC subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodName pod name
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
        if (array_key_exists("ResourceProviderIdentifier",$param) and $param["ResourceProviderIdentifier"] !== null) {
            $this->ResourceProviderIdentifier = $param["ResourceProviderIdentifier"];
        }

        if (array_key_exists("ResourceProviderType",$param) and $param["ResourceProviderType"] !== null) {
            $this->ResourceProviderType = $param["ResourceProviderType"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DataVolumes",$param) and $param["DataVolumes"] !== null) {
            $this->DataVolumes = $param["DataVolumes"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("PodVolumes",$param) and $param["PodVolumes"] !== null) {
            $this->PodVolumes = [];
            foreach ($param["PodVolumes"] as $key => $value){
                $obj = new PodVolume();
                $obj->deserialize($value);
                array_push($this->PodVolumes, $obj);
            }
        }

        if (array_key_exists("IsDynamicSpec",$param) and $param["IsDynamicSpec"] !== null) {
            $this->IsDynamicSpec = $param["IsDynamicSpec"];
        }

        if (array_key_exists("DynamicPodSpec",$param) and $param["DynamicPodSpec"] !== null) {
            $this->DynamicPodSpec = new DynamicPodSpec();
            $this->DynamicPodSpec->deserialize($param["DynamicPodSpec"]);
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }
    }
}
