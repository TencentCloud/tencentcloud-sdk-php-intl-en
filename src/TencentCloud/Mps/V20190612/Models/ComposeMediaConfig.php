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
 * The information of a video editing/compositing task.

The figure below outlines the relationships among tracks, elements, and the timeline.

![image](https://ie-mps-1258344699.cos.ap-nanjing.tencentcos.cn/common/cloud/EditMedia-Compose-Track-Item-en.png)
 *
 * @method ComposeTargetInfo getTargetInfo() Obtain The information of the output video.
 * @method void setTargetInfo(ComposeTargetInfo $TargetInfo) Set The information of the output video.
 * @method ComposeCanvas getCanvas() Obtain The canvas information of the output video.
 * @method void setCanvas(ComposeCanvas $Canvas) Set The canvas information of the output video.
 * @method array getStyles() Obtain The global styles. This parameter is used together with `Tracks` to specify styles, such as the subtitle style.
 * @method void setStyles(array $Styles) Set The global styles. This parameter is used together with `Tracks` to specify styles, such as the subtitle style.
 * @method array getTracks() Obtain The information of media tracks (consisting of video, audio, image, and text elements) used to composite the video. About tracks and the timeline:
<ul><li>The timeline of a track is the same as the timeline of the output video. </li><li>The elements of different tracks are overlaid at the same time point in the timeline.</li><ul><li>Video, image, and text elements are overlaid according to their track number, with the first track on top. </li><li>Audio elements are mixed. </li></ul></ul>Note: The different elements of the same track cannot be overlaid (except subtitles).
 * @method void setTracks(array $Tracks) Set The information of media tracks (consisting of video, audio, image, and text elements) used to composite the video. About tracks and the timeline:
<ul><li>The timeline of a track is the same as the timeline of the output video. </li><li>The elements of different tracks are overlaid at the same time point in the timeline.</li><ul><li>Video, image, and text elements are overlaid according to their track number, with the first track on top. </li><li>Audio elements are mixed. </li></ul></ul>Note: The different elements of the same track cannot be overlaid (except subtitles).
 */
class ComposeMediaConfig extends AbstractModel
{
    /**
     * @var ComposeTargetInfo The information of the output video.
     */
    public $TargetInfo;

    /**
     * @var ComposeCanvas The canvas information of the output video.
     */
    public $Canvas;

    /**
     * @var array The global styles. This parameter is used together with `Tracks` to specify styles, such as the subtitle style.
     */
    public $Styles;

    /**
     * @var array The information of media tracks (consisting of video, audio, image, and text elements) used to composite the video. About tracks and the timeline:
<ul><li>The timeline of a track is the same as the timeline of the output video. </li><li>The elements of different tracks are overlaid at the same time point in the timeline.</li><ul><li>Video, image, and text elements are overlaid according to their track number, with the first track on top. </li><li>Audio elements are mixed. </li></ul></ul>Note: The different elements of the same track cannot be overlaid (except subtitles).
     */
    public $Tracks;

    /**
     * @param ComposeTargetInfo $TargetInfo The information of the output video.
     * @param ComposeCanvas $Canvas The canvas information of the output video.
     * @param array $Styles The global styles. This parameter is used together with `Tracks` to specify styles, such as the subtitle style.
     * @param array $Tracks The information of media tracks (consisting of video, audio, image, and text elements) used to composite the video. About tracks and the timeline:
<ul><li>The timeline of a track is the same as the timeline of the output video. </li><li>The elements of different tracks are overlaid at the same time point in the timeline.</li><ul><li>Video, image, and text elements are overlaid according to their track number, with the first track on top. </li><li>Audio elements are mixed. </li></ul></ul>Note: The different elements of the same track cannot be overlaid (except subtitles).
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
        if (array_key_exists("TargetInfo",$param) and $param["TargetInfo"] !== null) {
            $this->TargetInfo = new ComposeTargetInfo();
            $this->TargetInfo->deserialize($param["TargetInfo"]);
        }

        if (array_key_exists("Canvas",$param) and $param["Canvas"] !== null) {
            $this->Canvas = new ComposeCanvas();
            $this->Canvas->deserialize($param["Canvas"]);
        }

        if (array_key_exists("Styles",$param) and $param["Styles"] !== null) {
            $this->Styles = [];
            foreach ($param["Styles"] as $key => $value){
                $obj = new ComposeStyles();
                $obj->deserialize($value);
                array_push($this->Styles, $obj);
            }
        }

        if (array_key_exists("Tracks",$param) and $param["Tracks"] !== null) {
            $this->Tracks = [];
            foreach ($param["Tracks"] as $key => $value){
                $obj = new ComposeMediaTrack();
                $obj->deserialize($value);
                array_push($this->Tracks, $obj);
            }
        }
    }
}
