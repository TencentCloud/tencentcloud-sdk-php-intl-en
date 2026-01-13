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
 * @method string getInstanceName() Obtain <p>Specifies the Name of the ckafka cluster instance, which is any string with a length not more than 128 characters.</p>.
 * @method void setInstanceName(string $InstanceName) Set <p>Specifies the Name of the ckafka cluster instance, which is any string with a length not more than 128 characters.</p>.
 * @method integer getZoneId() Obtain <P>Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">view availability zones</a></p>.
 * @method void setZoneId(integer $ZoneId) Set <P>Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">view availability zones</a></p>.
 * @method string getPeriod() Obtain <P>Specifies the prepaid purchase duration, such as "1m" (exactly one month). value ranges from 1m to 36m.</p>.
 * @method void setPeriod(string $Period) Set <P>Specifies the prepaid purchase duration, such as "1m" (exactly one month). value ranges from 1m to 36m.</p>.
 * @method integer getInstanceType() Obtain <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
 * @method void setInstanceType(integer $InstanceType) Set <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
 * @method string getVpcId() Obtain <p>VPC Id.</p>.
 * @method void setVpcId(string $VpcId) Set <p>VPC Id.</p>.
 * @method string getSubnetId() Obtain <P>Subnet id.</p>.
 * @method void setSubnetId(string $SubnetId) Set <P>Subnet id.</p>.
 * @method integer getMsgRetentionTime() Obtain <P>Optional. specifies the maximum retention time for instance logs, in minutes. default value: 1440 (1 day) when left blank. configurable range: 1 minute to 90 days.</p>.
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) Set <P>Optional. specifies the maximum retention time for instance logs, in minutes. default value: 1440 (1 day) when left blank. configurable range: 1 minute to 90 days.</p>.
 * @method integer getClusterId() Obtain <p>Specifies the cluster Id when creating an instance. this parameter indicates the cluster Id.</p>.
 * @method void setClusterId(integer $ClusterId) Set <p>Specifies the cluster Id when creating an instance. this parameter indicates the cluster Id.</p>.
 * @method integer getRenewFlag() Obtain <P>Auto-Renewal tag for prepaid services. 0 means default state (not set by the user, i.e. initial state), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user).</p>.
 * @method void setRenewFlag(integer $RenewFlag) Set <P>Auto-Renewal tag for prepaid services. 0 means default state (not set by the user, i.e. initial state), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user).</p>.
 * @method string getKafkaVersion() Obtain <p>Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value is 2.4.1. 2.4.1 and 2.4.2 belong to the same version, any one can be passed.</p>.
 * @method void setKafkaVersion(string $KafkaVersion) Set <p>Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value is 2.4.1. 2.4.1 and 2.4.2 belong to the same version, any one can be passed.</p>.
 * @method string getSpecificationsType() Obtain <P>Instance type. specifies "standard" for standard edition instance (default), "profession" for professional edition instance, "premium" for advanced edition instance.</p>.
 * @method void setSpecificationsType(string $SpecificationsType) Set <P>Instance type. specifies "standard" for standard edition instance (default), "profession" for professional edition instance, "premium" for advanced edition instance.</p>.
 * @method integer getDiskSize() Obtain <P>Disk size. if it does not match the console specification ratio, creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
 * @method void setDiskSize(integer $DiskSize) Set <P>Disk size. if it does not match the console specification ratio, creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
 * @method integer getBandWidth() Obtain <p>Instance bandwidth, default value is 40, unit MB/s. minimum value: 20MB/s. advanced edition maximum value: 360MB/s. professional edition maximum value: 100000MB/s. standard version fixed bandwidth specifications: 40MB/s, 100MB/s, 150MB/s. billing specifications can be viewed through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
 * @method void setBandWidth(integer $BandWidth) Set <p>Instance bandwidth, default value is 40, unit MB/s. minimum value: 20MB/s. advanced edition maximum value: 360MB/s. professional edition maximum value: 100000MB/s. standard version fixed bandwidth specifications: 40MB/s, 100MB/s, 150MB/s. billing specifications can be viewed through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
 * @method integer getPartition() Obtain <P>Specifies the partition size. if it does not match the console specification ratio, the creation cannot succeed. default value is 800 with a step length of 100. view billing specifications through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
 * @method void setPartition(integer $Partition) Set <P>Specifies the partition size. if it does not match the console specification ratio, the creation cannot succeed. default value is 800 with a step length of 100. view billing specifications through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
 * @method array getTags() Obtain <p>Tag.</p>.
 * @method void setTags(array $Tags) Set <p>Tag.</p>.
 * @method string getDiskType() Obtain <p>Specifies the instance disk type for pro edition/advanced edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
 * @method void setDiskType(string $DiskType) Set <p>Specifies the instance disk type for pro edition/advanced edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
 * @method boolean getMultiZoneFlag() Obtain <p>Specifies whether to create a cross-availability zone instance. when the current parameter is true, zoneIds is required.</p>.
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) Set <p>Specifies whether to create a cross-availability zone instance. when the current parameter is true, zoneIds is required.</p>.
 * @method array getZoneIds() Obtain <P>Availability zone list. required item when purchasing multi-availability zone instance.</p>.
 * @method void setZoneIds(array $ZoneIds) Set <P>Availability zone list. required item when purchasing multi-availability zone instance.</p>.
 * @method integer getPublicNetworkMonthly() Obtain <p>Specifies the public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. default value: 0. ensure the input parameter is a multiple of 3.</p>.
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) Set <p>Specifies the public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. default value: 0. ensure the input parameter is a multiple of 3.</p>.
 * @method integer getInstanceNum() Obtain <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
 * @method void setInstanceNum(integer $InstanceNum) Set <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
 * @method integer getAutoVoucher() Obtain <P>Specifies whether to automatically select voucher. valid values: 1-yes; 0-no. default is 0.</p>.
 * @method void setAutoVoucher(integer $AutoVoucher) Set <P>Specifies whether to automatically select voucher. valid values: 1-yes; 0-no. default is 0.</p>.
 * @method integer getElasticBandwidthSwitch() Obtain <P>Elastic bandwidth switch 0 disable 1 enable (0 default).</p>.
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) Set <P>Elastic bandwidth switch 0 disable 1 enable (0 default).</p>.
 * @method string getCustomSSLCertId() Obtain <p>Specifies the custom certificate Id. this parameter is valid only when SpecificationsType is profession. supports custom certificate capacity.</p><p>can be obtained through the <a href="https://www.tencentcloud.com/document/product/400/41673?from_cn_redirect=1">DescribeCertificateDetail</a> api.</p>.
 * @method void setCustomSSLCertId(string $CustomSSLCertId) Set <p>Specifies the custom certificate Id. this parameter is valid only when SpecificationsType is profession. supports custom certificate capacity.</p><p>can be obtained through the <a href="https://www.tencentcloud.com/document/product/400/41673?from_cn_redirect=1">DescribeCertificateDetail</a> api.</p>.
 */
