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
 * CloneDBInstance request structure.
 *
 * @method string getDBInstanceId() Obtain ID of the original instance to be cloned.
 * @method void setDBInstanceId(string $DBInstanceId) Set ID of the original instance to be cloned.
 * @method string getSpecCode() Obtain Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method integer getStorage() Obtain Instance storage capacity in GB.
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB.
 * @method integer getPeriod() Obtain Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

 * @method void setPeriod(integer $Period) Set Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

 * @method integer getAutoRenewFlag() Obtain Renewal Flag:

- `0`: manual renewal
`1`: auto-renewal

Default value: 0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal Flag:

- `0`: manual renewal
`1`: auto-renewal

Default value: 0
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method string getName() Obtain Name of the newly purchased instance, which can contain up to 60 letters, digits, or symbols (-_). If this parameter is not specified, "Unnamed" will be displayed by default.
 * @method void setName(string $Name) Set Name of the newly purchased instance, which can contain up to 60 letters, digits, or symbols (-_). If this parameter is not specified, "Unnamed" will be displayed by default.
 * @method string getInstanceChargeType() Obtain Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
 * @method array getSecurityGroupIds() Obtain Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method array getTagList() Obtain The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method void setTagList(array $TagList) Set The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method array getDBNodeSet() Obtain Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method void setDBNodeSet(array $DBNodeSet) Set Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method integer getAutoVoucher() Obtain Whether to automatically use coupons:

- 0: No
- 1: Yes

Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use coupons:

- 0: No
- 1: Yes

Default value: 0
 * @method string getVoucherIds() Obtain Voucher ID list.
 * @method void setVoucherIds(string $VoucherIds) Set Voucher ID list.
 * @method integer getActivityId() Obtain Campaign ID.
 * @method void setActivityId(integer $ActivityId) Set Campaign ID.
 * @method string getBackupSetId() Obtain Basic backup set ID.
 * @method void setBackupSetId(string $BackupSetId) Set Basic backup set ID.
 * @method string getRecoveryTargetTime() Obtain Restoration point in time.
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) Set Restoration point in time.
 * @method string getSyncMode() Obtain Primary-standby sync mode, which supports:
<li>Semi-sync: Semi-sync</li>
<li>Async: Asynchronous</li>
Default value for the primary instance: Semi-sync
Default value for the read-only instance: Async
 * @method void setSyncMode(string $SyncMode) Set Primary-standby sync mode, which supports:
<li>Semi-sync: Semi-sync</li>
<li>Async: Asynchronous</li>
Default value for the primary instance: Semi-sync
Default value for the read-only instance: Async
 */
class CloneDBInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the original instance to be cloned.
     */
    public $DBInstanceId;

    /**
     * @var string Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     */
    public $SpecCode;

    /**
     * @var integer Instance storage capacity in GB.
     */
    public $Storage;

    /**
     * @var integer Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

     */
    public $Period;

    /**
     * @var integer Renewal Flag:

- `0`: manual renewal
`1`: auto-renewal

Default value: 0
     */
    public $AutoRenewFlag;

    /**
     * @var string VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     */
    public $SubnetId;

    /**
     * @var string Name of the newly purchased instance, which can contain up to 60 letters, digits, or symbols (-_). If this parameter is not specified, "Unnamed" will be displayed by default.
     */
    public $Name;

    /**
     * @var string Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
     */
    public $InstanceChargeType;

    /**
     * @var array Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

     */
    public $SecurityGroupIds;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var array The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     */
    public $TagList;

    /**
     * @var array Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     */
    public $DBNodeSet;

    /**
     * @var integer Whether to automatically use coupons:

- 0: No
- 1: Yes

Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var string Voucher ID list.
     */
    public $VoucherIds;

    /**
     * @var integer Campaign ID.
     */
    public $ActivityId;

    /**
     * @var string Basic backup set ID.
     */
    public $BackupSetId;

    /**
     * @var string Restoration point in time.
     */
    public $RecoveryTargetTime;

    /**
     * @var string Primary-standby sync mode, which supports:
<li>Semi-sync: Semi-sync</li>
<li>Async: Asynchronous</li>
Default value for the primary instance: Semi-sync
Default value for the read-only instance: Async
     */
    public $SyncMode;

    /**
     * @param string $DBInstanceId ID of the original instance to be cloned.
     * @param string $SpecCode Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     * @param integer $Storage Instance storage capacity in GB.
     * @param integer $Period Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

     * @param integer $AutoRenewFlag Renewal Flag:

- `0`: manual renewal
`1`: auto-renewal

Default value: 0
     * @param string $VpcId VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
     * @param string $SubnetId VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     * @param string $Name Name of the newly purchased instance, which can contain up to 60 letters, digits, or symbols (-_). If this parameter is not specified, "Unnamed" will be displayed by default.
     * @param string $InstanceChargeType Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
     * @param array $SecurityGroupIds Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

     * @param integer $ProjectId Project ID.
     * @param array $TagList The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     * @param array $DBNodeSet Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     * @param integer $AutoVoucher Whether to automatically use coupons:

- 0: No
- 1: Yes

Default value: 0
     * @param string $VoucherIds Voucher ID list.
     * @param integer $ActivityId Campaign ID.
     * @param string $BackupSetId Basic backup set ID.
     * @param string $RecoveryTargetTime Restoration point in time.
     * @param string $SyncMode Primary-standby sync mode, which supports:
<li>Semi-sync: Semi-sync</li>
<li>Async: Asynchronous</li>
Default value for the primary instance: Semi-sync
Default value for the read-only instance: Async
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("RecoveryTargetTime",$param) and $param["RecoveryTargetTime"] !== null) {
            $this->RecoveryTargetTime = $param["RecoveryTargetTime"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }
    }
}
