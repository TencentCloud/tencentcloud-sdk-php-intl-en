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
 * Suspected politically sensitive segment identified in content audit
 *
 * @method float getStartTimeOffset() Obtain Start time offset of a suspected segment in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a suspected segment in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of a suspected segment in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a suspected segment in seconds.
 * @method float getConfidence() Obtain Score of a suspected politically sensitive segment.
 * @method void setConfidence(float $Confidence) Set Score of a suspected politically sensitive segment.
 * @method string getSuggestion() Obtain Suggestion for politically sensitive information detection of a suspected segment. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Suggestion for politically sensitive information detection of a suspected segment. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getName() Obtain Name of a politically sensitive figure or violating photo.
 * @method void setName(string $Name) Set Name of a politically sensitive figure or violating photo.
 * @method string getLabel() Obtain Tag of politically sensitive information detection result of a suspected segment.
 * @method void setLabel(string $Label) Set Tag of politically sensitive information detection result of a suspected segment.
 * @method string getUrl() Obtain URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
 * @method void setUrl(string $Url) Set URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
 * @method array getAreaCoordSet() Obtain Zone coordinates (at the pixel level) of a politically sensitive figure or violating photo: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
 * @method void setAreaCoordSet(array $AreaCoordSet) Set Zone coordinates (at the pixel level) of a politically sensitive figure or violating photo: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
 * @method integer getPicUrlExpireTimeStamp() Obtain This field has been disused. Please use `PicUrlExpireTime`.
 * @method void setPicUrlExpireTimeStamp(integer $PicUrlExpireTimeStamp) Set This field has been disused. Please use `PicUrlExpireTime`.
 * @method string getPicUrlExpireTime() Obtain Expiration time of suspected image URL in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 * @method void setPicUrlExpireTime(string $PicUrlExpireTime) Set Expiration time of suspected image URL in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
 */
class MediaContentReviewPoliticalSegmentItem extends AbstractModel
{
    /**
     * @var float Start time offset of a suspected segment in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a suspected segment in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var float Score of a suspected politically sensitive segment.
     */
    public $Confidence;

    /**
     * @var string Suggestion for politically sensitive information detection of a suspected segment. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Name of a politically sensitive figure or violating photo.
     */
    public $Name;

    /**
     * @var string Tag of politically sensitive information detection result of a suspected segment.
     */
    public $Label;

    /**
     * @var string URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
     */
    public $Url;

    /**
     * @var array Zone coordinates (at the pixel level) of a politically sensitive figure or violating photo: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
     */
    public $AreaCoordSet;

    /**
     * @var integer This field has been disused. Please use `PicUrlExpireTime`.
     */
    public $PicUrlExpireTimeStamp;

    /**
     * @var string Expiration time of suspected image URL in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
     */
    public $PicUrlExpireTime;

    /**
     * @param float $StartTimeOffset Start time offset of a suspected segment in seconds.
     * @param float $EndTimeOffset End time offset of a suspected segment in seconds.
     * @param float $Confidence Score of a suspected politically sensitive segment.
     * @param string $Suggestion Suggestion for politically sensitive information detection of a suspected segment. Valid values:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Name Name of a politically sensitive figure or violating photo.
     * @param string $Label Tag of politically sensitive information detection result of a suspected segment.
     * @param string $Url URL of a suspected image (which will not be permanently stored
 and will be deleted after `PicUrlExpireTime`).
     * @param array $AreaCoordSet Zone coordinates (at the pixel level) of a politically sensitive figure or violating photo: [x1, y1, x2, y2], i.e., the coordinates of the top-left and bottom-right corners.
     * @param integer $PicUrlExpireTimeStamp This field has been disused. Please use `PicUrlExpireTime`.
     * @param string $PicUrlExpireTime Expiration time of suspected image URL in [ISO date format](https://cloud.tencent.com/document/product/266/11732#I).
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("AreaCoordSet",$param) and $param["AreaCoordSet"] !== null) {
            $this->AreaCoordSet = $param["AreaCoordSet"];
        }

        if (array_key_exists("PicUrlExpireTimeStamp",$param) and $param["PicUrlExpireTimeStamp"] !== null) {
            $this->PicUrlExpireTimeStamp = $param["PicUrlExpireTimeStamp"];
        }

        if (array_key_exists("PicUrlExpireTime",$param) and $param["PicUrlExpireTime"] !== null) {
            $this->PicUrlExpireTime = $param["PicUrlExpireTime"];
        }
    }
}
