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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service list display
 *
 * @method integer getInnerHttpsPort() Obtain Port for HTTPS access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInnerHttpsPort(integer $InnerHttpsPort) Set Port for HTTPS access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceDesc() Obtain Custom service description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceDesc(string $ServiceDesc) Set Custom service description.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProtocol() Obtain Service frontend request type, such as `http`, `https`, and `http&https`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Service frontend request type, such as `http`, `https`, and `http&https`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedTime() Obtain Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setModifiedTime(string $ModifiedTime) Set Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getNetTypes() Obtain Network types supported by service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNetTypes(array $NetTypes) Set Network types supported by service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExclusiveSetName() Obtain Dedicated cluster name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExclusiveSetName(string $ExclusiveSetName) Set Dedicated cluster name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceId() Obtain Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(string $ServiceId) Set Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIpVersion() Obtain IP version.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpVersion(string $IpVersion) Set IP version.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAvailableEnvironments() Obtain List of published environments, such as test, prepub, and release.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableEnvironments(array $AvailableEnvironments) Set List of published environments, such as test, prepub, and release.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServiceName() Obtain Custom service name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServiceName(string $ServiceName) Set Custom service name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOuterSubDomain() Obtain Public domain name assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOuterSubDomain(string $OuterSubDomain) Set Public domain name assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInnerHttpPort() Obtain Port for HTTP access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInnerHttpPort(integer $InnerHttpPort) Set Port for HTTP access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInnerSubDomain() Obtain Private domain name automatically assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInnerSubDomain(string $InnerSubDomain) Set Private domain name automatically assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTradeIsolateStatus() Obtain Billing status of service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTradeIsolateStatus(integer $TradeIsolateStatus) Set Billing status of service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tags bound to a service.
Note: this field may return null, indicating that no valid values found.
 * @method void setTags(array $Tags) Set Tags bound to a service.
Note: this field may return null, indicating that no valid values found.
 * @method string getInstanceId() Obtain Dedicated instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Dedicated instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSetType() Obtain Cluster type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSetType(string $SetType) Set Cluster type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDeploymentType() Obtain Cluster type for service deployment
Note: this field may return null, indicating that no valid values found.
 * @method void setDeploymentType(string $DeploymentType) Set Cluster type for service deployment
Note: this field may return null, indicating that no valid values found.
 */
class Service extends AbstractModel
{
    /**
     * @var integer Port for HTTPS access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InnerHttpsPort;

    /**
     * @var string Custom service description.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceDesc;

    /**
     * @var string Service frontend request type, such as `http`, `https`, and `http&https`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ModifiedTime;

    /**
     * @var array Network types supported by service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NetTypes;

    /**
     * @var string Dedicated cluster name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExclusiveSetName;

    /**
     * @var string Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @var string IP version.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpVersion;

    /**
     * @var array List of published environments, such as test, prepub, and release.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableEnvironments;

    /**
     * @var string Custom service name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceName;

    /**
     * @var string Public domain name assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OuterSubDomain;

    /**
     * @var string Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedTime;

    /**
     * @var integer Port for HTTP access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InnerHttpPort;

    /**
     * @var string Private domain name automatically assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InnerSubDomain;

    /**
     * @var integer Billing status of service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TradeIsolateStatus;

    /**
     * @var array Tags bound to a service.
Note: this field may return null, indicating that no valid values found.
     */
    public $Tags;

    /**
     * @var string Dedicated instance
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Cluster type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SetType;

    /**
     * @var string Cluster type for service deployment
Note: this field may return null, indicating that no valid values found.
     */
    public $DeploymentType;

    /**
     * @param integer $InnerHttpsPort Port for HTTPS access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceDesc Custom service description.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Protocol Service frontend request type, such as `http`, `https`, and `http&https`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedTime Last modified time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $NetTypes Network types supported by service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExclusiveSetName Dedicated cluster name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceId Unique service ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $IpVersion IP version.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $AvailableEnvironments List of published environments, such as test, prepub, and release.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServiceName Custom service name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OuterSubDomain Public domain name assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time in the format of YYYY-MM-DDThh:mm:ssZ according to ISO 8601 standard. UTC time is used.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InnerHttpPort Port for HTTP access over private network.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InnerSubDomain Private domain name automatically assigned by the system for this service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TradeIsolateStatus Billing status of service.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tags bound to a service.
Note: this field may return null, indicating that no valid values found.
     * @param string $InstanceId Dedicated instance
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SetType Cluster type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $DeploymentType Cluster type for service deployment
Note: this field may return null, indicating that no valid values found.
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
        if (array_key_exists("InnerHttpsPort",$param) and $param["InnerHttpsPort"] !== null) {
            $this->InnerHttpsPort = $param["InnerHttpsPort"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("ExclusiveSetName",$param) and $param["ExclusiveSetName"] !== null) {
            $this->ExclusiveSetName = $param["ExclusiveSetName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("AvailableEnvironments",$param) and $param["AvailableEnvironments"] !== null) {
            $this->AvailableEnvironments = $param["AvailableEnvironments"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("OuterSubDomain",$param) and $param["OuterSubDomain"] !== null) {
            $this->OuterSubDomain = $param["OuterSubDomain"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("InnerHttpPort",$param) and $param["InnerHttpPort"] !== null) {
            $this->InnerHttpPort = $param["InnerHttpPort"];
        }

        if (array_key_exists("InnerSubDomain",$param) and $param["InnerSubDomain"] !== null) {
            $this->InnerSubDomain = $param["InnerSubDomain"];
        }

        if (array_key_exists("TradeIsolateStatus",$param) and $param["TradeIsolateStatus"] !== null) {
            $this->TradeIsolateStatus = $param["TradeIsolateStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SetType",$param) and $param["SetType"] !== null) {
            $this->SetType = $param["SetType"];
        }

        if (array_key_exists("DeploymentType",$param) and $param["DeploymentType"] !== null) {
            $this->DeploymentType = $param["DeploymentType"];
        }
    }
}
