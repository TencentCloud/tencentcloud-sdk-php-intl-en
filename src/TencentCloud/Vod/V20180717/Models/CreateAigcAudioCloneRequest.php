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
 * CreateAigcAudioClone request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
 * @method AigcAudioCloneInputFileInfo getAudioFileInfo() Obtain <p>Original audio file (ensure it is accessible). The model will use the voice type of the audio passed in this parameter as an example to clone the voice type.  </p><p>Input limitations: Note 1: Supported audio formats: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be at least 10 seconds and no more than 5 minutes; Note 3: The uploaded audio file size must not exceed 20 mb; Note 4: The audio content must not involve copyright, otherwise it will be removed or terminated.</p>
 * @method void setAudioFileInfo(AigcAudioCloneInputFileInfo $AudioFileInfo) Set <p>Original audio file (ensure it is accessible). The model will use the voice type of the audio passed in this parameter as an example to clone the voice type.  </p><p>Input limitations: Note 1: Supported audio formats: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be at least 10 seconds and no more than 5 minutes; Note 3: The uploaded audio file size must not exceed 20 mb; Note 4: The audio content must not involve copyright, otherwise it will be removed or terminated.</p>
 * @method string getVoiceId() Obtain <p>Custom voice ID, for example: "vidu01".</p><p>Input limitations:</p><ul><li>Length range of a custom voice_ID: [8,256];</li><li>The first character must be an English letter;</li><li>Numbers, letters, hyphens, and underscores are allowed;</li><li>The last character cannot be - or _</li><li>voice_ID cannot duplicate an existing ID, otherwise an error will occur.</li></ul>
 * @method void setVoiceId(string $VoiceId) Set <p>Custom voice ID, for example: "vidu01".</p><p>Input limitations:</p><ul><li>Length range of a custom voice_ID: [8,256];</li><li>The first character must be an English letter;</li><li>Numbers, letters, hyphens, and underscores are allowed;</li><li>The last character cannot be - or _</li><li>voice_ID cannot duplicate an existing ID, otherwise an error will occur.</li></ul>
 * @method string getText() Obtain <p>Replicate audition parameters.</p><p>Parameter format: up to 1000 characters. The model will use the cloned voice type to read aloud the text content and return an audition audio link. Note: Audition will be charged based on the number of characters for text to speech.</p>
 * @method void setText(string $Text) Set <p>Replicate audition parameters.</p><p>Parameter format: up to 1000 characters. The model will use the cloned voice type to read aloud the text content and return an audition audio link. Note: Audition will be charged based on the number of characters for text to speech.</p>
 * @method AigcAudioCloneInputFileInfo getPromptAudioFileInfo() Obtain <p>Sample audio for voice replication. Providing this parameter will help in enhancing the voice similarity and stability of text to speech. If you use this parameter, you need to upload a short sample audio at the same time.</p><p>Input limitations: Note 1: Audio formats supported: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be less than 8 seconds; Note 3: The uploaded audio file size should be no more than 20 mb.</p>
 * @method void setPromptAudioFileInfo(AigcAudioCloneInputFileInfo $PromptAudioFileInfo) Set <p>Sample audio for voice replication. Providing this parameter will help in enhancing the voice similarity and stability of text to speech. If you use this parameter, you need to upload a short sample audio at the same time.</p><p>Input limitations: Note 1: Audio formats supported: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be less than 8 seconds; Note 3: The uploaded audio file size should be no more than 20 mb.</p>
 * @method string getPromptText() Obtain <p>The text content corresponding to the sample audio must match the audio content, and punctuation is required at the end of each sentence.</p>
 * @method void setPromptText(string $PromptText) Set <p>The text content corresponding to the sample audio must match the audio content, and punctuation is required at the end of each sentence.</p>
 * @method string getPayload() Obtain <p>Pass-through parameter. Input parameter limit: without any processing, only data transmission. Note: up to 1048576 characters</p>
 * @method void setPayload(string $Payload) Set <p>Pass-through parameter. Input parameter limit: without any processing, only data transmission. Note: up to 1048576 characters</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
 * @method string getExtInfo() Obtain <p>Reserved field, used for special purposes.</p>
 * @method void setExtInfo(string $ExtInfo) Set <p>Reserved field, used for special purposes.</p>
 */
class CreateAigcAudioCloneRequest extends AbstractModel
{
    /**
     * @var integer <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
     */
    public $SubAppId;

