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
 * @method array getCoverSet() Obtain 
 * @method void setCoverSet(array $CoverSet) Set 
 * @method string getCoverSetFileUrl() Obtain 
 * @method void setCoverSetFileUrl(string $CoverSetFileUrl) Set 
 * @method string getCoverSetFileUrlExpireTime() Obtain 
 * @method void setCoverSetFileUrlExpireTime(string $CoverSetFileUrlExpireTime) Set 
 */
class AiAnalysisTaskCoverOutput extends AbstractModel
{
    /**
     * @var array 
     */
    public $CoverSet;

    /**
     * @var string 
     */
    public $CoverSetFileUrl;

    /**
     * @var string 
     */
    public $CoverSetFileUrlExpireTime;

    /**
     * @param array $CoverSet 
     * @param string $CoverSetFileUrl 
     * @param string $CoverSetFileUrlExpireTime 
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
        if (array_key_exists("CoverSet",$param) and $param["CoverSet"] !== null) {
            $this->CoverSet = [];
            foreach ($param["CoverSet"] as $key => $value){
                $obj = new MediaAiAnalysisCoverItem();
                $obj->deserialize($value);
                array_push($this->CoverSet, $obj);
            }
        }

        if (array_key_exists("CoverSetFileUrl",$param) and $param["CoverSetFileUrl"] !== null) {
            $this->CoverSetFileUrl = $param["CoverSetFileUrl"];
        }

        if (array_key_exists("CoverSetFileUrlExpireTime",$param) and $param["CoverSetFileUrlExpireTime"] !== null) {
            $this->CoverSetFileUrlExpireTime = $param["CoverSetFileUrlExpireTime"];
        }
    }
}
