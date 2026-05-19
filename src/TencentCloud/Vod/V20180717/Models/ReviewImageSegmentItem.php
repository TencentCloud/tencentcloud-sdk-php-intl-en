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
 * The information of an image moderation segment.
 *
 * @method float getConfidence() Obtain Score of offensive information involved in suspected clips.
 * @method void setConfidence(float $Confidence) Set Score of offensive information involved in suspected clips.
 * @method string getSuggestion() Obtain Result suggestions for identifying violations in suspected clips. Value ranges from...to...
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for identifying violations in suspected clips. Value ranges from...to...
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
 * @method string getLabel() Obtain The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
 * @method void setLabel(string $Label) Set The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
 * @method string getSubLabel() Obtain Rule violation subtag.
 * @method void setSubLabel(string $SubLabel) Set Rule violation subtag.
 * @method string getForm() Obtain Suspected segment is prohibited in the form of, value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on screen.</li>
 * @method void setForm(string $Form) Set Suspected segment is prohibited in the form of, value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on screen.</li>
 * @method array getAreaCoordSet() Obtain Coordinates of the area where suspicious figures, icons, or text appear (pixel level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Coordinates of the area where suspicious figures, icons, or text appear (pixel level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
 * @method string getText() Obtain Valid when Form is OCR, means the OCR Text Content that comes out.
 * @method void setText(string $Text) Set Valid when Form is OCR, means the OCR Text Content that comes out.
 * @method array getKeywordSet() Obtain Valid when Form is OCR, means the list of violation keywords hit by suspicious fragments.
 * @method void setKeywordSet(array $KeywordSet) Set Valid when Form is OCR, means the list of violation keywords hit by suspicious fragments.
 */
class ReviewImageSegmentItem extends AbstractModel
{
    /**
     * @var float Score of offensive information involved in suspected clips.
     */
    public $Confidence;

    /**
     * @var string Result suggestions for identifying violations in suspected clips. Value ranges from...to...
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
     */
    public $Suggestion;

    /**
     * @var string The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
     */
    public $Label;

    /**
     * @var string Rule violation subtag.
     */
    public $SubLabel;

    /**
     * @var string Suspected segment is prohibited in the form of, value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on screen.</li>
     */
    public $Form;

    /**
     * @var array Coordinates of the area where suspicious figures, icons, or text appear (pixel level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
     */
    public $AreaCoordSet;

    /**
     * @var string Valid when Form is OCR, means the OCR Text Content that comes out.
     */
    public $Text;

    /**
     * @var array Valid when Form is OCR, means the list of violation keywords hit by suspicious fragments.
     */
    public $KeywordSet;

    /**
     * @param float $Confidence Score of offensive information involved in suspected clips.
     * @param string $Suggestion Result suggestions for identifying violations in suspected clips. Value ranges from...to...
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
     * @param string $Label The most likely label for the suspicious content. Valid values: <li>`Porn`</li> <li>`Terror`</li>
     * @param string $SubLabel Rule violation subtag.
     * @param string $Form Suspected segment is prohibited in the form of, value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on screen.</li>
     * @param array $AreaCoordSet Coordinates of the area where suspicious figures, icons, or text appear (pixel level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
     * @param string $Text Valid when Form is OCR, means the OCR Text Content that comes out.
     * @param array $KeywordSet Valid when Form is OCR, means the list of violation keywords hit by suspicious fragments.
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
