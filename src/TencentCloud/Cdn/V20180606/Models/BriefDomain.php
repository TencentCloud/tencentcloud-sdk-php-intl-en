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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic domain configuration information, including CNAME, status, service type, acceleration region, creation time, last modified time, and origin server configuration.
 *
 * @method string getResourceId() Obtain Domain name ID
 * @method void setResourceId(string $ResourceId) Set Domain name ID
 * @method integer getAppId() Obtain Tencent Cloud account ID
 * @method void setAppId(integer $AppId) Set Tencent Cloud account ID
 * @method string getDomain() Obtain Acceleration domain name
 * @method void setDomain(string $Domain) Set Acceleration domain name
 * @method string getCname() Obtain CNAME address of domain name
 * @method void setCname(string $Cname) Set CNAME address of domain name
 * @method string getStatus() Obtain Acceleration service status
rejected: the domain name is rejected due to expiration/deregistration of its ICP filing
processing: deploying
online: activated
offline: disabled
 * @method void setStatus(string $Status) Set Acceleration service status
rejected: the domain name is rejected due to expiration/deregistration of its ICP filing
processing: deploying
online: activated
offline: disabled
 * @method integer getProjectId() Obtain Project ID, which can be viewed on the Tencent Cloud project management page
 * @method void setProjectId(integer $ProjectId) Set Project ID, which can be viewed on the Tencent Cloud project management page
 * @method string getServiceType() Obtain Domain name service type
web: static acceleration
download: download acceleration
media: streaming VOD acceleration
 * @method void setServiceType(string $ServiceType) Set Domain name service type
web: static acceleration
download: download acceleration
media: streaming VOD acceleration
 * @method string getCreateTime() Obtain Domain name creation time
 * @method void setCreateTime(string $CreateTime) Set Domain name creation time
 * @method string getUpdateTime() Obtain Last modified time of domain name
 * @method void setUpdateTime(string $UpdateTime) Set Last modified time of domain name
 * @method Origin getOrigin() Obtain Origin server configuration details
 * @method void setOrigin(Origin $Origin) Set Origin server configuration details
 * @method string getDisable() Obtain Domain name block status
normal: normal
overdue: the domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
malicious: the acceleration service has been forcibly disabled due to detection of malicious behavior.
ddos: the acceleration service has been disabled due to large-scale DDoS attacks to the domain name
idle: no operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
unlicensed: the acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
capping: the configured upper limit for bandwidth has been reached.
readonly: the domain name has a special configuration and has been locked.
 * @method void setDisable(string $Disable) Set Domain name block status
normal: normal
overdue: the domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
malicious: the acceleration service has been forcibly disabled due to detection of malicious behavior.
ddos: the acceleration service has been disabled due to large-scale DDoS attacks to the domain name
idle: no operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
unlicensed: the acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
capping: the configured upper limit for bandwidth has been reached.
readonly: the domain name has a special configuration and has been locked.
 * @method string getArea() Obtain Acceleration region
mainland: acceleration in Mainland China
overseas: acceleration outside Mainland China
global: global acceleration
 * @method void setArea(string $Area) Set Acceleration region
mainland: acceleration in Mainland China
overseas: acceleration outside Mainland China
global: global acceleration
 * @method string getReadonly() Obtain Domain name lock status
normal: not locked
mainland: locked in Mainland China
overseas: locked outside Mainland China
global: locked globally
 * @method void setReadonly(string $Readonly) Set Domain name lock status
normal: not locked
mainland: locked in Mainland China
overseas: locked outside Mainland China
global: locked globally
 * @method string getProduct() Obtain Product of the domain name, either `cdn` or `ecdn`.
 * @method void setProduct(string $Product) Set Product of the domain name, either `cdn` or `ecdn`.
 */
class BriefDomain extends AbstractModel
{
    /**
     * @var string Domain name ID
     */
    public $ResourceId;

    /**
     * @var integer Tencent Cloud account ID
     */
    public $AppId;

    /**
     * @var string Acceleration domain name
     */
    public $Domain;

    /**
     * @var string CNAME address of domain name
     */
    public $Cname;

    /**
     * @var string Acceleration service status
rejected: the domain name is rejected due to expiration/deregistration of its ICP filing
processing: deploying
online: activated
offline: disabled
     */
    public $Status;

    /**
     * @var integer Project ID, which can be viewed on the Tencent Cloud project management page
     */
    public $ProjectId;

    /**
     * @var string Domain name service type
web: static acceleration
download: download acceleration
media: streaming VOD acceleration
     */
    public $ServiceType;

    /**
     * @var string Domain name creation time
     */
    public $CreateTime;

    /**
     * @var string Last modified time of domain name
     */
    public $UpdateTime;

    /**
     * @var Origin Origin server configuration details
     */
    public $Origin;

    /**
     * @var string Domain name block status
normal: normal
overdue: the domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
malicious: the acceleration service has been forcibly disabled due to detection of malicious behavior.
ddos: the acceleration service has been disabled due to large-scale DDoS attacks to the domain name
idle: no operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
unlicensed: the acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
capping: the configured upper limit for bandwidth has been reached.
readonly: the domain name has a special configuration and has been locked.
     */
    public $Disable;

    /**
     * @var string Acceleration region
mainland: acceleration in Mainland China
overseas: acceleration outside Mainland China
global: global acceleration
     */
    public $Area;

    /**
     * @var string Domain name lock status
normal: not locked
mainland: locked in Mainland China
overseas: locked outside Mainland China
global: locked globally
     */
    public $Readonly;

    /**
     * @var string Product of the domain name, either `cdn` or `ecdn`.
     */
    public $Product;

    /**
     * @param string $ResourceId Domain name ID
     * @param integer $AppId Tencent Cloud account ID
     * @param string $Domain Acceleration domain name
     * @param string $Cname CNAME address of domain name
     * @param string $Status Acceleration service status
rejected: the domain name is rejected due to expiration/deregistration of its ICP filing
processing: deploying
online: activated
offline: disabled
     * @param integer $ProjectId Project ID, which can be viewed on the Tencent Cloud project management page
     * @param string $ServiceType Domain name service type
web: static acceleration
download: download acceleration
media: streaming VOD acceleration
     * @param string $CreateTime Domain name creation time
     * @param string $UpdateTime Last modified time of domain name
     * @param Origin $Origin Origin server configuration details
     * @param string $Disable Domain name block status
normal: normal
overdue: the domain name has been disabled due to account arrears. The acceleration service can be resumed after the account is topped up.
malicious: the acceleration service has been forcibly disabled due to detection of malicious behavior.
ddos: the acceleration service has been disabled due to large-scale DDoS attacks to the domain name
idle: no operations or data has been detected for more than 90 days. The domain name is determined to be inactive which automatically disables the acceleration service. You can restart the service.
unlicensed: the acceleration service has been automatically disabled as the domain name has no ICP filing or its ICP filing is deregistered. Service can be resumed after an ICP filing is obtained.
capping: the configured upper limit for bandwidth has been reached.
readonly: the domain name has a special configuration and has been locked.
     * @param string $Area Acceleration region
mainland: acceleration in Mainland China
overseas: acceleration outside Mainland China
global: global acceleration
     * @param string $Readonly Domain name lock status
normal: not locked
mainland: locked in Mainland China
overseas: locked outside Mainland China
global: locked globally
     * @param string $Product Product of the domain name, either `cdn` or `ecdn`.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
