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
 * CreateAigcCustomVoice request structure.
 *
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getVoiceName() Obtain 
 * @method void setVoiceName(string $VoiceName) Set 
 * @method string getVoiceUrl() Obtain 
 * @method void setVoiceUrl(string $VoiceUrl) Set 
 * @method string getVideoId() Obtain 
 * @method void setVideoId(string $VideoId) Set 
 * @method string getDisableModeration() Obtain 
 * @method void setDisableModeration(string $DisableModeration) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method integer getTasksPriority() Obtain 
 * @method void setTasksPriority(integer $TasksPriority) Set 
 */
class CreateAigcCustomVoiceRequest extends AbstractModel
{
    /**
     * @var integer 
     */
    public $SubAppId;

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
     * @var string 
     */
    public $DisableModeration;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var integer 
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId 
     * @param string $VoiceName 
     * @param string $VoiceUrl 
     * @param string $VideoId 
     * @param string $DisableModeration 
     * @param string $SessionId 
     * @param string $SessionContext 
     * @param integer $TasksPriority 
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

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("VoiceUrl",$param) and $param["VoiceUrl"] !== null) {
            $this->VoiceUrl = $param["VoiceUrl"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }

        if (array_key_exists("DisableModeration",$param) and $param["DisableModeration"] !== null) {
            $this->DisableModeration = $param["DisableModeration"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
