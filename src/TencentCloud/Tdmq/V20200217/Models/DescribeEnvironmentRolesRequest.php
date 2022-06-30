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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvironmentRoles request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name (required).
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name (required).
 * @method integer getOffset() Obtain Offset. If this parameter is left empty, 0 will be used by default.
 * @method void setOffset(integer $Offset) Set Offset. If this parameter is left empty, 0 will be used by default.
 * @method integer getLimit() Obtain Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
 * @method string getClusterId() Obtain Pulsar cluster ID (required)
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID (required)
 * @method string getRoleName() Obtain Role name
 * @method void setRoleName(string $RoleName) Set Role name
 * @method array getFilters() Obtain * RoleName
Filter by role name for exact query.
Type: String
Required: no
 * @method void setFilters(array $Filters) Set * RoleName
Filter by role name for exact query.
Type: String
Required: no
 */
class DescribeEnvironmentRolesRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name (required).
     */
    public $EnvironmentId;

    /**
     * @var integer Offset. If this parameter is left empty, 0 will be used by default.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
     */
    public $Limit;

    /**
     * @var string Pulsar cluster ID (required)
     */
    public $ClusterId;

    /**
     * @var string Role name
     */
    public $RoleName;

    /**
     * @var array * RoleName
Filter by role name for exact query.
Type: String
Required: no
     */
    public $Filters;

    /**
     * @param string $EnvironmentId Environment (namespace) name (required).
     * @param integer $Offset Offset. If this parameter is left empty, 0 will be used by default.
     * @param integer $Limit Number of results to be returned. If this parameter is left empty, 10 will be used by default. The maximum value is 20.
     * @param string $ClusterId Pulsar cluster ID (required)
     * @param string $RoleName Role name
     * @param array $Filters * RoleName
Filter by role name for exact query.
Type: String
Required: no
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
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
