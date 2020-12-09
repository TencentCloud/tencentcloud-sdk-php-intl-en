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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of purchasable specification for an instance
 *
 * @method integer getSpecId() Obtain Instance specification ID. The `SpecId` returned by `DescribeZones` together with the purchasable specification information returned by `DescribeProductConfig` can be used to find out what specifications can be purchased in a specified AZ
 * @method void setSpecId(integer $SpecId) Set Instance specification ID. The `SpecId` returned by `DescribeZones` together with the purchasable specification information returned by `DescribeProductConfig` can be used to find out what specifications can be purchased in a specified AZ
 * @method string getMachineType() Obtain Model ID
 * @method void setMachineType(string $MachineType) Set Model ID
 * @method string getMachineTypeName() Obtain Model name
 * @method void setMachineTypeName(string $MachineTypeName) Set Model name
 * @method string getVersion() Obtain Database version information. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise)
 * @method void setVersion(string $Version) Set Database version information. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise)
 * @method string getVersionName() Obtain Version name corresponding to the `Version` field
 * @method void setVersionName(string $VersionName) Set Version name corresponding to the `Version` field
 * @method integer getMemory() Obtain Memory size in GB
 * @method void setMemory(integer $Memory) Set Memory size in GB
 * @method integer getCPU() Obtain Number of CPU cores
 * @method void setCPU(integer $CPU) Set Number of CPU cores
 * @method integer getMinStorage() Obtain Minimum disk size under this specification in GB
 * @method void setMinStorage(integer $MinStorage) Set Minimum disk size under this specification in GB
 * @method integer getMaxStorage() Obtain Maximum disk size under this specification in GB
 * @method void setMaxStorage(integer $MaxStorage) Set Maximum disk size under this specification in GB
 * @method integer getQPS() Obtain QPS of this specification
 * @method void setQPS(integer $QPS) Set QPS of this specification
 * @method string getSuitInfo() Obtain Description of this specification
 * @method void setSuitInfo(string $SuitInfo) Set Description of this specification
 * @method integer getPid() Obtain Pid of this specification
 * @method void setPid(integer $Pid) Set Pid of this specification
 * @method array getPostPid() Obtain Pay-as-you-go Pid list corresponding to this specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPostPid(array $PostPid) Set Pay-as-you-go Pid list corresponding to this specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPayModeStatus() Obtain Billing mode under this specification. POST: pay-as-you-go
 * @method void setPayModeStatus(string $PayModeStatus) Set Billing mode under this specification. POST: pay-as-you-go
 * @method string getInstanceType() Obtain Instance type. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
 * @method void setInstanceType(string $InstanceType) Set Instance type. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
 * @method string getMultiZonesStatus() Obtain Whether multi-AZ deployment is supported. Valid values: MultiZones (only multi-AZ deployment is supported), SameZones (only single-AZ deployment is supported), ALL (both deployments are supported)
 * @method void setMultiZonesStatus(string $MultiZonesStatus) Set Whether multi-AZ deployment is supported. Valid values: MultiZones (only multi-AZ deployment is supported), SameZones (only single-AZ deployment is supported), ALL (both deployments are supported)
 */
class SpecInfo extends AbstractModel
{
    /**
     * @var integer Instance specification ID. The `SpecId` returned by `DescribeZones` together with the purchasable specification information returned by `DescribeProductConfig` can be used to find out what specifications can be purchased in a specified AZ
     */
    public $SpecId;

    /**
     * @var string Model ID
     */
    public $MachineType;

    /**
     * @var string Model name
     */
    public $MachineTypeName;

    /**
     * @var string Database version information. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise)
     */
    public $Version;

    /**
     * @var string Version name corresponding to the `Version` field
     */
    public $VersionName;

    /**
     * @var integer Memory size in GB
     */
    public $Memory;

    /**
     * @var integer Number of CPU cores
     */
    public $CPU;

    /**
     * @var integer Minimum disk size under this specification in GB
     */
    public $MinStorage;

    /**
     * @var integer Maximum disk size under this specification in GB
     */
    public $MaxStorage;

    /**
     * @var integer QPS of this specification
     */
    public $QPS;

    /**
     * @var string Description of this specification
     */
    public $SuitInfo;

    /**
     * @var integer Pid of this specification
     */
    public $Pid;

    /**
     * @var array Pay-as-you-go Pid list corresponding to this specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PostPid;

    /**
     * @var string Billing mode under this specification. POST: pay-as-you-go
     */
    public $PayModeStatus;

    /**
     * @var string Instance type. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
     */
    public $InstanceType;

    /**
     * @var string Whether multi-AZ deployment is supported. Valid values: MultiZones (only multi-AZ deployment is supported), SameZones (only single-AZ deployment is supported), ALL (both deployments are supported)
     */
    public $MultiZonesStatus;

    /**
     * @param integer $SpecId Instance specification ID. The `SpecId` returned by `DescribeZones` together with the purchasable specification information returned by `DescribeProductConfig` can be used to find out what specifications can be purchased in a specified AZ
     * @param string $MachineType Model ID
     * @param string $MachineTypeName Model name
     * @param string $Version Database version information. Valid values: 2008R2 (SQL Server 2008 Enterprise), 2012SP3 (SQL Server 2012 Enterprise), 2016SP1 (SQL Server 2016 Enterprise), 201602 (SQL Server 2016 Standard), 2017 (SQL Server 2017 Enterprise)
     * @param string $VersionName Version name corresponding to the `Version` field
     * @param integer $Memory Memory size in GB
     * @param integer $CPU Number of CPU cores
     * @param integer $MinStorage Minimum disk size under this specification in GB
     * @param integer $MaxStorage Maximum disk size under this specification in GB
     * @param integer $QPS QPS of this specification
     * @param string $SuitInfo Description of this specification
     * @param integer $Pid Pid of this specification
     * @param array $PostPid Pay-as-you-go Pid list corresponding to this specification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PayModeStatus Billing mode under this specification. POST: pay-as-you-go
     * @param string $InstanceType Instance type. Valid values: HA (High-Availability Edition, including dual-server high availability and AlwaysOn cluster), RO (read-only replica), SI (Basic Edition)
     * @param string $MultiZonesStatus Whether multi-AZ deployment is supported. Valid values: MultiZones (only multi-AZ deployment is supported), SameZones (only single-AZ deployment is supported), ALL (both deployments are supported)
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
        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("MachineTypeName",$param) and $param["MachineTypeName"] !== null) {
            $this->MachineTypeName = $param["MachineTypeName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = $param["QPS"];
        }

        if (array_key_exists("SuitInfo",$param) and $param["SuitInfo"] !== null) {
            $this->SuitInfo = $param["SuitInfo"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PostPid",$param) and $param["PostPid"] !== null) {
            $this->PostPid = $param["PostPid"];
        }

        if (array_key_exists("PayModeStatus",$param) and $param["PayModeStatus"] !== null) {
            $this->PayModeStatus = $param["PayModeStatus"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MultiZonesStatus",$param) and $param["MultiZonesStatus"] !== null) {
            $this->MultiZonesStatus = $param["MultiZonesStatus"];
        }
    }
}
