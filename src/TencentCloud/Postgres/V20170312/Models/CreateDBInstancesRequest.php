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
 * CreateDBInstances request structure.
 *
 * @method string getSpecCode() Obtain Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
 * @method integer getStorage() Obtain Instance capacity size in GB.
 * @method void setStorage(integer $Storage) Set Instance capacity size in GB.
 * @method integer getInstanceCount() Obtain Number of instances purchased at a time. Value range: 1-100.
 * @method void setInstanceCount(integer $InstanceCount) Set Number of instances purchased at a time. Value range: 1-100.
 * @method integer getPeriod() Obtain Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
 * @method void setPeriod(integer $Period) Set Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
 * @method string getZone() Obtain AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method void setZone(string $Zone) Set AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
 * @method integer getProjectId() Obtain Project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID.
 * @method string getDBVersion() Obtain PostgreSQL community major version + minor version number.
It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.
 * @method void setDBVersion(string $DBVersion) Set PostgreSQL community major version + minor version number.
It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.
 * @method string getInstanceChargeType() Obtain Instance billing type.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type.
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. 1: yes, 0: no. Default value: no.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. 1: yes, 0: no. Default value: no.
 * @method array getVoucherIds() Obtain Voucher ID list (only one voucher can be specified currently).
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list (only one voucher can be specified currently).
 * @method string getVpcId() Obtain VPC ID.
 * @method void setVpcId(string $VpcId) Set VPC ID.
 * @method string getSubnetId() Obtain VPC subnet ID.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID.
 * @method integer getAutoRenewFlag() Obtain Renewal flag. 0: normal renewal (default), 1: auto-renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal flag. 0: normal renewal (default), 1: auto-renewal.
 * @method integer getActivityId() Obtain Activity ID
 * @method void setActivityId(integer $ActivityId) Set Activity ID
 * @method string getName() Obtain Instance name (which will be supported in the future)
 * @method void setName(string $Name) Set Instance name (which will be supported in the future)
 * @method integer getNeedSupportIpv6() Obtain Whether to support IPv6 address access. Valid values: 1 (yes), 0 (no)
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) Set Whether to support IPv6 address access. Valid values: 1 (yes), 0 (no)
 * @method array getTagList() Obtain The information of tags to be associated with instances. This parameter is left empty by default.
 * @method void setTagList(array $TagList) Set The information of tags to be associated with instances. This parameter is left empty by default.
 * @method array getSecurityGroupIds() Obtain Security group ID
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID
 * @method string getDBMajorVersion() Obtain The major version number of PostgreSQL (this parameter is currently required), and the version information can be obtained from [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1). Currently major versions `10`, `11`, `12`, `13`, `14`, and `15` are supported. For details, see [Kernel Version Overview](https://intl.cloud.tencent.com/document/product/409/67018).
When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set The major version number of PostgreSQL (this parameter is currently required), and the version information can be obtained from [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1). Currently major versions `10`, `11`, `12`, `13`, `14`, and `15` are supported. For details, see [Kernel Version Overview](https://intl.cloud.tencent.com/document/product/409/67018).
When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.
 * @method string getDBKernelVersion() Obtain PostgreSQL kernel version number.
It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.
 * @method void setDBKernelVersion(string $DBKernelVersion) Set PostgreSQL kernel version number.
It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.
 */
class CreateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
     */
    public $SpecCode;

    /**
     * @var integer Instance capacity size in GB.
     */
    public $Storage;

    /**
     * @var integer Number of instances purchased at a time. Value range: 1-100.
     */
    public $InstanceCount;

    /**
     * @var integer Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
     */
    public $Period;

    /**
     * @var string AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     */
    public $Zone;

    /**
     * @var integer Project ID.
     */
    public $ProjectId;

    /**
     * @var string PostgreSQL community major version + minor version number.
It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.
     */
    public $DBVersion;

    /**
     * @var string Instance billing type.
     */
    public $InstanceChargeType;

    /**
     * @var integer Whether to automatically use vouchers. 1: yes, 0: no. Default value: no.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list (only one voucher can be specified currently).
     */
    public $VoucherIds;

    /**
     * @var string VPC ID.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID.
     */
    public $SubnetId;

    /**
     * @var integer Renewal flag. 0: normal renewal (default), 1: auto-renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Activity ID
     */
    public $ActivityId;

    /**
     * @var string Instance name (which will be supported in the future)
     */
    public $Name;

    /**
     * @var integer Whether to support IPv6 address access. Valid values: 1 (yes), 0 (no)
     */
    public $NeedSupportIpv6;

    /**
     * @var array The information of tags to be associated with instances. This parameter is left empty by default.
     */
    public $TagList;

    /**
     * @var array Security group ID
     */
    public $SecurityGroupIds;

    /**
     * @var string The major version number of PostgreSQL (this parameter is currently required), and the version information can be obtained from [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1). Currently major versions `10`, `11`, `12`, `13`, `14`, and `15` are supported. For details, see [Kernel Version Overview](https://intl.cloud.tencent.com/document/product/409/67018).
When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.
     */
    public $DBMajorVersion;

    /**
     * @var string PostgreSQL kernel version number.
It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.
     */
    public $DBKernelVersion;

    /**
     * @param string $SpecCode Purchasable specification ID, which can be obtained through the `SpecCode` field in the returned value of the `DescribeClasses` API.
     * @param integer $Storage Instance capacity size in GB.
     * @param integer $InstanceCount Number of instances purchased at a time. Value range: 1-100.
     * @param integer $Period Length of purchase in months. Currently, only 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36 are supported.
     * @param string $Zone AZ ID, which can be obtained through the `Zone` field in the returned value of the `DescribeZones` API.
     * @param integer $ProjectId Project ID.
     * @param string $DBVersion PostgreSQL community major version + minor version number.
It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.
     * @param string $InstanceChargeType Instance billing type.
     * @param integer $AutoVoucher Whether to automatically use vouchers. 1: yes, 0: no. Default value: no.
     * @param array $VoucherIds Voucher ID list (only one voucher can be specified currently).
     * @param string $VpcId VPC ID.
     * @param string $SubnetId VPC subnet ID.
     * @param integer $AutoRenewFlag Renewal flag. 0: normal renewal (default), 1: auto-renewal.
     * @param integer $ActivityId Activity ID
     * @param string $Name Instance name (which will be supported in the future)
     * @param integer $NeedSupportIpv6 Whether to support IPv6 address access. Valid values: 1 (yes), 0 (no)
     * @param array $TagList The information of tags to be associated with instances. This parameter is left empty by default.
     * @param array $SecurityGroupIds Security group ID
     * @param string $DBMajorVersion The major version number of PostgreSQL (this parameter is currently required), and the version information can be obtained from [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1). Currently major versions `10`, `11`, `12`, `13`, `14`, and `15` are supported. For details, see [Kernel Version Overview](https://intl.cloud.tencent.com/document/product/409/67018).
When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.
     * @param string $DBKernelVersion PostgreSQL kernel version number.
It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.
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
    }
}
