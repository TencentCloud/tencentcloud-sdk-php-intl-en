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
 * Node specifications type.
 *
 * @method string getInstanceType() Obtain <p>Specifications.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Specifications.</p>
 * @method integer getCpu() Obtain <p>4</p>
 * @method void setCpu(integer $Cpu) Set <p>4</p>
 * @method integer getMemory() Obtain <p>8, unit: GB.</p>
 * @method void setMemory(integer $Memory) Set <p>8, unit: GB.</p>
 * @method integer getOrder() Obtain <p>Sorting order. Smaller values come first.</p>
 * @method void setOrder(integer $Order) Set <p>Sorting order. Smaller values come first.</p>
 * @method integer getNum() Obtain <p>Quantity.</p>
 * @method void setNum(integer $Num) Set <p>Quantity.</p>
 * @method string getSellOutReason() Obtain <p>Sold-out reason.</p>
 * @method void setSellOutReason(string $SellOutReason) Set <p>Sold-out reason.</p>
 * @method array getSystemDisk() Obtain <p>System disk.</p>
 * @method void setSystemDisk(array $SystemDisk) Set <p>System disk.</p>
 * @method array getDataDisk() Obtain <p>Data disk.</p>
 * @method void setDataDisk(array $DataDisk) Set <p>Data disk.</p>
 * @method array getLocalDataDisk() Obtain <p>Local data disk.</p>
 * @method void setLocalDataDisk(array $LocalDataDisk) Set <p>Local data disk.</p>
 * @method string getSoldOutReason() Obtain <p>Sold-out reason.</p>
 * @method void setSoldOutReason(string $SoldOutReason) Set <p>Sold-out reason.</p>
 * @method string getInstanceFamily() Obtain <p>Instance family.</p>
 * @method void setInstanceFamily(string $InstanceFamily) Set <p>Instance family.</p>
 * @method string getNodeName() Obtain <p>Node name.</p>
 * @method void setNodeName(string $NodeName) Set <p>Node name.</p>
 * @method string getNodeType() Obtain <p>Node type.</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type.</p>
 * @method string getType() Obtain <p>Category.</p>
 * @method void setType(string $Type) Set <p>Category.</p>
 * @method string getTypeName() Obtain <p>Category name.</p>
 * @method void setTypeName(string $TypeName) Set <p>Category name.</p>
 * @method string getFamilyName() Obtain <p>Category classification.</p>
 * @method void setFamilyName(string $FamilyName) Set <p>Category classification.</p>
 * @method string getCpuType() Obtain <p>CPU type.</p>
 * @method void setCpuType(string $CpuType) Set <p>CPU type.</p>
 * @method string getRemark() Obtain <p>RunOut: sold out; Less: low inventory; Enough: sufficient inventory</p>
 * @method void setRemark(string $Remark) Set <p>RunOut: sold out; Less: low inventory; Enough: sufficient inventory</p>
 * @method float getOriginPrice() Obtain <p>Original price.</p>
 * @method void setOriginPrice(float $OriginPrice) Set <p>Original price.</p>
 * @method array getPrepaidUnderwritePeriods() Obtain <p>Purchase duration supported by instance types using the committed use billing mode.</p>
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) Set <p>Purchase duration supported by instance types using the committed use billing mode.</p>
 * @method string getGpuDesc() Obtain <p>GPU information.</p>
 * @method void setGpuDesc(string $GpuDesc) Set <p>GPU information.</p>
 * @method integer getQuotaNum() Obtain <p>Number of quotas.</p>
 * @method void setQuotaNum(integer $QuotaNum) Set <p>Number of quotas.</p>
 * @method string getQuotaUnit() Obtain <p>Quota unit.</p>
 * @method void setQuotaUnit(string $QuotaUnit) Set <p>Quota unit.</p>
 * @method boolean getNeedHpcClusterId() Obtain <p>Whether a high-performance computing cluster needs to be provided.</p>
 * @method void setNeedHpcClusterId(boolean $NeedHpcClusterId) Set <p>Whether a high-performance computing cluster needs to be provided.</p>
 * @method boolean getIsGpuInstance() Obtain <p>Whether it is a GPU instance type.</p>
 * @method void setIsGpuInstance(boolean $IsGpuInstance) Set <p>Whether it is a GPU instance type.</p>
 * @method string getGpuResourceKey() Obtain <p>GPU resource definition in the Kubernetes scenario.</p>
 * @method void setGpuResourceKey(string $GpuResourceKey) Set <p>GPU resource definition in the Kubernetes scenario.</p>
 * @method integer getGpuNum() Obtain <p>Number of GPU cards.</p>
 * @method void setGpuNum(integer $GpuNum) Set <p>Number of GPU cards.</p>
 */
