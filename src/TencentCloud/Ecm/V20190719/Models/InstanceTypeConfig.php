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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Model configuration
 *
 * @method InstanceFamilyConfig getInstanceFamilyConfig() Obtain Model family configuration information
 * @method void setInstanceFamilyConfig(InstanceFamilyConfig $InstanceFamilyConfig) Set Model family configuration information
 * @method string getInstanceType() Obtain Model
 * @method void setInstanceType(string $InstanceType) Set Model
 * @method integer getVcpu() Obtain Number of CPU cores
 * @method void setVcpu(integer $Vcpu) Set Number of CPU cores
 * @method integer getMemory() Obtain Memory size
 * @method void setMemory(integer $Memory) Set Memory size
 * @method string getFrequency() Obtain Clock rate
 * @method void setFrequency(string $Frequency) Set Clock rate
 * @method string getCpuModelName() Obtain CPU model
 * @method void setCpuModelName(string $CpuModelName) Set CPU model
 * @method InstanceFamilyTypeConfig getInstanceFamilyTypeConfig() Obtain Instance family type configuration information
 * @method void setInstanceFamilyTypeConfig(InstanceFamilyTypeConfig $InstanceFamilyTypeConfig) Set Instance family type configuration information
 * @method string getExtInfo() Obtain Extra model information, which is a JSON string in the format of `{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"default system disk size:60 GB","dataDiskSizeShow":"local NVMe SSD: 3200 GB"}`. It indicates a special model if it exists
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExtInfo(string $ExtInfo) Set Extra model information, which is a JSON string in the format of `{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"default system disk size:60 GB","dataDiskSizeShow":"local NVMe SSD: 3200 GB"}`. It indicates a special model if it exists
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getVgpu() Obtain Number of GPU cards
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVgpu(float $Vgpu) Set Number of GPU cards
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getGpuModelName() Obtain GPU model
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGpuModelName(string $GpuModelName) Set GPU model
Note: this field may return null, indicating that no valid values can be obtained.
 */
class InstanceTypeConfig extends AbstractModel
{
    /**
     * @var InstanceFamilyConfig Model family configuration information
     */
    public $InstanceFamilyConfig;

    /**
     * @var string Model
     */
    public $InstanceType;

    /**
     * @var integer Number of CPU cores
     */
    public $Vcpu;

    /**
     * @var integer Memory size
     */
    public $Memory;

    /**
     * @var string Clock rate
     */
    public $Frequency;

    /**
     * @var string CPU model
     */
    public $CpuModelName;

    /**
     * @var InstanceFamilyTypeConfig Instance family type configuration information
     */
    public $InstanceFamilyTypeConfig;

    /**
     * @var string Extra model information, which is a JSON string in the format of `{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"default system disk size:60 GB","dataDiskSizeShow":"local NVMe SSD: 3200 GB"}`. It indicates a special model if it exists
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExtInfo;

    /**
     * @var float Number of GPU cards
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Vgpu;

    /**
     * @var string GPU model
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GpuModelName;

    /**
     * @param InstanceFamilyConfig $InstanceFamilyConfig Model family configuration information
     * @param string $InstanceType Model
     * @param integer $Vcpu Number of CPU cores
     * @param integer $Memory Memory size
     * @param string $Frequency Clock rate
     * @param string $CpuModelName CPU model
     * @param InstanceFamilyTypeConfig $InstanceFamilyTypeConfig Instance family type configuration information
     * @param string $ExtInfo Extra model information, which is a JSON string in the format of `{"dataDiskSize":3200,"systemDiskSize":60, "systemDiskSizeShow":"default system disk size:60 GB","dataDiskSizeShow":"local NVMe SSD: 3200 GB"}`. It indicates a special model if it exists
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $Vgpu Number of GPU cards
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $GpuModelName GPU model
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceFamilyConfig",$param) and $param["InstanceFamilyConfig"] !== null) {
            $this->InstanceFamilyConfig = new InstanceFamilyConfig();
            $this->InstanceFamilyConfig->deserialize($param["InstanceFamilyConfig"]);
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Vcpu",$param) and $param["Vcpu"] !== null) {
            $this->Vcpu = $param["Vcpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("CpuModelName",$param) and $param["CpuModelName"] !== null) {
            $this->CpuModelName = $param["CpuModelName"];
        }

        if (array_key_exists("InstanceFamilyTypeConfig",$param) and $param["InstanceFamilyTypeConfig"] !== null) {
            $this->InstanceFamilyTypeConfig = new InstanceFamilyTypeConfig();
            $this->InstanceFamilyTypeConfig->deserialize($param["InstanceFamilyTypeConfig"]);
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("Vgpu",$param) and $param["Vgpu"] !== null) {
            $this->Vgpu = $param["Vgpu"];
        }

        if (array_key_exists("GpuModelName",$param) and $param["GpuModelName"] !== null) {
            $this->GpuModelName = $param["GpuModelName"];
        }
    }
}
