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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation to be terminated.
 *
 * @method string getReplicaSetName() Obtain Name of the shard where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the shard name.
 * @method void setReplicaSetName(string $ReplicaSetName) Set Name of the shard where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the shard name.
 * @method string getNodeName() Obtain Name of the node where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the node name.
 * @method void setNodeName(string $NodeName) Set Name of the node where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the node name.
 * @method integer getOpId() Obtain Operation number. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the operation number.
 * @method void setOpId(integer $OpId) Set Operation number. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the operation number.
 */
class Operation extends AbstractModel
{
    /**
     * @var string Name of the shard where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the shard name.
     */
    public $ReplicaSetName;

    /**
     * @var string Name of the node where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the node name.
     */
    public $NodeName;

    /**
     * @var integer Operation number. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the operation number.
     */
    public $OpId;

    /**
     * @param string $ReplicaSetName Name of the shard where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the shard name.
     * @param string $NodeName Name of the node where the operation is performed. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the node name.
     * @param integer $OpId Operation number. The [DescribeCurrentOp](https://www.tencentcloud.comom/document/product/240/48120?from_cn_redirect=1) API can be called to query the operation number.
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
        if (array_key_exists("ReplicaSetName",$param) and $param["ReplicaSetName"] !== null) {
            $this->ReplicaSetName = $param["ReplicaSetName"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("OpId",$param) and $param["OpId"] !== null) {
            $this->OpId = $param["OpId"];
        }
    }
}
