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
 * 
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method MediaMetaData getMetaData() Obtain 
 * @method void setMetaData(MediaMetaData $MetaData) Set 
 * @method string getUrl() Obtain 
 * @method void setUrl(string $Url) Set 
 * @method string getReviewResult() Obtain 
 * @method void setReviewResult(string $ReviewResult) Set 
 * @method array getReviewSummary() Obtain 
 * @method void setReviewSummary(array $ReviewSummary) Set 
 */
class MediaMiniProgramReviewInfoItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var MediaMetaData 
     */
    public $MetaData;

    /**
     * @var string 
     */
    public $Url;

    /**
     * @var string 
     */
    public $ReviewResult;

    /**
     * @var array 
     */
    public $ReviewSummary;

    /**
     * @param integer $Definition 
     * @param MediaMetaData $MetaData 
     * @param string $Url 
     * @param string $ReviewResult 
     * @param array $ReviewSummary 
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
