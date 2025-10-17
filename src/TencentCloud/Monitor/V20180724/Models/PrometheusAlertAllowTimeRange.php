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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus custom Alert notification period.
 *
 * @method string getStart() Obtain Seconds from 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStart(string $Start) Set Seconds from 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEnd() Obtain Seconds from 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnd(string $End) Set Seconds from 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusAlertAllowTimeRange extends AbstractModel
{
    /**
     * @var string Seconds from 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Start;

    /**
     * @var string Seconds from 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $End;

    /**
     * @param string $Start Seconds from 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $End Seconds from 00:00:00.
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
