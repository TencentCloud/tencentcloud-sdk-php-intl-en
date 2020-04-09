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
 * Adaptive bitrate streaming information
 *
 * @method integer getDefinition() Obtain Adaptive bitrate streaming specification.
 * @method void setDefinition(integer $Definition) Set Adaptive bitrate streaming specification.
 * @method string getPackage() Obtain Container format. Valid values: hls, dash.
 * @method void setPackage(string $Package) Set Container format. Valid values: hls, dash.
 * @method string getDrmType() Obtain Encryption type.
 * @method void setDrmType(string $DrmType) Set Encryption type.
 * @method string getUrl() Obtain Playback address.
 * @method void setUrl(string $Url) Set Playback address.
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer Adaptive bitrate streaming specification.
     */
    public $Definition;

    /**
     * @var string Container format. Valid values: hls, dash.
     */
    public $Package;

    /**
     * @var string Encryption type.
     */
    public $DrmType;

    /**
     * @var string Playback address.
     */
    public $Url;

    /**
     * @param integer $Definition Adaptive bitrate streaming specification.
     * @param string $Package Container format. Valid values: hls, dash.
     * @param string $DrmType Encryption type.
     * @param string $Url Playback address.
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

        if (array_key_exists("Package",$param) and $param["Package"] !== null) {
            $this->Package = $param["Package"];
        }

        if (array_key_exists("DrmType",$param) and $param["DrmType"] !== null) {
            $this->DrmType = $param["DrmType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
