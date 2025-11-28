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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for Pulsar network access point information
 *
 * @method string getVpcId() Obtain VPC ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndpoint() Obtain Access address
 * @method void setEndpoint(string $Endpoint) Set Access address
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getRouteType() Obtain Access point type: 
`0`: Supporting network access point 
`1`: VPC access point 
`2`: Public network access point
 * @method void setRouteType(integer $RouteType) Set Access point type: 
`0`: Supporting network access point 
`1`: VPC access point 
`2`: Public network access point
 * @method integer getOperationType() Obtain 0: local region access. since cross-region disaster recovery is not configured, this type of access point cannot perform cross-region switchover or switch back from remote access.
Local region access. due to the configuration of cross-region disaster recovery, switchover can be performed at any time in a different location. this state is used for the primary cluster access point.
Cross-Region access, completed offsite switchover, this state is used for the access point of the source cluster. the access point in this state is non-deletable.
3: cross-region access can be switched back from remote access at any time. this state is for the access point of the target cluster. the access point in this state is non-deletable.
Cross-Region access. the target cluster has completed offsite switchback and is in the state of waiting for deletion.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperationType(integer $OperationType) Set 0: local region access. since cross-region disaster recovery is not configured, this type of access point cannot perform cross-region switchover or switch back from remote access.
Local region access. due to the configuration of cross-region disaster recovery, switchover can be performed at any time in a different location. this state is used for the primary cluster access point.
Cross-Region access, completed offsite switchover, this state is used for the access point of the source cluster. the access point in this state is non-deletable.
3: cross-region access can be switched back from remote access at any time. this state is for the access point of the target cluster. the access point in this state is non-deletable.
Cross-Region access. the target cluster has completed offsite switchback and is in the state of waiting for deletion.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessPointsType() Obtain Access point type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessPointsType(string $AccessPointsType) Set Access point type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBandwidth() Obtain Bandwidth. currently only public network has this value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth. currently only public network has this value.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSecurityPolicy() Obtain Class.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSecurityPolicy(array $SecurityPolicy) Set Class.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getStandardAccessPoint() Obtain Indicates whether it is a standard access point. valid values: true (standard), false (not standard).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStandardAccessPoint(boolean $StandardAccessPoint) Set Indicates whether it is a standard access point. valid values: true (standard), false (not standard).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneName() Obtain AZ information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneName(string $ZoneName) Set AZ information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTls() Obtain Specifies whether TLS encryption is enabled.
 * @method void setTls(boolean $Tls) Set Specifies whether TLS encryption is enabled.
 * @method string getCustomUrl() Obtain Access point custom domain name.
 * @method void setCustomUrl(string $CustomUrl) Set Access point custom domain name.
 */
class PulsarNetworkAccessPointInfo extends AbstractModel
{
    /**
     * @var string VPC ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Access address
     */
    public $Endpoint;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Access point type: 
`0`: Supporting network access point 
`1`: VPC access point 
`2`: Public network access point
     */
    public $RouteType;

    /**
     * @var integer 0: local region access. since cross-region disaster recovery is not configured, this type of access point cannot perform cross-region switchover or switch back from remote access.
Local region access. due to the configuration of cross-region disaster recovery, switchover can be performed at any time in a different location. this state is used for the primary cluster access point.
Cross-Region access, completed offsite switchover, this state is used for the access point of the source cluster. the access point in this state is non-deletable.
3: cross-region access can be switched back from remote access at any time. this state is for the access point of the target cluster. the access point in this state is non-deletable.
Cross-Region access. the target cluster has completed offsite switchback and is in the state of waiting for deletion.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperationType;

    /**
     * @var string Access point type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessPointsType;

    /**
     * @var integer Bandwidth. currently only public network has this value.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Bandwidth;

    /**
     * @var array Class.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SecurityPolicy;

    /**
     * @var boolean Indicates whether it is a standard access point. valid values: true (standard), false (not standard).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StandardAccessPoint;

    /**
     * @var string AZ information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneName;

    /**
     * @var boolean Specifies whether TLS encryption is enabled.
     */
    public $Tls;

    /**
     * @var string Access point custom domain name.
     */
    public $CustomUrl;

    /**
     * @param string $VpcId VPC ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet ID. This field is left empty for supporting network and public network access points.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Endpoint Access address
     * @param string $InstanceId Instance ID
     * @param integer $RouteType Access point type: 
`0`: Supporting network access point 
`1`: VPC access point 
`2`: Public network access point
     * @param integer $OperationType 0: local region access. since cross-region disaster recovery is not configured, this type of access point cannot perform cross-region switchover or switch back from remote access.
Local region access. due to the configuration of cross-region disaster recovery, switchover can be performed at any time in a different location. this state is used for the primary cluster access point.
Cross-Region access, completed offsite switchover, this state is used for the access point of the source cluster. the access point in this state is non-deletable.
3: cross-region access can be switched back from remote access at any time. this state is for the access point of the target cluster. the access point in this state is non-deletable.
Cross-Region access. the target cluster has completed offsite switchback and is in the state of waiting for deletion.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessPointsType Access point type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Bandwidth Bandwidth. currently only public network has this value.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SecurityPolicy Class.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $StandardAccessPoint Indicates whether it is a standard access point. valid values: true (standard), false (not standard).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneName AZ information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Tls Specifies whether TLS encryption is enabled.
     * @param string $CustomUrl Access point custom domain name.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("AccessPointsType",$param) and $param["AccessPointsType"] !== null) {
            $this->AccessPointsType = $param["AccessPointsType"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = [];
            foreach ($param["SecurityPolicy"] as $key => $value){
                $obj = new SecurityPolicy();
                $obj->deserialize($value);
                array_push($this->SecurityPolicy, $obj);
            }
        }

        if (array_key_exists("StandardAccessPoint",$param) and $param["StandardAccessPoint"] !== null) {
            $this->StandardAccessPoint = $param["StandardAccessPoint"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = $param["Tls"];
        }

        if (array_key_exists("CustomUrl",$param) and $param["CustomUrl"] !== null) {
            $this->CustomUrl = $param["CustomUrl"];
        }
    }
}
