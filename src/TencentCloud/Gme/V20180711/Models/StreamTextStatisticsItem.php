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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Stream-to-Text usage statistics
 *
 * @method float getData() Obtain Usage of the service (in seconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setData(float $Data) Set Usage of the service (in seconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class StreamTextStatisticsItem extends AbstractModel
{
    /**
     * @var float Usage of the service (in seconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @param float $Data Usage of the service (in seconds)
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
