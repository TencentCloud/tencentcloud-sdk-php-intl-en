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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Brief information of users in user management.
 *
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method string getUserGroup() Obtain <p>Group to which the user belongs.</p>
 * @method void setUserGroup(string $UserGroup) Set <p>Group to which the user belongs.</p>
 * @method string getUserType() Obtain <p>Manager indicates an administrator, and NormalUser indicates a regular user.</p>
 * @method void setUserType(string $UserType) Set <p>Manager indicates an administrator, and NormalUser indicates a regular user.</p>
 * @method string getCreateTime() Obtain <p>User creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>User creation time.</p>
 * @method boolean getSupportDownLoadKeyTab() Obtain <p>Whether to download the keytab file of the corresponding user. This is only meaningful for clusters with Kerberos enabled.</p>
 * @method void setSupportDownLoadKeyTab(boolean $SupportDownLoadKeyTab) Set <p>Whether to download the keytab file of the corresponding user. This is only meaningful for clusters with Kerberos enabled.</p>
 * @method string getDownLoadKeyTabUrl() Obtain <p>Download URL of the keytab file.</p>
 * @method void setDownLoadKeyTabUrl(string $DownLoadKeyTabUrl) Set <p>Download URL of the keytab file.</p>
 * @method array getGroups() Obtain <p>User group.</p>
 * @method void setGroups(array $Groups) Set <p>User group.</p>
 * @method string getUin() Obtain <p>Customer UIN.</p>
 * @method void setUin(string $Uin) Set <p>Customer UIN.</p>
 * @method integer getState() Obtain <p>User status.</p>
 * @method void setState(integer $State) Set <p>User status.</p>
 * @method boolean getDisplayPasswdUpdateTime() Obtain <p>Whether to display the password update time.</p>
 * @method void setDisplayPasswdUpdateTime(boolean $DisplayPasswdUpdateTime) Set <p>Whether to display the password update time.</p>
 * @method string getPasswdUpdateTime() Obtain <p>Latest password update time.</p>
 * @method void setPasswdUpdateTime(string $PasswdUpdateTime) Set <p>Latest password update time.</p>
 * @method integer getPasswdUsedDay() Obtain <p>Number of days used.</p><p>Unit: days.</p>
 * @method void setPasswdUsedDay(integer $PasswdUsedDay) Set <p>Number of days used.</p><p>Unit: days.</p>
 * @method integer getPasswdUsedHour() Obtain <p>Number of hours used.</p><p>Unit: hours.</p>
 * @method void setPasswdUsedHour(integer $PasswdUsedHour) Set <p>Number of hours used.</p><p>Unit: hours.</p>
 */
class UserManagerUserBriefInfo extends AbstractModel
{
    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var string <p>Group to which the user belongs.</p>
     */
    public $UserGroup;

    /**
     * @var string <p>Manager indicates an administrator, and NormalUser indicates a regular user.</p>
     */
    public $UserType;

    /**
     * @var string <p>User creation time.</p>
     */
    public $CreateTime;

    /**
     * @var boolean <p>Whether to download the keytab file of the corresponding user. This is only meaningful for clusters with Kerberos enabled.</p>
     */
    public $SupportDownLoadKeyTab;

    /**
     * @var string <p>Download URL of the keytab file.</p>
     */
    public $DownLoadKeyTabUrl;

    /**
     * @var array <p>User group.</p>
     */
    public $Groups;

    /**
     * @var string <p>Customer UIN.</p>
     */
    public $Uin;

    /**
     * @var integer <p>User status.</p>
     */
    public $State;

    /**
     * @var boolean <p>Whether to display the password update time.</p>
     */
    public $DisplayPasswdUpdateTime;

    /**
     * @var string <p>Latest password update time.</p>
     */
    public $PasswdUpdateTime;

    /**
     * @var integer <p>Number of days used.</p><p>Unit: days.</p>
     */
    public $PasswdUsedDay;

    /**
     * @var integer <p>Number of hours used.</p><p>Unit: hours.</p>
     */
    public $PasswdUsedHour;

    /**
     * @param string $UserName <p>Username.</p>
     * @param string $UserGroup <p>Group to which the user belongs.</p>
     * @param string $UserType <p>Manager indicates an administrator, and NormalUser indicates a regular user.</p>
     * @param string $CreateTime <p>User creation time.</p>
     * @param boolean $SupportDownLoadKeyTab <p>Whether to download the keytab file of the corresponding user. This is only meaningful for clusters with Kerberos enabled.</p>
     * @param string $DownLoadKeyTabUrl <p>Download URL of the keytab file.</p>
     * @param array $Groups <p>User group.</p>
     * @param string $Uin <p>Customer UIN.</p>
     * @param integer $State <p>User status.</p>
     * @param boolean $DisplayPasswdUpdateTime <p>Whether to display the password update time.</p>
     * @param string $PasswdUpdateTime <p>Latest password update time.</p>
     * @param integer $PasswdUsedDay <p>Number of days used.</p><p>Unit: days.</p>
     * @param integer $PasswdUsedHour <p>Number of hours used.</p><p>Unit: hours.</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SupportDownLoadKeyTab",$param) and $param["SupportDownLoadKeyTab"] !== null) {
            $this->SupportDownLoadKeyTab = $param["SupportDownLoadKeyTab"];
        }

        if (array_key_exists("DownLoadKeyTabUrl",$param) and $param["DownLoadKeyTabUrl"] !== null) {
            $this->DownLoadKeyTabUrl = $param["DownLoadKeyTabUrl"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = $param["Groups"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DisplayPasswdUpdateTime",$param) and $param["DisplayPasswdUpdateTime"] !== null) {
            $this->DisplayPasswdUpdateTime = $param["DisplayPasswdUpdateTime"];
        }

        if (array_key_exists("PasswdUpdateTime",$param) and $param["PasswdUpdateTime"] !== null) {
            $this->PasswdUpdateTime = $param["PasswdUpdateTime"];
        }

        if (array_key_exists("PasswdUsedDay",$param) and $param["PasswdUsedDay"] !== null) {
            $this->PasswdUsedDay = $param["PasswdUsedDay"];
        }

        if (array_key_exists("PasswdUsedHour",$param) and $param["PasswdUsedHour"] !== null) {
            $this->PasswdUsedHour = $param["PasswdUsedHour"];
        }
    }
}
