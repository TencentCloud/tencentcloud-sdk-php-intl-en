<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio selector.
 *
 * @method string getName() Obtain Audio name, which can contain 1-32 letters, digits, and underscores.
 * @method void setName(string $Name) Set Audio name, which can contain 1-32 letters, digits, and underscores.
 * @method AudioPidSelectionInfo getAudioPidSelection() Obtain Audio `Pid` selection.
 * @method void setAudioPidSelection(AudioPidSelectionInfo $AudioPidSelection) Set Audio `Pid` selection.
 * @method string getAudioSelectorType() Obtain Audio input type, optional values: 'PID_SELECTOR' 'TRACK_SELECTOR', default value PID_SELECTOR.
 * @method void setAudioSelectorType(string $AudioSelectorType) Set Audio input type, optional values: 'PID_SELECTOR' 'TRACK_SELECTOR', default value PID_SELECTOR.
 * @method InputTracks getAudioTrackSelection() Obtain AudioTrack configuration.
 * @method void setAudioTrackSelection(InputTracks $AudioTrackSelection) Set AudioTrack configuration.
 */
class AudioSelectorInfo extends AbstractModel
{
    /**
     * @var string Audio name, which can contain 1-32 letters, digits, and underscores.
     */
    public $Name;

    /**
     * @var AudioPidSelectionInfo Audio `Pid` selection.
     */
    public $AudioPidSelection;

    /**
     * @var string Audio input type, optional values: 'PID_SELECTOR' 'TRACK_SELECTOR', default value PID_SELECTOR.
     */
    public $AudioSelectorType;

    /**
     * @var InputTracks AudioTrack configuration.
     */
    public $AudioTrackSelection;

    /**
     * @param string $Name Audio name, which can contain 1-32 letters, digits, and underscores.
     * @param AudioPidSelectionInfo $AudioPidSelection Audio `Pid` selection.
     * @param string $AudioSelectorType Audio input type, optional values: 'PID_SELECTOR' 'TRACK_SELECTOR', default value PID_SELECTOR.
     * @param InputTracks $AudioTrackSelection AudioTrack configuration.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AudioPidSelection",$param) and $param["AudioPidSelection"] !== null) {
            $this->AudioPidSelection = new AudioPidSelectionInfo();
            $this->AudioPidSelection->deserialize($param["AudioPidSelection"]);
        }

        if (array_key_exists("AudioSelectorType",$param) and $param["AudioSelectorType"] !== null) {
            $this->AudioSelectorType = $param["AudioSelectorType"];
        }

        if (array_key_exists("AudioTrackSelection",$param) and $param["AudioTrackSelection"] !== null) {
            $this->AudioTrackSelection = new InputTracks();
            $this->AudioTrackSelection->deserialize($param["AudioTrackSelection"]);
        }
    }
}
