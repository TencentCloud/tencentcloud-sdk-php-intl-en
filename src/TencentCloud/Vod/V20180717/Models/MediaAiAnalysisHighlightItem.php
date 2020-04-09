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
 * Information of an intelligently generated highlight
 *
 * @method string getHighlightUrl() Obtain Address of an intelligently generated highlight.
 * @method void setHighlightUrl(string $HighlightUrl) Set Address of an intelligently generated highlight.
 * @method string getCovImgUrl() Obtain Address of an intelligently generated highlight cover.
 * @method void setCovImgUrl(string $CovImgUrl) Set Address of an intelligently generated highlight cover.
 * @method float getConfidence() Obtain Confidence of an intelligently generated highlight between 0 and 100.
 * @method void setConfidence(float $Confidence) Set Confidence of an intelligently generated highlight between 0 and 100.
 * @method float getDuration() Obtain Duration of an intelligently generated highlight.
 * @method void setDuration(float $Duration) Set Duration of an intelligently generated highlight.
 * @method array getSegmentSet() Obtain List of intelligently generated highlight subsegments, which together form a highlight.
 * @method void setSegmentSet(array $SegmentSet) Set List of intelligently generated highlight subsegments, which together form a highlight.
 */
class MediaAiAnalysisHighlightItem extends AbstractModel
{
    /**
     * @var string Address of an intelligently generated highlight.
     */
    public $HighlightUrl;

    /**
     * @var string Address of an intelligently generated highlight cover.
     */
    public $CovImgUrl;

    /**
     * @var float Confidence of an intelligently generated highlight between 0 and 100.
     */
    public $Confidence;

    /**
     * @var float Duration of an intelligently generated highlight.
     */
    public $Duration;

    /**
     * @var array List of intelligently generated highlight subsegments, which together form a highlight.
     */
    public $SegmentSet;

    /**
     * @param string $HighlightUrl Address of an intelligently generated highlight.
     * @param string $CovImgUrl Address of an intelligently generated highlight cover.
     * @param float $Confidence Confidence of an intelligently generated highlight between 0 and 100.
     * @param float $Duration Duration of an intelligently generated highlight.
     * @param array $SegmentSet List of intelligently generated highlight subsegments, which together form a highlight.
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
