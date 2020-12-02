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
 * Instance details
 *
 * @method string getRegion() Obtain Instance region such as ap-guangzhou, which corresponds to the `Region` field of `RegionSet`
 * @method void setRegion(string $Region) Set Instance region such as ap-guangzhou, which corresponds to the `Region` field of `RegionSet`
 * @method string getZone() Obtain Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`
 * @method void setZone(string $Zone) Set Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain SubnetId
 * @method void setSubnetId(string $SubnetId) Set SubnetId
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method string getDBInstanceName() Obtain Instance name
 * @method void setDBInstanceName(string $DBInstanceName) Set Instance name
 * @method string getDBInstanceStatus() Obtain Instance status
 * @method void setDBInstanceStatus(string $DBInstanceStatus) Set Instance status
 * @method integer getDBInstanceMemory() Obtain Assigned instance memory size in GB
 * @method void setDBInstanceMemory(integer $DBInstanceMemory) Set Assigned instance memory size in GB
 * @method integer getDBInstanceStorage() Obtain Assigned instance storage capacity in GB
 * @method void setDBInstanceStorage(integer $DBInstanceStorage) Set Assigned instance storage capacity in GB
 * @method integer getDBInstanceCpu() Obtain Number of assigned CPUs
 * @method void setDBInstanceCpu(integer $DBInstanceCpu) Set Number of assigned CPUs
 * @method string getDBInstanceClass() Obtain Purchasable specification ID
 * @method void setDBInstanceClass(string $DBInstanceClass) Set Purchasable specification ID
 * @method string getDBInstanceType() Obtain Instance type. 1: primary (master instance), 2: readonly (read-only instance), 3: guard (disaster recovery instance), 4: temp (temp instance)
 * @method void setDBInstanceType(string $DBInstanceType) Set Instance type. 1: primary (master instance), 2: readonly (read-only instance), 3: guard (disaster recovery instance), 4: temp (temp instance)
 * @method string getDBInstanceVersion() Obtain Instance edition. Currently, only `standard` edition (dual-server high-availability one-master-one-slave edition) is supported
 * @method void setDBInstanceVersion(string $DBInstanceVersion) Set Instance edition. Currently, only `standard` edition (dual-server high-availability one-master-one-slave edition) is supported
 * @method string getDBCharset() Obtain Instance database character set
 * @method void setDBCharset(string $DBCharset) Set Instance database character set
 * @method string getDBVersion() Obtain PostgreSQL kernel version
 * @method void setDBVersion(string $DBVersion) Set PostgreSQL kernel version
 * @method string getCreateTime() Obtain Instance creation time
 * @method void setCreateTime(string $CreateTime) Set Instance creation time
 * @method string getUpdateTime() Obtain Instance last modified time
 * @method void setUpdateTime(string $UpdateTime) Set Instance last modified time
 * @method string getExpireTime() Obtain Instance expiration time
 * @method void setExpireTime(string $ExpireTime) Set Instance expiration time
 * @method string getIsolatedTime() Obtain Instance isolation time
 * @method void setIsolatedTime(string $IsolatedTime) Set Instance isolation time
 * @method string getPayType() Obtain Billing mode. postpaid: pay-as-you-go
 * @method void setPayType(string $PayType) Set Billing mode. postpaid: pay-as-you-go
 * @method integer getAutoRenew() Obtain Whether to renew automatically. 1: yes, 0: no
 * @method void setAutoRenew(integer $AutoRenew) Set Whether to renew automatically. 1: yes, 0: no
 * @method array getDBInstanceNetInfo() Obtain Instance network connection information
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) Set Instance network connection information
 * @method string getType() Obtain Machine type
 * @method void setType(string $Type) Set Machine type
 * @method integer getAppId() Obtain User `AppId`
 * @method void setAppId(integer $AppId) Set User `AppId`
 * @method integer getUid() Obtain Instance `Uid`
 * @method void setUid(integer $Uid) Set Instance `Uid`
 * @method integer getSupportIpv6() Obtain Whether the instance supports IPv6 address access. Valid values: 1 (yes), 0 (no)
 * @method void setSupportIpv6(integer $SupportIpv6) Set Whether the instance supports IPv6 address access. Valid values: 1 (yes), 0 (no)
 * @method array getTagList() Obtain The information of tags associated with instances.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set The information of tags associated with instances.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMasterDBInstanceId() Obtain Primary instance information, which is returned only when the instance is read-only
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set Primary instance information, which is returned only when the instance is read-only
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getReadOnlyInstanceNum() Obtain Number of read-only instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReadOnlyInstanceNum(integer $ReadOnlyInstanceNum) Set Number of read-only instances
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusInReadonlyGroup() Obtain The status of a instance in a read-only group
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusInReadonlyGroup(string $StatusInReadonlyGroup) Set The status of a instance in a read-only group
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DBInstance extends AbstractModel
{
    /**
     * @var string Instance region such as ap-guangzhou, which corresponds to the `Region` field of `RegionSet`
     */
    public $Region;

    /**
     * @var string Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`
     */
    public $Zone;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string SubnetId
     */
    public $SubnetId;

    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var string Instance name
     */
    public $DBInstanceName;

    /**
     * @var string Instance status
     */
    public $DBInstanceStatus;

    /**
     * @var integer Assigned instance memory size in GB
     */
    public $DBInstanceMemory;

    /**
     * @var integer Assigned instance storage capacity in GB
     */
    public $DBInstanceStorage;

    /**
     * @var integer Number of assigned CPUs
     */
    public $DBInstanceCpu;

    /**
     * @var string Purchasable specification ID
     */
    public $DBInstanceClass;

    /**
     * @var string Instance type. 1: primary (master instance), 2: readonly (read-only instance), 3: guard (disaster recovery instance), 4: temp (temp instance)
     */
    public $DBInstanceType;

    /**
     * @var string Instance edition. Currently, only `standard` edition (dual-server high-availability one-master-one-slave edition) is supported
     */
    public $DBInstanceVersion;

    /**
     * @var string Instance database character set
     */
    public $DBCharset;

    /**
     * @var string PostgreSQL kernel version
     */
    public $DBVersion;

    /**
     * @var string Instance creation time
     */
    public $CreateTime;

    /**
     * @var string Instance last modified time
     */
    public $UpdateTime;

    /**
     * @var string Instance expiration time
     */
    public $ExpireTime;

    /**
     * @var string Instance isolation time
     */
    public $IsolatedTime;

    /**
     * @var string Billing mode. postpaid: pay-as-you-go
     */
    public $PayType;

    /**
     * @var integer Whether to renew automatically. 1: yes, 0: no
     */
    public $AutoRenew;

    /**
     * @var array Instance network connection information
     */
    public $DBInstanceNetInfo;

    /**
     * @var string Machine type
     */
    public $Type;

    /**
     * @var integer User `AppId`
     */
    public $AppId;

    /**
     * @var integer Instance `Uid`
     */
    public $Uid;

    /**
     * @var integer Whether the instance supports IPv6 address access. Valid values: 1 (yes), 0 (no)
     */
    public $SupportIpv6;

    /**
     * @var array The information of tags associated with instances.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var string Primary instance information, which is returned only when the instance is read-only
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MasterDBInstanceId;

    /**
     * @var integer Number of read-only instances
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReadOnlyInstanceNum;

    /**
     * @var string The status of a instance in a read-only group
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusInReadonlyGroup;

    /**
     * @param string $Region Instance region such as ap-guangzhou, which corresponds to the `Region` field of `RegionSet`
     * @param string $Zone Instance AZ such as ap-guangzhou-3, which corresponds to the `Zone` field of `ZoneSet`
     * @param integer $ProjectId Project ID
     * @param string $VpcId VPC ID
     * @param string $SubnetId SubnetId
     * @param string $DBInstanceId Instance ID
     * @param string $DBInstanceName Instance name
     * @param string $DBInstanceStatus Instance status
     * @param integer $DBInstanceMemory Assigned instance memory size in GB
     * @param integer $DBInstanceStorage Assigned instance storage capacity in GB
     * @param integer $DBInstanceCpu Number of assigned CPUs
     * @param string $DBInstanceClass Purchasable specification ID
     * @param string $DBInstanceType Instance type. 1: primary (master instance), 2: readonly (read-only instance), 3: guard (disaster recovery instance), 4: temp (temp instance)
     * @param string $DBInstanceVersion Instance edition. Currently, only `standard` edition (dual-server high-availability one-master-one-slave edition) is supported
     * @param string $DBCharset Instance database character set
     * @param string $DBVersion PostgreSQL kernel version
     * @param string $CreateTime Instance creation time
     * @param string $UpdateTime Instance last modified time
     * @param string $ExpireTime Instance expiration time
     * @param string $IsolatedTime Instance isolation time
     * @param string $PayType Billing mode. postpaid: pay-as-you-go
     * @param integer $AutoRenew Whether to renew automatically. 1: yes, 0: no
     * @param array $DBInstanceNetInfo Instance network connection information
     * @param string $Type Machine type
     * @param integer $AppId User `AppId`
     * @param integer $Uid Instance `Uid`
     * @param integer $SupportIpv6 Whether the instance supports IPv6 address access. Valid values: 1 (yes), 0 (no)
     * @param array $TagList The information of tags associated with instances.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MasterDBInstanceId Primary instance information, which is returned only when the instance is read-only
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ReadOnlyInstanceNum Number of read-only instances
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusInReadonlyGroup The status of a instance in a read-only group
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBInstanceStatus",$param) and $param["DBInstanceStatus"] !== null) {
            $this->DBInstanceStatus = $param["DBInstanceStatus"];
        }

        if (array_key_exists("DBInstanceMemory",$param) and $param["DBInstanceMemory"] !== null) {
            $this->DBInstanceMemory = $param["DBInstanceMemory"];
        }

        if (array_key_exists("DBInstanceStorage",$param) and $param["DBInstanceStorage"] !== null) {
            $this->DBInstanceStorage = $param["DBInstanceStorage"];
        }

        if (array_key_exists("DBInstanceCpu",$param) and $param["DBInstanceCpu"] !== null) {
            $this->DBInstanceCpu = $param["DBInstanceCpu"];
        }

        if (array_key_exists("DBInstanceClass",$param) and $param["DBInstanceClass"] !== null) {
            $this->DBInstanceClass = $param["DBInstanceClass"];
        }

        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            $this->DBInstanceType = $param["DBInstanceType"];
        }

        if (array_key_exists("DBInstanceVersion",$param) and $param["DBInstanceVersion"] !== null) {
            $this->DBInstanceVersion = $param["DBInstanceVersion"];
        }

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new DBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("SupportIpv6",$param) and $param["SupportIpv6"] !== null) {
            $this->SupportIpv6 = $param["SupportIpv6"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("ReadOnlyInstanceNum",$param) and $param["ReadOnlyInstanceNum"] !== null) {
            $this->ReadOnlyInstanceNum = $param["ReadOnlyInstanceNum"];
        }

        if (array_key_exists("StatusInReadonlyGroup",$param) and $param["StatusInReadonlyGroup"] !== null) {
            $this->StatusInReadonlyGroup = $param["StatusInReadonlyGroup"];
        }
    }
}
