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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RetryShipperTask request structure.
 *
 * @method string getShipperId() Obtain Shipping Rule Id.

-Obtain the ShipperId by [obtaining the shipping task list](https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
 * @method void setShipperId(string $ShipperId) Set Shipping Rule Id.

-Obtain the ShipperId by [obtaining the shipping task list](https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
 * @method string getTaskId() Obtain Delivery task Id.

-Obtain the TaskId by searching the shipping task list (https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
 * @method void setTaskId(string $TaskId) Set Delivery task Id.

-Obtain the TaskId by searching the shipping task list (https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
 */
class RetryShipperTaskRequest extends AbstractModel
{
    /**
     * @var string Shipping Rule Id.

-Obtain the ShipperId by [obtaining the shipping task list](https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
     */
    public $ShipperId;

    /**
     * @var string Delivery task Id.

-Obtain the TaskId by searching the shipping task list (https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
     */
    public $TaskId;

    /**
     * @param string $ShipperId Shipping Rule Id.

-Obtain the ShipperId by [obtaining the shipping task list](https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
     * @param string $TaskId Delivery task Id.

-Obtain the TaskId by searching the shipping task list (https://www.tencentcloud.com/document/product/614/58745?from_cn_redirect=1).
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
        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
