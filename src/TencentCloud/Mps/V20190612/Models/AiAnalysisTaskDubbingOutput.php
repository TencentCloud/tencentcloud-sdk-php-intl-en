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
 * Intelligent translation result information.
 *
 * @method string getVideoPath() Obtain Specifies the video path for translation.
 * @method void setVideoPath(string $VideoPath) Set Specifies the video path for translation.
 * @method string getSpeakerPath() Obtain Specifies the file path of the tag.

 * @method void setSpeakerPath(string $SpeakerPath) Set Specifies the file path of the tag.

 * @method string getVoiceId() Obtain Voice type ID.
 * @method void setVoiceId(string $VoiceId) Set Voice type ID.
 * @method TaskOutputStorage getOutputStorage() Obtain Specifies the storage location of the transcoded video.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Specifies the storage location of the transcoded video.
 */
class AiAnalysisTaskDubbingOutput extends AbstractModel
{
    /**
     * @var string Specifies the video path for translation.
     */
    public $VideoPath;

    /**
     * @var string Specifies the file path of the tag.

     */
    public $SpeakerPath;

    /**
     * @var string Voice type ID.
     */
    public $VoiceId;

    /**
     * @var TaskOutputStorage Specifies the storage location of the transcoded video.
     */
    public $OutputStorage;

    /**
     * @param string $VideoPath Specifies the video path for translation.
     * @param string $SpeakerPath Specifies the file path of the tag.

     * @param string $VoiceId Voice type ID.
     * @param TaskOutputStorage $OutputStorage Specifies the storage location of the transcoded video.
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
        if (array_key_exists("VideoPath",$param) and $param["VideoPath"] !== null) {
            $this->VideoPath = $param["VideoPath"];
        }

        if (array_key_exists("SpeakerPath",$param) and $param["SpeakerPath"] !== null) {
            $this->SpeakerPath = $param["SpeakerPath"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
