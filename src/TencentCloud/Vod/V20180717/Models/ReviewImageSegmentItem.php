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
 * The information of an image moderation segment.
 *
 * @method float getConfidence() Obtain The confidence score for the suspicious segment.
 * @method void setConfidence(float $Confidence) Set The confidence score for the suspicious segment.
 * @method string getSuggestion() Obtain The suggestion. Valid values:
<li>`review`: The content may be non-compliant and needs to be reviewed.</li>
<li>`block`: The content is non-compliant and should be blocked.</li>
 * @method void setSuggestion(string $Suggestion) Set The suggestion. Valid values:
<li>`review`: The content may be non-compliant and needs to be reviewed.</li>
<li>`block`: The content is non-compliant and should be blocked.</li>
 * @method string getLabel() Obtain The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
 * @method void setLabel(string $Label) Set The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
 * @method string getSubLabel() Obtain The sub-label.
 * @method void setSubLabel(string $SubLabel) Set The sub-label.
 * @method string getForm() Obtain The type of the suspicious segment. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
 * @method void setForm(string $Form) Set The type of the suspicious segment. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
 * @method array getAreaCoordSet() Obtain The pixel coordinates of the suspicious people, icons, or text. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set The pixel coordinates of the suspicious people, icons, or text. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
 * @method string getText() Obtain The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR`.
 * @method void setText(string $Text) Set The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR`.
 * @method array getKeywordSet() Obtain The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR`.
 * @method void setKeywordSet(array $KeywordSet) Set The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR`.
 */
class ReviewImageSegmentItem extends AbstractModel
{
    /**
     * @var float The confidence score for the suspicious segment.
     */
    public $Confidence;

    /**
     * @var string The suggestion. Valid values:
<li>`review`: The content may be non-compliant and needs to be reviewed.</li>
<li>`block`: The content is non-compliant and should be blocked.</li>
     */
    public $Suggestion;

    /**
     * @var string The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
     */
    public $Label;

    /**
     * @var string The sub-label.
     */
    public $SubLabel;

    /**
     * @var string The type of the suspicious segment. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
     */
    public $Form;

    /**
     * @var array The pixel coordinates of the suspicious people, icons, or text. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
     */
    public $AreaCoordSet;

    /**
     * @var string The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR`.
     */
    public $Text;

    /**
     * @var array The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR`.
     */
    public $KeywordSet;

    /**
     * @param float $Confidence The confidence score for the suspicious segment.
     * @param string $Suggestion The suggestion. Valid values:
<li>`review`: The content may be non-compliant and needs to be reviewed.</li>
<li>`block`: The content is non-compliant and should be blocked.</li>
     * @param string $Label The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
     * @param string $SubLabel The sub-label.
     * @param string $Form The type of the suspicious segment. Valid values:
<li>`Image` (people or icons in images)</li>
<li>`OCR` (text in images)</li>
     * @param array $AreaCoordSet The pixel coordinates of the suspicious people, icons, or text. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
     * @param string $Text The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR`.
     * @param array $KeywordSet The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR`.
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
