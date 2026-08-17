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
 * Content review Ocr text audit suspected segment
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a suspected segment, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a suspected segment, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Confidence degree of the suspected segment.
 * @method void setConfidence(float $Confidence) Set Confidence degree of the suspected segment.
 * @method string getSuggestion() Obtain Result Suggestions for suspected segment review, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result Suggestions for suspected segment review, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method array getKeywordSet() Obtain Suspicious keyword list.
 * @method void setKeywordSet(array $KeywordSet) Set Suspicious keyword list.
 * @method array getAreaCoordSet() Obtain Area coordinates of suspected text occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and bottom-right corner.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Area coordinates of suspected text occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and bottom-right corner.
 * @method string getUrl() Obtain Suspected image URL (Images are not retained permanently, reaching
The image will be deleted after the PicUrlExpireTime time point.
 * @method void setUrl(string $Url) Set Suspected image URL (Images are not retained permanently, reaching
The image will be deleted after the PicUrlExpireTime time point.
 * @method string getPicUrlExpireTime() Obtain Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class MediaContentReviewOcrTextSegmentItem extends AbstractModel
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
     * @var float Confidence degree of the suspected segment.
     */
    public $Confidence;

    /**
     * @var string Result Suggestions for suspected segment review, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var array Suspicious keyword list.
     */
    public $KeywordSet;

    /**
     * @var array Area coordinates of suspected text occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and bottom-right corner.
     */
    public $AreaCoordSet;

    /**
     * @var string Suspected image URL (Images are not retained permanently, reaching
The image will be deleted after the PicUrlExpireTime time point.
     */
    public $Url;

    /**
     * @var string Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Start time offset of a suspected segment, in seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment, in seconds.
     * @param float $Confidence Confidence degree of the suspected segment.
     * @param string $Suggestion Result Suggestions for suspected segment review, value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param array $KeywordSet Suspicious keyword list.
     * @param array $AreaCoordSet Area coordinates of suspected text occurrence (pixel-level), [x1, y1, x2, y2], i.e., coordinates of the top-left corner and bottom-right corner.
     * @param string $Url Suspected image URL (Images are not retained permanently, reaching
The image will be deleted after the PicUrlExpireTime time point.
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

        if (array_key_exists("KeywordSet",$param) and $param["KeywordSet"] !== null) {
            $this->KeywordSet = $param["KeywordSet"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
