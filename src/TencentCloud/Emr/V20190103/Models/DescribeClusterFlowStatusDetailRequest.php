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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterFlowStatusDetail request structure.
 *
 * @method string getInstanceId() Obtain EMR instance ID
 * @method void setInstanceId(string $InstanceId) Set EMR instance ID
 * @method FlowParam getFlowParam() Obtain Process-related parameters.
 * @method void setFlowParam(FlowParam $FlowParam) Set Process-related parameters.
 * @method boolean getNeedExtraDetail() Obtain Whether to return additional task information.
The default value is false.
 * @method void setNeedExtraDetail(boolean $NeedExtraDetail) Set Whether to return additional task information.
The default value is false.
 */
class DescribeClusterFlowStatusDetailRequest extends AbstractModel
{
    /**
     * @var string EMR instance ID
     */
    public $InstanceId;

    /**
     * @var FlowParam Process-related parameters.
     */
    public $FlowParam;

    /**
     * @var boolean Whether to return additional task information.
The default value is false.
     */
    public $NeedExtraDetail;

    /**
     * @param string $InstanceId EMR instance ID
     * @param FlowParam $FlowParam Process-related parameters.
     * @param boolean $NeedExtraDetail Whether to return additional task information.
The default value is false.
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

        if (array_key_exists("FlowParam",$param) and $param["FlowParam"] !== null) {
            $this->FlowParam = new FlowParam();
            $this->FlowParam->deserialize($param["FlowParam"]);
        }

        if (array_key_exists("NeedExtraDetail",$param) and $param["NeedExtraDetail"] !== null) {
            $this->NeedExtraDetail = $param["NeedExtraDetail"];
        }
    }
}
