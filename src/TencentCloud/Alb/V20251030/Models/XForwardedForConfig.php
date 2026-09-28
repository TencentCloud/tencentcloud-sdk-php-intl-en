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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Forwarding configuration
 *
 * @method boolean getXForwardedForAlbIdEnabled() Obtain Whether to get the CLB instance ID through the ALB-ID header field.
- **true**: Yes.
- **false**: No.
 * @method void setXForwardedForAlbIdEnabled(boolean $XForwardedForAlbIdEnabled) Set Whether to get the CLB instance ID through the ALB-ID header field.
- **true**: Yes.
- **false**: No.
 * @method boolean getXForwardedForClientSrcPortEnabled() Obtain Whether to obtain the port of the client accessing the load balancing instance through the X-Forwarded-Client-srcport header field.
- **true**: Yes.
- **false**: No.
 * @method void setXForwardedForClientSrcPortEnabled(boolean $XForwardedForClientSrcPortEnabled) Set Whether to obtain the port of the client accessing the load balancing instance through the X-Forwarded-Client-srcport header field.
- **true**: Yes.
- **false**: No.
 * @method boolean getXForwardedForHostEnabled() Obtain Whether to enable obtaining the client domain name that accesses the load balancing instance through the X-Forwarded-Host header field.
- **true**: yes.
- **false**: No.
 * @method void setXForwardedForHostEnabled(boolean $XForwardedForHostEnabled) Set Whether to enable obtaining the client domain name that accesses the load balancing instance through the X-Forwarded-Host header field.
- **true**: yes.
- **false**: No.
 * @method string getXForwardedForMode() Obtain Specify how to handle the X-Forwarded-For (XFF) HTTP header field.
- **append**: Append mode (default). Appends the real IP of the client to the end of the X-Forwarded-For header, retaining the original XFF link information.
-**remove**: Deletion mode. Remove the X-Forwarded-For header field and do not pass this header to the real server.
- **passthrough**: Passthrough mode. The X-Forwarded-For header remains unchanged and is directly passed through to the real server without any modification.

 * @method void setXForwardedForMode(string $XForwardedForMode) Set Specify how to handle the X-Forwarded-For (XFF) HTTP header field.
- **append**: Append mode (default). Appends the real IP of the client to the end of the X-Forwarded-For header, retaining the original XFF link information.
-**remove**: Deletion mode. Remove the X-Forwarded-For header field and do not pass this header to the real server.
- **passthrough**: Passthrough mode. The X-Forwarded-For header remains unchanged and is directly passed through to the real server without any modification.

 * @method boolean getXForwardedForPortEnabled() Obtain Whether to obtain the listening port of the load balancing instance through the X-Forwarded-Port header field.
- **true**: yes.
- **false**: No.
 * @method void setXForwardedForPortEnabled(boolean $XForwardedForPortEnabled) Set Whether to obtain the listening port of the load balancing instance through the X-Forwarded-Port header field.
- **true**: yes.
- **false**: No.
 * @method boolean getXForwardedForProtoEnabled() Obtain Whether to obtain the listening protocol of the load balancing instance through the X-Forwarded-Proto header field.
- **true**: yes.
- **false**: No.

 * @method void setXForwardedForProtoEnabled(boolean $XForwardedForProtoEnabled) Set Whether to obtain the listening protocol of the load balancing instance through the X-Forwarded-Proto header field.
- **true**: yes.
- **false**: No.

 * @method boolean getXTencentClientIDNEnabled() Obtain Whether to access the issuer of the client certificate $ssl_client_i_dn through the X-Tencent-Client-IDN header.
- **true**: yes.
- **false**: No.

 * @method void setXTencentClientIDNEnabled(boolean $XTencentClientIDNEnabled) Set Whether to access the issuer of the client certificate $ssl_client_i_dn through the X-Tencent-Client-IDN header.
- **true**: yes.
- **false**: No.

 * @method boolean getXTencentClientSDNEnabled() Obtain Whether to access the subject of the client certificate $ssl_client_s_dn through the X-Tencent-Client-SDN header.
