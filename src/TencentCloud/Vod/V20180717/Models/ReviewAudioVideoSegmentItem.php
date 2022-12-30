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
 * The suspicious segment detected.
 *
 * @method float getStartTimeOffset() Obtain The start time offset (seconds) of the segment.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set The start time offset (seconds) of the segment.
 * @method float getEndTimeOffset() Obtain The end time offset (seconds) of the segment.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set The end time offset (seconds) of the segment.
 * @method float getConfidence() Obtain The confidence score of the segment.
 * @method void setConfidence(float $Confidence) Set The confidence score of the segment.
 * @method string getSuggestion() Obtain The processing suggestion for the segment. Valid values:
<li>review: The content may be non-compliant. Please review it.</li>
<li>block: The content is non-compliant. We recommend you block it.</li>
 * @method void setSuggestion(string $Suggestion) Set The processing suggestion for the segment. Valid values:
<li>review: The content may be non-compliant. Please review it.</li>
<li>block: The content is non-compliant. We recommend you block it.</li>
 * @method string getLabel() Obtain The most likely label for the segment. Valid values:
<li>Porn</li>
<li>Terrorism</li>
 * @method void setLabel(string $Label) Set The most likely label for the segment. Valid values:
<li>Porn</li>
<li>Terrorism</li>
 * @method string getSubLabel() Obtain The sublabel for the segment. This parameter is valid only if `Form` is `Image` or `Voice`.
Valid values when `Form` is `Image` and `Label` is `Porn`:
<li>porn</li>
<li>vulgar</li>

Valid values when `Form` is `Image` and `Label` is `Terrorism`:
<li>guns</li>
<li>bloody</li>
<li>banners</li>
<li>scenario (terrorist scenes)</li>
<li>explosion</li>

Valid values when `Form` is `Voice` and `Label` is `Porn`:
<li>moan</li>
 * @method void setSubLabel(string $SubLabel) Set The sublabel for the segment. This parameter is valid only if `Form` is `Image` or `Voice`.
Valid values when `Form` is `Image` and `Label` is `Porn`:
<li>porn</li>
<li>vulgar</li>

Valid values when `Form` is `Image` and `Label` is `Terrorism`:
<li>guns</li>
<li>bloody</li>
<li>banners</li>
<li>scenario (terrorist scenes)</li>
<li>explosion</li>

Valid values when `Form` is `Voice` and `Label` is `Porn`:
<li>moan</li>
 * @method string getForm() Obtain The format of the suspicious segment detected. Valid values:
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
 * @method void setForm(string $Form) Set The format of the suspicious segment detected. Valid values:
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
 * @method array getAreaCoordSet() Obtain The pixel coordinates ([x1, y1, x2, y2]) of the top-left corner and bottom-right corner of the suspicious text. This parameter is valid only if `Form` is `OCR`.
<font color=red>Note</font>: This parameter is not supported currently.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set The pixel coordinates ([x1, y1, x2, y2]) of the top-left corner and bottom-right corner of the suspicious text. This parameter is valid only if `Form` is `OCR`.
<font color=red>Note</font>: This parameter is not supported currently.
 * @method string getText() Obtain The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR` or `ASR`.
 * @method void setText(string $Text) Set The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR` or `ASR`.
 * @method array getKeywordSet() Obtain The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR` or `ASR`.
 * @method void setKeywordSet(array $KeywordSet) Set The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR` or `ASR`.
 * @method string getUrl() Obtain The URL of a suspected image (which will be deleted
 after `PicUrlExpireTime`).
 * @method void setUrl(string $Url) Set The URL of a suspected image (which will be deleted
 after `PicUrlExpireTime`).
 * @method string getPicUrlExpireTime() Obtain The expiration time of the suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set The expiration time of the suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewAudioVideoSegmentItem extends AbstractModel
{
    /**
     * @var float The start time offset (seconds) of the segment.
     */
    public $StartTimeOffset;

    /**
     * @var float The end time offset (seconds) of the segment.
     */
    public $EndTimeOffset;

    /**
     * @var float The confidence score of the segment.
     */
    public $Confidence;

    /**
     * @var string The processing suggestion for the segment. Valid values:
<li>review: The content may be non-compliant. Please review it.</li>
<li>block: The content is non-compliant. We recommend you block it.</li>
     */
    public $Suggestion;

    /**
     * @var string The most likely label for the segment. Valid values:
<li>Porn</li>
<li>Terrorism</li>
     */
    public $Label;

    /**
     * @var string The sublabel for the segment. This parameter is valid only if `Form` is `Image` or `Voice`.
Valid values when `Form` is `Image` and `Label` is `Porn`:
<li>porn</li>
<li>vulgar</li>

Valid values when `Form` is `Image` and `Label` is `Terrorism`:
<li>guns</li>
<li>bloody</li>
<li>banners</li>
<li>scenario (terrorist scenes)</li>
<li>explosion</li>

Valid values when `Form` is `Voice` and `Label` is `Porn`:
<li>moan</li>
     */
    public $SubLabel;

    /**
     * @var string The format of the suspicious segment detected. Valid values:
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
     */
    public $Form;

    /**
     * @var array The pixel coordinates ([x1, y1, x2, y2]) of the top-left corner and bottom-right corner of the suspicious text. This parameter is valid only if `Form` is `OCR`.
<font color=red>Note</font>: This parameter is not supported currently.
     */
    public $AreaCoordSet;

    /**
     * @var string The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR` or `ASR`.
     */
    public $Text;

    /**
     * @var array The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR` or `ASR`.
     */
    public $KeywordSet;

    /**
     * @var string The URL of a suspected image (which will be deleted
 after `PicUrlExpireTime`).
     */
    public $Url;

    /**
     * @var string The expiration time of the suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset The start time offset (seconds) of the segment.
     * @param float $EndTimeOffset The end time offset (seconds) of the segment.
     * @param float $Confidence The confidence score of the segment.
     * @param string $Suggestion The processing suggestion for the segment. Valid values:
<li>review: The content may be non-compliant. Please review it.</li>
<li>block: The content is non-compliant. We recommend you block it.</li>
     * @param string $Label The most likely label for the segment. Valid values:
<li>Porn</li>
<li>Terrorism</li>
     * @param string $SubLabel The sublabel for the segment. This parameter is valid only if `Form` is `Image` or `Voice`.
Valid values when `Form` is `Image` and `Label` is `Porn`:
<li>porn</li>
<li>vulgar</li>

Valid values when `Form` is `Image` and `Label` is `Terrorism`:
<li>guns</li>
<li>bloody</li>
<li>banners</li>
<li>scenario (terrorist scenes)</li>
<li>explosion</li>

Valid values when `Form` is `Voice` and `Label` is `Porn`:
<li>moan</li>
     * @param string $Form The format of the suspicious segment detected. Valid values:
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
     * @param array $AreaCoordSet The pixel coordinates ([x1, y1, x2, y2]) of the top-left corner and bottom-right corner of the suspicious text. This parameter is valid only if `Form` is `OCR`.
<font color=red>Note</font>: This parameter is not supported currently.
     * @param string $Text The content of the suspicious text detected. This parameter is valid only if `Form` is `OCR` or `ASR`.
     * @param array $KeywordSet The keywords that match the suspicious text. This parameter is valid only if `Form` is `OCR` or `ASR`.
     * @param string $Url The URL of a suspected image (which will be deleted
 after `PicUrlExpireTime`).
     * @param string $PicUrlExpireTime The expiration time of the suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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
