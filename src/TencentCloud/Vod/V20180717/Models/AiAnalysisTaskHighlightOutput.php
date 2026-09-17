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
 * @method array getHighlightSet() Obtain 
 * @method void setHighlightSet(array $HighlightSet) Set 
 * @method string getHighlightSetFileUrl() Obtain 
 * @method void setHighlightSetFileUrl(string $HighlightSetFileUrl) Set 
 * @method string getHighlightSetFileUrlExpireTime() Obtain 
 * @method void setHighlightSetFileUrlExpireTime(string $HighlightSetFileUrlExpireTime) Set 
 */
class AiAnalysisTaskHighlightOutput extends AbstractModel
{
    /**
     * @var array 
     */
    public $HighlightSet;

    /**
     * @var string 
     */
    public $HighlightSetFileUrl;

    /**
     * @var string 
     */
    public $HighlightSetFileUrlExpireTime;

    /**
     * @param array $HighlightSet 
     * @param string $HighlightSetFileUrl 
     * @param string $HighlightSetFileUrlExpireTime 
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
        if (array_key_exists("HighlightSet",$param) and $param["HighlightSet"] !== null) {
            $this->HighlightSet = [];
            foreach ($param["HighlightSet"] as $key => $value){
                $obj = new MediaAiAnalysisHighlightItem();
                $obj->deserialize($value);
                array_push($this->HighlightSet, $obj);
            }
        }

        if (array_key_exists("HighlightSetFileUrl",$param) and $param["HighlightSetFileUrl"] !== null) {
            $this->HighlightSetFileUrl = $param["HighlightSetFileUrl"];
        }

        if (array_key_exists("HighlightSetFileUrlExpireTime",$param) and $param["HighlightSetFileUrlExpireTime"] !== null) {
            $this->HighlightSetFileUrlExpireTime = $param["HighlightSetFileUrlExpireTime"];
        }
    }
}
