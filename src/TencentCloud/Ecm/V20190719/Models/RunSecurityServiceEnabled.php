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
 * CWP;
 *
 * @method boolean getEnabled() Obtain Whether to enable.
 * @method void setEnabled(boolean $Enabled) Set Whether to enable.
 * @method integer getVersion() Obtain CWP edition. Valid values: 0: Basic Edition; 1: Pro Edition. Currently, only Basic Edition is supported
 * @method void setVersion(integer $Version) Set CWP edition. Valid values: 0: Basic Edition; 1: Pro Edition. Currently, only Basic Edition is supported
 */
class RunSecurityServiceEnabled extends AbstractModel
{
    /**
     * @var boolean Whether to enable.
     */
    public $Enabled;

    /**
     * @var integer CWP edition. Valid values: 0: Basic Edition; 1: Pro Edition. Currently, only Basic Edition is supported
     */
    public $Version;

    /**
     * @param boolean $Enabled Whether to enable.
     * @param integer $Version CWP edition. Valid values: 0: Basic Edition; 1: Pro Edition. Currently, only Basic Edition is supported
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
