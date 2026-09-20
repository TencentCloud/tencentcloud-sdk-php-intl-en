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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object recognition result segment.
 *
 * @method float getStartTimeOffset() Obtain <p>Start time offset of the recognized segment, in seconds.</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Start time offset of the recognized segment, in seconds.</p>
 * @method float getEndTimeOffset() Obtain <p>End time offset of the recognized segment, in seconds.</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>End time offset of the recognized segment, in seconds.</p>
 * @method float getConfidence() Obtain <p>Confidence of the recognized segment. Value range: 0–100.</p>
 * @method void setConfidence(float $Confidence) Set <p>Confidence of the recognized segment. Value range: 0–100.</p>
 * @method array getAreaCoordSet() Obtain <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
 * @method void setAreaCoordSet(array $AreaCoordSet) Set <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
 */
class AiRecognitionTaskObjectSeqmentItem extends AbstractModel
{
    /**
     * @var float <p>Start time offset of the recognized segment, in seconds.</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>End time offset of the recognized segment, in seconds.</p>
     */
    public $EndTimeOffset;

    /**
     * @var float <p>Confidence of the recognized segment. Value range: 0–100.</p>
     */
    public $Confidence;

    /**
     * @var array <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
     */
    public $AreaCoordSet;

    /**
     * @param float $StartTimeOffset <p>Start time offset of the recognized segment, in seconds.</p>
     * @param float $EndTimeOffset <p>End time offset of the recognized segment, in seconds.</p>
     * @param float $Confidence <p>Confidence of the recognized segment. Value range: 0–100.</p>
     * @param array $AreaCoordSet <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
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

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
