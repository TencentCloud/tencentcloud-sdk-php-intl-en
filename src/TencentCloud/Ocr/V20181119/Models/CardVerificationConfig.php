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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Verification capacity switch configuration
 *
 * @method boolean getEnableRecognition() Obtain <p>Whether to perform card field recognition, true by default</p>
 * @method void setEnableRecognition(boolean $EnableRecognition) Set <p>Whether to perform card field recognition, true by default</p>
 * @method boolean getEnableQualityCheck() Obtain <p>Whether to perform quality detection (blurry/reflective/incomplete border/obstruction). false by default</p>
 * @method void setEnableQualityCheck(boolean $EnableQualityCheck) Set <p>Whether to perform quality detection (blurry/reflective/incomplete border/obstruction). false by default</p>
 * @method boolean getEnableTamperCheck() Obtain <p>Whether to perform tampering detection (PS/synthesis/electronic). false by default</p>
 * @method void setEnableTamperCheck(boolean $EnableTamperCheck) Set <p>Whether to perform tampering detection (PS/synthesis/electronic). false by default</p>
 * @method boolean getEnableCopyCheck() Obtain <p>Whether to perform photocopy detection. false by default</p>
 * @method void setEnableCopyCheck(boolean $EnableCopyCheck) Set <p>Whether to perform photocopy detection. false by default</p>
 * @method boolean getEnableRecaptureCheck() Obtain <p>Whether to perform rephotography detection. false by default</p>
 * @method void setEnableRecaptureCheck(boolean $EnableRecaptureCheck) Set <p>Whether to perform rephotography detection. false by default</p>
 * @method boolean getEnableFormatCheck() Obtain <p>Whether to perform format validation (dependent recognition). false by default</p>
 * @method void setEnableFormatCheck(boolean $EnableFormatCheck) Set <p>Whether to perform format validation (dependent recognition). false by default</p>
 * @method boolean getEnableConsistencyCheck() Obtain <p>Whether to perform both sides consistency check (dependent on recognition), false by default</p>
 * @method void setEnableConsistencyCheck(boolean $EnableConsistencyCheck) Set <p>Whether to perform both sides consistency check (dependent on recognition), false by default</p>
 */
class CardVerificationConfig extends AbstractModel
{
    /**
     * @var boolean <p>Whether to perform card field recognition, true by default</p>
     */
    public $EnableRecognition;

    /**
     * @var boolean <p>Whether to perform quality detection (blurry/reflective/incomplete border/obstruction). false by default</p>
     */
    public $EnableQualityCheck;

    /**
     * @var boolean <p>Whether to perform tampering detection (PS/synthesis/electronic). false by default</p>
     */
    public $EnableTamperCheck;

    /**
     * @var boolean <p>Whether to perform photocopy detection. false by default</p>
     */
    public $EnableCopyCheck;

    /**
     * @var boolean <p>Whether to perform rephotography detection. false by default</p>
     */
    public $EnableRecaptureCheck;

    /**
     * @var boolean <p>Whether to perform format validation (dependent recognition). false by default</p>
     */
    public $EnableFormatCheck;

    /**
     * @var boolean <p>Whether to perform both sides consistency check (dependent on recognition), false by default</p>
     */
    public $EnableConsistencyCheck;

    /**
     * @param boolean $EnableRecognition <p>Whether to perform card field recognition, true by default</p>
     * @param boolean $EnableQualityCheck <p>Whether to perform quality detection (blurry/reflective/incomplete border/obstruction). false by default</p>
     * @param boolean $EnableTamperCheck <p>Whether to perform tampering detection (PS/synthesis/electronic). false by default</p>
     * @param boolean $EnableCopyCheck <p>Whether to perform photocopy detection. false by default</p>
     * @param boolean $EnableRecaptureCheck <p>Whether to perform rephotography detection. false by default</p>
     * @param boolean $EnableFormatCheck <p>Whether to perform format validation (dependent recognition). false by default</p>
     * @param boolean $EnableConsistencyCheck <p>Whether to perform both sides consistency check (dependent on recognition), false by default</p>
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
        if (array_key_exists("EnableRecognition",$param) and $param["EnableRecognition"] !== null) {
            $this->EnableRecognition = $param["EnableRecognition"];
        }

        if (array_key_exists("EnableQualityCheck",$param) and $param["EnableQualityCheck"] !== null) {
            $this->EnableQualityCheck = $param["EnableQualityCheck"];
        }

        if (array_key_exists("EnableTamperCheck",$param) and $param["EnableTamperCheck"] !== null) {
            $this->EnableTamperCheck = $param["EnableTamperCheck"];
        }

        if (array_key_exists("EnableCopyCheck",$param) and $param["EnableCopyCheck"] !== null) {
            $this->EnableCopyCheck = $param["EnableCopyCheck"];
        }

        if (array_key_exists("EnableRecaptureCheck",$param) and $param["EnableRecaptureCheck"] !== null) {
            $this->EnableRecaptureCheck = $param["EnableRecaptureCheck"];
        }

        if (array_key_exists("EnableFormatCheck",$param) and $param["EnableFormatCheck"] !== null) {
            $this->EnableFormatCheck = $param["EnableFormatCheck"];
        }

        if (array_key_exists("EnableConsistencyCheck",$param) and $param["EnableConsistencyCheck"] !== null) {
            $this->EnableConsistencyCheck = $param["EnableConsistencyCheck"];
        }
    }
}
