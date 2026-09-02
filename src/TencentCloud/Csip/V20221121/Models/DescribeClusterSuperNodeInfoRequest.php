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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterSuperNodeInfo request structure.
 *
 * @method string getNodeUniqueID() Obtain <p>Unique ID of the super node (corresponds to unique_id in the cluster node table).<br>Value reference: obtained from the UniqueID field returned by the DescribeClusterNodeList API (nodes with node type SUPER)</p>
 * @method void setNodeUniqueID(string $NodeUniqueID) Set <p>Unique ID of the super node (corresponds to unique_id in the cluster node table).<br>Value reference: obtained from the UniqueID field returned by the DescribeClusterNodeList API (nodes with node type SUPER)</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class DescribeClusterSuperNodeInfoRequest extends AbstractModel
{
    /**
     * @var string <p>Unique ID of the super node (corresponds to unique_id in the cluster node table).<br>Value reference: obtained from the UniqueID field returned by the DescribeClusterNodeList API (nodes with node type SUPER)</p>
     */
    public $NodeUniqueID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param string $NodeUniqueID <p>Unique ID of the super node (corresponds to unique_id in the cluster node table).<br>Value reference: obtained from the UniqueID field returned by the DescribeClusterNodeList API (nodes with node type SUPER)</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
