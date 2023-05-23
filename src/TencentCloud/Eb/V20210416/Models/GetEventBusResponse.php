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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEventBus response structure.
 *
 * @method string getModTime() Obtain Update time
 * @method void setModTime(string $ModTime) Set Update time
 * @method string getDescription() Obtain Event bus description
 * @method void setDescription(string $Description) Set Event bus description
 * @method string getClsTopicId() Obtain Log topic ID
 * @method void setClsTopicId(string $ClsTopicId) Set Log topic ID
 * @method string getAddTime() Obtain Creation time.
 * @method void setAddTime(string $AddTime) Set Creation time.
 * @method string getClsLogsetId() Obtain Logset ID
 * @method void setClsLogsetId(string $ClsLogsetId) Set Logset ID
 * @method string getEventBusName() Obtain Event bus name
 * @method void setEventBusName(string $EventBusName) Set Event bus name
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getType() Obtain (Disused) Event bus type
 * @method void setType(string $Type) Set (Disused) Event bus type
 * @method string getPayMode() Obtain Billing mode
 * @method void setPayMode(string $PayMode) Set Billing mode
 * @method integer getSaveDays() Obtain EventBridge log storage period
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSaveDays(integer $SaveDays) Set EventBridge log storage period
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLogTopicId() Obtain EventBridge log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLogTopicId(string $LogTopicId) Set EventBridge log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getEnableStore() Obtain Whether to enable log storage
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnableStore(boolean $EnableStore) Set Whether to enable log storage
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getLinkMode() Obtain Whether to sort the message
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setLinkMode(string $LinkMode) Set Whether to sort the message
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetEventBusResponse extends AbstractModel
{
    /**
     * @var string Update time
     */
    public $ModTime;

    /**
     * @var string Event bus description
     */
    public $Description;

    /**
     * @var string Log topic ID
     */
    public $ClsTopicId;

    /**
     * @var string Creation time.
     */
    public $AddTime;

    /**
     * @var string Logset ID
     */
    public $ClsLogsetId;

    /**
     * @var string Event bus name
     */
    public $EventBusName;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string (Disused) Event bus type
     */
    public $Type;

    /**
     * @var string Billing mode
     */
    public $PayMode;

    /**
     * @var integer EventBridge log storage period
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SaveDays;

    /**
     * @var string EventBridge log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LogTopicId;

    /**
     * @var boolean Whether to enable log storage
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnableStore;

    /**
     * @var string Whether to sort the message
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $LinkMode;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ModTime Update time
     * @param string $Description Event bus description
     * @param string $ClsTopicId Log topic ID
     * @param string $AddTime Creation time.
     * @param string $ClsLogsetId Logset ID
     * @param string $EventBusName Event bus name
     * @param string $EventBusId Event bus ID
     * @param string $Type (Disused) Event bus type
     * @param string $PayMode Billing mode
     * @param integer $SaveDays EventBridge log storage period
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LogTopicId EventBridge log topic ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $EnableStore Whether to enable log storage
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $LinkMode Whether to sort the message
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("EnableStore",$param) and $param["EnableStore"] !== null) {
            $this->EnableStore = $param["EnableStore"];
        }

        if (array_key_exists("LinkMode",$param) and $param["LinkMode"] !== null) {
            $this->LinkMode = $param["LinkMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
