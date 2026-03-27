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
 * Face Fusion is not suitable for CR facial information.
 *
 * @method string getField() Obtain Reserved Field
 * @method void setField(string $Field) Set Reserved Field
 * @method string getLabel() Obtain Tag name matched in audit
 * @method void setLabel(string $Label) Set Tag name matched in audit
 * @method float getConfidence() Obtain Confidence score corresponding to the identified label. A higher score indicates a higher probability of violation.

0 to 70: Suggestion is PASS;

70 to 80: Suggestion is REVIEW;

80 to 100: Suggestion is BLOCK.
 * @method void setConfidence(float $Confidence) Set Confidence score corresponding to the identified label. A higher score indicates a higher probability of violation.

0 to 70: Suggestion is PASS;

70 to 80: Suggestion is REVIEW;

80 to 100: Suggestion is BLOCK.
 * @method string getSuggestion() Obtain Audit conclusion for identified scenarios:

PASS: Normal

REVIEW: Suspected

BLOCK: Violation
 * @method void setSuggestion(string $Suggestion) Set Audit conclusion for identified scenarios:

PASS: Normal

REVIEW: Suspected

BLOCK: Violation
 */
class FuseFaceReviewDetail extends AbstractModel
{
    /**
     * @var string Reserved Field
     */
    public $Field;

    /**
     * @var string Tag name matched in audit
     */
    public $Label;

    /**
     * @var float Confidence score corresponding to the identified label. A higher score indicates a higher probability of violation.

0 to 70: Suggestion is PASS;

70 to 80: Suggestion is REVIEW;

80 to 100: Suggestion is BLOCK.
     */
    public $Confidence;

    /**
     * @var string Audit conclusion for identified scenarios:

PASS: Normal

REVIEW: Suspected

BLOCK: Violation
     */
    public $Suggestion;

    /**
     * @param string $Field Reserved Field
     * @param string $Label Tag name matched in audit
     * @param float $Confidence Confidence score corresponding to the identified label. A higher score indicates a higher probability of violation.

0 to 70: Suggestion is PASS;

70 to 80: Suggestion is REVIEW;

80 to 100: Suggestion is BLOCK.
     * @param string $Suggestion Audit conclusion for identified scenarios:

PASS: Normal

REVIEW: Suspected

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
