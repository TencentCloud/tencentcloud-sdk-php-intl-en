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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PeakPoints array item
 *
 * @method integer getTime() Obtain Second-level Timestamp
 * @method void setTime(integer $Time) Set Second-level Timestamp
 * @method integer getAccess() Obtain QPS
 * @method void setAccess(integer $Access) Set QPS
 * @method integer getUp() Obtain Upstream bandwidth peak, unit: B
 * @method void setUp(integer $Up) Set Upstream bandwidth peak, unit: B
 * @method integer getDown() Obtain Downstream bandwidth peak, unit: B
 * @method void setDown(integer $Down) Set Downstream bandwidth peak, unit: B
 * @method integer getAttack() Obtain Web attack count
 * @method void setAttack(integer $Attack) Set Web attack count
 * @method integer getCc() Obtain CC attack count
 * @method void setCc(integer $Cc) Set CC attack count
 * @method integer getBotAccess() Obtain Bot qps
 * @method void setBotAccess(integer $BotAccess) Set Bot qps
 * @method integer getStatusServerError() Obtain Number of 5xx status codes returned by WAF to client

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusServerError(integer $StatusServerError) Set Number of 5xx status codes returned by WAF to client

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatusClientError() Obtain Number of times WAF returned 4xx status codes to client

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusClientError(integer $StatusClientError) Set Number of times WAF returned 4xx status codes to client

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatusRedirect() Obtain WAF Returned to Client Status Code 302 Count

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusRedirect(integer $StatusRedirect) Set WAF Returned to Client Status Code 302 Count

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatusOk() Obtain Number of Times WAF Returns Status Code 202 to Client

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusOk(integer $StatusOk) Set Number of Times WAF Returns Status Code 202 to Client

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpstreamServerError() Obtain Number of Times the Origin Server Returned 5xx Status Codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamServerError(integer $UpstreamServerError) Set Number of Times the Origin Server Returned 5xx Status Codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpstreamClientError() Obtain Number of times the origin server returned 4xx status codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamClientError(integer $UpstreamClientError) Set Number of times the origin server returned 4xx status codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUpstreamRedirect() Obtain Number of times the original server returns status code 302 to WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamRedirect(integer $UpstreamRedirect) Set Number of times the original server returns status code 302 to WAF

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBlackIP() Obtain Blocklist Count

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBlackIP(integer $BlackIP) Set Blocklist Count

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTamper() Obtain Tamper-Proof Attempts

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTamper(integer $Tamper) Set Tamper-Proof Attempts

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLeak() Obtain Information Leakage Prevention Count

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLeak(integer $Leak) Set Information Leakage Prevention Count

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getACL() Obtain Access control
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setACL(integer $ACL) Set Access control
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWxAccess() Obtain Mini Program QPS

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWxAccess(integer $WxAccess) Set Mini Program QPS

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWxCount() Obtain Number of mini program requests
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWxCount(integer $WxCount) Set Number of mini program requests
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWxUp() Obtain Peak upstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWxUp(integer $WxUp) Set Peak upstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getWxDown() Obtain Peak downstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWxDown(integer $WxDown) Set Peak downstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PeakPointsItem extends AbstractModel
{
    /**
     * @var integer Second-level Timestamp
     */
    public $Time;

    /**
     * @var integer QPS
     */
    public $Access;

    /**
     * @var integer Upstream bandwidth peak, unit: B
     */
    public $Up;

    /**
     * @var integer Downstream bandwidth peak, unit: B
     */
    public $Down;

    /**
     * @var integer Web attack count
     */
    public $Attack;

    /**
     * @var integer CC attack count
     */
    public $Cc;

    /**
     * @var integer Bot qps
     */
    public $BotAccess;

    /**
     * @var integer Number of 5xx status codes returned by WAF to client

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusServerError;

    /**
     * @var integer Number of times WAF returned 4xx status codes to client

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusClientError;

    /**
     * @var integer WAF Returned to Client Status Code 302 Count

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusRedirect;

    /**
     * @var integer Number of Times WAF Returns Status Code 202 to Client

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusOk;

    /**
     * @var integer Number of Times the Origin Server Returned 5xx Status Codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamServerError;

    /**
     * @var integer Number of times the origin server returned 4xx status codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamClientError;

    /**
     * @var integer Number of times the original server returns status code 302 to WAF

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamRedirect;

    /**
     * @var integer Blocklist Count

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BlackIP;

    /**
     * @var integer Tamper-Proof Attempts

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tamper;

    /**
     * @var integer Information Leakage Prevention Count

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Leak;

    /**
     * @var integer Access control
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ACL;

    /**
     * @var integer Mini Program QPS

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WxAccess;

    /**
     * @var integer Number of mini program requests
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WxCount;

    /**
     * @var integer Peak upstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WxUp;

    /**
     * @var integer Peak downstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WxDown;

    /**
     * @param integer $Time Second-level Timestamp
     * @param integer $Access QPS
     * @param integer $Up Upstream bandwidth peak, unit: B
     * @param integer $Down Downstream bandwidth peak, unit: B
     * @param integer $Attack Web attack count
     * @param integer $Cc CC attack count
     * @param integer $BotAccess Bot qps
     * @param integer $StatusServerError Number of 5xx status codes returned by WAF to client

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StatusClientError Number of times WAF returned 4xx status codes to client

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StatusRedirect WAF Returned to Client Status Code 302 Count

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StatusOk Number of Times WAF Returns Status Code 202 to Client

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpstreamServerError Number of Times the Origin Server Returned 5xx Status Codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpstreamClientError Number of times the origin server returned 4xx status codes to WAF

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UpstreamRedirect Number of times the original server returns status code 302 to WAF

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BlackIP Blocklist Count

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Tamper Tamper-Proof Attempts

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Leak Information Leakage Prevention Count

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ACL Access control
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WxAccess Mini Program QPS

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WxCount Number of mini program requests
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WxUp Peak upstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $WxDown Peak downstream bandwidth of the mini program. Unit: B
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }

        if (array_key_exists("Down",$param) and $param["Down"] !== null) {
            $this->Down = $param["Down"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Cc",$param) and $param["Cc"] !== null) {
            $this->Cc = $param["Cc"];
        }

        if (array_key_exists("BotAccess",$param) and $param["BotAccess"] !== null) {
            $this->BotAccess = $param["BotAccess"];
        }

        if (array_key_exists("StatusServerError",$param) and $param["StatusServerError"] !== null) {
            $this->StatusServerError = $param["StatusServerError"];
        }

        if (array_key_exists("StatusClientError",$param) and $param["StatusClientError"] !== null) {
            $this->StatusClientError = $param["StatusClientError"];
        }

        if (array_key_exists("StatusRedirect",$param) and $param["StatusRedirect"] !== null) {
            $this->StatusRedirect = $param["StatusRedirect"];
        }

        if (array_key_exists("StatusOk",$param) and $param["StatusOk"] !== null) {
            $this->StatusOk = $param["StatusOk"];
        }

        if (array_key_exists("UpstreamServerError",$param) and $param["UpstreamServerError"] !== null) {
            $this->UpstreamServerError = $param["UpstreamServerError"];
        }

        if (array_key_exists("UpstreamClientError",$param) and $param["UpstreamClientError"] !== null) {
            $this->UpstreamClientError = $param["UpstreamClientError"];
        }

        if (array_key_exists("UpstreamRedirect",$param) and $param["UpstreamRedirect"] !== null) {
            $this->UpstreamRedirect = $param["UpstreamRedirect"];
        }

        if (array_key_exists("BlackIP",$param) and $param["BlackIP"] !== null) {
            $this->BlackIP = $param["BlackIP"];
        }

        if (array_key_exists("Tamper",$param) and $param["Tamper"] !== null) {
            $this->Tamper = $param["Tamper"];
        }

        if (array_key_exists("Leak",$param) and $param["Leak"] !== null) {
            $this->Leak = $param["Leak"];
        }

        if (array_key_exists("ACL",$param) and $param["ACL"] !== null) {
            $this->ACL = $param["ACL"];
        }

        if (array_key_exists("WxAccess",$param) and $param["WxAccess"] !== null) {
            $this->WxAccess = $param["WxAccess"];
        }

        if (array_key_exists("WxCount",$param) and $param["WxCount"] !== null) {
            $this->WxCount = $param["WxCount"];
        }

        if (array_key_exists("WxUp",$param) and $param["WxUp"] !== null) {
            $this->WxUp = $param["WxUp"];
        }

        if (array_key_exists("WxDown",$param) and $param["WxDown"] !== null) {
            $this->WxDown = $param["WxDown"];
        }
    }
}
