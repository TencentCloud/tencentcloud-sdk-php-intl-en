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
 * Asr text involves offensive content
 *
 * @method float getConfidence() Obtain Score of Asr text involving offensive content. Value range: 0–100.
 * @method void setConfidence(float $Confidence) Set Score of Asr text involving offensive content. Value range: 0–100.
 * @method string getSuggestion() Obtain Result suggestions for Asr text involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for Asr text involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method array getSegmentSet() Obtain List of video segments whose Asr text is suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments whose Asr text is suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of the video segment list file where the Asr text is suspected of involving offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of the video segment list file where the Asr text is suspected of involving offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the Segment List File URL for videos whose Asr text may involve offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the Segment List File URL for videos whose Asr text may involve offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiReviewPornAsrTaskOutput extends AbstractModel
{
    /**
     * @var float Score of Asr text involving offensive content. Value range: 0–100.
     */
    public $Confidence;

    /**
     * @var string Result suggestions for Asr text involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var array List of video segments whose Asr text is suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of the video segment list file where the Asr text is suspected of involving offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the Segment List File URL for videos whose Asr text may involve offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param float $Confidence Score of Asr text involving offensive content. Value range: 0–100.
     * @param string $Suggestion Result suggestions for Asr text involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param array $SegmentSet List of video segments whose Asr text is suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of the video segment list file where the Asr text is suspected of involving offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently and will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the Segment List File URL for videos whose Asr text may involve offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
                $obj = new MediaContentReviewAsrTextSegmentItem();
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
