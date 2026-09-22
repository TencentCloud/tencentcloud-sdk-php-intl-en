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
 * @method string getPrompt() Obtain <p>Voice description.</p>
 * @method void setPrompt(string $Prompt) Set <p>Voice description.</p>
 * @method string getSubAppId() Obtain <p>VOD app ID. For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
 * @method void setSubAppId(string $SubAppId) Set <p>VOD app ID. For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
 * @method VoiceSettings getVoiceSettings() Obtain <p>Voice settings</p>
 * @method void setVoiceSettings(VoiceSettings $VoiceSettings) Set <p>Voice settings</p>
 * @method string getPreviewText() Obtain <p>Audition synthetic text, up to 500 characters</p>
 * @method void setPreviewText(string $PreviewText) Set <p>Audition synthetic text, up to 500 characters</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p>
 * @method string getSessionContext() Obtain <p>Identifies source context. This is used to pass through user request information. The callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Identifies source context. This is used to pass through user request information. The callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.</p>
 * @method string getSessionId() Obtain <p>Identification Code for Task Deduplication. If a request with the same identification code within the past 3 days, an error will be returned for the current request. The longest is 50 characters. With empty string or not specified indicate no deduplication.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identification Code for Task Deduplication. If a request with the same identification code within the past 3 days, an error will be returned for the current request. The longest is 50 characters. With empty string or not specified indicate no deduplication.</p>
 */
class DesignVoiceAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>Voice description.</p>
     */
    public $Prompt;

    /**
     * @var string <p>VOD app ID. For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
     */
    public $SubAppId;

    /**
     * @var VoiceSettings <p>Voice settings</p>
     */
    public $VoiceSettings;

    /**
     * @var string <p>Audition synthetic text, up to 500 characters</p>
     */
    public $PreviewText;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p>
     */
    public $ExtParam;

    /**
     * @var string <p>Identifies source context. This is used to pass through user request information. The callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Identification Code for Task Deduplication. If a request with the same identification code within the past 3 days, an error will be returned for the current request. The longest is 50 characters. With empty string or not specified indicate no deduplication.</p>
     */
    public $SessionId;

    /**
     * @param string $Prompt <p>Voice description.</p>
     * @param string $SubAppId <p>VOD app ID. For customers who activate on-demand services after December 25, 2023, this field must be filled with the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</p>
     * @param VoiceSettings $VoiceSettings <p>Voice settings</p>
     * @param string $PreviewText <p>Audition synthetic text, up to 500 characters</p>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string.</p>
     * @param string $SessionContext <p>Identifies source context. This is used to pass through user request information. The callback and task flow status change callback return the value of this field. The maximum length is 1000 characters.</p>
     * @param string $SessionId <p>Identification Code for Task Deduplication. If a request with the same identification code within the past 3 days, an error will be returned for the current request. The longest is 50 characters. With empty string or not specified indicate no deduplication.</p>
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
