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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOrderStatus request structure.
 *
 * @method string getStatus() Obtain Status to be updated
 * @method void setStatus(string $Status) Set Status to be updated
 * @method string getDedicatedClusterOrderId() Obtain Large order ID
 * @method void setDedicatedClusterOrderId(string $DedicatedClusterOrderId) Set Large order ID
 * @method array getSubOrderIds() Obtain Small order ID
 * @method void setSubOrderIds(array $SubOrderIds) Set Small order ID
 */
class ModifyOrderStatusRequest extends AbstractModel
{
    /**
     * @var string Status to be updated
     */
    public $Status;

    /**
     * @var string Large order ID
     */
    public $DedicatedClusterOrderId;

    /**
     * @var array Small order ID
     */
    public $SubOrderIds;

    /**
     * @param string $Status Status to be updated
     * @param string $DedicatedClusterOrderId Large order ID
     * @param array $SubOrderIds Small order ID
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

        if (array_key_exists("DedicatedClusterOrderId",$param) and $param["DedicatedClusterOrderId"] !== null) {
            $this->DedicatedClusterOrderId = $param["DedicatedClusterOrderId"];
        }

        if (array_key_exists("SubOrderIds",$param) and $param["SubOrderIds"] !== null) {
            $this->SubOrderIds = $param["SubOrderIds"];
        }
    }
}
