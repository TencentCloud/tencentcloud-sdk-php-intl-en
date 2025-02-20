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
 * Origin URL rewrite configuration parameters.
 *
 * @method string getType() Obtain Origin-Pull url rewriting type, only path is supported.
 * @method void setType(string $Type) Set Origin-Pull url rewriting type, only path is supported.
 * @method string getAction() Obtain Origin-Pull url rewrite action. valid values are:.
<Li>`Replace`: replace the path prefix.</li>.
<Li>`AddPrefix`: add the path prefix.</li>.
<Li>`RmvPrefix`: remove the path prefix.</li>.
 * @method void setAction(string $Action) Set Origin-Pull url rewrite action. valid values are:.
<Li>`Replace`: replace the path prefix.</li>.
<Li>`AddPrefix`: add the path prefix.</li>.
<Li>`RmvPrefix`: remove the path prefix.</li>.
 * @method string getValue() Obtain Origin-Pull url rewrite value, maximum length 1024, must start with /.<br>note: when action is addprefix, it cannot end with /; when action is rmvprefix, * cannot be present.
 * @method void setValue(string $Value) Set Origin-Pull url rewrite value, maximum length 1024, must start with /.<br>note: when action is addprefix, it cannot end with /; when action is rmvprefix, * cannot be present.
 */
class UpstreamURLRewriteParameters extends AbstractModel
{
    /**
     * @var string Origin-Pull url rewriting type, only path is supported.
     */
    public $Type;

    /**
     * @var string Origin-Pull url rewrite action. valid values are:.
<Li>`Replace`: replace the path prefix.</li>.
<Li>`AddPrefix`: add the path prefix.</li>.
<Li>`RmvPrefix`: remove the path prefix.</li>.
     */
    public $Action;

    /**
     * @var string Origin-Pull url rewrite value, maximum length 1024, must start with /.<br>note: when action is addprefix, it cannot end with /; when action is rmvprefix, * cannot be present.
     */
    public $Value;

    /**
     * @param string $Type Origin-Pull url rewriting type, only path is supported.
     * @param string $Action Origin-Pull url rewrite action. valid values are:.
<Li>`Replace`: replace the path prefix.</li>.
<Li>`AddPrefix`: add the path prefix.</li>.
<Li>`RmvPrefix`: remove the path prefix.</li>.
     * @param string $Value Origin-Pull url rewrite value, maximum length 1024, must start with /.<br>note: when action is addprefix, it cannot end with /; when action is rmvprefix, * cannot be present.
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
