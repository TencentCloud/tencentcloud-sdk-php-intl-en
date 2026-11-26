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
 * Access URL redirection configuration parameters.
 *
 * @method string getAction() Obtain Execution action. Valid values:
<li>full: retain all;</li>
<li>ignore: Ignore all.</li>
 * @method void setAction(string $Action) Set Execution action. Valid values:
<li>full: retain all;</li>
<li>ignore: Ignore all.</li>
 */
class AccessURLRedirectQueryString extends AbstractModel
{
    /**
     * @var string Execution action. Valid values:
<li>full: retain all;</li>
<li>ignore: Ignore all.</li>
     */
    public $Action;

    /**
     * @param string $Action Execution action. Valid values:
<li>full: retain all;</li>
<li>ignore: Ignore all.</li>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
