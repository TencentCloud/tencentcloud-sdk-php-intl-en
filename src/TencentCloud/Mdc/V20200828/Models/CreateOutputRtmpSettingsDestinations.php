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
 * RTMP destination address of the created MediaConnect flow output.
 *
 * @method string getUrl() Obtain Push URL in the format of `rtmp://domain/live`.
 * @method void setUrl(string $Url) Set Push URL in the format of `rtmp://domain/live`.
 * @method string getStreamKey() Obtain Push `StreamKey` in the format of `stream?key=value`.
 * @method void setStreamKey(string $StreamKey) Set Push `StreamKey` in the format of `stream?key=value`.
 */
class CreateOutputRtmpSettingsDestinations extends AbstractModel
{
    /**
     * @var string Push URL in the format of `rtmp://domain/live`.
     */
    public $Url;

    /**
     * @var string Push `StreamKey` in the format of `stream?key=value`.
     */
    public $StreamKey;

    /**
     * @param string $Url Push URL in the format of `rtmp://domain/live`.
     * @param string $StreamKey Push `StreamKey` in the format of `stream?key=value`.
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
