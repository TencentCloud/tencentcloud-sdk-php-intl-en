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
 * @method string getNodeType() Obtain Purpose of the resource, that is, the node type. Currently only "TASK" is supported.
 * @method void setNodeType(string $NodeType) Set Purpose of the resource, that is, the node type. Currently only "TASK" is supported.
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getMemory() Obtain Memory size (GB).
 * @method void setMemory(integer $Memory) Set Memory size (GB).
 * @method array getDataVolumes() Obtain The mount point of the resource to the host. The specified mount point corresponds to the path on the host, and this mount point is used as the data storage directory in the Pod. This parameter has been deprecated.
 * @method void setDataVolumes(array $DataVolumes) Set The mount point of the resource to the host. The specified mount point corresponds to the path on the host, and this mount point is used as the data storage directory in the Pod. This parameter has been deprecated.
 * @method string getCpuType() Obtain CPU type for the EKS cluster, currently supporting intel and amd.
 * @method void setCpuType(string $CpuType) Set CPU type for the EKS cluster, currently supporting intel and amd.
 * @method array getPodVolumes() Obtain Mounting information of the node data directory on Pod.
 * @method void setPodVolumes(array $PodVolumes) Set Mounting information of the node data directory on Pod.
 * @method integer getIsDynamicSpec() Obtain Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).
 * @method void setIsDynamicSpec(integer $IsDynamicSpec) Set Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).
 * @method DynamicPodSpec getDynamicPodSpec() Obtain Floating specification.
 * @method void setDynamicPodSpec(DynamicPodSpec $DynamicPodSpec) Set Floating specification.
 * @method string getVpcId() Obtain Unique ID of the VPC.
 * @method void setVpcId(string $VpcId) Set Unique ID of the VPC.
 * @method string getSubnetId() Obtain Unique ID of the VPC subnet.
 * @method void setSubnetId(string $SubnetId) Set Unique ID of the VPC subnet.
 * @method string getPodName() Obtain pod name
 * @method void setPodName(string $PodName) Set pod name
 */
class PodSpec extends AbstractModel
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
    public $NodeType;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Memory size (GB).
     */
    public $Memory;

    /**
     * @var array The mount point of the resource to the host. The specified mount point corresponds to the path on the host, and this mount point is used as the data storage directory in the Pod. This parameter has been deprecated.
     */
    public $DataVolumes;

    /**
     * @var string CPU type for the EKS cluster, currently supporting intel and amd.
     */
    public $CpuType;

    /**
     * @var array Mounting information of the node data directory on Pod.
     */
    public $PodVolumes;

    /**
     * @var integer Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).
     */
    public $IsDynamicSpec;

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
     * @param string $ResourceProviderIdentifier Identifier of the external resource provider, for example, "cls-a1cd23fa".
     * @param string $ResourceProviderType Type of the external resource provider, for example, "tke". Currently, only "tke" is supported.
     * @param string $NodeType Purpose of the resource, that is, the node type. Currently only "TASK" is supported.
     * @param integer $Cpu Number of CPU cores.
     * @param integer $Memory Memory size (GB).
     * @param array $DataVolumes The mount point of the resource to the host. The specified mount point corresponds to the path on the host, and this mount point is used as the data storage directory in the Pod. This parameter has been deprecated.
     * @param string $CpuType CPU type for the EKS cluster, currently supporting intel and amd.
     * @param array $PodVolumes Mounting information of the node data directory on Pod.
     * @param integer $IsDynamicSpec Whether it is a floating specification. Valid values: 1 (yes) and 0 (no).
     * @param DynamicPodSpec $DynamicPodSpec Floating specification.
     * @param string $VpcId Unique ID of the VPC.
     * @param string $SubnetId Unique ID of the VPC subnet.
     * @param string $PodName pod name
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
