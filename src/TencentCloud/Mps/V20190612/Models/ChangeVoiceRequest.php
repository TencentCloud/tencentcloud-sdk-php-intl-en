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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeVoice request structure.
 *
 * @method string getAudioData() Obtain <p>base64-encoded audio to be converted.</p>
 * @method void setAudioData(string $AudioData) Set <p>base64-encoded audio to be converted.</p>
 * @method string getAudioUrl() Obtain <p>Audio Url to be switched. Valid when AudioData is empty.</p>
 * @method void setAudioUrl(string $AudioUrl) Set <p>Audio Url to be switched. Valid when AudioData is empty.</p>
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method SyncDubbingOutputOption getOutput() Obtain <p>Output parameters.</p>
 * @method void setOutput(SyncDubbingOutputOption $Output) Set <p>Output parameters.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p>
 */
class ChangeVoiceRequest extends AbstractModel
{
    /**
     * @var string <p>base64-encoded audio to be converted.</p>
     */
    public $AudioData;

    /**
     * @var string <p>Audio Url to be switched. Valid when AudioData is empty.</p>
     */
    public $AudioUrl;

    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var SyncDubbingOutputOption <p>Output parameters.</p>
     */
    public $Output;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p>
     */
    public $ExtParam;

    /**
     * @param string $AudioData <p>base64-encoded audio to be converted.</p>
     * @param string $AudioUrl <p>Audio Url to be switched. Valid when AudioData is empty.</p>
     * @param string $VoiceId <p>Voice ID.</p>
     * @param SyncDubbingOutputOption $Output <p>Output parameters.</p>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string.</p>
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
        if (array_key_exists("AudioData",$param) and $param["AudioData"] !== null) {
            $this->AudioData = $param["AudioData"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new SyncDubbingOutputOption();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
