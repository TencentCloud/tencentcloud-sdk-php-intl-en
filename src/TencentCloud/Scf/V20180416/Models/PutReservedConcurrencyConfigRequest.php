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
 * PutReservedConcurrencyConfig request structure.
 *
 * @method string getFunctionName() Obtain Specifies the function of which you want to configure the reserved quota
 * @method void setFunctionName(string $FunctionName) Set Specifies the function of which you want to configure the reserved quota
 * @method integer getReservedConcurrencyMem() Obtain Reserved memory quota of the function. Note: the upper limit for the total reserved quota of the function is the user's total concurrency memory minus 12800
 * @method void setReservedConcurrencyMem(integer $ReservedConcurrencyMem) Set Reserved memory quota of the function. Note: the upper limit for the total reserved quota of the function is the user's total concurrency memory minus 12800
 * @method string getNamespace() Obtain Function namespace. Default value: `default`
 * @method void setNamespace(string $Namespace) Set Function namespace. Default value: `default`
 */
class PutReservedConcurrencyConfigRequest extends AbstractModel
{
    /**
     * @var string Specifies the function of which you want to configure the reserved quota
     */
    public $FunctionName;

    /**
     * @var integer Reserved memory quota of the function. Note: the upper limit for the total reserved quota of the function is the user's total concurrency memory minus 12800
     */
    public $ReservedConcurrencyMem;

    /**
     * @var string Function namespace. Default value: `default`
     */
    public $Namespace;

    /**
     * @param string $FunctionName Specifies the function of which you want to configure the reserved quota
     * @param integer $ReservedConcurrencyMem Reserved memory quota of the function. Note: the upper limit for the total reserved quota of the function is the user's total concurrency memory minus 12800
     * @param string $Namespace Function namespace. Default value: `default`
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("ReservedConcurrencyMem",$param) and $param["ReservedConcurrencyMem"] !== null) {
            $this->ReservedConcurrencyMem = $param["ReservedConcurrencyMem"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
