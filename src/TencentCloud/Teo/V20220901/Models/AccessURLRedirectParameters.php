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
 * Access URL redirect configuration parameters.
 *
 * @method integer getStatusCode() Obtain Status code. valid values: 301, 302, 303, 307, 308.
 * @method void setStatusCode(integer $StatusCode) Set Status code. valid values: 301, 302, 303, 307, 308.
 * @method string getProtocol() Obtain Target request protocol. valid values:.
<Li>Http: target request protocol http;</li>.
<Li>Https: target request protocol https;</li>.
<Li>Follow: follow the request.</li>.
 * @method void setProtocol(string $Protocol) Set Target request protocol. valid values:.
<Li>Http: target request protocol http;</li>.
<Li>Https: target request protocol https;</li>.
<Li>Follow: follow the request.</li>.
 * @method HostName getHostName() Obtain Target hostname.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setHostName(HostName $HostName) Set Target hostname.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method URLPath getURLPath() Obtain Target path.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setURLPath(URLPath $URLPath) Set Target path.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method AccessURLRedirectQueryString getQueryString() Obtain Carry query parameters.
Note: this field may return null, which indicates a failure to obtain a valid value.
 * @method void setQueryString(AccessURLRedirectQueryString $QueryString) Set Carry query parameters.
Note: this field may return null, which indicates a failure to obtain a valid value.
 */
class AccessURLRedirectParameters extends AbstractModel
{
    /**
     * @var integer Status code. valid values: 301, 302, 303, 307, 308.
     */
    public $StatusCode;

    /**
     * @var string Target request protocol. valid values:.
<Li>Http: target request protocol http;</li>.
<Li>Https: target request protocol https;</li>.
<Li>Follow: follow the request.</li>.
     */
    public $Protocol;

    /**
     * @var HostName Target hostname.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $HostName;

    /**
     * @var URLPath Target path.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $URLPath;

    /**
     * @var AccessURLRedirectQueryString Carry query parameters.
Note: this field may return null, which indicates a failure to obtain a valid value.
     */
    public $QueryString;

    /**
     * @param integer $StatusCode Status code. valid values: 301, 302, 303, 307, 308.
     * @param string $Protocol Target request protocol. valid values:.
<Li>Http: target request protocol http;</li>.
<Li>Https: target request protocol https;</li>.
<Li>Follow: follow the request.</li>.
     * @param HostName $HostName Target hostname.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param URLPath $URLPath Target path.
Note: this field may return null, which indicates a failure to obtain a valid value.
     * @param AccessURLRedirectQueryString $QueryString Carry query parameters.
Note: this field may return null, which indicates a failure to obtain a valid value.
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = new HostName();
            $this->HostName->deserialize($param["HostName"]);
        }

        if (array_key_exists("URLPath",$param) and $param["URLPath"] !== null) {
            $this->URLPath = new URLPath();
            $this->URLPath->deserialize($param["URLPath"]);
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new AccessURLRedirectQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
