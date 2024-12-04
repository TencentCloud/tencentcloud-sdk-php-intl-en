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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceMonitorTopNCmdTook request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
 * @method integer getSpanType() Obtain Query time range.
- 1: real-time.
- 2: last 30 minutes.
- 3: last 6 hours.
- 4: last 24 hours.
 * @method void setSpanType(integer $SpanType) Set Query time range.
- 1: real-time.
- 2: last 30 minutes.
- 3: last 6 hours.
- 4: last 24 hours.
 */
class DescribeInstanceMonitorTopNCmdTookRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Query time range.
- 1: real-time.
- 2: last 30 minutes.
- 3: last 6 hours.
- 4: last 24 hours.
     */
    public $SpanType;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy it in the instance list.
     * @param integer $SpanType Query time range.
- 1: real-time.
- 2: last 30 minutes.
- 3: last 6 hours.
- 4: last 24 hours.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SpanType",$param) and $param["SpanType"] !== null) {
            $this->SpanType = $param["SpanType"];
        }
    }
}
