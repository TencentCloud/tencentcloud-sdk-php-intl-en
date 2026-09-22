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
 * Task result type of the Image Ocr text identification information.
 *
 * @method float getConfidence() Obtain <p>Score of Ocr text identification result. Value range: 0-100.</p>
 * @method void setConfidence(float $Confidence) Set <p>Score of Ocr text identification result. Value range: 0-100.</p>
 * @method string getSuggestion() Obtain <p>Result suggestions for Ocr text identification. Value range:</p><li>pass;</li><li>review;</li><li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set <p>Result suggestions for Ocr text identification. Value range:</p><li>pass;</li><li>review;</li><li>block.</li>
 * @method array getKeywordSet() Obtain <p>List of suspicious keywords for Ocr text identification.</p>
 * @method void setKeywordSet(array $KeywordSet) Set <p>List of suspicious keywords for Ocr text identification.</p>
 * @method array getAreaCoordSet() Obtain <p>Area coordinates (pixel level) where the suspected text appears in Ocr text identification, [x1, y1, x2, y2], which are the coordinates of the top-left corner and the bottom-right corner.</p>
 * @method void setAreaCoordSet(array $AreaCoordSet) Set <p>Area coordinates (pixel level) where the suspected text appears in Ocr text identification, [x1, y1, x2, y2], which are the coordinates of the top-left corner and the bottom-right corner.</p>
 */
class ContentReviewOcrResult extends AbstractModel
{
    /**
     * @var float <p>Score of Ocr text identification result. Value range: 0-100.</p>
     */
    public $Confidence;

    /**
     * @var string <p>Result suggestions for Ocr text identification. Value range:</p><li>pass;</li><li>review;</li><li>block.</li>
     */
    public $Suggestion;

    /**
     * @var array <p>List of suspicious keywords for Ocr text identification.</p>
     */
    public $KeywordSet;

    /**
     * @var array <p>Area coordinates (pixel level) where the suspected text appears in Ocr text identification, [x1, y1, x2, y2], which are the coordinates of the top-left corner and the bottom-right corner.</p>
     */
    public $AreaCoordSet;

    /**
     * @param float $Confidence <p>Score of Ocr text identification result. Value range: 0-100.</p>
     * @param string $Suggestion <p>Result suggestions for Ocr text identification. Value range:</p><li>pass;</li><li>review;</li><li>block.</li>
     * @param array $KeywordSet <p>List of suspicious keywords for Ocr text identification.</p>
     * @param array $AreaCoordSet <p>Area coordinates (pixel level) where the suspected text appears in Ocr text identification, [x1, y1, x2, y2], which are the coordinates of the top-left corner and the bottom-right corner.</p>
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

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("KeywordSet",$param) and $param["KeywordSet"] !== null) {
            $this->KeywordSet = $param["KeywordSet"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }
    }
}
