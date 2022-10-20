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
 * DDoS mitigation configuration
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method integer getPolicyId() Obtain The policy ID.
 * @method void setPolicyId(integer $PolicyId) Set The policy ID.
 * @method string getType() Obtain The type of protected resources. Values:
<li>`domain`: Layer-7 subdomain name</li>
<li>`application`: Layer-4 proxy</li>
 * @method void setType(string $Type) Set The type of protected resources. Values:
<li>`domain`: Layer-7 subdomain name</li>
<li>`application`: Layer-4 proxy</li>
 * @method string getEntityName() Obtain The layer-7 site name.
 * @method void setEntityName(string $EntityName) Set The layer-7 site name.
 * @method array getDDoSHosts() Obtain The layer-7 subdomain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDDoSHosts(array $DDoSHosts) Set The layer-7 subdomain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTcpNum() Obtain Number of layer-4 TCP forwarding rules
 * @method void setTcpNum(integer $TcpNum) Set Number of layer-4 TCP forwarding rules
 * @method integer getUdpNum() Obtain Number of layer-4 UDP forwarding rules
 * @method void setUdpNum(integer $UdpNum) Set Number of layer-4 UDP forwarding rules
 * @method string getEntity() Obtain Name of the protected resource
 * @method void setEntity(string $Entity) Set Name of the protected resource
 */
class ShieldArea extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var integer The policy ID.
     */
    public $PolicyId;

    /**
     * @var string The type of protected resources. Values:
<li>`domain`: Layer-7 subdomain name</li>
<li>`application`: Layer-4 proxy</li>
     */
    public $Type;

    /**
     * @var string The layer-7 site name.
     */
    public $EntityName;

    /**
     * @var array The layer-7 subdomain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DDoSHosts;

    /**
     * @var integer Number of layer-4 TCP forwarding rules
     */
    public $TcpNum;

    /**
     * @var integer Number of layer-4 UDP forwarding rules
     */
    public $UdpNum;

    /**
     * @var string Name of the protected resource
     */
    public $Entity;

    /**
     * @param string $ZoneId The site ID.
     * @param integer $PolicyId The policy ID.
     * @param string $Type The type of protected resources. Values:
<li>`domain`: Layer-7 subdomain name</li>
<li>`application`: Layer-4 proxy</li>
     * @param string $EntityName The layer-7 site name.
     * @param array $DDoSHosts The layer-7 subdomain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TcpNum Number of layer-4 TCP forwarding rules
     * @param integer $UdpNum Number of layer-4 UDP forwarding rules
     * @param string $Entity Name of the protected resource
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EntityName",$param) and $param["EntityName"] !== null) {
            $this->EntityName = $param["EntityName"];
        }

        if (array_key_exists("DDoSHosts",$param) and $param["DDoSHosts"] !== null) {
            $this->DDoSHosts = [];
            foreach ($param["DDoSHosts"] as $key => $value){
                $obj = new DDoSHost();
                $obj->deserialize($value);
                array_push($this->DDoSHosts, $obj);
            }
        }

        if (array_key_exists("TcpNum",$param) and $param["TcpNum"] !== null) {
            $this->TcpNum = $param["TcpNum"];
        }

        if (array_key_exists("UdpNum",$param) and $param["UdpNum"] !== null) {
            $this->UdpNum = $param["UdpNum"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }
    }
}
