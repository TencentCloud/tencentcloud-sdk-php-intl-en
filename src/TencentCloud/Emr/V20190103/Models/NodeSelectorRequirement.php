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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod node selector requirement.
 *
 * @method string getKey() Obtain Key of the node selector requirement.
 * @method void setKey(string $Key) Set Key of the node selector requirement.
 * @method string getOperator() Obtain Operator value of the node selector requirement. Supported operators: In, NotIn, Exists, DoesNotExist, Gt, and Lt.
 * @method void setOperator(string $Operator) Set Operator value of the node selector requirement. Supported operators: In, NotIn, Exists, DoesNotExist, Gt, and Lt.
 * @method array getValues() Obtain Values of the node selector requirement.
 * @method void setValues(array $Values) Set Values of the node selector requirement.
 */
class NodeSelectorRequirement extends AbstractModel
{
    /**
     * @var string Key of the node selector requirement.
     */
    public $Key;

    /**
     * @var string Operator value of the node selector requirement. Supported operators: In, NotIn, Exists, DoesNotExist, Gt, and Lt.
     */
    public $Operator;

    /**
     * @var array Values of the node selector requirement.
     */
    public $Values;

    /**
     * @param string $Key Key of the node selector requirement.
     * @param string $Operator Operator value of the node selector requirement. Supported operators: In, NotIn, Exists, DoesNotExist, Gt, and Lt.
     * @param array $Values Values of the node selector requirement.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
