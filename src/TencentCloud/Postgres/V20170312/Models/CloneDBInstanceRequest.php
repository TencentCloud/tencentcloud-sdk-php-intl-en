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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CloneDBInstance request structure.
 *
 * @method string getDBInstanceId() Obtain The source instance ID to be cloned. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set The source instance ID to be cloned. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1).
 * @method string getSpecCode() Obtain Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method integer getStorage() Obtain Instance disk capacity size. set step size to 10. unit: GB.
 * @method void setStorage(integer $Storage) Set Instance disk capacity size. set step size to 10. unit: GB.
 * @method integer getPeriod() Obtain Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

 * @method void setPeriod(integer $Period) Set Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

 * @method integer getAutoRenewFlag() Obtain Specifies the auto-renewal flag. this parameter is valid only when the billing mode is prepaid.
Valid values:.

- `0`: specifies manual renewal.
-`1`: specifies auto-renewal.

Default value: 0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Specifies the auto-renewal flag. this parameter is valid only when the billing mode is prepaid.
Valid values:.

- `0`: specifies manual renewal.
-`1`: specifies auto-renewal.

Default value: 0
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method string getName() Obtain Specifies the instance name for new purchase, only supports chinese/english/digits/"_"/"-" with length less than 60. displays "source instance name-Copy" by default if no instance name is specified.
 * @method void setName(string $Name) Set Specifies the instance name for new purchase, only supports chinese/english/digits/"_"/"-" with length less than 60. displays "source instance name-Copy" by default if no instance name is specified.
 * @method string getInstanceChargeType() Obtain Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., yearly/monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., yearly/monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
 * @method array getSecurityGroupIds() Obtain Security group to which an instance belongs. obtain this parameter by calling the SecurityGroupId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.

 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group to which an instance belongs. obtain this parameter by calling the SecurityGroupId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.

 * @method integer getProjectId() Obtain Project ID. default value is 0, which means it belongs to the default project.
 * @method void setProjectId(integer $ProjectId) Set Project ID. default value is 0, which means it belongs to the default project.
 * @method array getTagList() Obtain The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method void setTagList(array $TagList) Set The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method array getDBNodeSet() Obtain Deployment information of instance nodes. the availability zone of primary and secondary nodes is required. when multi-availability zone deployment is supported, the availability zone information for each node must be specified.
