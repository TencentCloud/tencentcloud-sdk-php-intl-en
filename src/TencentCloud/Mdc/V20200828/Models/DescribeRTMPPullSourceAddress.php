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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the input RTMP configuration message.
 *
 * @method string getTcUrl() Obtain TcUrl of the RTMP origin server.
 * @method void setTcUrl(string $TcUrl) Set TcUrl of the RTMP origin server.
 * @method string getStreamKey() Obtain StreamKey of the RTMP origin server.
RTMP origin server URL splicing rule: $TcUrl/$StreamKey.
 * @method void setStreamKey(string $StreamKey) Set StreamKey of the RTMP origin server.
RTMP origin server URL splicing rule: $TcUrl/$StreamKey.
 */
class DescribeRTMPPullSourceAddress extends AbstractModel
{
    /**
     * @var string TcUrl of the RTMP origin server.
     */
    public $TcUrl;

    /**
     * @var string StreamKey of the RTMP origin server.
RTMP origin server URL splicing rule: $TcUrl/$StreamKey.
     */
    public $StreamKey;

    /**
     * @param string $TcUrl TcUrl of the RTMP origin server.
     * @param string $StreamKey StreamKey of the RTMP origin server.
RTMP origin server URL splicing rule: $TcUrl/$StreamKey.
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
        if (array_key_exists("TcUrl",$param) and $param["TcUrl"] !== null) {
            $this->TcUrl = $param["TcUrl"];
        }

        if (array_key_exists("StreamKey",$param) and $param["StreamKey"] !== null) {
            $this->StreamKey = $param["StreamKey"];
        }
    }
}
