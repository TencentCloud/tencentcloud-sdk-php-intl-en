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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ECM Cloud Workload Protection
 *
 * @method boolean getEnabled() Obtain Whether it is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether it is enabled
 * @method integer getVersion() Obtain CWP version. Valid values: `0` (CWP Pro), `1` (CWP Pro)
 * @method void setVersion(integer $Version) Set CWP version. Valid values: `0` (CWP Pro), `1` (CWP Pro)
 */
class ECMRunSecurityServiceEnabled extends AbstractModel
{
    /**
     * @var boolean Whether it is enabled
     */
    public $Enabled;

    /**
     * @var integer CWP version. Valid values: `0` (CWP Pro), `1` (CWP Pro)
     */
    public $Version;

    /**
     * @param boolean $Enabled Whether it is enabled
     * @param integer $Version CWP version. Valid values: `0` (CWP Pro), `1` (CWP Pro)
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
