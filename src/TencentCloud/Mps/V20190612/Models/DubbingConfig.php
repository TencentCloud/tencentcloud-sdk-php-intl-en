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
 * dubbing task configuration
 *
 * @method string getDubbingMode() Obtain <p>Dubbing type. Available values: FullAutoEmotionClone: fully automated high-emotion clone dubbing; RoleBasedSmartDubbing: intelligent dubbing by role; SingleVoice: specify a single voice type;</p>
 * @method void setDubbingMode(string $DubbingMode) Set <p>Dubbing type. Available values: FullAutoEmotionClone: fully automated high-emotion clone dubbing; RoleBasedSmartDubbing: intelligent dubbing by role; SingleVoice: specify a single voice type;</p>
 * @method integer getBackgroundVolume() Obtain <p>Background sound volume, range: 0-100</p><p>Default value: 80</p>
 * @method void setBackgroundVolume(integer $BackgroundVolume) Set <p>Background sound volume, range: 0-100</p><p>Default value: 80</p>
 * @method string getSecondaryTuning() Obtain <p>Secondary fine-tuning switch. Available values: <br>ON: enable secondary fine-tuning; <br>OFF: disable secondary fine-tuning;</p><p>Default value: OFF</p><p>It can be set to ON only for RoleBasedSmartDubbing.</p>
 * @method void setSecondaryTuning(string $SecondaryTuning) Set <p>Secondary fine-tuning switch. Available values: <br>ON: enable secondary fine-tuning; <br>OFF: disable secondary fine-tuning;</p><p>Default value: OFF</p><p>It can be set to ON only for RoleBasedSmartDubbing.</p>
 * @method string getVoiceId() Obtain <p>Specify voice tone</p><p>Valid only for SingleVoice and required for Create</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Specify voice tone</p><p>Valid only for SingleVoice and required for Create</p>
 * @method string getDubbingVersion() Obtain <p>Dubbing version. Available values: v1, v2</p><p>Default value: v2</p><p>Only takes effect in FullAutoEmotionClone (fully automated high-emotion clone dubbing) mode</p>
 * @method void setDubbingVersion(string $DubbingVersion) Set <p>Dubbing version. Available values: v1, v2</p><p>Default value: v2</p><p>Only takes effect in FullAutoEmotionClone (fully automated high-emotion clone dubbing) mode</p>
 */
class DubbingConfig extends AbstractModel
{
    /**
     * @var string <p>Dubbing type. Available values: FullAutoEmotionClone: fully automated high-emotion clone dubbing; RoleBasedSmartDubbing: intelligent dubbing by role; SingleVoice: specify a single voice type;</p>
     */
    public $DubbingMode;

    /**
     * @var integer <p>Background sound volume, range: 0-100</p><p>Default value: 80</p>
     */
    public $BackgroundVolume;

    /**
     * @var string <p>Secondary fine-tuning switch. Available values: <br>ON: enable secondary fine-tuning; <br>OFF: disable secondary fine-tuning;</p><p>Default value: OFF</p><p>It can be set to ON only for RoleBasedSmartDubbing.</p>
     */
    public $SecondaryTuning;

    /**
     * @var string <p>Specify voice tone</p><p>Valid only for SingleVoice and required for Create</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Dubbing version. Available values: v1, v2</p><p>Default value: v2</p><p>Only takes effect in FullAutoEmotionClone (fully automated high-emotion clone dubbing) mode</p>
     */
    public $DubbingVersion;

    /**
     * @param string $DubbingMode <p>Dubbing type. Available values: FullAutoEmotionClone: fully automated high-emotion clone dubbing; RoleBasedSmartDubbing: intelligent dubbing by role; SingleVoice: specify a single voice type;</p>
     * @param integer $BackgroundVolume <p>Background sound volume, range: 0-100</p><p>Default value: 80</p>
     * @param string $SecondaryTuning <p>Secondary fine-tuning switch. Available values: <br>ON: enable secondary fine-tuning; <br>OFF: disable secondary fine-tuning;</p><p>Default value: OFF</p><p>It can be set to ON only for RoleBasedSmartDubbing.</p>
     * @param string $VoiceId <p>Specify voice tone</p><p>Valid only for SingleVoice and required for Create</p>
     * @param string $DubbingVersion <p>Dubbing version. Available values: v1, v2</p><p>Default value: v2</p><p>Only takes effect in FullAutoEmotionClone (fully automated high-emotion clone dubbing) mode</p>
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
        if (array_key_exists("DubbingMode",$param) and $param["DubbingMode"] !== null) {
            $this->DubbingMode = $param["DubbingMode"];
        }

        if (array_key_exists("BackgroundVolume",$param) and $param["BackgroundVolume"] !== null) {
            $this->BackgroundVolume = $param["BackgroundVolume"];
        }

        if (array_key_exists("SecondaryTuning",$param) and $param["SecondaryTuning"] !== null) {
            $this->SecondaryTuning = $param["SecondaryTuning"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("DubbingVersion",$param) and $param["DubbingVersion"] !== null) {
            $this->DubbingVersion = $param["DubbingVersion"];
        }
    }
}