- **true**: yes.
- **false**: No.

 * @method void setXTencentClientSDNEnabled(boolean $XTencentClientSDNEnabled) Set Whether to access the subject of the client certificate $ssl_client_s_dn through the X-Tencent-Client-SDN header.
- **true**: yes.
- **false**: No.

 * @method boolean getXTencentClientSerialEnabled() Obtain Whether to access the serial number $ssl_client_serial of the client certificate through the X-Tencent-Client-Serial header.
- **true**: yes.
- **false**: No.

 * @method void setXTencentClientSerialEnabled(boolean $XTencentClientSerialEnabled) Set Whether to access the serial number $ssl_client_serial of the client certificate through the X-Tencent-Client-Serial header.
- **true**: yes.
- **false**: No.

 * @method boolean getXTencentClientVerifyEnabled() Obtain Access the verification result $ssl_client_verify of the client certificate through the X-Tencent-Client-Verify header.
- **true**: yes.
- **false**: No.

 * @method void setXTencentClientVerifyEnabled(boolean $XTencentClientVerifyEnabled) Set Access the verification result $ssl_client_verify of the client certificate through the X-Tencent-Client-Verify header.
- **true**: yes.
- **false**: No.
 */
class XForwardedForConfig extends AbstractModel
{
    /**
     * @var boolean Whether to get the CLB instance ID through the ALB-ID header field.
- **true**: Yes.
- **false**: No.
     */
    public $XForwardedForAlbIdEnabled;

    /**
     * @var boolean Whether to obtain the port of the client accessing the load balancing instance through the X-Forwarded-Client-srcport header field.
- **true**: Yes.
- **false**: No.
     */
    public $XForwardedForClientSrcPortEnabled;

    /**
     * @var boolean Whether to enable obtaining the client domain name that accesses the load balancing instance through the X-Forwarded-Host header field.
- **true**: yes.
- **false**: No.
     */
    public $XForwardedForHostEnabled;

    /**
     * @var string Specify how to handle the X-Forwarded-For (XFF) HTTP header field.
- **append**: Append mode (default). Appends the real IP of the client to the end of the X-Forwarded-For header, retaining the original XFF link information.
-**remove**: Deletion mode. Remove the X-Forwarded-For header field and do not pass this header to the real server.
- **passthrough**: Passthrough mode. The X-Forwarded-For header remains unchanged and is directly passed through to the real server without any modification.

     */
    public $XForwardedForMode;

    /**
     * @var boolean Whether to obtain the listening port of the load balancing instance through the X-Forwarded-Port header field.
- **true**: yes.
- **false**: No.
     */
    public $XForwardedForPortEnabled;

    /**
     * @var boolean Whether to obtain the listening protocol of the load balancing instance through the X-Forwarded-Proto header field.
- **true**: yes.
- **false**: No.

     */
    public $XForwardedForProtoEnabled;

    /**
     * @var boolean Whether to access the issuer of the client certificate $ssl_client_i_dn through the X-Tencent-Client-IDN header.
- **true**: yes.
- **false**: No.

     */
    public $XTencentClientIDNEnabled;

    /**
     * @var boolean Whether to access the subject of the client certificate $ssl_client_s_dn through the X-Tencent-Client-SDN header.
- **true**: yes.
- **false**: No.

     */
    public $XTencentClientSDNEnabled;

    /**
     * @var boolean Whether to access the serial number $ssl_client_serial of the client certificate through the X-Tencent-Client-Serial header.
- **true**: yes.
- **false**: No.

     */
    public $XTencentClientSerialEnabled;

    /**
     * @var boolean Access the verification result $ssl_client_verify of the client certificate through the X-Tencent-Client-Verify header.
- **true**: yes.
- **false**: No.

     */
    public $XTencentClientVerifyEnabled;

