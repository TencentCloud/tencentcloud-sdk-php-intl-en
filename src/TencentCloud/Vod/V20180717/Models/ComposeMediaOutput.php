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
 * @method string getFileName() Obtain 
 * @method void setFileName(string $FileName) Set 
 * @method string getDescription() Obtain 
 * @method void setDescription(string $Description) Set 
 * @method integer getClassId() Obtain 
 * @method void setClassId(integer $ClassId) Set 
 * @method string getExpireTime() Obtain 
 * @method void setExpireTime(string $ExpireTime) Set 
 * @method string getContainer() Obtain 
 * @method void setContainer(string $Container) Set 
 * @method OutputVideoStream getVideoStream() Obtain 
 * @method void setVideoStream(OutputVideoStream $VideoStream) Set 
 * @method OutputAudioStream getAudioStream() Obtain 
 * @method void setAudioStream(OutputAudioStream $AudioStream) Set 
 * @method integer getRemoveVideo() Obtain 
 * @method void setRemoveVideo(integer $RemoveVideo) Set 
 * @method integer getRemoveAudio() Obtain 
 * @method void setRemoveAudio(integer $RemoveAudio) Set 
 */
class ComposeMediaOutput extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileName;

    /**
     * @var string 
     */
    public $Description;

    /**
     * @var integer 
     */
    public $ClassId;

    /**
     * @var string 
     */
    public $ExpireTime;

    /**
     * @var string 
     */
    public $Container;

    /**
     * @var OutputVideoStream 
     */
    public $VideoStream;

    /**
     * @var OutputAudioStream 
     */
    public $AudioStream;

    /**
     * @var integer 
     */
    public $RemoveVideo;

    /**
     * @var integer 
     */
    public $RemoveAudio;

    /**
     * @param string $FileName 
     * @param string $Description 
     * @param integer $ClassId 
     * @param string $ExpireTime 
     * @param string $Container 
     * @param OutputVideoStream $VideoStream 
     * @param OutputAudioStream $AudioStream 
     * @param integer $RemoveVideo 
     * @param integer $RemoveAudio 
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new OutputVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("AudioStream",$param) and $param["AudioStream"] !== null) {
            $this->AudioStream = new OutputAudioStream();
            $this->AudioStream->deserialize($param["AudioStream"]);
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }
    }
}
