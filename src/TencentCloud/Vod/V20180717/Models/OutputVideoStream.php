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
 * Information of output video stream
 *
 * @method string getCodec() Obtain Video stream encoder. Valid values:
<li>libx264: H.264</li>
Default value: libx264.
 * @method void setCodec(string $Codec) Set Video stream encoder. Valid values:
<li>libx264: H.264</li>
Default value: libx264.
 * @method integer getFps() Obtain Video frame rate in Hz. Value range: [0, 60].
Default value: 0, which means that the value is the same as the video frame rate of the first video segment in the first video track.
 * @method void setFps(integer $Fps) Set Video frame rate in Hz. Value range: [0, 60].
Default value: 0, which means that the value is the same as the video frame rate of the first video segment in the first video track.
 */
class OutputVideoStream extends AbstractModel
{
    /**
     * @var string Video stream encoder. Valid values:
<li>libx264: H.264</li>
Default value: libx264.
     */
    public $Codec;

    /**
     * @var integer Video frame rate in Hz. Value range: [0, 60].
Default value: 0, which means that the value is the same as the video frame rate of the first video segment in the first video track.
     */
    public $Fps;

    /**
     * @param string $Codec Video stream encoder. Valid values:
<li>libx264: H.264</li>
Default value: libx264.
     * @param integer $Fps Video frame rate in Hz. Value range: [0, 60].
Default value: 0, which means that the value is the same as the video frame rate of the first video segment in the first video track.
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
