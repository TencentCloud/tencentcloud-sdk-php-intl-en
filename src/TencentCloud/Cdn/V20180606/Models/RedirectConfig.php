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
 * Host header for 302 redirects
 *
 * @method string getSwitch() Obtain Whether to enable the custom origin-pull request to follow the host when a 302 code is returned. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable the custom origin-pull request to follow the host when a 302 code is returned. Values:
`on`: Enable
`off`: Disable
 * @method string getFollowRedirectHost() Obtain The custom host header that is sent when the primary origin server follows 302 redirects
 * @method void setFollowRedirectHost(string $FollowRedirectHost) Set The custom host header that is sent when the primary origin server follows 302 redirects
 * @method string getFollowRedirectBackupHost() Obtain The custom host header that is sent when the secondary origin server follows 302 redirects
 * @method void setFollowRedirectBackupHost(string $FollowRedirectBackupHost) Set The custom host header that is sent when the secondary origin server follows 302 redirects
 */
class RedirectConfig extends AbstractModel
{
    /**
     * @var string Whether to enable the custom origin-pull request to follow the host when a 302 code is returned. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var string The custom host header that is sent when the primary origin server follows 302 redirects
     */
    public $FollowRedirectHost;

    /**
     * @var string The custom host header that is sent when the secondary origin server follows 302 redirects
     */
    public $FollowRedirectBackupHost;

    /**
     * @param string $Switch Whether to enable the custom origin-pull request to follow the host when a 302 code is returned. Values:
`on`: Enable
`off`: Disable
     * @param string $FollowRedirectHost The custom host header that is sent when the primary origin server follows 302 redirects
     * @param string $FollowRedirectBackupHost The custom host header that is sent when the secondary origin server follows 302 redirects
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

        if (array_key_exists("FollowRedirectHost",$param) and $param["FollowRedirectHost"] !== null) {
            $this->FollowRedirectHost = $param["FollowRedirectHost"];
        }

        if (array_key_exists("FollowRedirectBackupHost",$param) and $param["FollowRedirectBackupHost"] !== null) {
            $this->FollowRedirectBackupHost = $param["FollowRedirectBackupHost"];
        }
    }
}
