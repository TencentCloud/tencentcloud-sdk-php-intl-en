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
 * @method string getInstanceType() Obtain Specifications.
 * @method void setInstanceType(string $InstanceType) Set Specifications.
 * @method integer getCpu() Obtain 4
 * @method void setCpu(integer $Cpu) Set 4
 * @method integer getMemory() Obtain 8, in GB.
 * @method void setMemory(integer $Memory) Set 8, in GB.
 * @method integer getOrder() Obtain Order, with the smaller coming first.
 * @method void setOrder(integer $Order) Set Order, with the smaller coming first.
 * @method integer getNum() Obtain Quantity.
 * @method void setNum(integer $Num) Set Quantity.
 * @method string getSellOutReason() Obtain Reasons for running out of stock.
 * @method void setSellOutReason(string $SellOutReason) Set Reasons for running out of stock.
 * @method array getSystemDisk() Obtain System disk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSystemDisk(array $SystemDisk) Set System disk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDataDisk() Obtain Data disk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataDisk(array $DataDisk) Set Data disk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLocalDataDisk() Obtain Local data disk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocalDataDisk(array $LocalDataDisk) Set Local data disk.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSoldOutReason() Obtain Reasons for running out of stock.
 * @method void setSoldOutReason(string $SoldOutReason) Set Reasons for running out of stock.
 * @method string getInstanceFamily() Obtain Model category.
 * @method void setInstanceFamily(string $InstanceFamily) Set Model category.
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method string getType() Obtain Category.
 * @method void setType(string $Type) Set Category.
 * @method string getTypeName() Obtain Category name.
 * @method void setTypeName(string $TypeName) Set Category name.
 * @method string getFamilyName() Obtain Category classification.
 * @method void setFamilyName(string $FamilyName) Set Category classification.
 * @method string getCpuType() Obtain CPU type.
 * @method void setCpuType(string $CpuType) Set CPU type.
 * @method string getRemark() Obtain RunOut (denoting running out of stock), Less (denoting low inventory), and Enough (denoting sufficient).
 * @method void setRemark(string $Remark) Set RunOut (denoting running out of stock), Less (denoting low inventory), and Enough (denoting sufficient).
 * @method float getOriginPrice() Obtain Original price.
 * @method void setOriginPrice(float $OriginPrice) Set Original price.
 * @method array getPrepaidUnderwritePeriods() Obtain Supported purchase terms for committed use billing models.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrepaidUnderwritePeriods(array $PrepaidUnderwritePeriods) Set Supported purchase terms for committed use billing models.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGpuDesc() Obtain GPU information.
 * @method void setGpuDesc(string $GpuDesc) Set GPU information.
 */
class NodeSpecInstanceType extends AbstractModel
{
    /**
     * @var string Specifications.
     */
    public $InstanceType;

    /**
     * @var integer 4
     */
    public $Cpu;

    /**
     * @var integer 8, in GB.
     */
    public $Memory;

    /**
     * @var integer Order, with the smaller coming first.
     */
    public $Order;

    /**
     * @var integer Quantity.
     */
    public $Num;

    /**
     * @var string Reasons for running out of stock.
     */
    public $SellOutReason;

    /**
     * @var array System disk.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SystemDisk;

    /**
     * @var array Data disk.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataDisk;

    /**
     * @var array Local data disk.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocalDataDisk;

    /**
     * @var string Reasons for running out of stock.
     */
    public $SoldOutReason;

    /**
     * @var string Model category.
     */
    public $InstanceFamily;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var string Category.
     */
    public $Type;

    /**
     * @var string Category name.
     */
    public $TypeName;

    /**
     * @var string Category classification.
     */
    public $FamilyName;

    /**
     * @var string CPU type.
     */
    public $CpuType;

    /**
     * @var string RunOut (denoting running out of stock), Less (denoting low inventory), and Enough (denoting sufficient).
     */
    public $Remark;

    /**
     * @var float Original price.
     */
    public $OriginPrice;

    /**
     * @var array Supported purchase terms for committed use billing models.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrepaidUnderwritePeriods;

    /**
     * @var string GPU information.
     */
    public $GpuDesc;

    /**
     * @param string $InstanceType Specifications.
     * @param integer $Cpu 4
     * @param integer $Memory 8, in GB.
     * @param integer $Order Order, with the smaller coming first.
     * @param integer $Num Quantity.
     * @param string $SellOutReason Reasons for running out of stock.
     * @param array $SystemDisk System disk.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DataDisk Data disk.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LocalDataDisk Local data disk.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SoldOutReason Reasons for running out of stock.
     * @param string $InstanceFamily Model category.
     * @param string $NodeName Node name.
     * @param string $NodeType Node type.
     * @param string $Type Category.
     * @param string $TypeName Category name.
     * @param string $FamilyName Category classification.
     * @param string $CpuType CPU type.
     * @param string $Remark RunOut (denoting running out of stock), Less (denoting low inventory), and Enough (denoting sufficient).
     * @param float $OriginPrice Original price.
     * @param array $PrepaidUnderwritePeriods Supported purchase terms for committed use billing models.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GpuDesc GPU information.
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
    }
}
