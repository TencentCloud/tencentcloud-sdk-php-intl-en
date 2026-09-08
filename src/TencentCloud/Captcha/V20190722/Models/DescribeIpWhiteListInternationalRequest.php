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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpWhiteListInternational request structure.
 *
 * @method integer getPageIndex() Obtain <p>Page number.</p>
 * @method void setPageIndex(integer $PageIndex) Set <p>Page number.</p>
 * @method integer getPageSize() Obtain <p>Page length.</p>
 * @method void setPageSize(integer $PageSize) Set <p>Page length.</p>
 * @method integer getCaptchaAppid() Obtain <p>Captcha appid</p>
 * @method void setCaptchaAppid(integer $CaptchaAppid) Set <p>Captcha appid</p>
 * @method string getName() Obtain <p>Allowlist name</p>
 * @method void setName(string $Name) Set <p>Allowlist name</p>
 * @method string getIp() Obtain <p>Ip address</p>
 * @method void setIp(string $Ip) Set <p>Ip address</p>
 * @method integer getStatus() Obtain <p>IP Whitelist Configuration Status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: allowlisted</li><li>2: allowlisting canceled</li></ul><p>Default value: 0</p>
 * @method void setStatus(integer $Status) Set <p>IP Whitelist Configuration Status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: allowlisted</li><li>2: allowlisting canceled</li></ul><p>Default value: 0</p>
 */
class DescribeIpWhiteListInternationalRequest extends AbstractModel
{
    /**
     * @var integer <p>Page number.</p>
     */
    public $PageIndex;

    /**
     * @var integer <p>Page length.</p>
     */
    public $PageSize;

    /**
     * @var integer <p>Captcha appid</p>
     */
    public $CaptchaAppid;

    /**
     * @var string <p>Allowlist name</p>
     */
    public $Name;

    /**
     * @var string <p>Ip address</p>
     */
    public $Ip;

    /**
     * @var integer <p>IP Whitelist Configuration Status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: allowlisted</li><li>2: allowlisting canceled</li></ul><p>Default value: 0</p>
     */
    public $Status;

    /**
     * @param integer $PageIndex <p>Page number.</p>
     * @param integer $PageSize <p>Page length.</p>
     * @param integer $CaptchaAppid <p>Captcha appid</p>
     * @param string $Name <p>Allowlist name</p>
     * @param string $Ip <p>Ip address</p>
     * @param integer $Status <p>IP Whitelist Configuration Status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: allowlisted</li><li>2: allowlisting canceled</li></ul><p>Default value: 0</p>
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
        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("CaptchaAppid",$param) and $param["CaptchaAppid"] !== null) {
            $this->CaptchaAppid = $param["CaptchaAppid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
