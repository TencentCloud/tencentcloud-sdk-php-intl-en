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
 * @method string getHighlightUrl() Obtain 
 * @method void setHighlightUrl(string $HighlightUrl) Set 
 * @method string getCovImgUrl() Obtain 
 * @method void setCovImgUrl(string $CovImgUrl) Set 
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 * @method float getDuration() Obtain 
 * @method void setDuration(float $Duration) Set 
 * @method array getSegmentSet() Obtain 
 * @method void setSegmentSet(array $SegmentSet) Set 
 */
class MediaAiAnalysisHighlightItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $HighlightUrl;

    /**
     * @var string 
     */
    public $CovImgUrl;

    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @var float 
     */
    public $Duration;

    /**
     * @var array 
     */
    public $SegmentSet;

    /**
     * @param string $HighlightUrl 
     * @param string $CovImgUrl 
     * @param float $Confidence 
     * @param float $Duration 
     * @param array $SegmentSet 
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
        if (array_key_exists("HighlightUrl",$param) and $param["HighlightUrl"] !== null) {
            $this->HighlightUrl = $param["HighlightUrl"];
        }

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new HighlightSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
