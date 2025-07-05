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
 * Details of L7 logs.
 *
 * @method string getDomain() Obtain Log domain name.
 * @method void setDomain(string $Domain) Set Log domain name.
 * @method string getArea() Obtain Log query area. Valid values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland). </li>
 * @method void setArea(string $Area) Set Log query area. Valid values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland). </li>
 * @method string getLogPacketName() Obtain Log packet name.	
 * @method void setLogPacketName(string $LogPacketName) Set Log packet name.	
 * @method string getUrl() Obtain Log download address.	
 * @method void setUrl(string $Url) Set Log download address.	
 * @method integer getLogTime() Obtain (Disused) Log packaging time. 
 * @method void setLogTime(integer $LogTime) Set (Disused) Log packaging time. 
 * @method string getLogStartTime() Obtain Start time of log packaging.
 * @method void setLogStartTime(string $LogStartTime) Set Start time of log packaging.
 * @method string getLogEndTime() Obtain End time of the log package.
 * @method void setLogEndTime(string $LogEndTime) Set End time of the log package.
 * @method integer getSize() Obtain Original log size (in bytes).
 * @method void setSize(integer $Size) Set Original log size (in bytes).
 */
class L7OfflineLog extends AbstractModel
{
    /**
     * @var string Log domain name.
     */
    public $Domain;

    /**
     * @var string Log query area. Valid values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland). </li>
     */
    public $Area;

    /**
     * @var string Log packet name.	
     */
    public $LogPacketName;

    /**
     * @var string Log download address.	
     */
    public $Url;

    /**
     * @var integer (Disused) Log packaging time. 
     */
    public $LogTime;

    /**
     * @var string Start time of log packaging.
     */
    public $LogStartTime;

    /**
     * @var string End time of the log package.
     */
    public $LogEndTime;

    /**
     * @var integer Original log size (in bytes).
     */
    public $Size;

    /**
     * @param string $Domain Log domain name.
     * @param string $Area Log query area. Valid values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland). </li>
     * @param string $LogPacketName Log packet name.	
     * @param string $Url Log download address.	
     * @param integer $LogTime (Disused) Log packaging time. 
     * @param string $LogStartTime Start time of log packaging.
     * @param string $LogEndTime End time of the log package.
     * @param integer $Size Original log size (in bytes).
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
