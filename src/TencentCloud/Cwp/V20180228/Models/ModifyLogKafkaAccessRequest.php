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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogKafkaAccess request structure.
 *
 * @method string getKafkaEnvName() Obtain Instance name, e.g. CWPP test environment
 * @method void setKafkaEnvName(string $KafkaEnvName) Set Instance name, e.g. CWPP test environment
 * @method string getKafkaId() Obtain Instance ID
 * @method void setKafkaId(string $KafkaId) Set Instance ID
 * @method integer getAccessType() Obtain Access method. 1 - public network domain name access; 2 - support environment access
 * @method void setAccessType(integer $AccessType) Set Access method. 1 - public network domain name access; 2 - support environment access
 * @method string getAccessAddr() Obtain Access address
 * @method void setAccessAddr(string $AccessAddr) Set Access address
 * @method string getUsername() Obtain Username
 * @method void setUsername(string $Username) Set Username
 * @method integer getHasPwd() Obtain 0 - without password; 1 - with password
 * @method void setHasPwd(integer $HasPwd) Set 0 - without password; 1 - with password
 * @method array getDeliverTypeDetails() Obtain Log shipping type configuration details
 * @method void setDeliverTypeDetails(array $DeliverTypeDetails) Set Log shipping type configuration details
 * @method string getInsVersion() Obtain Kafka version
 * @method void setInsVersion(string $InsVersion) Set Kafka version
 * @method string getZone() Obtain Region
 * @method void setZone(string $Zone) Set Region
 * @method string getAz() Obtain Availability zone
 * @method void setAz(string $Az) Set Availability zone
 * @method string getVpcId() Obtain vpcid address
 * @method void setVpcId(string $VpcId) Set vpcid address
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getDeliverStatus() Obtain Shipping status. 1 - healthy; 2 - alarm; 3 - abnormal
 * @method void setDeliverStatus(integer $DeliverStatus) Set Shipping status. 1 - healthy; 2 - alarm; 3 - abnormal
 * @method integer getBandWidth() Obtain Peak bandwidth
 * @method void setBandWidth(integer $BandWidth) Set Peak bandwidth
 * @method integer getDiskSize() Obtain Disk capacity
 * @method void setDiskSize(integer $DiskSize) Set Disk capacity
 * @method string getPwd() Obtain Password, AES encryption
 * @method void setPwd(string $Pwd) Set Password, AES encryption
 */
class ModifyLogKafkaAccessRequest extends AbstractModel
{
    /**
     * @var string Instance name, e.g. CWPP test environment
     */
    public $KafkaEnvName;

    /**
     * @var string Instance ID
     */
    public $KafkaId;

    /**
     * @var integer Access method. 1 - public network domain name access; 2 - support environment access
     */
    public $AccessType;

    /**
     * @var string Access address
     */
    public $AccessAddr;

    /**
     * @var string Username
     */
    public $Username;

    /**
     * @var integer 0 - without password; 1 - with password
     */
    public $HasPwd;

    /**
     * @var array Log shipping type configuration details
     */
    public $DeliverTypeDetails;

    /**
     * @var string Kafka version
     */
    public $InsVersion;

    /**
     * @var string Region
     */
    public $Zone;

    /**
     * @var string Availability zone
     */
    public $Az;

    /**
     * @var string vpcid address
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Shipping status. 1 - healthy; 2 - alarm; 3 - abnormal
     */
    public $DeliverStatus;

    /**
     * @var integer Peak bandwidth
     */
    public $BandWidth;

    /**
     * @var integer Disk capacity
     */
    public $DiskSize;

    /**
     * @var string Password, AES encryption
     */
    public $Pwd;

    /**
     * @param string $KafkaEnvName Instance name, e.g. CWPP test environment
     * @param string $KafkaId Instance ID
     * @param integer $AccessType Access method. 1 - public network domain name access; 2 - support environment access
     * @param string $AccessAddr Access address
     * @param string $Username Username
     * @param integer $HasPwd 0 - without password; 1 - with password
     * @param array $DeliverTypeDetails Log shipping type configuration details
     * @param string $InsVersion Kafka version
     * @param string $Zone Region
     * @param string $Az Availability zone
     * @param string $VpcId vpcid address
     * @param string $SubnetId Subnet ID
     * @param integer $DeliverStatus Shipping status. 1 - healthy; 2 - alarm; 3 - abnormal
     * @param integer $BandWidth Peak bandwidth
     * @param integer $DiskSize Disk capacity
     * @param string $Pwd Password, AES encryption
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
        if (array_key_exists("KafkaEnvName",$param) and $param["KafkaEnvName"] !== null) {
            $this->KafkaEnvName = $param["KafkaEnvName"];
        }

        if (array_key_exists("KafkaId",$param) and $param["KafkaId"] !== null) {
            $this->KafkaId = $param["KafkaId"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessAddr",$param) and $param["AccessAddr"] !== null) {
            $this->AccessAddr = $param["AccessAddr"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("HasPwd",$param) and $param["HasPwd"] !== null) {
            $this->HasPwd = $param["HasPwd"];
        }

        if (array_key_exists("DeliverTypeDetails",$param) and $param["DeliverTypeDetails"] !== null) {
            $this->DeliverTypeDetails = [];
            foreach ($param["DeliverTypeDetails"] as $key => $value){
                $obj = new DeliverTypeDetails();
                $obj->deserialize($value);
                array_push($this->DeliverTypeDetails, $obj);
            }
        }

        if (array_key_exists("InsVersion",$param) and $param["InsVersion"] !== null) {
            $this->InsVersion = $param["InsVersion"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Az",$param) and $param["Az"] !== null) {
            $this->Az = $param["Az"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Pwd",$param) and $param["Pwd"] !== null) {
            $this->Pwd = $param["Pwd"];
        }
    }
}
