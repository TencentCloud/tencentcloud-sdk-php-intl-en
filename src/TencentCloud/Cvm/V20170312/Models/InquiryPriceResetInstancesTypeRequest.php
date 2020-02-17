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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() Obtain Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 1.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 1.
 * @method string getInstanceType() Obtain Instance model. Different resource specifications are specified for different models. For specific values, see the instance resource specification table. You can also obtain the latest specification list by calling the API for querying the list of instance resource specifications.
 * @method void setInstanceType(string $InstanceType) Set Instance model. Different resource specifications are specified for different models. For specific values, see the instance resource specification table. You can also obtain the latest specification list by calling the API for querying the list of instance resource specifications.
 */

/**
 *InquiryPriceResetInstancesType request structure.
 */
class InquiryPriceResetInstancesTypeRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 1.
     */
    public $InstanceIds;

    /**
     * @var string Instance model. Different resource specifications are specified for different models. For specific values, see the instance resource specification table. You can also obtain the latest specification list by calling the API for querying the list of instance resource specifications.
     */
    public $InstanceType;
    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://cloud.tencent.com/document/api/213/15728) and look for `InstanceId` in the response. The maximum number of instances in each request is 1.
     * @param string $InstanceType Instance model. Different resource specifications are specified for different models. For specific values, see the instance resource specification table. You can also obtain the latest specification list by calling the API for querying the list of instance resource specifications.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
