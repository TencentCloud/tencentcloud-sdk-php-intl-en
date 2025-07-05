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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP direct access information
 *
 * @method boolean getEnabled() Obtain Whether to enable IP direct access. Valid values:
TRUE: yes
FALSE: no
Default value: TRUE.
Currently, Windows images do not support IP direct access.
 * @method void setEnabled(boolean $Enabled) Set Whether to enable IP direct access. Valid values:
TRUE: yes
FALSE: no
Default value: TRUE.
Currently, Windows images do not support IP direct access.
 */
class RunEIPDirectServiceEnabled extends AbstractModel
{
    /**
     * @var boolean Whether to enable IP direct access. Valid values:
TRUE: yes
FALSE: no
Default value: TRUE.
Currently, Windows images do not support IP direct access.
     */
    public $Enabled;

    /**
     * @param boolean $Enabled Whether to enable IP direct access. Valid values:
TRUE: yes
FALSE: no
Default value: TRUE.
Currently, Windows images do not support IP direct access.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
