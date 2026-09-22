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
 * Ocr text involves inappropriate information
 *
 * @method float getConfidence() Obtain Ocr text involving inappropriate information and rule violation score. The score ranges from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Ocr text involving inappropriate information and rule violation score. The score ranges from 0 to 100.
 * @method string getSuggestion() Obtain Ocr text involving inappropriate information and violation result recommendations. Value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Ocr text involving inappropriate information and violation result recommendations. Value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method array getSegmentSet() Obtain List of video segments whose Ocr text involves inappropriate information or is suspected of rule violations.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments whose Ocr text involves inappropriate information or is suspected of rule violations.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of the segment list file for videos where the Ocr text involves inappropriate information or suspected rule violations. The content of the file is in JSON format, and the data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching SegmentSetFileUrlExpireTime.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of the segment list file for videos where the Ocr text involves inappropriate information or suspected rule violations. The content of the file is in JSON format, and the data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching SegmentSetFileUrlExpireTime.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the Segment List File URL for video segments with Ocr text involving inappropriate information or suspected rule violations, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the Segment List File URL for video segments with Ocr text involving inappropriate information or suspected rule violations, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiReviewPoliticalOcrTaskOutput extends AbstractModel
{
    /**
     * @var float Ocr text involving inappropriate information and rule violation score. The score ranges from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Ocr text involving inappropriate information and violation result recommendations. Value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var array List of video segments whose Ocr text involves inappropriate information or is suspected of rule violations.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of the segment list file for videos where the Ocr text involves inappropriate information or suspected rule violations. The content of the file is in JSON format, and the data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching SegmentSetFileUrlExpireTime.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the Segment List File URL for video segments with Ocr text involving inappropriate information or suspected rule violations, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param float $Confidence Ocr text involving inappropriate information and rule violation score. The score ranges from 0 to 100.
     * @param string $Suggestion Ocr text involving inappropriate information and violation result recommendations. Value ranges from...to...
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param array $SegmentSet List of video segments whose Ocr text involves inappropriate information or is suspected of rule violations.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of the segment list file for videos where the Ocr text involves inappropriate information or suspected rule violations. The content of the file is in JSON format, and the data structure is consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted after reaching SegmentSetFileUrlExpireTime.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the Segment List File URL for video segments with Ocr text involving inappropriate information or suspected rule violations, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
