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
 * CreateInstances request structure.
 *
 * @method string getSpecCode() Obtain Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method integer getInstanceCount() Obtain The number of instances purchased at a time. Value range: 1-10.
 * @method void setInstanceCount(integer $InstanceCount) Set The number of instances purchased at a time. Value range: 1-10.
 * @method integer getPeriod() Obtain Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
 * @method void setPeriod(integer $Period) Set Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
 * @method string getZone() Obtain Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method void setZone(string $Zone) Set Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method string getCharset() Obtain Instance character set. Valid values: `UTF8`, `LATIN1`.
 * @method void setCharset(string $Charset) Set Instance character set. Valid values: `UTF8`, `LATIN1`.
 * @method string getAdminName() Obtain Instance root account name
 * @method void setAdminName(string $AdminName) Set Instance root account name
 * @method string getAdminPassword() Obtain Instance root account password
 * @method void setAdminPassword(string $AdminPassword) Set Instance root account password
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getDBVersion() Obtain PostgreSQL version number. If it is specified, an instance running the latest kernel of PostgreSQL `DBVersion` will be created.
 * @method void setDBVersion(string $DBVersion) Set PostgreSQL version number. If it is specified, an instance running the latest kernel of PostgreSQL `DBVersion` will be created.
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
 * @method array getVoucherIds() Obtain Voucher ID list. Currently, you can specify only one voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. Currently, you can specify only one voucher.
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain ID of a subnet in the VPC specified by `VpcId`
 * @method void setSubnetId(string $SubnetId) Set ID of a subnet in the VPC specified by `VpcId`
 * @method integer getAutoRenewFlag() Obtain Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
 * @method integer getActivityId() Obtain Campaign ID
 * @method void setActivityId(integer $ActivityId) Set Campaign ID
 * @method string getName() Obtain Instance name
 * @method void setName(string $Name) Set Instance name
 * @method integer getNeedSupportIpv6() Obtain Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no). Default value: `0`
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) Set Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no). Default value: `0`
 * @method array getTagList() Obtain The information of tags to be associated with instances. This parameter is left empty by default.
 * @method void setTagList(array $TagList) Set The information of tags to be associated with instances. This parameter is left empty by default.
 * @method array getSecurityGroupIds() Obtain Security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group IDs
 * @method string getDBMajorVersion() Obtain PostgreSQL major version number. Valid values: `10`, `11`, `12`, `13`. If it is specified, an instance running the latest kernel of PostgreSQL `DBMajorVersion` will be created.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set PostgreSQL major version number. Valid values: `10`, `11`, `12`, `13`. If it is specified, an instance running the latest kernel of PostgreSQL `DBMajorVersion` will be created.
 * @method string getDBKernelVersion() Obtain PostgreSQL kernel version number. If it is specified, an instance running kernel `DBKernelVersion` will be created.
 * @method void setDBKernelVersion(string $DBKernelVersion) Set PostgreSQL kernel version number. If it is specified, an instance running kernel `DBKernelVersion` will be created.
 * @method array getDBNodeSet() Obtain 
 * @method void setDBNodeSet(array $DBNodeSet) Set 
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
     */
    public $SpecCode;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var integer The number of instances purchased at a time. Value range: 1-10.
     */
    public $InstanceCount;

    /**
     * @var integer Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
     */
    public $Period;

    /**
     * @var string Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     */
    public $Zone;

    /**
     * @var string Instance character set. Valid values: `UTF8`, `LATIN1`.
     */
    public $Charset;

    /**
     * @var string Instance root account name
     */
    public $AdminName;

    /**
     * @var string Instance root account password
     */
    public $AdminPassword;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string PostgreSQL version number. If it is specified, an instance running the latest kernel of PostgreSQL `DBVersion` will be created.
     */
    public $DBVersion;

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
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string ID of a subnet in the VPC specified by `VpcId`
     */
    public $SubnetId;

    /**
     * @var integer Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Campaign ID
     */
    public $ActivityId;

    /**
     * @var string Instance name
     */
    public $Name;

    /**
     * @var integer Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no). Default value: `0`
     */
    public $NeedSupportIpv6;

    /**
     * @var array The information of tags to be associated with instances. This parameter is left empty by default.
     */
    public $TagList;

    /**
     * @var array Security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @var string PostgreSQL major version number. Valid values: `10`, `11`, `12`, `13`. If it is specified, an instance running the latest kernel of PostgreSQL `DBMajorVersion` will be created.
     */
    public $DBMajorVersion;

    /**
     * @var string PostgreSQL kernel version number. If it is specified, an instance running kernel `DBKernelVersion` will be created.
     */
    public $DBKernelVersion;

    /**
     * @var array 
     */
    public $DBNodeSet;

    /**
     * @param string $SpecCode Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeProductConfig` API.
     * @param integer $Storage Instance storage capacity in GB
     * @param integer $InstanceCount The number of instances purchased at a time. Value range: 1-10.
     * @param integer $Period Valid period in months of purchased instances. Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`. This parameter is set to `1` when the pay-as-you-go billing mode is used.
     * @param string $Zone Availability zone ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     * @param string $Charset Instance character set. Valid values: `UTF8`, `LATIN1`.
     * @param string $AdminName Instance root account name
     * @param string $AdminPassword Instance root account password
     * @param integer $ProjectId Project ID
     * @param string $DBVersion PostgreSQL version number. If it is specified, an instance running the latest kernel of PostgreSQL `DBVersion` will be created.
     * @param string $InstanceChargeType Instance billing mode. Valid values: `PREPAID` (monthly subscription), `POSTPAID_BY_HOUR` (pay-as-you-go).
     * @param integer $AutoVoucher Whether to automatically use vouchers. Valid values: `1` (yes), `0` (no). Default value: `0`.
     * @param array $VoucherIds Voucher ID list. Currently, you can specify only one voucher.
     * @param string $VpcId VPC ID
     * @param string $SubnetId ID of a subnet in the VPC specified by `VpcId`
     * @param integer $AutoRenewFlag Renewal flag. Valid values: `0` (manual renewal), `1` (auto-renewal). Default value: `0`.
     * @param integer $ActivityId Campaign ID
     * @param string $Name Instance name
     * @param integer $NeedSupportIpv6 Whether to support IPv6 address access. Valid values: `1` (yes), `0` (no). Default value: `0`
     * @param array $TagList The information of tags to be associated with instances. This parameter is left empty by default.
     * @param array $SecurityGroupIds Security group IDs
     * @param string $DBMajorVersion PostgreSQL major version number. Valid values: `10`, `11`, `12`, `13`. If it is specified, an instance running the latest kernel of PostgreSQL `DBMajorVersion` will be created.
     * @param string $DBKernelVersion PostgreSQL kernel version number. If it is specified, an instance running kernel `DBKernelVersion` will be created.
     * @param array $DBNodeSet 
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

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
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

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }
    }
}
