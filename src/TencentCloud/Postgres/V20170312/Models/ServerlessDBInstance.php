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
 * PostgreSQL for Serverless instance description
 *
 * @method string getDBInstanceId() Obtain Instance ID, which is the unique identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID, which is the unique identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDBInstanceName() Obtain Instance name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBInstanceName(string $DBInstanceName) Set Instance name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDBInstanceStatus() Obtain Instance status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBInstanceStatus(string $DBInstanceStatus) Set Instance status
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Availability zone
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability zone
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDBCharset() Obtain Character set
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBCharset(string $DBCharset) Set Character set
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDBVersion() Obtain Database version
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBVersion(string $DBVersion) Set Database version
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getDBInstanceNetInfo() Obtain Instance network information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBInstanceNetInfo(array $DBInstanceNetInfo) Set Instance network information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getDBAccountSet() Obtain Instance account information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBAccountSet(array $DBAccountSet) Set Instance account information
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getDBDatabaseList() Obtain Information of the databases in an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBDatabaseList(array $DBDatabaseList) Set Information of the databases in an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getTagList() Obtain The array of tags bound to an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set The array of tags bound to an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDBKernelVersion() Obtain Database kernel version
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBKernelVersion(string $DBKernelVersion) Set Database kernel version
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getDBMajorVersion() Obtain Database major version number
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set Database major version number
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ServerlessDBInstance extends AbstractModel
{
    /**
     * @var string Instance ID, which is the unique identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBInstanceId;

    /**
     * @var string Instance name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBInstanceName;

    /**
     * @var string Instance status
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBInstanceStatus;

    /**
     * @var string Region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Availability zone
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var integer Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Character set
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBCharset;

    /**
     * @var string Database version
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBVersion;

    /**
     * @var string Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var array Instance network information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBInstanceNetInfo;

    /**
     * @var array Instance account information
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBAccountSet;

    /**
     * @var array Information of the databases in an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBDatabaseList;

    /**
     * @var array The array of tags bound to an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var string Database kernel version
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBKernelVersion;

    /**
     * @var string Database major version number
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DBMajorVersion;

    /**
     * @param string $DBInstanceId Instance ID, which is the unique identifier
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DBInstanceName Instance name
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DBInstanceStatus Instance status
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Zone Availability zone
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $VpcId VPC ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DBCharset Character set
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DBVersion Database version
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $DBInstanceNetInfo Instance network information
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $DBAccountSet Instance account information
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $DBDatabaseList Information of the databases in an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $TagList The array of tags bound to an instance
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DBKernelVersion Database kernel version
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $DBMajorVersion Database major version number
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            $this->DBInstanceName = $param["DBInstanceName"];
        }

        if (array_key_exists("DBInstanceStatus",$param) and $param["DBInstanceStatus"] !== null) {
            $this->DBInstanceStatus = $param["DBInstanceStatus"];
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

        if (array_key_exists("DBCharset",$param) and $param["DBCharset"] !== null) {
            $this->DBCharset = $param["DBCharset"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DBInstanceNetInfo",$param) and $param["DBInstanceNetInfo"] !== null) {
            $this->DBInstanceNetInfo = [];
            foreach ($param["DBInstanceNetInfo"] as $key => $value){
                $obj = new ServerlessDBInstanceNetInfo();
                $obj->deserialize($value);
                array_push($this->DBInstanceNetInfo, $obj);
            }
        }

        if (array_key_exists("DBAccountSet",$param) and $param["DBAccountSet"] !== null) {
            $this->DBAccountSet = [];
            foreach ($param["DBAccountSet"] as $key => $value){
                $obj = new ServerlessDBAccount();
                $obj->deserialize($value);
                array_push($this->DBAccountSet, $obj);
            }
        }

        if (array_key_exists("DBDatabaseList",$param) and $param["DBDatabaseList"] !== null) {
            $this->DBDatabaseList = $param["DBDatabaseList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }
    }
}
