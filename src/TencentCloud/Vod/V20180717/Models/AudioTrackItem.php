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
 * 
 *
 * @method string getSourceMedia() Obtain 
 * @method void setSourceMedia(string $SourceMedia) Set 
 * @method float getSourceMediaStartTime() Obtain 
 * @method void setSourceMediaStartTime(float $SourceMediaStartTime) Set 
 * @method float getDuration() Obtain 
 * @method void setDuration(float $Duration) Set 
 * @method float getTargetDuration() Obtain 
 * @method void setTargetDuration(float $TargetDuration) Set 
 * @method array getAudioOperations() Obtain 
 * @method void setAudioOperations(array $AudioOperations) Set 
 */
class AudioTrackItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $SourceMedia;

    /**
     * @var float 
     */
    public $SourceMediaStartTime;

    /**
     * @var float 
     */
    public $Duration;

    /**
     * @var float 
     */
    public $TargetDuration;

    /**
     * @var array 
     */
    public $AudioOperations;

    /**
     * @param string $SourceMedia 
     * @param float $SourceMediaStartTime 
     * @param float $Duration 
     * @param float $TargetDuration 
     * @param array $AudioOperations 
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
