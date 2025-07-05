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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin-pull request parameters query string configuration.
 *
 * @method string getSwitch() Obtain Whether to enable origin-pull request parameter query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method void setSwitch(string $Switch) Set Whether to enable origin-pull request parameter query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
 * @method string getAction() Obtain Query string mode. this parameter is required when switch is on. values:.
<Li>`Full`: retain all</li>.
<Li>`Ignore`: ignore all;</li>.
<Li>IncludeCustom: retain partial parameters.</li>.
<Li>ExcludeCustom: ignore partial parameters.</li>.
 * @method void setAction(string $Action) Set Query string mode. this parameter is required when switch is on. values:.
<Li>`Full`: retain all</li>.
<Li>`Ignore`: ignore all;</li>.
<Li>IncludeCustom: retain partial parameters.</li>.
<Li>ExcludeCustom: ignore partial parameters.</li>.
 * @method array getValues() Obtain Specifies parameter values. this parameter takes effect only when the query string mode action is `includecustom` or `excludecustom`, and is used to specify the parameters to be reserved or ignored. up to 10 parameters are supported.
 * @method void setValues(array $Values) Set Specifies parameter values. this parameter takes effect only when the query string mode action is `includecustom` or `excludecustom`, and is used to specify the parameters to be reserved or ignored. up to 10 parameters are supported.
 */
class UpstreamRequestQueryString extends AbstractModel
{
    /**
     * @var string Whether to enable origin-pull request parameter query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     */
    public $Switch;

    /**
     * @var string Query string mode. this parameter is required when switch is on. values:.
<Li>`Full`: retain all</li>.
<Li>`Ignore`: ignore all;</li>.
<Li>IncludeCustom: retain partial parameters.</li>.
<Li>ExcludeCustom: ignore partial parameters.</li>.
     */
    public $Action;

    /**
     * @var array Specifies parameter values. this parameter takes effect only when the query string mode action is `includecustom` or `excludecustom`, and is used to specify the parameters to be reserved or ignored. up to 10 parameters are supported.
     */
    public $Values;

    /**
     * @param string $Switch Whether to enable origin-pull request parameter query string. values:.
<Li>`On`: enable;</li>
.
<Li>Off: disable.</li>.
     * @param string $Action Query string mode. this parameter is required when switch is on. values:.
<Li>`Full`: retain all</li>.
<Li>`Ignore`: ignore all;</li>.
<Li>IncludeCustom: retain partial parameters.</li>.
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
