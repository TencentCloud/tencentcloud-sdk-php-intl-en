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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The audio element information of a video editing/compositing task.
 *
 * @method ComposeSourceMedia getSourceMedia() Obtain The media information of the element.
 * @method void setSourceMedia(ComposeSourceMedia $SourceMedia) Set The media information of the element.
 * @method ComposeTrackTime getTrackTime() Obtain The time of the element in the timeline. If this is not specified, the element will follow the previous element.
 * @method void setTrackTime(ComposeTrackTime $TrackTime) Set The time of the element in the timeline. If this is not specified, the element will follow the previous element.
 * @method array getAudioOperations() Obtain The operations performed, such as muting.
 * @method void setAudioOperations(array $AudioOperations) Set The operations performed, such as muting.
 */
class ComposeAudioItem extends AbstractModel
{
    /**
     * @var ComposeSourceMedia The media information of the element.
     */
    public $SourceMedia;

    /**
     * @var ComposeTrackTime The time of the element in the timeline. If this is not specified, the element will follow the previous element.
     */
    public $TrackTime;

    /**
     * @var array The operations performed, such as muting.
     */
    public $AudioOperations;

    /**
     * @param ComposeSourceMedia $SourceMedia The media information of the element.
     * @param ComposeTrackTime $TrackTime The time of the element in the timeline. If this is not specified, the element will follow the previous element.
     * @param array $AudioOperations The operations performed, such as muting.
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
            $this->SourceMedia = new ComposeSourceMedia();
            $this->SourceMedia->deserialize($param["SourceMedia"]);
        }

        if (array_key_exists("TrackTime",$param) and $param["TrackTime"] !== null) {
            $this->TrackTime = new ComposeTrackTime();
            $this->TrackTime->deserialize($param["TrackTime"]);
        }

        if (array_key_exists("AudioOperations",$param) and $param["AudioOperations"] !== null) {
            $this->AudioOperations = [];
            foreach ($param["AudioOperations"] as $key => $value){
                $obj = new ComposeAudioOperation();
                $obj->deserialize($value);
                array_push($this->AudioOperations, $obj);
            }
        }
    }
}