class CreateInstancePreRequest extends AbstractModel
{
    /**
     * @var string <p>Specifies the Name of the ckafka cluster instance, which is any string with a length not more than 128 characters.</p>.
     */
    public $InstanceName;

    /**
     * @var integer <P>Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">view availability zones</a></p>.
     */
    public $ZoneId;

    /**
     * @var string <P>Specifies the prepaid purchase duration, such as "1m" (exactly one month). value ranges from 1m to 36m.</p>.
     */
    public $Period;

    /**
     * @var integer <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
     */
    public $InstanceType;

    /**
     * @var string <p>VPC Id.</p>.
     */
    public $VpcId;

    /**
     * @var string <P>Subnet id.</p>.
     */
    public $SubnetId;

    /**
     * @var integer <P>Optional. specifies the maximum retention time for instance logs, in minutes. default value: 1440 (1 day) when left blank. configurable range: 1 minute to 90 days.</p>.
     */
    public $MsgRetentionTime;

    /**
     * @var integer <p>Specifies the cluster Id when creating an instance. this parameter indicates the cluster Id.</p>.
     */
    public $ClusterId;

    /**
     * @var integer <P>Auto-Renewal tag for prepaid services. 0 means default state (not set by the user, i.e. initial state), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user).</p>.
     */
    public $RenewFlag;

