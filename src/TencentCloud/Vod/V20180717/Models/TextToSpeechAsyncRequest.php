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
 * TextToSpeechAsync request structure.
 *
 * @method string getText() Obtain 
 * @method void setText(string $Text) Set 
 * @method string getVoiceId() Obtain 
 * @method void setVoiceId(string $VoiceId) Set 
 * @method string getSubAppId() Obtain 
 * @method void setSubAppId(string $SubAppId) Set 
 * @method string getLanguageBoost() Obtain 
 * @method void setLanguageBoost(string $LanguageBoost) Set 
 * @method string getExtParam() Obtain 
 * @method void setExtParam(string $ExtParam) Set 
 * @method TextToSpeechAsyncOutputOption getOutput() Obtain 
 * @method void setOutput(TextToSpeechAsyncOutputOption $Output) Set 
 * @method string getSessionContext() Obtain 
 * @method void setSessionContext(string $SessionContext) Set 
 * @method string getSessionId() Obtain 
 * @method void setSessionId(string $SessionId) Set 
 */
class TextToSpeechAsyncRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Text;

    /**
     * @var string 
     */
    public $VoiceId;

    /**
     * @var string 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $LanguageBoost;

    /**
     * @var string 
     */
    public $ExtParam;

    /**
     * @var TextToSpeechAsyncOutputOption 
     */
    public $Output;

    /**
     * @var string 
     */
    public $SessionContext;

    /**
     * @var string 
     */
    public $SessionId;

    /**
     * @param string $Text 
     * @param string $VoiceId 
     * @param string $SubAppId 
     * @param string $LanguageBoost 
     * @param string $ExtParam 
     * @param TextToSpeechAsyncOutputOption $Output 
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("LanguageBoost",$param) and $param["LanguageBoost"] !== null) {
            $this->LanguageBoost = $param["LanguageBoost"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TextToSpeechAsyncOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
