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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAsyncEventStatus request structure.
 *
 * @method string getInvokeRequestId() Obtain ID of the async execution request
 * @method void setInvokeRequestId(string $InvokeRequestId) Set ID of the async execution request
 */
class GetAsyncEventStatusRequest extends AbstractModel
{
    /**
     * @var string ID of the async execution request
     */
    public $InvokeRequestId;

    /**
     * @param string $InvokeRequestId ID of the async execution request
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
        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }
    }
}
