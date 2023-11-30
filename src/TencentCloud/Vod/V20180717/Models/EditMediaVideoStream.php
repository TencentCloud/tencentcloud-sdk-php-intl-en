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
 * Video stream configuration information
 *
 * @method string getCodec() Obtain The encoding format of the video stream, optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding. </li>
 * @method void setCodec(string $Codec) Set The encoding format of the video stream, optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding. </li>
 * @method integer getBitrate() Obtain The bit rate of the video stream, value range: 0 and [128, 35000], unit: kbps. 
When the value is 0 or left blank, it means automatically selecting the best video bit rate.
 * @method void setBitrate(integer $Bitrate) Set The bit rate of the video stream, value range: 0 and [128, 35000], unit: kbps. 
When the value is 0 or left blank, it means automatically selecting the best video bit rate.
 * @method string getResolutionAdaptive() Obtain Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) Set Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
 * @method integer getWidth() Obtain Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
 * @method void setWidth(integer $Width) Set Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
 * @method integer getHeight() Obtain The maximum value of the video stream height (or short side), value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is based on the base resolution;</li>
<li>When Width is 0 and Height is non-0, Width is scaled according to the base resolution;</li> li>
<li>When Width is non-0 and Height is 0, the Height is scaled according to the base resolution; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0.
 * @method void setHeight(integer $Height) Set The maximum value of the video stream height (or short side), value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is based on the base resolution;</li>
<li>When Width is 0 and Height is non-0, Width is scaled according to the base resolution;</li> li>
<li>When Width is non-0 and Height is 0, the Height is scaled according to the base resolution; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0.
 * @method integer getFps() Obtain Video frame rate, value range: [0, 100], unit: Hz. 
When the value is 0, the frame rate will be automatically set for the video. 
The default value is 0.
 * @method void setFps(integer $Fps) Set Video frame rate, value range: [0, 100], unit: Hz. 
When the value is 0, the frame rate will be automatically set for the video. 
The default value is 0.
 */
class EditMediaVideoStream extends AbstractModel
{
    /**
     * @var string The encoding format of the video stream, optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding. </li>
     */
    public $Codec;

    /**
     * @var integer The bit rate of the video stream, value range: 0 and [128, 35000], unit: kbps. 
When the value is 0 or left blank, it means automatically selecting the best video bit rate.
     */
    public $Bitrate;

    /**
     * @var string Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
     */
    public $ResolutionAdaptive;

    /**
     * @var integer Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
     */
    public $Width;

    /**
     * @var integer The maximum value of the video stream height (or short side), value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is based on the base resolution;</li>
<li>When Width is 0 and Height is non-0, Width is scaled according to the base resolution;</li> li>
<li>When Width is non-0 and Height is 0, the Height is scaled according to the base resolution; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0.
     */
    public $Height;

    /**
     * @var integer Video frame rate, value range: [0, 100], unit: Hz. 
When the value is 0, the frame rate will be automatically set for the video. 
The default value is 0.
     */
    public $Fps;

    /**
     * @param string $Codec The encoding format of the video stream, optional values:
<li>libx264: H.264 encoding;</li>
<li>libx265: H.265 encoding;</li>
<li>av1: AOMedia Video 1 encoding;</li>
<li>H.266: H.266 encoding. </li>
     * @param integer $Bitrate The bit rate of the video stream, value range: 0 and [128, 35000], unit: kbps. 
When the value is 0 or left blank, it means automatically selecting the best video bit rate.
     * @param string $ResolutionAdaptive Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
     * @param integer $Width Resolution adaptive, optional values:
<li>open: open, at this time, Width represents the long side of the video, and Height represents the short side of the video;</li>
<li>close: closed, at this time , Width represents the width of the video, and Height represents the height of the video. </li>
Default value: open.
     * @param integer $Height The maximum value of the video stream height (or short side), value range: 0 and [128, 4096], unit: px. 
<li>When Width and Height are both 0, the resolution is based on the base resolution;</li>
<li>When Width is 0 and Height is non-0, Width is scaled according to the base resolution;</li> li>
<li>When Width is non-0 and Height is 0, the Height is scaled according to the base resolution; </li>
<li>When both Width and Height are non-0, the resolution is specified by the user. </li>
Default value: 0.
     * @param integer $Fps Video frame rate, value range: [0, 100], unit: Hz. 
When the value is 0, the frame rate will be automatically set for the video. 
The default value is 0.
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

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }
    }
}