    /**
     * @var string <p>Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value is 2.4.1. 2.4.1 and 2.4.2 belong to the same version, any one can be passed.</p>.
     */
    public $KafkaVersion;

    /**
     * @var string <P>Instance type. specifies "standard" for standard edition instance (default), "profession" for professional edition instance, "premium" for advanced edition instance.</p>.
     */
    public $SpecificationsType;

    /**
     * @var integer <P>Disk size. if it does not match the console specification ratio, creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
     */
    public $DiskSize;

    /**
     * @var integer <p>Instance bandwidth, default value is 40, unit MB/s. minimum value: 20MB/s. advanced edition maximum value: 360MB/s. professional edition maximum value: 100000MB/s. standard version fixed bandwidth specifications: 40MB/s, 100MB/s, 150MB/s. billing specifications can be viewed through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
     */
    public $BandWidth;

    /**
     * @var integer <P>Specifies the partition size. if it does not match the console specification ratio, the creation cannot succeed. default value is 800 with a step length of 100. view billing specifications through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
     */
    public $Partition;

    /**
     * @var array <p>Tag.</p>.
     */
    public $Tags;

    /**
     * @var string <p>Specifies the instance disk type for pro edition/advanced edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
     */
    public $DiskType;

    /**
     * @var boolean <p>Specifies whether to create a cross-availability zone instance. when the current parameter is true, zoneIds is required.</p>.
     */
    public $MultiZoneFlag;

    /**
     * @var array <P>Availability zone list. required item when purchasing multi-availability zone instance.</p>.
     */
    public $ZoneIds;

    /**
     * @var integer <p>Specifies the public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. default value: 0. ensure the input parameter is a multiple of 3.</p>.
     */
    public $PublicNetworkMonthly;

    /**
     * @var integer <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
     */
    public $InstanceNum;

    /**
     * @var integer <P>Specifies whether to automatically select voucher. valid values: 1-yes; 0-no. default is 0.</p>.
     */
    public $AutoVoucher;

    /**
     * @var integer <P>Elastic bandwidth switch 0 disable 1 enable (0 default).</p>.
     */
    public $ElasticBandwidthSwitch;

    /**
     * @var string <p>Specifies the custom certificate Id. this parameter is valid only when SpecificationsType is profession. supports custom certificate capacity.</p><p>can be obtained through the <a href="https://www.tencentcloud.com/document/product/400/41673?from_cn_redirect=1">DescribeCertificateDetail</a> api.</p>.
     */
    public $CustomSSLCertId;

