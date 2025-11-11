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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Route entity object
 *
 * @method integer getAccessType() Obtain Instance connection method
0: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
1: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
2: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
3: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
 * @method void setAccessType(integer $AccessType) Set Instance connection method
0: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
1: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
2: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
3: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
 * @method integer getRouteId() Obtain Route ID
 * @method void setRouteId(integer $RouteId) Set Route ID
 * @method integer getVipType() Obtain Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).
 * @method void setVipType(integer $VipType) Set Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).
 * @method array getVipList() Obtain Virtual IP list
 * @method void setVipList(array $VipList) Set Virtual IP list
 * @method string getDomain() Obtain Domain name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDomainPort() Obtain Domain name port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomainPort(integer $DomainPort) Set Domain name port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDeleteTimestamp() Obtain Timestamp.
 * @method void setDeleteTimestamp(string $DeleteTimestamp) Set Timestamp.
 * @method string getSubnet() Obtain Specifies the subnet Id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnet(string $Subnet) Set Specifies the subnet Id.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBrokerVipList() Obtain Virtual IP list (1:1 broker node).
 * @method void setBrokerVipList(array $BrokerVipList) Set Virtual IP list (1:1 broker node).
 * @method string getVpcId() Obtain VPC Id. specifies the Id of the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC Id. specifies the Id of the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNote() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Route status. 1: creating, 2: creation succeeded, 3: creation failed, 4: deleting, 6: deletion failed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Route status. 1: creating, 2: creation succeeded, 3: creation failed, 4: deleting, 6: deletion failed.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Route extends AbstractModel
{
    /**
     * @var integer Instance connection method
0: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
1: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
2: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
3: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
     */
    public $AccessType;

    /**
     * @var integer Route ID
     */
    public $RouteId;

    /**
     * @var integer Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).
     */
    public $VipType;

    /**
     * @var array Virtual IP list
     */
    public $VipList;

    /**
     * @var string Domain name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var integer Domain name port
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DomainPort;

    /**
     * @var string Timestamp.
     */
    public $DeleteTimestamp;

    /**
     * @var string Specifies the subnet Id.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Subnet;

    /**
     * @var array Virtual IP list (1:1 broker node).
     */
    public $BrokerVipList;

    /**
     * @var string VPC Id. specifies the Id of the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var integer Route status. 1: creating, 2: creation succeeded, 3: creation failed, 4: deleting, 6: deletion failed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param integer $AccessType Instance connection method
0: PLAINTEXT (plaintext method, which does not carry user information and is supported for legacy versions and Community Edition)
1: SASL_PLAINTEXT (plaintext method, which authenticates the login through SASL before data start and is supported only for Community Edition)
2: SSL (SSL-encrypted communication, which does not carry user information and is supported for legacy versions and Community Edition)
3: SASL_SSL (SSL-encrypted communication, which authenticates the login through SASL before data start and is supported only for Community Edition)
     * @param integer $RouteId Route ID
     * @param integer $VipType Specifies the network type of the route (3: vpc routing; 7: internal support route; 1: public network route).
     * @param array $VipList Virtual IP list
     * @param string $Domain Domain name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DomainPort Domain name port
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DeleteTimestamp Timestamp.
     * @param string $Subnet Specifies the subnet Id.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BrokerVipList Virtual IP list (1:1 broker node).
     * @param string $VpcId VPC Id. specifies the Id of the vpc.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Note Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Route status. 1: creating, 2: creation succeeded, 3: creation failed, 4: deleting, 6: deletion failed.
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("DeleteTimestamp",$param) and $param["DeleteTimestamp"] !== null) {
            $this->DeleteTimestamp = $param["DeleteTimestamp"];
        }

        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("BrokerVipList",$param) and $param["BrokerVipList"] !== null) {
            $this->BrokerVipList = [];
            foreach ($param["BrokerVipList"] as $key => $value){
                $obj = new VipEntity();
                $obj->deserialize($value);
                array_push($this->BrokerVipList, $obj);
            }
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
