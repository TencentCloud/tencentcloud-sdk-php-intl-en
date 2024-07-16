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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceNodes request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getNodeRole() Obtain Cluster role type, defaulted as "data node".
 * @method void setNodeRole(string $NodeRole) Set Cluster role type, defaulted as "data node".
 * @method integer getOffset() Obtain Pagination parameters. The first page is 0, and the second page is 10.
 * @method void setOffset(integer $Offset) Set Pagination parameters. The first page is 0, and the second page is 10.
 * @method integer getLimit() Obtain Pagination parameters. The pagination step length is 10 by default.
 * @method void setLimit(integer $Limit) Set Pagination parameters. The pagination step length is 10 by default.
 * @method string getDisplayPolicy() Obtain Display policy, and all items are displayed when All is selected.
 * @method void setDisplayPolicy(string $DisplayPolicy) Set Display policy, and all items are displayed when All is selected.
 */
class DescribeInstanceNodesRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var string Cluster role type, defaulted as "data node".
     */
    public $NodeRole;

    /**
     * @var integer Pagination parameters. The first page is 0, and the second page is 10.
     */
    public $Offset;

    /**
     * @var integer Pagination parameters. The pagination step length is 10 by default.
     */
    public $Limit;

    /**
     * @var string Display policy, and all items are displayed when All is selected.
     */
    public $DisplayPolicy;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param string $NodeRole Cluster role type, defaulted as "data node".
     * @param integer $Offset Pagination parameters. The first page is 0, and the second page is 10.
     * @param integer $Limit Pagination parameters. The pagination step length is 10 by default.
     * @param string $DisplayPolicy Display policy, and all items are displayed when All is selected.
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

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DisplayPolicy",$param) and $param["DisplayPolicy"] !== null) {
            $this->DisplayPolicy = $param["DisplayPolicy"];
        }
    }
}
