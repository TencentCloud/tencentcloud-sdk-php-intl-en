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
 * Live stream AI content review image sensitive result
 *
 * @method float getStartPtsTime() Obtain Start PTS time of a suspected segment, in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of a suspected segment, in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of a suspected segment, in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of a suspected segment, in seconds.
 * @method float getConfidence() Obtain Suspected segment sensitivity score.
 * @method void setConfidence(float $Confidence) Set Suspected segment sensitivity score.
 * @method string getSuggestion() Obtain Suspected segment sensitive result suggestion, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Suspected segment sensitive result suggestion, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain Video sensitive content result tag, value ranges from...to...
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
 * @method void setLabel(string $Label) Set Video sensitive content result tag, value ranges from...to...
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
 * @method string getUrl() Obtain Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
 * @method void setUrl(string $Url) Set Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
 * @method string getPicUrlExpireTime() Obtain Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class LiveStreamAiReviewImageTerrorismResult extends AbstractModel
{
    /**
     * @var float Start PTS time of a suspected segment, in seconds.
     */
    public $StartPtsTime;

    /**
     * @var float End PTS time of a suspected segment, in seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Suspected segment sensitivity score.
     */
    public $Confidence;

    /**
     * @var string Suspected segment sensitive result suggestion, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string Video sensitive content result tag, value ranges from...to...
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
     */
    public $Label;

    /**
     * @var string Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
     */
    public $Url;

    /**
     * @var string Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartPtsTime Start PTS time of a suspected segment, in seconds.
     * @param float $EndPtsTime End PTS time of a suspected segment, in seconds.
     * @param float $Confidence Suspected segment sensitivity score.
     * @param string $Suggestion Suspected segment sensitive result suggestion, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label Video sensitive content result tag, value ranges from...to...
<li>guns: weapons and firearms.</li>
<li>crowd: crowd gathering.</li>
<li>police: police force.</li>
<li>bloody: graphic violence.</li>
<li>banners: sensitive flags.</li>
<li>militant: militant.</li>
<li>explosion: explosions and fires.</li>
<li>terrorists: sensitive persons.</li>
     * @param string $Url Suspected image URL (Images are not retained permanently upon arrival)
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
