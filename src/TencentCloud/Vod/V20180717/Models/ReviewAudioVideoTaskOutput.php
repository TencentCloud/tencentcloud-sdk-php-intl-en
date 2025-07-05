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
 * The output of a moderation task.
 *
 * @method string getSuggestion() Obtain The handling suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method void setSuggestion(string $Suggestion) Set The handling suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
 * @method string getLabel() Obtain The most likely label for the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Porn</li>
<li>Terrorism</li>
 * @method void setLabel(string $Label) Set The most likely label for the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Porn</li>
<li>Terrorism</li>
 * @method string getForm() Obtain The most likely format of the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
 * @method void setForm(string $Form) Set The most likely format of the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
 * @method array getSegmentSet() Obtain A list of the suspicious segments detected.
<font color=red>Note</font>: Only the first 10 results will be returned at most. You can get all the results from the file specified by `SegmentSetFileUrl`.
 * @method void setSegmentSet(array $SegmentSet) Set A list of the suspicious segments detected.
<font color=red>Note</font>: Only the first 10 results will be returned at most. You can get all the results from the file specified by `SegmentSetFileUrl`.
 * @method string getSegmentSetFileUrl() Obtain The URL of the file that contains suspicious segments. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time (`SegmentSetFileUrlExpireTime`).
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) Set The URL of the file that contains suspicious segments. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time (`SegmentSetFileUrlExpireTime`).
 * @method string getSegmentSetFileUrlExpireTime() Obtain The expiration time of the file that contains suspicious segments, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) Set The expiration time of the file that contains suspicious segments, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
 * @method ReviewImageResult getCoverReviewResult() Obtain The thumbnail moderation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoverReviewResult(ReviewImageResult $CoverReviewResult) Set The thumbnail moderation result.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ReviewAudioVideoTaskOutput extends AbstractModel
{
    /**
     * @var string The handling suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     */
    public $Suggestion;

    /**
     * @var string The most likely label for the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Porn</li>
<li>Terrorism</li>
     */
    public $Label;

    /**
     * @var string The most likely format of the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
     */
    public $Form;

    /**
     * @var array A list of the suspicious segments detected.
<font color=red>Note</font>: Only the first 10 results will be returned at most. You can get all the results from the file specified by `SegmentSetFileUrl`.
     */
    public $SegmentSet;

    /**
     * @var string The URL of the file that contains suspicious segments. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time (`SegmentSetFileUrlExpireTime`).
     */
    public $SegmentSetFileUrl;

    /**
     * @var string The expiration time of the file that contains suspicious segments, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @var ReviewImageResult The thumbnail moderation result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoverReviewResult;

    /**
     * @param string $Suggestion The handling suggestion. Valid values:
<li>pass</li>
<li>review</li>
<li>block</li>
     * @param string $Label The most likely label for the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Porn</li>
<li>Terrorism</li>
     * @param string $Form The most likely format of the suspicious content. This parameter is valid only if `Suggestion` is `review` or `block`.
<li>Image</li>
<li>OCR</li>
<li>ASR</li>
<li>Voice</li>
     * @param array $SegmentSet A list of the suspicious segments detected.
<font color=red>Note</font>: Only the first 10 results will be returned at most. You can get all the results from the file specified by `SegmentSetFileUrl`.
     * @param string $SegmentSetFileUrl The URL of the file that contains suspicious segments. The file is in JSON format and has the same data structure as `SegmentSet`. Instead of being saved permanently, the file is deleted upon the expiration time (`SegmentSetFileUrlExpireTime`).
     * @param string $SegmentSetFileUrlExpireTime The expiration time of the file that contains suspicious segments, in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format).
     * @param ReviewImageResult $CoverReviewResult The thumbnail moderation result.
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
