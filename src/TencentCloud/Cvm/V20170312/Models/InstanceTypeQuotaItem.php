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
 * Describes instance model quota.
 *
 * @method string getZone() Obtain Availability zone.
 * @method void setZone(string $Zone) Set Availability zone.
 * @method string getInstanceType() Obtain Instance model.
 * @method void setInstanceType(string $InstanceType) Set Instance model.
 * @method string getInstanceChargeType() Obtain Instance billing plan. Valid values: <br><li>POSTPAID_BY_HOUR: pay after use. You are billed for your traffic by the hour.<br><li>`CDHPAID`: [`CDH`](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) billing plan. Applicable to `CDH` only, not the instances on the host.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing plan. Valid values: <br><li>POSTPAID_BY_HOUR: pay after use. You are billed for your traffic by the hour.<br><li>`CDHPAID`: [`CDH`](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) billing plan. Applicable to `CDH` only, not the instances on the host.
 * @method integer getNetworkCard() Obtain ENI type. For example, 25 represents an ENI of 25 GB.
 * @method void setNetworkCard(integer $NetworkCard) Set ENI type. For example, 25 represents an ENI of 25 GB.
 * @method Externals getExternals() Obtain Additional data.
Note: This field may return null, indicating that no valid value is found.
 * @method void setExternals(Externals $Externals) Set Additional data.
Note: This field may return null, indicating that no valid value is found.
 * @method integer getCpu() Obtain Number of CPU cores of an instance model.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores of an instance model.
 * @method integer getMemory() Obtain Instance memory capacity; unit: `GB`.
 * @method void setMemory(integer $Memory) Set Instance memory capacity; unit: `GB`.
 * @method string getInstanceFamily() Obtain Instance model family.
 * @method void setInstanceFamily(string $InstanceFamily) Set Instance model family.
 * @method string getTypeName() Obtain Model name.
 * @method void setTypeName(string $TypeName) Set Model name.
 * @method array getLocalDiskTypeList() Obtain List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
 * @method void setLocalDiskTypeList(array $LocalDiskTypeList) Set List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
 * @method string getStatus() Obtain Whether an instance is for sale. Valid values:<br><li>SELL: The instance is available for purchase.<br></li>SOLD_OUT: The instance has been sold out.
 * @method void setStatus(string $Status) Set Whether an instance is for sale. Valid values:<br><li>SELL: The instance is available for purchase.<br></li>SOLD_OUT: The instance has been sold out.
 * @method ItemPrice getPrice() Obtain Price of an instance model.
 * @method void setPrice(ItemPrice $Price) Set Price of an instance model.
 * @method string getSoldOutReason() Obtain Details of out-of-stock items
Note: this field may return null, indicating that no valid value is obtained.
 * @method void setSoldOutReason(string $SoldOutReason) Set Details of out-of-stock items
Note: this field may return null, indicating that no valid value is obtained.
 * @method float getInstanceBandwidth() Obtain Private network bandwidth, in Gbps.
 * @method void setInstanceBandwidth(float $InstanceBandwidth) Set Private network bandwidth, in Gbps.
 * @method integer getInstancePps() Obtain The max packet sending and receiving capability (in 10k PPS).
 * @method void setInstancePps(integer $InstancePps) Set The max packet sending and receiving capability (in 10k PPS).
 * @method integer getStorageBlockAmount() Obtain Number of local storage blocks.
 * @method void setStorageBlockAmount(integer $StorageBlockAmount) Set Number of local storage blocks.
 * @method string getCpuType() Obtain CPU type.
 * @method void setCpuType(string $CpuType) Set CPU type.
 * @method integer getGpu() Obtain Number of GPUs of the instance.
 * @method void setGpu(integer $Gpu) Set Number of GPUs of the instance.
 * @method integer getFpga() Obtain Number of FPGAs of the instance.
 * @method void setFpga(integer $Fpga) Set Number of FPGAs of the instance.
 * @method string getRemark() Obtain Descriptive information of the instance.
 * @method void setRemark(string $Remark) Set Descriptive information of the instance.
 * @method float getGpuCount() Obtain 
 * @method void setGpuCount(float $GpuCount) Set 
 * @method string getFrequency() Obtain CPU clock rate of the instance
 * @method void setFrequency(string $Frequency) Set CPU clock rate of the instance
 * @method string getStatusCategory() Obtain Inventory status. Valid values:
