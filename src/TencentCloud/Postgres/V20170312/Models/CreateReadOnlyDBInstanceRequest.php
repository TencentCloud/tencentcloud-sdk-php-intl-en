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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReadOnlyDBInstance request structure.
 *
 * @method string getZone() Obtain Primary AZ of an instance, such as "ap-guangzhou-3".
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method void setZone(string $Zone) Set Primary AZ of an instance, such as "ap-guangzhou-3".
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method string getMasterDBInstanceId() Obtain ID of the primary instance to which the read-only instance belongs
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set ID of the primary instance to which the read-only instance belongs
 * @method string getSpecCode() Obtain Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method integer getInstanceCount() Obtain The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
 * @method void setInstanceCount(integer $InstanceCount) Set The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
 * @method integer getPeriod() Obtain Validity period in months, valid values:
<li>Monthly subscription: `1`, `2`, `3`, 4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
 * @method void setPeriod(integer $Period) Set Validity period in months, valid values:
<li>Monthly subscription: `1`, `2`, `3`, 4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of `subnet-xxxxxxxx` which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of `subnet-xxxxxxxx` which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values: 
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`. If the primary instance is pay-as-you-go, so is the read-only instance.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values: 
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`. If the primary instance is pay-as-you-go, so is the read-only instance.
 * @method integer getAutoVoucher() Obtain Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method array getVoucherIds() Obtain Voucher ID list. Currently, you can specify only one voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. Currently, you can specify only one voucher.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getActivityId() Obtain Special offer ID
 * @method void setActivityId(integer $ActivityId) Set Special offer ID
 * @method string getReadOnlyGroupId() Obtain RO group ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group ID
 * @method Tag getTagList() Obtain The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method void setTagList(Tag $TagList) Set The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method array getSecurityGroupIds() Obtain Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

 * @method integer getNeedSupportIpv6() Obtain Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) Set Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method string getName() Obtain Instance name (which will be supported in the future)
 * @method void setName(string $Name) Set Instance name (which will be supported in the future)
 * @method string getDBVersion() Obtain (Disused) You don’t need to specify a version, as the kernel version is as the same as that of the instance.
 * @method void setDBVersion(string $DBVersion) Set (Disused) You don’t need to specify a version, as the kernel version is as the same as that of the instance.
 */
class CreateReadOnlyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Primary AZ of an instance, such as "ap-guangzhou-3".
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     */
    public $Zone;

    /**
     * @var string ID of the primary instance to which the read-only instance belongs
     */
    public $MasterDBInstanceId;

    /**
     * @var string Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     */
    public $SpecCode;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var integer The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
     */
    public $InstanceCount;

    /**
     * @var integer Validity period in months, valid values:
<li>Monthly subscription: `1`, `2`, `3`, 4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
     */
    public $Period;

    /**
     * @var string VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in the format of `subnet-xxxxxxxx` which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     */
    public $SubnetId;

    /**
     * @var string Instance billing mode. Valid values: 
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`. If the primary instance is pay-as-you-go, so is the read-only instance.
     */
    public $InstanceChargeType;

    /**
     * @var integer Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list. Currently, you can specify only one voucher.
     */
    public $VoucherIds;

    /**
     * @var integer Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Special offer ID
     */
    public $ActivityId;

    /**
     * @var string RO group ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var Tag The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     */
    public $TagList;

    /**
     * @var array Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

     */
    public $SecurityGroupIds;

    /**
     * @var integer Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     */
    public $NeedSupportIpv6;

    /**
     * @var string Instance name (which will be supported in the future)
     */
    public $Name;

    /**
     * @var string (Disused) You don’t need to specify a version, as the kernel version is as the same as that of the instance.
     */
    public $DBVersion;

    /**
     * @param string $Zone Primary AZ of an instance, such as "ap-guangzhou-3".
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     * @param string $MasterDBInstanceId ID of the primary instance to which the read-only instance belongs
     * @param string $SpecCode Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     * @param integer $Storage Instance storage capacity in GB
     * @param integer $InstanceCount The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
     * @param integer $Period Validity period in months, valid values:
<li>Monthly subscription: `1`, `2`, `3`, 4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
     * @param string $VpcId VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
     * @param string $SubnetId VPC subnet ID in the format of `subnet-xxxxxxxx` which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     * @param string $InstanceChargeType Instance billing mode. Valid values: 
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`. If the primary instance is pay-as-you-go, so is the read-only instance.
     * @param integer $AutoVoucher Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     * @param array $VoucherIds Voucher ID list. Currently, you can specify only one voucher.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li>`1`: Automatic renewal.
Default value: `0`.
     * @param integer $ProjectId Project ID
     * @param integer $ActivityId Special offer ID
     * @param string $ReadOnlyGroupId RO group ID
     * @param Tag $TagList The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     * @param array $SecurityGroupIds Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

     * @param integer $NeedSupportIpv6 Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     * @param string $Name Instance name (which will be supported in the future)
     * @param string $DBVersion (Disused) You don’t need to specify a version, as the kernel version is as the same as that of the instance.
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

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = new Tag();
            $this->TagList->deserialize($param["TagList"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }
    }
}
