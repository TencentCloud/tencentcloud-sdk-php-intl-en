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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speech recognition segment.
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a recognition segment in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a recognition segment in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a recognition segment in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a recognition segment in seconds.
 * @method float getConfidence() Obtain Confidence of a recognition segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of a recognition segment. Value range: 0-100.
 */
class AiRecognitionTaskAsrWordsSegmentItem extends AbstractModel
{
    /**
     * @var float Start time offset of a recognition segment in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a recognition segment in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float Confidence of a recognition segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @param float $StartTimeOffset Start time offset of a recognition segment in seconds.
     * @param float $EndTimeOffset End time offset of a recognition segment in seconds.
     * @param float $Confidence Confidence of a recognition segment. Value range: 0-100.
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
