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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kubernetes taint and toleration. Please note the supported fields for your Kubernetes version during use.
See https://kubernetes.io/docs/concepts/scheduling-eviction/taint-and-toleration/
 *
 * @method string getKey() Obtain Matched taint name
 * @method void setKey(string $Key) Set Matched taint name
 * @method string getOperator() Obtain Match mode. Default value: Equal.
 * @method void setOperator(string $Operator) Set Match mode. Default value: Equal.
 * @method string getEffect() Obtain Execution policy
 * @method void setEffect(string $Effect) Set Execution policy
 * @method string getValue() Obtain Taint value to match. Required when Operator is Equal.
 * @method void setValue(string $Value) Set Taint value to match. Required when Operator is Equal.
 * @method integer getTolerationSeconds() Obtain How long a Pod can still run on a node when the taint is not tolerated
 * @method void setTolerationSeconds(integer $TolerationSeconds) Set How long a Pod can still run on a node when the taint is not tolerated
 */
class K8SToleration extends AbstractModel
{
    /**
     * @var string Matched taint name
     */
    public $Key;

    /**
     * @var string Match mode. Default value: Equal.
     */
    public $Operator;

    /**
     * @var string Execution policy
     */
    public $Effect;

    /**
     * @var string Taint value to match. Required when Operator is Equal.
     */
    public $Value;

    /**
     * @var integer How long a Pod can still run on a node when the taint is not tolerated
     */
    public $TolerationSeconds;

    /**
     * @param string $Key Matched taint name
     * @param string $Operator Match mode. Default value: Equal.
     * @param string $Effect Execution policy
     * @param string $Value Taint value to match. Required when Operator is Equal.
     * @param integer $TolerationSeconds How long a Pod can still run on a node when the taint is not tolerated
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

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("TolerationSeconds",$param) and $param["TolerationSeconds"] !== null) {
            $this->TolerationSeconds = $param["TolerationSeconds"];
        }
    }
}
