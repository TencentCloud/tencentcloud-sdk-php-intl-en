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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsyncRequestInfo request structure.
 *
 * @method integer getFlowID() Obtain Async task ID.
 * @method void setFlowID(integer $FlowID) Set Async task ID.
 */
class DescribeAsyncRequestInfoRequest extends AbstractModel
{
    /**
     * @var integer Async task ID.
     */
    public $FlowID;

    /**
     * @param integer $FlowID Async task ID.
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
        if (array_key_exists("FlowID",$param) and $param["FlowID"] !== null) {
            $this->FlowID = $param["FlowID"];
        }
    }
}
