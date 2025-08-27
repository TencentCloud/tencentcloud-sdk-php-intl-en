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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceTradeParameter request structure.
 *
 * @method string getZone() Obtain Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the `DescribeZones` API.
 * @method void setZone(string $Zone) Set Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the `DescribeZones` API.
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getMemory() Obtain Instance memory size in GB.
 * @method void setMemory(integer $Memory) Set Instance memory size in GB.
 * @method integer getStorage() Obtain Instance storage capacity in GB.
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB.
 * @method string getInstanceType() Obtain Type of purchased instances. HA: high-availability edition (including dual-server high-availability edition and Always On cluster edition); RO: read-only replica edition; SI: single-node edition; BI: business intelligence edition; cvmHA: new high-availability edition; cvmRO: new read-only replica edition; MultiHA: multi-node edition; cvmMultiHA: multi-node cloud disk edition.
 * @method void setInstanceType(string $InstanceType) Set Type of purchased instances. HA: high-availability edition (including dual-server high-availability edition and Always On cluster edition); RO: read-only replica edition; SI: single-node edition; BI: business intelligence edition; cvmHA: new high-availability edition; cvmRO: new read-only replica edition; MultiHA: multi-node edition; cvmMultiHA: multi-node cloud disk edition.
 * @method string getMachineType() Obtain Host disk type of purchased instances. CLOUD_HSSD - Enhanced SSD for CVMs, CLOUD_TSSD - Tremendous SSD for CVMs, CLOUD_BSSD - Balanced SSD for CVMs. 
 * @method void setMachineType(string $MachineType) Set Host disk type of purchased instances. CLOUD_HSSD - Enhanced SSD for CVMs, CLOUD_TSSD - Tremendous SSD for CVMs, CLOUD_BSSD - Balanced SSD for CVMs. 
 * @method string getInstanceChargeType() Obtain Billing mode. Valid value: POSTPAID (pay-as-you-go).
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Billing mode. Valid value: POSTPAID (pay-as-you-go).
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method integer getGoodsNum() Obtain Number of instances purchased this time. Default value: 1. Maximum value: 10.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of instances purchased this time. Default value: 1. Maximum value: 10.
 * @method string getDBVersion() Obtain SQL Server version. Valid values: `2008R2` (SQL Server 2008 R2 Enterprise), `2012SP3` (SQL Server 2012 Enterprise), `201202` (SQL Server 2012 Standard), `2014SP2` (SQL Server 2014 Enterprise), 201402 (SQL Server 2014 Standard), `2016SP1` (SQL Server 2016 Enterprise), `201602` (SQL Server 2016 Standard), `2017` (SQL Server 2017 Enterprise), `201702` (SQL Server 2017 Standard), `2019` (SQL Server 2019 Enterprise), `201902` (SQL Server 2019 Standard). Default value: `2008R2`. The available version varies by region, and you can pull the version information by calling the `DescribeProductConfig` API.
 * @method void setDBVersion(string $DBVersion) Set SQL Server version. Valid values: `2008R2` (SQL Server 2008 R2 Enterprise), `2012SP3` (SQL Server 2012 Enterprise), `201202` (SQL Server 2012 Standard), `2014SP2` (SQL Server 2014 Enterprise), 201402 (SQL Server 2014 Standard), `2016SP1` (SQL Server 2016 Enterprise), `201602` (SQL Server 2016 Standard), `2017` (SQL Server 2017 Enterprise), `201702` (SQL Server 2017 Standard), `2019` (SQL Server 2019 Enterprise), `201902` (SQL Server 2019 Standard). Default value: `2008R2`. The available version varies by region, and you can pull the version information by calling the `DescribeProductConfig` API.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of subnet-bdoe83fa. `SubnetId` and `VpcId` should be set or ignored simultaneously.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of subnet-bdoe83fa. `SubnetId` and `VpcId` should be set or ignored simultaneously.
 * @method string getVpcId() Obtain VPC ID in the format of vpc-dsp338hz. `SubnetId` and `VpcId` should be set or ignored simultaneously.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of vpc-dsp338hz. `SubnetId` and `VpcId` should be set or ignored simultaneously.
 * @method integer getPeriod() Obtain Length of purchase of instance. The default value is 1, indicating one month. The value cannot exceed 48.
 * @method void setPeriod(integer $Period) Set Length of purchase of instance. The default value is 1, indicating one month. The value cannot exceed 48.
 * @method array getSecurityGroupList() Obtain Security group list, which contains security group IDs in the format of sg-xxx.
 * @method void setSecurityGroupList(array $SecurityGroupList) Set Security group list, which contains security group IDs in the format of sg-xxx.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0: normal renewal, 1: auto-renewal. Default value: 1.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0: normal renewal, 1: auto-renewal. Default value: 1.
 * @method array getWeekly() Obtain Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: 1 (Monday), 2 (Tuesday), 3 (Wednesday), 4 (Thursday), 5 (Friday), 6 (Saturday), 7 (Sunday).
 * @method void setWeekly(array $Weekly) Set Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: 1 (Monday), 2 (Tuesday), 3 (Wednesday), 4 (Thursday), 5 (Friday), 6 (Saturday), 7 (Sunday).
 * @method string getStartTime() Obtain Configuration of the maintenance window, which specifies the start time of daily maintenance.
 * @method void setStartTime(string $StartTime) Set Configuration of the maintenance window, which specifies the start time of daily maintenance.
 * @method integer getSpan() Obtain Configuration of the maintenance window, which specifies the maintenance duration in hours.
 * @method void setSpan(integer $Span) Set Configuration of the maintenance window, which specifies the maintenance duration in hours.
 * @method boolean getMultiZones() Obtain Whether to deploy across availability zones. Default value: false.
 * @method void setMultiZones(boolean $MultiZones) Set Whether to deploy across availability zones. Default value: false.
 * @method array getResourceTags() Obtain Tags associated with the instances to be created.
 * @method void setResourceTags(array $ResourceTags) Set Tags associated with the instances to be created.
 * @method string getTimeZone() Obtain System time zone. Default value: `China Standard Time`.
 * @method void setTimeZone(string $TimeZone) Set System time zone. Default value: `China Standard Time`.
 * @method string getCollation() Obtain Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
 * @method void setCollation(string $Collation) Set Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
 * @method boolean getMultiNodes() Obtain Whether it is a multi-node architecture instance. Default value: `false`.
 * @method void setMultiNodes(boolean $MultiNodes) Set Whether it is a multi-node architecture instance. Default value: `false`.
 * @method array getDrZones() Obtain The zone in which the standby node is available. Default is empty. If it is a multi-node architecture, it must be transmitted. When MultiNodes = true, the availability zones of the primary and standby nodes cannot all be the same. The minimum number of availability zones for the standby nodes is 2, and the maximum is 5.
 * @method void setDrZones(array $DrZones) Set The zone in which the standby node is available. Default is empty. If it is a multi-node architecture, it must be transmitted. When MultiNodes = true, the availability zones of the primary and standby nodes cannot all be the same. The minimum number of availability zones for the standby nodes is 2, and the maximum is 5.
 */
