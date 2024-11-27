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
 * CDC configurations
 *
 * @method string getDedicatedClusterTypeId() Obtain Configuration id
 * @method void setDedicatedClusterTypeId(string $DedicatedClusterTypeId) Set Configuration id
 * @method string getDescription() Obtain Configuration description, corresponding to description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method void setDescription(string $Description) Set Configuration description, corresponding to description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
 * @method string getName() Obtain Configuration name, corresponding to computing resource type
 * @method void setName(string $Name) Set Configuration name, corresponding to computing resource type
 * @method string getCreateTime() Obtain Configuration creation time
 * @method void setCreateTime(string $CreateTime) Set Configuration creation time
 * @method array getSupportedStorageType() Obtain List of supported storage types
 * @method void setSupportedStorageType(array $SupportedStorageType) Set List of supported storage types
 * @method array getSupportedUplinkGiB() Obtain Supported uplink switch transmission rate
 * @method void setSupportedUplinkGiB(array $SupportedUplinkGiB) Set Supported uplink switch transmission rate
 * @method array getSupportedInstanceFamily() Obtain List of supported instance families
 * @method void setSupportedInstanceFamily(array $SupportedInstanceFamily) Set List of supported instance families
 * @method integer getWeight() Obtain Floor weight capacity (KG)
 * @method void setWeight(integer $Weight) Set Floor weight capacity (KG)
 * @method float getPowerDrawKva() Obtain Power requirements (KW)
 * @method void setPowerDrawKva(float $PowerDrawKva) Set Power requirements (KW)
 * @method string getComputeFormatDesc() Obtain Displays the details of computing resource types, and does not display resources such as storage; corresponding to type
 * @method void setComputeFormatDesc(string $ComputeFormatDesc) Set Displays the details of computing resource types, and does not display resources such as storage; corresponding to type
 */
class DedicatedClusterType extends AbstractModel
{
    /**
     * @var string Configuration id
     */
    public $DedicatedClusterTypeId;

    /**
     * @var string Configuration description, corresponding to description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     */
    public $Description;

    /**
     * @var string Configuration name, corresponding to computing resource type
     */
    public $Name;

    /**
     * @var string Configuration creation time
     */
    public $CreateTime;

    /**
     * @var array List of supported storage types
     */
    public $SupportedStorageType;

    /**
     * @var array Supported uplink switch transmission rate
     */
    public $SupportedUplinkGiB;

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
    public $PowerDrawKva;

    /**
     * @var string Displays the details of computing resource types, and does not display resources such as storage; corresponding to type
     */
    public $ComputeFormatDesc;

    /**
     * @param string $DedicatedClusterTypeId Configuration id
     * @param string $Description Configuration description, corresponding to description 
Note: The returned value of this field may be null, indicating that no valid value is obtained.
     * @param string $Name Configuration name, corresponding to computing resource type
     * @param string $CreateTime Configuration creation time
     * @param array $SupportedStorageType List of supported storage types
     * @param array $SupportedUplinkGiB Supported uplink switch transmission rate
     * @param array $SupportedInstanceFamily List of supported instance families
     * @param integer $Weight Floor weight capacity (KG)
     * @param float $PowerDrawKva Power requirements (KW)
     * @param string $ComputeFormatDesc Displays the details of computing resource types, and does not display resources such as storage; corresponding to type
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SupportedStorageType",$param) and $param["SupportedStorageType"] !== null) {
            $this->SupportedStorageType = $param["SupportedStorageType"];
        }

        if (array_key_exists("SupportedUplinkGiB",$param) and $param["SupportedUplinkGiB"] !== null) {
            $this->SupportedUplinkGiB = $param["SupportedUplinkGiB"];
        }

        if (array_key_exists("SupportedInstanceFamily",$param) and $param["SupportedInstanceFamily"] !== null) {
            $this->SupportedInstanceFamily = $param["SupportedInstanceFamily"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("PowerDrawKva",$param) and $param["PowerDrawKva"] !== null) {
            $this->PowerDrawKva = $param["PowerDrawKva"];
        }

        if (array_key_exists("ComputeFormatDesc",$param) and $param["ComputeFormatDesc"] !== null) {
            $this->ComputeFormatDesc = $param["ComputeFormatDesc"];
        }
    }
}
