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
 * Suspected segments involving inappropriate information in audio/video moderation
 *
 * @method float getStartTimeOffset() Obtain Offset time of the start of the suspected segment. Unit: seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Offset time of the start of the suspected segment. Unit: seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Score of the suspected segment.
 * @method void setConfidence(float $Confidence) Set Score of the suspected segment.
 * @method string getSuggestion() Obtain Result suggestions for suspected segments involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for suspected segments involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getName() Obtain Involves inappropriate information and violative icon names.
 * @method void setName(string $Name) Set Involves inappropriate information and violative icon names.
 * @method string getLabel() Obtain Result tags of suspected segments involving inappropriate information. Mapping between the LabelSet parameter in the [task control parameter for frames involving inappropriate information](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: relevant people involved in rule violations;</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: banned people in the entertainment industry.</li>
sport:
<li>sensitive_sport: sports celebrity involved in rule violations.</li>
entrepreneur:
<li>sensitive_entrepreneur: commercial figure involved in rule violation.</li>
scholar:
<li>sensitive_scholar: Educational scholar in rule violation.</li>
celebrity:
<li>sensitive_celebrity: rule-violating celebrity;</li>
<li>historical_celebrity: Historical celebrity.</li>
military:
<li>sensitive_military: relevant people involved in rule violations.</li>
 * @method void setLabel(string $Label) Set Result tags of suspected segments involving inappropriate information. Mapping between the LabelSet parameter in the [task control parameter for frames involving inappropriate information](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: relevant people involved in rule violations;</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: banned people in the entertainment industry.</li>
sport:
<li>sensitive_sport: sports celebrity involved in rule violations.</li>
entrepreneur:
<li>sensitive_entrepreneur: commercial figure involved in rule violation.</li>
scholar:
<li>sensitive_scholar: Educational scholar in rule violation.</li>
celebrity:
<li>sensitive_celebrity: rule-violating celebrity;</li>
<li>historical_celebrity: Historical celebrity.</li>
military:
<li>sensitive_military: relevant people involved in rule violations.</li>
 * @method string getUrl() Obtain Suspected image URL (images are not retained permanently and will be deleted upon reaching
Images will be deleted after the PicUrlExpireTime time point).
 * @method void setUrl(string $Url) Set Suspected image URL (images are not retained permanently and will be deleted upon reaching
Images will be deleted after the PicUrlExpireTime time point).
 * @method array getAreaCoordSet() Obtain Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
 * @method integer getPicUrlExpireTimeStamp() Obtain Deprecated. Please use `PicUrlExpireTime`.
 * @method void setPicUrlExpireTimeStamp(integer $PicUrlExpireTimeStamp) Set Deprecated. Please use `PicUrlExpireTime`.
 * @method string getPicUrlExpireTime() Obtain URL expiration time of the suspected image in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set URL expiration time of the suspected image in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class MediaContentReviewPoliticalSegmentItem extends AbstractModel
{
    /**
     * @var float Offset time of the start of the suspected segment. Unit: seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a suspected segment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float Score of the suspected segment.
     */
    public $Confidence;

    /**
     * @var string Result suggestions for suspected segments involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Involves inappropriate information and violative icon names.
     */
    public $Name;

    /**
     * @var string Result tags of suspected segments involving inappropriate information. Mapping between the LabelSet parameter in the [task control parameter for frames involving inappropriate information](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: relevant people involved in rule violations;</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: banned people in the entertainment industry.</li>
sport:
<li>sensitive_sport: sports celebrity involved in rule violations.</li>
entrepreneur:
<li>sensitive_entrepreneur: commercial figure involved in rule violation.</li>
scholar:
<li>sensitive_scholar: Educational scholar in rule violation.</li>
celebrity:
<li>sensitive_celebrity: rule-violating celebrity;</li>
<li>historical_celebrity: Historical celebrity.</li>
military:
<li>sensitive_military: relevant people involved in rule violations.</li>
     */
    public $Label;

    /**
     * @var string Suspected image URL (images are not retained permanently and will be deleted upon reaching
Images will be deleted after the PicUrlExpireTime time point).
     */
    public $Url;

    /**
     * @var array Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
     */
    public $AreaCoordSet;

    /**
     * @var integer Deprecated. Please use `PicUrlExpireTime`.
     * @deprecated
     */
    public $PicUrlExpireTimeStamp;

    /**
     * @var string URL expiration time of the suspected image in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Offset time of the start of the suspected segment. Unit: seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment, in seconds.
     * @param float $Confidence Score of the suspected segment.
     * @param string $Suggestion Result suggestions for suspected segments involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Name Involves inappropriate information and violative icon names.
     * @param string $Label Result tags of suspected segments involving inappropriate information. Mapping between the LabelSet parameter in the [task control parameter for frames involving inappropriate information](https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: relevant people involved in rule violations;</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: banned people in the entertainment industry.</li>
sport:
<li>sensitive_sport: sports celebrity involved in rule violations.</li>
entrepreneur:
<li>sensitive_entrepreneur: commercial figure involved in rule violation.</li>
scholar:
<li>sensitive_scholar: Educational scholar in rule violation.</li>
celebrity:
<li>sensitive_celebrity: rule-violating celebrity;</li>
<li>historical_celebrity: Historical celebrity.</li>
military:
<li>sensitive_military: relevant people involved in rule violations.</li>
     * @param string $Url Suspected image URL (images are not retained permanently and will be deleted upon reaching
Images will be deleted after the PicUrlExpireTime time point).
     * @param array $AreaCoordSet Area coordinates (pixel level) where inappropriate information or violation icons appear, [x1, y1, x2, y2], i.e. coordinates of the top-left corner and bottom-right corner.
     * @param integer $PicUrlExpireTimeStamp Deprecated. Please use `PicUrlExpireTime`.
     * @param string $PicUrlExpireTime URL expiration time of the suspected image in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
