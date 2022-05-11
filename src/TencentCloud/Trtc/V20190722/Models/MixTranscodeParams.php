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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The audio and video parameters for recording.
 *
 * @method VideoParams getVideoParams() Obtain The video transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
 * @method void setVideoParams(VideoParams $VideoParams) Set The video transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
 * @method AudioParams getAudioParams() Obtain The audio transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
 * @method void setAudioParams(AudioParams $AudioParams) Set The audio transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
 */
class MixTranscodeParams extends AbstractModel
{
    /**
     * @var VideoParams The video transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
     */
    public $VideoParams;

    /**
     * @var AudioParams The audio transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
     */
    public $AudioParams;

    /**
     * @param VideoParams $VideoParams The video transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
     * @param AudioParams $AudioParams The audio transcoding parameters for recording. If you set this parameter, you must specify all its fields. If you do not set it, the default will be used.
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
        if (array_key_exists("VideoParams",$param) and $param["VideoParams"] !== null) {
            $this->VideoParams = new VideoParams();
            $this->VideoParams->deserialize($param["VideoParams"]);
        }

        if (array_key_exists("AudioParams",$param) and $param["AudioParams"] !== null) {
            $this->AudioParams = new AudioParams();
            $this->AudioParams->deserialize($param["AudioParams"]);
        }
    }
}
