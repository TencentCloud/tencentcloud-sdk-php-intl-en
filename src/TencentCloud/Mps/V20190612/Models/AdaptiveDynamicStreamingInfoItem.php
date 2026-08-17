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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Adaptive Bitrate Streaming information
 *
 * @method integer getDefinition() Obtain Adaptive bitrate streaming specification.
 * @method void setDefinition(integer $Definition) Set Adaptive bitrate streaming specification.
 * @method string getPackage() Obtain Packaging format, which may be two kinds: HLS and MPEG-DASH.
 * @method void setPackage(string $Package) Set Packaging format, which may be two kinds: HLS and MPEG-DASH.
 * @method string getPath() Obtain Playback path.
 * @method void setPath(string $Path) Set Playback path.
 * @method TaskOutputStorage getStorage() Obtain Storage location of the adaptive bitrate stream file.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of the adaptive bitrate stream file.
 */
class AdaptiveDynamicStreamingInfoItem extends AbstractModel
{
    /**
     * @var integer Adaptive bitrate streaming specification.
     */
    public $Definition;

    /**
     * @var string Packaging format, which may be two kinds: HLS and MPEG-DASH.
     */
    public $Package;

    /**
     * @var string Playback path.
     */
    public $Path;

    /**
     * @var TaskOutputStorage Storage location of the adaptive bitrate stream file.
     */
    public $Storage;

    /**
     * @param integer $Definition Adaptive bitrate streaming specification.
     * @param string $Package Packaging format, which may be two kinds: HLS and MPEG-DASH.
     * @param string $Path Playback path.
     * @param TaskOutputStorage $Storage Storage location of the adaptive bitrate stream file.
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }
    }
}
