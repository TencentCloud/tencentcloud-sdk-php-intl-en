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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxySessionKillTasks request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getAsyncRequestIds() Obtain The async session killing task ID, which is obtained after the API `CreateProxySessionKillTask` is successfully called.
 * @method void setAsyncRequestIds(array $AsyncRequestIds) Set The async session killing task ID, which is obtained after the API `CreateProxySessionKillTask` is successfully called.
 * @method string getProduct() Obtain Service type. Valid value: `redis` (TencentDB for Redis).
 * @method void setProduct(string $Product) Set Service type. Valid value: `redis` (TencentDB for Redis).
 */
class DescribeProxySessionKillTasksRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array The async session killing task ID, which is obtained after the API `CreateProxySessionKillTask` is successfully called.
     */
    public $AsyncRequestIds;

    /**
     * @var string Service type. Valid value: `redis` (TencentDB for Redis).
     */
    public $Product;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $AsyncRequestIds The async session killing task ID, which is obtained after the API `CreateProxySessionKillTask` is successfully called.
     * @param string $Product Service type. Valid value: `redis` (TencentDB for Redis).
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

        if (array_key_exists("AsyncRequestIds",$param) and $param["AsyncRequestIds"] !== null) {
            $this->AsyncRequestIds = $param["AsyncRequestIds"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