<li>EnoughStock: Inventory is sufficient.</li> 
<li>NormalStock: Supply is guaranteed.</li>
<li>UnderStock: Inventory is about to sell out.</li> 
<li>WithoutStock: Inventory is already sold out.</li>
Note: This field may return null, indicating that no valid value is found.
 * @method void setStatusCategory(string $StatusCategory) Set Inventory status. Valid values:
<li>EnoughStock: Inventory is sufficient.</li> 
<li>NormalStock: Supply is guaranteed.</li>
<li>UnderStock: Inventory is about to sell out.</li> 
<li>WithoutStock: Inventory is already sold out.</li>
Note: This field may return null, indicating that no valid value is found.
 */
class InstanceTypeQuotaItem extends AbstractModel
{
    /**
     * @var string Availability zone.
     */
    public $Zone;

    /**
     * @var string Instance model.
     */
    public $InstanceType;

    /**
     * @var string Instance billing plan. Valid values: <br><li>POSTPAID_BY_HOUR: pay after use. You are billed for your traffic by the hour.<br><li>`CDHPAID`: [`CDH`](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) billing plan. Applicable to `CDH` only, not the instances on the host.
     */
    public $InstanceChargeType;

    /**
     * @var integer ENI type. For example, 25 represents an ENI of 25 GB.
     */
    public $NetworkCard;

    /**
     * @var Externals Additional data.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Externals;

    /**
     * @var integer Number of CPU cores of an instance model.
     */
    public $Cpu;

    /**
     * @var integer Instance memory capacity; unit: `GB`.
     */
    public $Memory;

    /**
     * @var string Instance model family.
     */
    public $InstanceFamily;

    /**
     * @var string Model name.
     */
    public $TypeName;

    /**
     * @var array List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
     */
    public $LocalDiskTypeList;

    /**
     * @var string Whether an instance is for sale. Valid values:<br><li>SELL: The instance is available for purchase.<br></li>SOLD_OUT: The instance has been sold out.
     */
    public $Status;

    /**
     * @var ItemPrice Price of an instance model.
     */
    public $Price;

    /**
     * @var string Details of out-of-stock items
Note: this field may return null, indicating that no valid value is obtained.
     */
    public $SoldOutReason;

    /**
     * @var float Private network bandwidth, in Gbps.
     */
    public $InstanceBandwidth;

    /**
     * @var integer The max packet sending and receiving capability (in 10k PPS).
     */
    public $InstancePps;

    /**
     * @var integer Number of local storage blocks.
     */
    public $StorageBlockAmount;

    /**
     * @var string CPU type.
     */
    public $CpuType;

    /**
     * @var integer Number of GPUs of the instance.
     */
    public $Gpu;

    /**
     * @var integer Number of FPGAs of the instance.
     */
    public $Fpga;

    /**
     * @var string Descriptive information of the instance.
     */
    public $Remark;

    /**
     * @var float 
     */
    public $GpuCount;

    /**
     * @var string CPU clock rate of the instance
     */
    public $Frequency;

    /**
     * @var string Inventory status. Valid values:
<li>EnoughStock: Inventory is sufficient.</li> 
<li>NormalStock: Supply is guaranteed.</li>
<li>UnderStock: Inventory is about to sell out.</li> 
<li>WithoutStock: Inventory is already sold out.</li>
Note: This field may return null, indicating that no valid value is found.
     */
    public $StatusCategory;

