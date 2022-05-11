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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information about the sensitive segments detected.
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a suspected segment in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a suspected segment in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment in seconds.
 * @method float getConfidence() Obtain The confidence score for the detected sensitive segments.
 * @method void setConfidence(float $Confidence) Set The confidence score for the detected sensitive segments.
 * @method string getSuggestion() Obtain The suggestion for handling the sensitive segments. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set The suggestion for handling the sensitive segments. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getName() Obtain The name of a sensitive person or banned icon.
 * @method void setName(string $Name) Set The name of a sensitive person or banned icon.
 * @method string getLabel() Obtain The labels for the detected sensitive segments. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>violation_photo (banned icons)</li>
politician:
<li>nation_politician (state leader)</li>
<li>province_politician (provincial officials)</li>
<li>bureau_politician (bureau-level officials)</li>
<li>county_politician (county-level officials)</li>
<li>rural_politician (township-level officials)</li>
<li>sensitive_politician (sensitive people)</li>
<li>foreign_politician (state leaders of other countries)</li>
entertainment:
<li>sensitive_entertainment (sensitive people in the entertainment industry</li>
sport:
<li>sensitive_sport (sensitive sports celebrities)</li>
entrepreneur:
<li>sensitive_entrepreneur</li>
scholar:
<li>sensitive_scholar</li>
celebrity:
<li>sensitive_celebrity</li>
<li>historical_celebrity (sensitive historical figures)</li>
military:
<li>sensitive_military (sensitive people in military)</li>
 * @method void setLabel(string $Label) Set The labels for the detected sensitive segments. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>violation_photo (banned icons)</li>
politician:
<li>nation_politician (state leader)</li>
<li>province_politician (provincial officials)</li>
<li>bureau_politician (bureau-level officials)</li>
<li>county_politician (county-level officials)</li>
<li>rural_politician (township-level officials)</li>
<li>sensitive_politician (sensitive people)</li>
<li>foreign_politician (state leaders of other countries)</li>
entertainment:
<li>sensitive_entertainment (sensitive people in the entertainment industry</li>
sport:
<li>sensitive_sport (sensitive sports celebrities)</li>
entrepreneur:
<li>sensitive_entrepreneur</li>
scholar:
<li>sensitive_scholar</li>
celebrity:
<li>sensitive_celebrity</li>
<li>historical_celebrity (sensitive historical figures)</li>
military:
<li>sensitive_military (sensitive people in military)</li>
 * @method string getUrl() Obtain URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
 * @method void setUrl(string $Url) Set URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
 * @method array getAreaCoordSet() Obtain The pixel coordinates of the detected sensitive people or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set The pixel coordinates of the detected sensitive people or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
 * @method string getPicUrlExpireTime() Obtain Expiration time of a suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of a suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 */
class MediaContentReviewPoliticalSegmentItem extends AbstractModel
{
    /**
     * @var float Start time offset of a suspected segment in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a suspected segment in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float The confidence score for the detected sensitive segments.
     */
    public $Confidence;

    /**
     * @var string The suggestion for handling the sensitive segments. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string The name of a sensitive person or banned icon.
     */
    public $Name;

    /**
     * @var string The labels for the detected sensitive segments. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>violation_photo (banned icons)</li>
politician:
<li>nation_politician (state leader)</li>
<li>province_politician (provincial officials)</li>
<li>bureau_politician (bureau-level officials)</li>
<li>county_politician (county-level officials)</li>
<li>rural_politician (township-level officials)</li>
<li>sensitive_politician (sensitive people)</li>
<li>foreign_politician (state leaders of other countries)</li>
entertainment:
<li>sensitive_entertainment (sensitive people in the entertainment industry</li>
sport:
<li>sensitive_sport (sensitive sports celebrities)</li>
entrepreneur:
<li>sensitive_entrepreneur</li>
scholar:
<li>sensitive_scholar</li>
celebrity:
<li>sensitive_celebrity</li>
<li>historical_celebrity (sensitive historical figures)</li>
military:
<li>sensitive_military (sensitive people in military)</li>
     */
    public $Label;

    /**
     * @var string URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
     */
    public $Url;

    /**
     * @var array The pixel coordinates of the detected sensitive people or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
     */
    public $AreaCoordSet;

    /**
     * @var string Expiration time of a suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Start time offset of a suspected segment in seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment in seconds.
     * @param float $Confidence The confidence score for the detected sensitive segments.
     * @param string $Suggestion The suggestion for handling the sensitive segments. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Name The name of a sensitive person or banned icon.
     * @param string $Label The labels for the detected sensitive segments. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>violation_photo (banned icons)</li>
politician:
<li>nation_politician (state leader)</li>
<li>province_politician (provincial officials)</li>
<li>bureau_politician (bureau-level officials)</li>
<li>county_politician (county-level officials)</li>
<li>rural_politician (township-level officials)</li>
<li>sensitive_politician (sensitive people)</li>
<li>foreign_politician (state leaders of other countries)</li>
entertainment:
<li>sensitive_entertainment (sensitive people in the entertainment industry</li>
sport:
<li>sensitive_sport (sensitive sports celebrities)</li>
entrepreneur:
<li>sensitive_entrepreneur</li>
scholar:
<li>sensitive_scholar</li>
celebrity:
<li>sensitive_celebrity</li>
<li>historical_celebrity (sensitive historical figures)</li>
military:
<li>sensitive_military (sensitive people in military)</li>
     * @param string $Url URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
     * @param array $AreaCoordSet The pixel coordinates of the detected sensitive people or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
     * @param string $PicUrlExpireTime Expiration time of a suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
