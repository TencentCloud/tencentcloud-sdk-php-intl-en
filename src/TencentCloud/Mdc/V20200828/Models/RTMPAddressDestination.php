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
 * Target address information for RTMP repush.
 *
 * @method string getUrl() Obtain Destination Url for RTMP repush, in the format of 'RTMP://domain/live'.
 * @method void setUrl(string $Url) Set Destination Url for RTMP repush, in the format of 'RTMP://domain/live'.
 * @method string getStreamKey() Obtain Target StreamKey for RTMP republishing, in the format of 'steamid?key=value'.
 * @method void setStreamKey(string $StreamKey) Set Target StreamKey for RTMP republishing, in the format of 'steamid?key=value'.
 */
class RTMPAddressDestination extends AbstractModel
{
    /**
     * @var string Destination Url for RTMP repush, in the format of 'RTMP://domain/live'.
     */
    public $Url;

    /**
     * @var string Target StreamKey for RTMP republishing, in the format of 'steamid?key=value'.
     */
    public $StreamKey;

    /**
     * @param string $Url Destination Url for RTMP repush, in the format of 'RTMP://domain/live'.
     * @param string $StreamKey Target StreamKey for RTMP republishing, in the format of 'steamid?key=value'.
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
