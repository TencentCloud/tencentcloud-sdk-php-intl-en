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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Site detail.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getZoneName() Obtain Site name.
 * @method void setZoneName(string $ZoneName) Set Site name.
 * @method string getAliasZoneName() Obtain Identical site identifier. It can contain digits, letters, ".", "-", and "_", up to 200 characters.
 * @method void setAliasZoneName(string $AliasZoneName) Set Identical site identifier. It can contain digits, letters, ".", "-", and "_", up to 200 characters.
 * @method string getArea() Obtain Site acceleration region. Valid values:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
 * @method void setArea(string $Area) Set Site acceleration region. Valid values:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
 * @method string getType() Obtain Site access type. Valid values:
<li>full: NS access type;</li>
<li>partial: CNAME access type;</li>
<li>noDomainAccess: domainless access type.</li>
<li>dnsPodAccess: DNSPod managed type. This type requires your domain name to be hosted on Tencent Cloud DNSPod;</li>
<li> pages: Pages type;</li>
<li> ai: Edge reasoning access type.</li>
 * @method void setType(string $Type) Set Site access type. Valid values:
<li>full: NS access type;</li>
<li>partial: CNAME access type;</li>
<li>noDomainAccess: domainless access type.</li>
<li>dnsPodAccess: DNSPod managed type. This type requires your domain name to be hosted on Tencent Cloud DNSPod;</li>
<li> pages: Pages type;</li>
<li> ai: Edge reasoning access type.</li>
 * @method array getTags() Obtain Tag associated with the site.
 * @method void setTags(array $Tags) Set Tag associated with the site.
 * @method array getResources() Obtain List of billable resources.
 * @method void setResources(array $Resources) Set List of billable resources.
 * @method NSDetail getNSDetail() Obtain Site detail of the NS type. This value is returned only when Type is full.
 * @method void setNSDetail(NSDetail $NSDetail) Set Site detail of the NS type. This value is returned only when Type is full.
 * @method CNAMEDetail getCNAMEDetail() Obtain Site detail of CNAME type. This value is returned only when Type is partial.
 * @method void setCNAMEDetail(CNAMEDetail $CNAMEDetail) Set Site detail of CNAME type. This value is returned only when Type is partial.
 * @method DNSPodDetail getDNSPodDetail() Obtain DNSPod managed type site detail. This return value is only available when Type = dnsPodAccess.
 * @method void setDNSPodDetail(DNSPodDetail $DNSPodDetail) Set DNSPod managed type site detail. This return value is only available when Type = dnsPodAccess.
 * @method string getCreatedOn() Obtain Site creation time.
 * @method void setCreatedOn(string $CreatedOn) Set Site creation time.
 * @method string getModifiedOn() Obtain Site modification time.
 * @method void setModifiedOn(string $ModifiedOn) Set Site modification time.
 * @method string getStatus() Obtain Site status. Valid values:
<li> active: NS switched; </li>
<li>pending: NS not switched.</li>
<li> moved: The NS has been moved away;</li>
<li>`deactivated`: The name server is blocked.</li>
<li> initializing: Package to be bound. </li>
 * @method void setStatus(string $Status) Set Site status. Valid values:
<li> active: NS switched; </li>
<li>pending: NS not switched.</li>
<li> moved: The NS has been moved away;</li>
<li>`deactivated`: The name server is blocked.</li>
<li> initializing: Package to be bound. </li>
 * @method string getCnameStatus() Obtain CNAME access status. Valid values:
<li> finished: site verified;</li>
<li> pending: verifying site.</li>
 * @method void setCnameStatus(string $CnameStatus) Set CNAME access status. Valid values:
<li> finished: site verified;</li>
<li> pending: verifying site.</li>
 * @method string getActiveStatus() Obtain Display status. Valid values:
<li> active: enabled;</li>
<li> inactive: Not effective;</li>
<li> paused: disabled.</li>
 * @method void setActiveStatus(string $ActiveStatus) Set Display status. Valid values:
