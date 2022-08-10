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
 * Layer-7 offline log details
 *
 * @method integer getLogTime() Obtain Start time of the log packaging
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLogTime(integer $LogTime) Set Start time of the log packaging
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDomain() Obtain Subdomain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDomain(string $Domain) Set Subdomain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getSize() Obtain Log size, in bytes
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSize(integer $Size) Set Log size, in bytes
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getUrl() Obtain Download address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUrl(string $Url) Set Download address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getLogPacketName() Obtain Log package name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setLogPacketName(string $LogPacketName) Set Log package name
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class L7OfflineLog extends AbstractModel
{
    /**
     * @var integer Start time of the log packaging
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $LogTime;

    /**
     * @var string Subdomain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Domain;

    /**
     * @var integer Log size, in bytes
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Size;

    /**
     * @var string Download address
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Url;

    /**
     * @var string Log package name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $LogPacketName;

    /**
     * @param integer $LogTime Start time of the log packaging
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Domain Subdomain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $Size Log size, in bytes
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Url Download address
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $LogPacketName Log package name
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
    }
}