class NodeSpecInstanceType extends AbstractModel
{
    /**
     * @var string <p>Specifications.</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>4</p>
     */
    public $Cpu;

    /**
     * @var integer <p>8, unit: GB.</p>
     */
    public $Memory;

    /**
     * @var integer <p>Sorting order. Smaller values come first.</p>
     */
    public $Order;

    /**
     * @var integer <p>Quantity.</p>
     */
    public $Num;

    /**
     * @var string <p>Sold-out reason.</p>
     */
    public $SellOutReason;

    /**
     * @var array <p>System disk.</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>Data disk.</p>
     */
    public $DataDisk;

    /**
     * @var array <p>Local data disk.</p>
     */
    public $LocalDataDisk;

    /**
     * @var string <p>Sold-out reason.</p>
     */
    public $SoldOutReason;

    /**
     * @var string <p>Instance family.</p>
     */
    public $InstanceFamily;

    /**
     * @var string <p>Node name.</p>
     */
    public $NodeName;

    /**
     * @var string <p>Node type.</p>
     */
    public $NodeType;

    /**
     * @var string <p>Category.</p>
     */
    public $Type;

    /**
     * @var string <p>Category name.</p>
     */
    public $TypeName;

    /**
     * @var string <p>Category classification.</p>
     */
    public $FamilyName;

    /**
     * @var string <p>CPU type.</p>
     */
    public $CpuType;

    /**
     * @var string <p>RunOut: sold out; Less: low inventory; Enough: sufficient inventory</p>
     */
    public $Remark;

    /**
     * @var float <p>Original price.</p>
     */
    public $OriginPrice;

    /**
     * @var array <p>Purchase duration supported by instance types using the committed use billing mode.</p>
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @var string <p>GPU information.</p>
     */
    public $GpuDesc;

    /**
     * @var integer <p>Number of quotas.</p>
     */
    public $QuotaNum;

    /**
     * @var string <p>Quota unit.</p>
     */
    public $QuotaUnit;

    /**
     * @var boolean <p>Whether a high-performance computing cluster needs to be provided.</p>
     */
    public $NeedHpcClusterId;

    /**
     * @var boolean <p>Whether it is a GPU instance type.</p>
     */
    public $IsGpuInstance;

    /**
     * @var string <p>GPU resource definition in the Kubernetes scenario.</p>
     */
    public $GpuResourceKey;

    /**
     * @var integer <p>Number of GPU cards.</p>
     */
    public $GpuNum;

