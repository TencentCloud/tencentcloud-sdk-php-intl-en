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
 * The result for OCR-based image moderation.
 *
 * @method float getConfidence() Obtain The confidence score for the OCR-based moderation result. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set The confidence score for the OCR-based moderation result. Value range: 0-100.
 * @method string getSuggestion() Obtain The suggestion for handling the suspicious content detected based on OCR. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set The suggestion for handling the suspicious content detected based on OCR. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
 * @method array getKeywordSet() Obtain The list of suspicious keywords detected based on OCR.
 * @method void setKeywordSet(array $KeywordSet) Set The list of suspicious keywords detected based on OCR.
 * @method array getAreaCoordSet() Obtain The coordinates (pixel) of the top-left and bottom-right corners of the frame where a suspicious keyword appears. Format: [x1, y1, x2, y2].
 * @method void setAreaCoordSet(array $AreaCoordSet) Set The coordinates (pixel) of the top-left and bottom-right corners of the frame where a suspicious keyword appears. Format: [x1, y1, x2, y2].
 */
class ContentReviewOcrResult extends AbstractModel
{
    /**
     * @var float The confidence score for the OCR-based moderation result. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var string The suggestion for handling the suspicious content detected based on OCR. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var array The list of suspicious keywords detected based on OCR.
     */
    public $KeywordSet;

    /**
     * @var array The coordinates (pixel) of the top-left and bottom-right corners of the frame where a suspicious keyword appears. Format: [x1, y1, x2, y2].
     */
    public $AreaCoordSet;

    /**
     * @param float $Confidence The confidence score for the OCR-based moderation result. Value range: 0-100.
     * @param string $Suggestion The suggestion for handling the suspicious content detected based on OCR. Valid values:
<li>pass/li>
<li>review</li>
<li>block</li>
     * @param array $KeywordSet The list of suspicious keywords detected based on OCR.
     * @param array $AreaCoordSet The coordinates (pixel) of the top-left and bottom-right corners of the frame where a suspicious keyword appears. Format: [x1, y1, x2, y2].
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
