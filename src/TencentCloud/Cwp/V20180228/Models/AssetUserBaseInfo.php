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
 * Resource management account basic information
 *
 * @method string getMachineIp() Obtain Host private IP address
 * @method void setMachineIp(string $MachineIp) Set Host private IP address
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getOsInfo() Obtain Operating System Information
 * @method void setOsInfo(string $OsInfo) Set Operating System Information
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUid() Obtain Account UID
 * @method void setUid(string $Uid) Set Account UID
 * @method string getGid() Obtain Account GID
 * @method void setGid(string $Gid) Set Account GID
 * @method integer getStatus() Obtain Account status. 0: disabled; 1: enabled
 * @method void setStatus(integer $Status) Set Account status. 0: disabled; 1: enabled
 * @method integer getIsRoot() Obtain Whether there is root permission. 0: no; 1: yes; 999: null (Linux only)
 * @method void setIsRoot(integer $IsRoot) Set Whether there is root permission. 0: no; 1: yes; 999: null (Linux only)
 * @method integer getLoginType() Obtain Log-in method. 0: log-in not allowed; 1: only key-based log-in allowed; 2: only password-based log-in allowed; 3: both key-based log-in and password-based log-in allowed; 999: null (Linux only)
 * @method void setLoginType(integer $LoginType) Set Log-in method. 0: log-in not allowed; 1: only key-based log-in allowed; 2: only password-based log-in allowed; 3: both key-based log-in and password-based log-in allowed; 999: null (Linux only)
 * @method string getLastLoginTime() Obtain Last log-in time
 * @method void setLastLoginTime(string $LastLoginTime) Set Last log-in time
 * @method string getName() Obtain Account name
 * @method void setName(string $Name) Set Account name
 * @method integer getProjectId() Obtain Host business group ID
 * @method void setProjectId(integer $ProjectId) Set Host business group ID
 * @method integer getUserType() Obtain Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only)
 * @method void setUserType(integer $UserType) Set Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only)
 * @method integer getIsDomain() Obtain Whether a domain account. 0: no; 1: yes; 2: no; 999: null (Windows only)
 * @method void setIsDomain(integer $IsDomain) Set Whether a domain account. 0: no; 1: yes; 2: no; 999: null (Windows only)
 * @method integer getIsSudo() Obtain Whether there is sudo permissions: 1: yes; 0: No; 999: null (Linux only)
 * @method void setIsSudo(integer $IsSudo) Set Whether there is sudo permissions: 1: yes; 0: No; 999: null (Linux only)
 * @method integer getIsSshLogin() Obtain Whether ssh log-in allowed. 1: yes; 0: no; 999: null (Linux only)
 * @method void setIsSshLogin(integer $IsSshLogin) Set Whether ssh log-in allowed. 1: yes; 0: no; 999: null (Linux only)
 * @method string getHomePath() Obtain Home directory
 * @method void setHomePath(string $HomePath) Set Home directory
 * @method string getShell() Obtain Shell path (Linux only)
 * @method void setShell(string $Shell) Set Shell path (Linux only)
 * @method integer getShellLoginStatus() Obtain Whether shell log-in allowed. 0: no; 1: yes (Linux only)
 * @method void setShellLoginStatus(integer $ShellLoginStatus) Set Whether shell log-in allowed. 0: no; 1: yes (Linux only)
 * @method string getPasswordChangeTime() Obtain Password modification time
 * @method void setPasswordChangeTime(string $PasswordChangeTime) Set Password modification time
 * @method string getPasswordDueTime() Obtain Password expiration time (Linux only)
 * @method void setPasswordDueTime(string $PasswordDueTime) Set Password expiration time (Linux only)
 * @method integer getPasswordLockDays() Obtain Password locking time (unit: day): -1 - never locked; 999 - null (Linux only)
 * @method void setPasswordLockDays(integer $PasswordLockDays) Set Password locking time (unit: day): -1 - never locked; 999 - null (Linux only)
 * @method integer getPasswordStatus() Obtain Password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked; 999 - null (Linux only)
 * @method void setPasswordStatus(integer $PasswordStatus) Set Password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked; 999 - null (Linux only)
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method integer getIsNew() Obtain Whether new [0: no|1: yes]
 * @method void setIsNew(integer $IsNew) Set Whether new [0: no|1: yes]
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetUserBaseInfo extends AbstractModel
{
    /**
     * @var string Host private IP address
     */
    public $MachineIp;

    /**
     * @var string Host public IP address
     */
    public $MachineWanIp;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Operating System Information
     */
    public $OsInfo;

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
     * @var integer Account status. 0: disabled; 1: enabled
     */
    public $Status;

    /**
     * @var integer Whether there is root permission. 0: no; 1: yes; 999: null (Linux only)
     */
    public $IsRoot;

    /**
     * @var integer Log-in method. 0: log-in not allowed; 1: only key-based log-in allowed; 2: only password-based log-in allowed; 3: both key-based log-in and password-based log-in allowed; 999: null (Linux only)
     */
    public $LoginType;

    /**
     * @var string Last log-in time
     */
    public $LastLoginTime;

    /**
     * @var string Account name
     */
    public $Name;

    /**
     * @var integer Host business group ID
     */
    public $ProjectId;

    /**
     * @var integer Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only)
     */
    public $UserType;

    /**
     * @var integer Whether a domain account. 0: no; 1: yes; 2: no; 999: null (Windows only)
     */
    public $IsDomain;

    /**
     * @var integer Whether there is sudo permissions: 1: yes; 0: No; 999: null (Linux only)
     */
    public $IsSudo;

    /**
     * @var integer Whether ssh log-in allowed. 1: yes; 0: no; 999: null (Linux only)
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
     * @var integer Whether shell log-in allowed. 0: no; 1: yes (Linux only)
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
     * @var integer Password locking time (unit: day): -1 - never locked; 999 - null (Linux only)
     */
    public $PasswordLockDays;

    /**
     * @var integer Password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked; 999 - null (Linux only)
     */
    public $PasswordStatus;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string First collection time
     */
    public $FirstTime;

    /**
     * @var integer Whether new [0: no|1: yes]
     */
    public $IsNew;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineIp Host private IP address
     * @param string $MachineWanIp Host public IP address
     * @param string $MachineName Host name
     * @param string $OsInfo Operating System Information
     * @param string $Uuid Host UUID
     * @param string $Quuid Host QUUID
     * @param string $Uid Account UID
     * @param string $Gid Account GID
     * @param integer $Status Account status. 0: disabled; 1: enabled
     * @param integer $IsRoot Whether there is root permission. 0: no; 1: yes; 999: null (Linux only)
     * @param integer $LoginType Log-in method. 0: log-in not allowed; 1: only key-based log-in allowed; 2: only password-based log-in allowed; 3: both key-based log-in and password-based log-in allowed; 999: null (Linux only)
     * @param string $LastLoginTime Last log-in time
     * @param string $Name Account name
     * @param integer $ProjectId Host business group ID
     * @param integer $UserType Account type. 0: guest user; 1: standard user; 2: administrator user; 999: null (Windows only)
     * @param integer $IsDomain Whether a domain account. 0: no; 1: yes; 2: no; 999: null (Windows only)
     * @param integer $IsSudo Whether there is sudo permissions: 1: yes; 0: No; 999: null (Linux only)
     * @param integer $IsSshLogin Whether ssh log-in allowed. 1: yes; 0: no; 999: null (Linux only)
     * @param string $HomePath Home directory
     * @param string $Shell Shell path (Linux only)
     * @param integer $ShellLoginStatus Whether shell log-in allowed. 0: no; 1: yes (Linux only)
     * @param string $PasswordChangeTime Password modification time
     * @param string $PasswordDueTime Password expiration time (Linux only)
     * @param integer $PasswordLockDays Password locking time (unit: day): -1 - never locked; 999 - null (Linux only)
     * @param integer $PasswordStatus Password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked; 999 - null (Linux only)
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First collection time
     * @param integer $IsNew Whether new [0: no|1: yes]
     * @param MachineExtraInfo $MachineExtraInfo Additional information
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

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
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

        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("IsDomain",$param) and $param["IsDomain"] !== null) {
            $this->IsDomain = $param["IsDomain"];
        }

        if (array_key_exists("IsSudo",$param) and $param["IsSudo"] !== null) {
            $this->IsSudo = $param["IsSudo"];
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

        if (array_key_exists("PasswordStatus",$param) and $param["PasswordStatus"] !== null) {
            $this->PasswordStatus = $param["PasswordStatus"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
