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
 * Full text recognition segment.
 *
 * @method float getConfidence() Obtain <p>Confidence of the recognized segment. Value range: 0–100.</p>
 * @method void setConfidence(float $Confidence) Set <p>Confidence of the recognized segment. Value range: 0–100.</p>
 * @method array getAreaCoordSet() Obtain <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
 * @method void setAreaCoordSet(array $AreaCoordSet) Set <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
 * @method string getText() Obtain <p>Recognized text.</p>
 * @method void setText(string $Text) Set <p>Recognized text.</p>
 */
class AiRecognitionTaskOcrFullTextSegmentTextItem extends AbstractModel
{
    /**
     * @var float <p>Confidence of the recognized segment. Value range: 0–100.</p>
     */
    public $Confidence;

    /**
     * @var array <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
     */
    public $AreaCoordSet;

    /**
     * @var string <p>Recognized text.</p>
     */
    public $Text;

    /**
     * @param float $Confidence <p>Confidence of the recognized segment. Value range: 0–100.</p>
     * @param array $AreaCoordSet <p>Area coordinates of the recognition result. The array contains 4 elements [x1,y1,x2,y2], representing the horizontal and vertical coordinates of the top-left corner and bottom-right corner.</p>
     * @param string $Text <p>Recognized text.</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }
    }
}
