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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomFunction request structure.
 *
 * @method string getType() Obtain Enumerated values: HIVE, SPARK, DLC
 * @method void setType(string $Type) Set Enumerated values: HIVE, SPARK, DLC
 * @method string getKind() Obtain Enumerated values: ANALYSIS (function), ENCRYPTION (encryption function), AGGREGATE (aggregate function), LOGIC (logic function), DATE_AND_TIME (date and time function), MATH (math function), CONVERSION (conversion function), STRING (string function), IP_AND_DOMAIN (IP and domain function), WINDOW (window function), OTHER (other function)
 * @method void setKind(string $Kind) Set Enumerated values: ANALYSIS (function), ENCRYPTION (encryption function), AGGREGATE (aggregate function), LOGIC (logic function), DATE_AND_TIME (date and time function), MATH (math function), CONVERSION (conversion function), STRING (string function), IP_AND_DOMAIN (IP and domain function), WINDOW (window function), OTHER (other function)
 * @method string getName() Obtain Function Name
 * @method void setName(string $Name) Set Function Name
 * @method string getClusterIdentifier() Obtain Cluster Instance Engine ID
 * @method void setClusterIdentifier(string $ClusterIdentifier) Set Cluster Instance Engine ID
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class CreateCustomFunctionRequest extends AbstractModel
{
    /**
     * @var string Enumerated values: HIVE, SPARK, DLC
     */
    public $Type;

    /**
     * @var string Enumerated values: ANALYSIS (function), ENCRYPTION (encryption function), AGGREGATE (aggregate function), LOGIC (logic function), DATE_AND_TIME (date and time function), MATH (math function), CONVERSION (conversion function), STRING (string function), IP_AND_DOMAIN (IP and domain function), WINDOW (window function), OTHER (other function)
     */
    public $Kind;

    /**
     * @var string Function Name
     */
    public $Name;

    /**
     * @var string Cluster Instance Engine ID
     */
    public $ClusterIdentifier;

    /**
     * @var string Database name
     */
    public $DbName;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param string $Type Enumerated values: HIVE, SPARK, DLC
     * @param string $Kind Enumerated values: ANALYSIS (function), ENCRYPTION (encryption function), AGGREGATE (aggregate function), LOGIC (logic function), DATE_AND_TIME (date and time function), MATH (math function), CONVERSION (conversion function), STRING (string function), IP_AND_DOMAIN (IP and domain function), WINDOW (window function), OTHER (other function)
     * @param string $Name Function Name
     * @param string $ClusterIdentifier Cluster Instance Engine ID
     * @param string $DbName Database name
     * @param string $ProjectId Project ID
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
