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
 * Video transcoding playback information (2017)
 *
 * @method string getUrl() Obtain Playback address.
 * @method void setUrl(string $Url) Set Playback address.
 * @method integer getDefinition() Obtain Transcoding specification ID. See [Transcoding Parameter Template](https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1).
 * @method void setDefinition(integer $Definition) Set Transcoding specification ID. See [Transcoding Parameter Template](https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1).
 * @method integer getBitrate() Obtain Sum of the mean video stream bitrate and mean audio stream bitrate. Unit: bps.
 * @method void setBitrate(integer $Bitrate) Set Sum of the mean video stream bitrate and mean audio stream bitrate. Unit: bps.
 * @method integer getHeight() Obtain Maximum height of the video stream. Measurement unit: px.
 * @method void setHeight(integer $Height) Set Maximum height of the video stream. Measurement unit: px.
 * @method integer getWidth() Obtain Maximum value of the video stream width in px.
 * @method void setWidth(integer $Width) Set Maximum value of the video stream width in px.
 */
class TranscodePlayInfo2017 extends AbstractModel
{
    /**
     * @var string Playback address.
     */
    public $Url;

    /**
     * @var integer Transcoding specification ID. See [Transcoding Parameter Template](https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1).
     */
    public $Definition;

    /**
     * @var integer Sum of the mean video stream bitrate and mean audio stream bitrate. Unit: bps.
     */
    public $Bitrate;

    /**
     * @var integer Maximum height of the video stream. Measurement unit: px.
     */
    public $Height;

    /**
     * @var integer Maximum value of the video stream width in px.
     */
    public $Width;

    /**
     * @param string $Url Playback address.
     * @param integer $Definition Transcoding specification ID. See [Transcoding Parameter Template](https://www.tencentcloud.com/document/product/266/33476?from_cn_redirect=1).
     * @param integer $Bitrate Sum of the mean video stream bitrate and mean audio stream bitrate. Unit: bps.
     * @param integer $Height Maximum height of the video stream. Measurement unit: px.
     * @param integer $Width Maximum value of the video stream width in px.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }
    }
}
