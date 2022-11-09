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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DropLiveStream request structure.
 *
 * @method string getStreamName() Obtain The stream name.
 * @method void setStreamName(string $StreamName) Set The stream name.
 * @method string getDomainName() Obtain Your push domain.
 * @method void setDomainName(string $DomainName) Set Your push domain.
 * @method string getAppName() Obtain The push path, which should be the same as `AppName` in the push and playback URL. The default value is `live`.
 * @method void setAppName(string $AppName) Set The push path, which should be the same as `AppName` in the push and playback URL. The default value is `live`.
 */
class DropLiveStreamRequest extends AbstractModel
{
    /**
     * @var string The stream name.
     */
    public $StreamName;

    /**
     * @var string Your push domain.
     */
    public $DomainName;

    /**
     * @var string The push path, which should be the same as `AppName` in the push and playback URL. The default value is `live`.
     */
    public $AppName;

    /**
     * @param string $StreamName The stream name.
     * @param string $DomainName Your push domain.
     * @param string $AppName The push path, which should be the same as `AppName` in the push and playback URL. The default value is `live`.
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }
    }
}
