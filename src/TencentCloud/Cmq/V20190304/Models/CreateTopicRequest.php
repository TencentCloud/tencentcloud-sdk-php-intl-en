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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTopic request structure.
 *
 * @method string getTopicName() Obtain Topic name, which is unique under the same account in an individual region. It is a string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
 * @method void setTopicName(string $TopicName) Set Topic name, which is unique under the same account in an individual region. It is a string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
 * @method integer getMaxMsgSize() Obtain Maximum message length. Value range: 1024-65536 bytes (i.e., 1-64 KB). Default value: 65536.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set Maximum message length. Value range: 1024-65536 bytes (i.e., 1-64 KB). Default value: 65536.
 * @method integer getFilterType() Obtain Message match policy for a specified topic.
 * @method void setFilterType(integer $FilterType) Set Message match policy for a specified topic.
 * @method integer getMsgRetentionSeconds() Obtain Message retention period. Value range: 60-86400 seconds (i.e., 1 minute-1 day). Default value: 86400.
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set Message retention period. Value range: 60-86400 seconds (i.e., 1 minute-1 day). Default value: 86400.
 * @method boolean getTrace() Obtain Whether to enable message trace. true: yes, false: no. If this field is left empty, the feature will not be enabled.
 * @method void setTrace(boolean $Trace) Set Whether to enable message trace. true: yes, false: no. If this field is left empty, the feature will not be enabled.
 */
class CreateTopicRequest extends AbstractModel
{
    /**
     * @var string Topic name, which is unique under the same account in an individual region. It is a string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
     */
    public $TopicName;

    /**
     * @var integer Maximum message length. Value range: 1024-65536 bytes (i.e., 1-64 KB). Default value: 65536.
     */
    public $MaxMsgSize;

    /**
     * @var integer Message match policy for a specified topic.
     */
    public $FilterType;

    /**
     * @var integer Message retention period. Value range: 60-86400 seconds (i.e., 1 minute-1 day). Default value: 86400.
     */
    public $MsgRetentionSeconds;

    /**
     * @var boolean Whether to enable message trace. true: yes, false: no. If this field is left empty, the feature will not be enabled.
     */
    public $Trace;

    /**
     * @param string $TopicName Topic name, which is unique under the same account in an individual region. It is a string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
     * @param integer $MaxMsgSize Maximum message length. Value range: 1024-65536 bytes (i.e., 1-64 KB). Default value: 65536.
     * @param integer $FilterType Message match policy for a specified topic.
     * @param integer $MsgRetentionSeconds Message retention period. Value range: 60-86400 seconds (i.e., 1 minute-1 day). Default value: 86400.
     * @param boolean $Trace Whether to enable message trace. true: yes, false: no. If this field is left empty, the feature will not be enabled.
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }
    }
}
