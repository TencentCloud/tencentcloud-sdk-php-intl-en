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
 * CloneVoiceAsync request structure.
 *
 * @method string getSubAppId() Obtain <p>VOD application ID. For customers who activate on-demand services on or after December 25, 2023, this field must be filled in with the app ID to access resources in VOD applications, whether in the default or a newly created application.</p>
 * @method void setSubAppId(string $SubAppId) Set <p>VOD application ID. For customers who activate on-demand services on or after December 25, 2023, this field must be filled in with the app ID to access resources in VOD applications, whether in the default or a newly created application.</p>
 * @method string getAudioData() Obtain <p>Base64-encoded audio for cloning.</p>
 * @method void setAudioData(string $AudioData) Set <p>Base64-encoded audio for cloning.</p>
 * @method string getAudioUrl() Obtain <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method void setAudioUrl(string $AudioUrl) Set <p>Cloning audio URL. Valid when AudioData is empty.</p>
 * @method string getAudioFileId() Obtain <p>Clone file FileID. Valid when AudioData and AudioUrl are empty</p>
 * @method void setAudioFileId(string $AudioFileId) Set <p>Clone file FileID. Valid when AudioData and AudioUrl are empty</p>
 * @method string getLanguageBoost() Obtain <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method void setLanguageBoost(string $LanguageBoost) Set <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
 * @method string getExtParam() Obtain <p>Timbre clone expansion parameters. Supported fields of <code>ExtParam</code>: </p><ul><li><code>text</code> (string): Text for audition synthesis, up to 1000 characters; do not return the audition audio when empty or not passed.</li></ul>
 * @method void setExtParam(string $ExtParam) Set <p>Timbre clone expansion parameters. Supported fields of <code>ExtParam</code>: </p><ul><li><code>text</code> (string): Text for audition synthesis, up to 1000 characters; do not return the audition audio when empty or not passed.</li></ul>
 * @method string getSessionContext() Obtain <p>Identifies the source context. This is used to pass user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Identifies the source context. This is used to pass user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
 * @method string getSessionId() Obtain <p>Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
 */
class CloneVoiceAsyncRequest extends AbstractModel
{
    /**
     * @var string <p>VOD application ID. For customers who activate on-demand services on or after December 25, 2023, this field must be filled in with the app ID to access resources in VOD applications, whether in the default or a newly created application.</p>
     */
    public $SubAppId;

    /**
     * @var string <p>Base64-encoded audio for cloning.</p>
     */
    public $AudioData;

    /**
     * @var string <p>Cloning audio URL. Valid when AudioData is empty.</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>Clone file FileID. Valid when AudioData and AudioUrl are empty</p>
     */
    public $AudioFileId;

    /**
     * @var string <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     */
    public $LanguageBoost;

    /**
     * @var string <p>Timbre clone expansion parameters. Supported fields of <code>ExtParam</code>: </p><ul><li><code>text</code> (string): Text for audition synthesis, up to 1000 characters; do not return the audition audio when empty or not passed.</li></ul>
     */
    public $ExtParam;

    /**
     * @var string <p>Identifies the source context. This is used to pass user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var string <p>Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
     */
    public $SessionId;

    /**
     * @param string $SubAppId <p>VOD application ID. For customers who activate on-demand services on or after December 25, 2023, this field must be filled in with the app ID to access resources in VOD applications, whether in the default or a newly created application.</p>
     * @param string $AudioData <p>Base64-encoded audio for cloning.</p>
     * @param string $AudioUrl <p>Cloning audio URL. Valid when AudioData is empty.</p>
     * @param string $AudioFileId <p>Clone file FileID. Valid when AudioData and AudioUrl are empty</p>
     * @param string $LanguageBoost <p>Language enhancement, such as "zh" "en" "auto", default "auto"</p>
     * @param string $ExtParam <p>Timbre clone expansion parameters. Supported fields of <code>ExtParam</code>: </p><ul><li><code>text</code> (string): Text for audition synthesis, up to 1000 characters; do not return the audition audio when empty or not passed.</li></ul>
     * @param string $SessionContext <p>Identifies the source context. This is used to pass user request information. The value of this field will be returned in callbacks and task flow status change callbacks. The maximum length is 1000 characters.</p>
     * @param string $SessionId <p>Identification Code for Task Deduplication. If a request with the same identification code has been sent within the past 3 days, an error will be returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, it indicates no deduplication.</p>
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

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
