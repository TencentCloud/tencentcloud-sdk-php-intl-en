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
     * @param array $Functions Function array
     * @param string $Namespace Namespace name
     * @param integer $FunctionsCount Number of functions in namespace
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
    }
}
