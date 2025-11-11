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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePostPaidInstance request structure.
 *
 * @method string getVpcId() Obtain VPC Id, obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1).
 * @method void setVpcId(string $VpcId) Set VPC Id, obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1).
 * @method string getSubnetId() Obtain Subnet Id. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
 * @method void setSubnetId(string $SubnetId) Set Subnet Id. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
 * @method string getInstanceName() Obtain Specifies the cluster instance name of ckafka, an arbitrary character with length not exceeding 128.
 * @method void setInstanceName(string $InstanceName) Set Specifies the cluster instance name of ckafka, an arbitrary character with length not exceeding 128.
 * @method integer getInstanceType() Obtain Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
 * @method void setInstanceType(integer $InstanceType) Set Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
 * @method integer getMsgRetentionTime() Obtain The maximum instance log retention period in minutes by default.  If this parameter is left empty, the default retention period is 1,440 minutes (1 day) to 30 days.  If the message retention period of the topic is explicitly set, it will prevail.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set The maximum instance log retention period in minutes by default.  If this parameter is left empty, the default retention period is 1,440 minutes (1 day) to 30 days.  If the message retention period of the topic is explicitly set, it will prevail.
 * @method integer getClusterId() Obtain Cluster ID, which can be selected when you create an instance.  You don’t need to pass in this parameter if the cluster where the instance resides is not specified.
 * @method void setClusterId(integer $ClusterId) Set Cluster ID, which can be selected when you create an instance.  You don’t need to pass in this parameter if the cluster where the instance resides is not specified.
 * @method string getKafkaVersion() Obtain Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value "2.4.1". "2.4.1" and "2.4.2" belong to the same version. any one can be passed.
 * @method void setKafkaVersion(string $KafkaVersion) Set Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value "2.4.1". "2.4.1" and "2.4.2" belong to the same version. any one can be passed.
 * @method string getSpecificationsType() Obtain Instance type. "standard": standard version. "profession": pro edition. (standard version is only supported on the international site. currently, the chinese site supports pro edition.).
 * @method void setSpecificationsType(string $SpecificationsType) Set Instance type. "standard": standard version. "profession": pro edition. (standard version is only supported on the international site. currently, the chinese site supports pro edition.).
 * @method string getDiskType() Obtain Specifies the disk type for a pro edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
 * @method void setDiskType(string $DiskType) Set Specifies the disk type for a pro edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
 * @method integer getBandWidth() Obtain Specifies the peak bandwidth of the instance private network, with a default value of 40 MB/s. for standard version, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configuration such as peak bandwidth and number of partitions should meet the billing specification of the professional edition. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
 * @method void setBandWidth(integer $BandWidth) Set Specifies the peak bandwidth of the instance private network, with a default value of 40 MB/s. for standard version, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configuration such as peak bandwidth and number of partitions should meet the billing specification of the professional edition. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
 * @method integer getDiskSize() Obtain Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
 * @method void setDiskSize(integer $DiskSize) Set Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
 * @method integer getPartition() Obtain Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
 * @method void setPartition(integer $Partition) Set Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
 * @method integer getTopicNum() Obtain Maximum number of topics for the instance should meet the billing specification of the current instance. default value is 800, step length is set to 100.
 * @method void setTopicNum(integer $TopicNum) Set Maximum number of topics for the instance should meet the billing specification of the current instance. default value is 800, step length is set to 100.
 * @method integer getZoneId() Obtain Specifies the availability zone of the instance. when creating a multi-az instance, this parameter is the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
 * @method void setZoneId(integer $ZoneId) Set Specifies the availability zone of the instance. when creating a multi-az instance, this parameter is the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
 * @method boolean getMultiZoneFlag() Obtain Whether the current instance is a multi-AZ instance
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) Set Whether the current instance is a multi-AZ instance
 * @method array getZoneIds() Obtain Specifies the multi-az id list when the instance is a multi-az instance. note that the multi-az corresponding to parameter ZoneId must be included in this parameter array. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1) api.
 * @method void setZoneIds(array $ZoneIds) Set Specifies the multi-az id list when the instance is a multi-az instance. note that the multi-az corresponding to parameter ZoneId must be included in this parameter array. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1) api.
 * @method integer getInstanceNum() Obtain The number of purchased instances.  Default value: `1`. This parameter is optional.  If it is passed in, multiple instances will be created, with their names being `instanceName` plus different suffixes.
 * @method void setInstanceNum(integer $InstanceNum) Set The number of purchased instances.  Default value: `1`. This parameter is optional.  If it is passed in, multiple instances will be created, with their names being `instanceName` plus different suffixes.
 * @method integer getPublicNetworkMonthly() Obtain Public network bandwidth in Mbps.  The 3 Mbps of free bandwidth is not included here by default.  For example, if you need 3 Mbps of public network bandwidth, pass in `0`; if you need 6 Mbps, pass in `3`.  The value must be an integer multiple of 3.
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) Set Public network bandwidth in Mbps.  The 3 Mbps of free bandwidth is not included here by default.  For example, if you need 3 Mbps of public network bandwidth, pass in `0`; if you need 6 Mbps, pass in `3`.  The value must be an integer multiple of 3.
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method integer getElasticBandwidthSwitch() Obtain Elastic bandwidth switch. valid values: 0 (disable, default), 1 (enable).
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) Set Elastic bandwidth switch. valid values: 0 (disable, default), 1 (enable).
 */
