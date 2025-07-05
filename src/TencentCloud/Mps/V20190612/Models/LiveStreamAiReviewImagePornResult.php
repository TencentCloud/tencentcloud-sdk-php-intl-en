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
 * Result of porn information detection in image in AI-based live stream content audit
 *
 * @method float getStartPtsTime() Obtain Start PTS time of a suspected segment in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of a suspected segment in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of a suspected segment in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of a suspected segment in seconds.
 * @method float getConfidence() Obtain Score of a suspected porn segment.
 * @method void setConfidence(float $Confidence) Set Score of a suspected porn segment.
 * @method string getSuggestion() Obtain Suggestion for porn information detection of a suspected segment. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Suggestion for porn information detection of a suspected segment. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
 * @method void setLabel(string $Label) Set Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
 * @method string getUrl() Obtain URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
 * @method void setUrl(string $Url) Set URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
 * @method string getPicUrlExpireTime() Obtain Expiration time of a suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of a suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
 */
class LiveStreamAiReviewImagePornResult extends AbstractModel
{
    /**
     * @var float Start PTS time of a suspected segment in seconds.
     */
    public $StartPtsTime;

    /**
     * @var float End PTS time of a suspected segment in seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Score of a suspected porn segment.
     */
    public $Confidence;

    /**
     * @var string Suggestion for porn information detection of a suspected segment. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
     */
    public $Label;

    /**
     * @var string URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
     */
    public $Url;

    /**
     * @var string Expiration time of a suspected image URL in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartPtsTime Start PTS time of a suspected segment in seconds.
     * @param float $EndPtsTime End PTS time of a suspected segment in seconds.
     * @param float $Confidence Score of a suspected porn segment.
     * @param string $Suggestion Suggestion for porn information detection of a suspected segment. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label Tag of the detected porn information in video. Valid values:
<li>porn: Porn.</li>
<li>sexy: Sexiness.</li>
<li>vulgar: Vulgarity.</li>
<li>intimacy: Intimacy.</li>
     * @param string $Url URL of a suspected image (which will not be permanently stored
and will be deleted after `PicUrlExpireTime`).
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
        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
