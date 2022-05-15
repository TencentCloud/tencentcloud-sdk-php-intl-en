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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The RTMP destination address of the output to create.
 *
 * @method string getUrl() Obtain The relay URL. Format: `rtmp://domain/live`.
 * @method void setUrl(string $Url) Set The relay URL. Format: `rtmp://domain/live`.
 * @method string getStreamKey() Obtain The `StreamKey` for relay. Format: `stream?key=value`.
 * @method void setStreamKey(string $StreamKey) Set The `StreamKey` for relay. Format: `stream?key=value`.
 */
class CreateOutputRtmpSettingsDestinations extends AbstractModel
{
    /**
     * @var string The relay URL. Format: `rtmp://domain/live`.
     */
    public $Url;

    /**
     * @var string The `StreamKey` for relay. Format: `stream?key=value`.
     */
    public $StreamKey;

    /**
     * @param string $Url The relay URL. Format: `rtmp://domain/live`.
     * @param string $StreamKey The `StreamKey` for relay. Format: `stream?key=value`.
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

        if (array_key_exists("StreamKey",$param) and $param["StreamKey"] !== null) {
            $this->StreamKey = $param["StreamKey"];
        }
    }
}
