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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Standard debugging
 *
 * @method string getSwitch() Obtain Whether to enable standard debugging. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
 * @method void setSwitch(string $Switch) Set Whether to enable standard debugging. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
 * @method array getAllowClientIPList() Obtain Allowed client source. IPv4 and IPv6 addresses and network segments are supported. 0.0.0.0/0 indicates that all IPv4 clients can be debugged, and ::/0 indicates that all IPv6 clients can be debugged.
 * @method void setAllowClientIPList(array $AllowClientIPList) Set Allowed client source. IPv4 and IPv6 addresses and network segments are supported. 0.0.0.0/0 indicates that all IPv4 clients can be debugged, and ::/0 indicates that all IPv6 clients can be debugged.
 * @method string getExpireTime() Obtain The time when the standard debugging setting expires. If it is exceeded, this feature u200dbecomes invalid.
 * @method void setExpireTime(string $ExpireTime) Set The time when the standard debugging setting expires. If it is exceeded, this feature u200dbecomes invalid.
 */
class StandardDebug extends AbstractModel
{
    /**
     * @var string Whether to enable standard debugging. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
     */
    public $Switch;

    /**
     * @var array Allowed client source. IPv4 and IPv6 addresses and network segments are supported. 0.0.0.0/0 indicates that all IPv4 clients can be debugged, and ::/0 indicates that all IPv6 clients can be debugged.
     */
    public $AllowClientIPList;

    /**
     * @var string The time when the standard debugging setting expires. If it is exceeded, this feature u200dbecomes invalid.
     */
    public $ExpireTime;

    /**
     * @param string $Switch Whether to enable standard debugging. Values:
<li>`on`: Enable</li>
<li>`off`: Disable </li>
     * @param array $AllowClientIPList Allowed client source. IPv4 and IPv6 addresses and network segments are supported. 0.0.0.0/0 indicates that all IPv4 clients can be debugged, and ::/0 indicates that all IPv6 clients can be debugged.
     * @param string $ExpireTime The time when the standard debugging setting expires. If it is exceeded, this feature u200dbecomes invalid.
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

        if (array_key_exists("AllowClientIPList",$param) and $param["AllowClientIPList"] !== null) {
            $this->AllowClientIPList = $param["AllowClientIPList"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
