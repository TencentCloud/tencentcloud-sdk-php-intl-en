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
 * CreateInstancePre request structure.
 *
 * @method string getInstanceName() Obtain Specifies the ckafka cluster instance Name, an arbitrary string with length no more than 128 characters.
 * @method void setInstanceName(string $InstanceName) Set Specifies the ckafka cluster instance Name, an arbitrary string with length no more than 128 characters.
 * @method integer getZoneId() Obtain Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. [view availability zones](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
 * @method void setZoneId(integer $ZoneId) Set Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. [view availability zones](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
 * @method string getPeriod() Obtain Prepaid purchase duration, such as "1m", exactly one month. value ranges from 1m to 36m.
 * @method void setPeriod(string $Period) Set Prepaid purchase duration, such as "1m", exactly one month. value ranges from 1m to 36m.
 * @method integer getInstanceType() Obtain Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
 * @method void setInstanceType(integer $InstanceType) Set Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
 * @method string getVpcId() Obtain VPC Id.
 * @method void setVpcId(string $VpcId) Set VPC Id.
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getMsgRetentionTime() Obtain Optional. maximum retention time of instance logs, in minutes. default value: 1440 (1 day). value range: 1 minute to 90 days.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set Optional. maximum retention time of instance logs, in minutes. default value: 1440 (1 day). value range: 1 minute to 90 days.
 * @method integer getClusterId() Obtain Specifies the cluster Id when creating an instance.
 * @method void setClusterId(integer $ClusterId) Set Specifies the cluster Id when creating an instance.
 * @method integer getRenewFlag() Obtain Auto-Renewal tag for prepaid services. valid values: 0 (default state, not set by the user, initial status), 1 (auto-renew), 2 (explicitly no auto-renew, set by the user).
 * @method void setRenewFlag(integer $RenewFlag) Set Auto-Renewal tag for prepaid services. valid values: 0 (default state, not set by the user, initial status), 1 (auto-renew), 2 (explicitly no auto-renew, set by the user).
 * @method string getKafkaVersion() Obtain Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value 2.4.1. 2.4.1 and 2.4.2 belong to the same version. any can be passed.
 * @method void setKafkaVersion(string $KafkaVersion) Set Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value 2.4.1. 2.4.1 and 2.4.2 belong to the same version. any can be passed.
 * @method string getSpecificationsType() Obtain Specifies the instance type. valid values: standard (default), profession, premium.
 * @method void setSpecificationsType(string $SpecificationsType) Set Specifies the instance type. valid values: standard (default), profession, premium.
 * @method integer getDiskSize() Obtain Disk size. if it does not match the console specification ratio, the creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
 * @method void setDiskSize(integer $DiskSize) Set Disk size. if it does not match the console specification ratio, the creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
 * @method integer getBandWidth() Obtain Instance bandwidth. default value: 40 MB/s. minimum value: 20 MB/s. maximum value for advanced edition: 360 MB/s. maximum value for pro edition: 100000 MB/s. standard version fixed bandwidth specifications: 40 MB/s, 100 MB/s, 150 MB/s. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
 * @method void setBandWidth(integer $BandWidth) Set Instance bandwidth. default value: 40 MB/s. minimum value: 20 MB/s. maximum value for advanced edition: 360 MB/s. maximum value for pro edition: 100000 MB/s. standard version fixed bandwidth specifications: 40 MB/s, 100 MB/s, 150 MB/s. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
 * @method integer getPartition() Obtain Partition size. if it does not match the console specification ratio, creation will fail. default value is 800, step length is 100. billing specifications can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
 * @method void setPartition(integer $Partition) Set Partition size. if it does not match the console specification ratio, creation will fail. default value is 800, step length is 100. billing specifications can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
 * @method array getTags() Obtain Tag.
 * @method void setTags(array $Tags) Set Tag.
 * @method string getDiskType() Obtain Specifies the disk type for a pro/advanced edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
 * @method void setDiskType(string $DiskType) Set Specifies the disk type for a pro/advanced edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
 * @method boolean getMultiZoneFlag() Obtain Specifies whether to create a cross-az instance. when the current parameter is true, zoneIds is required.
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) Set Specifies whether to create a cross-az instance. when the current parameter is true, zoneIds is required.
 * @method array getZoneIds() Obtain Availability zone list. required item when purchasing a multi-availability zone instance.
 * @method void setZoneIds(array $ZoneIds) Set Availability zone list. required item when purchasing a multi-availability zone instance.
 * @method integer getPublicNetworkMonthly() Obtain Public network bandwidth size, in Mbps. the default is no free 3 Mbps bandwidth. for example, for a total of 3 Mbps public network bandwidth, pass 0 here; for a total of 6 Mbps public network bandwidth, pass 3 here. default value is 0. ensure the input parameter is a multiple of 3.
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) Set Public network bandwidth size, in Mbps. the default is no free 3 Mbps bandwidth. for example, for a total of 3 Mbps public network bandwidth, pass 0 here; for a total of 6 Mbps public network bandwidth, pass 3 here. default value is 0. ensure the input parameter is a multiple of 3.
 * @method integer getInstanceNum() Obtain Number of instances to purchase. optional. default value is 1. when you input this parameter, it enables the creation of multiple instances with case-sensitive suffixes added to instanceName.
 * @method void setInstanceNum(integer $InstanceNum) Set Number of instances to purchase. optional. default value is 1. when you input this parameter, it enables the creation of multiple instances with case-sensitive suffixes added to instanceName.
 * @method integer getAutoVoucher() Obtain Whether to automatically select a voucher. valid values: 1 (yes), 0 (no). default is 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select a voucher. valid values: 1 (yes), 0 (no). default is 0.
 * @method integer getElasticBandwidthSwitch() Obtain Elastic bandwidth switch. specifies whether to enable elastic bandwidth. valid values: 0 (not enabled, default), 1 (enabled).
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) Set Elastic bandwidth switch. specifies whether to enable elastic bandwidth. valid values: 0 (not enabled, default), 1 (enabled).
 */
