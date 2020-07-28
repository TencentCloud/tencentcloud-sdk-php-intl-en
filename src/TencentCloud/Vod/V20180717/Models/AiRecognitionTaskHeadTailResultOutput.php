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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output of video opening and ending credits recognition.
 *
 * @method float getHeadConfidence() Obtain Confidence of recognized opening credits. Value range: 0-100.
 * @method void setHeadConfidence(float $HeadConfidence) Set Confidence of recognized opening credits. Value range: 0-100.
 * @method float getHeadTimeOffset() Obtain End time point of video opening credits in seconds.
 * @method void setHeadTimeOffset(float $HeadTimeOffset) Set End time point of video opening credits in seconds.
 * @method float getTailConfidence() Obtain Confidence of recognized closing credits. Value range: 0-100.
 * @method void setTailConfidence(float $TailConfidence) Set Confidence of recognized closing credits. Value range: 0-100.
 * @method float getTailTimeOffset() Obtain Start time point of video closing credits in seconds.
 * @method void setTailTimeOffset(float $TailTimeOffset) Set Start time point of video closing credits in seconds.
 */
class AiRecognitionTaskHeadTailResultOutput extends AbstractModel
{
    /**
     * @var float Confidence of recognized opening credits. Value range: 0-100.
     */
    public $HeadConfidence;

    /**
     * @var float End time point of video opening credits in seconds.
     */
    public $HeadTimeOffset;

    /**
     * @var float Confidence of recognized closing credits. Value range: 0-100.
     */
    public $TailConfidence;

    /**
     * @var float Start time point of video closing credits in seconds.
     */
    public $TailTimeOffset;

    /**
     * @param float $HeadConfidence Confidence of recognized opening credits. Value range: 0-100.
     * @param float $HeadTimeOffset End time point of video opening credits in seconds.
     * @param float $TailConfidence Confidence of recognized closing credits. Value range: 0-100.
     * @param float $TailTimeOffset Start time point of video closing credits in seconds.
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
        if (array_key_exists("HeadConfidence",$param) and $param["HeadConfidence"] !== null) {
            $this->HeadConfidence = $param["HeadConfidence"];
        }

        if (array_key_exists("HeadTimeOffset",$param) and $param["HeadTimeOffset"] !== null) {
            $this->HeadTimeOffset = $param["HeadTimeOffset"];
        }

        if (array_key_exists("TailConfidence",$param) and $param["TailConfidence"] !== null) {
            $this->TailConfidence = $param["TailConfidence"];
        }

        if (array_key_exists("TailTimeOffset",$param) and $param["TailTimeOffset"] !== null) {
            $this->TailTimeOffset = $param["TailTimeOffset"];
        }
    }
}
