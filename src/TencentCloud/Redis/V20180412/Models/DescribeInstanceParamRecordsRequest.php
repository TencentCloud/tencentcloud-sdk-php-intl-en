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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParamRecords request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
 * @method integer getLimit() Obtain Pagination size. The default value is 100, and the maximum value is 200.
 * @method void setLimit(integer $Limit) Set Pagination size. The default value is 100, and the maximum value is 200.
 * @method integer getOffset() Obtain Offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number – 1). The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number – 1). The default value is 0.
 */
class DescribeInstanceParamRecordsRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Pagination size. The default value is 100, and the maximum value is 200.
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number – 1). The default value is 0.
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis/instance/list), and copy it from the instance list.
     * @param integer $Limit Pagination size. The default value is 100, and the maximum value is 200.
     * @param integer $Offset Offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number – 1). The default value is 0.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
