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
 * 
 *
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 * @method string getSuggestion() Obtain 
 * @method void setSuggestion(string $Suggestion) Set 
 * @method string getLabel() Obtain 
 * @method void setLabel(string $Label) Set 
 * @method string getSubLabel() Obtain 
 * @method void setSubLabel(string $SubLabel) Set 
 * @method string getForm() Obtain 
 * @method void setForm(string $Form) Set 
 * @method array getAreaCoordSet() Obtain 
 * @method void setAreaCoordSet(array $AreaCoordSet) Set 
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method array getKeywordSet() Obtain 
 * @method void setKeywordSet(array $KeywordSet) Set 
 */
class ReviewImageSegmentItem extends AbstractModel
{
    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @var string 
     */
    public $Suggestion;

    /**
     * @var string 
     */
    public $Label;

    /**
     * @var string 
     */
    public $SubLabel;

    /**
     * @var string 
     */
    public $Form;

    /**
     * @var array 
     */
    public $AreaCoordSet;

    /**
     * @var string 
     */
    public $Text;

    /**
     * @var array 
     */
    public $KeywordSet;

    /**
     * @param float $Confidence 
     * @param string $Suggestion 
     * @param string $Label 
     * @param string $SubLabel 
     * @param string $Form 
     * @param array $AreaCoordSet 
     * @param string $Text 
     * @param array $KeywordSet 
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Form",$param) and $param["Form"] !== null) {
            $this->Form = $param["Form"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("KeywordSet",$param) and $param["KeywordSet"] !== null) {
            $this->KeywordSet = $param["KeywordSet"];
        }
    }
}
