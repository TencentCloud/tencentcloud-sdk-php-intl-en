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
 * Output result of adaptive bitrate streaming.
 *
 * @method integer getDefinition() Obtain Adaptive bitrate template ID.
 * @method void setDefinition(integer $Definition) Set Adaptive bitrate template ID.
 * @method string getFormat() Obtain Adaptive bitrate stream packaging format. Optional values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set Adaptive bitrate stream packaging format. Optional values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
 * @method string getDrmType() Obtain DRM solution type. Available values:
<li>Empty string: Unencrypted.</li>
<li>SimpleAES;</li>
<li>Widevine;</li>
<li>FairPlay.</li>
 * @method void setDrmType(string $DrmType) Set DRM solution type. Available values:
<li>Empty string: Unencrypted.</li>
<li>SimpleAES;</li>
<li>Widevine;</li>
<li>FairPlay.</li>
 * @method string getUrl() Obtain Playback address of the adaptive bitrate stream.
 * @method void setUrl(string $Url) Set Playback address of the adaptive bitrate stream.
 */
class ComplexAdaptiveDynamicStreamingTaskOutput extends AbstractModel
{
    /**
     * @var integer Adaptive bitrate template ID.
     */
    public $Definition;

    /**
     * @var string Adaptive bitrate stream packaging format. Optional values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var string DRM solution type. Available values:
<li>Empty string: Unencrypted.</li>
<li>SimpleAES;</li>
<li>Widevine;</li>
<li>FairPlay.</li>
     */
    public $DrmType;

    /**
     * @var string Playback address of the adaptive bitrate stream.
     */
    public $Url;

    /**
     * @param integer $Definition Adaptive bitrate template ID.
     * @param string $Format Adaptive bitrate stream packaging format. Optional values:
<li>HLS;</li>
<li>MPEG-DASH.</li>
     * @param string $DrmType DRM solution type. Available values:
<li>Empty string: Unencrypted.</li>
<li>SimpleAES;</li>
<li>Widevine;</li>
<li>FairPlay.</li>
     * @param string $Url Playback address of the adaptive bitrate stream.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
