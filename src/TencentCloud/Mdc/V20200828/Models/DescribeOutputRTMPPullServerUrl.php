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
 * Query the RTMP pull URL information in the output.
 *
 * @method string getTcUrl() Obtain tcUrl of the RTMP pull address.
 * @method void setTcUrl(string $TcUrl) Set tcUrl of the RTMP pull address.
 * @method string getStreamKey() Obtain Stream key of the RTMP pull address.
 * @method void setStreamKey(string $StreamKey) Set Stream key of the RTMP pull address.
 */
class DescribeOutputRTMPPullServerUrl extends AbstractModel
{
    /**
     * @var string tcUrl of the RTMP pull address.
     */
    public $TcUrl;

    /**
     * @var string Stream key of the RTMP pull address.
     */
    public $StreamKey;

    /**
     * @param string $TcUrl tcUrl of the RTMP pull address.
     * @param string $StreamKey Stream key of the RTMP pull address.
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
