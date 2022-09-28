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
 * Layer-7 offline log details
 *
 * @method integer getLogTime() Obtain Start time of the log packaging
 * @method void setLogTime(integer $LogTime) Set Start time of the log packaging
 * @method string getDomain() Obtain The subdomain name.
 * @method void setDomain(string $Domain) Set The subdomain name.
 * @method integer getSize() Obtain Log size, in bytes.
 * @method void setSize(integer $Size) Set Log size, in bytes.
 * @method string getUrl() Obtain Download address
 * @method void setUrl(string $Url) Set Download address
 * @method string getLogPacketName() Obtain Log package name
 * @method void setLogPacketName(string $LogPacketName) Set Log package name
 * @method string getArea() Obtain Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
 * @method void setArea(string $Area) Set Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
 */
class L7OfflineLog extends AbstractModel
{
    /**
     * @var integer Start time of the log packaging
     */
    public $LogTime;

    /**
     * @var string The subdomain name.
     */
    public $Domain;

    /**
     * @var integer Log size, in bytes.
     */
    public $Size;

    /**
     * @var string Download address
     */
    public $Url;

    /**
     * @var string Log package name
     */
    public $LogPacketName;

    /**
     * @var string Acceleration region. Values:
<li>`mainland`: Chinese mainland;</li>
<li>`overseas`: Global (outside the Chinese mainland);</li>
     */
    public $Area;

    /**
     * @param integer $LogTime Start time of the log packaging
     * @param string $Domain The subdomain name.
     * @param integer $Size Log size, in bytes.
     * @param string $Url Download address
     * @param string $LogPacketName Log package name
     * @param string $Area Acceleration region. Values:
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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
