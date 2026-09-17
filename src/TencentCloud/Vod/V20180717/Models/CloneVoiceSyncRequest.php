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
 * CloneVoiceSync request structure.
 *
 * @method string getSubAppId() Obtain 
 * @method void setSubAppId(string $SubAppId) Set 
 * @method string getAudioData() Obtain 
 * @method void setAudioData(string $AudioData) Set 
 * @method string getAudioUrl() Obtain 
 * @method void setAudioUrl(string $AudioUrl) Set 
 * @method string getAudioFileId() Obtain 
 * @method void setAudioFileId(string $AudioFileId) Set 
 * @method string getLanguageBoost() Obtain 
 * @method void setLanguageBoost(string $LanguageBoost) Set 
 * @method string getExtParam() Obtain 
 * @method void setExtParam(string $ExtParam) Set 
 */
class CloneVoiceSyncRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $AudioData;

    /**
     * @var string 
     */
    public $AudioUrl;

    /**
     * @var string 
     */
    public $AudioFileId;

    /**
     * @var string 
     */
    public $LanguageBoost;

    /**
     * @var string 
     */
    public $ExtParam;

    /**
     * @param string $SubAppId 
     * @param string $AudioData 
     * @param string $AudioUrl 
     * @param string $AudioFileId 
     * @param string $LanguageBoost 
     * @param string $ExtParam 
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("AudioFileId",$param) and $param["AudioFileId"] !== null) {
            $this->AudioFileId = $param["AudioFileId"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
