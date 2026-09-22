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
 * Involves inappropriate information.
 *
 * @method float getConfidence() Obtain Score of inappropriate information in the video. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Score of inappropriate information in the video. Value range: 0-100.
 * @method string getSuggestion() Obtain Result suggestions involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestions involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
 * @method string getLabel() Obtain Result tag for videos involving inappropriate information. Mapping between the LabelSet parameter in the screen image authentication task control parameter (https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
Other (politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: relevant people.</li>
 * @method void setLabel(string $Label) Set Result tag for videos involving inappropriate information. Mapping between the LabelSet parameter in the screen image authentication task control parameter (https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
Other (politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: relevant people.</li>
 * @method array getSegmentSet() Obtain List of video segments suspected of involving inappropriate information.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set List of video segments suspected of involving inappropriate information.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of the segment list file that may contain inappropriate information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after the SegmentSetFileUrlExpireTime is reached.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of the segment list file that may contain inappropriate information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after the SegmentSetFileUrlExpireTime is reached.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the URL of the Segment List File of the video suspected of involving inappropriate information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the URL of the Segment List File of the video suspected of involving inappropriate information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class AiReviewPoliticalTaskOutput extends AbstractModel
{
    /**
     * @var float Score of inappropriate information in the video. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var string Result suggestions involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     */
    public $Suggestion;

    /**
     * @var string Result tag for videos involving inappropriate information. Mapping between the LabelSet parameter in the screen image authentication task control parameter (https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
Other (politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: relevant people.</li>
     */
    public $Label;

    /**
     * @var array List of video segments suspected of involving inappropriate information.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of the segment list file that may contain inappropriate information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after the SegmentSetFileUrlExpireTime is reached.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the URL of the Segment List File of the video suspected of involving inappropriate information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param float $Confidence Score of inappropriate information in the video. Value range: 0-100.
     * @param string $Suggestion Result suggestions involving inappropriate information. Value range:
<li>pass.</li>
<li>review.</li>
<li>block.</li>
     * @param string $Label Result tag for videos involving inappropriate information. Mapping between the LabelSet parameter in the screen image authentication task control parameter (https://www.tencentcloud.com/document/api/266/31773?from_cn_redirect=1#PoliticalImgReviewTemplateInfo) of the audio/video moderation template and the value range of this parameter:
violation_photo:
<li>violation_photo: Violation icon.</li>
Other (politician/entertainment/sport/entrepreneur/scholar/celebrity/military):
<li>politician: relevant people.</li>
     * @param array $SegmentSet List of video segments suspected of involving inappropriate information.
<font color=red>Note</font>: This list can only display up to the first 100 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of the segment list file that may contain inappropriate information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after the SegmentSetFileUrlExpireTime is reached.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the URL of the Segment List File of the video suspected of involving inappropriate information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
                $obj = new MediaContentReviewPoliticalSegmentItem();
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
