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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topology configuration of nodes for cloud disk edition.
 *
 * @method ReadWriteNode getReadWriteNode() Obtain RW node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
 * @method void setReadWriteNode(ReadWriteNode $ReadWriteNode) Set RW node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
 * @method array getReadOnlyNodes() Obtain RO node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
 * @method void setReadOnlyNodes(array $ReadOnlyNodes) Set RO node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
 */
class ClusterTopology extends AbstractModel
{
    /**
     * @var ReadWriteNode RW node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
     */
    public $ReadWriteNode;

    /**
     * @var array RO node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
     */
    public $ReadOnlyNodes;

    /**
     * @param ReadWriteNode $ReadWriteNode RW node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
     * @param array $ReadOnlyNodes RO node topology.
Description: NodeId can be obtained through [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1).
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
        if (array_key_exists("ReadWriteNode",$param) and $param["ReadWriteNode"] !== null) {
            $this->ReadWriteNode = new ReadWriteNode();
            $this->ReadWriteNode->deserialize($param["ReadWriteNode"]);
        }

        if (array_key_exists("ReadOnlyNodes",$param) and $param["ReadOnlyNodes"] !== null) {
            $this->ReadOnlyNodes = [];
            foreach ($param["ReadOnlyNodes"] as $key => $value){
                $obj = new ReadonlyNode();
                $obj->deserialize($value);
                array_push($this->ReadOnlyNodes, $obj);
            }
        }
    }
}
