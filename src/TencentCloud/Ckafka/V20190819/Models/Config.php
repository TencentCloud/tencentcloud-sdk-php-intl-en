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
 * Advanced configuration object
 *
 * @method integer getRetention() Obtain Message retention period
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRetention(integer $Retention) Set Message retention period
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMinInsyncReplicas() Obtain Minimum number of sync replications
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMinInsyncReplicas(integer $MinInsyncReplicas) Set Minimum number of sync replications
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCleanUpPolicy() Obtain Log cleanup mode. Default value: delete.
delete: logs will be deleted by save time; compact: logs will be compressed by key; compact, delete: logs will be compressed by key and deleted by save time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCleanUpPolicy(string $CleanUpPolicy) Set Log cleanup mode. Default value: delete.
delete: logs will be deleted by save time; compact: logs will be compressed by key; compact, delete: logs will be compressed by key and deleted by save time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSegmentMs() Obtain Segment rolling duration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentMs(integer $SegmentMs) Set Segment rolling duration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getUncleanLeaderElectionEnable() Obtain 0: false, 1: true.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUncleanLeaderElectionEnable(integer $UncleanLeaderElectionEnable) Set 0: false, 1: true.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSegmentBytes() Obtain Number of bytes for segment rolling
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentBytes(integer $SegmentBytes) Set Number of bytes for segment rolling
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMessageBytes() Obtain Maximum number of message bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMessageBytes(integer $MaxMessageBytes) Set Maximum number of message bytes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRetentionBytes() Obtain Message retention file size.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRetentionBytes(integer $RetentionBytes) Set Message retention file size.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class Config extends AbstractModel
{
    /**
     * @var integer Message retention period
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Retention;

    /**
     * @var integer Minimum number of sync replications
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MinInsyncReplicas;

    /**
     * @var string Log cleanup mode. Default value: delete.
delete: logs will be deleted by save time; compact: logs will be compressed by key; compact, delete: logs will be compressed by key and deleted by save time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CleanUpPolicy;

    /**
     * @var integer Segment rolling duration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentMs;

    /**
     * @var integer 0: false, 1: true.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UncleanLeaderElectionEnable;

    /**
     * @var integer Number of bytes for segment rolling
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentBytes;

    /**
     * @var integer Maximum number of message bytes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMessageBytes;

    /**
     * @var integer Message retention file size.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RetentionBytes;

    /**
     * @param integer $Retention Message retention period
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MinInsyncReplicas Minimum number of sync replications
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CleanUpPolicy Log cleanup mode. Default value: delete.
delete: logs will be deleted by save time; compact: logs will be compressed by key; compact, delete: logs will be compressed by key and deleted by save time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SegmentMs Segment rolling duration
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $UncleanLeaderElectionEnable 0: false, 1: true.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SegmentBytes Number of bytes for segment rolling
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMessageBytes Maximum number of message bytes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RetentionBytes Message retention file size.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Retention",$param) and $param["Retention"] !== null) {
            $this->Retention = $param["Retention"];
        }

        if (array_key_exists("MinInsyncReplicas",$param) and $param["MinInsyncReplicas"] !== null) {
            $this->MinInsyncReplicas = $param["MinInsyncReplicas"];
        }

        if (array_key_exists("CleanUpPolicy",$param) and $param["CleanUpPolicy"] !== null) {
            $this->CleanUpPolicy = $param["CleanUpPolicy"];
        }

        if (array_key_exists("SegmentMs",$param) and $param["SegmentMs"] !== null) {
            $this->SegmentMs = $param["SegmentMs"];
        }

        if (array_key_exists("UncleanLeaderElectionEnable",$param) and $param["UncleanLeaderElectionEnable"] !== null) {
            $this->UncleanLeaderElectionEnable = $param["UncleanLeaderElectionEnable"];
        }

        if (array_key_exists("SegmentBytes",$param) and $param["SegmentBytes"] !== null) {
            $this->SegmentBytes = $param["SegmentBytes"];
        }

        if (array_key_exists("MaxMessageBytes",$param) and $param["MaxMessageBytes"] !== null) {
            $this->MaxMessageBytes = $param["MaxMessageBytes"];
        }

        if (array_key_exists("RetentionBytes",$param) and $param["RetentionBytes"] !== null) {
            $this->RetentionBytes = $param["RetentionBytes"];
        }
    }
}
