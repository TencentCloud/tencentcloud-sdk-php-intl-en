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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF custom domain name endpoint
 *
 * @method string getPathMatch() Obtain <p>Matching path</p>
 * @method void setPathMatch(string $PathMatch) Set <p>Matching path</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method string getFunctionName() Obtain <p>Function name</p>
 * @method void setFunctionName(string $FunctionName) Set <p>Function name</p>
 * @method string getQualifier() Obtain <p>Function version</p>
 * @method void setQualifier(string $Qualifier) Set <p>Function version</p>
 */
class ScfCustomDomainEndpointItem extends AbstractModel
{
    /**
     * @var string <p>Matching path</p>
     */
    public $PathMatch;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var string <p>Function name</p>
     */
    public $FunctionName;

    /**
     * @var string <p>Function version</p>
     */
    public $Qualifier;

    /**
     * @param string $PathMatch <p>Matching path</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param string $FunctionName <p>Function name</p>
     * @param string $Qualifier <p>Function version</p>
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
        if (array_key_exists("PathMatch",$param) and $param["PathMatch"] !== null) {
            $this->PathMatch = $param["PathMatch"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}
