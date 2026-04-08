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
 * @method string getVideoPath() Obtain <p>Dubbed video path.</p>
 * @method void setVideoPath(string $VideoPath) Set <p>Dubbed video path.</p>
 * @method string getSpeakerPath() Obtain <p>Tag file path</p>
 * @method void setSpeakerPath(string $SpeakerPath) Set <p>Tag file path</p>
 * @method string getVoiceId() Obtain <p>Voice type id</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice type id</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Storage location of the dubbed video.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Storage location of the dubbed video.</p>
 */
class AiAnalysisTaskDubbingOutput extends AbstractModel
{
    /**
     * @var string <p>Dubbed video path.</p>
     */
    public $VideoPath;

    /**
     * @var string <p>Tag file path</p>
     */
    public $SpeakerPath;

    /**
     * @var string <p>Voice type id</p>
     */
    public $VoiceId;

    /**
     * @var TaskOutputStorage <p>Storage location of the dubbed video.</p>
     */
    public $OutputStorage;

    /**
     * @param string $VideoPath <p>Dubbed video path.</p>
     * @param string $SpeakerPath <p>Tag file path</p>
     * @param string $VoiceId <p>Voice type id</p>
     * @param TaskOutputStorage $OutputStorage <p>Storage location of the dubbed video.</p>
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
