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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQEnvironmentRoles request structure.
 *
 * @method string getClusterId() Obtain Required. Specifies the ID of the RocketMQ cluster.
 * @method void setClusterId(string $ClusterId) Set Required. Specifies the ID of the RocketMQ cluster.
 * @method string getEnvironmentId() Obtain Namespace
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace
 * @method integer getOffset() Obtain Starting index. Default is 0 if left empty.
 * @method void setOffset(integer $Offset) Set Starting index. Default is 0 if left empty.
 * @method integer getLimit() Obtain Number of returns, default to 10 if not specified, maximum value: 20.
 * @method void setLimit(integer $Limit) Set Number of returns, default to 10 if not specified, maximum value: 20.
 * @method string getRoleName() Obtain Role name.
 * @method void setRoleName(string $RoleName) Set Role name.
 * @method array getFilters() Obtain Filters RoleName by role name for precise query. Type: string. Required: no.
 * @method void setFilters(array $Filters) Set Filters RoleName by role name for precise query. Type: string. Required: no.
 */
class DescribeRocketMQEnvironmentRolesRequest extends AbstractModel
{
    /**
     * @var string Required. Specifies the ID of the RocketMQ cluster.
     */
    public $ClusterId;

    /**
     * @var string Namespace
     */
    public $EnvironmentId;

    /**
     * @var integer Starting index. Default is 0 if left empty.
     */
    public $Offset;

    /**
     * @var integer Number of returns, default to 10 if not specified, maximum value: 20.
     */
    public $Limit;

    /**
     * @var string Role name.
     */
    public $RoleName;

    /**
     * @var array Filters RoleName by role name for precise query. Type: string. Required: no.
     */
    public $Filters;

    /**
     * @param string $ClusterId Required. Specifies the ID of the RocketMQ cluster.
     * @param string $EnvironmentId Namespace
     * @param integer $Offset Starting index. Default is 0 if left empty.
     * @param integer $Limit Number of returns, default to 10 if not specified, maximum value: 20.
     * @param string $RoleName Role name.
     * @param array $Filters Filters RoleName by role name for precise query. Type: string. Required: no.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
