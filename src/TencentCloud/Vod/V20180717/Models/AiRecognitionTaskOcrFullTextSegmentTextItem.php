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
 * Full text recognition segment.
 *
 * @method float getConfidence() Obtain Confidence of a recognized segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of a recognized segment. Value range: 0-100.
 * @method array getAreaCoordSet() Obtain Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
 * @method string getText() Obtain Recognized text.
 * @method void setText(string $Text) Set Recognized text.
 */
class AiRecognitionTaskOcrFullTextSegmentTextItem extends AbstractModel
{
    /**
     * @var float Confidence of a recognized segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var array Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
     */
    public $AreaCoordSet;

    /**
     * @var string Recognized text.
     */
    public $Text;

    /**
     * @param float $Confidence Confidence of a recognized segment. Value range: 0-100.
     * @param array $AreaCoordSet Zone coordinates of the recognition result. An array contains four elements: [x1, y1, x2, y2], representing the horizontal and vertical coordinates of the top-left and bottom-right corners, respectively.
     * @param string $Text Recognized text.
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
