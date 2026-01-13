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
 * @method string getVpcId() Obtain <p>VPC Id, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> api.</p>.
 * @method void setVpcId(string $VpcId) Set <p>VPC Id, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> api.</p>.
 * @method string getSubnetId() Obtain <p>Subnet Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> api.</p>.
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> api.</p>.
 * @method string getInstanceName() Obtain <P>Specifies the cluster instance name of ckafka, with a length not exceeding 128 arbitrary characters.</p>.
 * @method void setInstanceName(string $InstanceName) Set <P>Specifies the cluster instance name of ckafka, with a length not exceeding 128 arbitrary characters.</p>.
 * @method integer getInstanceType() Obtain <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
 * @method void setInstanceType(integer $InstanceType) Set <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
 * @method integer getMsgRetentionTime() Obtain <P>The default maximum retention time for instance logs, in minutes. default value: 1440 minutes (1 day) when this parameter is not input. maximum: 30 days. if the message retention time is explicitly set for a topic, the topic retention time takes precedence.</p>.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set <P>The default maximum retention time for instance logs, in minutes. default value: 1440 minutes (1 day) when this parameter is not input. maximum: 30 days. if the message retention time is explicitly set for a topic, the topic retention time takes precedence.</p>.
 * @method integer getClusterId() Obtain <p>Specifies the cluster Id when creating an instance. input this parameter to indicate the cluster Id. leave it empty if no cluster is specified.</p>.
 * @method void setClusterId(integer $ClusterId) Set <p>Specifies the cluster Id when creating an instance. input this parameter to indicate the cluster Id. leave it empty if no cluster is specified.</p>.
 * @method string getKafkaVersion() Obtain <P>Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value is "2.4.1". "2.4.1" and "2.4.2" belong to the same version, any one can be passed.</p>.
 * @method void setKafkaVersion(string $KafkaVersion) Set <P>Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value is "2.4.1". "2.4.1" and "2.4.2" belong to the same version, any one can be passed.</p>.
 * @method string getSpecificationsType() Obtain <P>Instance type. "standard": standard version, "profession": professional version. (standard version is only supported on the international site. chinese site currently supports professional version)</p>.
 * @method void setSpecificationsType(string $SpecificationsType) Set <P>Instance type. "standard": standard version, "profession": professional version. (standard version is only supported on the international site. chinese site currently supports professional version)</p>.
 * @method string getDiskType() Obtain <p>Specifies the instance disk type for pro edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
 * @method void setDiskType(string $DiskType) Set <p>Specifies the instance disk type for pro edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
 * @method integer getBandWidth() Obtain <p>The peak bandwidth of the instance private network. the default value is 40 MB/s. for standard edition, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configurations such as peak bandwidth and number of partitions should meet the billing specification of the pro edition. you can view the billing specification through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
 * @method void setBandWidth(integer $BandWidth) Set <p>The peak bandwidth of the instance private network. the default value is 40 MB/s. for standard edition, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configurations such as peak bandwidth and number of partitions should meet the billing specification of the pro edition. you can view the billing specification through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
 * @method integer getDiskSize() Obtain <P>Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
 * @method void setDiskSize(integer $DiskSize) Set <P>Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
 * @method integer getPartition() Obtain <P>Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
 * @method void setPartition(integer $Partition) Set <P>Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
 * @method integer getTopicNum() Obtain <P>Specifies the maximum number of topics for the instance, which should meet the billing specification of the current instance. default value is 800. step length is set to 100.</p>.
 * @method void setTopicNum(integer $TopicNum) Set <P>Specifies the maximum number of topics for the instance, which should meet the billing specification of the current instance. default value is 800. step length is set to 100.</p>.
 * @method integer getZoneId() Obtain Specifies the availability zone where the instance is located. when creating a multi-az instance, this parameter indicates the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.
 * @method void setZoneId(integer $ZoneId) Set Specifies the availability zone where the instance is located. when creating a multi-az instance, this parameter indicates the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.
 * @method boolean getMultiZoneFlag() Obtain <P>Specifies whether the current instance is a multi-az instance.</p>.
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) Set <P>Specifies whether the current instance is a multi-az instance.</p>.
 * @method array getZoneIds() Obtain <p>Specifies the multi-availability zone id list when the instance is a multi-az instance. note the corresponding multi-availability zone for parameter ZoneId must be included in the parameter array. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.</p>.
 * @method void setZoneIds(array $ZoneIds) Set <p>Specifies the multi-availability zone id list when the instance is a multi-az instance. note the corresponding multi-availability zone for parameter ZoneId must be included in the parameter array. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.</p>.
 * @method integer getInstanceNum() Obtain <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
 * @method void setInstanceNum(integer $InstanceNum) Set <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
 * @method integer getPublicNetworkMonthly() Obtain <p>Public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. ensure the input parameter is a multiple of 3.</p>.
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) Set <p>Public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. ensure the input parameter is a multiple of 3.</p>.
 * @method array getTags() Obtain <p>Tag.</p>.
 * @method void setTags(array $Tags) Set <p>Tag.</p>.
 * @method integer getElasticBandwidthSwitch() Obtain <P>Specifies the elastic bandwidth switch. 0: disable (default); 1: enable.</p>.
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) Set <P>Specifies the elastic bandwidth switch. 0: disable (default); 1: enable.</p>.
 * @method string getCustomSSLCertId() Obtain <p>Specifies the custom certificate Id. this parameter is valid only when SpecificationsType is profession. supports custom certificate capacity.</p><p>can be obtained through the <a href="https://www.tencentcloud.com/document/product/400/41673?from_cn_redirect=1">DescribeCertificateDetail</a> api.</p>.
 * @method void setCustomSSLCertId(string $CustomSSLCertId) Set <p>Specifies the custom certificate Id. this parameter is valid only when SpecificationsType is profession. supports custom certificate capacity.</p><p>can be obtained through the <a href="https://www.tencentcloud.com/document/product/400/41673?from_cn_redirect=1">DescribeCertificateDetail</a> api.</p>.
 */
class CreatePostPaidInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>VPC Id, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> api.</p>.
     */
    public $VpcId;

    /**
     * @var string <p>Subnet Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> api.</p>.
     */
    public $SubnetId;

    /**
     * @var string <P>Specifies the cluster instance name of ckafka, with a length not exceeding 128 arbitrary characters.</p>.
     */
    public $InstanceName;

    /**
     * @var integer <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
     */
    public $InstanceType;

    /**
     * @var integer <P>The default maximum retention time for instance logs, in minutes. default value: 1440 minutes (1 day) when this parameter is not input. maximum: 30 days. if the message retention time is explicitly set for a topic, the topic retention time takes precedence.</p>.
     */
    public $MsgRetentionTime;

    /**
     * @var integer <p>Specifies the cluster Id when creating an instance. input this parameter to indicate the cluster Id. leave it empty if no cluster is specified.</p>.
     */
    public $ClusterId;

    /**
     * @var string <P>Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value is "2.4.1". "2.4.1" and "2.4.2" belong to the same version, any one can be passed.</p>.
     */
    public $KafkaVersion;

    /**
     * @var string <P>Instance type. "standard": standard version, "profession": professional version. (standard version is only supported on the international site. chinese site currently supports professional version)</p>.
     */
    public $SpecificationsType;

    /**
     * @var string <p>Specifies the instance disk type for pro edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
     */
    public $DiskType;

    /**
     * @var integer <p>The peak bandwidth of the instance private network. the default value is 40 MB/s. for standard edition, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configurations such as peak bandwidth and number of partitions should meet the billing specification of the pro edition. you can view the billing specification through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
     */
    public $BandWidth;

    /**
     * @var integer <P>Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
     */
    public $DiskSize;

    /**
     * @var integer <P>Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
     */
    public $Partition;

    /**
     * @var integer <P>Specifies the maximum number of topics for the instance, which should meet the billing specification of the current instance. default value is 800. step length is set to 100.</p>.
     */
    public $TopicNum;

    /**
     * @var integer Specifies the availability zone where the instance is located. when creating a multi-az instance, this parameter indicates the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.
     */
    public $ZoneId;

    /**
     * @var boolean <P>Specifies whether the current instance is a multi-az instance.</p>.
     */
    public $MultiZoneFlag;

    /**
     * @var array <p>Specifies the multi-availability zone id list when the instance is a multi-az instance. note the corresponding multi-availability zone for parameter ZoneId must be included in the parameter array. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.</p>.
     */
    public $ZoneIds;

    /**
     * @var integer <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
     */
    public $InstanceNum;

    /**
     * @var integer <p>Public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. ensure the input parameter is a multiple of 3.</p>.
     */
    public $PublicNetworkMonthly;

    /**
     * @var array <p>Tag.</p>.
     */
    public $Tags;

    /**
     * @var integer <P>Specifies the elastic bandwidth switch. 0: disable (default); 1: enable.</p>.
     */
    public $ElasticBandwidthSwitch;

    /**
     * @var string <p>Specifies the custom certificate Id. this parameter is valid only when SpecificationsType is profession. supports custom certificate capacity.</p><p>can be obtained through the <a href="https://www.tencentcloud.com/document/product/400/41673?from_cn_redirect=1">DescribeCertificateDetail</a> api.</p>.
     */
    public $CustomSSLCertId;

    /**
     * @param string $VpcId <p>VPC Id, can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">DescribeVpcs</a> api.</p>.
     * @param string $SubnetId <p>Subnet Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">DescribeSubnets</a> api.</p>.
     * @param string $InstanceName <P>Specifies the cluster instance name of ckafka, with a length not exceeding 128 arbitrary characters.</p>.
     * @param integer $InstanceType <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
     * @param integer $MsgRetentionTime <P>The default maximum retention time for instance logs, in minutes. default value: 1440 minutes (1 day) when this parameter is not input. maximum: 30 days. if the message retention time is explicitly set for a topic, the topic retention time takes precedence.</p>.
     * @param integer $ClusterId <p>Specifies the cluster Id when creating an instance. input this parameter to indicate the cluster Id. leave it empty if no cluster is specified.</p>.
     * @param string $KafkaVersion <P>Instance version. currently supports "2.4.1", "2.4.2", "2.8.1", "3.2.3". default value is "2.4.1". "2.4.1" and "2.4.2" belong to the same version, any one can be passed.</p>.
     * @param string $SpecificationsType <P>Instance type. "standard": standard version, "profession": professional version. (standard version is only supported on the international site. chinese site currently supports professional version)</p>.
     * @param string $DiskType <p>Specifies the instance disk type for pro edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
     * @param integer $BandWidth <p>The peak bandwidth of the instance private network. the default value is 40 MB/s. for standard edition, input the peak bandwidth corresponding to the current instance specifications. note that if the instance created is a pro edition instance, parameter configurations such as peak bandwidth and number of partitions should meet the billing specification of the pro edition. you can view the billing specification through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
     * @param integer $DiskSize <P>Instance disk size. default value is 500. step length is set to 100. should meet the billing specification of the current instance. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
     * @param integer $Partition <P>Specifies the maximum number of partitions for the instance, which should meet the billing specification of the current instance. default value is 800 with a step length of 100. the billing specification can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
     * @param integer $TopicNum <P>Specifies the maximum number of topics for the instance, which should meet the billing specification of the current instance. default value is 800. step length is set to 100.</p>.
     * @param integer $ZoneId Specifies the availability zone where the instance is located. when creating a multi-az instance, this parameter indicates the availability zone id of the subnet where the default access point is created. ZoneId and ZoneIds cannot be empty at the same time. you can obtain this information through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.
     * @param boolean $MultiZoneFlag <P>Specifies whether the current instance is a multi-az instance.</p>.
     * @param array $ZoneIds <p>Specifies the multi-availability zone id list when the instance is a multi-az instance. note the corresponding multi-availability zone for parameter ZoneId must be included in the parameter array. ZoneId and ZoneIds cannot be empty at the same time. obtain through the API <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">DescribeCkafkaZone</a>.</p>.
     * @param integer $InstanceNum <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
     * @param integer $PublicNetworkMonthly <p>Public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. ensure the input parameter is a multiple of 3.</p>.
     * @param array $Tags <p>Tag.</p>.
     * @param integer $ElasticBandwidthSwitch <P>Specifies the elastic bandwidth switch. 0: disable (default); 1: enable.</p>.
     * @param string $CustomSSLCertId <p>Specifies the custom certificate Id. this parameter is valid only when SpecificationsType is profession. supports custom certificate capacity.</p><p>can be obtained through the <a href="https://www.tencentcloud.com/document/product/400/41673?from_cn_redirect=1">DescribeCertificateDetail</a> api.</p>.
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

        if (array_key_exists("CustomSSLCertId",$param) and $param["CustomSSLCertId"] !== null) {
            $this->CustomSSLCertId = $param["CustomSSLCertId"];
        }
    }
}
