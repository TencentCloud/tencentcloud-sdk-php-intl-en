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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Facial Information of Inappropriate Content Detection in Face Fusion
 *
 * @method string getField() Obtain Reserved field
 * @method void setField(string $Field) Set Reserved field
 * @method string getLabel() Obtain Label Names Matched by Content Moderation
 * @method void setLabel(string $Label) Set Label Names Matched by Content Moderation
 * @method float getConfidence() Obtain Confidence score of the detection label. A higher score means a greater likelihood of violations.
0-70: Suggestion = PASS
70-80: Suggestion = REVIEW
80-100: Suggestion = BLOCK
 * @method void setConfidence(float $Confidence) Set Confidence score of the detection label. A higher score means a greater likelihood of violations.
0-70: Suggestion = PASS
70-80: Suggestion = REVIEW
80-100: Suggestion = BLOCK
 * @method string getSuggestion() Obtain Moderation Conclusion for Detection Scenarios
PASS: Normal
REVIEW: Suspicious
BLOCK: Violation
 * @method void setSuggestion(string $Suggestion) Set Moderation Conclusion for Detection Scenarios
PASS: Normal
REVIEW: Suspicious
BLOCK: Violation
 */
class FuseFaceReviewDetail extends AbstractModel
{
    /**
     * @var string Reserved field
     */
    public $Field;

    /**
     * @var string Label Names Matched by Content Moderation
     */
    public $Label;

    /**
     * @var float Confidence score of the detection label. A higher score means a greater likelihood of violations.
0-70: Suggestion = PASS
70-80: Suggestion = REVIEW
80-100: Suggestion = BLOCK
     */
    public $Confidence;

    /**
     * @var string Moderation Conclusion for Detection Scenarios
PASS: Normal
REVIEW: Suspicious
BLOCK: Violation
     */
    public $Suggestion;

    /**
     * @param string $Field Reserved field
     * @param string $Label Label Names Matched by Content Moderation
     * @param float $Confidence Confidence score of the detection label. A higher score means a greater likelihood of violations.
0-70: Suggestion = PASS
70-80: Suggestion = REVIEW
80-100: Suggestion = BLOCK
     * @param string $Suggestion Moderation Conclusion for Detection Scenarios
PASS: Normal
REVIEW: Suspicious
BLOCK: Violation
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
