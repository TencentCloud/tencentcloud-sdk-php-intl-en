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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User role information
 *
 * @method integer getId() Obtain Business ID.
 * @method void setId(integer $Id) Set Business ID.
 * @method array getRoleList() Obtain This API is used to obtain the role list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleList(array $RoleList) Set This API is used to obtain the role list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRoleIdList() Obtain Role ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleIdList(array $RoleIdList) Set Role ID list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain User ID.
 * @method void setUserId(string $UserId) Set User ID.
 * @method string getUserName() Obtain Username.
 * @method void setUserName(string $UserName) Set Username.
 * @method string getCorpId() Obtain Enterprise ID.
 * @method void setCorpId(string $CorpId) Set Enterprise ID.
 * @method string getEmail() Obtain Email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set Email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedUser() Obtain Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedUser(string $CreatedUser) Set Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedUser() Obtain Updater.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedUser(string $UpdatedUser) Set Updater.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastLogin() Obtain Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastLogin(string $LastLogin) Set Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Account status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Account status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneNumber() Obtain Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneNumber(string $PhoneNumber) Set Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAreaCode() Obtain Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAreaCode(string $AreaCode) Set Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getRootAccount() Obtain Whether it is the root account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRootAccount(boolean $RootAccount) Set Whether it is the root account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getCorpAdmin() Obtain Whether it is an enterprise administrator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCorpAdmin(boolean $CorpAdmin) Set Whether it is an enterprise administrator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserId() Obtain WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserId(string $AppUserId) Set WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserAliasName() Obtain Nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserAliasName(string $AppUserAliasName) Set Nickname.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppUserName() Obtain Application username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppUserName(string $AppUserName) Set Application username.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getInValidateAppRange() Obtain Whether it is within the visible range.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInValidateAppRange(boolean $InValidateAppRange) Set Whether it is within the visible range.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAppOpenUserId() Obtain User openID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppOpenUserId(string $AppOpenUserId) Set User openID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEmailActivationStatus() Obtain Activation status of email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEmailActivationStatus(integer $EmailActivationStatus) Set Activation status of email.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getUserGroupList() Obtain User group information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroupList(array $UserGroupList) Set User group information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserRoleListDataUserRoleInfo extends AbstractModel
{
    /**
     * @var integer Business ID.
     */
    public $Id;

    /**
     * @var array This API is used to obtain the role list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleList;

    /**
     * @var array Role ID list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleIdList;

    /**
     * @var string User ID.
     */
    public $UserId;

    /**
     * @var string Username.
     */
    public $UserName;

    /**
     * @var string Enterprise ID.
     */
    public $CorpId;

    /**
     * @var string Email.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedUser;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var string Updater.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedUser;

    /**
     * @var string Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var string Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastLogin;

    /**
     * @var integer Account status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneNumber;

    /**
     * @var string Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AreaCode;

    /**
     * @var boolean Whether it is the root account.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RootAccount;

    /**
     * @var boolean Whether it is an enterprise administrator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CorpAdmin;

    /**
     * @var string WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserId;

    /**
     * @var string Nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserAliasName;

    /**
     * @var string Application username.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppUserName;

    /**
     * @var boolean Whether it is within the visible range.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InValidateAppRange;

    /**
     * @var string User openID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppOpenUserId;

    /**
     * @var integer Activation status of email.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EmailActivationStatus;

    /**
     * @var array User group information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroupList;

    /**
     * @param integer $Id Business ID.
     * @param array $RoleList This API is used to obtain the role list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RoleIdList Role ID list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserId User ID.
     * @param string $UserName Username.
     * @param string $CorpId Enterprise ID.
     * @param string $Email Email.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedUser Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedUser Updater.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt Update time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastLogin Last login time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Account status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneNumber Mobile number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AreaCode Telephone country code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $RootAccount Whether it is the root account.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $CorpAdmin Whether it is an enterprise administrator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserId WeCom user ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserAliasName Nickname.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppUserName Application username.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $InValidateAppRange Whether it is within the visible range.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AppOpenUserId User openID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EmailActivationStatus Activation status of email.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $UserGroupList User group information.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RoleList",$param) and $param["RoleList"] !== null) {
            $this->RoleList = [];
            foreach ($param["RoleList"] as $key => $value){
                $obj = new UserRoleListDataRoleInfo();
                $obj->deserialize($value);
                array_push($this->RoleList, $obj);
            }
        }

        if (array_key_exists("RoleIdList",$param) and $param["RoleIdList"] !== null) {
            $this->RoleIdList = $param["RoleIdList"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("LastLogin",$param) and $param["LastLogin"] !== null) {
            $this->LastLogin = $param["LastLogin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("AreaCode",$param) and $param["AreaCode"] !== null) {
            $this->AreaCode = $param["AreaCode"];
        }

        if (array_key_exists("RootAccount",$param) and $param["RootAccount"] !== null) {
            $this->RootAccount = $param["RootAccount"];
        }

        if (array_key_exists("CorpAdmin",$param) and $param["CorpAdmin"] !== null) {
            $this->CorpAdmin = $param["CorpAdmin"];
        }

        if (array_key_exists("AppUserId",$param) and $param["AppUserId"] !== null) {
            $this->AppUserId = $param["AppUserId"];
        }

        if (array_key_exists("AppUserAliasName",$param) and $param["AppUserAliasName"] !== null) {
            $this->AppUserAliasName = $param["AppUserAliasName"];
        }

        if (array_key_exists("AppUserName",$param) and $param["AppUserName"] !== null) {
            $this->AppUserName = $param["AppUserName"];
        }

        if (array_key_exists("InValidateAppRange",$param) and $param["InValidateAppRange"] !== null) {
            $this->InValidateAppRange = $param["InValidateAppRange"];
        }

        if (array_key_exists("AppOpenUserId",$param) and $param["AppOpenUserId"] !== null) {
            $this->AppOpenUserId = $param["AppOpenUserId"];
        }

        if (array_key_exists("EmailActivationStatus",$param) and $param["EmailActivationStatus"] !== null) {
            $this->EmailActivationStatus = $param["EmailActivationStatus"];
        }

        if (array_key_exists("UserGroupList",$param) and $param["UserGroupList"] !== null) {
            $this->UserGroupList = [];
            foreach ($param["UserGroupList"] as $key => $value){
                $obj = new UserGroupDTO();
                $obj->deserialize($value);
                array_push($this->UserGroupList, $obj);
            }
        }
    }
}
