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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shared CNAME configuration
ShareCname is only available to beta users. Submit a ticket if you need it.
 *
 * @method string getSwitch() Obtain Whether to enable Shared CNAME. Values:
`on`: Enable. When enabled, it uses a shared CNAME.
`off`: Disable. When disabled, it uses a default CNAME.

 * @method void setSwitch(string $Switch) Set Whether to enable Shared CNAME. Values:
`on`: Enable. When enabled, it uses a shared CNAME.
`off`: Disable. When disabled, it uses a default CNAME.

 * @method string getCname() Obtain Shared CNAME to be configured
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCname(string $Cname) Set Shared CNAME to be configured
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ShareCname extends AbstractModel
{
    /**
     * @var string Whether to enable Shared CNAME. Values:
`on`: Enable. When enabled, it uses a shared CNAME.
`off`: Disable. When disabled, it uses a default CNAME.

     */
    public $Switch;

    /**
     * @var string Shared CNAME to be configured
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Cname;

    /**
     * @param string $Switch Whether to enable Shared CNAME. Values:
`on`: Enable. When enabled, it uses a shared CNAME.
`off`: Disable. When disabled, it uses a default CNAME.

     * @param string $Cname Shared CNAME to be configured
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
