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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud native API gateway configuration message.
 *
 * @method string getConsoleType() Obtain Console type.
 * @method void setConsoleType(string $ConsoleType) Set Console type.
 * @method string getHttpUrl() Obtain HTTP URL.
 * @method void setHttpUrl(string $HttpUrl) Set HTTP URL.
 * @method string getHttpsUrl() Obtain HTTPS URL.
 * @method void setHttpsUrl(string $HttpsUrl) Set HTTPS URL.
 * @method string getNetType() Obtain Network type, Open|Internal.
 * @method void setNetType(string $NetType) Set Network type, Open|Internal.
 * @method string getAdminUser() Obtain Admin username.
 * @method void setAdminUser(string $AdminUser) Set Admin username.
 * @method string getAdminPassword() Obtain Administrator password.
 * @method void setAdminPassword(string $AdminPassword) Set Administrator password.
 * @method string getStatus() Obtain Network Status, Open|Closed|Updating
 * @method void setStatus(string $Status) Set Network Status, Open|Closed|Updating
 * @method NetworkAccessControl getAccessControl() Obtain Network access policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessControl(NetworkAccessControl $AccessControl) Set Network access policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Intranet subnet ID
 * @method void setSubnetId(string $SubnetId) Set Intranet subnet ID
 * @method string getVpcId() Obtain Private network VPC ID
 * @method void setVpcId(string $VpcId) Set Private network VPC ID
 * @method string getDescription() Obtain Description of load balancing
 * @method void setDescription(string $Description) Set Description of load balancing
 * @method string getSlaType() Obtain Load balancing specification type
 * @method void setSlaType(string $SlaType) Set Load balancing specification type
 * @method string getSlaName() Obtain clb specification name
 * @method void setSlaName(string $SlaName) Set clb specification name
 * @method string getVip() Obtain clb vip
 * @method void setVip(string $Vip) Set clb vip
 * @method integer getInternetMaxBandwidthOut() Obtain Bandwidth
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Bandwidth
 * @method boolean getMultiZoneFlag() Obtain Whether the multiple-AZ deployment mode is used.
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) Set Whether the multiple-AZ deployment mode is used.
 * @method string getMasterZoneId() Obtain Primary AZ.
 * @method void setMasterZoneId(string $MasterZoneId) Set Primary AZ.
 * @method string getSlaveZoneId() Obtain standby availability zone
 * @method void setSlaveZoneId(string $SlaveZoneId) Set standby availability zone
 * @method string getMasterZoneName() Obtain Primary availability zone name
 * @method void setMasterZoneName(string $MasterZoneName) Set Primary availability zone name
 * @method string getSlaveZoneName() Obtain Backup availability zone name
 * @method void setSlaveZoneName(string $SlaveZoneName) Set Backup availability zone name
 * @method string getNetworkId() Obtain Network id
 * @method void setNetworkId(string $NetworkId) Set Network id
 * @method boolean getIPV6FullChain() Obtain Whether the CLB is a new ipv6 CLB
 * @method void setIPV6FullChain(boolean $IPV6FullChain) Set Whether the CLB is a new ipv6 CLB
 * @method string getCustomizedConfigContent() Obtain Load balancing personalized configuration content
 * @method void setCustomizedConfigContent(string $CustomizedConfigContent) Set Load balancing personalized configuration content
 */
class CloudNativeAPIGatewayConfig extends AbstractModel
{
    /**
     * @var string Console type.
     */
    public $ConsoleType;

    /**
     * @var string HTTP URL.
     */
    public $HttpUrl;

    /**
     * @var string HTTPS URL.
     */
    public $HttpsUrl;

    /**
     * @var string Network type, Open|Internal.
     */
    public $NetType;

    /**
     * @var string Admin username.
     */
    public $AdminUser;

    /**
     * @var string Administrator password.
     */
    public $AdminPassword;

    /**
     * @var string Network Status, Open|Closed|Updating
     */
    public $Status;

