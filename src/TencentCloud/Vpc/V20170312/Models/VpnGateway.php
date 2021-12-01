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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPN gateway object.
 *
 * @method string getVpnGatewayId() Obtain Gateway instance ID.
 * @method void setVpnGatewayId(string $VpnGatewayId) Set Gateway instance ID.
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getVpnGatewayName() Obtain Gateway instance name.
 * @method void setVpnGatewayName(string $VpnGatewayName) Set Gateway instance name.
 * @method string getType() Obtain Gateway instance type. Valid values: 'IPSEC', 'SSL', and 'CCN'.
 * @method void setType(string $Type) Set Gateway instance type. Valid values: 'IPSEC', 'SSL', and 'CCN'.
 * @method string getState() Obtain Gateway instance status. 'PENDING': Creating; 'DELETING': Deleting; 'AVAILABLE': Running.
 * @method void setState(string $State) Set Gateway instance status. 'PENDING': Creating; 'DELETING': Deleting; 'AVAILABLE': Running.
 * @method string getPublicIpAddress() Obtain Gateway public IP.
 * @method void setPublicIpAddress(string $PublicIpAddress) Set Gateway public IP.
 * @method string getRenewFlag() Obtain Gateway renewal type: 'NOTIFY_AND_MANUAL_RENEW': Manual renewal. 'NOTIFY_AND_AUTO_RENEW': Automatic renewal. 'NOT_NOTIFY_AND_NOT_RENEW': No renewal after expiration.
 * @method void setRenewFlag(string $RenewFlag) Set Gateway renewal type: 'NOTIFY_AND_MANUAL_RENEW': Manual renewal. 'NOTIFY_AND_AUTO_RENEW': Automatic renewal. 'NOT_NOTIFY_AND_NOT_RENEW': No renewal after expiration.
 * @method string getInstanceChargeType() Obtain Gateway billing type: POSTPAID_BY_HOUR: Postpaid by hour; PREPAID: Prepaid.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Gateway billing type: POSTPAID_BY_HOUR: Postpaid by hour; PREPAID: Prepaid.
 * @method integer getInternetMaxBandwidthOut() Obtain Outbound bandwidth of gateway.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Outbound bandwidth of gateway.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method string getExpiredTime() Obtain Expiration time of the prepaid gateway.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time of the prepaid gateway.
 * @method boolean getIsAddressBlocked() Obtain Whether the public IP is blocked.
 * @method void setIsAddressBlocked(boolean $IsAddressBlocked) Set Whether the public IP is blocked.
 * @method string getNewPurchasePlan() Obtain Change of billing method. PREPAID_TO_POSTPAID: Monthly subscription prepaid to postpaid by hour.
 * @method void setNewPurchasePlan(string $NewPurchasePlan) Set Change of billing method. PREPAID_TO_POSTPAID: Monthly subscription prepaid to postpaid by hour.
 * @method string getRestrictState() Obtain Gateway billing status. PROTECTIVELY_ISOLATED: Instance is isolated; NORMAL: Normal.
 * @method void setRestrictState(string $RestrictState) Set Gateway billing status. PROTECTIVELY_ISOLATED: Instance is isolated; NORMAL: Normal.
 * @method string getZone() Obtain The availability zone, such as `ap-guangzhou-2`
 * @method void setZone(string $Zone) Set The availability zone, such as `ap-guangzhou-2`
 * @method array getVpnGatewayQuotaSet() Obtain Gateway bandwidth quota information.
 * @method void setVpnGatewayQuotaSet(array $VpnGatewayQuotaSet) Set Gateway bandwidth quota information.
 * @method string getVersion() Obtain Gateway instance version.
 * @method void setVersion(string $Version) Set Gateway instance version.
 * @method string getNetworkInstanceId() Obtain CCN instance ID when the value of Type is CCN.
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set CCN instance ID when the value of Type is CCN.
 * @method string getCdcId() Obtain CDC instance ID
 * @method void setCdcId(string $CdcId) Set CDC instance ID
 * @method integer getMaxConnection() Obtain Maximum number of connected clients allowed for the SSL VPN gateway.
 * @method void setMaxConnection(integer $MaxConnection) Set Maximum number of connected clients allowed for the SSL VPN gateway.
 */
class VpnGateway extends AbstractModel
{
    /**
     * @var string Gateway instance ID.
     */
    public $VpnGatewayId;

    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string Gateway instance name.
     */
    public $VpnGatewayName;

    /**
     * @var string Gateway instance type. Valid values: 'IPSEC', 'SSL', and 'CCN'.
     */
    public $Type;

    /**
     * @var string Gateway instance status. 'PENDING': Creating; 'DELETING': Deleting; 'AVAILABLE': Running.
     */
    public $State;

    /**
     * @var string Gateway public IP.
     */
    public $PublicIpAddress;