AZ information can be obtained by calling the DescribeZones api (https://www.tencentcloud.comom/document/api/409/16769?from_cn_redirect=1) and checking the Zone field in the returned value.
 * @method void setDBNodeSet(array $DBNodeSet) Set Deployment information of instance nodes. the availability zone of primary and secondary nodes is required. when multi-availability zone deployment is supported, the availability zone information for each node must be specified.
AZ information can be obtained by calling the DescribeZones api (https://www.tencentcloud.comom/document/api/409/16769?from_cn_redirect=1) and checking the Zone field in the returned value.
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
 * @method string getBackupSetId() Obtain Basic backup set ID. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
 * @method void setBackupSetId(string $BackupSetId) Set Basic backup set ID. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
 * @method string getRecoveryTargetTime() Obtain Specifies the recovery time point. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) Set Specifies the recovery time point. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
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
 * @method boolean getDeletionProtection() Obtain Specifies whether to enable deletion protection for the instance. valid values: true (enable deletion protection), false (disable deletion protection).
 * @method void setDeletionProtection(boolean $DeletionProtection) Set Specifies whether to enable deletion protection for the instance. valid values: true (enable deletion protection), false (disable deletion protection).
 */
class CloneDBInstanceRequest extends AbstractModel
{
    /**
     * @var string The source instance ID to be cloned. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     */
    public $SpecCode;

    /**
     * @var integer Instance disk capacity size. set step size to 10. unit: GB.
     */
    public $Storage;

    /**
     * @var integer Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

     */
    public $Period;

    /**
     * @var integer Specifies the auto-renewal flag. this parameter is valid only when the billing mode is prepaid.
Valid values:.

- `0`: specifies manual renewal.
-`1`: specifies auto-renewal.

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
     * @var string Specifies the instance name for new purchase, only supports chinese/english/digits/"_"/"-" with length less than 60. displays "source instance name-Copy" by default if no instance name is specified.
     */
    public $Name;

    /**
     * @var string Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., yearly/monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
     */
    public $InstanceChargeType;

    /**
     * @var array Security group to which an instance belongs. obtain this parameter by calling the SecurityGroupId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.

     */
    public $SecurityGroupIds;

    /**
     * @var integer Project ID. default value is 0, which means it belongs to the default project.
     */
    public $ProjectId;

    /**
     * @var array The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     */
    public $TagList;

    /**
     * @var array Deployment information of instance nodes. the availability zone of primary and secondary nodes is required. when multi-availability zone deployment is supported, the availability zone information for each node must be specified.
AZ information can be obtained by calling the DescribeZones api (https://www.tencentcloud.comom/document/api/409/16769?from_cn_redirect=1) and checking the Zone field in the returned value.
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
     * @var string Basic backup set ID. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
     */
    public $BackupSetId;

    /**
     * @var string Specifies the recovery time point. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
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
     * @var boolean Specifies whether to enable deletion protection for the instance. valid values: true (enable deletion protection), false (disable deletion protection).
     */
    public $DeletionProtection;

    /**
     * @param string $DBInstanceId The source instance ID to be cloned. can be obtained through the DescribeDBInstances api (https://www.tencentcloud.comom/document/api/409/16773?from_cn_redirect=1).
     * @param string $SpecCode Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     * @param integer $Storage Instance disk capacity size. set step size to 10. unit: GB.
     * @param integer $Period Purchase duration, in months.

- Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.
- Pay-as-you-go: Only supports `1`.

     * @param integer $AutoRenewFlag Specifies the auto-renewal flag. this parameter is valid only when the billing mode is prepaid.
Valid values:.

- `0`: specifies manual renewal.
-`1`: specifies auto-renewal.

Default value: 0
     * @param string $VpcId VPC ID in the format of `vpc-xxxxxxx`, which can be obtained in the console or from the `unVpcId` field in the return value of the [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) API.
     * @param string $SubnetId VPC subnet ID in the format of `subnet-xxxxxxxx`, which can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     * @param string $Name Specifies the instance name for new purchase, only supports chinese/english/digits/"_"/"-" with length less than 60. displays "source instance name-Copy" by default if no instance name is specified.
     * @param string $InstanceChargeType Instance billing type, which currently supports:

- PREPAID: Prepaid, i.e., yearly/monthly subscription
- POSTPAID_BY_HOUR: Pay-as-you-go, i.e., pay by consumption

Default value: PREPAID
     * @param array $SecurityGroupIds Security group to which an instance belongs. obtain this parameter by calling the SecurityGroupId field in the return value of [DescribeSecurityGroups](https://www.tencentcloud.comom/document/api/215/15808?from_cn_redirect=1). if not specified, the default security group is bound.

     * @param integer $ProjectId Project ID. default value is 0, which means it belongs to the default project.
     * @param array $TagList The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     * @param array $DBNodeSet Deployment information of instance nodes. the availability zone of primary and secondary nodes is required. when multi-availability zone deployment is supported, the availability zone information for each node must be specified.
AZ information can be obtained by calling the DescribeZones api (https://www.tencentcloud.comom/document/api/409/16769?from_cn_redirect=1) and checking the Zone field in the returned value.
     * @param integer $AutoVoucher Whether to automatically use coupons:

- 0: No
- 1: Yes

Default value: 0
     * @param string $VoucherIds Voucher ID list.
     * @param integer $ActivityId Campaign ID.
     * @param string $BackupSetId Basic backup set ID. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
     * @param string $RecoveryTargetTime Specifies the recovery time point. either `BackupSetId` or `RecoveryTargetTime` must be provided, and cannot include both.
     * @param string $SyncMode Primary-standby sync mode, which supports:
<li>Semi-sync: Semi-sync</li>
<li>Async: Asynchronous</li>
Default value for the primary instance: Semi-sync
Default value for the read-only instance: Async
     * @param boolean $DeletionProtection Specifies whether to enable deletion protection for the instance. valid values: true (enable deletion protection), false (disable deletion protection).
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

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
