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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin-pull condition
 *
 * @method string getTarget() Obtain Match type. Values:
<li>`url`: Partial URL path under the current site, such as "/example" and "/example/foo.jpg". You can use an asterisk (*) to indicate all values and a question mark (?) to indicate any single character.
</li>
 * @method void setTarget(string $Target) Set Match type. Values:
<li>`url`: Partial URL path under the current site, such as "/example" and "/example/foo.jpg". You can use an asterisk (*) to indicate all values and a question mark (?) to indicate any single character.
</li>
 * @method string getOperator() Obtain The operator. Values:
<li>`equal`: Equals</li>
 * @method void setOperator(string $Operator) Set The operator. Values:
<li>`equal`: Equals</li>
 * @method array getValues() Obtain Values of the match type.
 * @method void setValues(array $Values) Set Values of the match type.
 */
class OriginGroupCondition extends AbstractModel
{
    /**
     * @var string Match type. Values:
<li>`url`: Partial URL path under the current site, such as "/example" and "/example/foo.jpg". You can use an asterisk (*) to indicate all values and a question mark (?) to indicate any single character.
</li>
     */
    public $Target;

    /**
     * @var string The operator. Values:
<li>`equal`: Equals</li>
     */
    public $Operator;

    /**
     * @var array Values of the match type.
     */
    public $Values;

    /**
     * @param string $Target Match type. Values:
<li>`url`: Partial URL path under the current site, such as "/example" and "/example/foo.jpg". You can use an asterisk (*) to indicate all values and a question mark (?) to indicate any single character.
</li>
     * @param string $Operator The operator. Values:
<li>`equal`: Equals</li>
     * @param array $Values Values of the match type.
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
        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
