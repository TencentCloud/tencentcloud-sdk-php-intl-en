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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取Listener ID
 * @method void setListenerId(string $ListenerId) 设置Listener ID
 * @method string getProxyId() 获取Connection ID. This field is required if using a single connection listener.
 * @method void setProxyId(string $ProxyId) 设置Connection ID. This field is required if using a single connection listener.
 * @method string getListenerName() 获取New listener name
 * @method void setListenerName(string $ListenerName) 设置New listener name
 * @method string getForwardProtocol() 获取Type of the protocol used in the forwarding from connections to origin servers
 * @method void setForwardProtocol(string $ForwardProtocol) 设置Type of the protocol used in the forwarding from connections to origin servers
 * @method string getCertificateId() 获取New listener server certificate ID
 * @method void setCertificateId(string $CertificateId) 设置New listener server certificate ID
 * @method string getClientCertificateId() 获取New listener client certificate ID
 * @method void setClientCertificateId(string $ClientCertificateId) 设置New listener client certificate ID
 * @method array getPolyClientCertificateIds() 获取Client certificate ID of the listener after modification, which is a new field.
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) 设置Client certificate ID of the listener after modification, which is a new field.
 */

/**
 *ModifyHTTPSListenerAttribute request structure.
 */
class ModifyHTTPSListenerAttributeRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Connection ID. This field is required if using a single connection listener.
     */
    public $ProxyId;

    /**
     * @var string New listener name
     */
    public $ListenerName;

    /**
     * @var string Type of the protocol used in the forwarding from connections to origin servers
     */
    public $ForwardProtocol;

    /**
     * @var string New listener server certificate ID
     */
    public $CertificateId;

    /**
     * @var string New listener client certificate ID
     */
    public $ClientCertificateId;

    /**
     * @var array Client certificate ID of the listener after modification, which is a new field.
     */
    public $PolyClientCertificateIds;
    /**
     * @param string $ListenerId Listener ID
     * @param string $ProxyId Connection ID. This field is required if using a single connection listener.
     * @param string $ListenerName New listener name
     * @param string $ForwardProtocol Type of the protocol used in the forwarding from connections to origin servers
     * @param string $CertificateId New listener server certificate ID
     * @param string $ClientCertificateId New listener client certificate ID
     * @param array $PolyClientCertificateIds Client certificate ID of the listener after modification, which is a new field.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("PolyClientCertificateIds",$param) and $param["PolyClientCertificateIds"] !== null) {
            $this->PolyClientCertificateIds = $param["PolyClientCertificateIds"];
        }
    }
}
