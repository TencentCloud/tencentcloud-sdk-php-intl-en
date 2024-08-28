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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information for resource management account 
 *
 * @method string getMachineIp() Obtain Host private IP address
 * @method void setMachineIp(string $MachineIp) Set Host private IP address
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUid() Obtain Account UID
 * @method void setUid(string $Uid) Set Account UID
 * @method string getGid() Obtain Account GID
 * @method void setGid(string $Gid) Set Account GID
 * @method integer getStatus() Obtain Account status. 0: disabled; 1: enabled.
 * @method void setStatus(integer $Status) Set Account status. 0: disabled; 1: enabled.
 * @method integer getIsRoot() Obtain Whether there is root permission. 0: no; 1: yes; 999: null (Linux only).
 * @method void setIsRoot(integer $IsRoot) Set Whether there is root permission. 0: no; 1: yes; 999: null (Linux only).
 * @method string getLastLoginTime() Obtain Last log-in time
 * @method void setLastLoginTime(string $LastLoginTime) Set Last log-in time
 * @method string getName() Obtain Account name
 * @method void setName(string $Name) Set Account name
 * @method integer getUserType() Obtain Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only).
 * @method void setUserType(integer $UserType) Set Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only).
 * @method integer getIsDomain() Obtain Whether the account is a domain account. 0: no; 1: yes; 999: null (Windows only).
 * @method void setIsDomain(integer $IsDomain) Set Whether the account is a domain account. 0: no; 1: yes; 999: null (Windows only).
 * @method integer getIsSshLogin() Obtain Whether SSH log-in allowed. 1: yes; 0: no; 999: null (Linux only).
 * @method void setIsSshLogin(integer $IsSshLogin) Set Whether SSH log-in allowed. 1: yes; 0: no; 999: null (Linux only).
 * @method string getHomePath() Obtain Home directory
 * @method void setHomePath(string $HomePath) Set Home directory
 * @method string getShell() Obtain Shell path (Linux only)
 * @method void setShell(string $Shell) Set Shell path (Linux only)
 * @method integer getShellLoginStatus() Obtain Whether shell log-in allowed. 0: no; 1: yes (Linux only).
 * @method void setShellLoginStatus(integer $ShellLoginStatus) Set Whether shell log-in allowed. 0: no; 1: yes (Linux only).
 * @method string getPasswordChangeTime() Obtain Password modification time
 * @method void setPasswordChangeTime(string $PasswordChangeTime) Set Password modification time
 * @method string getPasswordDueTime() Obtain Password expiration time (Linux only)
 * @method void setPasswordDueTime(string $PasswordDueTime) Set Password expiration time (Linux only)
 * @method integer getPasswordLockDays() Obtain Password locking time (unit: day). -1: never locked; 999: null (Linux only).
 * @method void setPasswordLockDays(integer $PasswordLockDays) Set Password locking time (unit: day). -1: never locked; 999: null (Linux only).
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getGroupName() Obtain User group name
 * @method void setGroupName(string $GroupName) Set User group name
 * @method string getDisableTime() Obtain Account expiration time
 * @method void setDisableTime(string $DisableTime) Set Account expiration time
 * @method string getLastLoginTerminal() Obtain Last log-in terminal
 * @method void setLastLoginTerminal(string $LastLoginTerminal) Set Last log-in terminal
 * @method string getLastLoginLoc() Obtain Last log-in location
 * @method void setLastLoginLoc(string $LastLoginLoc) Set Last log-in location
 * @method string getLastLoginIp() Obtain Last log-in IP address
 * @method void setLastLoginIp(string $LastLoginIp) Set Last log-in IP address
 * @method integer getPasswordWarnDays() Obtain Password expiration reminder, in days
 * @method void setPasswordWarnDays(integer $PasswordWarnDays) Set Password expiration reminder, in days
 * @method integer getPasswordChangeType() Obtain Password change settings. 0: not allowed; 1: allowed.
 * @method void setPasswordChangeType(integer $PasswordChangeType) Set Password change settings. 0: not allowed; 1: allowed.
 * @method array getKeys() Obtain User public key listNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeys(array $Keys) Set User public key listNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetUserDetail extends AbstractModel
{
    /**
     * @var string Host private IP address
     */
    public $MachineIp;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Account UID
     */
    public $Uid;

    /**
     * @var string Account GID
     */
    public $Gid;

    /**
     * @var integer Account status. 0: disabled; 1: enabled.
     */
    public $Status;

    /**
     * @var integer Whether there is root permission. 0: no; 1: yes; 999: null (Linux only).
     */
    public $IsRoot;

    /**
     * @var string Last log-in time
     */
    public $LastLoginTime;

    /**
     * @var string Account name
     */
    public $Name;

    /**
     * @var integer Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only).
     */
    public $UserType;

    /**
     * @var integer Whether the account is a domain account. 0: no; 1: yes; 999: null (Windows only).
     */
    public $IsDomain;

    /**
     * @var integer Whether SSH log-in allowed. 1: yes; 0: no; 999: null (Linux only).
     */
    public $IsSshLogin;

    /**
     * @var string Home directory
     */
    public $HomePath;

    /**
     * @var string Shell path (Linux only)
     */
    public $Shell;

    /**
     * @var integer Whether shell log-in allowed. 0: no; 1: yes (Linux only).
     */
    public $ShellLoginStatus;

    /**
     * @var string Password modification time
     */
    public $PasswordChangeTime;

    /**
     * @var string Password expiration time (Linux only)
     */
    public $PasswordDueTime;

    /**
     * @var integer Password locking time (unit: day). -1: never locked; 999: null (Linux only).
     */
    public $PasswordLockDays;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string User group name
     */
    public $GroupName;

    /**
     * @var string Account expiration time
     */
    public $DisableTime;

    /**
     * @var string Last log-in terminal
     */
    public $LastLoginTerminal;

    /**
     * @var string Last log-in location
     */
    public $LastLoginLoc;

    /**
     * @var string Last log-in IP address
     */
    public $LastLoginIp;

    /**
     * @var integer Password expiration reminder, in days
     */
    public $PasswordWarnDays;

    /**
     * @var integer Password change settings. 0: not allowed; 1: allowed.
     */
    public $PasswordChangeType;

    /**
     * @var array User public key listNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Keys;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $MachineIp Host private IP address
     * @param string $MachineName Host name
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param string $Uid Account UID
     * @param string $Gid Account GID
     * @param integer $Status Account status. 0: disabled; 1: enabled.
     * @param integer $IsRoot Whether there is root permission. 0: no; 1: yes; 999: null (Linux only).
     * @param string $LastLoginTime Last log-in time
     * @param string $Name Account name
     * @param integer $UserType Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only).
     * @param integer $IsDomain Whether the account is a domain account. 0: no; 1: yes; 999: null (Windows only).
     * @param integer $IsSshLogin Whether SSH log-in allowed. 1: yes; 0: no; 999: null (Linux only).
     * @param string $HomePath Home directory
     * @param string $Shell Shell path (Linux only)
     * @param integer $ShellLoginStatus Whether shell log-in allowed. 0: no; 1: yes (Linux only).
     * @param string $PasswordChangeTime Password modification time
     * @param string $PasswordDueTime Password expiration time (Linux only)
     * @param integer $PasswordLockDays Password locking time (unit: day). -1: never locked; 999: null (Linux only).
     * @param string $Remark Remarks
     * @param string $GroupName User group name
     * @param string $DisableTime Account expiration time
     * @param string $LastLoginTerminal Last log-in terminal
     * @param string $LastLoginLoc Last log-in location
     * @param string $LastLoginIp Last log-in IP address
     * @param integer $PasswordWarnDays Password expiration reminder, in days
     * @param integer $PasswordChangeType Password change settings. 0: not allowed; 1: allowed.
     * @param array $Keys User public key listNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Gid",$param) and $param["Gid"] !== null) {
            $this->Gid = $param["Gid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsRoot",$param) and $param["IsRoot"] !== null) {
            $this->IsRoot = $param["IsRoot"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("IsDomain",$param) and $param["IsDomain"] !== null) {
            $this->IsDomain = $param["IsDomain"];
        }

        if (array_key_exists("IsSshLogin",$param) and $param["IsSshLogin"] !== null) {
            $this->IsSshLogin = $param["IsSshLogin"];
        }

        if (array_key_exists("HomePath",$param) and $param["HomePath"] !== null) {
            $this->HomePath = $param["HomePath"];
        }

        if (array_key_exists("Shell",$param) and $param["Shell"] !== null) {
            $this->Shell = $param["Shell"];
        }

        if (array_key_exists("ShellLoginStatus",$param) and $param["ShellLoginStatus"] !== null) {
            $this->ShellLoginStatus = $param["ShellLoginStatus"];
        }

        if (array_key_exists("PasswordChangeTime",$param) and $param["PasswordChangeTime"] !== null) {
            $this->PasswordChangeTime = $param["PasswordChangeTime"];
        }

        if (array_key_exists("PasswordDueTime",$param) and $param["PasswordDueTime"] !== null) {
            $this->PasswordDueTime = $param["PasswordDueTime"];
        }

        if (array_key_exists("PasswordLockDays",$param) and $param["PasswordLockDays"] !== null) {
            $this->PasswordLockDays = $param["PasswordLockDays"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("DisableTime",$param) and $param["DisableTime"] !== null) {
            $this->DisableTime = $param["DisableTime"];
        }

        if (array_key_exists("LastLoginTerminal",$param) and $param["LastLoginTerminal"] !== null) {
            $this->LastLoginTerminal = $param["LastLoginTerminal"];
        }

        if (array_key_exists("LastLoginLoc",$param) and $param["LastLoginLoc"] !== null) {
            $this->LastLoginLoc = $param["LastLoginLoc"];
        }

        if (array_key_exists("LastLoginIp",$param) and $param["LastLoginIp"] !== null) {
            $this->LastLoginIp = $param["LastLoginIp"];
        }

        if (array_key_exists("PasswordWarnDays",$param) and $param["PasswordWarnDays"] !== null) {
            $this->PasswordWarnDays = $param["PasswordWarnDays"];
        }

        if (array_key_exists("PasswordChangeType",$param) and $param["PasswordChangeType"] !== null) {
            $this->PasswordChangeType = $param["PasswordChangeType"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new AssetUserKeyInfo();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
