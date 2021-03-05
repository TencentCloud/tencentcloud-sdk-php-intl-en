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
 * @method string getSpecCode() Obtain Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
 * @method string getDBVersion() Obtain PostgreSQL kernel version, which must be the same as that of the primary instance
 * @method void setDBVersion(string $DBVersion) Set PostgreSQL kernel version, which must be the same as that of the primary instance
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method integer getInstanceCount() Obtain Number of instances purchased at a time. Value range: 1–100.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances purchased at a time. Value range: 1–100.
 * @method integer getPeriod() Obtain Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
 * @method void setPeriod(integer $Period) Set Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
 * @method string getMasterDBInstanceId() Obtain ID of the primary instance to which the read-only replica belongs
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set ID of the primary instance to which the read-only replica belongs
 * @method string getZone() Obtain Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method void setZone(string $Zone) Set Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
 * @method array getVoucherIds() Obtain Voucher ID list. Currently, you can specify only one voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. Currently, you can specify only one voucher.
 * @method integer getAutoRenewFlag() Obtain Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain VPC subnet ID
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID
 * @method integer getActivityId() Obtain Special offer ID
 * @method void setActivityId(integer $ActivityId) Set Special offer ID
 * @method string getName() Obtain Instance name (which will be supported in the future)
 * @method void setName(string $Name) Set Instance name (which will be supported in the future)
 * @method integer getNeedSupportIpv6() Obtain Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no).
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) Set Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no).
 * @method string getReadOnlyGroupId() Obtain RO group ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group ID
 * @method Tag getTagList() Obtain The information of tags to be associated with instances. This parameter is left empty by default.
 * @method void setTagList(Tag $TagList) Set The information of tags to be associated with instances. This parameter is left empty by default.
 */
class CreateReadOnlyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
     */
    public $SpecCode;

    /**
     * @var string PostgreSQL kernel version, which must be the same as that of the primary instance
     */
    public $DBVersion;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var integer Number of instances purchased at a time. Value range: 1–100.
     */
    public $InstanceCount;

    /**
     * @var integer Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
     */
    public $Period;

    /**
     * @var string ID of the primary instance to which the read-only replica belongs
     */
    public $MasterDBInstanceId;

    /**
     * @var string Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     */
    public $Zone;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
     */
    public $InstanceChargeType;

    /**
     * @var integer Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list. Currently, you can specify only one voucher.
     */
    public $VoucherIds;

    /**
     * @var integer Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
     */
    public $AutoRenewFlag;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Special offer ID
     */
    public $ActivityId;

    /**
     * @var string Instance name (which will be supported in the future)
     */
    public $Name;

    /**
     * @var integer Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no).
     */
    public $NeedSupportIpv6;

    /**
     * @var string RO group ID
     */
    public $ReadOnlyGroupId;

    /**
     * @var Tag The information of tags to be associated with instances. This parameter is left empty by default.
     */
    public $TagList;

    /**
     * @param string $SpecCode Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
     * @param string $DBVersion PostgreSQL kernel version, which must be the same as that of the primary instance
     * @param integer $Storage Instance storage capacity in GB
     * @param integer $InstanceCount Number of instances purchased at a time. Value range: 1–100.
     * @param integer $Period Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
     * @param string $MasterDBInstanceId ID of the primary instance to which the read-only replica belongs
     * @param string $Zone Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     * @param integer $ProjectId Project ID
     * @param string $InstanceChargeType Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
     * @param integer $AutoVoucher Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
     * @param array $VoucherIds Voucher ID list. Currently, you can specify only one voucher.
     * @param integer $AutoRenewFlag Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
     * @param string $VpcId VPC ID
     * @param string $SubnetId VPC subnet ID
     * @param integer $ActivityId Special offer ID
     * @param string $Name Instance name (which will be supported in the future)
     * @param integer $NeedSupportIpv6 Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no).
     * @param string $ReadOnlyGroupId RO group ID
     * @param Tag $TagList The information of tags to be associated with instances. This parameter is left empty by default.
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
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

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = new Tag();
            $this->TagList->deserialize($param["TagList"]);
        }
    }
}
