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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics on top network attacks
 *
 * @method array getAgent() Obtain Top Statistical Data on Network Attack Host Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAgent(array $Agent) Set Top Statistical Data on Network Attack Host Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSrcIp() Obtain Top Statistical Data on Network Attack IP Source Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcIp(array $SrcIp) Set Top Statistical Data on Network Attack IP Source Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDstPort() Obtain Top Statistical Data on Network Attack Target Port Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstPort(array $DstPort) Set Top Statistical Data on Network Attack Target Port Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVul() Obtain Top Statistical Data on Network Attack Vulnerability Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVul(array $Vul) Set Top Statistical Data on Network Attack Vulnerability Dimension
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NetAttackTopInfo extends AbstractModel
{
    /**
     * @var array Top Statistical Data on Network Attack Host Dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Agent;

    /**
     * @var array Top Statistical Data on Network Attack IP Source Dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcIp;

    /**
     * @var array Top Statistical Data on Network Attack Target Port Dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstPort;

    /**
     * @var array Top Statistical Data on Network Attack Vulnerability Dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vul;

    /**
     * @param array $Agent Top Statistical Data on Network Attack Host Dimension
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SrcIp Top Statistical Data on Network Attack IP Source Dimension
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DstPort Top Statistical Data on Network Attack Target Port Dimension
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Vul Top Statistical Data on Network Attack Vulnerability Dimension
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = [];
            foreach ($param["Agent"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->Agent, $obj);
            }
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = [];
            foreach ($param["SrcIp"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->SrcIp, $obj);
            }
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = [];
            foreach ($param["DstPort"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->DstPort, $obj);
            }
        }

        if (array_key_exists("Vul",$param) and $param["Vul"] !== null) {
            $this->Vul = [];
            foreach ($param["Vul"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->Vul, $obj);
            }
        }
    }
}
