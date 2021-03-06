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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTopicAttributes request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method string getNote() Obtain Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
 * @method void setNote(string $Note) Set Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
 * @method integer getEnableWhiteList() Obtain IP allowlist switch. 1: enabled, 0: disabled.
 * @method void setEnableWhiteList(integer $EnableWhiteList) Set IP allowlist switch. 1: enabled, 0: disabled.
 * @method integer getMinInsyncReplicas() Obtain Default value: 1.
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set Default value: 1.
 * @method integer getUncleanLeaderElectionEnable() Obtain 0: false, 1: true. Default value: 0.
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set 0: false, 1: true. Default value: 0.
 * @method integer getRetentionMs() Obtain Message retention period in ms. The current minimum value is 60,000 ms.
 * @method void setRetentionMs(integer $RetentionMs) Set Message retention period in ms. The current minimum value is 60,000 ms.
 * @method integer getSegmentMs() Obtain Segment rolling duration in ms. The current minimum value is 86,400,000 ms.
 * @method void setSegmentMs(integer $SegmentMs) Set Segment rolling duration in ms. The current minimum value is 86,400,000 ms.
 * @method integer getMaxMessageBytes() Obtain Maximum topic message length in bytes. The maximum value is 8,388,608 bytes (i.e., 8 MB).
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set Maximum topic message length in bytes. The maximum value is 8,388,608 bytes (i.e., 8 MB).
 * @method string getCleanUpPolicy() Obtain Message deletion policy. Valid values: delete, compact
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set Message deletion policy. Valid values: delete, compact
 */
class ModifyTopicAttributesRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var string Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
     */
    public $Note;

    /**
     * @var integer IP allowlist switch. 1: enabled, 0: disabled.
     */
    public $EnableWhiteList;

    /**
     * @var integer Default value: 1.
     */
    public $MinInsyncReplicas;

    /**
     * @var integer 0: false, 1: true. Default value: 0.
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Message retention period in ms. The current minimum value is 60,000 ms.
     */
    public $RetentionMs;

    /**
     * @var integer Segment rolling duration in ms. The current minimum value is 86,400,000 ms.
     */
    public $SegmentMs;

    /**
     * @var integer Maximum topic message length in bytes. The maximum value is 8,388,608 bytes (i.e., 8 MB).
     */
    public $MaxMessageBytes;

    /**
     * @var string Message deletion policy. Valid values: delete, compact
     */
    public $CleanUpPolicy;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $TopicName Topic name.
     * @param string $Note Topic remarks string of up to 64 characters, which must begin with a letter and can contain letters, digits, and dashes (`-`).
     * @param integer $EnableWhiteList IP allowlist switch. 1: enabled, 0: disabled.
     * @param integer $MinInsyncReplicas Default value: 1.
     * @param integer $UncleanLeaderElectionEnable 0: false, 1: true. Default value: 0.
     * @param integer $RetentionMs Message retention period in ms. The current minimum value is 60,000 ms.
     * @param integer $SegmentMs Segment rolling duration in ms. The current minimum value is 86,400,000 ms.
     * @param integer $MaxMessageBytes Maximum topic message length in bytes. The maximum value is 8,388,608 bytes (i.e., 8 MB).
     * @param string $CleanUpPolicy Message deletion policy. Valid values: delete, compact
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("EnableWhiteList",$param) and $param["EnableWhiteList"] !== null) {
            $this->EnableWhiteList = $param["EnableWhiteList"];
        }

        if (array_key_exists("MinInsyncReplicas",$param) and $param["MinInsyncReplicas"] !== null) {
            $this->MinInsyncReplicas = $param["MinInsyncReplicas"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }
    }
}
