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
 * Substream info of transcoding to adaptive bitstream.
 *
 * @method string getType() Obtain Sub-stream type. Valid values:
<li>audio: audio-only;</li>
<li>video: video (may contain audio stream).</li>
 * @method void setType(string $Type) Set Sub-stream type. Valid values:
<li>audio: audio-only;</li>
<li>video: video (may contain audio stream).</li>
 * @method integer getWidth() Obtain Video image width when the substream is a video stream. Unit: px.
 * @method void setWidth(integer $Width) Set Video image width when the substream is a video stream. Unit: px.
 * @method integer getHeight() Obtain Video image height when the substream is a video stream. Measurement unit: px.
 * @method void setHeight(integer $Height) Set Video image height when the substream is a video stream. Measurement unit: px.
 * @method integer getSize() Obtain Substream media file size. Measurement unit: Byte.
<font color=red>Note:</font> This field is 0 for adaptive bitrate stream files generated before 2023-02-09T16:00:00Z.
 * @method void setSize(integer $Size) Set Substream media file size. Measurement unit: Byte.
<font color=red>Note:</font> This field is 0 for adaptive bitrate stream files generated before 2023-02-09T16:00:00Z.
 */
class MediaSubStreamInfoItem extends AbstractModel
{
    /**
     * @var string Sub-stream type. Valid values:
<li>audio: audio-only;</li>
<li>video: video (may contain audio stream).</li>
     */
    public $Type;

    /**
     * @var integer Video image width when the substream is a video stream. Unit: px.
     */
    public $Width;

    /**
     * @var integer Video image height when the substream is a video stream. Measurement unit: px.
     */
    public $Height;

    /**
     * @var integer Substream media file size. Measurement unit: Byte.
<font color=red>Note:</font> This field is 0 for adaptive bitrate stream files generated before 2023-02-09T16:00:00Z.
     */
    public $Size;

    /**
     * @param string $Type Sub-stream type. Valid values:
<li>audio: audio-only;</li>
<li>video: video (may contain audio stream).</li>
     * @param integer $Width Video image width when the substream is a video stream. Unit: px.
     * @param integer $Height Video image height when the substream is a video stream. Measurement unit: px.
     * @param integer $Size Substream media file size. Measurement unit: Byte.
<font color=red>Note:</font> This field is 0 for adaptive bitrate stream files generated before 2023-02-09T16:00:00Z.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
