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
 * Video segment containing detected politically sensitive content
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a suspected segment in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a suspected segment in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment in seconds.
 * @method float getConfidence() Obtain Confidence score for the detected politically sensitive content
 * @method void setConfidence(float $Confidence) Set Confidence score for the detected politically sensitive content
 * @method string getSuggestion() Obtain Processing suggestion for the detected politically sensitive content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Processing suggestion for the detected politically sensitive content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getName() Obtain Name of the politically sensitive content or banned images
 * @method void setName(string $Name) Set Name of the politically sensitive content or banned images
 * @method string getLabel() Obtain Labels for the detected politically sensitive content. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>`violation_photo`: banned images</li>
politician:
<li>`nation_politician`: state leader of China</li>
<li>`province_politician`: provincial officials</li>
<li>`bureau_politician`: bureau-level officials</li>
<li>`county_politician`: county-level officials</li>
<li>`rural_politician`: township-level officials</li>
<li>`sensitive_politician`: politically sensitive people</li>
<li>`foreign_politician`: state leaders of other countries</li>
entertainment:
<li>`sensitive_entertainment`: banned people in the entertainment industry</li>
sport:
<li>`sensitive_sport`: banned sports celebrities</li>
entrepreneur:
<li>`sensitive_entrepreneur`: banned businesspeople</li>
scholar:
<li>sensitive_scholar: banned scholars</li>
celebrity:
<li>sensitive_celebrity: banned celebrities</li>
<li>historical_celebrity: banned historical figures</li>
military:
<li>sensitive_military: banned people in military</li>
 * @method void setLabel(string $Label) Set Labels for the detected politically sensitive content. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>`violation_photo`: banned images</li>
politician:
<li>`nation_politician`: state leader of China</li>
<li>`province_politician`: provincial officials</li>
<li>`bureau_politician`: bureau-level officials</li>
<li>`county_politician`: county-level officials</li>
<li>`rural_politician`: township-level officials</li>
<li>`sensitive_politician`: politically sensitive people</li>
<li>`foreign_politician`: state leaders of other countries</li>
entertainment:
<li>`sensitive_entertainment`: banned people in the entertainment industry</li>
sport:
<li>`sensitive_sport`: banned sports celebrities</li>
entrepreneur:
<li>`sensitive_entrepreneur`: banned businesspeople</li>
scholar:
<li>sensitive_scholar: banned scholars</li>
celebrity:
<li>sensitive_celebrity: banned celebrities</li>
<li>historical_celebrity: banned historical figures</li>
military:
<li>sensitive_military: banned people in military</li>
 * @method string getUrl() Obtain URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
 * @method void setUrl(string $Url) Set URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
 * @method array getAreaCoordSet() Obtain Coordinates (pixel) of the detected politically sensitive content or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Coordinates (pixel) of the detected politically sensitive content or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
 * @method integer getPicUrlExpireTimeStamp() Obtain This field has been disused. Please use `PicUrlExpireTime`.
 * @method void setPicUrlExpireTimeStamp(integer $PicUrlExpireTimeStamp) Set This field has been disused. Please use `PicUrlExpireTime`.
 * @method string getPicUrlExpireTime() Obtain Expiration time of suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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
     * @var float Confidence score for the detected politically sensitive content
     */
    public $Confidence;

    /**
     * @var string Processing suggestion for the detected politically sensitive content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string Name of the politically sensitive content or banned images
     */
    public $Name;

    /**
     * @var string Labels for the detected politically sensitive content. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>`violation_photo`: banned images</li>
politician:
<li>`nation_politician`: state leader of China</li>
<li>`province_politician`: provincial officials</li>
<li>`bureau_politician`: bureau-level officials</li>
<li>`county_politician`: county-level officials</li>
<li>`rural_politician`: township-level officials</li>
<li>`sensitive_politician`: politically sensitive people</li>
<li>`foreign_politician`: state leaders of other countries</li>
entertainment:
<li>`sensitive_entertainment`: banned people in the entertainment industry</li>
sport:
<li>`sensitive_sport`: banned sports celebrities</li>
entrepreneur:
<li>`sensitive_entrepreneur`: banned businesspeople</li>
scholar:
<li>sensitive_scholar: banned scholars</li>
celebrity:
<li>sensitive_celebrity: banned celebrities</li>
<li>historical_celebrity: banned historical figures</li>
military:
<li>sensitive_military: banned people in military</li>
     */
    public $Label;

    /**
     * @var string URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
     */
    public $Url;

    /**
     * @var array Coordinates (pixel) of the detected politically sensitive content or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
     */
    public $AreaCoordSet;

    /**
     * @var integer This field has been disused. Please use `PicUrlExpireTime`.
     */
    public $PicUrlExpireTimeStamp;

    /**
     * @var string Expiration time of suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Start time offset of a suspected segment in seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment in seconds.
     * @param float $Confidence Confidence score for the detected politically sensitive content
     * @param string $Suggestion Processing suggestion for the detected politically sensitive content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Name Name of the politically sensitive content or banned images
     * @param string $Label Labels for the detected politically sensitive content. The relationship between the values of this parameter and those of the `LabelSet` parameter in [PoliticalImgReviewTemplateInfo](https://intl.cloud.tencent.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) is as follows:
violation_photo:
<li>`violation_photo`: banned images</li>
politician:
<li>`nation_politician`: state leader of China</li>
<li>`province_politician`: provincial officials</li>
<li>`bureau_politician`: bureau-level officials</li>
<li>`county_politician`: county-level officials</li>
<li>`rural_politician`: township-level officials</li>
<li>`sensitive_politician`: politically sensitive people</li>
<li>`foreign_politician`: state leaders of other countries</li>
entertainment:
<li>`sensitive_entertainment`: banned people in the entertainment industry</li>
sport:
<li>`sensitive_sport`: banned sports celebrities</li>
entrepreneur:
<li>`sensitive_entrepreneur`: banned businesspeople</li>
scholar:
<li>sensitive_scholar: banned scholars</li>
celebrity:
<li>sensitive_celebrity: banned celebrities</li>
<li>historical_celebrity: banned historical figures</li>
military:
<li>sensitive_military: banned people in military</li>
     * @param string $Url URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
     * @param array $AreaCoordSet Coordinates (pixel) of the detected politically sensitive content or banned icons. The format is [x1, y1, x2, y2], which indicates the coordinates of the top-left and bottom-right corners.
     * @param integer $PicUrlExpireTimeStamp This field has been disused. Please use `PicUrlExpireTime`.
     * @param string $PicUrlExpireTime Expiration time of suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("PicUrlExpireTimeStamp",$param) and $param["PicUrlExpireTimeStamp"] !== null) {
            $this->PicUrlExpireTimeStamp = $param["PicUrlExpireTimeStamp"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
