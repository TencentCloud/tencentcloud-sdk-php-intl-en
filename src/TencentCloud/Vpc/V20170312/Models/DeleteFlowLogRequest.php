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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFlowLog request structure.
 *
 * @method string getFlowLogId() Obtain The unique ID of the flow log.
 * @method void setFlowLogId(string $FlowLogId) Set The unique ID of the flow log.
 * @method string getVpcId() Obtain The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless a CCN flow log is deleted.
 * @method void setVpcId(string $VpcId) Set The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless a CCN flow log is deleted.
 */
class DeleteFlowLogRequest extends AbstractModel
{
    /**
     * @var string The unique ID of the flow log.
     */
    public $FlowLogId;

    /**
     * @var string The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless a CCN flow log is deleted.
     */
    public $VpcId;

    /**
     * @param string $FlowLogId The unique ID of the flow log.
     * @param string $VpcId The VPC ID or unique ID of the resource. We recommend using the unique ID. This parameter is required unless a CCN flow log is deleted.
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
        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