class CreateInstancePreRequest extends AbstractModel
{
    /**
     * @var string Specifies the ckafka cluster instance Name, an arbitrary string with length no more than 128 characters.
     */
    public $InstanceName;

    /**
     * @var integer Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. [view availability zones](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
     */
    public $ZoneId;

    /**
     * @var string Prepaid purchase duration, such as "1m", exactly one month. value ranges from 1m to 36m.
     */
    public $Period;

    /**
     * @var integer Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
     */
    public $InstanceType;

    /**
     * @var string VPC Id.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Optional. maximum retention time of instance logs, in minutes. default value: 1440 (1 day). value range: 1 minute to 90 days.
     */
    public $MsgRetentionTime;

    /**
     * @var integer Specifies the cluster Id when creating an instance.
     */
    public $ClusterId;

    /**
     * @var integer Auto-Renewal tag for prepaid services. valid values: 0 (default state, not set by the user, initial status), 1 (auto-renew), 2 (explicitly no auto-renew, set by the user).
     */
    public $RenewFlag;

    /**
     * @var string Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value 2.4.1. 2.4.1 and 2.4.2 belong to the same version. any can be passed.
     */
    public $KafkaVersion;

    /**
     * @var string Specifies the instance type. valid values: standard (default), profession, premium.
     */
    public $SpecificationsType;

    /**
     * @var integer Disk size. if it does not match the console specification ratio, the creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
     */
    public $DiskSize;

    /**
     * @var integer Instance bandwidth. default value: 40 MB/s. minimum value: 20 MB/s. maximum value for advanced edition: 360 MB/s. maximum value for pro edition: 100000 MB/s. standard version fixed bandwidth specifications: 40 MB/s, 100 MB/s, 150 MB/s. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
     */
    public $BandWidth;

    /**
     * @var integer Partition size. if it does not match the console specification ratio, creation will fail. default value is 800, step length is 100. billing specifications can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
     */
    public $Partition;

    /**
     * @var array Tag.
     */
    public $Tags;

    /**
     * @var string Specifies the disk type for a pro/advanced edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
     */
    public $DiskType;

    /**
     * @var boolean Specifies whether to create a cross-az instance. when the current parameter is true, zoneIds is required.
     */
    public $MultiZoneFlag;

    /**
     * @var array Availability zone list. required item when purchasing a multi-availability zone instance.
     */
    public $ZoneIds;

    /**
     * @var integer Public network bandwidth size, in Mbps. the default is no free 3 Mbps bandwidth. for example, for a total of 3 Mbps public network bandwidth, pass 0 here; for a total of 6 Mbps public network bandwidth, pass 3 here. default value is 0. ensure the input parameter is a multiple of 3.
     */
    public $PublicNetworkMonthly;

