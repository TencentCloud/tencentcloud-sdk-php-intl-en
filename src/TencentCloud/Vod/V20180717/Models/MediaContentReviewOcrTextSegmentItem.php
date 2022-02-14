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
 * Video segment containing OCR-detected suspicious content
 *
 * @method float getStartTimeOffset() Obtain Start time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getEndTimeOffset() Obtain End time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getConfidence() Obtain Confidence of suspected segment.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConfidence(float $Confidence) Set Confidence of suspected segment.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain Processing suggestion for the detected suspicious content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Processing suggestion for the detected suspicious content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method array getKeywordSet() Obtain List of suspected keywords.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKeywordSet(array $KeywordSet) Set List of suspected keywords.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAreaCoordSet() Obtain Zone coordinates (at the pixel level) of suspected text: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Zone coordinates (at the pixel level) of suspected text: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUrl() Obtain URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
 * @method void setUrl(string $Url) Set URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
 * @method string getPicUrlExpireTime() Obtain Expiration time of suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class MediaContentReviewOcrTextSegmentItem extends AbstractModel
{
    /**
     * @var float Start time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndTimeOffset;

    /**
     * @var float Confidence of suspected segment.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Confidence;

    /**
     * @var string Processing suggestion for the detected suspicious content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var array List of suspected keywords.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $KeywordSet;

    /**
     * @var array Zone coordinates (at the pixel level) of suspected text: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AreaCoordSet;

    /**
     * @var string URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
     */
    public $Url;

    /**
     * @var string Expiration time of suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Start time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $EndTimeOffset End time offset of suspected segment in seconds.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $Confidence Confidence of suspected segment.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion Processing suggestion for the detected suspicious content. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param array $KeywordSet List of suspected keywords.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AreaCoordSet Zone coordinates (at the pixel level) of suspected text: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Url URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
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
