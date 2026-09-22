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
 * Output of the audio/video moderation task.
 *
 * @method string getSuggestion() Obtain Result suggestion for audio/video content moderation. Value range:
<li>pass: It is recommended to pass.</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestion for audio/video content moderation. Value range:
<li>pass: It is recommended to pass.</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
 * @method string getLabel() Obtain Valid when Suggestion is review or block. Indicates the most likely rule violation tag of the audio and video. Value range:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
 * @method void setLabel(string $Label) Set Valid when Suggestion is review or block. Indicates the most likely rule violation tag of the audio and video. Value range:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
 * @method string getForm() Obtain Valid when Suggestion is review or block. It indicates the most likely prohibited forms of audio and video. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text in the frame;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
 * @method void setForm(string $Form) Set Valid when Suggestion is review or block. It indicates the most likely prohibited forms of audio and video. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text in the frame;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
 * @method array getSegmentSet() Obtain List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain Expiration time of the URL of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set Expiration time of the URL of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method ReviewImageResult getCoverReviewResult() Obtain Cover review result.
 * @method void setCoverReviewResult(ReviewImageResult $CoverReviewResult) Set Cover review result.
 */
class ReviewAudioVideoTaskOutput extends AbstractModel
{
    /**
     * @var string Result suggestion for audio/video content moderation. Value range:
<li>pass: It is recommended to pass.</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
     */
    public $Suggestion;

    /**
     * @var string Valid when Suggestion is review or block. Indicates the most likely rule violation tag of the audio and video. Value range:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
     */
    public $Label;

    /**
     * @var string Valid when Suggestion is review or block. It indicates the most likely prohibited forms of audio and video. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text in the frame;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
     */
    public $Form;

    /**
     * @var array List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string Expiration time of the URL of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @var ReviewImageResult Cover review result.
     */
    public $CoverReviewResult;

    /**
     * @param string $Suggestion Result suggestion for audio/video content moderation. Value range:
<li>pass: It is recommended to pass.</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
     * @param string $Label Valid when Suggestion is review or block. Indicates the most likely rule violation tag of the audio and video. Value range:
<li>Porn: pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal;</li>
<li>Abuse: abusive language;</li>
<li>Moan: panting.</li>
     * @param string $Form Valid when Suggestion is review or block. It indicates the most likely prohibited forms of audio and video. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text in the frame;</li>
<li>ASR: text in speech.</li>
<li>Voice: sound.</li>
     * @param array $SegmentSet List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the SegmentSet fields. (The file will not be retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     * @param string $SegmentSetFileUrlExpireTime Expiration time of the URL of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param ReviewImageResult $CoverReviewResult Cover review result.
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
        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Form",$param) and $param["Form"] !== null) {
            $this->Form = $param["Form"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new ReviewAudioVideoSegmentItem();
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

        if (array_key_exists("CoverReviewResult",$param) and $param["CoverReviewResult"] !== null) {
            $this->CoverReviewResult = new ReviewImageResult();
            $this->CoverReviewResult->deserialize($param["CoverReviewResult"]);
        }
    }
}
