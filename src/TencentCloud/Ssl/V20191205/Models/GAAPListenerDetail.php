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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GAAP listener details
 *
 * @method string getListenerStatus() Obtain Listener status
 * @method void setListenerStatus(string $ListenerStatus) Set Listener status
 * @method string getListenerId() Obtain listener ID
 * @method void setListenerId(string $ListenerId) Set listener ID
 * @method string getListenerName() Obtain listener name
 * @method void setListenerName(string $ListenerName) Set listener name
 * @method array getNoMatchDomains() Obtain Mismatched domain name list
 * @method void setNoMatchDomains(array $NoMatchDomains) Set Mismatched domain name list
 * @method array getCertIdList() Obtain Certificate list associated with CVM instances	
 * @method void setCertIdList(array $CertIdList) Set Certificate list associated with CVM instances	
 * @method string getProtocol() Obtain Listener protocol
 * @method void setProtocol(string $Protocol) Set Listener protocol
 */
class GAAPListenerDetail extends AbstractModel
{
    /**
     * @var string Listener status
     */
    public $ListenerStatus;

    /**
     * @var string listener ID
     */
    public $ListenerId;

    /**
     * @var string listener name
     */
    public $ListenerName;

    /**
     * @var array Mismatched domain name list
     */
    public $NoMatchDomains;

    /**
     * @var array Certificate list associated with CVM instances	
     */
    public $CertIdList;

    /**
     * @var string Listener protocol
     */
    public $Protocol;

    /**
     * @param string $ListenerStatus Listener status
     * @param string $ListenerId listener ID
     * @param string $ListenerName listener name
     * @param array $NoMatchDomains Mismatched domain name list
     * @param array $CertIdList Certificate list associated with CVM instances	
     * @param string $Protocol Listener protocol
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
        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }

        if (array_key_exists("CertIdList",$param) and $param["CertIdList"] !== null) {
            $this->CertIdList = $param["CertIdList"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
