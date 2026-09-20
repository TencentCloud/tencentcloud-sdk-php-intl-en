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
 * @method integer getSubAppId() Obtain <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
 * @method string getVoiceName() Obtain <p>Timbre name. The text content can be up to 20 characters in length.</p>
 * @method void setVoiceName(string $VoiceName) Set <p>Timbre name. The text content can be up to 20 characters in length.</p>
 * @method string getVoiceUrl() Obtain <p>Link to obtain the voice type data file. Audio/video files in .mp3 / .wav / .mp4 / .mov formats are supported. The voice in the audio must be clean and noiseless, with only one voice, and the duration must be no shorter than 5 seconds and no longer than 30 seconds.</p>
 * @method void setVoiceUrl(string $VoiceUrl) Set <p>Link to obtain the voice type data file. Audio/video files in .mp3 / .wav / .mp4 / .mov formats are supported. The voice in the audio must be clean and noiseless, with only one voice, and the duration must be no shorter than 5 seconds and no longer than 30 seconds.</p>
 * @method string getVideoId() Obtain <p>Historic works ID, which can provide audio material by referring to historic works.</p>
 * @method void setVideoId(string $VideoId) Set <p>Historic works ID, which can provide audio material by referring to historic works.</p>
 * @method string getDisableModeration() Obtain <p>If the overseas custom timbre library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom timbre library.</li><li>False: Do not use the overseas custom timbre library.</li></ul>
 * @method void setDisableModeration(string $DisableModeration) Set <p>If the overseas custom timbre library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom timbre library.</li><li>False: Do not use the overseas custom timbre library.</li></ul>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass through user request information. The task complete callback will return the value of this field. Maximum length: 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass through user request information. The task complete callback will return the value of this field. Maximum length: 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
 */
class CreateAigcCustomVoiceRequest extends AbstractModel
{
    /**
     * @var integer <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>Timbre name. The text content can be up to 20 characters in length.</p>
     */
    public $VoiceName;

    /**
     * @var string <p>Link to obtain the voice type data file. Audio/video files in .mp3 / .wav / .mp4 / .mov formats are supported. The voice in the audio must be clean and noiseless, with only one voice, and the duration must be no shorter than 5 seconds and no longer than 30 seconds.</p>
     */
    public $VoiceUrl;

    /**
     * @var string <p>Historic works ID, which can provide audio material by referring to historic works.</p>
     */
    public $VideoId;

    /**
     * @var string <p>If the overseas custom timbre library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom timbre library.</li><li>False: Do not use the overseas custom timbre library.</li></ul>
     */
    public $DisableModeration;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass through user request information. The task complete callback will return the value of this field. Maximum length: 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>Video-on-demand (VOD) <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate VOD services from December 25, 2023, this field must be filled in with the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b></p>
     * @param string $VoiceName <p>Timbre name. The text content can be up to 20 characters in length.</p>
     * @param string $VoiceUrl <p>Link to obtain the voice type data file. Audio/video files in .mp3 / .wav / .mp4 / .mov formats are supported. The voice in the audio must be clean and noiseless, with only one voice, and the duration must be no shorter than 5 seconds and no longer than 30 seconds.</p>
     * @param string $VideoId <p>Historic works ID, which can provide audio material by referring to historic works.</p>
     * @param string $DisableModeration <p>If the overseas custom timbre library is enabled, you can pass in <code>True</code> to use it.</p><p>Enumeration values:</p><ul><li>True: Use the overseas custom timbre library.</li><li>False: Do not use the overseas custom timbre library.</li></ul>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass through user request information. The task complete callback will return the value of this field. Maximum length: 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
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
