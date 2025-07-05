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
 * RTMP configuration information of the queried input
 *
 * @method string getAppName() Obtain Path for RTMP stream pushing
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAppName(string $AppName) Set Path for RTMP stream pushing
Note: this field may return `null`, indicating that no valid value was found.
 * @method string getStreamKey() Obtain StreamKey for RTMP stream pushing
Format of an RTMP stream pushing URL: rtmp://IP address:1935/AppName/StreamKey
 * @method void setStreamKey(string $StreamKey) Set StreamKey for RTMP stream pushing
Format of an RTMP stream pushing URL: rtmp://IP address:1935/AppName/StreamKey
 */
class DescribeInputRTMPSettings extends AbstractModel
{
    /**
     * @var string Path for RTMP stream pushing
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AppName;

    /**
     * @var string StreamKey for RTMP stream pushing
Format of an RTMP stream pushing URL: rtmp://IP address:1935/AppName/StreamKey
     */
    public $StreamKey;

    /**
     * @param string $AppName Path for RTMP stream pushing
Note: this field may return `null`, indicating that no valid value was found.
     * @param string $StreamKey StreamKey for RTMP stream pushing
Format of an RTMP stream pushing URL: rtmp://IP address:1935/AppName/StreamKey
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
