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
 * Origin-pull request parameters Cookie configuration
 *
 * @method string getSwitch() Obtain Whether to enable the origin-pull request parameter cookie. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable the origin-pull request parameter cookie. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method string getAction() Obtain Origin-Pull request parameter cookie mode. this parameter is required when `switch` is on. valid values are:.
<Li>Full: indicates full retention;</li>.
<Li>Ignore: ignore all.</li>.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>ExcludeCustom: ignore partial parameters.</li>.
 * @method void setAction(string $Action) Set Origin-Pull request parameter cookie mode. this parameter is required when `switch` is on. valid values are:.
<Li>Full: indicates full retention;</li>.
<Li>Ignore: ignore all.</li>.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>ExcludeCustom: ignore partial parameters.</li>.
 * @method array getValues() Obtain Specifies parameter values. this parameter takes effect only when the query string mode action is `includecustom` or `excludecustom`, and is used to specify the parameters to be reserved or ignored. up to 10 parameters are supported.
 * @method void setValues(array $Values) Set Specifies parameter values. this parameter takes effect only when the query string mode action is `includecustom` or `excludecustom`, and is used to specify the parameters to be reserved or ignored. up to 10 parameters are supported.
 */
class UpstreamRequestCookie extends AbstractModel
{
    /**
     * @var string Whether to enable the origin-pull request parameter cookie. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var string Origin-Pull request parameter cookie mode. this parameter is required when `switch` is on. valid values are:.
<Li>Full: indicates full retention;</li>.
<Li>Ignore: ignore all.</li>.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>ExcludeCustom: ignore partial parameters.</li>.
     */
    public $Action;

    /**
     * @var array Specifies parameter values. this parameter takes effect only when the query string mode action is `includecustom` or `excludecustom`, and is used to specify the parameters to be reserved or ignored. up to 10 parameters are supported.
     */
    public $Values;

    /**
     * @param string $Switch Whether to enable the origin-pull request parameter cookie. valid values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param string $Action Origin-Pull request parameter cookie mode. this parameter is required when `switch` is on. valid values are:.
<Li>Full: indicates full retention;</li>.
<Li>Ignore: ignore all.</li>.
<Li>`IncludeCustom`: retain partial parameters.</li>.
<Li>ExcludeCustom: ignore partial parameters.</li>.
     * @param array $Values Specifies parameter values. this parameter takes effect only when the query string mode action is `includecustom` or `excludecustom`, and is used to specify the parameters to be reserved or ignored. up to 10 parameters are supported.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
