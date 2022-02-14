<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 *  
 *
 * @method integer getDefinition() Obtain Template ID, which is the ID of the transcoding template corresponding to the video published on WeChat Mini Program. 0 represents the source video.
 * @method void setDefinition(integer $Definition) Set Template ID, which is the ID of the transcoding template corresponding to the video published on WeChat Mini Program. 0 represents the source video.
 * @method MediaMetaData getMetaData() Obtain Video metadata.
 * @method void setMetaData(MediaMetaData $MetaData) Set Video metadata.
 * @method string getUrl() Obtain Video playback address for WeChat Mini Program audit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUrl(string $Url) Set Video playback address for WeChat Mini Program audit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getReviewResult() Obtain Status of video release on WeChat Mini Program
<li>Pass: succeeded.</li>
<li>Rejected: rejected.</li>
 * @method void setReviewResult(string $ReviewResult) Set Status of video release on WeChat Mini Program
<li>Pass: succeeded.</li>
<li>Rejected: rejected.</li>
 * @method array getReviewSummary() Obtain WeChat Mini Program audit element.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReviewSummary(array $ReviewSummary) Set WeChat Mini Program audit element.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaMiniProgramReviewInfoItem extends AbstractModel
{
    /**
     * @var integer Template ID, which is the ID of the transcoding template corresponding to the video published on WeChat Mini Program. 0 represents the source video.
     */
    public $Definition;

    /**
     * @var MediaMetaData Video metadata.
     */
    public $MetaData;

    /**
     * @var string Video playback address for WeChat Mini Program audit
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Url;

    /**
     * @var string Status of video release on WeChat Mini Program
<li>Pass: succeeded.</li>
<li>Rejected: rejected.</li>
     */
    public $ReviewResult;

    /**
     * @var array WeChat Mini Program audit element.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReviewSummary;

    /**
     * @param integer $Definition Template ID, which is the ID of the transcoding template corresponding to the video published on WeChat Mini Program. 0 represents the source video.
     * @param MediaMetaData $MetaData Video metadata.
     * @param string $Url Video playback address for WeChat Mini Program audit
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ReviewResult Status of video release on WeChat Mini Program
<li>Pass: succeeded.</li>
<li>Rejected: rejected.</li>
     * @param array $ReviewSummary WeChat Mini Program audit element.
Note: this field may return null, indicating that no valid values can be obtained.
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