    /**
     * @param string $InstanceType <p>Specifications.</p>
     * @param integer $Cpu <p>4</p>
     * @param integer $Memory <p>8, unit: GB.</p>
     * @param integer $Order <p>Sorting order. Smaller values come first.</p>
     * @param integer $Num <p>Quantity.</p>
     * @param string $SellOutReason <p>Sold-out reason.</p>
     * @param array $SystemDisk <p>System disk.</p>
     * @param array $DataDisk <p>Data disk.</p>
     * @param array $LocalDataDisk <p>Local data disk.</p>
     * @param string $SoldOutReason <p>Sold-out reason.</p>
     * @param string $InstanceFamily <p>Instance family.</p>
     * @param string $NodeName <p>Node name.</p>
     * @param string $NodeType <p>Node type.</p>
     * @param string $Type <p>Category.</p>
     * @param string $TypeName <p>Category name.</p>
     * @param string $FamilyName <p>Category classification.</p>
     * @param string $CpuType <p>CPU type.</p>
     * @param string $Remark <p>RunOut: sold out; Less: low inventory; Enough: sufficient inventory</p>
     * @param float $OriginPrice <p>Original price.</p>
     * @param array $PrepaidUnderwritePeriods <p>Purchase duration supported by instance types using the committed use billing mode.</p>
     * @param string $GpuDesc <p>GPU information.</p>
     * @param integer $QuotaNum <p>Number of quotas.</p>
     * @param string $QuotaUnit <p>Quota unit.</p>
     * @param boolean $NeedHpcClusterId <p>Whether a high-performance computing cluster needs to be provided.</p>
     * @param boolean $IsGpuInstance <p>Whether it is a GPU instance type.</p>
     * @param string $GpuResourceKey <p>GPU resource definition in the Kubernetes scenario.</p>
     * @param integer $GpuNum <p>Number of GPU cards.</p>
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("SellOutReason",$param) and $param["SellOutReason"] !== null) {
            $this->SellOutReason = $param["SellOutReason"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = [];
            foreach ($param["SystemDisk"] as $key => $value){
                $obj = new NodeSpecDisk();
                $obj->deserialize($value);
                array_push($this->SystemDisk, $obj);
            }
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = [];
            foreach ($param["DataDisk"] as $key => $value){
                $obj = new NodeSpecDisk();
                $obj->deserialize($value);
                array_push($this->DataDisk, $obj);
            }
        }

        if (array_key_exists("LocalDataDisk",$param) and $param["LocalDataDisk"] !== null) {
            $this->LocalDataDisk = [];
            foreach ($param["LocalDataDisk"] as $key => $value){
                $obj = new NodeSpecDisk();
                $obj->deserialize($value);
                array_push($this->LocalDataDisk, $obj);
            }
        }

        if (array_key_exists("SoldOutReason",$param) and $param["SoldOutReason"] !== null) {
            $this->SoldOutReason = $param["SoldOutReason"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("FamilyName",$param) and $param["FamilyName"] !== null) {
            $this->FamilyName = $param["FamilyName"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("OriginPrice",$param) and $param["OriginPrice"] !== null) {
            $this->OriginPrice = $param["OriginPrice"];
        }

        if (array_key_exists("PrepaidUnderwritePeriods",$param) and $param["PrepaidUnderwritePeriods"] !== null) {
            $this->PrepaidUnderwritePeriods = $param["PrepaidUnderwritePeriods"];
        }

        if (array_key_exists("GpuDesc",$param) and $param["GpuDesc"] !== null) {
            $this->GpuDesc = $param["GpuDesc"];
        }

        if (array_key_exists("QuotaNum",$param) and $param["QuotaNum"] !== null) {
            $this->QuotaNum = $param["QuotaNum"];
        }

        if (array_key_exists("QuotaUnit",$param) and $param["QuotaUnit"] !== null) {
            $this->QuotaUnit = $param["QuotaUnit"];
        }

        if (array_key_exists("NeedHpcClusterId",$param) and $param["NeedHpcClusterId"] !== null) {
            $this->NeedHpcClusterId = $param["NeedHpcClusterId"];
        }

        if (array_key_exists("IsGpuInstance",$param) and $param["IsGpuInstance"] !== null) {
            $this->IsGpuInstance = $param["IsGpuInstance"];
        }

        if (array_key_exists("GpuResourceKey",$param) and $param["GpuResourceKey"] !== null) {
            $this->GpuResourceKey = $param["GpuResourceKey"];
        }

        if (array_key_exists("GpuNum",$param) and $param["GpuNum"] !== null) {
            $this->GpuNum = $param["GpuNum"];
        }
    }
}
