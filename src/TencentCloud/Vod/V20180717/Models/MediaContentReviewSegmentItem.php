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
 * 
 *
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 * @method string getLabel() Obtain 
 * @method void setLabel(string $Label) Set 
 * @method string getSuggestion() Obtain 
 * @method void setSuggestion(string $Suggestion) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method integer getPicUrlExpireTimeStamp() Obtain 
 * @method void setPicUrlExpireTimeStamp(integer $PicUrlExpireTimeStamp) Set 
 * @method string getPicUrlExpireTime() Obtain 
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set 
 */
class MediaContentReviewSegmentItem extends AbstractModel
{
    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @var string 
     */
    public $Label;

    /**
     * @var string 
     */
    public $Suggestion;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @var integer 
     * @deprecated
     */
    public $PicUrlExpireTimeStamp;

    /**
     * @var string 
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param float $Confidence 
     * @param string $Label 
     * @param string $Suggestion 
     * @param string $Url 
     * @param integer $PicUrlExpireTimeStamp 
     * @param string $PicUrlExpireTime 
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
