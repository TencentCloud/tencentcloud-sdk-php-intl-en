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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace usage information
 *
 * @method array getFunctions() Obtain Function array
 * @method void setFunctions(array $Functions) Set Function array
 * @method string getNamespace() Obtain Namespace name
 * @method void setNamespace(string $Namespace) Set Namespace name
 * @method integer getFunctionsCount() Obtain Number of functions in namespace
 * @method void setFunctionsCount(integer $FunctionsCount) Set Number of functions in namespace
 * @method integer getTotalConcurrencyMem() Obtain Total memory quota of the namespace
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalConcurrencyMem(integer $TotalConcurrencyMem) Set Total memory quota of the namespace
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getTotalAllocatedConcurrencyMem() Obtain Concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTotalAllocatedConcurrencyMem(integer $TotalAllocatedConcurrencyMem) Set Concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTotalAllocatedProvisionedMem() Obtain Provisioned concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTotalAllocatedProvisionedMem(integer $TotalAllocatedProvisionedMem) Set Provisioned concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class NamespaceUsage extends AbstractModel
{
    /**
     * @var array Function array
     */
    public $Functions;

    /**
     * @var string Namespace name
     */
    public $Namespace;

    /**
     * @var integer Number of functions in namespace
     */
    public $FunctionsCount;

    /**
     * @var integer Total memory quota of the namespace
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalConcurrencyMem;

    /**
     * @var integer Concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TotalAllocatedConcurrencyMem;

    /**
     * @var integer Provisioned concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TotalAllocatedProvisionedMem;

    /**
     * @param array $Functions Function array
     * @param string $Namespace Namespace name
     * @param integer $FunctionsCount Number of functions in namespace
     * @param integer $TotalConcurrencyMem Total memory quota of the namespace
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $TotalAllocatedConcurrencyMem Concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $TotalAllocatedProvisionedMem Provisioned concurrency usage of the namespace
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = $param["Functions"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionsCount",$param) and $param["FunctionsCount"] !== null) {
            $this->FunctionsCount = $param["FunctionsCount"];
        }

        if (array_key_exists("TotalConcurrencyMem",$param) and $param["TotalConcurrencyMem"] !== null) {
            $this->TotalConcurrencyMem = $param["TotalConcurrencyMem"];
        }

        if (array_key_exists("TotalAllocatedConcurrencyMem",$param) and $param["TotalAllocatedConcurrencyMem"] !== null) {
            $this->TotalAllocatedConcurrencyMem = $param["TotalAllocatedConcurrencyMem"];
        }

        if (array_key_exists("TotalAllocatedProvisionedMem",$param) and $param["TotalAllocatedProvisionedMem"] !== null) {
            $this->TotalAllocatedProvisionedMem = $param["TotalAllocatedProvisionedMem"];
        }
    }
}
