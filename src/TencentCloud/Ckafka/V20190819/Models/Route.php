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
 * @method integer getAccessType() Obtain <p>Instance access method 0: PLAINTEXT (plaintext mode, no user information included, supported by older versions and community edition) 1: SASL_PLAINTEXT (plaintext mode, however, login authentication with SASL is performed at data initiation, only supported by community edition) 2: SSL (SSL encrypted communication, no user information included, supported by older versions and community edition) 3: SASL_SSL (SSL encrypted communication, login authentication with SASL is performed at data initiation, only supported by community edition)</p>
 * @method void setAccessType(integer $AccessType) Set <p>Instance access method 0: PLAINTEXT (plaintext mode, no user information included, supported by older versions and community edition) 1: SASL_PLAINTEXT (plaintext mode, however, login authentication with SASL is performed at data initiation, only supported by community edition) 2: SSL (SSL encrypted communication, no user information included, supported by older versions and community edition) 3: SASL_SSL (SSL encrypted communication, login authentication with SASL is performed at data initiation, only supported by community edition)</p>
 * @method integer getRouteId() Obtain <p>Route Id</p>
 * @method void setRouteId(integer $RouteId) Set <p>Route Id</p>
 * @method integer getVipType() Obtain <p>Routing network type (3: vpc routing; 7: Internal support routing; 1: Public network route)</p>
 * @method void setVipType(integer $VipType) Set <p>Routing network type (3: vpc routing; 7: Internal support routing; 1: Public network route)</p>
 * @method array getVipList() Obtain <p>Virtual IP list</p>
 * @method void setVipList(array $VipList) Set <p>Virtual IP list</p>
 * @method string getDomain() Obtain <p>Domain name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set <p>Domain name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDomainPort() Obtain <p>Domain name port</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainPort(integer $DomainPort) Set <p>Domain name port</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeleteTimestamp() Obtain <p>Timestamp</p>
 * @method void setDeleteTimestamp(string $DeleteTimestamp) Set <p>Timestamp</p>
 * @method string getSubnet() Obtain <p>Subnet Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnet(string $Subnet) Set <p>Subnet Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBrokerVipList() Obtain <p>Virtual IP list (1:1 broker node)</p>
 * @method void setBrokerVipList(array $BrokerVipList) Set <p>Virtual IP list (1:1 broker node)</p>
 * @method string getVpcId() Obtain <p>VPC Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set <p>VPC Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNote() Obtain <p>Remarks</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set <p>Remarks</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain <p>Route status. 1: Creating, 2: Successfully created, 3: Creation failed, 4: Deleting, 6: Deletion failed</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set <p>Route status. 1: Creating, 2: Successfully created, 3: Creation failed, 4: Deleting, 6: Deletion failed</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Route extends AbstractModel
{
    /**
     * @var integer <p>Instance access method 0: PLAINTEXT (plaintext mode, no user information included, supported by older versions and community edition) 1: SASL_PLAINTEXT (plaintext mode, however, login authentication with SASL is performed at data initiation, only supported by community edition) 2: SSL (SSL encrypted communication, no user information included, supported by older versions and community edition) 3: SASL_SSL (SSL encrypted communication, login authentication with SASL is performed at data initiation, only supported by community edition)</p>
     */
    public $AccessType;

    /**
     * @var integer <p>Route Id</p>
     */
    public $RouteId;

    /**
     * @var integer <p>Routing network type (3: vpc routing; 7: Internal support routing; 1: Public network route)</p>
     */
    public $VipType;

    /**
     * @var array <p>Virtual IP list</p>
     */
    public $VipList;

    /**
     * @var string <p>Domain name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var integer <p>Domain name port</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainPort;

    /**
     * @var string <p>Timestamp</p>
     */
    public $DeleteTimestamp;

    /**
     * @var string <p>Subnet Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Subnet;

    /**
     * @var array <p>Virtual IP list (1:1 broker node)</p>
     */
    public $BrokerVipList;

    /**
     * @var string <p>VPC Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string <p>Remarks</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var integer <p>Route status. 1: Creating, 2: Successfully created, 3: Creation failed, 4: Deleting, 6: Deletion failed</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param integer $AccessType <p>Instance access method 0: PLAINTEXT (plaintext mode, no user information included, supported by older versions and community edition) 1: SASL_PLAINTEXT (plaintext mode, however, login authentication with SASL is performed at data initiation, only supported by community edition) 2: SSL (SSL encrypted communication, no user information included, supported by older versions and community edition) 3: SASL_SSL (SSL encrypted communication, login authentication with SASL is performed at data initiation, only supported by community edition)</p>
     * @param integer $RouteId <p>Route Id</p>
     * @param integer $VipType <p>Routing network type (3: vpc routing; 7: Internal support routing; 1: Public network route)</p>
     * @param array $VipList <p>Virtual IP list</p>
     * @param string $Domain <p>Domain name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DomainPort <p>Domain name port</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeleteTimestamp <p>Timestamp</p>
     * @param string $Subnet <p>Subnet Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BrokerVipList <p>Virtual IP list (1:1 broker node)</p>
     * @param string $VpcId <p>VPC Id</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Note <p>Remarks</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status <p>Route status. 1: Creating, 2: Successfully created, 3: Creation failed, 4: Deleting, 6: Deletion failed</p>
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
