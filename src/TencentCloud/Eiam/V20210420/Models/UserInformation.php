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
 * User information list.
 *
 * @method string getUserName() Obtain Username, which can contain up to 32 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username, which can contain up to 32 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain User status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set User status.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain User remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set User remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastUpdateTime() Obtain Last update time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastUpdateTime(string $LastUpdateTime) Set Last update time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreationTime() Obtain User creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreationTime(string $CreationTime) Set User creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrgPath() Obtain Path ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrgPath(string $OrgPath) Set Path ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPhone() Obtain User's mobile number with country code, such as `+86-00000000000`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhone(string $Phone) Set User's mobile number with country code, such as `+86-00000000000`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSubjectGroups() Obtain List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectGroups(array $SubjectGroups) Set List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLastLoginTime() Obtain Last login time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastLoginTime(string $LastLoginTime) Set Last login time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class UserInformation extends AbstractModel
{
    /**
     * @var string Username, which can contain up to 32 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string User status.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string User remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Last update time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastUpdateTime;

    /**
     * @var string User creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreationTime;

    /**
     * @var string Path ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrgPath;

    /**
     * @var string User's mobile number with country code, such as `+86-00000000000`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Phone;

    /**
     * @var array List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectGroups;

    /**
     * @var string User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string Last login time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastLoginTime;

    /**
     * @var string User ID, which is globally unique and can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @param string $UserName Username, which can contain up to 32 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status User status.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Nickname, which can contain up to 64 characters and is the same as the username by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description User remarks, which can contain up to 512 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastUpdateTime Last update time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreationTime User creation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrgPath Path ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Phone User's mobile number with country code, such as `+86-00000000000`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SubjectGroups List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Email User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LastLoginTime Last login time of the user in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserId User ID, which is globally unique and can contain up to 64 characters.
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("OrgPath",$param) and $param["OrgPath"] !== null) {
            $this->OrgPath = $param["OrgPath"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("SubjectGroups",$param) and $param["SubjectGroups"] !== null) {
            $this->SubjectGroups = $param["SubjectGroups"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("LastLoginTime",$param) and $param["LastLoginTime"] !== null) {
            $this->LastLoginTime = $param["LastLoginTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