    /**
     * @var AigcAudioCloneInputFileInfo <p>Original audio file (ensure it is accessible). The model will use the voice type of the audio passed in this parameter as an example to clone the voice type.  </p><p>Input limitations: Note 1: Supported audio formats: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be at least 10 seconds and no more than 5 minutes; Note 3: The uploaded audio file size must not exceed 20 mb; Note 4: The audio content must not involve copyright, otherwise it will be removed or terminated.</p>
     */
    public $AudioFileInfo;

    /**
     * @var string <p>Custom voice ID, for example: "vidu01".</p><p>Input limitations:</p><ul><li>Length range of a custom voice_ID: [8,256];</li><li>The first character must be an English letter;</li><li>Numbers, letters, hyphens, and underscores are allowed;</li><li>The last character cannot be - or _</li><li>voice_ID cannot duplicate an existing ID, otherwise an error will occur.</li></ul>
     */
    public $VoiceId;

    /**
     * @var string <p>Replicate audition parameters.</p><p>Parameter format: up to 1000 characters. The model will use the cloned voice type to read aloud the text content and return an audition audio link. Note: Audition will be charged based on the number of characters for text to speech.</p>
     */
    public $Text;

    /**
     * @var AigcAudioCloneInputFileInfo <p>Sample audio for voice replication. Providing this parameter will help in enhancing the voice similarity and stability of text to speech. If you use this parameter, you need to upload a short sample audio at the same time.</p><p>Input limitations: Note 1: Audio formats supported: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be less than 8 seconds; Note 3: The uploaded audio file size should be no more than 20 mb.</p>
     */
    public $PromptAudioFileInfo;

    /**
     * @var string <p>The text content corresponding to the sample audio must match the audio content, and punctuation is required at the end of each sentence.</p>
     */
    public $PromptText;

    /**
     * @var string <p>Pass-through parameter. Input parameter limit: without any processing, only data transmission. Note: up to 1048576 characters</p>
     */
    public $Payload;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>Reserved field, used for special purposes.</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>On-demand <a href="https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1">application</a> ID. For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications, whether in the default application or a newly created application.</b></p>
     * @param AigcAudioCloneInputFileInfo $AudioFileInfo <p>Original audio file (ensure it is accessible). The model will use the voice type of the audio passed in this parameter as an example to clone the voice type.  </p><p>Input limitations: Note 1: Supported audio formats: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be at least 10 seconds and no more than 5 minutes; Note 3: The uploaded audio file size must not exceed 20 mb; Note 4: The audio content must not involve copyright, otherwise it will be removed or terminated.</p>
     * @param string $VoiceId <p>Custom voice ID, for example: "vidu01".</p><p>Input limitations:</p><ul><li>Length range of a custom voice_ID: [8,256];</li><li>The first character must be an English letter;</li><li>Numbers, letters, hyphens, and underscores are allowed;</li><li>The last character cannot be - or _</li><li>voice_ID cannot duplicate an existing ID, otherwise an error will occur.</li></ul>
     * @param string $Text <p>Replicate audition parameters.</p><p>Parameter format: up to 1000 characters. The model will use the cloned voice type to read aloud the text content and return an audition audio link. Note: Audition will be charged based on the number of characters for text to speech.</p>
     * @param AigcAudioCloneInputFileInfo $PromptAudioFileInfo <p>Sample audio for voice replication. Providing this parameter will help in enhancing the voice similarity and stability of text to speech. If you use this parameter, you need to upload a short sample audio at the same time.</p><p>Input limitations: Note 1: Audio formats supported: mp3, m4a, wav; Note 2: The duration of the uploaded audio file should be less than 8 seconds; Note 3: The uploaded audio file size should be no more than 20 mb.</p>
     * @param string $PromptText <p>The text content corresponding to the sample audio must match the audio content, and punctuation is required at the end of each sentence.</p>
     * @param string $Payload <p>Pass-through parameter. Input parameter limit: without any processing, only data transmission. Note: up to 1048576 characters</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context. This is used to pass user request information. The audio and video quality revival complete callback returns the value of this field. The maximum length is 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If this is not specified, the default value is 0.</p>
     * @param string $ExtInfo <p>Reserved field, used for special purposes.</p>
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

        if (array_key_exists("AudioFileInfo",$param) and $param["AudioFileInfo"] !== null) {
            $this->AudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->AudioFileInfo->deserialize($param["AudioFileInfo"]);
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("PromptAudioFileInfo",$param) and $param["PromptAudioFileInfo"] !== null) {
            $this->PromptAudioFileInfo = new AigcAudioCloneInputFileInfo();
            $this->PromptAudioFileInfo->deserialize($param["PromptAudioFileInfo"]);
        }

        if (array_key_exists("PromptText",$param) and $param["PromptText"] !== null) {
            $this->PromptText = $param["PromptText"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
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

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
