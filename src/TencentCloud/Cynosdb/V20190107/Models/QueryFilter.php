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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query filter. Filter criteria for the DescribeClusterAndInstances API.
 *
 * @method array getValues() Obtain Field value list, in one-to-one correspondence with Names. InstanceId/ClusterId uses exact matching, and InstanceName uses fuzzy matching by default.
 * @method void setValues(array $Values) Set Field value list, in one-to-one correspondence with Names. InstanceId/ClusterId uses exact matching, and InstanceName uses fuzzy matching by default.
 * @method array getNames() Obtain Search field name list, support the following 3 fields (case-insensitive, multiple values are OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check cluster by instance ID), InstanceName (reverse-check cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). Take the intersection when InstanceId and InstanceName are input at the same time (AND semantics).
 * @method void setNames(array $Names) Set Search field name list, support the following 3 fields (case-insensitive, multiple values are OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check cluster by instance ID), InstanceName (reverse-check cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). Take the intersection when InstanceId and InstanceName are input at the same time (AND semantics).
 * @method boolean getExactMatch() Obtain Exact match. Only applicable to InstanceName: true for exact matching, false (default) for LIKE fuzzy matching.
 * @method void setExactMatch(boolean $ExactMatch) Set Exact match. Only applicable to InstanceName: true for exact matching, false (default) for LIKE fuzzy matching.
 * @method string getName() Obtain Search field name (single field mode, choose between this and Names). ClusterId, InstanceId, and InstanceName are supported.
 * @method void setName(string $Name) Set Search field name (single field mode, choose between this and Names). ClusterId, InstanceId, and InstanceName are supported.
 * @method string getOperator() Obtain Operator (reserved field, currently disabled). Available values: >, >=, !=, =, <, <=
 * @method void setOperator(string $Operator) Set Operator (reserved field, currently disabled). Available values: >, >=, !=, =, <, <=
 */
class QueryFilter extends AbstractModel
{
    /**
     * @var array Field value list, in one-to-one correspondence with Names. InstanceId/ClusterId uses exact matching, and InstanceName uses fuzzy matching by default.
     */
    public $Values;

    /**
     * @var array Search field name list, support the following 3 fields (case-insensitive, multiple values are OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check cluster by instance ID), InstanceName (reverse-check cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). Take the intersection when InstanceId and InstanceName are input at the same time (AND semantics).
     */
    public $Names;

    /**
     * @var boolean Exact match. Only applicable to InstanceName: true for exact matching, false (default) for LIKE fuzzy matching.
     */
    public $ExactMatch;

    /**
     * @var string Search field name (single field mode, choose between this and Names). ClusterId, InstanceId, and InstanceName are supported.
     */
    public $Name;

    /**
     * @var string Operator (reserved field, currently disabled). Available values: >, >=, !=, =, <, <=
     * @deprecated
     */
    public $Operator;

    /**
     * @param array $Values Field value list, in one-to-one correspondence with Names. InstanceId/ClusterId uses exact matching, and InstanceName uses fuzzy matching by default.
     * @param array $Names Search field name list, support the following 3 fields (case-insensitive, multiple values are OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check cluster by instance ID), InstanceName (reverse-check cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). Take the intersection when InstanceId and InstanceName are input at the same time (AND semantics).
     * @param boolean $ExactMatch Exact match. Only applicable to InstanceName: true for exact matching, false (default) for LIKE fuzzy matching.
     * @param string $Name Search field name (single field mode, choose between this and Names). ClusterId, InstanceId, and InstanceName are supported.
     * @param string $Operator Operator (reserved field, currently disabled). Available values: >, >=, !=, =, <, <=
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
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