class CreatePostPaidInstanceRequest extends AbstractModel
{
    /**
     * @var string VPC Id, obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1).
     */
    public $VpcId;

    /**
     * @var string Subnet Id. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
     */
    public $SubnetId;

    /**
     * @var string Specifies the cluster instance name of ckafka, an arbitrary character with length not exceeding 128.
     */
    public $InstanceName;

    /**
     * @var integer Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
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
     * @var string Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value "2.4.1". "2.4.1" and "2.4.2" belong to the same version. any one can be passed.
     */
    public $KafkaVersion;

    /**
     * @var string Instance type. "standard": standard version. "profession": pro edition. (standard version is only supported on the international site. currently, the chinese site supports pro edition.).
     */
    public $SpecificationsType;

    /**
     * @var string Specifies the disk type for a pro edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
     */
    public $DiskType;

    /**
     * @var integer Specifies the peak bandwidth of the instance private network, with a default value of 40 MB/s. for standard version, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configuration such as peak bandwidth and number of partitions should meet the billing specification of the professional edition. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
     */
    public $BandWidth;

    /**
     * @var integer Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
     */
    public $DiskSize;

    /**
     * @var integer Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
     */
    public $Partition;

    /**
     * @var integer Maximum number of topics for the instance should meet the billing specification of the current instance. default value is 800, step length is set to 100.
     */
    public $TopicNum;

    /**
     * @var integer Specifies the availability zone of the instance. when creating a multi-az instance, this parameter is the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
     */
    public $ZoneId;

    /**
     * @var boolean Whether the current instance is a multi-AZ instance
     */
    public $MultiZoneFlag;

    /**
     * @var array Specifies the multi-az id list when the instance is a multi-az instance. note that the multi-az corresponding to parameter ZoneId must be included in this parameter array. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1) api.
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
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var integer Elastic bandwidth switch. valid values: 0 (disable, default), 1 (enable).
     */
    public $ElasticBandwidthSwitch;

    /**
     * @param string $VpcId VPC Id, obtain through the API [DescribeVpcs](https://www.tencentcloud.comom/document/product/215/15778?from_cn_redirect=1).
     * @param string $SubnetId Subnet Id. can be obtained through the [DescribeSubnets](https://www.tencentcloud.comom/document/product/215/15784?from_cn_redirect=1) api.
     * @param string $InstanceName Specifies the cluster instance name of ckafka, an arbitrary character with length not exceeding 128.
     * @param integer $InstanceType Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
     * @param integer $MsgRetentionTime The maximum instance log retention period in minutes by default.  If this parameter is left empty, the default retention period is 1,440 minutes (1 day) to 30 days.  If the message retention period of the topic is explicitly set, it will prevail.
     * @param integer $ClusterId Cluster ID, which can be selected when you create an instance.  You don’t need to pass in this parameter if the cluster where the instance resides is not specified.
     * @param string $KafkaVersion Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value "2.4.1". "2.4.1" and "2.4.2" belong to the same version. any one can be passed.
     * @param string $SpecificationsType Instance type. "standard": standard version. "profession": pro edition. (standard version is only supported on the international site. currently, the chinese site supports pro edition.).
     * @param string $DiskType Specifies the disk type for a pro edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
     * @param integer $BandWidth Specifies the peak bandwidth of the instance private network, with a default value of 40 MB/s. for standard version, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configuration such as peak bandwidth and number of partitions should meet the billing specification of the professional edition. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
     * @param integer $DiskSize Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
     * @param integer $Partition Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
     * @param integer $TopicNum Maximum number of topics for the instance should meet the billing specification of the current instance. default value is 800, step length is set to 100.
     * @param integer $ZoneId Specifies the availability zone of the instance. when creating a multi-az instance, this parameter is the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
     * @param boolean $MultiZoneFlag Whether the current instance is a multi-AZ instance
     * @param array $ZoneIds Specifies the multi-az id list when the instance is a multi-az instance. note that the multi-az corresponding to parameter ZoneId must be included in this parameter array. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the [DescribeCkafkaZone](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1) api.
     * @param integer $InstanceNum The number of purchased instances.  Default value: `1`. This parameter is optional.  If it is passed in, multiple instances will be created, with their names being `instanceName` plus different suffixes.
     * @param integer $PublicNetworkMonthly Public network bandwidth in Mbps.  The 3 Mbps of free bandwidth is not included here by default.  For example, if you need 3 Mbps of public network bandwidth, pass in `0`; if you need 6 Mbps, pass in `3`.  The value must be an integer multiple of 3.
     * @param array $Tags Tag.
     * @param integer $ElasticBandwidthSwitch Elastic bandwidth switch. valid values: 0 (disable, default), 1 (enable).
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ElasticBandwidthSwitch",$param) and $param["ElasticBandwidthSwitch"] !== null) {
            $this->ElasticBandwidthSwitch = $param["ElasticBandwidthSwitch"];
        }
    }
}
