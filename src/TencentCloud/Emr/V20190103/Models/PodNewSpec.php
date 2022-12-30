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
 * Resource descriptions for container resource scale-out
 *
 * @method string getResourceProviderIdentifier() Obtain The identifier of an external resource provider, such as "cls-a1cd23fa".
 * @method void setResourceProviderIdentifier(string $ResourceProviderIdentifier) Set The identifier of an external resource provider, such as "cls-a1cd23fa".
 * @method string getResourceProviderType() Obtain The type of the external resource provider, such as "tke". Currently, only "tke" is supported.
 * @method void setResourceProviderType(string $ResourceProviderType) Set The type of the external resource provider, such as "tke". Currently, only "tke" is supported.
 * @method string getNodeFlag() Obtain The purpose of the resource, which means the node type and can only be "TASK".
 * @method void setNodeFlag(string $NodeFlag) Set The purpose of the resource, which means the node type and can only be "TASK".
 * @method integer getCpu() Obtain The number of CPUs.
 * @method void setCpu(integer $Cpu) Set The number of CPUs.
 * @method integer getMemory() Obtain The memory size in GB.
 * @method void setMemory(integer $Memory) Set The memory size in GB.
 * @method string getCpuType() Obtain The EKS cluster - CPU type. Valid values: `intel` and `amd`.
 * @method void setCpuType(string $CpuType) Set The EKS cluster - CPU type. Valid values: `intel` and `amd`.
 * @method array getPodVolumes() Obtain The data directory mounting information of the pod node.
 * @method void setPodVolumes(array $PodVolumes) Set The data directory mounting information of the pod node.
 * @method boolean getEnableDynamicSpecFlag() Obtain Whether the dynamic spec is used. Valid values:
<li>`true`: Yes</li>
<li>`false` (default): No</li>
 * @method void setEnableDynamicSpecFlag(boolean $EnableDynamicSpecFlag) Set Whether the dynamic spec is used. Valid values:
<li>`true`: Yes</li>
<li>`false` (default): No</li>
 * @method DynamicPodSpec getDynamicPodSpec() Obtain The dynamic spec.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDynamicPodSpec(DynamicPodSpec $DynamicPodSpec) Set The dynamic spec.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain The unique VPC ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set The unique VPC ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain The unique VPC subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set The unique VPC subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPodName() Obtain The pod name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPodName(string $PodName) Set The pod name.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PodNewSpec extends AbstractModel
{
    /**
     * @var string The identifier of an external resource provider, such as "cls-a1cd23fa".
     */
    public $ResourceProviderIdentifier;

    /**
     * @var string The type of the external resource provider, such as "tke". Currently, only "tke" is supported.
     */
    public $ResourceProviderType;

    /**
     * @var string The purpose of the resource, which means the node type and can only be "TASK".
     */
    public $NodeFlag;

    /**
     * @var integer The number of CPUs.
     */
    public $Cpu;

    /**
     * @var integer The memory size in GB.
     */
    public $Memory;

    /**
     * @var string The EKS cluster - CPU type. Valid values: `intel` and `amd`.
     */
    public $CpuType;

    /**
     * @var array The data directory mounting information of the pod node.
     */
    public $PodVolumes;

    /**
     * @var boolean Whether the dynamic spec is used. Valid values:
<li>`true`: Yes</li>
<li>`false` (default): No</li>
     */
    public $EnableDynamicSpecFlag;

    /**
     * @var DynamicPodSpec The dynamic spec.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DynamicPodSpec;

    /**
     * @var string The unique VPC ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string The unique VPC subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string The pod name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PodName;

    /**
     * @param string $ResourceProviderIdentifier The identifier of an external resource provider, such as "cls-a1cd23fa".
     * @param string $ResourceProviderType The type of the external resource provider, such as "tke". Currently, only "tke" is supported.
     * @param string $NodeFlag The purpose of the resource, which means the node type and can only be "TASK".
     * @param integer $Cpu The number of CPUs.
     * @param integer $Memory The memory size in GB.
     * @param string $CpuType The EKS cluster - CPU type. Valid values: `intel` and `amd`.
     * @param array $PodVolumes The data directory mounting information of the pod node.
     * @param boolean $EnableDynamicSpecFlag Whether the dynamic spec is used. Valid values:
<li>`true`: Yes</li>
<li>`false` (default): No</li>
     * @param DynamicPodSpec $DynamicPodSpec The dynamic spec.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId The unique VPC ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId The unique VPC subnet ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PodName The pod name.
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

        if (array_key_exists("NodeFlag",$param) and $param["NodeFlag"] !== null) {
            $this->NodeFlag = $param["NodeFlag"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
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

        if (array_key_exists("EnableDynamicSpecFlag",$param) and $param["EnableDynamicSpecFlag"] !== null) {
            $this->EnableDynamicSpecFlag = $param["EnableDynamicSpecFlag"];
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
