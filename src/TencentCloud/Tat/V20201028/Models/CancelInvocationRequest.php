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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelInvocation request structure.
 *
 * @method string getInvocationId() Obtain Execution activity ID.

Call the [DescribeInvocations](https://www.tencentcloud.com/document/api/1340/52679?from_cn_redirect=1) api to query execution.
 * @method void setInvocationId(string $InvocationId) Set Execution activity ID.

Call the [DescribeInvocations](https://www.tencentcloud.com/document/api/1340/52679?from_cn_redirect=1) api to query execution.
 * @method array getInstanceIds() Obtain Instance ID list. upper limit: 100.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
- TAT Register instance.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list. upper limit: 100.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
- TAT Register instance.
 */
class CancelInvocationRequest extends AbstractModel
{
    /**
     * @var string Execution activity ID.

Call the [DescribeInvocations](https://www.tencentcloud.com/document/api/1340/52679?from_cn_redirect=1) api to query execution.
     */
    public $InvocationId;

    /**
     * @var array Instance ID list. upper limit: 100.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
- TAT Register instance.
     */
    public $InstanceIds;

    /**
     * @param string $InvocationId Execution activity ID.

Call the [DescribeInvocations](https://www.tencentcloud.com/document/api/1340/52679?from_cn_redirect=1) api to query execution.
     * @param array $InstanceIds Instance ID list. upper limit: 100.

Instance ID can be obtained through the query instance interface of corresponding cloud services. currently supported instance types:.
- CVM
- Lighthouse
- TAT Register instance.
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
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            $this->InvocationId = $param["InvocationId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