    /**
     * @var NetworkAccessControl Network access policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessControl;

    /**
     * @var string Intranet subnet ID
     */
    public $SubnetId;

    /**
     * @var string Private network VPC ID
     */
    public $VpcId;

    /**
     * @var string Description of load balancing
     */
    public $Description;

    /**
     * @var string Load balancing specification type
     */
    public $SlaType;

    /**
     * @var string clb specification name
     */
    public $SlaName;

    /**
     * @var string clb vip
     */
    public $Vip;

    /**
     * @var integer Bandwidth
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean Whether the multiple-AZ deployment mode is used.
     */
    public $MultiZoneFlag;

    /**
     * @var string Primary AZ.
     */
    public $MasterZoneId;

    /**
     * @var string standby availability zone
     */
    public $SlaveZoneId;

    /**
     * @var string Primary availability zone name
     */
    public $MasterZoneName;

    /**
     * @var string Backup availability zone name
     */
    public $SlaveZoneName;

    /**
     * @var string Network id
     */
    public $NetworkId;

    /**
     * @var boolean Whether the CLB is a new ipv6 CLB
     */
    public $IPV6FullChain;

    /**
     * @var string Load balancing personalized configuration content
     */
    public $CustomizedConfigContent;

    /**
     * @param string $ConsoleType Console type.
     * @param string $HttpUrl HTTP URL.
     * @param string $HttpsUrl HTTPS URL.
     * @param string $NetType Network type, Open|Internal.
     * @param string $AdminUser Admin username.
     * @param string $AdminPassword Administrator password.
     * @param string $Status Network Status, Open|Closed|Updating
     * @param NetworkAccessControl $AccessControl Network access policy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Intranet subnet ID
     * @param string $VpcId Private network VPC ID
     * @param string $Description Description of load balancing
     * @param string $SlaType Load balancing specification type
     * @param string $SlaName clb specification name
     * @param string $Vip clb vip
     * @param integer $InternetMaxBandwidthOut Bandwidth
     * @param boolean $MultiZoneFlag Whether the multiple-AZ deployment mode is used.
     * @param string $MasterZoneId Primary AZ.
     * @param string $SlaveZoneId standby availability zone
     * @param string $MasterZoneName Primary availability zone name
     * @param string $SlaveZoneName Backup availability zone name
     * @param string $NetworkId Network id
     * @param boolean $IPV6FullChain Whether the CLB is a new ipv6 CLB
     * @param string $CustomizedConfigContent Load balancing personalized configuration content
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
        if (array_key_exists("ConsoleType",$param) and $param["ConsoleType"] !== null) {
            $this->ConsoleType = $param["ConsoleType"];
        }

        if (array_key_exists("HttpUrl",$param) and $param["HttpUrl"] !== null) {
            $this->HttpUrl = $param["HttpUrl"];
        }

        if (array_key_exists("HttpsUrl",$param) and $param["HttpsUrl"] !== null) {
            $this->HttpsUrl = $param["HttpsUrl"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("AdminUser",$param) and $param["AdminUser"] !== null) {
            $this->AdminUser = $param["AdminUser"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new NetworkAccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("SlaName",$param) and $param["SlaName"] !== null) {
            $this->SlaName = $param["SlaName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
        }

        if (array_key_exists("MasterZoneName",$param) and $param["MasterZoneName"] !== null) {
            $this->MasterZoneName = $param["MasterZoneName"];
        }

        if (array_key_exists("SlaveZoneName",$param) and $param["SlaveZoneName"] !== null) {
            $this->SlaveZoneName = $param["SlaveZoneName"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }

        if (array_key_exists("IPV6FullChain",$param) and $param["IPV6FullChain"] !== null) {
            $this->IPV6FullChain = $param["IPV6FullChain"];
        }

        if (array_key_exists("CustomizedConfigContent",$param) and $param["CustomizedConfigContent"] !== null) {
            $this->CustomizedConfigContent = $param["CustomizedConfigContent"];
        }
    }
}
