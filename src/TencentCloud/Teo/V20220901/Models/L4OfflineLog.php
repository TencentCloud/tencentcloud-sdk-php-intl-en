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
 * Offline log details
 *
 * @method string getProxyId() Obtain Layer 4 Proxy Instance ID.
 * @method void setProxyId(string $ProxyId) Set Layer 4 Proxy Instance ID.
 * @method string getArea() Obtain Log region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Log region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
 * @method string getLogPacketName() Obtain Name of the offline log data packet.
 * @method void setLogPacketName(string $LogPacketName) Set Name of the offline log data packet.
 * @method string getUrl() Obtain Offline log download URL.
 * @method void setUrl(string $Url) Set Offline log download URL.
 * @method integer getLogTime() Obtain Log packaging time. This parameter has been deprecated.
 * @method void setLogTime(integer $LogTime) Set Log packaging time. This parameter has been deprecated.
 * @method string getLogStartTime() Obtain Start time for log packaging.
 * @method void setLogStartTime(string $LogStartTime) Set Start time for log packaging.
 * @method string getLogEndTime() Obtain Log packaging end time.
 * @method void setLogEndTime(string $LogEndTime) Set Log packaging end time.
 * @method integer getSize() Obtain Log size in bytes.
 * @method void setSize(integer $Size) Set Log size in bytes.
 */
class L4OfflineLog extends AbstractModel
{
    /**
     * @var string Layer 4 Proxy Instance ID.
     */
    public $ProxyId;

    /**
     * @var string Log region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var string Name of the offline log data packet.
     */
    public $LogPacketName;

    /**
     * @var string Offline log download URL.
     */
    public $Url;

    /**
     * @var integer Log packaging time. This parameter has been deprecated.
     */
    public $LogTime;

    /**
     * @var string Start time for log packaging.
     */
    public $LogStartTime;

    /**
     * @var string Log packaging end time.
     */
    public $LogEndTime;

    /**
     * @var integer Log size in bytes.
     */
    public $Size;

    /**
     * @param string $ProxyId Layer 4 Proxy Instance ID.
     * @param string $Area Log region. Valid values:
<li>mainland: within the Chinese mainland;</li>
<li>overseas: global (excluding the Chinese mainland).</li>
     * @param string $LogPacketName Name of the offline log data packet.
     * @param string $Url Offline log download URL.
     * @param integer $LogTime Log packaging time. This parameter has been deprecated.
     * @param string $LogStartTime Start time for log packaging.
     * @param string $LogEndTime Log packaging end time.
     * @param integer $Size Log size in bytes.
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogPacketName",$param) and $param["LogPacketName"] !== null) {
            $this->LogPacketName = $param["LogPacketName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("LogStartTime",$param) and $param["LogStartTime"] !== null) {
            $this->LogStartTime = $param["LogStartTime"];
        }

        if (array_key_exists("LogEndTime",$param) and $param["LogEndTime"] !== null) {
            $this->LogEndTime = $param["LogEndTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