class DescribeInstanceTradeParameterRequest extends AbstractModel
{
    /**
     * @var string Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the `DescribeZones` API.
     */
    public $Zone;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Instance memory size in GB.
     */
    public $Memory;

    /**
     * @var integer Instance storage capacity in GB.
     */
    public $Storage;

    /**
     * @var string Type of purchased instances. HA: high-availability edition (including dual-server high-availability edition and Always On cluster edition); RO: read-only replica edition; SI: single-node edition; BI: business intelligence edition; cvmHA: new high-availability edition; cvmRO: new read-only replica edition; MultiHA: multi-node edition; cvmMultiHA: multi-node cloud disk edition.
     */
    public $InstanceType;

    /**
     * @var string Host disk type of purchased instances. CLOUD_HSSD - Enhanced SSD for CVMs, CLOUD_TSSD - Tremendous SSD for CVMs, CLOUD_BSSD - Balanced SSD for CVMs. 
     */
    public $MachineType;

    /**
     * @var string Billing mode. Valid value: POSTPAID (pay-as-you-go).
     */
    public $InstanceChargeType;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var integer Number of instances purchased this time. Default value: 1. Maximum value: 10.
     */
    public $GoodsNum;

    /**
     * @var string SQL Server version. Valid values: `2008R2` (SQL Server 2008 R2 Enterprise), `2012SP3` (SQL Server 2012 Enterprise), `201202` (SQL Server 2012 Standard), `2014SP2` (SQL Server 2014 Enterprise), 201402 (SQL Server 2014 Standard), `2016SP1` (SQL Server 2016 Enterprise), `201602` (SQL Server 2016 Standard), `2017` (SQL Server 2017 Enterprise), `201702` (SQL Server 2017 Standard), `2019` (SQL Server 2019 Enterprise), `201902` (SQL Server 2019 Standard). Default value: `2008R2`. The available version varies by region, and you can pull the version information by calling the `DescribeProductConfig` API.
     */
    public $DBVersion;

    /**
     * @var string VPC subnet ID in the format of subnet-bdoe83fa. `SubnetId` and `VpcId` should be set or ignored simultaneously.
     */
    public $SubnetId;

    /**
     * @var string VPC ID in the format of vpc-dsp338hz. `SubnetId` and `VpcId` should be set or ignored simultaneously.
     */
    public $VpcId;

    /**
     * @var integer Length of purchase of instance. The default value is 1, indicating one month. The value cannot exceed 48.
     */
    public $Period;

    /**
     * @var array Security group list, which contains security group IDs in the format of sg-xxx.
     */
    public $SecurityGroupList;

    /**
     * @var integer Auto-renewal flag. 0: normal renewal, 1: auto-renewal. Default value: 1.
     */
    public $AutoRenewFlag;

    /**
     * @var array Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: 1 (Monday), 2 (Tuesday), 3 (Wednesday), 4 (Thursday), 5 (Friday), 6 (Saturday), 7 (Sunday).
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
     * @var boolean Whether to deploy across availability zones. Default value: false.
     */
    public $MultiZones;

