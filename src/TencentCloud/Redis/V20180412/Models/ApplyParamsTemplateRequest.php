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
 * ApplyParamsTemplate request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy the instance ID in the instance list.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy the instance ID in the instance list.
 * @method string getTemplateId() Obtain ID of the applied parameter template.
- The parameter template ID can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://www.tencentcloud.comom/document/product/239/58748?from_cn_redirect=1).
- The operation can only be successfully performed when the parameter template version matches the architecture version of the target instance. A version mismatch will trigger an execution error.
 * @method void setTemplateId(string $TemplateId) Set ID of the applied parameter template.
- The parameter template ID can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://www.tencentcloud.comom/document/product/239/58748?from_cn_redirect=1).
- The operation can only be successfully performed when the parameter template version matches the architecture version of the target instance. A version mismatch will trigger an execution error.
 */
class ApplyParamsTemplateRequest extends AbstractModel
{
    /**
     * @var array Instance ID list. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy the instance ID in the instance list.
     */
    public $InstanceIds;

    /**
     * @var string ID of the applied parameter template.
- The parameter template ID can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://www.tencentcloud.comom/document/product/239/58748?from_cn_redirect=1).
- The operation can only be successfully performed when the parameter template version matches the architecture version of the target instance. A version mismatch will trigger an execution error.
     */
    public $TemplateId;

    /**
     * @param array $InstanceIds Instance ID list. Log in to the [Redis console](https://console.tencentcloud.com/redis/instance) and copy the instance ID in the instance list.
     * @param string $TemplateId ID of the applied parameter template.
- The parameter template ID can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://www.tencentcloud.comom/document/product/239/58748?from_cn_redirect=1).
- The operation can only be successfully performed when the parameter template version matches the architecture version of the target instance. A version mismatch will trigger an execution error.
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
