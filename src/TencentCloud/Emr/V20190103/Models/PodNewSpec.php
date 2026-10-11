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
 * Resource description, which is used during a container resource scale-out.
 *
 * @method string getResourceProviderIdentifier() Obtain Identifier of the external resource provider, for example, "cls-a1cd23fa".
 * @method void setResourceProviderIdentifier(string $ResourceProviderIdentifier) Set Identifier of the external resource provider, for example, "cls-a1cd23fa".
 * @method string getResourceProviderType() Obtain Type of the external resource provider, for example, "tke". Currently, only "tke" is supported.
 * @method void setResourceProviderType(string $ResourceProviderType) Set Type of the external resource provider, for example, "tke". Currently, only "tke" is supported.
 * @method string getNodeFlag() Obtain Purpose of the resource, that is, the node type. Currently only "TASK" is supported.
 * @method void setNodeFlag(string $NodeFlag) Set Purpose of the resource, that is, the node type. Currently only "TASK" is supported.
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getMemory() Obtain Memory size (GB).
 * @method void setMemory(integer $Memory) Set Memory size (GB).
 * @method string getCpuType() Obtain CPU type for the EKS cluster, currently supporting intel and amd.
 * @method void setCpuType(string $CpuType) Set CPU type for the EKS cluster, currently supporting intel and amd.
 * @method array getPodVolumes() Obtain Mounting information of the node data directory on Pod.
 * @method void setPodVolumes(array $PodVolumes) Set Mounting information of the node data directory on Pod.
 * @method boolean getEnableDynamicSpecFlag() Obtain Whether it is a floating specification. Default: false. Valid values:
<li>true: yes</li>
<li>false: no</li>
 * @method void setEnableDynamicSpecFlag(boolean $EnableDynamicSpecFlag) Set Whether it is a floating specification. Default: false. Valid values:
<li>true: yes</li>
<li>false: no</li>
 * @method DynamicPodSpec getDynamicPodSpec() Obtain Floating specification.
 * @method void setDynamicPodSpec(DynamicPodSpec $DynamicPodSpec) Set Floating specification.
 * @method string getVpcId() Obtain Unique ID of the VPC.
 * @method void setVpcId(string $VpcId) Set Unique ID of the VPC.
 * @method string getSubnetId() Obtain Unique ID of the VPC subnet.
 * @method void setSubnetId(string $SubnetId) Set Unique ID of the VPC subnet.
 * @method string getPodName() Obtain pod name
 * @method void setPodName(string $PodName) Set pod name
 * @method OtherAccountInfo getOtherAccountInfo() Obtain Other account authorization information.
 * @method void setOtherAccountInfo(OtherAccountInfo $OtherAccountInfo) Set Other account authorization information.
 */
class PodNewSpec extends AbstractModel
{
    /**
     * @var string Identifier of the external resource provider, for example, "cls-a1cd23fa".
     */
    public $ResourceProviderIdentifier;

    /**
     * @var string Type of the external resource provider, for example, "tke". Currently, only "tke" is supported.
     */
    public $ResourceProviderType;

    /**
     * @var string Purpose of the resource, that is, the node type. Currently only "TASK" is supported.
     */
    public $NodeFlag;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Memory size (GB).
     */
    public $Memory;

    /**
     * @var string CPU type for the EKS cluster, currently supporting intel and amd.
     */
    public $CpuType;

    /**
     * @var array Mounting information of the node data directory on Pod.
     */
    public $PodVolumes;

    /**
     * @var boolean Whether it is a floating specification. Default: false. Valid values:
<li>true: yes</li>
<li>false: no</li>
     */
    public $EnableDynamicSpecFlag;

    /**
     * @var DynamicPodSpec Floating specification.
     */
    public $DynamicPodSpec;

    /**
     * @var string Unique ID of the VPC.
     */
    public $VpcId;

    /**
     * @var string Unique ID of the VPC subnet.
     */
    public $SubnetId;

    /**
     * @var string pod name
     */
    public $PodName;

    /**
     * @var OtherAccountInfo Other account authorization information.
     */
    public $OtherAccountInfo;

    /**
     * @param string $ResourceProviderIdentifier Identifier of the external resource provider, for example, "cls-a1cd23fa".
     * @param string $ResourceProviderType Type of the external resource provider, for example, "tke". Currently, only "tke" is supported.
     * @param string $NodeFlag Purpose of the resource, that is, the node type. Currently only "TASK" is supported.
     * @param integer $Cpu Number of CPU cores.
     * @param integer $Memory Memory size (GB).
     * @param string $CpuType CPU type for the EKS cluster, currently supporting intel and amd.
     * @param array $PodVolumes Mounting information of the node data directory on Pod.
     * @param boolean $EnableDynamicSpecFlag Whether it is a floating specification. Default: false. Valid values:
<li>true: yes</li>
<li>false: no</li>
     * @param DynamicPodSpec $DynamicPodSpec Floating specification.
     * @param string $VpcId Unique ID of the VPC.
     * @param string $SubnetId Unique ID of the VPC subnet.
     * @param string $PodName pod name
     * @param OtherAccountInfo $OtherAccountInfo Other account authorization information.
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

        if (array_key_exists("OtherAccountInfo",$param) and $param["OtherAccountInfo"] !== null) {
            $this->OtherAccountInfo = new OtherAccountInfo();
            $this->OtherAccountInfo->deserialize($param["OtherAccountInfo"]);
        }
    }
}