    /**
     * @param boolean $XForwardedForAlbIdEnabled Whether to get the CLB instance ID through the ALB-ID header field.
- **true**: Yes.
- **false**: No.
     * @param boolean $XForwardedForClientSrcPortEnabled Whether to obtain the port of the client accessing the load balancing instance through the X-Forwarded-Client-srcport header field.
- **true**: Yes.
- **false**: No.
     * @param boolean $XForwardedForHostEnabled Whether to enable obtaining the client domain name that accesses the load balancing instance through the X-Forwarded-Host header field.
- **true**: yes.
- **false**: No.
     * @param string $XForwardedForMode Specify how to handle the X-Forwarded-For (XFF) HTTP header field.
- **append**: Append mode (default). Appends the real IP of the client to the end of the X-Forwarded-For header, retaining the original XFF link information.
-**remove**: Deletion mode. Remove the X-Forwarded-For header field and do not pass this header to the real server.
- **passthrough**: Passthrough mode. The X-Forwarded-For header remains unchanged and is directly passed through to the real server without any modification.

     * @param boolean $XForwardedForPortEnabled Whether to obtain the listening port of the load balancing instance through the X-Forwarded-Port header field.
- **true**: yes.
- **false**: No.
     * @param boolean $XForwardedForProtoEnabled Whether to obtain the listening protocol of the load balancing instance through the X-Forwarded-Proto header field.
- **true**: yes.
- **false**: No.

     * @param boolean $XTencentClientIDNEnabled Whether to access the issuer of the client certificate $ssl_client_i_dn through the X-Tencent-Client-IDN header.
- **true**: yes.
- **false**: No.

     * @param boolean $XTencentClientSDNEnabled Whether to access the subject of the client certificate $ssl_client_s_dn through the X-Tencent-Client-SDN header.
- **true**: yes.
- **false**: No.

     * @param boolean $XTencentClientSerialEnabled Whether to access the serial number $ssl_client_serial of the client certificate through the X-Tencent-Client-Serial header.
- **true**: yes.
- **false**: No.

     * @param boolean $XTencentClientVerifyEnabled Access the verification result $ssl_client_verify of the client certificate through the X-Tencent-Client-Verify header.
- **true**: yes.
- **false**: No.
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
        if (array_key_exists("XForwardedForAlbIdEnabled",$param) and $param["XForwardedForAlbIdEnabled"] !== null) {
            $this->XForwardedForAlbIdEnabled = $param["XForwardedForAlbIdEnabled"];
        }

        if (array_key_exists("XForwardedForClientSrcPortEnabled",$param) and $param["XForwardedForClientSrcPortEnabled"] !== null) {
            $this->XForwardedForClientSrcPortEnabled = $param["XForwardedForClientSrcPortEnabled"];
        }

        if (array_key_exists("XForwardedForHostEnabled",$param) and $param["XForwardedForHostEnabled"] !== null) {
            $this->XForwardedForHostEnabled = $param["XForwardedForHostEnabled"];
        }

        if (array_key_exists("XForwardedForMode",$param) and $param["XForwardedForMode"] !== null) {
            $this->XForwardedForMode = $param["XForwardedForMode"];
        }

        if (array_key_exists("XForwardedForPortEnabled",$param) and $param["XForwardedForPortEnabled"] !== null) {
            $this->XForwardedForPortEnabled = $param["XForwardedForPortEnabled"];
        }

        if (array_key_exists("XForwardedForProtoEnabled",$param) and $param["XForwardedForProtoEnabled"] !== null) {
            $this->XForwardedForProtoEnabled = $param["XForwardedForProtoEnabled"];
        }

        if (array_key_exists("XTencentClientIDNEnabled",$param) and $param["XTencentClientIDNEnabled"] !== null) {
            $this->XTencentClientIDNEnabled = $param["XTencentClientIDNEnabled"];
        }

        if (array_key_exists("XTencentClientSDNEnabled",$param) and $param["XTencentClientSDNEnabled"] !== null) {
            $this->XTencentClientSDNEnabled = $param["XTencentClientSDNEnabled"];
        }

        if (array_key_exists("XTencentClientSerialEnabled",$param) and $param["XTencentClientSerialEnabled"] !== null) {
            $this->XTencentClientSerialEnabled = $param["XTencentClientSerialEnabled"];
        }

        if (array_key_exists("XTencentClientVerifyEnabled",$param) and $param["XTencentClientVerifyEnabled"] !== null) {
            $this->XTencentClientVerifyEnabled = $param["XTencentClientVerifyEnabled"];
        }
    }
}
