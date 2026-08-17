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
 * Intelligent highlight info
 *
 * @method string getHighlightPath() Obtain Intelligent highlight address.
 * @method void setHighlightPath(string $HighlightPath) Set Intelligent highlight address.
 * @method string getCovImgPath() Obtain Intelligent highlight cover address.
 * @method void setCovImgPath(string $CovImgPath) Set Intelligent highlight cover address.
 * @method float getConfidence() Obtain Reliability of the intelligent highlights, with a value range from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Reliability of the intelligent highlights, with a value range from 0 to 100.
 * @method float getDuration() Obtain Intelligent highlight duration.
 * @method void setDuration(float $Duration) Set Intelligent highlight duration.
 * @method array getSegmentSet() Obtain Intelligent highlight sub-clip list.
 * @method void setSegmentSet(array $SegmentSet) Set Intelligent highlight sub-clip list.
 * @method string getHighlightUrl() Obtain 
 * @method void setHighlightUrl(string $HighlightUrl) Set 
 * @method string getCovImgUrl() Obtain 
 * @method void setCovImgUrl(string $CovImgUrl) Set 
 */
class MediaAiAnalysisHighlightItem extends AbstractModel
{
    /**
     * @var string Intelligent highlight address.
     */
    public $HighlightPath;

    /**
     * @var string Intelligent highlight cover address.
     */
    public $CovImgPath;

    /**
     * @var float Reliability of the intelligent highlights, with a value range from 0 to 100.
     */
    public $Confidence;

    /**
     * @var float Intelligent highlight duration.
     */
    public $Duration;

    /**
     * @var array Intelligent highlight sub-clip list.
     */
    public $SegmentSet;

    /**
     * @var string 
     */
    public $HighlightUrl;

    /**
     * @var string 
     */
    public $CovImgUrl;

    /**
     * @param string $HighlightPath Intelligent highlight address.
     * @param string $CovImgPath Intelligent highlight cover address.
     * @param float $Confidence Reliability of the intelligent highlights, with a value range from 0 to 100.
     * @param float $Duration Intelligent highlight duration.
     * @param array $SegmentSet Intelligent highlight sub-clip list.
     * @param string $HighlightUrl 
     * @param string $CovImgUrl 
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
        if (array_key_exists("HighlightPath",$param) and $param["HighlightPath"] !== null) {
            $this->HighlightPath = $param["HighlightPath"];
        }

        if (array_key_exists("CovImgPath",$param) and $param["CovImgPath"] !== null) {
            $this->CovImgPath = $param["CovImgPath"];
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

        if (array_key_exists("HighlightUrl",$param) and $param["HighlightUrl"] !== null) {
            $this->HighlightUrl = $param["HighlightUrl"];
        }

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }
    }
}
