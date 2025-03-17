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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load configuration.
 *
 * @method Concurrency getConcurrency() Obtain Configuration for concurrency mode.

Note: This field may return null, indicating that no valid value is found.
 * @method void setConcurrency(Concurrency $Concurrency) Set Configuration for concurrency mode.

Note: This field may return null, indicating that no valid value is found.
 * @method RequestsPerSecond getRequestsPerSecond() Obtain Configuration for RPS mode.

Note: This field may return null, indicating that no valid value is found.
 * @method void setRequestsPerSecond(RequestsPerSecond $RequestsPerSecond) Set Configuration for RPS mode.

Note: This field may return null, indicating that no valid value is found.
 * @method ScriptOrigin getScriptOrigin() Obtain Built-in script mode.

Note: This field may return null, indicating that no valid value is found.
 * @method void setScriptOrigin(ScriptOrigin $ScriptOrigin) Set Built-in script mode.

Note: This field may return null, indicating that no valid value is found.
 */
class LoadSpec extends AbstractModel
{
    /**
     * @var Concurrency Configuration for concurrency mode.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Concurrency;

    /**
     * @var RequestsPerSecond Configuration for RPS mode.

Note: This field may return null, indicating that no valid value is found.
     */
    public $RequestsPerSecond;

    /**
     * @var ScriptOrigin Built-in script mode.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ScriptOrigin;

    /**
     * @param Concurrency $Concurrency Configuration for concurrency mode.

Note: This field may return null, indicating that no valid value is found.
     * @param RequestsPerSecond $RequestsPerSecond Configuration for RPS mode.

Note: This field may return null, indicating that no valid value is found.
     * @param ScriptOrigin $ScriptOrigin Built-in script mode.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = new Concurrency();
            $this->Concurrency->deserialize($param["Concurrency"]);
        }

        if (array_key_exists("RequestsPerSecond",$param) and $param["RequestsPerSecond"] !== null) {
            $this->RequestsPerSecond = new RequestsPerSecond();
            $this->RequestsPerSecond->deserialize($param["RequestsPerSecond"]);
        }

        if (array_key_exists("ScriptOrigin",$param) and $param["ScriptOrigin"] !== null) {
            $this->ScriptOrigin = new ScriptOrigin();
            $this->ScriptOrigin->deserialize($param["ScriptOrigin"]);
        }
    }
}
