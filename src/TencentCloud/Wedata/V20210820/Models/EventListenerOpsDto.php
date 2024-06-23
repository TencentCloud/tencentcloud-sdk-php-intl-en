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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event Listener
 *
 * @method string getEventName() Obtain Event nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventName(string $EventName) Set Event nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getKey() Obtain Keyword, if it is a task, then it is the Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setKey(string $Key) Set Keyword, if it is a task, then it is the Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain Trigger methodNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Trigger methodNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProperties() Obtain Event Attributes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProperties(string $Properties) Set Event Attributes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreationTimestamp() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreationTimestamp(string $CreationTimestamp) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 */
class EventListenerOpsDto extends AbstractModel
{
    /**
     * @var string Event nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventName;

    /**
     * @var string Keyword, if it is a task, then it is the Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Key;

    /**
     * @var string Trigger methodNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Event Attributes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Properties;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreationTimestamp;

    /**
     * @param string $EventName Event nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Key Keyword, if it is a task, then it is the Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type Trigger methodNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Properties Event Attributes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreationTimestamp Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }

        if (array_key_exists("CreationTimestamp",$param) and $param["CreationTimestamp"] !== null) {
            $this->CreationTimestamp = $param["CreationTimestamp"];
        }
    }
}
