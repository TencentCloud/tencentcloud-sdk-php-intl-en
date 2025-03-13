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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reserved instance specification.
 *
 * @method string getInstanceType() Obtain Instance type.
 * @method void setInstanceType(string $InstanceType) Set Instance type.
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getMemory() Obtain Memory size.
 * @method void setMemory(integer $Memory) Set Memory size.
 * @method integer getGpu() Obtain Number of GPUs.
 * @method void setGpu(integer $Gpu) Set Number of GPUs.
 * @method integer getFpga() Obtain Number of FPGAs.
 * @method void setFpga(integer $Fpga) Set Number of FPGAs.
 * @method integer getStorageBlock() Obtain Number of local storage blocks.
 * @method void setStorageBlock(integer $StorageBlock) Set Number of local storage blocks.
 * @method integer getNetworkCard() Obtain Number of NICs.
 * @method void setNetworkCard(integer $NetworkCard) Set Number of NICs.
 * @method float getMaxBandwidth() Obtain Maximum bandwidth.
 * @method void setMaxBandwidth(float $MaxBandwidth) Set Maximum bandwidth.
 * @method string getFrequency() Obtain CPU frequency.
 * @method void setFrequency(string $Frequency) Set CPU frequency.
 * @method string getCpuModelName() Obtain CPU type.
 * @method void setCpuModelName(string $CpuModelName) Set CPU type.
 * @method integer getPps() Obtain Packet forwarding rate.
 * @method void setPps(integer $Pps) Set Packet forwarding rate.
 * @method Externals getExternals() Obtain Other information.
 * @method void setExternals(Externals $Externals) Set Other information.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 * @method array getPrices() Obtain Price information about the reserved instance.
 * @method void setPrices(array $Prices) Set Price information about the reserved instance.
 */
class ReservedInstanceTypeItem extends AbstractModel
{
    /**
     * @var string Instance type.
     */
    public $InstanceType;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Memory size.
     */
    public $Memory;

    /**
     * @var integer Number of GPUs.
     */
    public $Gpu;

    /**
     * @var integer Number of FPGAs.
     */
    public $Fpga;

    /**
     * @var integer Number of local storage blocks.
     */
    public $StorageBlock;

    /**
     * @var integer Number of NICs.
     */
    public $NetworkCard;

    /**
     * @var float Maximum bandwidth.
     */
    public $MaxBandwidth;

    /**
     * @var string CPU frequency.
     */
    public $Frequency;

    /**
     * @var string CPU type.
     */
    public $CpuModelName;

    /**
     * @var integer Packet forwarding rate.
     */
    public $Pps;

    /**
     * @var Externals Other information.
     */
    public $Externals;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @var array Price information about the reserved instance.
     */
    public $Prices;

    /**
     * @param string $InstanceType Instance type.
     * @param integer $Cpu Number of CPU cores.
     * @param integer $Memory Memory size.
     * @param integer $Gpu Number of GPUs.
     * @param integer $Fpga Number of FPGAs.
     * @param integer $StorageBlock Number of local storage blocks.
     * @param integer $NetworkCard Number of NICs.
     * @param float $MaxBandwidth Maximum bandwidth.
     * @param string $Frequency CPU frequency.
     * @param string $CpuModelName CPU type.
     * @param integer $Pps Packet forwarding rate.
     * @param Externals $Externals Other information.
     * @param string $Remark Remarks.
     * @param array $Prices Price information about the reserved instance.
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("Fpga",$param) and $param["Fpga"] !== null) {
            $this->Fpga = $param["Fpga"];
        }

        if (array_key_exists("StorageBlock",$param) and $param["StorageBlock"] !== null) {
            $this->StorageBlock = $param["StorageBlock"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("CpuModelName",$param) and $param["CpuModelName"] !== null) {
            $this->CpuModelName = $param["CpuModelName"];
        }

        if (array_key_exists("Pps",$param) and $param["Pps"] !== null) {
            $this->Pps = $param["Pps"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Prices",$param) and $param["Prices"] !== null) {
            $this->Prices = [];
            foreach ($param["Prices"] as $key => $value){
                $obj = new ReservedInstancePriceItem();
                $obj->deserialize($value);
                array_push($this->Prices, $obj);
            }
        }
    }
}
