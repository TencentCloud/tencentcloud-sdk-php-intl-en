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
 * DesignVoiceAsync request structure.
 *
 * @method string getPrompt() Obtain 
 * @method void setPrompt(string $Prompt) Set 
 * @method string getSubAppId() Obtain 
 * @method void setSubAppId(string $SubAppId) Set 
 * @method VoiceSettings getVoiceSettings() Obtain 
 * @method void setVoiceSettings(VoiceSettings $VoiceSettings) Set 
 * @method string getPreviewText() Obtain 
 * @method void setPreviewText(string $PreviewText) Set 
 * @method string getExtParam() Obtain 
 * @method void setExtParam(string $ExtParam) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 */
class DesignVoiceAsyncRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Prompt;

    /**
     * @var string 
     */
    public $SubAppId;

    /**
     * @var VoiceSettings 
     */
    public $VoiceSettings;

    /**
     * @var string 
     */
    public $PreviewText;

    /**
     * @var string 
     */
    public $ExtParam;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @param string $Prompt 
     * @param string $SubAppId 
     * @param VoiceSettings $VoiceSettings 
     * @param string $PreviewText 
     * @param string $ExtParam 
     * @param string $SessionContext 
     * @param string $SessionId 
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("VoiceSettings",$param) and $param["VoiceSettings"] !== null) {
            $this->VoiceSettings = new VoiceSettings();
            $this->VoiceSettings->deserialize($param["VoiceSettings"]);
        }

        if (array_key_exists("PreviewText",$param) and $param["PreviewText"] !== null) {
            $this->PreviewText = $param["PreviewText"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
