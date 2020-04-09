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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio segment information of audio track.
 *
 * @method string getSourceMedia() Obtain Source of media file for audio material, which can be an ID of a VOD file or URL of another file.
 * @method void setSourceMedia(string $SourceMedia) Set Source of media file for audio material, which can be an ID of a VOD file or URL of another file.
 * @method float getSourceMediaStartTime() Obtain Start time of audio segment in material file in seconds. Default value: 0, which means to start capturing from the beginning position of the material.
 * @method void setSourceMediaStartTime(float $SourceMediaStartTime) Set Start time of audio segment in material file in seconds. Default value: 0, which means to start capturing from the beginning position of the material.
 * @method float getDuration() Obtain Audio segment duration in seconds. By default, the length of the material will be used, which means that the entire material will be captured.
 * @method void setDuration(float $Duration) Set Audio segment duration in seconds. By default, the length of the material will be used, which means that the entire material will be captured.
 * @method array getAudioOperations() Obtain Operation on audio segment, such as volume adjustment.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioOperations(array $AudioOperations) Set Operation on audio segment, such as volume adjustment.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AudioTrackItem extends AbstractModel
{
    /**
     * @var string Source of media file for audio material, which can be an ID of a VOD file or URL of another file.
     */
    public $SourceMedia;

    /**
     * @var float Start time of audio segment in material file in seconds. Default value: 0, which means to start capturing from the beginning position of the material.
     */
    public $SourceMediaStartTime;

    /**
     * @var float Audio segment duration in seconds. By default, the length of the material will be used, which means that the entire material will be captured.
     */
    public $Duration;

    /**
     * @var array Operation on audio segment, such as volume adjustment.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioOperations;

    /**
     * @param string $SourceMedia Source of media file for audio material, which can be an ID of a VOD file or URL of another file.
     * @param float $SourceMediaStartTime Start time of audio segment in material file in seconds. Default value: 0, which means to start capturing from the beginning position of the material.
     * @param float $Duration Audio segment duration in seconds. By default, the length of the material will be used, which means that the entire material will be captured.
     * @param array $AudioOperations Operation on audio segment, such as volume adjustment.
Note: this field may return null, indicating that no valid values can be obtained.
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
