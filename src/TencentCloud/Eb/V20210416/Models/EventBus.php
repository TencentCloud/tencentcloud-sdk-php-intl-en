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
 * Event bus information
 *
 * @method string getModTime() Obtain Update time
 * @method void setModTime(string $ModTime) Set Update time
 * @method string getDescription() Obtain Event bus description, which can contain up to 200 characters of any type
 * @method void setDescription(string $Description) Set Event bus description, which can contain up to 200 characters of any type
 * @method string getAddTime() Obtain Creation time
 * @method void setAddTime(string $AddTime) Set Creation time
 * @method string getEventBusName() Obtain Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
 * @method void setEventBusName(string $EventBusName) Set Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getType() Obtain Event bus type
 * @method void setType(string $Type) Set Event bus type
 * @method string getPayMode() Obtain Billing Mode
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Billing Mode
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getConnectionBriefs() Obtain Connector basic information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setConnectionBriefs(array $ConnectionBriefs) Set Connector basic information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTargetBriefs() Obtain Target information
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetBriefs(array $TargetBriefs) Set Target information
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class EventBus extends AbstractModel
{
    /**
     * @var string Update time
     */
    public $ModTime;

    /**
     * @var string Event bus description, which can contain up to 200 characters of any type
     */
    public $Description;

    /**
     * @var string Creation time
     */
    public $AddTime;

    /**
     * @var string Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
     */
    public $EventBusName;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Event bus type
     */
    public $Type;

    /**
     * @var string Billing Mode
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var array Connector basic information
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ConnectionBriefs;

    /**
     * @var array Target information
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetBriefs;

    /**
     * @param string $ModTime Update time
     * @param string $Description Event bus description, which can contain up to 200 characters of any type
     * @param string $AddTime Creation time
     * @param string $EventBusName Event bus name, which can contain 2–60 letters, digits, underscores, and hyphens and must start with a letter and end with a digit or letter
     * @param string $EventBusId Event bus ID
     * @param string $Type Event bus type
     * @param string $PayMode Billing Mode
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $ConnectionBriefs Connector basic information
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $TargetBriefs Target information
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
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

        if (array_key_exists("ConnectionBriefs",$param) and $param["ConnectionBriefs"] !== null) {
            $this->ConnectionBriefs = [];
            foreach ($param["ConnectionBriefs"] as $key => $value){
                $obj = new ConnectionBrief();
                $obj->deserialize($value);
                array_push($this->ConnectionBriefs, $obj);
            }
        }

        if (array_key_exists("TargetBriefs",$param) and $param["TargetBriefs"] !== null) {
            $this->TargetBriefs = [];
            foreach ($param["TargetBriefs"] as $key => $value){
                $obj = new TargetBrief();
                $obj->deserialize($value);
                array_push($this->TargetBriefs, $obj);
            }
        }
    }
}
