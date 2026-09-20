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
 * Mini Program Audio and Video moderation information unit
 *
 * @method integer getDefinition() Obtain Template ID. The transcoding template ID corresponding to the video released by the mini program. 0 indicates the original video.
 * @method void setDefinition(integer $Definition) Set Template ID. The transcoding template ID corresponding to the video released by the mini program. 0 indicates the original video.
 * @method MediaMetaData getMetaData() Obtain Video metadata.
 * @method void setMetaData(MediaMetaData $MetaData) Set Video metadata.
 * @method string getUrl() Obtain Video playback address for Mini Program Audio and Video review.
 * @method void setUrl(string $Url) Set Video playback address for Mini Program Audio and Video review.
 * @method string getReviewResult() Obtain Publishing status of the mini program video:
<li>Pass: Succeeded.</li>
<li>Rejected: failed.</li>
 * @method void setReviewResult(string $ReviewResult) Set Publishing status of the mini program video:
<li>Pass: Succeeded.</li>
<li>Rejected: failed.</li>
 * @method array getReviewSummary() Obtain Mini Program Audio and Video moderation element.
 * @method void setReviewSummary(array $ReviewSummary) Set Mini Program Audio and Video moderation element.
 */
class MediaMiniProgramReviewInfoItem extends AbstractModel
{
    /**
     * @var integer Template ID. The transcoding template ID corresponding to the video released by the mini program. 0 indicates the original video.
     */
    public $Definition;

    /**
     * @var MediaMetaData Video metadata.
     */
    public $MetaData;

    /**
     * @var string Video playback address for Mini Program Audio and Video review.
     */
    public $Url;

    /**
     * @var string Publishing status of the mini program video:
<li>Pass: Succeeded.</li>
<li>Rejected: failed.</li>
     */
    public $ReviewResult;

    /**
     * @var array Mini Program Audio and Video moderation element.
     */
    public $ReviewSummary;

    /**
     * @param integer $Definition Template ID. The transcoding template ID corresponding to the video released by the mini program. 0 indicates the original video.
     * @param MediaMetaData $MetaData Video metadata.
     * @param string $Url Video playback address for Mini Program Audio and Video review.
     * @param string $ReviewResult Publishing status of the mini program video:
<li>Pass: Succeeded.</li>
<li>Rejected: failed.</li>
     * @param array $ReviewSummary Mini Program Audio and Video moderation element.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ReviewResult",$param) and $param["ReviewResult"] !== null) {
            $this->ReviewResult = $param["ReviewResult"];
        }

        if (array_key_exists("ReviewSummary",$param) and $param["ReviewSummary"] !== null) {
            $this->ReviewSummary = [];
            foreach ($param["ReviewSummary"] as $key => $value){
                $obj = new MediaMiniProgramReviewElem();
                $obj->deserialize($value);
                array_push($this->ReviewSummary, $obj);
            }
        }
    }
}
