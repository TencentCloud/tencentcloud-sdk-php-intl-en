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
 * Input of a media file creation task.
 *
 * @method array getTracks() Obtain Input media track list, including multiple track information composed of materials such as video, audio, and images.
 * @method void setTracks(array $Tracks) Set Input media track list, including multiple track information composed of materials such as video, audio, and images.
 * @method Canvas getCanvas() Obtain Canvas used when making video files.
 * @method void setCanvas(Canvas $Canvas) Set Canvas used when making video files.
 * @method ComposeMediaOutput getOutput() Obtain Output media file information.
 * @method void setOutput(ComposeMediaOutput $Output) Set Output media file information.
 */
class ComposeMediaTaskInput extends AbstractModel
{
    /**
     * @var array Input media track list, including multiple track information composed of materials such as video, audio, and images.
     */
    public $Tracks;

    /**
     * @var Canvas Canvas used when making video files.
     */
    public $Canvas;

    /**
     * @var ComposeMediaOutput Output media file information.
     */
    public $Output;

    /**
     * @param array $Tracks Input media track list, including multiple track information composed of materials such as video, audio, and images.
     * @param Canvas $Canvas Canvas used when making video files.
     * @param ComposeMediaOutput $Output Output media file information.
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
        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = [];
            foreach ($param["Tracks"] as $key => $value){
                $obj = new MediaTrack();
                $obj->deserialize($value);
                array_push($this->Tracks, $obj);
            }
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new Canvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ComposeMediaOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
