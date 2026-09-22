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
 * Audio segment information on the audio track.
 *
 * @method string getSourceMedia() Obtain Media material source of the audio recording clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
 * @method void setSourceMedia(string $SourceMedia) Set Media material source of the audio recording clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
 * @method float getSourceMediaStartTime() Obtain Start time of the audio clip in the material file, in seconds. 0 means capturing from the start position of the material. Default value: 0.
 * @method void setSourceMediaStartTime(float $SourceMediaStartTime) Set Start time of the audio clip in the material file, in seconds. 0 means capturing from the start position of the material. Default value: 0.
 * @method float getDuration() Obtain Duration of the audio clip in seconds. Default: same as the material length, which means the entire material is captured.
 * @method void setDuration(float $Duration) Set Duration of the audio clip in seconds. Default: same as the material length, which means the entire material is captured.
 * @method float getTargetDuration() Obtain Target duration of the audio clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the audio clip will be fast-forwarded or slowed down to make the output segment duration equal to TargetDuration.</li>
 * @method void setTargetDuration(float $TargetDuration) Set Target duration of the audio clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the audio clip will be fast-forwarded or slowed down to make the output segment duration equal to TargetDuration.</li>
 * @method array getAudioOperations() Obtain Operation performed on the audio clip, for example, audio volume adjustment.
 * @method void setAudioOperations(array $AudioOperations) Set Operation performed on the audio clip, for example, audio volume adjustment.
 */
class AudioTrackItem extends AbstractModel
{
    /**
     * @var string Media material source of the audio recording clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
     */
    public $SourceMedia;

    /**
     * @var float Start time of the audio clip in the material file, in seconds. 0 means capturing from the start position of the material. Default value: 0.
     */
    public $SourceMediaStartTime;

    /**
     * @var float Duration of the audio clip in seconds. Default: same as the material length, which means the entire material is captured.
     */
    public $Duration;

    /**
     * @var float Target duration of the audio clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the audio clip will be fast-forwarded or slowed down to make the output segment duration equal to TargetDuration.</li>
     */
    public $TargetDuration;

    /**
     * @var array Operation performed on the audio clip, for example, audio volume adjustment.
     */
    public $AudioOperations;

    /**
     * @param string $SourceMedia Media material source of the audio recording clip, which can be:
<li>Media file ID for VOD;</li>
<li>Download URL of other media files.</li>
Note: When using the download URL of another media file as the material source and access control (such as hotlink protection) is enabled, the URL needs to carry access control parameters (such as a hotlink protection signature).
     * @param float $SourceMediaStartTime Start time of the audio clip in the material file, in seconds. 0 means capturing from the start position of the material. Default value: 0.
     * @param float $Duration Duration of the audio clip in seconds. Default: same as the material length, which means the entire material is captured.
     * @param float $TargetDuration Target duration of the audio clip, in seconds.
<li>If TargetDuration is not specified or set to 0, it means the target duration is the same as Duration;</li>
<li>When TargetDuration is set to a value more than 0, the audio clip will be fast-forwarded or slowed down to make the output segment duration equal to TargetDuration.</li>
     * @param array $AudioOperations Operation performed on the audio clip, for example, audio volume adjustment.
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
        if (array_key_exists("SourceMedia",$param) and $param["SourceMedia"] !== null) {
            $this->SourceMedia = $param["SourceMedia"];
        }

        if (array_key_exists("SourceMediaStartTime",$param) and $param["SourceMediaStartTime"] !== null) {
            $this->SourceMediaStartTime = $param["SourceMediaStartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("TargetDuration",$param) and $param["TargetDuration"] !== null) {
            $this->TargetDuration = $param["TargetDuration"];
        }

        if (array_key_exists("AudioOperations",$param) and $param["AudioOperations"] !== null) {
            $this->AudioOperations = [];
            foreach ($param["AudioOperations"] as $key => $value){
                $obj = new AudioTransform();
                $obj->deserialize($value);
                array_push($this->AudioOperations, $obj);
            }
        }
    }
}
