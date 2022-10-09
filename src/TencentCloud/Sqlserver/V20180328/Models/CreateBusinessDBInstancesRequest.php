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
 * CreateBusinessDBInstances request structure.
 *
 * @method string getZone() Obtain Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
 * @method void setZone(string $Zone) Set Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
 * @method integer getMemory() Obtain Instance memory size in GB
 * @method void setMemory(integer $Memory) Set Instance memory size in GB
 * @method integer getStorage() Obtain Instance disk size in GB
 * @method void setStorage(integer $Storage) Set Instance disk size in GB
 * @method integer getCpu() Obtain The number of CPU cores of the instance you want to purchase.
 * @method void setCpu(integer $Cpu) Set The number of CPU cores of the instance you want to purchase.
 * @method string getMachineType() Obtain The host type of purchased instance. Valid values: `CLOUD_PREMIUM` (virtual machine with premium cloud disk), `CLOUD_SSD` (virtual machine with SSD).
 * @method void setMachineType(string $MachineType) Set The host type of purchased instance. Valid values: `CLOUD_PREMIUM` (virtual machine with premium cloud disk), `CLOUD_SSD` (virtual machine with SSD).
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getGoodsNum() Obtain Number of instances purchased this time. Default value: `1`.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances purchased this time. Default value: `1`.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of subnet-bdoe83fa. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of subnet-bdoe83fa. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method string getVpcId() Obtain VPC ID in the format of vpc-dsp338hz. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of vpc-dsp338hz. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
 * @method string getDBVersion() Obtain - Supported versions of business intelligence server. Valid values: `201603` (SQL Server 2016 Integration Services), `201703` (SQL Server 2017 Integration Services), `201903` (SQL Server 2019 Integration Services). Default value: `201903`. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region.
 * @method void setDBVersion(string $DBVersion) Set - Supported versions of business intelligence server. Valid values: `201603` (SQL Server 2016 Integration Services), `201703` (SQL Server 2017 Integration Services), `201903` (SQL Server 2019 Integration Services). Default value: `201903`. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region.
 * @method array getSecurityGroupList() Obtain Security group list, which contains security group IDs in the format of sg-xxx.
 * @method void setSecurityGroupList(array $SecurityGroupList) Set Security group list, which contains security group IDs in the format of sg-xxx.
 * @method array getWeekly() Obtain Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday).
 * @method void setWeekly(array $Weekly) Set Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday).
 * @method string getStartTime() Obtain Configuration of the maintenance window, which specifies the start time of daily maintenance.
 * @method void setStartTime(string $StartTime) Set Configuration of the maintenance window, which specifies the start time of daily maintenance.
 * @method integer getSpan() Obtain Configuration of the maintenance window, which specifies the maintenance duration in hours.
 * @method void setSpan(integer $Span) Set Configuration of the maintenance window, which specifies the maintenance duration in hours.
 * @method array getResourceTags() Obtain Tags associated with the instances to be created
 * @method void setResourceTags(array $ResourceTags) Set Tags associated with the instances to be created
 */
class CreateBusinessDBInstancesRequest extends AbstractModel
{
    /**
     * @var string Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
     */
    public $Zone;

    /**
     * @var integer Instance memory size in GB
     */
    public $Memory;

    /**
     * @var integer Instance disk size in GB
     */
    public $Storage;

    /**
     * @var integer The number of CPU cores of the instance you want to purchase.
     */
    public $Cpu;

    /**
     * @var string The host type of purchased instance. Valid values: `CLOUD_PREMIUM` (virtual machine with premium cloud disk), `CLOUD_SSD` (virtual machine with SSD).
     */
    public $MachineType;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Number of instances purchased this time. Default value: `1`.
     */
    public $GoodsNum;

    /**
     * @var string VPC subnet ID in the format of subnet-bdoe83fa. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     */
    public $SubnetId;

    /**
     * @var string VPC ID in the format of vpc-dsp338hz. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     */
    public $VpcId;

    /**
     * @var string - Supported versions of business intelligence server. Valid values: `201603` (SQL Server 2016 Integration Services), `201703` (SQL Server 2017 Integration Services), `201903` (SQL Server 2019 Integration Services). Default value: `201903`. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region.
     */
    public $DBVersion;

    /**
     * @var array Security group list, which contains security group IDs in the format of sg-xxx.
     */
    public $SecurityGroupList;

    /**
     * @var array Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday).
     */
    public $Weekly;

    /**
     * @var string Configuration of the maintenance window, which specifies the start time of daily maintenance.
     */
    public $StartTime;

    /**
     * @var integer Configuration of the maintenance window, which specifies the maintenance duration in hours.
     */
    public $Span;

    /**
     * @var array Tags associated with the instances to be created
     */
    public $ResourceTags;

    /**
     * @param string $Zone Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the`DescribeZones` API.
     * @param integer $Memory Instance memory size in GB
     * @param integer $Storage Instance disk size in GB
     * @param integer $Cpu The number of CPU cores of the instance you want to purchase.
     * @param string $MachineType The host type of purchased instance. Valid values: `CLOUD_PREMIUM` (virtual machine with premium cloud disk), `CLOUD_SSD` (virtual machine with SSD).
     * @param integer $ProjectId Project ID
     * @param integer $GoodsNum Number of instances purchased this time. Default value: `1`.
     * @param string $SubnetId VPC subnet ID in the format of subnet-bdoe83fa. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     * @param string $VpcId VPC ID in the format of vpc-dsp338hz. Both `SubnetId` and `VpcId` need to be set or unset at the same time.
     * @param string $DBVersion - Supported versions of business intelligence server. Valid values: `201603` (SQL Server 2016 Integration Services), `201703` (SQL Server 2017 Integration Services), `201903` (SQL Server 2019 Integration Services). Default value: `201903`. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region.
     * @param array $SecurityGroupList Security group list, which contains security group IDs in the format of sg-xxx.
     * @param array $Weekly Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: `1` (Monday), `2` (Tuesday), `3` (Wednesday), `4` (Thursday), `5` (Friday), `6` (Saturday), `7` (Sunday).
     * @param string $StartTime Configuration of the maintenance window, which specifies the start time of daily maintenance.
     * @param integer $Span Configuration of the maintenance window, which specifies the maintenance duration in hours.
     * @param array $ResourceTags Tags associated with the instances to be created
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("Weekly",$param) and $param["Weekly"] !== null) {
            $this->Weekly = $param["Weekly"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Span",$param) and $param["Span"] !== null) {
            $this->Span = $param["Span"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
