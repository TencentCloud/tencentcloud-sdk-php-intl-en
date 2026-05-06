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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud-native gateway traffic throttling plugin parameter throttling precise Qps threshold
 *
 * @method string getUnit() Obtain qps threshold control dimension, including: second, minute, hour, day, month, year.
 * @method void setUnit(string $Unit) Set qps threshold control dimension, including: second, minute, hour, day, month, year.
 * @method string getGlobalConfigId() Obtain Global configuration ID
 * @method void setGlobalConfigId(string $GlobalConfigId) Set Global configuration ID
 */
class AccurateQpsThreshold extends AbstractModel
{
    /**
     * @var string qps threshold control dimension, including: second, minute, hour, day, month, year.
     */
    public $Unit;

    /**
     * @var string Global configuration ID
     */
    public $GlobalConfigId;

    /**
     * @param string $Unit qps threshold control dimension, including: second, minute, hour, day, month, year.
     * @param string $GlobalConfigId Global configuration ID
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
        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("GlobalConfigId",$param) and $param["GlobalConfigId"] !== null) {
            $this->GlobalConfigId = $param["GlobalConfigId"];
        }
    }
}
