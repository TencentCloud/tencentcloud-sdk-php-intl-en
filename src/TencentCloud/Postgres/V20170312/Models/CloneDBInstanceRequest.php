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
 * @method string getSpecCode() Obtain Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
 * @method integer getStorage() Obtain Instance storage capacity in GB.
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB.
 * @method integer getPeriod() Obtain Valid period in months of the purchased instance. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
 * @method void setPeriod(integer $Period) Set Valid period in months of the purchased instance. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
 * @method integer getAutoRenewFlag() Obtain Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
 * @method string getVpcId() Obtain VPC ID.
 * @method void setVpcId(string $VpcId) Set VPC ID.
 * @method string getSubnetId() Obtain ID of a subnet in the VPC specified by `VpcId`.
 * @method void setSubnetId(string $SubnetId) Set ID of a subnet in the VPC specified by `VpcId`.
 * @method string getName() Obtain Name of the purchased instance.
 * @method void setName(string $Name) Set Name of the purchased instance.
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
 * @method array getSecurityGroupIds() Obtain Security group ID.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method array getTagList() Obtain The information of tags to be bound with the purchased instance. This parameter is left empty by default.
 * @method void setTagList(array $TagList) Set The information of tags to be bound with the purchased instance. This parameter is left empty by default.
 * @method array getDBNodeSet() Obtain This parameter is required if you purchase a multi-AZ deployed instance.
 * @method void setDBNodeSet(array $DBNodeSet) Set This parameter is required if you purchase a multi-AZ deployed instance.
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
 * @method string getVoucherIds() Obtain Voucher ID list.
 * @method void setVoucherIds(string $VoucherIds) Set Voucher ID list.
 * @method integer getActivityId() Obtain Campaign ID.
 * @method void setActivityId(integer $ActivityId) Set Campaign ID.
 * @method string getBackupSetId() Obtain Basic backup set ID.
 * @method void setBackupSetId(string $BackupSetId) Set Basic backup set ID.
 * @method string getRecoveryTargetTime() Obtain Restoration point in time.
 * @method void setRecoveryTargetTime(string $RecoveryTargetTime) Set Restoration point in time.
 */
class CloneDBInstanceRequest extends AbstractModel
{
    /**
     * @var string ID of the original instance to be cloned.
     */
    public $DBInstanceId;

    /**
     * @var string Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
     */
    public $SpecCode;

    /**
     * @var integer Instance storage capacity in GB.
     */
    public $Storage;

    /**
     * @var integer Valid period in months of the purchased instance. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
     */
    public $Period;

    /**
     * @var integer Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
     */
    public $AutoRenewFlag;

    /**
     * @var string VPC ID.
     */
    public $VpcId;

    /**
     * @var string ID of a subnet in the VPC specified by `VpcId`.
     */
    public $SubnetId;

    /**
     * @var string Name of the purchased instance.
     */
    public $Name;

    /**
     * @var string Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
     */
    public $InstanceChargeType;

    /**
     * @var array Security group ID.
     */
    public $SecurityGroupIds;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var array The information of tags to be bound with the purchased instance. This parameter is left empty by default.
     */
    public $TagList;

    /**
     * @var array This parameter is required if you purchase a multi-AZ deployed instance.
     */
    public $DBNodeSet;

    /**
     * @var integer Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
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
     * @param string $DBInstanceId ID of the original instance to be cloned.
     * @param string $SpecCode Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
     * @param integer $Storage Instance storage capacity in GB.
     * @param integer $Period Valid period in months of the purchased instance. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
     * @param integer $AutoRenewFlag Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
     * @param string $VpcId VPC ID.
     * @param string $SubnetId ID of a subnet in the VPC specified by `VpcId`.
     * @param string $Name Name of the purchased instance.
     * @param string $InstanceChargeType Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
     * @param array $SecurityGroupIds Security group ID.
     * @param integer $ProjectId Project ID.
     * @param array $TagList The information of tags to be bound with the purchased instance. This parameter is left empty by default.
     * @param array $DBNodeSet This parameter is required if you purchase a multi-AZ deployed instance.
     * @param integer $AutoVoucher Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
     * @param string $VoucherIds Voucher ID list.
     * @param integer $ActivityId Campaign ID.
     * @param string $BackupSetId Basic backup set ID.
     * @param string $RecoveryTargetTime Restoration point in time.
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
    }
}
