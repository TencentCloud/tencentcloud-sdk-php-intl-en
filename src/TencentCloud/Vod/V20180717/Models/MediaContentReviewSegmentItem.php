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
 * Moderated segments involving offensive or unsafe content.
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a suspected segment, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a suspected segment, in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Score of offensive information involved in suspected clips.
 * @method void setConfidence(float $Confidence) Set Score of offensive information involved in suspected clips.
 * @method string getLabel() Obtain Tag of the result that the suspected segment involves offensive content.
 * @method void setLabel(string $Label) Set Tag of the result that the suspected segment involves offensive content.
 * @method string getSuggestion() Obtain Result suggestions for identifying offensive content in suspected segments. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for identifying offensive content in suspected segments. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getUrl() Obtain Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
 * @method void setUrl(string $Url) Set Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
 * @method integer getPicUrlExpireTimeStamp() Obtain Deprecated. Please use PicUrlExpireTime.
 * @method void setPicUrlExpireTimeStamp(integer $PicUrlExpireTimeStamp) Set Deprecated. Please use PicUrlExpireTime.
 * @method string getPicUrlExpireTime() Obtain Expiration time of the suspected image URL in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of the suspected image URL in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class MediaContentReviewSegmentItem extends AbstractModel
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
     * @var float Score of offensive information involved in suspected clips.
     */
    public $Confidence;

    /**
     * @var string Tag of the result that the suspected segment involves offensive content.
     */
    public $Label;

    /**
     * @var string Result suggestions for identifying offensive content in suspected segments. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
     */
    public $Url;

    /**
     * @var integer Deprecated. Please use PicUrlExpireTime.
     * @deprecated
     */
    public $PicUrlExpireTimeStamp;

    /**
     * @var string Expiration time of the suspected image URL in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Start time offset of a suspected segment, in seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment, in seconds.
     * @param float $Confidence Score of offensive information involved in suspected clips.
     * @param string $Label Tag of the result that the suspected segment involves offensive content.
     * @param string $Suggestion Result suggestions for identifying offensive content in suspected segments. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Url Suspected image URL (images are not retained permanently and will reach
Images will be deleted after the PicUrlExpireTime time point).
     * @param integer $PicUrlExpireTimeStamp Deprecated. Please use PicUrlExpireTime.
     * @param string $PicUrlExpireTime Expiration time of the suspected image URL in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PicUrlExpireTimeStamp",$param) and $param["PicUrlExpireTimeStamp"] !== null) {
            $this->PicUrlExpireTimeStamp = $param["PicUrlExpireTimeStamp"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
