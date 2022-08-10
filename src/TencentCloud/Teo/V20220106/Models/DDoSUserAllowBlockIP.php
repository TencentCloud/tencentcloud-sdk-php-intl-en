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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP Allowlist/Blocklist for DDoS protection
 *
 * @method string getIp() Obtain Start IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIp(string $Ip) Set Start IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getMask() Obtain Start mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMask(integer $Mask) Set Start mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getType() Obtain IP type. `block`: IP blocklist; `allow`: IP allowlist.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set IP type. `block`: IP blocklist; `allow`: IP allowlist.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getUpdateTime() Obtain Timestamp
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Timestamp
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIp2() Obtain End IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIp2(string $Ip2) Set End IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getMask2() Obtain End mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMask2(integer $Mask2) Set End mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class DDoSUserAllowBlockIP extends AbstractModel
{
    /**
     * @var string Start IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Ip;

    /**
     * @var integer Start mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Mask;

    /**
     * @var string IP type. `block`: IP blocklist; `allow`: IP allowlist.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var integer Timestamp
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string End IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Ip2;

    /**
     * @var integer End mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Mask2;

    /**
     * @param string $Ip Start IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Mask Start mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Type IP type. `block`: IP blocklist; `allow`: IP allowlist.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $UpdateTime Timestamp
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Ip2 End IP address in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Mask2 End mask in a specific range
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Ip2",$param) and $param["Ip2"] !== null) {
            $this->Ip2 = $param["Ip2"];
        }

        if (array_key_exists("Mask2",$param) and $param["Mask2"] !== null) {
            $this->Mask2 = $param["Mask2"];
        }
    }
}
