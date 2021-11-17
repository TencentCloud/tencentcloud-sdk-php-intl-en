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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Querying the listener type
 *
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method string getProtocol() Obtain Listener protocol.
 * @method void setProtocol(string $Protocol) Set Listener protocol.
 * @method integer getPort() Obtain Listener port.
 * @method void setPort(integer $Port) Set Listener port.
 * @method array getRules() Obtain Bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRules(array $Rules) Set Bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getTargets() Obtain Object bound to the layer-4 listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set Object bound to the layer-4 listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getEndPort() Obtain End port of the listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEndPort(integer $EndPort) Set End port of the listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ListenerItem extends AbstractModel
{
    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var string Listener protocol.
     */
    public $Protocol;

    /**
     * @var integer Listener port.
     */
    public $Port;

    /**
     * @var array Bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Rules;

    /**
     * @var array Object bound to the layer-4 listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @var integer End port of the listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EndPort;

    /**
     * @param string $ListenerId Listener ID.
     * @param string $Protocol Listener protocol.
     * @param integer $Port Listener port.
     * @param array $Rules Bound rule.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Targets Object bound to the layer-4 listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $EndPort End port of the listener.
Note: this field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RulesItems();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new LbRsTargets();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }
    }
}
