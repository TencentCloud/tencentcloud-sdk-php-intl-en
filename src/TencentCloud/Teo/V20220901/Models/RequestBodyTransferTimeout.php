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
 * Body transfer timeout duration configuration.
 *
 * @method string getIdleTimeout() Obtain Body transfer timeout duration. valid values: 5-120. measurement unit: seconds (s) only.
 * @method void setIdleTimeout(string $IdleTimeout) Set Body transfer timeout duration. valid values: 5-120. measurement unit: seconds (s) only.
 * @method string getEnabled() Obtain Whether body transfer timeout is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
 * @method void setEnabled(string $Enabled) Set Whether body transfer timeout is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
 */
class RequestBodyTransferTimeout extends AbstractModel
{
    /**
     * @var string Body transfer timeout duration. valid values: 5-120. measurement unit: seconds (s) only.
     */
    public $IdleTimeout;

    /**
     * @var string Whether body transfer timeout is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
     */
    public $Enabled;

    /**
     * @param string $IdleTimeout Body transfer timeout duration. valid values: 5-120. measurement unit: seconds (s) only.
     * @param string $Enabled Whether body transfer timeout is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
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
        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
