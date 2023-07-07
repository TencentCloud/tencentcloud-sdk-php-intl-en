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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RUM project information
 *
 * @method string getName() Obtain Project name
 * @method void setName(string $Name) Set Project name
 * @method string getCreator() Obtain Creator ID
 * @method void setCreator(string $Creator) Set Creator ID
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getType() Obtain Project type
 * @method void setType(string $Type) Set Project type
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getRepo() Obtain Project repository address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRepo(string $Repo) Set Project repository address
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getURL() Obtain Project URL
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setURL(string $URL) Set Project URL
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRate() Obtain Project sample rate
 * @method void setRate(string $Rate) Set Project sample rate
 * @method string getKey() Obtain Unique project key (12 characters)
 * @method void setKey(string $Key) Set Unique project key (12 characters)
 * @method integer getEnableURLGroup() Obtain Whether to enable URL aggregation
 * @method void setEnableURLGroup(integer $EnableURLGroup) Set Whether to enable URL aggregation
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getID() Obtain Project ID
 * @method void setID(integer $ID) Set Project ID
 * @method string getInstanceKey() Obtain Instance key
 * @method void setInstanceKey(string $InstanceKey) Set Instance key
 * @method string getDesc() Obtain Project description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDesc(string $Desc) Set Project description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsStar() Obtain Starred status. 1: yes; 0: no
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsStar(integer $IsStar) Set Starred status. 1: yes; 0: no
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectStatus() Obtain Project status (`1`: Creating; `2`: Running; `3`: Abnormal; `4`: Restarting; `5`: Stopping; `6`: Stopped; `7`: Terminating; `8`: Terminated)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setProjectStatus(integer $ProjectStatus) Set Project status (`1`: Creating; `2`: Running; `3`: Abnormal; `4`: Restarting; `5`: Stopping; `6`: Stopped; `7`: Terminating; `8`: Terminated)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getAccessPoint() Obtain Log access point, which can be ignored. 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessPoint(string $AccessPoint) Set Log access point, which can be ignored. 
Note:  This field may return null, indicating that no valid values can be obtained.
 */
class RumProject extends AbstractModel
{
    /**
     * @var string Project name
     */
    public $Name;

    /**
     * @var string Creator ID
     */
    public $Creator;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string Project type
     */
    public $Type;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Project repository address
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Repo;

    /**
     * @var string Project URL
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $URL;

    /**
     * @var string Project sample rate
     */
    public $Rate;

    /**
     * @var string Unique project key (12 characters)
     */
    public $Key;

    /**
     * @var integer Whether to enable URL aggregation
     */
    public $EnableURLGroup;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Project ID
     */
    public $ID;

    /**
     * @var string Instance key
     */
    public $InstanceKey;

    /**
     * @var string Project description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Desc;

    /**
     * @var integer Starred status. 1: yes; 0: no
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsStar;

    /**
     * @var integer Project status (`1`: Creating; `2`: Running; `3`: Abnormal; `4`: Restarting; `5`: Stopping; `6`: Stopped; `7`: Terminating; `8`: Terminated)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProjectStatus;

    /**
     * @var string Log access point, which can be ignored. 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessPoint;

    /**
     * @param string $Name Project name
     * @param string $Creator Creator ID
     * @param string $InstanceID Instance ID
     * @param string $Type Project type
     * @param string $CreateTime Creation time
     * @param string $Repo Project repository address
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $URL Project URL
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Rate Project sample rate
     * @param string $Key Unique project key (12 characters)
     * @param integer $EnableURLGroup Whether to enable URL aggregation
     * @param string $InstanceName Instance name
     * @param integer $ID Project ID
     * @param string $InstanceKey Instance key
     * @param string $Desc Project description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsStar Starred status. 1: yes; 0: no
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectStatus Project status (`1`: Creating; `2`: Running; `3`: Abnormal; `4`: Restarting; `5`: Stopping; `6`: Stopped; `7`: Terminating; `8`: Terminated)
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $AccessPoint Log access point, which can be ignored. 
Note:  This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Repo",$param) and $param["Repo"] !== null) {
            $this->Repo = $param["Repo"];
        }

        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("EnableURLGroup",$param) and $param["EnableURLGroup"] !== null) {
            $this->EnableURLGroup = $param["EnableURLGroup"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("IsStar",$param) and $param["IsStar"] !== null) {
            $this->IsStar = $param["IsStar"];
        }

        if (array_key_exists("ProjectStatus",$param) and $param["ProjectStatus"] !== null) {
            $this->ProjectStatus = $param["ProjectStatus"];
        }

        if (array_key_exists("AccessPoint",$param) and $param["AccessPoint"] !== null) {
            $this->AccessPoint = $param["AccessPoint"];
        }
    }
}
