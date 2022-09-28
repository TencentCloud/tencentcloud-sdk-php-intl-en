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
 * The L7 log details
 *
 * @method integer getLogTime() Obtain The start time of the log packaging.
 * @method void setLogTime(integer $LogTime) Set The start time of the log packaging.
 * @method string getProxyId() Obtain The L4 proxy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyId(string $ProxyId) Set The L4 proxy ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSize() Obtain The log size, in bytes.
 * @method void setSize(integer $Size) Set The log size, in bytes.
 * @method string getUrl() Obtain The download address.
 * @method void setUrl(string $Url) Set The download address.
 * @method string getLogPacketName() Obtain The log package name.
 * @method void setLogPacketName(string $LogPacketName) Set The log package name.
 * @method string getArea() Obtain The acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
 * @method void setArea(string $Area) Set The acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
 */
class L4OfflineLog extends AbstractModel
{
    /**
     * @var integer The start time of the log packaging.
     */
    public $LogTime;

    /**
     * @var string The L4 proxy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyId;

    /**
     * @var integer The log size, in bytes.
     */
    public $Size;

    /**
     * @var string The download address.
     */
    public $Url;

    /**
     * @var string The log package name.
     */
    public $LogPacketName;

    /**
     * @var string The acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
     */
    public $Area;

    /**
     * @param integer $LogTime The start time of the log packaging.
     * @param string $ProxyId The L4 proxy ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Size The log size, in bytes.
     * @param string $Url The download address.
     * @param string $LogPacketName The log package name.
     * @param string $Area The acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
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
        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LogPacketName",$param) and $param["LogPacketName"] !== null) {
            $this->LogPacketName = $param["LogPacketName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
