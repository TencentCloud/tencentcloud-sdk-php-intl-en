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
 * ListAliases request structure.
 *
 * @method string getFunctionName() Obtain Function name
 * @method void setFunctionName(string $FunctionName) Set Function name
 * @method string getNamespace() Obtain Function namespace
 * @method void setNamespace(string $Namespace) Set Function namespace
 * @method string getFunctionVersion() Obtain If this parameter is provided, only aliases associated with this function version will be returned.
 * @method void setFunctionVersion(string $FunctionVersion) Set If this parameter is provided, only aliases associated with this function version will be returned.
 * @method string getOffset() Obtain Data offset. Default value: 0
 * @method void setOffset(string $Offset) Set Data offset. Default value: 0
 * @method string getLimit() Obtain Number of results to be returned. Default value: 20
 * @method void setLimit(string $Limit) Set Number of results to be returned. Default value: 20
 */
class ListAliasesRequest extends AbstractModel
{
    /**
     * @var string Function name
     */
    public $FunctionName;

    /**
     * @var string Function namespace
     */
    public $Namespace;

    /**
     * @var string If this parameter is provided, only aliases associated with this function version will be returned.
     */
    public $FunctionVersion;

    /**
     * @var string Data offset. Default value: 0
     */
    public $Offset;

    /**
     * @var string Number of results to be returned. Default value: 20
     */
    public $Limit;

    /**
     * @param string $FunctionName Function name
     * @param string $Namespace Function namespace
     * @param string $FunctionVersion If this parameter is provided, only aliases associated with this function version will be returned.
     * @param string $Offset Data offset. Default value: 0
     * @param string $Limit Number of results to be returned. Default value: 20
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
