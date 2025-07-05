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
 * ParseStreamingManifest request structure.
 *
 * @method string getMediaManifestContent() Obtain Index file content to be parsed.
 * @method void setMediaManifestContent(string $MediaManifestContent) Set Index file content to be parsed.
 * @method string getManifestType() Obtain Video index file format, which is `m3u8` by default.
<li>m3u8</li>
<li>mpd</li>
 * @method void setManifestType(string $ManifestType) Set Video index file format, which is `m3u8` by default.
<li>m3u8</li>
<li>mpd</li>
 */
class ParseStreamingManifestRequest extends AbstractModel
{
    /**
     * @var string Index file content to be parsed.
     */
    public $MediaManifestContent;

    /**
     * @var string Video index file format, which is `m3u8` by default.
<li>m3u8</li>
<li>mpd</li>
     */
    public $ManifestType;

    /**
     * @param string $MediaManifestContent Index file content to be parsed.
     * @param string $ManifestType Video index file format, which is `m3u8` by default.
<li>m3u8</li>
<li>mpd</li>
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
        if (array_key_exists("MediaManifestContent",$param) and $param["MediaManifestContent"] !== null) {
            $this->MediaManifestContent = $param["MediaManifestContent"];
        }

        if (array_key_exists("ManifestType",$param) and $param["ManifestType"] !== null) {
            $this->ManifestType = $param["ManifestType"];
        }
    }
}
