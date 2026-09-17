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
 * @method string getVoiceName() Obtain 
 * @method void setVoiceName(string $VoiceName) Set 
 * @method string getVoiceUrl() Obtain 
 * @method void setVoiceUrl(string $VoiceUrl) Set 
 * @method string getVideoId() Obtain 
 * @method void setVideoId(string $VideoId) Set 
 */
class CreateAigcCustomVoiceInput extends AbstractModel
{
    /**
     * @var string 
     */
    public $VoiceName;

    /**
     * @var string 
     */
    public $VoiceUrl;

    /**
     * @var string 
     */
    public $VideoId;

    /**
     * @param string $VoiceName 
     * @param string $VoiceUrl 
     * @param string $VideoId 
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
        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceUrl",$param) and $param["VoiceUrl"] !== null) {
            $this->VoiceUrl = $param["VoiceUrl"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }
    }
}
