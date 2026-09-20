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
 * Image review result.
 *
 * @method string getSuggestion() Obtain Result suggestion for image moderation. Value range:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
 * @method void setSuggestion(string $Suggestion) Set Result suggestion for image moderation. Value range:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
 * @method string getLabel() Obtain Tag that is most likely to violate the rule. Valid when Suggestion is review or block. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language.</li>
 * @method void setLabel(string $Label) Set Tag that is most likely to violate the rule. Valid when Suggestion is review or block. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language.</li>
 * @method string getForm() Obtain Valid when Suggestion is review or block. It indicates the most likely prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen.</li>
 * @method void setForm(string $Form) Set Valid when Suggestion is review or block. It indicates the most likely prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen.</li>
 * @method array getSegmentSet() Obtain List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of the video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the fields of SegmentSet. (The file is not retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of the video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the fields of SegmentSet. (The file is not retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain URL expiry time of the list of video clips suspected of involving violation information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set URL expiry time of the list of video clips suspected of involving violation information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewImageResult extends AbstractModel
{
    /**
     * @var string Result suggestion for image moderation. Value range:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
     */
    public $Suggestion;

    /**
     * @var string Tag that is most likely to violate the rule. Valid when Suggestion is review or block. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language.</li>
     */
    public $Label;

    /**
     * @var string Valid when Suggestion is review or block. It indicates the most likely prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen.</li>
     */
    public $Form;

    /**
     * @var array List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of the video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the fields of SegmentSet. (The file is not retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string URL expiry time of the list of video clips suspected of involving violation information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param string $Suggestion Result suggestion for image moderation. Value range:
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: suggest banning.</li>
     * @param string $Label Tag that is most likely to violate the rule. Valid when Suggestion is review or block. Value range:
<li>Porn: Pornography;</li>
<li>Terror: violence.</li>
<li>Polity: inappropriate information;</li>
<li>Ad: advertisement;</li>
<li>Illegal: illegal activities;</li>
<li>Abuse: abusive language.</li>
     * @param string $Form Valid when Suggestion is review or block. It indicates the most likely prohibited forms. Value range:
<li>Image: people or icons in the image;</li>
<li>OCR: text on the screen.</li>
     * @param array $SegmentSet List of video clips suspected of containing violation information.
<font color=red>Note</font>: This list can only display up to the first 10 elements. To obtain the complete result, get it from the file corresponding to SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of the video clip list file involved in suspicion of violation information. The file content is in JSON format, and its data structure is consistent with the fields of SegmentSet. (The file is not retained permanently. It will be deleted after reaching the SegmentSetFileUrlExpireTime time point.)
     * @param string $SegmentSetFileUrlExpireTime URL expiry time of the list of video clips suspected of involving violation information in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
                $obj = new ReviewImageSegmentItem();
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
