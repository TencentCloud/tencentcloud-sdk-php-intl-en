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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * For streams with multiple audio/video tracks, you can specify the tracks to use.
 *
 * @method array getAudioPID() Obtain For streams containing multiple audio tracks, specify the audio track to use by entering a PID. The PID can be a positive integer between 1 and 8191.
 * @method void setAudioPID(array $AudioPID) Set For streams containing multiple audio tracks, specify the audio track to use by entering a PID. The PID can be a positive integer between 1 and 8191.
 * @method array getVideoPID() Obtain For streams containing multiple video tracks, specify the video track to be used by entering a PID. You can enter a positive integer between 1 and 8191 for the PID.
 * @method void setVideoPID(array $VideoPID) Set For streams containing multiple video tracks, specify the video track to be used by entering a PID. You can enter a positive integer between 1 and 8191 for the PID.
 */
class PidSelector extends AbstractModel
{
    /**
     * @var array For streams containing multiple audio tracks, specify the audio track to use by entering a PID. The PID can be a positive integer between 1 and 8191.
     */
    public $AudioPID;

    /**
     * @var array For streams containing multiple video tracks, specify the video track to be used by entering a PID. You can enter a positive integer between 1 and 8191 for the PID.
     */
    public $VideoPID;

    /**
     * @param array $AudioPID For streams containing multiple audio tracks, specify the audio track to use by entering a PID. The PID can be a positive integer between 1 and 8191.
     * @param array $VideoPID For streams containing multiple video tracks, specify the video track to be used by entering a PID. You can enter a positive integer between 1 and 8191 for the PID.
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
        if (array_key_exists("AudioPID",$param) and $param["AudioPID"] !== null) {
            $this->AudioPID = $param["AudioPID"];
        }

        if (array_key_exists("VideoPID",$param) and $param["VideoPID"] !== null) {
            $this->VideoPID = $param["VideoPID"];
        }
    }
}
