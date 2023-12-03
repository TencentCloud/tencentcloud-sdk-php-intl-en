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
 * 301/302 automatic origin-pull follow-redirect configuration. It is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable origin-pull to follow the origin configuration. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable origin-pull to follow the origin configuration. Values:
`on`: Enable
`off`: Disable
 * @method RedirectConfig getRedirectConfig() Obtain Specifies a host header for 302 redirects. This feature is only available to beta users. To join the beta, please submit a ticket.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRedirectConfig(RedirectConfig $RedirectConfig) Set Specifies a host header for 302 redirects. This feature is only available to beta users. To join the beta, please submit a ticket.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FollowRedirect extends AbstractModel
{
    /**
     * @var string Whether to enable origin-pull to follow the origin configuration. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var RedirectConfig Specifies a host header for 302 redirects. This feature is only available to beta users. To join the beta, please submit a ticket.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RedirectConfig;

    /**
     * @param string $Switch Whether to enable origin-pull to follow the origin configuration. Values:
`on`: Enable
`off`: Disable
     * @param RedirectConfig $RedirectConfig Specifies a host header for 302 redirects. This feature is only available to beta users. To join the beta, please submit a ticket.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("RedirectConfig",$param) and $param["RedirectConfig"] !== null) {
            $this->RedirectConfig = new RedirectConfig();
            $this->RedirectConfig->deserialize($param["RedirectConfig"]);
        }
    }
}
