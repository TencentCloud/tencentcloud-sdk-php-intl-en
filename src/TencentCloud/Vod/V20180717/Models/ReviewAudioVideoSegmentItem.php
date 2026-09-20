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
 * Audio and video moderation clip.
 *
 * @method float getStartTimeOffset() Obtain Time offset of the start of the suspected segment. Unit: second.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Time offset of the start of the suspected segment. Unit: second.
 * @method float getEndTimeOffset() Obtain End time offset of the suspected segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of the suspected segment, in seconds.
 * @method float getConfidence() Obtain Score of offensive information involved in suspected clips.
 * @method void setConfidence(float $Confidence) Set Score of offensive information involved in suspected clips.
 * @method string getSuggestion() Obtain Result suggestions for identifying violations in suspected clips. Value range:
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for identifying violations in suspected clips. Value range:
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
 * @method string getLabel() Obtain Label of the most likely rule violation in the suspected segment. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: verbal abuse;</li>
<li>Moan: panting.</li>
 * @method void setLabel(string $Label) Set Label of the most likely rule violation in the suspected segment. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: verbal abuse;</li>
<li>Moan: panting.</li>
 * @method string getSubLabel() Obtain Rule-violating subtag.
 * @method void setSubLabel(string $SubLabel) Set Rule-violating subtag.
 * @method string getForm() Obtain Suspected segment violation type. Value range:
<li>Image: People or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
 * @method void setForm(string $Form) Set Suspected segment violation type. Value range:
<li>Image: People or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
 * @method array getAreaCoordSet() Obtain Valid when `Form` is `Image` or `OCR`. Indicates the area coordinates (pixel-level) where the suspect, icon, or text appears, in the format [x1, y1, x2, y2], which are the coordinates of the top-left corner and bottom-right corner.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Valid when `Form` is `Image` or `OCR`. Indicates the area coordinates (pixel-level) where the suspect, icon, or text appears, in the format [x1, y1, x2, y2], which are the coordinates of the top-left corner and bottom-right corner.
 * @method string getText() Obtain Valid when Form is OCR or ASR. Indicates the recognized OCR or ASR text content.
 * @method void setText(string $Text) Set Valid when Form is OCR or ASR. Indicates the recognized OCR or ASR text content.
 * @method array getKeywordSet() Obtain Valid when Form is OCR or ASR. It indicates the list of violation keywords hit by suspicious fragments.
 * @method void setKeywordSet(array $KeywordSet) Set Valid when Form is OCR or ASR. It indicates the list of violation keywords hit by suspicious fragments.
 * @method string getUrl() Obtain Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
 * @method void setUrl(string $Url) Set Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
 * @method string getPicUrlExpireTime() Obtain Expiration time of the suspected image URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of the suspected image URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewAudioVideoSegmentItem extends AbstractModel
{
    /**
     * @var float Time offset of the start of the suspected segment. Unit: second.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of the suspected segment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float Score of offensive information involved in suspected clips.
     */
    public $Confidence;

    /**
     * @var string Result suggestions for identifying violations in suspected clips. Value range:
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
     */
    public $Suggestion;

    /**
     * @var string Label of the most likely rule violation in the suspected segment. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: verbal abuse;</li>
<li>Moan: panting.</li>
     */
    public $Label;

    /**
     * @var string Rule-violating subtag.
     */
    public $SubLabel;

    /**
     * @var string Suspected segment violation type. Value range:
<li>Image: People or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
     */
    public $Form;

    /**
     * @var array Valid when `Form` is `Image` or `OCR`. Indicates the area coordinates (pixel-level) where the suspect, icon, or text appears, in the format [x1, y1, x2, y2], which are the coordinates of the top-left corner and bottom-right corner.
     */
    public $AreaCoordSet;

    /**
     * @var string Valid when Form is OCR or ASR. Indicates the recognized OCR or ASR text content.
     */
    public $Text;

    /**
     * @var array Valid when Form is OCR or ASR. It indicates the list of violation keywords hit by suspicious fragments.
     */
    public $KeywordSet;

    /**
     * @var string Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
     */
    public $Url;

    /**
     * @var string Expiration time of the suspected image URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Time offset of the start of the suspected segment. Unit: second.
     * @param float $EndTimeOffset End time offset of the suspected segment, in seconds.
     * @param float $Confidence Score of offensive information involved in suspected clips.
     * @param string $Suggestion Result suggestions for identifying violations in suspected clips. Value range:
<li>review: suspected violation, suggest re-examination;</li>
<li>block: Confirmed violation. Suggest banning.</li>
     * @param string $Label Label of the most likely rule violation in the suspected segment. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: verbal abuse;</li>
<li>Moan: panting.</li>
     * @param string $SubLabel Rule-violating subtag.
     * @param string $Form Suspected segment violation type. Value range:
<li>Image: People or icons in the image;</li>
<li>OCR: text on the screen;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
     * @param array $AreaCoordSet Valid when `Form` is `Image` or `OCR`. Indicates the area coordinates (pixel-level) where the suspect, icon, or text appears, in the format [x1, y1, x2, y2], which are the coordinates of the top-left corner and bottom-right corner.
     * @param string $Text Valid when Form is OCR or ASR. Indicates the recognized OCR or ASR text content.
     * @param array $KeywordSet Valid when Form is OCR or ASR. It indicates the list of violation keywords hit by suspicious fragments.
     * @param string $Url Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
     * @param string $PicUrlExpireTime Expiration time of the suspected image URL in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