    /**
     * @var integer Number of instances to purchase. optional. default value is 1. when you input this parameter, it enables the creation of multiple instances with case-sensitive suffixes added to instanceName.
     */
    public $InstanceNum;

    /**
     * @var integer Whether to automatically select a voucher. valid values: 1 (yes), 0 (no). default is 0.
     */
    public $AutoVoucher;

    /**
     * @var integer Elastic bandwidth switch. specifies whether to enable elastic bandwidth. valid values: 0 (not enabled, default), 1 (enabled).
     */
    public $ElasticBandwidthSwitch;

    /**
     * @param string $InstanceName Specifies the ckafka cluster instance Name, an arbitrary string with length no more than 128 characters.
     * @param integer $ZoneId Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. [view availability zones](https://www.tencentcloud.comom/document/product/597/55246?from_cn_redirect=1).
     * @param string $Period Prepaid purchase duration, such as "1m", exactly one month. value ranges from 1m to 36m.
     * @param integer $InstanceType Specifies the standard edition instance specification for the international site. currently only the international site standard edition uses the current field to distinguish specifications, while the domestic site standard edition distinguishes specifications by peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.
     * @param string $VpcId VPC Id.
     * @param string $SubnetId Subnet ID
     * @param integer $MsgRetentionTime Optional. maximum retention time of instance logs, in minutes. default value: 1440 (1 day). value range: 1 minute to 90 days.
     * @param integer $ClusterId Specifies the cluster Id when creating an instance.
     * @param integer $RenewFlag Auto-Renewal tag for prepaid services. valid values: 0 (default state, not set by the user, initial status), 1 (auto-renew), 2 (explicitly no auto-renew, set by the user).
     * @param string $KafkaVersion Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value 2.4.1. 2.4.1 and 2.4.2 belong to the same version. any can be passed.
     * @param string $SpecificationsType Specifies the instance type. valid values: standard (default), profession, premium.
     * @param integer $DiskSize Disk size. if it does not match the console specification ratio, the creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1
     * @param integer $BandWidth Instance bandwidth. default value: 40 MB/s. minimum value: 20 MB/s. maximum value for advanced edition: 360 MB/s. maximum value for pro edition: 100000 MB/s. standard version fixed bandwidth specifications: 40 MB/s, 100 MB/s, 150 MB/s. view billing specifications through the following link: https://www.tencentcloud.comom/document/product/597/11745.?from_cn_redirect=1
     * @param integer $Partition Partition size. if it does not match the console specification ratio, creation will fail. default value is 800, step length is 100. billing specifications can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
     * @param array $Tags Tag.
     * @param string $DiskType Specifies the disk type for a pro/advanced edition instance. you do not need to fill it in for a standard edition instance. valid values: "CLOUD_SSD" for SSD CLOUD disk; "CLOUD_BASIC" for high-performance CLOUD block storage. default value: "CLOUD_BASIC".
     * @param boolean $MultiZoneFlag Specifies whether to create a cross-az instance. when the current parameter is true, zoneIds is required.
     * @param array $ZoneIds Availability zone list. required item when purchasing a multi-availability zone instance.
     * @param integer $PublicNetworkMonthly Public network bandwidth size, in Mbps. the default is no free 3 Mbps bandwidth. for example, for a total of 3 Mbps public network bandwidth, pass 0 here; for a total of 6 Mbps public network bandwidth, pass 3 here. default value is 0. ensure the input parameter is a multiple of 3.
     * @param integer $InstanceNum Number of instances to purchase. optional. default value is 1. when you input this parameter, it enables the creation of multiple instances with case-sensitive suffixes added to instanceName.
     * @param integer $AutoVoucher Whether to automatically select a voucher. valid values: 1 (yes), 0 (no). default is 0.
     * @param integer $ElasticBandwidthSwitch Elastic bandwidth switch. specifies whether to enable elastic bandwidth. valid values: 0 (not enabled, default), 1 (enabled).
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("SpecificationsType",$param) and $param["SpecificationsType"] !== null) {
            $this->SpecificationsType = $param["SpecificationsType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PublicNetworkMonthly",$param) and $param["PublicNetworkMonthly"] !== null) {
            $this->PublicNetworkMonthly = $param["PublicNetworkMonthly"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ElasticBandwidthSwitch",$param) and $param["ElasticBandwidthSwitch"] !== null) {
            $this->ElasticBandwidthSwitch = $param["ElasticBandwidthSwitch"];
        }
    }
}
