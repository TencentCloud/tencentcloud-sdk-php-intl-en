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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientConnections request structure.
 *
 * @method string getInstanceId() Obtain Specifies the ID of the instance to be queried. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

 * @method void setInstanceId(string $InstanceId) Set Specifies the ID of the instance to be queried. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

 * @method integer getLimit() Obtain Number of entries returned per request. Minimum value: 1. Maximum value: 1000. Default value: 1000.
 * @method void setLimit(integer $Limit) Set Number of entries returned per request. Minimum value: 1. Maximum value: 1000. Default value: 1000.
 * @method integer getOffset() Obtain Offset. Default value: 0. Offset = Limit x (page number - 1).
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0. Offset = Limit x (page number - 1).
 */
class DescribeClientConnectionsRequest extends AbstractModel
{
    /**
     * @var string Specifies the ID of the instance to be queried. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

     */
    public $InstanceId;

    /**
     * @var integer Number of entries returned per request. Minimum value: 1. Maximum value: 1000. Default value: 1000.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0. Offset = Limit x (page number - 1).
     */
    public $Offset;

    /**
     * @param string $InstanceId Specifies the ID of the instance to be queried. For example, cmgo-p8vn****. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/MongoDB) and copy the instance ID from the instance list.

     * @param integer $Limit Number of entries returned per request. Minimum value: 1. Maximum value: 1000. Default value: 1000.
     * @param integer $Offset Offset. Default value: 0. Offset = Limit x (page number - 1).
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
