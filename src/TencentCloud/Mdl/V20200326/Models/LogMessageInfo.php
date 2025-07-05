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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log details.
 *
 * @method StreamInfo getStreamInfo() Obtain Push information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStreamInfo(StreamInfo $StreamInfo) Set Push information.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class LogMessageInfo extends AbstractModel
{
    /**
     * @var StreamInfo Push information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StreamInfo;

    /**
     * @param StreamInfo $StreamInfo Push information.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StreamInfo",$param) and $param["StreamInfo"] !== null) {
            $this->StreamInfo = new StreamInfo();
            $this->StreamInfo->deserialize($param["StreamInfo"]);
        }
    }
}
