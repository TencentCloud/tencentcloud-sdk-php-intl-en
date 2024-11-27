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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of instance specifications supported by the CDC host
 *
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getInstanceType() Obtain Type name
 * @method void setInstanceType(string $InstanceType) Set Type name
 * @method integer getNetworkCard() Obtain NIC type, e.g., 25 represents a 25 GB NIC.
 * @method void setNetworkCard(integer $NetworkCard) Set NIC type, e.g., 25 represents a 25 GB NIC.
 * @method integer getCpu() Obtain Number of CPU cores of instance, in cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of instance, in cores
 * @method integer getMemory() Obtain Memory capacity of instance, in GB
 * @method void setMemory(integer $Memory) Set Memory capacity of instance, in GB
 * @method string getInstanceFamily() Obtain Instance family
 * @method void setInstanceFamily(string $InstanceFamily) Set Instance family
 * @method string getTypeName() Obtain Type name
 * @method void setTypeName(string $TypeName) Set Type name
 * @method integer getStorageBlockAmount() Obtain Local storage block count
 * @method void setStorageBlockAmount(integer $StorageBlockAmount) Set Local storage block count
 * @method float getInstanceBandwidth() Obtain LAN bandwidth, in GB/s
 * @method void setInstanceBandwidth(float $InstanceBandwidth) Set LAN bandwidth, in GB/s
 * @method integer getInstancePps() Obtain Network packet receiving/sending capacity, in 10,000 PPS
 * @method void setInstancePps(integer $InstancePps) Set Network packet receiving/sending capacity, in 10,000 PPS
 * @method string getCpuType() Obtain Processor type
 * @method void setCpuType(string $CpuType) Set Processor type
 * @method integer getGpu() Obtain Number of GPUs of instance
 * @method void setGpu(integer $Gpu) Set Number of GPUs of instance
 * @method integer getFpga() Obtain Number of FPGAs of instance.
 * @method void setFpga(integer $Fpga) Set Number of FPGAs of instance.
 * @method string getRemark() Obtain Type description
 * @method void setRemark(string $Remark) Set Type description
 * @method string getStatus() Obtain Whether the instance is for sale? Value values: <br><li>SELL: Indicates that the instance is for sale. <br><li>SOLD_OUT: Indicates that the instance has been sold out.
 * @method void setStatus(string $Status) Set Whether the instance is for sale? Value values: <br><li>SELL: Indicates that the instance is for sale. <br><li>SOLD_OUT: Indicates that the instance has been sold out.
 */
class DedicatedClusterInstanceType extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string Type name
     */
    public $InstanceType;

    /**
     * @var integer NIC type, e.g., 25 represents a 25 GB NIC.
     */
    public $NetworkCard;

    /**
     * @var integer Number of CPU cores of instance, in cores
     */
    public $Cpu;

    /**
     * @var integer Memory capacity of instance, in GB
     */
    public $Memory;

    /**
     * @var string Instance family
     */
    public $InstanceFamily;

    /**
     * @var string Type name
     */
    public $TypeName;

    /**
     * @var integer Local storage block count
     */
    public $StorageBlockAmount;

    /**
     * @var float LAN bandwidth, in GB/s
     */
    public $InstanceBandwidth;

    /**
     * @var integer Network packet receiving/sending capacity, in 10,000 PPS
     */
    public $InstancePps;

    /**
     * @var string Processor type
     */
    public $CpuType;

    /**
     * @var integer Number of GPUs of instance
     */
    public $Gpu;

    /**
     * @var integer Number of FPGAs of instance.
     */
    public $Fpga;

    /**
     * @var string Type description
     */
    public $Remark;

    /**
     * @var string Whether the instance is for sale? Value values: <br><li>SELL: Indicates that the instance is for sale. <br><li>SOLD_OUT: Indicates that the instance has been sold out.
     */
    public $Status;

    /**
     * @param string $Zone AZ
     * @param string $InstanceType Type name
     * @param integer $NetworkCard NIC type, e.g., 25 represents a 25 GB NIC.
     * @param integer $Cpu Number of CPU cores of instance, in cores
     * @param integer $Memory Memory capacity of instance, in GB
     * @param string $InstanceFamily Instance family
     * @param string $TypeName Type name
     * @param integer $StorageBlockAmount Local storage block count
     * @param float $InstanceBandwidth LAN bandwidth, in GB/s
     * @param integer $InstancePps Network packet receiving/sending capacity, in 10,000 PPS
     * @param string $CpuType Processor type
     * @param integer $Gpu Number of GPUs of instance
     * @param integer $Fpga Number of FPGAs of instance.
     * @param string $Remark Type description
     * @param string $Status Whether the instance is for sale? Value values: <br><li>SELL: Indicates that the instance is for sale. <br><li>SOLD_OUT: Indicates that the instance has been sold out.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("StorageBlockAmount",$param) and $param["StorageBlockAmount"] !== null) {
            $this->StorageBlockAmount = $param["StorageBlockAmount"];
        }

        if (array_key_exists("InstanceBandwidth",$param) and $param["InstanceBandwidth"] !== null) {
            $this->InstanceBandwidth = $param["InstanceBandwidth"];
        }

        if (array_key_exists("InstancePps",$param) and $param["InstancePps"] !== null) {
            $this->InstancePps = $param["InstancePps"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("Fpga",$param) and $param["Fpga"] !== null) {
            $this->Fpga = $param["Fpga"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
