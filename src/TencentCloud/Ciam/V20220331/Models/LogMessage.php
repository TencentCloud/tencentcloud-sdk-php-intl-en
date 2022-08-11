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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log details
 *
 * @method string getLogId() Obtain Log ID
 * @method void setLogId(string $LogId) Set Log ID
 * @method string getTenantId() Obtain Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserStoreId() Obtain User pool ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserStoreId(string $UserStoreId) Set User pool ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEventCode() Obtain Event code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventCode(string $EventCode) Set Event code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEventDate() Obtain Event timestamp in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEventDate(integer $EventDate) Set Event timestamp in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParticipant() Obtain Event participant

<li> **TENANT** </li>  Tenant
<li> **USER** </li>  User
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParticipant(string $Participant) Set Event participant

<li> **TENANT** </li>  Tenant
<li> **USER** </li>  User
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationClientId() Obtain Application `clientId`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationClientId(string $ApplicationClientId) Set Application `clientId`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Application name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthSourceId() Obtain Authentication source ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthSourceId(string $AuthSourceId) Set Authentication source ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthSourceName() Obtain Authentication source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthSourceName(string $AuthSourceName) Set Authentication source name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthSourceType() Obtain Authentication source type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthSourceType(string $AuthSourceType) Set Authentication source type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthSourceCategory() Obtain Authentication source category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthSourceCategory(string $AuthSourceCategory) Set Authentication source category
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIp() Obtain IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAgent() Obtain User agent
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAgent(string $UserAgent) Set User agent
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserId() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDetail() Obtain Details
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetail(string $Detail) Set Details
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LogMessage extends AbstractModel
{
    /**
     * @var string Log ID
     */
    public $LogId;

    /**
     * @var string Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TenantId;

    /**
     * @var string User pool ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserStoreId;

    /**
     * @var string Event code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventCode;

    /**
     * @var integer Event timestamp in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EventDate;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Event participant

<li> **TENANT** </li>  Tenant
<li> **USER** </li>  User
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Participant;

    /**
     * @var string Application `clientId`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationClientId;

    /**
     * @var string Application name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var string Authentication source ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthSourceId;

    /**
     * @var string Authentication source name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthSourceName;

    /**
     * @var string Authentication source type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthSourceType;

    /**
     * @var string Authentication source category
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthSourceCategory;

    /**
     * @var string IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var string User agent
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAgent;

    /**
     * @var string User ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string Details
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Detail;

    /**
     * @param string $LogId Log ID
     * @param string $TenantId Tenant ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserStoreId User pool ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EventCode Event code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EventDate Event timestamp in milliseconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Participant Event participant

<li> **TENANT** </li>  Tenant
<li> **USER** </li>  User
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationClientId Application `clientId`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Application name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthSourceId Authentication source ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthSourceName Authentication source name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthSourceType Authentication source type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AuthSourceCategory Authentication source category
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Ip IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAgent User agent
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserId User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Detail Details
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("EventDate",$param) and $param["EventDate"] !== null) {
            $this->EventDate = $param["EventDate"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Participant",$param) and $param["Participant"] !== null) {
            $this->Participant = $param["Participant"];
        }

        if (array_key_exists("ApplicationClientId",$param) and $param["ApplicationClientId"] !== null) {
            $this->ApplicationClientId = $param["ApplicationClientId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("AuthSourceId",$param) and $param["AuthSourceId"] !== null) {
            $this->AuthSourceId = $param["AuthSourceId"];
        }

        if (array_key_exists("AuthSourceName",$param) and $param["AuthSourceName"] !== null) {
            $this->AuthSourceName = $param["AuthSourceName"];
        }

        if (array_key_exists("AuthSourceType",$param) and $param["AuthSourceType"] !== null) {
            $this->AuthSourceType = $param["AuthSourceType"];
        }

        if (array_key_exists("AuthSourceCategory",$param) and $param["AuthSourceCategory"] !== null) {
            $this->AuthSourceCategory = $param["AuthSourceCategory"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }
    }
}
