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
 * Authentication result info involving offensive content
 *
 * @method float getConfidence() Obtain Video identification involves scoring offensive content, with a score from 0 to 100.
 * @method void setConfidence(float $Confidence) Set Video identification involves scoring offensive content, with a score from 0 to 100.
 * @method string getSuggestion() Obtain Result suggestions for authentication involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions for authentication involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getLabel() Obtain Result tag of video identification involving offensive content. Value range:
<li>porn: Pornography.</li>
<li>sexy: Sexy.</li>
<li>vulgar: Vulgar.</li>
<li>intimacy: intimate behavior.</li>
 * @method void setLabel(string $Label) Set Result tag of video identification involving offensive content. Value range:
<li>porn: Pornography.</li>
<li>sexy: Sexy.</li>
<li>vulgar: Vulgar.</li>
<li>intimacy: intimate behavior.</li>
 * @method array getSegmentSet() Obtain List of video segments suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of the Segment List File that may involve offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file is not retained permanently. It will be deleted after the time point specified by SegmentSetFileUrlExpireTime is reached.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of the Segment List File that may involve offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file is not retained permanently. It will be deleted after the time point specified by SegmentSetFileUrlExpireTime is reached.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the file URL for the video segment list where the video involves suspected offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the file URL for the video segment list where the video involves suspected offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiReviewPornTaskOutput extends AbstractModel
{
    /**
     * @var float Video identification involves scoring offensive content, with a score from 0 to 100.
     */
    public $Confidence;

    /**
     * @var string Result suggestions for authentication involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Result tag of video identification involving offensive content. Value range:
<li>porn: Pornography.</li>
<li>sexy: Sexy.</li>
<li>vulgar: Vulgar.</li>
<li>intimacy: intimate behavior.</li>
     */
    public $Label;

    /**
     * @var array List of video segments suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of the Segment List File that may involve offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file is not retained permanently. It will be deleted after the time point specified by SegmentSetFileUrlExpireTime is reached.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the file URL for the video segment list where the video involves suspected offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param float $Confidence Video identification involves scoring offensive content, with a score from 0 to 100.
     * @param string $Suggestion Result suggestions for authentication involving offensive content. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Label Result tag of video identification involving offensive content. Value range:
<li>porn: Pornography.</li>
<li>sexy: Sexy.</li>
<li>vulgar: Vulgar.</li>
<li>intimacy: intimate behavior.</li>
     * @param array $SegmentSet List of video segments suspected of involving offensive content.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of the Segment List File that may involve offensive content. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file is not retained permanently. It will be deleted after the time point specified by SegmentSetFileUrlExpireTime is reached.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the file URL for the video segment list where the video involves suspected offensive content, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new MediaContentReviewSegmentItem();
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
