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
 * Layer-7 offline log details.
 *
 * @method string getDomain() Obtain Offline log domain name.
 * @method void setDomain(string $Domain) Set Offline log domain name.
 * @method string getArea() Obtain Log associated region. Valid values:
<li>mainland: within the Chinese mainland; </li>
<li>overseas: global (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Log associated region. Valid values:
<li>mainland: within the Chinese mainland; </li>
<li>overseas: global (excluding the Chinese mainland).</li>
 * @method string getLogPacketName() Obtain Offline log data packet name.	
 * @method void setLogPacketName(string $LogPacketName) Set Offline log data packet name.	
 * @method string getUrl() Obtain Offline log download address.	
 * @method void setUrl(string $Url) Set Offline log download address.	
 * @method integer getLogTime() Obtain Log packaging time. This parameter has been deprecated.
 * @method void setLogTime(integer $LogTime) Set Log packaging time. This parameter has been deprecated.
 * @method string getLogStartTime() Obtain Log packaging start time.
 * @method void setLogStartTime(string $LogStartTime) Set Log packaging start time.
 * @method string getLogEndTime() Obtain Log packaging end time.
 * @method void setLogEndTime(string $LogEndTime) Set Log packaging end time.
 * @method integer getSize() Obtain Log original size in bytes.
 * @method void setSize(integer $Size) Set Log original size in bytes.
 */
class L7OfflineLog extends AbstractModel
{
    /**
     * @var string Offline log domain name.
     */
    public $Domain;

    /**
     * @var string Log associated region. Valid values:
<li>mainland: within the Chinese mainland; </li>
<li>overseas: global (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var string Offline log data packet name.	
     */
    public $LogPacketName;

    /**
     * @var string Offline log download address.	
     */
    public $Url;

    /**
     * @var integer Log packaging time. This parameter has been deprecated.
     */
    public $LogTime;

    /**
     * @var string Log packaging start time.
     */
    public $LogStartTime;

    /**
     * @var string Log packaging end time.
     */
    public $LogEndTime;

    /**
     * @var integer Log original size in bytes.
     */
    public $Size;

    /**
     * @param string $Domain Offline log domain name.
     * @param string $Area Log associated region. Valid values:
<li>mainland: within the Chinese mainland; </li>
<li>overseas: global (excluding the Chinese mainland).</li>
     * @param string $LogPacketName Offline log data packet name.	
     * @param string $Url Offline log download address.	
     * @param integer $LogTime Log packaging time. This parameter has been deprecated.
     * @param string $LogStartTime Log packaging start time.
     * @param string $LogEndTime Log packaging end time.
     * @param integer $Size Log original size in bytes.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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
