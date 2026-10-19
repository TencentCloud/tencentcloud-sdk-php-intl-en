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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosAuditObjectSampleRate request structure.
 *
 * @method array getBucketIdSet() Obtain <p>Bucket asset id set</p>
 * @method void setBucketIdSet(array $BucketIdSet) Set <p>Bucket asset id set</p>
 * @method array getSampleRateSet() Obtain <p>Sampling rate collection</p>
 * @method void setSampleRateSet(array $SampleRateSet) Set <p>Sampling rate collection</p>
 * @method integer getTargetAppId() Obtain <p>appid; required when passing DefaultSampleRate; selectable when only modifying existing buckets</p>
 * @method void setTargetAppId(integer $TargetAppId) Set <p>appid; required when passing DefaultSampleRate; selectable when only modifying existing buckets</p>
 * @method float getDefaultSampleRate() Obtain <p>Modify the default value of the newly-added bucket for TargetAppId when passed in; do not modify the default value when not passed in</p><p>Value range: [0.001, 1]</p>
 * @method void setDefaultSampleRate(float $DefaultSampleRate) Set <p>Modify the default value of the newly-added bucket for TargetAppId when passed in; do not modify the default value when not passed in</p><p>Value range: [0.001, 1]</p>
 */
class ModifyCosAuditObjectSampleRateRequest extends AbstractModel
{
    /**
     * @var array <p>Bucket asset id set</p>
     */
    public $BucketIdSet;

    /**
     * @var array <p>Sampling rate collection</p>
     */
    public $SampleRateSet;

    /**
     * @var integer <p>appid; required when passing DefaultSampleRate; selectable when only modifying existing buckets</p>
     */
    public $TargetAppId;

    /**
     * @var float <p>Modify the default value of the newly-added bucket for TargetAppId when passed in; do not modify the default value when not passed in</p><p>Value range: [0.001, 1]</p>
     */
    public $DefaultSampleRate;

    /**
     * @param array $BucketIdSet <p>Bucket asset id set</p>
     * @param array $SampleRateSet <p>Sampling rate collection</p>
     * @param integer $TargetAppId <p>appid; required when passing DefaultSampleRate; selectable when only modifying existing buckets</p>
     * @param float $DefaultSampleRate <p>Modify the default value of the newly-added bucket for TargetAppId when passed in; do not modify the default value when not passed in</p><p>Value range: [0.001, 1]</p>
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
        if (array_key_exists("BucketIdSet",$param) and $param["BucketIdSet"] !== null) {
            $this->BucketIdSet = $param["BucketIdSet"];
        }

        if (array_key_exists("SampleRateSet",$param) and $param["SampleRateSet"] !== null) {
            $this->SampleRateSet = $param["SampleRateSet"];
        }

        if (array_key_exists("TargetAppId",$param) and $param["TargetAppId"] !== null) {
            $this->TargetAppId = $param["TargetAppId"];
        }

        if (array_key_exists("DefaultSampleRate",$param) and $param["DefaultSampleRate"] !== null) {
            $this->DefaultSampleRate = $param["DefaultSampleRate"];
        }
    }
}
