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
 * DescribeUserInfo response structure.
 *
 * @method string getUserName() Obtain Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDisplayName() Obtain Nickname
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Nickname
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain User remarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set User remarks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getUserGroupIds() Obtain List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserGroupIds(array $UserGroupIds) Set List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain User ID, which can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID, which can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEmail() Obtain User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEmail(string $Email) Set User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPhone() Obtain User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhone(string $Phone) Set User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrgNodeId() Obtain Unique ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrgNodeId(string $OrgNodeId) Set Unique ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDataSource() Obtain Data source
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataSource(string $DataSource) Set Data source
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationTime() Obtain User expiration time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationTime(string $ExpirationTime) Set User expiration time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getActivationTime() Obtain User activation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setActivationTime(string $ActivationTime) Set User activation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getPwdNeedReset() Obtain Whether the password of the current user needs to be reset. `false` indicates no.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPwdNeedReset(boolean $PwdNeedReset) Set Whether the password of the current user needs to be reset. `false` indicates no.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSecondaryOrgNodeIdList() Obtain List of IDs of the user's secondary organizations.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSecondaryOrgNodeIdList(array $SecondaryOrgNodeIdList) Set List of IDs of the user's secondary organizations.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getAdminFlag() Obtain Whether the user is an admin. Valid values: 0: no; 1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAdminFlag(integer $AdminFlag) Set Whether the user is an admin. Valid values: 0: no; 1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserInfoResponse extends AbstractModel
{
    /**
     * @var string Username.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Nickname
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DisplayName;

    /**
     * @var string User remarks.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var array List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserGroupIds;

    /**
     * @var string User ID, which can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Email;

    /**
     * @var string User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Phone;

    /**
     * @var string Unique ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrgNodeId;

    /**
     * @var string Data source
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataSource;

    /**
     * @var string User expiration time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationTime;

    /**
     * @var string User activation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ActivationTime;

    /**
     * @var boolean Whether the password of the current user needs to be reset. `false` indicates no.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PwdNeedReset;

    /**
     * @var array List of IDs of the user's secondary organizations.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SecondaryOrgNodeIdList;

    /**
     * @var integer Whether the user is an admin. Valid values: 0: no; 1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AdminFlag;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $UserName Username.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Status User status. Valid values: NORMAL: normal; FREEZE: frozen; LOCKED: locked; NOT_ENABLED: disabled.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DisplayName Nickname
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Description User remarks.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $UserGroupIds List of IDs of the user's user groups.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UserId User ID, which can contain up to 64 characters.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Email User's email address.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Phone User's mobile number.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrgNodeId Unique ID of the user's primary organization.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DataSource Data source
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationTime User expiration time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ActivationTime User activation time in ISO 8601 format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $PwdNeedReset Whether the password of the current user needs to be reset. `false` indicates no.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SecondaryOrgNodeIdList List of IDs of the user's secondary organizations.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $AdminFlag Whether the user is an admin. Valid values: 0: no; 1: yes.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("UserGroupIds",$param) and $param["UserGroupIds"] !== null) {
            $this->UserGroupIds = $param["UserGroupIds"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("DataSource",$param) and $param["DataSource"] !== null) {
            $this->DataSource = $param["DataSource"];
        }

        if (array_key_exists("ExpirationTime",$param) and $param["ExpirationTime"] !== null) {
            $this->ExpirationTime = $param["ExpirationTime"];
        }

        if (array_key_exists("ActivationTime",$param) and $param["ActivationTime"] !== null) {
            $this->ActivationTime = $param["ActivationTime"];
        }

        if (array_key_exists("PwdNeedReset",$param) and $param["PwdNeedReset"] !== null) {
            $this->PwdNeedReset = $param["PwdNeedReset"];
        }

        if (array_key_exists("SecondaryOrgNodeIdList",$param) and $param["SecondaryOrgNodeIdList"] !== null) {
            $this->SecondaryOrgNodeIdList = $param["SecondaryOrgNodeIdList"];
        }

        if (array_key_exists("AdminFlag",$param) and $param["AdminFlag"] !== null) {
            $this->AdminFlag = $param["AdminFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
