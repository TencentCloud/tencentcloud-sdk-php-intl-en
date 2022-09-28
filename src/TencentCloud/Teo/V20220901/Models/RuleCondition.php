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
 * Rule engine condition parameters
 *
 * @method string getOperator() Obtain Operator. Valid values:
<li>equal: Equal to.</li>
<li>notequal: Not equal to.</li>
 * @method void setOperator(string $Operator) Set Operator. Valid values:
<li>equal: Equal to.</li>
<li>notequal: Not equal to.</li>
 * @method string getTarget() Obtain Match type. Valid values:
<li>`host`: All</li>
<li>`filename`: File name</li>
<li>`extension`: File extension</li>
<li>`host`: HOST: .</li>
<li>`full_url`: The full URL of the current site. It must contain the HTTP protocol, host, and path.</li>
<li>`url`: The URL path of the current site.</li>
 * @method void setTarget(string $Target) Set Match type. Valid values:
<li>`host`: All</li>
<li>`filename`: File name</li>
<li>`extension`: File extension</li>
<li>`host`: HOST: .</li>
<li>`full_url`: The full URL of the current site. It must contain the HTTP protocol, host, and path.</li>
<li>`url`: The URL path of the current site.</li>
 * @method array getValues() Obtain Parameter values of the match type. Each match type has the following valid values:
<li>`Target=extension`:  The extension of the file, such as `jpg` and `txt`.</li>
<li>`Target=filename`: The file name without the extension.</li>
<li>`Target=host`: Values can be `all` 
or a host, such as `www.maxx55.com`.</li>
<li>`Target=url`: A URL request path under the current site, such as `/example`.</li>
<li>`Target=full_url`: A complete URL request under the current site. It must contain the protocol, host, and path, such as `https://www.maxx55.cn/example`.</li>
 * @method void setValues(array $Values) Set Parameter values of the match type. Each match type has the following valid values:
<li>`Target=extension`:  The extension of the file, such as `jpg` and `txt`.</li>
<li>`Target=filename`: The file name without the extension.</li>
<li>`Target=host`: Values can be `all` 
or a host, such as `www.maxx55.com`.</li>
<li>`Target=url`: A URL request path under the current site, such as `/example`.</li>
<li>`Target=full_url`: A complete URL request under the current site. It must contain the protocol, host, and path, such as `https://www.maxx55.cn/example`.</li>
 */
class RuleCondition extends AbstractModel
{
    /**
     * @var string Operator. Valid values:
<li>equal: Equal to.</li>
<li>notequal: Not equal to.</li>
     */
    public $Operator;

    /**
     * @var string Match type. Valid values:
<li>`host`: All</li>
<li>`filename`: File name</li>
<li>`extension`: File extension</li>
<li>`host`: HOST: .</li>
<li>`full_url`: The full URL of the current site. It must contain the HTTP protocol, host, and path.</li>
<li>`url`: The URL path of the current site.</li>
     */
    public $Target;

    /**
     * @var array Parameter values of the match type. Each match type has the following valid values:
<li>`Target=extension`:  The extension of the file, such as `jpg` and `txt`.</li>
<li>`Target=filename`: The file name without the extension.</li>
<li>`Target=host`: Values can be `all` 
or a host, such as `www.maxx55.com`.</li>
<li>`Target=url`: A URL request path under the current site, such as `/example`.</li>
<li>`Target=full_url`: A complete URL request under the current site. It must contain the protocol, host, and path, such as `https://www.maxx55.cn/example`.</li>
     */
    public $Values;

    /**
     * @param string $Operator Operator. Valid values:
<li>equal: Equal to.</li>
<li>notequal: Not equal to.</li>
     * @param string $Target Match type. Valid values:
<li>`host`: All</li>
<li>`filename`: File name</li>
<li>`extension`: File extension</li>
<li>`host`: HOST: .</li>
<li>`full_url`: The full URL of the current site. It must contain the HTTP protocol, host, and path.</li>
<li>`url`: The URL path of the current site.</li>
     * @param array $Values Parameter values of the match type. Each match type has the following valid values:
<li>`Target=extension`:  The extension of the file, such as `jpg` and `txt`.</li>
<li>`Target=filename`: The file name without the extension.</li>
<li>`Target=host`: Values can be `all` 
or a host, such as `www.maxx55.com`.</li>
<li>`Target=url`: A URL request path under the current site, such as `/example`.</li>
<li>`Target=full_url`: A complete URL request under the current site. It must contain the protocol, host, and path, such as `https://www.maxx55.cn/example`.</li>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