<li> active: enabled;</li>
<li> inactive: Not effective;</li>
<li> paused: disabled.</li>
 * @method string getLockStatus() Obtain Lock status. Valid values: <li> enable: normal. Modifications are allowed;</li><li> disable: locked. Modifications are not allowed;</li><li> plan_migrate: package migrating. Modifications are not allowed.</li>
 * @method void setLockStatus(string $LockStatus) Set Lock status. Valid values: <li> enable: normal. Modifications are allowed;</li><li> disable: locked. Modifications are not allowed;</li><li> plan_migrate: package migrating. Modifications are not allowed.</li>
 * @method boolean getPaused() Obtain Whether to close the site.
 * @method void setPaused(boolean $Paused) Set Whether to close the site.
 * @method integer getIsFake() Obtain Whether it is a fake site (this field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field). Valid values:
<li>0: non-fake site</li>
<li> 1: Fake site.</li>

 * @method void setIsFake(integer $IsFake) Set Whether it is a fake site (this field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field). Valid values:
<li>0: non-fake site</li>
<li> 1: Fake site.</li>

 * @method string getCnameSpeedUp() Obtain Whether CNAME acceleration is enabled (this is a historic reserved field and no longer maintained. For the corresponding field, see the website type). Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
 * @method void setCnameSpeedUp(string $CnameSpeedUp) Set Whether CNAME acceleration is enabled (this is a historic reserved field and no longer maintained. For the corresponding field, see the website type). Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
 * @method OwnershipVerification getOwnershipVerification() Obtain Ownership verification information. (This field is a historic reserved field and is no longer maintained. For the corresponding field, see the website type.)
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set Ownership verification information. (This field is a historic reserved field and is no longer maintained. For the corresponding field, see the website type.)
 * @method array getOriginalNameServers() Obtain List of NS currently used by the site. (This field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field for reference.)
 * @method void setOriginalNameServers(array $OriginalNameServers) Set List of NS currently used by the site. (This field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field for reference.)
 * @method array getNameServers() Obtain List of NS assigned by Tencent Cloud. (This field is a reserved field for history and no longer maintained. For reference, see the corresponding field based on the website type.)
 * @method void setNameServers(array $NameServers) Set List of NS assigned by Tencent Cloud. (This field is a reserved field for history and no longer maintained. For reference, see the corresponding field based on the website type.)
 * @method VanityNameServers getVanityNameServers() Obtain User-customized NS information. (This is a reserved field for history and is no longer maintained. Refer to the corresponding field based on the website type.)
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set User-customized NS information. (This is a reserved field for history and is no longer maintained. Refer to the corresponding field based on the website type.)
 * @method array getVanityNameServersIps() Obtain User-customized NS IP information. (This is a reserved field for historical purposes and is no longer maintained. Refer to the corresponding field based on the website type.)
 * @method void setVanityNameServersIps(array $VanityNameServersIps) Set User-customized NS IP information. (This is a reserved field for historical purposes and is no longer maintained. Refer to the corresponding field based on the website type.)
 * @method array getWorkModeInfos() Obtain Version management configuration group working mode. Each configuration module of a site can enable "version management mode" or "immediate effect mode" by configuration group dimension. For details, see [Version Management](https://www.tencentcloud.com/document/product/1552/113690?from_cn_redirect=1).
 * @method void setWorkModeInfos(array $WorkModeInfos) Set Version management configuration group working mode. Each configuration module of a site can enable "version management mode" or "immediate effect mode" by configuration group dimension. For details, see [Version Management](https://www.tencentcloud.com/document/product/1552/113690?from_cn_redirect=1).
 */
class Zone extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Site name.
     */
    public $ZoneName;

    /**
     * @var string Identical site identifier. It can contain digits, letters, ".", "-", and "_", up to 200 characters.
     */
    public $AliasZoneName;

    /**
     * @var string Site acceleration region. Valid values:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
     */
    public $Area;

    /**
     * @var string Site access type. Valid values:
<li>full: NS access type;</li>
<li>partial: CNAME access type;</li>
<li>noDomainAccess: domainless access type.</li>
<li>dnsPodAccess: DNSPod managed type. This type requires your domain name to be hosted on Tencent Cloud DNSPod;</li>
<li> pages: Pages type;</li>
<li> ai: Edge reasoning access type.</li>
     */
    public $Type;

    /**
     * @var array Tag associated with the site.
     */
    public $Tags;

    /**
     * @var array List of billable resources.
     */
    public $Resources;

    /**
     * @var NSDetail Site detail of the NS type. This value is returned only when Type is full.
     */
    public $NSDetail;

    /**
     * @var CNAMEDetail Site detail of CNAME type. This value is returned only when Type is partial.
     */
    public $CNAMEDetail;

    /**
     * @var DNSPodDetail DNSPod managed type site detail. This return value is only available when Type = dnsPodAccess.
     */
    public $DNSPodDetail;

    /**
     * @var string Site creation time.
     */
    public $CreatedOn;

    /**
     * @var string Site modification time.
     */
    public $ModifiedOn;

    /**
     * @var string Site status. Valid values:
<li> active: NS switched; </li>
<li>pending: NS not switched.</li>
<li> moved: The NS has been moved away;</li>
<li>`deactivated`: The name server is blocked.</li>
<li> initializing: Package to be bound. </li>
     */
    public $Status;

    /**
     * @var string CNAME access status. Valid values:
<li> finished: site verified;</li>
<li> pending: verifying site.</li>
     */
    public $CnameStatus;

    /**
     * @var string Display status. Valid values:
<li> active: enabled;</li>
<li> inactive: Not effective;</li>
<li> paused: disabled.</li>
     */
    public $ActiveStatus;

    /**
     * @var string Lock status. Valid values: <li> enable: normal. Modifications are allowed;</li><li> disable: locked. Modifications are not allowed;</li><li> plan_migrate: package migrating. Modifications are not allowed.</li>
     */
    public $LockStatus;

    /**
     * @var boolean Whether to close the site.
     */
    public $Paused;

    /**
     * @var integer Whether it is a fake site (this field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field). Valid values:
<li>0: non-fake site</li>
<li> 1: Fake site.</li>

     */
    public $IsFake;

    /**
     * @var string Whether CNAME acceleration is enabled (this is a historic reserved field and no longer maintained. For the corresponding field, see the website type). Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
     */
    public $CnameSpeedUp;

    /**
     * @var OwnershipVerification Ownership verification information. (This field is a historic reserved field and is no longer maintained. For the corresponding field, see the website type.)
     */
    public $OwnershipVerification;

    /**
     * @var array List of NS currently used by the site. (This field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field for reference.)
     */
    public $OriginalNameServers;

    /**
     * @var array List of NS assigned by Tencent Cloud. (This field is a reserved field for history and no longer maintained. For reference, see the corresponding field based on the website type.)
     */
    public $NameServers;

    /**
     * @var VanityNameServers User-customized NS information. (This is a reserved field for history and is no longer maintained. Refer to the corresponding field based on the website type.)
     */
    public $VanityNameServers;

    /**
     * @var array User-customized NS IP information. (This is a reserved field for historical purposes and is no longer maintained. Refer to the corresponding field based on the website type.)
     */
    public $VanityNameServersIps;

    /**
     * @var array Version management configuration group working mode. Each configuration module of a site can enable "version management mode" or "immediate effect mode" by configuration group dimension. For details, see [Version Management](https://www.tencentcloud.com/document/product/1552/113690?from_cn_redirect=1).
     */
    public $WorkModeInfos;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ZoneName Site name.
     * @param string $AliasZoneName Identical site identifier. It can contain digits, letters, ".", "-", and "_", up to 200 characters.
     * @param string $Area Site acceleration region. Valid values:
<li> global: global availability zone;</li>
<li>mainland: Chinese mainland availability zone;</li>
<li>overseas: global availability zone (excluding the Chinese mainland).</li>
     * @param string $Type Site access type. Valid values:
<li>full: NS access type;</li>
<li>partial: CNAME access type;</li>
<li>noDomainAccess: domainless access type.</li>
<li>dnsPodAccess: DNSPod managed type. This type requires your domain name to be hosted on Tencent Cloud DNSPod;</li>
<li> pages: Pages type;</li>
<li> ai: Edge reasoning access type.</li>
     * @param array $Tags Tag associated with the site.
     * @param array $Resources List of billable resources.
     * @param NSDetail $NSDetail Site detail of the NS type. This value is returned only when Type is full.
     * @param CNAMEDetail $CNAMEDetail Site detail of CNAME type. This value is returned only when Type is partial.
     * @param DNSPodDetail $DNSPodDetail DNSPod managed type site detail. This return value is only available when Type = dnsPodAccess.
     * @param string $CreatedOn Site creation time.
     * @param string $ModifiedOn Site modification time.
     * @param string $Status Site status. Valid values:
<li> active: NS switched; </li>
<li>pending: NS not switched.</li>
<li> moved: The NS has been moved away;</li>
<li>`deactivated`: The name server is blocked.</li>
<li> initializing: Package to be bound. </li>
     * @param string $CnameStatus CNAME access status. Valid values:
<li> finished: site verified;</li>
<li> pending: verifying site.</li>
     * @param string $ActiveStatus Display status. Valid values:
<li> active: enabled;</li>
<li> inactive: Not effective;</li>
<li> paused: disabled.</li>
     * @param string $LockStatus Lock status. Valid values: <li> enable: normal. Modifications are allowed;</li><li> disable: locked. Modifications are not allowed;</li><li> plan_migrate: package migrating. Modifications are not allowed.</li>
     * @param boolean $Paused Whether to close the site.
     * @param integer $IsFake Whether it is a fake site (this field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field). Valid values:
<li>0: non-fake site</li>
<li> 1: Fake site.</li>

     * @param string $CnameSpeedUp Whether CNAME acceleration is enabled (this is a historic reserved field and no longer maintained. For the corresponding field, see the website type). Valid values:
<li> enabled: Enable;</li>
<li> disabled: Disable.</li>
     * @param OwnershipVerification $OwnershipVerification Ownership verification information. (This field is a historic reserved field and is no longer maintained. For the corresponding field, see the website type.)
     * @param array $OriginalNameServers List of NS currently used by the site. (This field is a reserved field for history and is no longer maintained. According to the website type, see the corresponding field for reference.)
     * @param array $NameServers List of NS assigned by Tencent Cloud. (This field is a reserved field for history and no longer maintained. For reference, see the corresponding field based on the website type.)
     * @param VanityNameServers $VanityNameServers User-customized NS information. (This is a reserved field for history and is no longer maintained. Refer to the corresponding field based on the website type.)
     * @param array $VanityNameServersIps User-customized NS IP information. (This is a reserved field for historical purposes and is no longer maintained. Refer to the corresponding field based on the website type.)
     * @param array $WorkModeInfos Version management configuration group working mode. Each configuration module of a site can enable "version management mode" or "immediate effect mode" by configuration group dimension. For details, see [Version Management](https://www.tencentcloud.com/document/product/1552/113690?from_cn_redirect=1).
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

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("NSDetail",$param) and $param["NSDetail"] !== null) {
            $this->NSDetail = new NSDetail();
            $this->NSDetail->deserialize($param["NSDetail"]);
        }

        if (array_key_exists("CNAMEDetail",$param) and $param["CNAMEDetail"] !== null) {
            $this->CNAMEDetail = new CNAMEDetail();
            $this->CNAMEDetail->deserialize($param["CNAMEDetail"]);
        }

        if (array_key_exists("DNSPodDetail",$param) and $param["DNSPodDetail"] !== null) {
            $this->DNSPodDetail = new DNSPodDetail();
            $this->DNSPodDetail->deserialize($param["DNSPodDetail"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CnameStatus",$param) and $param["CnameStatus"] !== null) {
            $this->CnameStatus = $param["CnameStatus"];
        }

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }

        if (array_key_exists("LockStatus",$param) and $param["LockStatus"] !== null) {
            $this->LockStatus = $param["LockStatus"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }

        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }

        if (array_key_exists("CnameSpeedUp",$param) and $param["CnameSpeedUp"] !== null) {
            $this->CnameSpeedUp = $param["CnameSpeedUp"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }

        if (array_key_exists("VanityNameServersIps",$param) and $param["VanityNameServersIps"] !== null) {
            $this->VanityNameServersIps = [];
            foreach ($param["VanityNameServersIps"] as $key => $value){
                $obj = new VanityNameServersIps();
                $obj->deserialize($value);
                array_push($this->VanityNameServersIps, $obj);
            }
        }

        if (array_key_exists("WorkModeInfos",$param) and $param["WorkModeInfos"] !== null) {
            $this->WorkModeInfos = [];
            foreach ($param["WorkModeInfos"] as $key => $value){
                $obj = new ConfigGroupWorkModeInfo();
                $obj->deserialize($value);
                array_push($this->WorkModeInfos, $obj);
            }
        }
    }
}
