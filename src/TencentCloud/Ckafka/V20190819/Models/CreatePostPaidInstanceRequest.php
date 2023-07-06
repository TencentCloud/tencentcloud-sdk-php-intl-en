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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePostPaidInstance request structure.
 *
 * @method string getInstanceName() Obtain Instance name, which is a string of up to 64 letters, digits, and hyphens (-). It must start with a letter.
 * @method void setInstanceName(string $InstanceName) Set Instance name, which is a string of up to 64 letters, digits, and hyphens (-). It must start with a letter.
 * @method string getVpcId() Obtain ID of the VPC where the default access point of the created instance resides.  This parameter is required as instances cannot be created in the classic network currently.
 * @method void setVpcId(string $VpcId) Set ID of the VPC where the default access point of the created instance resides.  This parameter is required as instances cannot be created in the classic network currently.
 * @method string getSubnetId() Obtain ID of the subnet  where the default access point of the created instance resides.
 * @method void setSubnetId(string $SubnetId) Set ID of the subnet  where the default access point of the created instance resides.
 * @method integer getInstanceType() Obtain Instance specification.  This parameter is required for a Standard Edition instance but not for a Pro Edition instance.  Valid values:  `1` (Small),  `2` (Standard),  `3` (Advanced),  `4` (Large),  `5` (Xlarge L1),  `6` (Xlarge L2),  `7` (Xlarge L3),  `8` (Xlarge L4),  
 * @method void setInstanceType(integer $InstanceType) Set Instance specification.  This parameter is required for a Standard Edition instance but not for a Pro Edition instance.  Valid values:  `1` (Small),  `2` (Standard),  `3` (Advanced),  `4` (Large),  `5` (Xlarge L1),  `6` (Xlarge L2),  `7` (Xlarge L3),  `8` (Xlarge L4),  
 * @method integer getMsgRetentionTime() Obtain The maximum instance log retention period in minutes by default.  If this parameter is left empty, the default retention period is 1,440 minutes (1 day) to 30 days.  If the message retention period of the topic is explicitly set, it will prevail.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set The maximum instance log retention period in minutes by default.  If this parameter is left empty, the default retention period is 1,440 minutes (1 day) to 30 days.  If the message retention period of the topic is explicitly set, it will prevail.
 * @method integer getClusterId() Obtain Cluster ID, which can be selected when you create an instance.  You don’t need to pass in this parameter if the cluster where the instance resides is not specified.
 * @method void setClusterId(integer $ClusterId) Set Cluster ID, which can be selected when you create an instance.  You don’t need to pass in this parameter if the cluster where the instance resides is not specified.
 * @method string getKafkaVersion() Obtain Instance version.  Valid values: `0.10.2`, `1.1.1`, `2.4.2`, and `2.8.1`.
 * @method void setKafkaVersion(string $KafkaVersion) Set Instance version.  Valid values: `0.10.2`, `1.1.1`, `2.4.2`, and `2.8.1`.
 * @method string getSpecificationsType() Obtain Instance type. `standard` (Standard Edition),  `profession`  (Pro Edition)
 * @method void setSpecificationsType(string $SpecificationsType) Set Instance type. `standard` (Standard Edition),  `profession`  (Pro Edition)
 * @method string getDiskType() Obtain Instance disk type.  `CLOUD_BASIC` (Premium Cloud Storage),  `CLOUD_SSD` (SSD).  If this parameter is left empty, the default value `CLOUD_BASIC` will be used.
 * @method void setDiskType(string $DiskType) Set Instance disk type.  `CLOUD_BASIC` (Premium Cloud Storage),  `CLOUD_SSD` (SSD).  If this parameter is left empty, the default value `CLOUD_BASIC` will be used.
 * @method integer getBandWidth() Obtain Private network peak bandwidth of an instance  in MB/sec.  If you create a Standard Edition instance, pass in the corresponding peak bandwidth for the current instance specification.  If you create a Pro Edition instance, configure the peak bandwidth, partition count, and other parameters as required by Pro Edition.
 * @method void setBandWidth(integer $BandWidth) Set Private network peak bandwidth of an instance  in MB/sec.  If you create a Standard Edition instance, pass in the corresponding peak bandwidth for the current instance specification.  If you create a Pro Edition instance, configure the peak bandwidth, partition count, and other parameters as required by Pro Edition.
 * @method integer getDiskSize() Obtain Instance disk size, which must meet the requirement of the instance’s specification.
 * @method void setDiskSize(integer $DiskSize) Set Instance disk size, which must meet the requirement of the instance’s specification.
 * @method integer getPartition() Obtain The maximum number of partitions of the instance, which must meet the requirement of the instance’s specification.
 * @method void setPartition(integer $Partition) Set The maximum number of partitions of the instance, which must meet the requirement of the instance’s specification.
 * @method integer getTopicNum() Obtain The maximum number of topics of the instance, which must meet the requirement of the instance’s specification.
 * @method void setTopicNum(integer $TopicNum) Set The maximum number of topics of the instance, which must meet the requirement of the instance’s specification.
 * @method integer getZoneId() Obtain AZ of the instance.  When a multi-AZ instance is created, the value of this parameter is the AZ ID of the subnet where the instance’s default access point resides.
 * @method void setZoneId(integer $ZoneId) Set AZ of the instance.  When a multi-AZ instance is created, the value of this parameter is the AZ ID of the subnet where the instance’s default access point resides.
 * @method boolean getMultiZoneFlag() Obtain Whether the current instance is a multi-AZ instance
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) Set Whether the current instance is a multi-AZ instance
 * @method array getZoneIds() Obtain This parameter indicates the list of AZ IDs when the instance is deployed in multiple AZs.  Note that `ZoneId` must be included in the array of this parameter.
 * @method void setZoneIds(array $ZoneIds) Set This parameter indicates the list of AZ IDs when the instance is deployed in multiple AZs.  Note that `ZoneId` must be included in the array of this parameter.
 * @method integer getInstanceNum() Obtain The number of purchased instances.  Default value: `1`. This parameter is optional.  If it is passed in, multiple instances will be created, with their names being `instanceName` plus different suffixes.
 * @method void setInstanceNum(integer $InstanceNum) Set The number of purchased instances.  Default value: `1`. This parameter is optional.  If it is passed in, multiple instances will be created, with their names being `instanceName` plus different suffixes.
 * @method integer getPublicNetworkMonthly() Obtain Public network bandwidth in Mbps.  The 3 Mbps of free bandwidth is not included here by default.  For example, if you need 3 Mbps of public network bandwidth, pass in `0`; if you need 6 Mbps, pass in `3`.  The value must be an integer multiple of 3.
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) Set Public network bandwidth in Mbps.  The 3 Mbps of free bandwidth is not included here by default.  For example, if you need 3 Mbps of public network bandwidth, pass in `0`; if you need 6 Mbps, pass in `3`.  The value must be an integer multiple of 3.
 */
class CreatePostPaidInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance name, which is a string of up to 64 letters, digits, and hyphens (-). It must start with a letter.
     */
    public $InstanceName;

    /**
     * @var string ID of the VPC where the default access point of the created instance resides.  This parameter is required as instances cannot be created in the classic network currently.
     */
    public $VpcId;

    /**
     * @var string ID of the subnet  where the default access point of the created instance resides.
     */
    public $SubnetId;

    /**
     * @var integer Instance specification.  This parameter is required for a Standard Edition instance but not for a Pro Edition instance.  Valid values:  `1` (Small),  `2` (Standard),  `3` (Advanced),  `4` (Large),  `5` (Xlarge L1),  `6` (Xlarge L2),  `7` (Xlarge L3),  `8` (Xlarge L4),  
     */
    public $InstanceType;

    /**
     * @var integer The maximum instance log retention period in minutes by default.  If this parameter is left empty, the default retention period is 1,440 minutes (1 day) to 30 days.  If the message retention period of the topic is explicitly set, it will prevail.
     */
    public $MsgRetentionTime;

    /**
     * @var integer Cluster ID, which can be selected when you create an instance.  You don’t need to pass in this parameter if the cluster where the instance resides is not specified.
     */
    public $ClusterId;

    /**
     * @var string Instance version.  Valid values: `0.10.2`, `1.1.1`, `2.4.2`, and `2.8.1`.
     */
    public $KafkaVersion;

    /**
     * @var string Instance type. `standard` (Standard Edition),  `profession`  (Pro Edition)
     */
    public $SpecificationsType;

    /**
     * @var string Instance disk type.  `CLOUD_BASIC` (Premium Cloud Storage),  `CLOUD_SSD` (SSD).  If this parameter is left empty, the default value `CLOUD_BASIC` will be used.
     */
    public $DiskType;

    /**
     * @var integer Private network peak bandwidth of an instance  in MB/sec.  If you create a Standard Edition instance, pass in the corresponding peak bandwidth for the current instance specification.  If you create a Pro Edition instance, configure the peak bandwidth, partition count, and other parameters as required by Pro Edition.
     */
    public $BandWidth;

    /**
     * @var integer Instance disk size, which must meet the requirement of the instance’s specification.
     */
    public $DiskSize;

    /**
     * @var integer The maximum number of partitions of the instance, which must meet the requirement of the instance’s specification.
     */
    public $Partition;

    /**
     * @var integer The maximum number of topics of the instance, which must meet the requirement of the instance’s specification.
     */
    public $TopicNum;

    /**
     * @var integer AZ of the instance.  When a multi-AZ instance is created, the value of this parameter is the AZ ID of the subnet where the instance’s default access point resides.
     */
    public $ZoneId;

    /**
     * @var boolean Whether the current instance is a multi-AZ instance
     */
    public $MultiZoneFlag;

    /**
     * @var array This parameter indicates the list of AZ IDs when the instance is deployed in multiple AZs.  Note that `ZoneId` must be included in the array of this parameter.
     */
    public $ZoneIds;

    /**
     * @var integer The number of purchased instances.  Default value: `1`. This parameter is optional.  If it is passed in, multiple instances will be created, with their names being `instanceName` plus different suffixes.
     */
    public $InstanceNum;

    /**
     * @var integer Public network bandwidth in Mbps.  The 3 Mbps of free bandwidth is not included here by default.  For example, if you need 3 Mbps of public network bandwidth, pass in `0`; if you need 6 Mbps, pass in `3`.  The value must be an integer multiple of 3.
     */
    public $PublicNetworkMonthly;

    /**
     * @param string $InstanceName Instance name, which is a string of up to 64 letters, digits, and hyphens (-). It must start with a letter.
     * @param string $VpcId ID of the VPC where the default access point of the created instance resides.  This parameter is required as instances cannot be created in the classic network currently.
     * @param string $SubnetId ID of the subnet  where the default access point of the created instance resides.
     * @param integer $InstanceType Instance specification.  This parameter is required for a Standard Edition instance but not for a Pro Edition instance.  Valid values:  `1` (Small),  `2` (Standard),  `3` (Advanced),  `4` (Large),  `5` (Xlarge L1),  `6` (Xlarge L2),  `7` (Xlarge L3),  `8` (Xlarge L4),  
     * @param integer $MsgRetentionTime The maximum instance log retention period in minutes by default.  If this parameter is left empty, the default retention period is 1,440 minutes (1 day) to 30 days.  If the message retention period of the topic is explicitly set, it will prevail.
     * @param integer $ClusterId Cluster ID, which can be selected when you create an instance.  You don’t need to pass in this parameter if the cluster where the instance resides is not specified.
     * @param string $KafkaVersion Instance version.  Valid values: `0.10.2`, `1.1.1`, `2.4.2`, and `2.8.1`.
     * @param string $SpecificationsType Instance type. `standard` (Standard Edition),  `profession`  (Pro Edition)
     * @param string $DiskType Instance disk type.  `CLOUD_BASIC` (Premium Cloud Storage),  `CLOUD_SSD` (SSD).  If this parameter is left empty, the default value `CLOUD_BASIC` will be used.
     * @param integer $BandWidth Private network peak bandwidth of an instance  in MB/sec.  If you create a Standard Edition instance, pass in the corresponding peak bandwidth for the current instance specification.  If you create a Pro Edition instance, configure the peak bandwidth, partition count, and other parameters as required by Pro Edition.
     * @param integer $DiskSize Instance disk size, which must meet the requirement of the instance’s specification.
     * @param integer $Partition The maximum number of partitions of the instance, which must meet the requirement of the instance’s specification.
     * @param integer $TopicNum The maximum number of topics of the instance, which must meet the requirement of the instance’s specification.
     * @param integer $ZoneId AZ of the instance.  When a multi-AZ instance is created, the value of this parameter is the AZ ID of the subnet where the instance’s default access point resides.
     * @param boolean $MultiZoneFlag Whether the current instance is a multi-AZ instance
     * @param array $ZoneIds This parameter indicates the list of AZ IDs when the instance is deployed in multiple AZs.  Note that `ZoneId` must be included in the array of this parameter.
     * @param integer $InstanceNum The number of purchased instances.  Default value: `1`. This parameter is optional.  If it is passed in, multiple instances will be created, with their names being `instanceName` plus different suffixes.
     * @param integer $PublicNetworkMonthly Public network bandwidth in Mbps.  The 3 Mbps of free bandwidth is not included here by default.  For example, if you need 3 Mbps of public network bandwidth, pass in `0`; if you need 6 Mbps, pass in `3`.  The value must be an integer multiple of 3.
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("SpecificationsType",$param) and $param["SpecificationsType"] !== null) {
            $this->SpecificationsType = $param["SpecificationsType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("PublicNetworkMonthly",$param) and $param["PublicNetworkMonthly"] !== null) {
            $this->PublicNetworkMonthly = $param["PublicNetworkMonthly"];
        }
    }
}