    /**
     * @param string $InstanceName <p>Specifies the Name of the ckafka cluster instance, which is any string with a length not more than 128 characters.</p>.
     * @param integer $ZoneId <P>Availability zone. when purchasing a multi-availability zone instance, this parameter specifies the primary az. <a href="https://www.tencentcloud.com/document/product/597/55246?from_cn_redirect=1">view availability zones</a></p>.
     * @param string $Period <P>Specifies the prepaid purchase duration, such as "1m" (exactly one month). value ranges from 1m to 36m.</p>.
     * @param integer $InstanceType <P>Specifies the standard edition instance specification for the international site. currently only the standard edition on the international site uses the current field to distinguish specifications, while the domestic site standard edition uses peak bandwidth. fill in 1 for all instances except the international site standard edition. for international site standard edition instances: [entry-level (general)] fill 1; [standard type (standard)] fill 2; [advanced] fill 3; [capacity type (capacity)] fill 4; [advanced type 1 (specialized-1)] fill 5; [advanced type 2 (specialized-2)] fill 6; [advanced type 3 (specialized-3)] fill 7; [advanced type 4 (specialized-4)] fill 8.</p>.
     * @param string $VpcId <p>VPC Id.</p>.
     * @param string $SubnetId <P>Subnet id.</p>.
     * @param integer $MsgRetentionTime <P>Optional. specifies the maximum retention time for instance logs, in minutes. default value: 1440 (1 day) when left blank. configurable range: 1 minute to 90 days.</p>.
     * @param integer $ClusterId <p>Specifies the cluster Id when creating an instance. this parameter indicates the cluster Id.</p>.
     * @param integer $RenewFlag <P>Auto-Renewal tag for prepaid services. 0 means default state (not set by the user, i.e. initial state), 1 means auto-renew, 2 means explicitly no auto-renew (set by the user).</p>.
     * @param string $KafkaVersion <p>Specifies the CKafka version number. valid values: 2.4.1, 2.4.2, 2.8.1, 3.2.3. default value is 2.4.1. 2.4.1 and 2.4.2 belong to the same version, any one can be passed.</p>.
     * @param string $SpecificationsType <P>Instance type. specifies "standard" for standard edition instance (default), "profession" for professional edition instance, "premium" for advanced edition instance.</p>.
     * @param integer $DiskSize <P>Disk size. if it does not match the console specification ratio, creation cannot succeed. default value is 500. step length is set to 100. can be accessed through the following link to view billing specifications: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1</p>.
     * @param integer $BandWidth <p>Instance bandwidth, default value is 40, unit MB/s. minimum value: 20MB/s. advanced edition maximum value: 360MB/s. professional edition maximum value: 100000MB/s. standard version fixed bandwidth specifications: 40MB/s, 100MB/s, 150MB/s. billing specifications can be viewed through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1</p>.
     * @param integer $Partition <P>Specifies the partition size. if it does not match the console specification ratio, the creation cannot succeed. default value is 800 with a step length of 100. view billing specifications through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1</p>.
     * @param array $Tags <p>Tag.</p>.
     * @param string $DiskType <p>Specifies the instance disk type for pro edition/advanced edition. standard edition instances do not require this field. valid values: "CLOUD_SSD" (SSD CLOUD disk), "CLOUD_BASIC" (high-performance CLOUD block storage). default value: "CLOUD_BASIC".</p>.
     * @param boolean $MultiZoneFlag <p>Specifies whether to create a cross-availability zone instance. when the current parameter is true, zoneIds is required.</p>.
     * @param array $ZoneIds <P>Availability zone list. required item when purchasing multi-availability zone instance.</p>.
     * @param integer $PublicNetworkMonthly <p>Specifies the public bandwidth size in Mbps. the free 3 Mbps bandwidth is not included by default. for example, if the total required public network bandwidth is 3 Mbps, input 0 here; if the total required public network bandwidth is 6 Mbps, input 3 here. default value: 0. ensure the input parameter is a multiple of 3.</p>.
     * @param integer $InstanceNum <p>Specifies the number of instances to purchase. optional. default value is 1. when input this parameter, it will create multiple instances with case-sensitive suffixes added to instanceName.</p>.
     * @param integer $AutoVoucher <P>Specifies whether to automatically select voucher. valid values: 1-yes; 0-no. default is 0.</p>.
     * @param integer $ElasticBandwidthSwitch <P>Elastic bandwidth switch 0 disable 1 enable (0 default).</p>.
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

        if (array_key_exists("CustomSSLCertId",$param) and $param["CustomSSLCertId"] !== null) {
            $this->CustomSSLCertId = $param["CustomSSLCertId"];
        }
    }
}
