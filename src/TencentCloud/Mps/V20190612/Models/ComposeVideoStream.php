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
 * The video stream information of a video edit/compositing task.
 *
 * @method string getCodec() Obtain The codec. Valid values:
<li>`H.264` (default) </li>
 * @method void setCodec(string $Codec) Set The codec. Valid values:
<li>`H.264` (default) </li>
 * @method integer getFps() Obtain The video frame rate (Hz). Value range: 0–60.  
The default value is `0`, which means that the frame rate will be the same as that of the first video.
 * @method void setFps(integer $Fps) Set The video frame rate (Hz). Value range: 0–60.  
The default value is `0`, which means that the frame rate will be the same as that of the first video.
 * @method integer getBitrate() Obtain Reference bitrate, in kbps. Value range: 50-35000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on the complexity of an image.
 * @method void setBitrate(integer $Bitrate) Set Reference bitrate, in kbps. Value range: 50-35000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on the complexity of an image.
 */
class ComposeVideoStream extends AbstractModel
{
    /**
     * @var string The codec. Valid values:
<li>`H.264` (default) </li>
     */
    public $Codec;

    /**
     * @var integer The video frame rate (Hz). Value range: 0–60.  
The default value is `0`, which means that the frame rate will be the same as that of the first video.
     */
    public $Fps;

    /**
     * @var integer Reference bitrate, in kbps. Value range: 50-35000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on the complexity of an image.
     */
    public $Bitrate;

    /**
     * @param string $Codec The codec. Valid values:
<li>`H.264` (default) </li>
     * @param integer $Fps The video frame rate (Hz). Value range: 0–60.  
The default value is `0`, which means that the frame rate will be the same as that of the first video.
     * @param integer $Bitrate Reference bitrate, in kbps. Value range: 50-35000.
If set, the encoder will try to encode at this bitrate.
If not set, the service will automatically adopt a suitable bitrate based on the complexity of an image.
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

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }
    }
}
