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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log details
 *
 * @method Resource getResources() Obtain Resource pair
 * @method void setResources(Resource $Resources) Set Resource pair
 * @method integer getAccountID() Obtain Root account ID
 * @method void setAccountID(integer $AccountID) Set Root account ID
 * @method string getCloudAuditEvent() Obtain Log details
 * @method void setCloudAuditEvent(string $CloudAuditEvent) Set Log details
 * @method integer getErrorCode() Obtain Authentication error code
 * @method void setErrorCode(integer $ErrorCode) Set Authentication error code
 * @method string getEventId() Obtain Log ID
 * @method void setEventId(string $EventId) Set Log ID
 * @method string getEventName() Obtain Event name
 * @method void setEventName(string $EventName) Set Event name
 * @method string getEventNameCn() Obtain Description of event name
 * @method void setEventNameCn(string $EventNameCn) Set Description of event name
 * @method string getEventRegion() Obtain Event region
 * @method void setEventRegion(string $EventRegion) Set Event region
 * @method string getEventSource() Obtain Request source
 * @method void setEventSource(string $EventSource) Set Request source
 * @method string getEventTime() Obtain Event time
 * @method void setEventTime(string $EventTime) Set Event time
 * @method string getRequestID() Obtain Request ID
 * @method void setRequestID(string $RequestID) Set Request ID
 * @method string getResourceTypeCn() Obtain Description of resource type
 * @method void setResourceTypeCn(string $ResourceTypeCn) Set Description of resource type
 * @method string getSecretId() Obtain Certificate ID
 * @method void setSecretId(string $SecretId) Set Certificate ID
 * @method string getSourceIPAddress() Obtain Source IP
 * @method void setSourceIPAddress(string $SourceIPAddress) Set Source IP
 * @method string getUsername() Obtain Username
 * @method void setUsername(string $Username) Set Username
 */
class Event extends AbstractModel
{
    /**
     * @var Resource Resource pair
     */
    public $Resources;

    /**
     * @var integer Root account ID
     */
    public $AccountID;

    /**
     * @var string Log details
     */
    public $CloudAuditEvent;

    /**
     * @var integer Authentication error code
     */
    public $ErrorCode;

    /**
     * @var string Log ID
     */
    public $EventId;

    /**
     * @var string Event name
     */
    public $EventName;

    /**
     * @var string Description of event name
     */
    public $EventNameCn;

    /**
     * @var string Event region
     */
    public $EventRegion;

    /**
     * @var string Request source
     */
    public $EventSource;

    /**
     * @var string Event time
     */
    public $EventTime;

    /**
     * @var string Request ID
     */
    public $RequestID;

    /**
     * @var string Description of resource type
     */
    public $ResourceTypeCn;

    /**
     * @var string Certificate ID
     */
    public $SecretId;

    /**
     * @var string Source IP
     */
    public $SourceIPAddress;

    /**
     * @var string Username
     */
    public $Username;

    /**
     * @param Resource $Resources Resource pair
     * @param integer $AccountID Root account ID
     * @param string $CloudAuditEvent Log details
     * @param integer $ErrorCode Authentication error code
     * @param string $EventId Log ID
     * @param string $EventName Event name
     * @param string $EventNameCn Description of event name
     * @param string $EventRegion Event region
     * @param string $EventSource Request source
     * @param string $EventTime Event time
     * @param string $RequestID Request ID
     * @param string $ResourceTypeCn Description of resource type
     * @param string $SecretId Certificate ID
     * @param string $SourceIPAddress Source IP
     * @param string $Username Username
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
        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new Resource();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("AccountID",$param) and $param["AccountID"] !== null) {
            $this->AccountID = $param["AccountID"];
        }

        if (array_key_exists("CloudAuditEvent",$param) and $param["CloudAuditEvent"] !== null) {
            $this->CloudAuditEvent = $param["CloudAuditEvent"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("EventNameCn",$param) and $param["EventNameCn"] !== null) {
            $this->EventNameCn = $param["EventNameCn"];
        }

        if (array_key_exists("EventRegion",$param) and $param["EventRegion"] !== null) {
            $this->EventRegion = $param["EventRegion"];
        }

        if (array_key_exists("EventSource",$param) and $param["EventSource"] !== null) {
            $this->EventSource = $param["EventSource"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
            $this->RequestID = $param["RequestID"];
        }

        if (array_key_exists("ResourceTypeCn",$param) and $param["ResourceTypeCn"] !== null) {
            $this->ResourceTypeCn = $param["ResourceTypeCn"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SourceIPAddress",$param) and $param["SourceIPAddress"] !== null) {
            $this->SourceIPAddress = $param["SourceIPAddress"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
    }
}
