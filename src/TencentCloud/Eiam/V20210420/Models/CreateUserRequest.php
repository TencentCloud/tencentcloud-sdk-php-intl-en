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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUser request structure.
 *
 * @method string getUserName() Obtain Username, which can contain up to 64 characters.
 * @method void setUserName(string $UserName) Set Username, which can contain up to 64 characters.
 * @method string getPassword() Obtain User password, which needs to be configured according to the password policy.
 * @method void setPassword(string $Password) Set User password, which needs to be configured according to the password policy.
 * @method string getDisplayName() Obtain Nickname, which can contain up to 64 characters and is the same as the username by default.
 * @method void setDisplayName(string $DisplayName) Set Nickname, which can contain up to 64 characters and is the same as the username by default.
 * @method string getDescription() Obtain User remarks, which can contain up to 512 characters.
 * @method void setDescription(string $Description) Set User remarks, which can contain up to 512 characters.
 * @method array getUserGroupIds() Obtain List of IDs of the user's user groups.
 * @method void setUserGroupIds(array $UserGroupIds) Set List of IDs of the user's user groups.
 * @method string getPhone() Obtain User's mobile number, such as `+86-1xxxxxxxxxx`.
 * @method void setPhone(string $Phone) Set User's mobile number, such as `+86-1xxxxxxxxxx`.
 * @method string getOrgNodeId() Obtain Unique ID of the user's primary organization. If this parameter is left empty, the user will be created under the root node by default.
 * @method void setOrgNodeId(string $OrgNodeId) Set Unique ID of the user's primary organization. If this parameter is left empty, the user will be created under the root node by default.
 * @method string getExpirationTime() Obtain User expiration time in ISO 8601 format.
 * @method void setExpirationTime(string $ExpirationTime) Set User expiration time in ISO 8601 format.
 * @method string getEmail() Obtain User's email address.
 * @method void setEmail(string $Email) Set User's email address.
 * @method boolean getPwdNeedReset() Obtain Whether the password needs to be reset. Default value: false (no).
 * @method void setPwdNeedReset(boolean $PwdNeedReset) Set Whether the password needs to be reset. Default value: false (no).
 * @method array getSecondaryOrgNodeIdList() Obtain List of IDs of the user's secondary organizations.
 * @method void setSecondaryOrgNodeIdList(array $SecondaryOrgNodeIdList) Set List of IDs of the user's secondary organizations.
 */
class CreateUserRequest extends AbstractModel
{
    /**
     * @var string Username, which can contain up to 64 characters.
     */
    public $UserName;

    /**
     * @var string User password, which needs to be configured according to the password policy.
     */
    public $Password;

    /**
     * @var string Nickname, which can contain up to 64 characters and is the same as the username by default.
     */
    public $DisplayName;

    /**
     * @var string User remarks, which can contain up to 512 characters.
     */
    public $Description;

    /**
     * @var array List of IDs of the user's user groups.
     */
    public $UserGroupIds;

    /**
     * @var string User's mobile number, such as `+86-1xxxxxxxxxx`.
     */
    public $Phone;

    /**
     * @var string Unique ID of the user's primary organization. If this parameter is left empty, the user will be created under the root node by default.
     */
    public $OrgNodeId;

    /**
     * @var string User expiration time in ISO 8601 format.
     */
    public $ExpirationTime;

    /**
     * @var string User's email address.
     */
    public $Email;

    /**
     * @var boolean Whether the password needs to be reset. Default value: false (no).
     */
    public $PwdNeedReset;

    /**
     * @var array List of IDs of the user's secondary organizations.
     */
    public $SecondaryOrgNodeIdList;

    /**
     * @param string $UserName Username, which can contain up to 64 characters.
     * @param string $Password User password, which needs to be configured according to the password policy.
     * @param string $DisplayName Nickname, which can contain up to 64 characters and is the same as the username by default.
     * @param string $Description User remarks, which can contain up to 512 characters.
     * @param array $UserGroupIds List of IDs of the user's user groups.
     * @param string $Phone User's mobile number, such as `+86-1xxxxxxxxxx`.
     * @param string $OrgNodeId Unique ID of the user's primary organization. If this parameter is left empty, the user will be created under the root node by default.
     * @param string $ExpirationTime User expiration time in ISO 8601 format.
     * @param string $Email User's email address.
     * @param boolean $PwdNeedReset Whether the password needs to be reset. Default value: false (no).
     * @param array $SecondaryOrgNodeIdList List of IDs of the user's secondary organizations.
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("PwdNeedReset",$param) and $param["PwdNeedReset"] !== null) {
            $this->PwdNeedReset = $param["PwdNeedReset"];
        }

        if (array_key_exists("SecondaryOrgNodeIdList",$param) and $param["SecondaryOrgNodeIdList"] !== null) {
            $this->SecondaryOrgNodeIdList = $param["SecondaryOrgNodeIdList"];
        }
    }
}
