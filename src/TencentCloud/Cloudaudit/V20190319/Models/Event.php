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
 * @method string getEventId() Obtain Log ID
 * @method void setEventId(string $EventId) Set Log ID
 * @method string getUsername() Obtain Username
 * @method void setUsername(string $Username) Set Username
 * @method string getEventTime() Obtain Event Time
 * @method void setEventTime(string $EventTime) Set Event Time
 * @method string getCloudAuditEvent() Obtain Log details
 * @method void setCloudAuditEvent(string $CloudAuditEvent) Set Log details
 * @method string getResourceTypeCn() Obtain Description of resource type in Chinese (please use this field as required; if you are using other languages, ignore this field)
 * @method void setResourceTypeCn(string $ResourceTypeCn) Set Description of resource type in Chinese (please use this field as required; if you are using other languages, ignore this field)
 * @method integer getErrorCode() Obtain Authentication error code
 * @method void setErrorCode(integer $ErrorCode) Set Authentication error code
 * @method string getEventName() Obtain Event name
 * @method void setEventName(string $EventName) Set Event name
 * @method string getSecretId() Obtain Certificate ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSecretId(string $SecretId) Set Certificate ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getEventSource() Obtain Request source
 * @method void setEventSource(string $EventSource) Set Request source
 * @method string getRequestID() Obtain Request ID
 * @method void setRequestID(string $RequestID) Set Request ID
 * @method string getResourceRegion() Obtain Resource region
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region
 * @method integer getAccountID() Obtain Root account ID
 * @method void setAccountID(integer $AccountID) Set Root account ID
 * @method string getSourceIPAddress() Obtain Source IP
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setSourceIPAddress(string $SourceIPAddress) Set Source IP
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getEventNameCn() Obtain Description of event name in Chinese (please use this field as required; if you are using other languages, ignore this field)
 * @method void setEventNameCn(string $EventNameCn) Set Description of event name in Chinese (please use this field as required; if you are using other languages, ignore this field)
 * @method Resource getResources() Obtain Resource pair
 * @method void setResources(Resource $Resources) Set Resource pair
 * @method string getEventRegion() Obtain Event region
 * @method void setEventRegion(string $EventRegion) Set Event region
 * @method string getLocation() Obtain IP location
 * @method void setLocation(string $Location) Set IP location
 */
class Event extends AbstractModel
{
    /**
     * @var string Log ID
     */
    public $EventId;

    /**
     * @var string Username
     */
    public $Username;

    /**
     * @var string Event Time
     */
    public $EventTime;

    /**
     * @var string Log details
     */
    public $CloudAuditEvent;

    /**
     * @var string Description of resource type in Chinese (please use this field as required; if you are using other languages, ignore this field)
     */
    public $ResourceTypeCn;

    /**
     * @var integer Authentication error code
     */
    public $ErrorCode;

    /**
     * @var string Event name
     */
    public $EventName;

    /**
     * @var string Certificate ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SecretId;

    /**
     * @var string Request source
     */
    public $EventSource;

    /**
     * @var string Request ID
     */
    public $RequestID;

    /**
     * @var string Resource region
     */
    public $ResourceRegion;

    /**
     * @var integer Root account ID
     */
    public $AccountID;

    /**
     * @var string Source IP
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $SourceIPAddress;

    /**
     * @var string Description of event name in Chinese (please use this field as required; if you are using other languages, ignore this field)
     */
    public $EventNameCn;

    /**
     * @var Resource Resource pair
     */
    public $Resources;

    /**
     * @var string Event region
     */
    public $EventRegion;

    /**
     * @var string IP location
     */
    public $Location;

    /**
     * @param string $EventId Log ID
     * @param string $Username Username
     * @param string $EventTime Event Time
     * @param string $CloudAuditEvent Log details
     * @param string $ResourceTypeCn Description of resource type in Chinese (please use this field as required; if you are using other languages, ignore this field)
     * @param integer $ErrorCode Authentication error code
     * @param string $EventName Event name
     * @param string $SecretId Certificate ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $EventSource Request source
     * @param string $RequestID Request ID
     * @param string $ResourceRegion Resource region
     * @param integer $AccountID Root account ID
     * @param string $SourceIPAddress Source IP
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $EventNameCn Description of event name in Chinese (please use this field as required; if you are using other languages, ignore this field)
     * @param Resource $Resources Resource pair
     * @param string $EventRegion Event region
     * @param string $Location IP location
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("CloudAuditEvent",$param) and $param["CloudAuditEvent"] !== null) {
            $this->CloudAuditEvent = $param["CloudAuditEvent"];
        }

        if (array_key_exists("ResourceTypeCn",$param) and $param["ResourceTypeCn"] !== null) {
            $this->ResourceTypeCn = $param["ResourceTypeCn"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("EventSource",$param) and $param["EventSource"] !== null) {
            $this->EventSource = $param["EventSource"];
        }

        if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
            $this->RequestID = $param["RequestID"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("AccountID",$param) and $param["AccountID"] !== null) {
            $this->AccountID = $param["AccountID"];
        }

        if (array_key_exists("SourceIPAddress",$param) and $param["SourceIPAddress"] !== null) {
            $this->SourceIPAddress = $param["SourceIPAddress"];
        }

        if (array_key_exists("EventNameCn",$param) and $param["EventNameCn"] !== null) {
            $this->EventNameCn = $param["EventNameCn"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new Resource();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("EventRegion",$param) and $param["EventRegion"] !== null) {
            $this->EventRegion = $param["EventRegion"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
