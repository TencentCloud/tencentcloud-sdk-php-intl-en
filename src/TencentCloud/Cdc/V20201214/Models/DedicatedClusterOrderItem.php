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
 * CDC sub-order
 *
 * @method string getDedicatedClusterTypeId() Obtain CDC type id
 * @method void setDedicatedClusterTypeId(string $DedicatedClusterTypeId) Set CDC type id
 * @method array getSupportedStorageType() Obtain List of supported storage types
 * @method void setSupportedStorageType(array $SupportedStorageType) Set List of supported storage types
 * @method array getSupportedUplinkSpeed() Obtain Supported uplink switch transmission rate (GiB)
 * @method void setSupportedUplinkSpeed(array $SupportedUplinkSpeed) Set Supported uplink switch transmission rate (GiB)
 * @method array getSupportedInstanceFamily() Obtain List of supported instance families
 * @method void setSupportedInstanceFamily(array $SupportedInstanceFamily) Set List of supported instance families
 * @method integer getWeight() Obtain Floor weight capacity (KG)
 * @method void setWeight(integer $Weight) Set Floor weight capacity (KG)
 * @method float getPowerDraw() Obtain Power requirements (KW)
 * @method void setPowerDraw(float $PowerDraw) Set Power requirements (KW)
 * @method string getSubOrderStatus() Obtain Order status
 * @method void setSubOrderStatus(string $SubOrderStatus) Set Order status
 * @method string getCreateTime() Obtain Order creation time
 * @method void setCreateTime(string $CreateTime) Set Order creation time
 * @method string getSubOrderId() Obtain Sub-order ID
 * @method void setSubOrderId(string $SubOrderId) Set Sub-order ID
 * @method integer getCount() Obtain Number of linked cluster types
 * @method void setCount(integer $Count) Set Number of linked cluster types
 * @method string getName() Obtain Brief description of type
 * @method void setName(string $Name) Set Brief description of type
 * @method string getDescription() Obtain Detailed description of type
 * @method void setDescription(string $Description) Set Detailed description of type
 * @method integer getTotalCpu() Obtain Number of CPUs
 * @method void setTotalCpu(integer $TotalCpu) Set Number of CPUs
 * @method integer getTotalMem() Obtain Number of memories
 * @method void setTotalMem(integer $TotalMem) Set Number of memories
 * @method integer getTotalGpu() Obtain Total GPUs
 * @method void setTotalGpu(integer $TotalGpu) Set Total GPUs
 * @method string getTypeName() Obtain English type name
 * @method void setTypeName(string $TypeName) Set English type name
 * @method string getComputeFormat() Obtain Type display 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setComputeFormat(string $ComputeFormat) Set Type display 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getTypeFamily() Obtain Type family 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setTypeFamily(string $TypeFamily) Set Type family 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method integer getSubOrderPayStatus() Obtain 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setSubOrderPayStatus(integer $SubOrderPayStatus) Set 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 */
class DedicatedClusterOrderItem extends AbstractModel
{
    /**
     * @var string CDC type id
     */
    public $DedicatedClusterTypeId;

    /**
     * @var array List of supported storage types
     */
    public $SupportedStorageType;

    /**
     * @var array Supported uplink switch transmission rate (GiB)
     */
    public $SupportedUplinkSpeed;

    /**
     * @var array List of supported instance families
     */
    public $SupportedInstanceFamily;

    /**
     * @var integer Floor weight capacity (KG)
     */
    public $Weight;

    /**
     * @var float Power requirements (KW)
     */
    public $PowerDraw;

    /**
     * @var string Order status
     */
    public $SubOrderStatus;

    /**
     * @var string Order creation time
     */
    public $CreateTime;

    /**
     * @var string Sub-order ID
     */
    public $SubOrderId;

    /**
     * @var integer Number of linked cluster types
     */
    public $Count;

    /**
     * @var string Brief description of type
     */
    public $Name;

    /**
     * @var string Detailed description of type
     */
    public $Description;

    /**
     * @var integer Number of CPUs
     */
    public $TotalCpu;

    /**
     * @var integer Number of memories
     */
    public $TotalMem;

    /**
     * @var integer Total GPUs
     */
    public $TotalGpu;

    /**
     * @var string English type name
     */
    public $TypeName;

    /**
     * @var string Type display 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $ComputeFormat;

    /**
     * @var string Type family 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $TypeFamily;

    /**
     * @var integer 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $SubOrderPayStatus;

    /**
     * @param string $DedicatedClusterTypeId CDC type id
     * @param array $SupportedStorageType List of supported storage types
     * @param array $SupportedUplinkSpeed Supported uplink switch transmission rate (GiB)
     * @param array $SupportedInstanceFamily List of supported instance families
     * @param integer $Weight Floor weight capacity (KG)
     * @param float $PowerDraw Power requirements (KW)
     * @param string $SubOrderStatus Order status
     * @param string $CreateTime Order creation time
     * @param string $SubOrderId Sub-order ID
     * @param integer $Count Number of linked cluster types
     * @param string $Name Brief description of type
     * @param string $Description Detailed description of type
     * @param integer $TotalCpu Number of CPUs
     * @param integer $TotalMem Number of memories
     * @param integer $TotalGpu Total GPUs
     * @param string $TypeName English type name
     * @param string $ComputeFormat Type display 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $TypeFamily Type family 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param integer $SubOrderPayStatus 0 for unpaid, 1 for paid 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
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
        if (array_key_exists("DedicatedClusterTypeId",$param) and $param["DedicatedClusterTypeId"] !== null) {
            $this->DedicatedClusterTypeId = $param["DedicatedClusterTypeId"];
        }

        if (array_key_exists("SupportedStorageType",$param) and $param["SupportedStorageType"] !== null) {
            $this->SupportedStorageType = $param["SupportedStorageType"];
        }

        if (array_key_exists("SupportedUplinkSpeed",$param) and $param["SupportedUplinkSpeed"] !== null) {
            $this->SupportedUplinkSpeed = $param["SupportedUplinkSpeed"];
        }

        if (array_key_exists("SupportedInstanceFamily",$param) and $param["SupportedInstanceFamily"] !== null) {
            $this->SupportedInstanceFamily = $param["SupportedInstanceFamily"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PowerDraw",$param) and $param["PowerDraw"] !== null) {
            $this->PowerDraw = $param["PowerDraw"];
        }

        if (array_key_exists("SubOrderStatus",$param) and $param["SubOrderStatus"] !== null) {
            $this->SubOrderStatus = $param["SubOrderStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SubOrderId",$param) and $param["SubOrderId"] !== null) {
            $this->SubOrderId = $param["SubOrderId"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TotalCpu",$param) and $param["TotalCpu"] !== null) {
            $this->TotalCpu = $param["TotalCpu"];
        }

        if (array_key_exists("TotalMem",$param) and $param["TotalMem"] !== null) {
            $this->TotalMem = $param["TotalMem"];
        }

        if (array_key_exists("TotalGpu",$param) and $param["TotalGpu"] !== null) {
            $this->TotalGpu = $param["TotalGpu"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("ComputeFormat",$param) and $param["ComputeFormat"] !== null) {
            $this->ComputeFormat = $param["ComputeFormat"];
        }

        if (array_key_exists("TypeFamily",$param) and $param["TypeFamily"] !== null) {
            $this->TypeFamily = $param["TypeFamily"];
        }

        if (array_key_exists("SubOrderPayStatus",$param) and $param["SubOrderPayStatus"] !== null) {
            $this->SubOrderPayStatus = $param["SubOrderPayStatus"];
        }
    }
}
