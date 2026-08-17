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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content review suspected segment
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a suspected segment, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a suspected segment, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Suspected segment sensitivity score.
 * @method void setConfidence(float $Confidence) Set Suspected segment sensitivity score.
 * @method string getSuggestion() Obtain Suspected segment sensitive result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Suspected segment sensitive result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getName() Obtain Sensitive person, violative icon name.
 * @method void setName(string $Name) Set Sensitive person, violative icon name.
 * @method string getLabel() Obtain Suspected segment sensitive result Tag. The mapping between the LabelSet parameter in the content moderation template [visual sensitive task control parameter](https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: sensitive person.</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: sensitive entertainment figure.</li>
sport:
<li>Sensitive_sport: sensitive sports celebrity.</li>
entrepreneur:
<li>sensitive_entrepreneur: sensitive entrepreneur.</li>
scholar:
<li>sensitive_scholar: Sensitive educational scholars.</li>
celebrity:
<li>sensitive_celebrity: sensitive celebrity.</li>
<li>historical_celebrity: historical celebrity.</li>
military:
<li>sensitive_military: sensitive military figure.</li>
 * @method void setLabel(string $Label) Set Suspected segment sensitive result Tag. The mapping between the LabelSet parameter in the content moderation template [visual sensitive task control parameter](https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: sensitive person.</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: sensitive entertainment figure.</li>
sport:
<li>Sensitive_sport: sensitive sports celebrity.</li>
entrepreneur:
<li>sensitive_entrepreneur: sensitive entrepreneur.</li>
scholar:
<li>sensitive_scholar: Sensitive educational scholars.</li>
celebrity:
<li>sensitive_celebrity: sensitive celebrity.</li>
<li>historical_celebrity: historical celebrity.</li>
military:
<li>sensitive_military: sensitive military figure.</li>
 * @method string getUrl() Obtain Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
 * @method void setUrl(string $Url) Set Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
 * @method array getAreaCoordSet() Obtain Area coordinates of sensitive person and violation icon occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Area coordinates of sensitive person and violation icon occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
 * @method string getPicUrlExpireTime() Obtain Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class MediaContentReviewPoliticalSegmentItem extends AbstractModel
{
    /**
     * @var float Start time offset of a suspected segment, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a suspected segment, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float Suspected segment sensitivity score.
     */
    public $Confidence;

    /**
     * @var string Suspected segment sensitive result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Sensitive person, violative icon name.
     */
    public $Name;

    /**
     * @var string Suspected segment sensitive result Tag. The mapping between the LabelSet parameter in the content moderation template [visual sensitive task control parameter](https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: sensitive person.</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: sensitive entertainment figure.</li>
sport:
<li>Sensitive_sport: sensitive sports celebrity.</li>
entrepreneur:
<li>sensitive_entrepreneur: sensitive entrepreneur.</li>
scholar:
<li>sensitive_scholar: Sensitive educational scholars.</li>
celebrity:
<li>sensitive_celebrity: sensitive celebrity.</li>
<li>historical_celebrity: historical celebrity.</li>
military:
<li>sensitive_military: sensitive military figure.</li>
     */
    public $Label;

    /**
     * @var string Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
     */
    public $Url;

    /**
     * @var array Area coordinates of sensitive person and violation icon occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
     */
    public $AreaCoordSet;

    /**
     * @var string Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Start time offset of a suspected segment, in seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment, in seconds.
     * @param float $Confidence Suspected segment sensitivity score.
     * @param string $Suggestion Suspected segment sensitive result suggestion, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Name Sensitive person, violative icon name.
     * @param string $Label Suspected segment sensitive result Tag. The mapping between the LabelSet parameter in the content moderation template [visual sensitive task control parameter](https://www.tencentcloud.com/document/api/862/37615?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) and the parameter value range of this parameter:
violation_photo:
<li>violation_photo: violation icon.</li>
politician:
<li>nation_politician: State leaders;</li>
<li>province_politician: provincial and ministerial leaders;</li>
<li>bureau_politician: bureau-level official;</li>
<li>county_politician: county-level official;</li>
<li>rural_politician: township-level official;</li>
<li>sensitive_politician: sensitive person.</li>
<li>foreign_politician: state leaders of other countries.</li>
entertainment:
<li>sensitive_entertainment: sensitive entertainment figure.</li>
sport:
<li>Sensitive_sport: sensitive sports celebrity.</li>
entrepreneur:
<li>sensitive_entrepreneur: sensitive entrepreneur.</li>
scholar:
<li>sensitive_scholar: Sensitive educational scholars.</li>
celebrity:
<li>sensitive_celebrity: sensitive celebrity.</li>
<li>historical_celebrity: historical celebrity.</li>
military:
<li>sensitive_military: sensitive military figure.</li>
     * @param string $Url Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
     * @param array $AreaCoordSet Area coordinates of sensitive person and violation icon occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and coordinate of the bottom-right corner.
     * @param string $PicUrlExpireTime Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
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
