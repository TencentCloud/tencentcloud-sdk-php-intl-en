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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin health status
 *
 * @method string getStatus() Obtain `healthy`: Healthy; `unhealthy`: Unhealthy; `process`: Checking origin.
 * @method void setStatus(string $Status) Set `healthy`: Healthy; `unhealthy`: Unhealthy; `process`: Checking origin.
 * @method array getHost() Obtain List of unhealthy origin groups when `Status = unhealthy`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHost(array $Host) Set List of unhealthy origin groups when `Status = unhealthy`
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OriginCheckOriginStatus extends AbstractModel
{
    /**
     * @var string `healthy`: Healthy; `unhealthy`: Unhealthy; `process`: Checking origin.
     */
    public $Status;

    /**
     * @var array List of unhealthy origin groups when `Status = unhealthy`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Host;

    /**
     * @param string $Status `healthy`: Healthy; `unhealthy`: Unhealthy; `process`: Checking origin.
     * @param array $Host List of unhealthy origin groups when `Status = unhealthy`
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
