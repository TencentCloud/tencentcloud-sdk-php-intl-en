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
 * The type of media processing task.
 *
 * @method array getTranscodeTaskSet() Obtain List of transcoding tasks.
 * @method void setTranscodeTaskSet(array $TranscodeTaskSet) Set List of transcoding tasks.
 * @method array getAnimatedGraphicTaskSet() Obtain List of animated image generating tasks.
 * @method void setAnimatedGraphicTaskSet(array $AnimatedGraphicTaskSet) Set List of animated image generating tasks.
 * @method array getSnapshotByTimeOffsetTaskSet() Obtain List of time point screencapturing tasks.
 * @method void setSnapshotByTimeOffsetTaskSet(array $SnapshotByTimeOffsetTaskSet) Set List of time point screencapturing tasks.
 * @method array getSampleSnapshotTaskSet() Obtain List of sampled screencapturing tasks.
 * @method void setSampleSnapshotTaskSet(array $SampleSnapshotTaskSet) Set List of sampled screencapturing tasks.
 * @method array getImageSpriteTaskSet() Obtain List of image sprite generating tasks.
 * @method void setImageSpriteTaskSet(array $ImageSpriteTaskSet) Set List of image sprite generating tasks.
 * @method array getAdaptiveDynamicStreamingTaskSet() Obtain List of adaptive bitrate streaming tasks.
 * @method void setAdaptiveDynamicStreamingTaskSet(array $AdaptiveDynamicStreamingTaskSet) Set List of adaptive bitrate streaming tasks.
 */
class MediaProcessTaskInput extends AbstractModel
{
    /**
     * @var array List of transcoding tasks.
     */
    public $TranscodeTaskSet;

    /**
     * @var array List of animated image generating tasks.
     */
    public $AnimatedGraphicTaskSet;

    /**
     * @var array List of time point screencapturing tasks.
     */
    public $SnapshotByTimeOffsetTaskSet;

    /**
     * @var array List of sampled screencapturing tasks.
     */
    public $SampleSnapshotTaskSet;

    /**
     * @var array List of image sprite generating tasks.
     */
    public $ImageSpriteTaskSet;

    /**
     * @var array List of adaptive bitrate streaming tasks.
     */
    public $AdaptiveDynamicStreamingTaskSet;

    /**
     * @param array $TranscodeTaskSet List of transcoding tasks.
     * @param array $AnimatedGraphicTaskSet List of animated image generating tasks.
     * @param array $SnapshotByTimeOffsetTaskSet List of time point screencapturing tasks.
     * @param array $SampleSnapshotTaskSet List of sampled screencapturing tasks.
     * @param array $ImageSpriteTaskSet List of image sprite generating tasks.
     * @param array $AdaptiveDynamicStreamingTaskSet List of adaptive bitrate streaming tasks.
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
        if (array_key_exists("TranscodeTaskSet",$param) and $param["TranscodeTaskSet"] !== null) {
            $this->TranscodeTaskSet = [];
            foreach ($param["TranscodeTaskSet"] as $key => $value){
                $obj = new TranscodeTaskInput();
                $obj->deserialize($value);
                array_push($this->TranscodeTaskSet, $obj);
            }
        }

        if (array_key_exists("AnimatedGraphicTaskSet",$param) and $param["AnimatedGraphicTaskSet"] !== null) {
            $this->AnimatedGraphicTaskSet = [];
            foreach ($param["AnimatedGraphicTaskSet"] as $key => $value){
                $obj = new AnimatedGraphicTaskInput();
                $obj->deserialize($value);
                array_push($this->AnimatedGraphicTaskSet, $obj);
            }
        }

        if (array_key_exists("SnapshotByTimeOffsetTaskSet",$param) and $param["SnapshotByTimeOffsetTaskSet"] !== null) {
            $this->SnapshotByTimeOffsetTaskSet = [];
            foreach ($param["SnapshotByTimeOffsetTaskSet"] as $key => $value){
                $obj = new SnapshotByTimeOffsetTaskInput();
                $obj->deserialize($value);
                array_push($this->SnapshotByTimeOffsetTaskSet, $obj);
            }
        }

        if (array_key_exists("SampleSnapshotTaskSet",$param) and $param["SampleSnapshotTaskSet"] !== null) {
            $this->SampleSnapshotTaskSet = [];
            foreach ($param["SampleSnapshotTaskSet"] as $key => $value){
                $obj = new SampleSnapshotTaskInput();
                $obj->deserialize($value);
                array_push($this->SampleSnapshotTaskSet, $obj);
            }
        }

        if (array_key_exists("ImageSpriteTaskSet",$param) and $param["ImageSpriteTaskSet"] !== null) {
            $this->ImageSpriteTaskSet = [];
            foreach ($param["ImageSpriteTaskSet"] as $key => $value){
                $obj = new ImageSpriteTaskInput();
                $obj->deserialize($value);
                array_push($this->ImageSpriteTaskSet, $obj);
            }
        }

        if (array_key_exists("AdaptiveDynamicStreamingTaskSet",$param) and $param["AdaptiveDynamicStreamingTaskSet"] !== null) {
            $this->AdaptiveDynamicStreamingTaskSet = [];
            foreach ($param["AdaptiveDynamicStreamingTaskSet"] as $key => $value){
                $obj = new AdaptiveDynamicStreamingTaskInput();
                $obj->deserialize($value);
                array_push($this->AdaptiveDynamicStreamingTaskSet, $obj);
            }
        }
    }
}