    /**
     * @var array Tags associated with the instances to be created.
     */
    public $ResourceTags;

    /**
     * @var string System time zone. Default value: `China Standard Time`.
     */
    public $TimeZone;

    /**
     * @var string Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
     */
    public $Collation;

    /**
     * @var boolean Whether it is a multi-node architecture instance. Default value: `false`.
     */
    public $MultiNodes;

    /**
     * @var array The zone in which the standby node is available. Default is empty. If it is a multi-node architecture, it must be transmitted. When MultiNodes = true, the availability zones of the primary and standby nodes cannot all be the same. The minimum number of availability zones for the standby nodes is 2, and the maximum is 5.
     */
    public $DrZones;

    /**
     * @param string $Zone Instance AZ, such as ap-guangzhou-1 (Guangzhou Zone 1). Purchasable AZs for an instance can be obtained through the `DescribeZones` API.
     * @param integer $Cpu Number of CPU cores.
     * @param integer $Memory Instance memory size in GB.
     * @param integer $Storage Instance storage capacity in GB.
     * @param string $InstanceType Type of purchased instances. HA: high-availability edition (including dual-server high-availability edition and Always On cluster edition); RO: read-only replica edition; SI: single-node edition; BI: business intelligence edition; cvmHA: new high-availability edition; cvmRO: new read-only replica edition; MultiHA: multi-node edition; cvmMultiHA: multi-node cloud disk edition.
     * @param string $MachineType Host disk type of purchased instances. CLOUD_HSSD - Enhanced SSD for CVMs, CLOUD_TSSD - Tremendous SSD for CVMs, CLOUD_BSSD - Balanced SSD for CVMs. 
     * @param string $InstanceChargeType Billing mode. Valid value: POSTPAID (pay-as-you-go).
     * @param integer $ProjectId Project ID.
     * @param integer $GoodsNum Number of instances purchased this time. Default value: 1. Maximum value: 10.
     * @param string $DBVersion SQL Server version. Valid values: `2008R2` (SQL Server 2008 R2 Enterprise), `2012SP3` (SQL Server 2012 Enterprise), `201202` (SQL Server 2012 Standard), `2014SP2` (SQL Server 2014 Enterprise), 201402 (SQL Server 2014 Standard), `2016SP1` (SQL Server 2016 Enterprise), `201602` (SQL Server 2016 Standard), `2017` (SQL Server 2017 Enterprise), `201702` (SQL Server 2017 Standard), `2019` (SQL Server 2019 Enterprise), `201902` (SQL Server 2019 Standard). Default value: `2008R2`. The available version varies by region, and you can pull the version information by calling the `DescribeProductConfig` API.
     * @param string $SubnetId VPC subnet ID in the format of subnet-bdoe83fa. `SubnetId` and `VpcId` should be set or ignored simultaneously.
     * @param string $VpcId VPC ID in the format of vpc-dsp338hz. `SubnetId` and `VpcId` should be set or ignored simultaneously.
     * @param integer $Period Length of purchase of instance. The default value is 1, indicating one month. The value cannot exceed 48.
     * @param array $SecurityGroupList Security group list, which contains security group IDs in the format of sg-xxx.
     * @param integer $AutoRenewFlag Auto-renewal flag. 0: normal renewal, 1: auto-renewal. Default value: 1.
     * @param array $Weekly Configuration of the maintenance window, which specifies the day of the week when maintenance can be performed. Valid values: 1 (Monday), 2 (Tuesday), 3 (Wednesday), 4 (Thursday), 5 (Friday), 6 (Saturday), 7 (Sunday).
     * @param string $StartTime Configuration of the maintenance window, which specifies the start time of daily maintenance.
     * @param integer $Span Configuration of the maintenance window, which specifies the maintenance duration in hours.
     * @param boolean $MultiZones Whether to deploy across availability zones. Default value: false.
     * @param array $ResourceTags Tags associated with the instances to be created.
     * @param string $TimeZone System time zone. Default value: `China Standard Time`.
     * @param string $Collation Collation of system character sets. Default value: `Chinese_PRC_CI_AS`.
     * @param boolean $MultiNodes Whether it is a multi-node architecture instance. Default value: `false`.
     * @param array $DrZones The zone in which the standby node is available. Default is empty. If it is a multi-node architecture, it must be transmitted. When MultiNodes = true, the availability zones of the primary and standby nodes cannot all be the same. The minimum number of availability zones for the standby nodes is 2, and the maximum is 5.
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupList",$param) and $param["SecurityGroupList"] !== null) {
            $this->SecurityGroupList = $param["SecurityGroupList"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
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

        if (array_key_exists("MultiZones",$param) and $param["MultiZones"] !== null) {
            $this->MultiZones = $param["MultiZones"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("Collation",$param) and $param["Collation"] !== null) {
            $this->Collation = $param["Collation"];
        }

        if (array_key_exists("MultiNodes",$param) and $param["MultiNodes"] !== null) {
            $this->MultiNodes = $param["MultiNodes"];
        }

        if (array_key_exists("DrZones",$param) and $param["DrZones"] !== null) {
            $this->DrZones = $param["DrZones"];
        }
    }
}
