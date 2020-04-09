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
 * Input of media file composing task.
 *
 * @method array getTracks() Obtain List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials.
 * @method void setTracks(array $Tracks) Set List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials.
 * @method Canvas getCanvas() Obtain Canvas used for composing video file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCanvas(Canvas $Canvas) Set Canvas used for composing video file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ComposeMediaOutput getOutput() Obtain Information of output media file.
 * @method void setOutput(ComposeMediaOutput $Output) Set Information of output media file.
 */
class ComposeMediaTaskInput extends AbstractModel
{
    /**
     * @var array List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials.
     */
    public $Tracks;

    /**
     * @var Canvas Canvas used for composing video file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Canvas;

    /**
     * @var ComposeMediaOutput Information of output media file.
     */
    public $Output;

    /**
     * @param array $Tracks List of input media tracks, i.e., information of multiple tracks composed of video, audio, image, and other materials.
     * @param Canvas $Canvas Canvas used for composing video file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ComposeMediaOutput $Output Information of output media file.
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
