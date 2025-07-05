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
 * Output for OCR-based recognition of terrorism content
 *
 * @method float getConfidence() Obtain Confidence score for the OCR-detected terrorism content. Value range: 0-100
 * @method void setConfidence(float $Confidence) Set Confidence score for the OCR-detected terrorism content. Value range: 0-100
 * @method string getSuggestion() Obtain Processing suggestion for the OCR-detected terrorism content
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set Processing suggestion for the OCR-detected terrorism content
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method array getSegmentSet() Obtain List of video segments that contain OCR-detected terrorism content
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `SegmentSetFileUrl`.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments that contain OCR-detected terrorism content
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `SegmentSetFileUrl`.
 * @method string getSegmentSetFileUrl() Obtain URL to the file for video segments that contain OCR-detected terrorism content. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `SegmentSetFileUrlExpireTime`.
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL to the file for video segments that contain OCR-detected terrorism content. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `SegmentSetFileUrlExpireTime`.
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the URL to the file for video segments that contain OCR-detected terrorism content, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the URL to the file for video segments that contain OCR-detected terrorism content, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
 */
class AiReviewTerrorismOcrTaskOutput extends AbstractModel
{
    /**
     * @var float Confidence score for the OCR-detected terrorism content. Value range: 0-100
     */
    public $Confidence;

    /**
     * @var string Processing suggestion for the OCR-detected terrorism content
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var array List of video segments that contain OCR-detected terrorism content
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `SegmentSetFileUrl`.
     */
    public $SegmentSet;

    /**
     * @var string URL to the file for video segments that contain OCR-detected terrorism content. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `SegmentSetFileUrlExpireTime`.
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the URL to the file for video segments that contain OCR-detected terrorism content, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param float $Confidence Confidence score for the OCR-detected terrorism content. Value range: 0-100
     * @param string $Suggestion Processing suggestion for the OCR-detected terrorism content
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param array $SegmentSet List of video segments that contain OCR-detected terrorism content
<font color=red>Note</font>: This list displays the first 100 results at most. You can get all the results from the file at the URL specified by `SegmentSetFileUrl`.
     * @param string $SegmentSetFileUrl URL to the file for video segments that contain OCR-detected terrorism content. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time specified by `SegmentSetFileUrlExpireTime`.
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the URL to the file for video segments that contain OCR-detected terrorism content, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format)
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewOcrTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SegmentSetFileUrl",$param) and $param["SegmentSetFileUrl"] !== null) {
            $this->SegmentSetFileUrl = $param["SegmentSetFileUrl"];
        }

        if (array_key_exists("SegmentSetFileUrlExpireTime",$param) and $param["SegmentSetFileUrlExpireTime"] !== null) {
            $this->SegmentSetFileUrlExpireTime = $param["SegmentSetFileUrlExpireTime"];
        }
    }
}