    /**
     * @var string Gateway renewal type: 'NOTIFY_AND_MANUAL_RENEW': Manual renewal. 'NOTIFY_AND_AUTO_RENEW': Automatic renewal. 'NOT_NOTIFY_AND_NOT_RENEW': No renewal after expiration.
     */
    public $RenewFlag;

    /**
     * @var string Gateway billing type: POSTPAID_BY_HOUR: Postpaid by hour; PREPAID: Prepaid.
     */
    public $InstanceChargeType;

    /**
     * @var integer Outbound bandwidth of gateway.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var string Expiration time of the prepaid gateway.
     */
    public $ExpiredTime;

    /**
     * @var boolean Whether the public IP is blocked.
     */
    public $IsAddressBlocked;

    /**
     * @var string Change of billing method. PREPAID_TO_POSTPAID: Monthly subscription prepaid to postpaid by hour.
     */
    public $NewPurchasePlan;

    /**
     * @var string Gateway billing status. PROTECTIVELY_ISOLATED: Instance is isolated; NORMAL: Normal.
     */
    public $RestrictState;

    /**
     * @var string The availability zone, such as `ap-guangzhou-2`
     */
    public $Zone;

    /**
     * @var array Gateway bandwidth quota information.
     */
    public $VpnGatewayQuotaSet;

    /**
     * @var string Gateway instance version.
     */
    public $Version;

    /**
     * @var string CCN instance ID when the value of Type is CCN.
     */
    public $NetworkInstanceId;

    /**
     * @var string CDC instance ID
     */
    public $CdcId;

    /**
     * @var integer Maximum number of connected clients allowed for the SSL VPN gateway.
     */
    public $MaxConnection;

    /**
     * @param string $VpnGatewayId Gateway instance ID.
     * @param string $VpcId VPC instance ID.
     * @param string $VpnGatewayName Gateway instance name.
     * @param string $Type Gateway instance type. Valid values: 'IPSEC', 'SSL', and 'CCN'.
     * @param string $State Gateway instance status. 'PENDING': Creating; 'DELETING': Deleting; 'AVAILABLE': Running.
     * @param string $PublicIpAddress Gateway public IP.
     * @param string $RenewFlag Gateway renewal type: 'NOTIFY_AND_MANUAL_RENEW': Manual renewal. 'NOTIFY_AND_AUTO_RENEW': Automatic renewal. 'NOT_NOTIFY_AND_NOT_RENEW': No renewal after expiration.
     * @param string $InstanceChargeType Gateway billing type: POSTPAID_BY_HOUR: Postpaid by hour; PREPAID: Prepaid.
     * @param integer $InternetMaxBandwidthOut Outbound bandwidth of gateway.
     * @param string $CreatedTime Creation Time.
     * @param string $ExpiredTime Expiration time of the prepaid gateway.
     * @param boolean $IsAddressBlocked Whether the public IP is blocked.
     * @param string $NewPurchasePlan Change of billing method. PREPAID_TO_POSTPAID: Monthly subscription prepaid to postpaid by hour.
     * @param string $RestrictState Gateway billing status. PROTECTIVELY_ISOLATED: Instance is isolated; NORMAL: Normal.
     * @param string $Zone The availability zone, such as `ap-guangzhou-2`
     * @param array $VpnGatewayQuotaSet Gateway bandwidth quota information.
     * @param string $Version Gateway instance version.
     * @param string $NetworkInstanceId CCN instance ID when the value of Type is CCN.
     * @param string $CdcId CDC instance ID
     * @param integer $MaxConnection Maximum number of connected clients allowed for the SSL VPN gateway.
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpnGatewayName",$param) and $param["VpnGatewayName"] !== null) {
            $this->VpnGatewayName = $param["VpnGatewayName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PublicIpAddress",$param) and $param["PublicIpAddress"] !== null) {
            $this->PublicIpAddress = $param["PublicIpAddress"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("IsAddressBlocked",$param) and $param["IsAddressBlocked"] !== null) {
            $this->IsAddressBlocked = $param["IsAddressBlocked"];
        }

        if (array_key_exists("NewPurchasePlan",$param) and $param["NewPurchasePlan"] !== null) {
            $this->NewPurchasePlan = $param["NewPurchasePlan"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpnGatewayQuotaSet",$param) and $param["VpnGatewayQuotaSet"] !== null) {
            $this->VpnGatewayQuotaSet = [];
            foreach ($param["VpnGatewayQuotaSet"] as $key => $value){
                $obj = new VpnGatewayQuota();
                $obj->deserialize($value);
                array_push($this->VpnGatewayQuotaSet, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("MaxConnection",$param) and $param["MaxConnection"] !== null) {
            $this->MaxConnection = $param["MaxConnection"];
        }
    }
}
