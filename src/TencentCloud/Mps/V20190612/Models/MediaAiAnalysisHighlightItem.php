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
 * The information of intelligently generated highlight segments.
 *
 * @method string getHighlightPath() Obtain The URL of the highlight segments.
 * @method void setHighlightPath(string $HighlightPath) Set The URL of the highlight segments.
 * @method string getCovImgPath() Obtain The URL of the thumbnail.
 * @method void setCovImgPath(string $CovImgPath) Set The URL of the thumbnail.
 * @method float getConfidence() Obtain The confidence score. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set The confidence score. Value range: 0-100.
 * @method float getDuration() Obtain The duration of the highlights.
 * @method void setDuration(float $Duration) Set The duration of the highlights.
 * @method array getSegmentSet() Obtain A list of the highlight segments.
 * @method void setSegmentSet(array $SegmentSet) Set A list of the highlight segments.
 * @method string getHighlightUrl() Obtain Intelligent highlight address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHighlightUrl(string $HighlightUrl) Set Intelligent highlight address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCovImgUrl() Obtain Intelligent highlight cover address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCovImgUrl(string $CovImgUrl) Set Intelligent highlight cover address.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MediaAiAnalysisHighlightItem extends AbstractModel
{
    /**
     * @var string The URL of the highlight segments.
     */
    public $HighlightPath;

    /**
     * @var string The URL of the thumbnail.
     */
    public $CovImgPath;

    /**
     * @var float The confidence score. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var float The duration of the highlights.
     */
    public $Duration;

    /**
     * @var array A list of the highlight segments.
     */
    public $SegmentSet;

    /**
     * @var string Intelligent highlight address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HighlightUrl;

    /**
     * @var string Intelligent highlight cover address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CovImgUrl;

    /**
     * @param string $HighlightPath The URL of the highlight segments.
     * @param string $CovImgPath The URL of the thumbnail.
     * @param float $Confidence The confidence score. Value range: 0-100.
     * @param float $Duration The duration of the highlights.
     * @param array $SegmentSet A list of the highlight segments.
     * @param string $HighlightUrl Intelligent highlight address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CovImgUrl Intelligent highlight cover address.
Note: This field may return null, indicating that no valid values can be obtained.
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
