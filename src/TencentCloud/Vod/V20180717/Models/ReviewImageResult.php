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
 * Image moderation results.
 *
 * @method string getSuggestion() Obtain Image review result suggestion. Value ranges from...to...
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: Suggest banning.</li>
 * @method void setSuggestion(string $Suggestion) Set Image review result suggestion. Value ranges from...to...
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: Suggest banning.</li>
 * @method string getLabel() Obtain The most likely label for the suspicious content. This parameter is valid if `Suggestion` is `review` or `block`. Valid values: <li>`Porn`</li> <li>`Terror`</li>
 * @method void setLabel(string $Label) Set The most likely label for the suspicious content. This parameter is valid if `Suggestion` is `review` or `block`. Valid values: <li>`Porn`</li> <li>`Terror`</li>
 * @method string getForm() Obtain Valid when Suggestion is review or block, indicating the most likely prohibited forms. Value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on the screen.</li>
 * @method void setForm(string $Form) Set Valid when Suggestion is review or block, indicating the most likely prohibited forms. Value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on the screen.</li>
 * @method array getSegmentSet() Obtain Video clips suspected of containing violation information.
<font color=red>Note</font>: The list only displays the first 10 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
 * @method void setSegmentSet(array $SegmentSet) Set Video clips suspected of containing violation information.
<font color=red>Note</font>: The list only displays the first 10 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
 * @method string getSegmentSetFileUrl() Obtain URL of video clip list file involved in suspicion of violation information. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set URL of video clip list file involved in suspicion of violation information. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
 * @method string getSegmentSetFileUrlExpireTime() Obtain URL expiry time of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set URL expiry time of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class ReviewImageResult extends AbstractModel
{
    /**
     * @var string Image review result suggestion. Value ranges from...to...
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: Suggest banning.</li>
     */
    public $Suggestion;

    /**
     * @var string The most likely label for the suspicious content. This parameter is valid if `Suggestion` is `review` or `block`. Valid values: <li>`Porn`</li> <li>`Terror`</li>
     */
    public $Label;

    /**
     * @var string Valid when Suggestion is review or block, indicating the most likely prohibited forms. Value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on the screen.</li>
     */
    public $Form;

    /**
     * @var array Video clips suspected of containing violation information.
<font color=red>Note</font>: The list only displays the first 10 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
     */
    public $SegmentSet;

    /**
     * @var string URL of video clip list file involved in suspicion of violation information. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
     */
    public $SegmentSetFileUrl;

    /**
     * @var string URL expiry time of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param string $Suggestion Image review result suggestion. Value ranges from...to...
<li>pass: it is recommended to pass;</li>
<li>review: suggest re-examination;</li>
<li>block: Suggest banning.</li>
     * @param string $Label The most likely label for the suspicious content. This parameter is valid if `Suggestion` is `review` or `block`. Valid values: <li>`Porn`</li> <li>`Terror`</li>
     * @param string $Form Valid when Suggestion is review or block, indicating the most likely prohibited forms. Value ranges from...to...
<li>Image: The figure or icon on the screen;</li>
<li>OCR: Text on the screen.</li>
     * @param array $SegmentSet Video clips suspected of containing violation information.
<font color=red>Note</font>: The list only displays the first 10 elements. To obtain the complete result, refer to the corresponding file in SegmentSetFileUrl.
     * @param string $SegmentSetFileUrl URL of video clip list file involved in suspicion of violation information. The content of the file is JSON, consistent with the fields of SegmentSet. (The file will not be retained permanently and will be deleted when reaching SegmentSetFileUrlExpireTime.)
     * @param string $SegmentSetFileUrlExpireTime URL expiry time of the list of video clips suspected of involving violation information, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
