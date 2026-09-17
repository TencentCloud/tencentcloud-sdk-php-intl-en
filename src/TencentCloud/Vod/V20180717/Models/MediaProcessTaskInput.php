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
 * @method array getTranscodeTaskSet() Obtain 
 * @method void setTranscodeTaskSet(array $TranscodeTaskSet) Set 
 * @method array getAnimatedGraphicTaskSet() Obtain 
 * @method void setAnimatedGraphicTaskSet(array $AnimatedGraphicTaskSet) Set 
 * @method array getSnapshotByTimeOffsetTaskSet() Obtain 
 * @method void setSnapshotByTimeOffsetTaskSet(array $SnapshotByTimeOffsetTaskSet) Set 
 * @method array getSampleSnapshotTaskSet() Obtain 
 * @method void setSampleSnapshotTaskSet(array $SampleSnapshotTaskSet) Set 
 * @method array getImageSpriteTaskSet() Obtain 
 * @method void setImageSpriteTaskSet(array $ImageSpriteTaskSet) Set 
 * @method array getCoverBySnapshotTaskSet() Obtain 
 * @method void setCoverBySnapshotTaskSet(array $CoverBySnapshotTaskSet) Set 
 * @method array getAdaptiveDynamicStreamingTaskSet() Obtain 
 * @method void setAdaptiveDynamicStreamingTaskSet(array $AdaptiveDynamicStreamingTaskSet) Set 
 */
class MediaProcessTaskInput extends AbstractModel
{
    /**
     * @var array 
     */
    public $TranscodeTaskSet;

    /**
     * @var array 
     */
    public $AnimatedGraphicTaskSet;

    /**
     * @var array 
     */
    public $SnapshotByTimeOffsetTaskSet;

    /**
     * @var array 
     */
    public $SampleSnapshotTaskSet;

    /**
     * @var array 
     */
    public $ImageSpriteTaskSet;

    /**
     * @var array 
     */
    public $CoverBySnapshotTaskSet;

    /**
     * @var array 
     */
    public $AdaptiveDynamicStreamingTaskSet;

    /**
     * @param array $TranscodeTaskSet 
     * @param array $AnimatedGraphicTaskSet 
     * @param array $SnapshotByTimeOffsetTaskSet 
     * @param array $SampleSnapshotTaskSet 
     * @param array $ImageSpriteTaskSet 
     * @param array $CoverBySnapshotTaskSet 
     * @param array $AdaptiveDynamicStreamingTaskSet 
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

        if (array_key_exists("CoverBySnapshotTaskSet",$param) and $param["CoverBySnapshotTaskSet"] !== null) {
            $this->CoverBySnapshotTaskSet = [];
            foreach ($param["CoverBySnapshotTaskSet"] as $key => $value){
                $obj = new CoverBySnapshotTaskInput();
                $obj->deserialize($value);
                array_push($this->CoverBySnapshotTaskSet, $obj);
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
