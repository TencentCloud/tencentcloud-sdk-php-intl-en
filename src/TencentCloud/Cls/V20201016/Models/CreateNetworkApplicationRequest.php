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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNetworkApplication request structure.
 *
 * @method string getName() Obtain <p>Network application name: length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>English letters (a-z and A-Z)</li><li>Digits</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Must not contain spaces</li><li>Cannot contain other special characters (such as @, #, $, %, etc.)</li></ul>
 * @method void setName(string $Name) Set <p>Network application name: length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>English letters (a-z and A-Z)</li><li>Digits</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Must not contain spaces</li><li>Cannot contain other special characters (such as @, #, $, %, etc.)</li></ul>
 * @method string getLogsetId() Obtain <p>Log Set ID</p><ul><li>Obtain the Log Set ID through the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">logset list</a>.</li></ul>
 * @method void setLogsetId(string $LogsetId) Set <p>Log Set ID</p><ul><li>Obtain the Log Set ID through the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">logset list</a>.</li></ul>
 * @method string getTopicName() Obtain <p>Topic name. The limits are as follows:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
 * @method void setTopicName(string $TopicName) Set <p>Topic name. The limits are as follows:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
 */
class CreateNetworkApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>Network application name: length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>English letters (a-z and A-Z)</li><li>Digits</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Must not contain spaces</li><li>Cannot contain other special characters (such as @, #, $, %, etc.)</li></ul>
     */
    public $Name;

    /**
     * @var string <p>Log Set ID</p><ul><li>Obtain the Log Set ID through the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">logset list</a>.</li></ul>
     */
    public $LogsetId;

    /**
     * @var string <p>Topic name. The limits are as follows:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
     */
    public $TopicName;

    /**
     * @param string $Name <p>Network application name: length not exceeding 64 characters, name must be unique.</p><ul><li>Can only contain the following characters:<ul><li>English letters (a-z and A-Z)</li><li>Digits</li><li>Underscore</li><li>Hyphen (minus sign)</li><li>Chinese characters</li></ul></li><li>At least one character</li><li>Must not contain spaces</li><li>Cannot contain other special characters (such as @, #, $, %, etc.)</li></ul>
     * @param string $LogsetId <p>Log Set ID</p><ul><li>Obtain the Log Set ID through the <a href="https://www.tencentcloud.com/document/product/614/58624?from_cn_redirect=1">logset list</a>.</li></ul>
     * @param string $TopicName <p>Topic name. The limits are as follows:</p><ul><li>Cannot be an empty string</li><li>Cannot contain character '|'</li><li>Cannot use the following names ["cls_service_log","loglistener_status","loglistener_alarm","loglistener_business","cls_service_metric"]</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
