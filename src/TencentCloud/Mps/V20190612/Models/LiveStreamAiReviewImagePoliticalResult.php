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
 * @method float getConfidence() Obtain Sensitive score of the suspected segment.
 * @method void setConfidence(float $Confidence) Set Sensitive score of the suspected segment.
 * @method string getSuggestion() Obtain Result suggestion for suspected segment porn detection, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestion for suspected segment porn detection, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain Video sensitive result tag, value ranges from...to...
<li>politician: sensitive person.</li>
<li>violation_photo: violation icon.</li>
 * @method void setLabel(string $Label) Set Video sensitive result tag, value ranges from...to...
<li>politician: sensitive person.</li>
<li>violation_photo: violation icon.</li>
 * @method string getName() Obtain Sensitive person, violative icon name.
 * @method void setName(string $Name) Set Sensitive person, violative icon name.
 * @method array getAreaCoordSet() Obtain Area coordinates (pixel-level) where sensitive persons or violation icons appear. Format: [x1, y1, x2, y2], which indicates the coordinates of the top-left corner and the bottom-right corner.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Area coordinates (pixel-level) where sensitive persons or violation icons appear. Format: [x1, y1, x2, y2], which indicates the coordinates of the top-left corner and the bottom-right corner.
 * @method string getUrl() Obtain Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
 * @method void setUrl(string $Url) Set Suspected image URL (Images are not retained permanently upon arrival)
The image will be deleted after the PicUrlExpireTime time point.
 * @method string getPicUrlExpireTime() Obtain Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of the suspected image URL, using the ISO date format (https://www.tencentcloud.com/document/product/862/37710?from_cn_redirect=1#52).
 */
class LiveStreamAiReviewImagePoliticalResult extends AbstractModel
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
     * @var float Sensitive score of the suspected segment.
     */
    public $Confidence;

    /**
     * @var string Result suggestion for suspected segment porn detection, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string Video sensitive result tag, value ranges from...to...
<li>politician: sensitive person.</li>
<li>violation_photo: violation icon.</li>
     */
    public $Label;

    /**
     * @var string Sensitive person, violative icon name.
     */
    public $Name;

    /**
     * @var array Area coordinates (pixel-level) where sensitive persons or violation icons appear. Format: [x1, y1, x2, y2], which indicates the coordinates of the top-left corner and the bottom-right corner.
     */
    public $AreaCoordSet;

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
     * @param float $Confidence Sensitive score of the suspected segment.
     * @param string $Suggestion Result suggestion for suspected segment porn detection, permissible range:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label Video sensitive result tag, value ranges from...to...
<li>politician: sensitive person.</li>
<li>violation_photo: violation icon.</li>
     * @param string $Name Sensitive person, violative icon name.
     * @param array $AreaCoordSet Area coordinates (pixel-level) where sensitive persons or violation icons appear. Format: [x1, y1, x2, y2], which indicates the coordinates of the top-left corner and the bottom-right corner.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