    /**
     * @param string $Zone Availability zone.
     * @param string $InstanceType Instance model.
     * @param string $InstanceChargeType Instance billing plan. Valid values: <br><li>POSTPAID_BY_HOUR: pay after use. You are billed for your traffic by the hour.<br><li>`CDHPAID`: [`CDH`](https://intl.cloud.tencent.com/document/product/416?from_cn_redirect=1) billing plan. Applicable to `CDH` only, not the instances on the host.
     * @param integer $NetworkCard ENI type. For example, 25 represents an ENI of 25 GB.
     * @param Externals $Externals Additional data.
Note: This field may return null, indicating that no valid value is found.
     * @param integer $Cpu Number of CPU cores of an instance model.
     * @param integer $Memory Instance memory capacity; unit: `GB`.
     * @param string $InstanceFamily Instance model family.
     * @param string $TypeName Model name.
     * @param array $LocalDiskTypeList List of local disk specifications. If the parameter returns null, it means that local disks cannot be created.
     * @param string $Status Whether an instance is for sale. Valid values:<br><li>SELL: The instance is available for purchase.<br></li>SOLD_OUT: The instance has been sold out.
     * @param ItemPrice $Price Price of an instance model.
     * @param string $SoldOutReason Details of out-of-stock items
Note: this field may return null, indicating that no valid value is obtained.
     * @param float $InstanceBandwidth Private network bandwidth, in Gbps.
     * @param integer $InstancePps The max packet sending and receiving capability (in 10k PPS).
     * @param integer $StorageBlockAmount Number of local storage blocks.
     * @param string $CpuType CPU type.
     * @param integer $Gpu Number of GPUs of the instance.
     * @param integer $Fpga Number of FPGAs of the instance.
     * @param string $Remark Descriptive information of the instance.
     * @param float $GpuCount 
     * @param string $Frequency CPU clock rate of the instance
     * @param string $StatusCategory Inventory status. Valid values:
<li>EnoughStock: Inventory is sufficient.</li> 
<li>NormalStock: Supply is guaranteed.</li>
<li>UnderStock: Inventory is about to sell out.</li> 
<li>WithoutStock: Inventory is already sold out.</li>
Note: This field may return null, indicating that no valid value is found.
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

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("NetworkCard",$param) and $param["NetworkCard"] !== null) {
            $this->NetworkCard = $param["NetworkCard"];
        }

        if (array_key_exists("Externals",$param) and $param["Externals"] !== null) {
            $this->Externals = new Externals();
            $this->Externals->deserialize($param["Externals"]);
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

        if (array_key_exists("LocalDiskTypeList",$param) and $param["LocalDiskTypeList"] !== null) {
            $this->LocalDiskTypeList = [];
            foreach ($param["LocalDiskTypeList"] as $key => $value){
                $obj = new LocalDiskType();
                $obj->deserialize($value);
                array_push($this->LocalDiskTypeList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = new ItemPrice();
            $this->Price->deserialize($param["Price"]);
        }

        if (array_key_exists("SoldOutReason",$param) and $param["SoldOutReason"] !== null) {
            $this->SoldOutReason = $param["SoldOutReason"];
        }

        if (array_key_exists("InstanceBandwidth",$param) and $param["InstanceBandwidth"] !== null) {
            $this->InstanceBandwidth = $param["InstanceBandwidth"];
        }

        if (array_key_exists("InstancePps",$param) and $param["InstancePps"] !== null) {
            $this->InstancePps = $param["InstancePps"];
        }

        if (array_key_exists("StorageBlockAmount",$param) and $param["StorageBlockAmount"] !== null) {
            $this->StorageBlockAmount = $param["StorageBlockAmount"];
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

        if (array_key_exists("GpuCount",$param) and $param["GpuCount"] !== null) {
            $this->GpuCount = $param["GpuCount"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("StatusCategory",$param) and $param["StatusCategory"] !== null) {
            $this->StatusCategory = $param["StatusCategory"];
        }
    }
}
