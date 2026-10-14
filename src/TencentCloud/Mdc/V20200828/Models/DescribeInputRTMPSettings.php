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
 * @method string getAppName() Obtain RTMP push path.
 * @method void setAppName(string $AppName) Set RTMP push path.
 * @method string getStreamKey() Obtain RTMP push StreamKey.
RTMP push URL splicing rule: rtmp://Ip:1935/AppName/StreamKey
 * @method void setStreamKey(string $StreamKey) Set RTMP push StreamKey.
RTMP push URL splicing rule: rtmp://Ip:1935/AppName/StreamKey
 */
class DescribeInputRTMPSettings extends AbstractModel
{
    /**
     * @var string RTMP push path.
     */
    public $AppName;

    /**
     * @var string RTMP push StreamKey.
RTMP push URL splicing rule: rtmp://Ip:1935/AppName/StreamKey
     */
    public $StreamKey;

    /**
     * @param string $AppName RTMP push path.
     * @param string $StreamKey RTMP push StreamKey.
RTMP push URL splicing rule: rtmp://Ip:1935/AppName/StreamKey
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamKey",$param) and $param["StreamKey"] !== null) {
            $this->StreamKey = $param["StreamKey"];
        }
    }
}
