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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Incremental migration back-to-source parameters.
 *
 * @method IncrementalMigrationHttpHeaderInfo getHttpHeaderInfo() Obtain HTTP header passthrough information.
 * @method void setHttpHeaderInfo(IncrementalMigrationHttpHeaderInfo $HttpHeaderInfo) Set HTTP header passthrough information.
 * @method string getProtocol() Obtain Back-to-source protocol. Valid values:
<li>HTTP: Force HTTP;</li>
<li>HTTPS: Force HTTPS;</li>
<li>FOLLOW: Follow the request protocol.</li>
 * @method void setProtocol(string $Protocol) Set Back-to-source protocol. Valid values:
<li>HTTP: Force HTTP;</li>
<li>HTTPS: Force HTTPS;</li>
<li>FOLLOW: Follow the request protocol.</li>
 * @method string getQueryStringFollowMode() Obtain Query string passthrough mode. Valid values
<li>FOLLOW: Fully passthrough;</li>
<li>IGNORE: No passthrough at all.</li>
 * @method void setQueryStringFollowMode(string $QueryStringFollowMode) Set Query string passthrough mode. Valid values
<li>FOLLOW: Fully passthrough;</li>
<li>IGNORE: No passthrough at all.</li>
 * @method integer getHttpRedirectCode() Obtain HTTP Code for redirection. Currently, only `301`, `302`, and `307` are supported. The default value is `302`.
 * @method void setHttpRedirectCode(integer $HttpRedirectCode) Set HTTP Code for redirection. Currently, only `301`, `302`, and `307` are supported. The default value is `302`.
 * @method string getOriginRedirectionFollowMode() Obtain Origin server redirection follow mode. Valid values:
<li>FOLLOW: Follow origin server redirection;</li>
<li>IGNORE: Ignore origin server redirection.</li>
 * @method void setOriginRedirectionFollowMode(string $OriginRedirectionFollowMode) Set Origin server redirection follow mode. Valid values:
<li>FOLLOW: Follow origin server redirection;</li>
<li>IGNORE: Ignore origin server redirection.</li>
 */
class IncrementalMigrationHttpOriginParameter extends AbstractModel
{
    /**
     * @var IncrementalMigrationHttpHeaderInfo HTTP header passthrough information.
     */
    public $HttpHeaderInfo;

    /**
     * @var string Back-to-source protocol. Valid values:
<li>HTTP: Force HTTP;</li>
<li>HTTPS: Force HTTPS;</li>
<li>FOLLOW: Follow the request protocol.</li>
     */
    public $Protocol;

    /**
     * @var string Query string passthrough mode. Valid values
<li>FOLLOW: Fully passthrough;</li>
<li>IGNORE: No passthrough at all.</li>
     */
    public $QueryStringFollowMode;

    /**
     * @var integer HTTP Code for redirection. Currently, only `301`, `302`, and `307` are supported. The default value is `302`.
     */
    public $HttpRedirectCode;

    /**
     * @var string Origin server redirection follow mode. Valid values:
<li>FOLLOW: Follow origin server redirection;</li>
<li>IGNORE: Ignore origin server redirection.</li>
     */
    public $OriginRedirectionFollowMode;

    /**
     * @param IncrementalMigrationHttpHeaderInfo $HttpHeaderInfo HTTP header passthrough information.
     * @param string $Protocol Back-to-source protocol. Valid values:
<li>HTTP: Force HTTP;</li>
<li>HTTPS: Force HTTPS;</li>
<li>FOLLOW: Follow the request protocol.</li>
     * @param string $QueryStringFollowMode Query string passthrough mode. Valid values
<li>FOLLOW: Fully passthrough;</li>
<li>IGNORE: No passthrough at all.</li>
     * @param integer $HttpRedirectCode HTTP Code for redirection. Currently, only `301`, `302`, and `307` are supported. The default value is `302`.
     * @param string $OriginRedirectionFollowMode Origin server redirection follow mode. Valid values:
<li>FOLLOW: Follow origin server redirection;</li>
<li>IGNORE: Ignore origin server redirection.</li>
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
        if (array_key_exists("HttpHeaderInfo",$param) and $param["HttpHeaderInfo"] !== null) {
            $this->HttpHeaderInfo = new IncrementalMigrationHttpHeaderInfo();
            $this->HttpHeaderInfo->deserialize($param["HttpHeaderInfo"]);
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("QueryStringFollowMode",$param) and $param["QueryStringFollowMode"] !== null) {
            $this->QueryStringFollowMode = $param["QueryStringFollowMode"];
        }

        if (array_key_exists("HttpRedirectCode",$param) and $param["HttpRedirectCode"] !== null) {
            $this->HttpRedirectCode = $param["HttpRedirectCode"];
        }

        if (array_key_exists("OriginRedirectionFollowMode",$param) and $param["OriginRedirectionFollowMode"] !== null) {
            $this->OriginRedirectionFollowMode = $param["OriginRedirectionFollowMode"];
        }
    }
}
