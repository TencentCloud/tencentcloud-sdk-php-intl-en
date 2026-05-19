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
 * Create AIGC voice clone output information.
 *
 * @method string getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(string $TaskId) Set <p>Task ID.</p>
 * @method string getState() Obtain <p>Processing status.</p>
 * @method void setState(string $State) Set <p>Processing status.</p>
 * @method string getVoiceId() Obtain <p>voice_id customized by users. Do not return if the task fails.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>voice_id customized by users. Do not return if the task fails.</p>
 * @method string getDemoAudio() Obtain <p>If the audition text is passed in the request body, this parameter returns the audio audition in link format, otherwise this parameter is empty.</p>
 * @method void setDemoAudio(string $DemoAudio) Set <p>If the audition text is passed in the request body, this parameter returns the audio audition in link format, otherwise this parameter is empty.</p>
 * @method string getPayload() Obtain <p>Pass-through parameter passed in this call.</p>
 * @method void setPayload(string $Payload) Set <p>Pass-through parameter passed in this call.</p>
 * @method string getCreatedAt() Obtain <p>Task creation time.</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Task creation time.</p>
 */
class CreateAigcAudioCloneOutput extends AbstractModel
{
    /**
     * @var string <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var string <p>Processing status.</p>
     */
    public $State;

    /**
     * @var string <p>voice_id customized by users. Do not return if the task fails.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>If the audition text is passed in the request body, this parameter returns the audio audition in link format, otherwise this parameter is empty.</p>
     */
    public $DemoAudio;

    /**
     * @var string <p>Pass-through parameter passed in this call.</p>
     */
    public $Payload;

    /**
     * @var string <p>Task creation time.</p>
     */
    public $CreatedAt;

    /**
     * @param string $TaskId <p>Task ID.</p>
     * @param string $State <p>Processing status.</p>
     * @param string $VoiceId <p>voice_id customized by users. Do not return if the task fails.</p>
     * @param string $DemoAudio <p>If the audition text is passed in the request body, this parameter returns the audio audition in link format, otherwise this parameter is empty.</p>
     * @param string $Payload <p>Pass-through parameter passed in this call.</p>
     * @param string $CreatedAt <p>Task creation time.</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("DemoAudio",$param) and $param["DemoAudio"] !== null) {
            $this->DemoAudio = $param["DemoAudio"];
        }

        if (array_key_exists("Payload",$param) and $param["Payload"] !== null) {
            $this->Payload = $param["Payload"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
