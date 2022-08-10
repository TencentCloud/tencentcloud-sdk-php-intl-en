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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS mitigation configuration
 *
 * @method string getZoneId() Obtain ID of the site (top-level domain name)
 * @method void setZoneId(string $ZoneId) Set ID of the site (top-level domain name)
 * @method integer getPolicyId() Obtain Policy ID
 * @method void setPolicyId(integer $PolicyId) Set Policy ID
 * @method string getType() Obtain Type of protected resource. Values: `domain` and `application`.
 * @method void setType(string $Type) Set Type of protected resource. Values: `domain` and `application`.
 * @method string getEntityName() Obtain Layer-4 proxy name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEntityName(string $EntityName) Set Layer-4 proxy name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getApplication() Obtain Layer-7 domain name parameters
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setApplication(array $Application) Set Layer-7 domain name parameters
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getTcpNum() Obtain Number of layer-4 TCP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTcpNum(integer $TcpNum) Set Number of layer-4 TCP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getUdpNum() Obtain Number of layer-4 UDP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUdpNum(integer $UdpNum) Set Number of layer-4 UDP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getEntity() Obtain Name of the protected resource
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEntity(string $Entity) Set Name of the protected resource
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getShare() Obtain Whether the shared resource is used. Values: `true` (yes) and `false` (no). The proxy mode cannot be switched when the shared resource is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setShare(boolean $Share) Set Whether the shared resource is used. Values: `true` (yes) and `false` (no). The proxy mode cannot be switched when the shared resource is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ShieldArea extends AbstractModel
{
    /**
     * @var string ID of the site (top-level domain name)
     */
    public $ZoneId;

    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var string Type of protected resource. Values: `domain` and `application`.
     */
    public $Type;

    /**
     * @var string Layer-4 proxy name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EntityName;

    /**
     * @var array Layer-7 domain name parameters
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Application;

    /**
     * @var integer Number of layer-4 TCP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TcpNum;

    /**
     * @var integer Number of layer-4 UDP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UdpNum;

    /**
     * @var string Name of the protected resource
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Entity;

    /**
     * @var boolean Whether the shared resource is used. Values: `true` (yes) and `false` (no). The proxy mode cannot be switched when the shared resource is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Share;

    /**
     * @param string $ZoneId ID of the site (top-level domain name)
     * @param integer $PolicyId Policy ID
     * @param string $Type Type of protected resource. Values: `domain` and `application`.
     * @param string $EntityName Layer-4 proxy name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $Application Layer-7 domain name parameters
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $TcpNum Number of layer-4 TCP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $UdpNum Number of layer-4 UDP forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Entity Name of the protected resource
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $Share Whether the shared resource is used. Values: `true` (yes) and `false` (no). The proxy mode cannot be switched when the shared resource is used.
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Application",$param) and $param["Application"] !== null) {
            $this->Application = [];
            foreach ($param["Application"] as $key => $value){
                $obj = new DDoSApplication();
                $obj->deserialize($value);
                array_push($this->Application, $obj);
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

        if (array_key_exists("Share",$param) and $param["Share"] !== null) {
            $this->Share = $param["Share"];
        }
    }
}
