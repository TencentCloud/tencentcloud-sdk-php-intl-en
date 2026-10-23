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
 * @method array getValues() Obtain Field value list, one-to-one with Names. InstanceId/ClusterId use exact match, and InstanceName uses fuzzy match by default.
 * @method void setValues(array $Values) Set Field value list, one-to-one with Names. InstanceId/ClusterId use exact match, and InstanceName uses fuzzy match by default.
 * @method array getNames() Obtain List of search field names. Only the following 3 fields are supported (case-insensitive, multiple values use OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check the cluster by instance ID), InstanceName (reverse-check the cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). When InstanceId and InstanceName are both imported, take the intersection (AND semantics).
 * @method void setNames(array $Names) Set List of search field names. Only the following 3 fields are supported (case-insensitive, multiple values use OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check the cluster by instance ID), InstanceName (reverse-check the cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). When InstanceId and InstanceName are both imported, take the intersection (AND semantics).
 * @method boolean getExactMatch() Obtain Exact match. Only applicable to InstanceName: true for exact match, false (default) for LIKE fuzzy matching.
 * @method void setExactMatch(boolean $ExactMatch) Set Exact match. Only applicable to InstanceName: true for exact match, false (default) for LIKE fuzzy matching.
 * @method string getName() Obtain Search field name (single field mode; either this parameter or Names). Supported: ClusterId, InstanceId, InstanceName.
 * @method void setName(string $Name) Set Search field name (single field mode; either this parameter or Names). Supported: ClusterId, InstanceId, InstanceName.
 * @method string getOperator() Obtain Operator (reserved field, currently disabled). Available values: >, >=, !=, =, <, <=
 * @method void setOperator(string $Operator) Set Operator (reserved field, currently disabled). Available values: >, >=, !=, =, <, <=
 */
class QueryFilter extends AbstractModel
{
    /**
     * @var array Field value list, one-to-one with Names. InstanceId/ClusterId use exact match, and InstanceName uses fuzzy match by default.
     */
    public $Values;

    /**
     * @var array List of search field names. Only the following 3 fields are supported (case-insensitive, multiple values use OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check the cluster by instance ID), InstanceName (reverse-check the cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). When InstanceId and InstanceName are both imported, take the intersection (AND semantics).
     */
    public $Names;

    /**
     * @var boolean Exact match. Only applicable to InstanceName: true for exact match, false (default) for LIKE fuzzy matching.
     */
    public $ExactMatch;

    /**
     * @var string Search field name (single field mode; either this parameter or Names). Supported: ClusterId, InstanceId, InstanceName.
     */
    public $Name;

    /**
     * @var string Operator (reserved field, currently disabled). Available values: >, >=, !=, =, <, <=
     * @deprecated
     */
    public $Operator;

    /**
     * @param array $Values Field value list, one-to-one with Names. InstanceId/ClusterId use exact match, and InstanceName uses fuzzy match by default.
     * @param array $Names List of search field names. Only the following 3 fields are supported (case-insensitive, multiple values use OR relationship): ClusterId (filter by cluster ID, exact match), InstanceId (reverse-check the cluster by instance ID), InstanceName (reverse-check the cluster by instance name, default LIKE fuzzy matching, exact match when ExactMatch=true). When InstanceId and InstanceName are both imported, take the intersection (AND semantics).
     * @param boolean $ExactMatch Exact match. Only applicable to InstanceName: true for exact match, false (default) for LIKE fuzzy matching.
     * @param string $Name Search field name (single field mode; either this parameter or Names). Supported: ClusterId, InstanceId, InstanceName.
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
