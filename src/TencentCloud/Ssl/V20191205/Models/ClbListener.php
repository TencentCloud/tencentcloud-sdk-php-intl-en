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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a CLB instance listener
 *
 * @method string getListenerId() Obtain The listener ID.
 * @method void setListenerId(string $ListenerId) Set The listener ID.
 * @method string getListenerName() Obtain The listener name.
 * @method void setListenerName(string $ListenerName) Set The listener name.
 * @method integer getSniSwitch() Obtain Whether to enable SNI. Valid values: `1` (enable) and `0` (disable).
 * @method void setSniSwitch(integer $SniSwitch) Set Whether to enable SNI. Valid values: `1` (enable) and `0` (disable).
 * @method string getProtocol() Obtain The listener protocol type. Valid values: `HTTPS` and `TCP_SSL`.
 * @method void setProtocol(string $Protocol) Set The listener protocol type. Valid values: `HTTPS` and `TCP_SSL`.
 * @method Certificate getCertificate() Obtain The information of the certificate bound to the listener.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificate(Certificate $Certificate) Set The information of the certificate bound to the listener.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRules() Obtain The list of the listener rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set The list of the listener rules.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNoMatchDomains() Obtain The list of non-matching domains.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoMatchDomains(array $NoMatchDomains) Set The list of non-matching domains.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClbListener extends AbstractModel
{
    /**
     * @var string The listener ID.
     */
    public $ListenerId;

    /**
     * @var string The listener name.
     */
    public $ListenerName;

    /**
     * @var integer Whether to enable SNI. Valid values: `1` (enable) and `0` (disable).
     */
    public $SniSwitch;

    /**
     * @var string The listener protocol type. Valid values: `HTTPS` and `TCP_SSL`.
     */
    public $Protocol;

    /**
     * @var Certificate The information of the certificate bound to the listener.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Certificate;

    /**
     * @var array The list of the listener rules.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var array The list of non-matching domains.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoMatchDomains;

    /**
     * @param string $ListenerId The listener ID.
     * @param string $ListenerName The listener name.
     * @param integer $SniSwitch Whether to enable SNI. Valid values: `1` (enable) and `0` (disable).
     * @param string $Protocol The listener protocol type. Valid values: `HTTPS` and `TCP_SSL`.
     * @param Certificate $Certificate The information of the certificate bound to the listener.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Rules The list of the listener rules.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NoMatchDomains The list of non-matching domains.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new Certificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ClbListenerRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }
    }
}
