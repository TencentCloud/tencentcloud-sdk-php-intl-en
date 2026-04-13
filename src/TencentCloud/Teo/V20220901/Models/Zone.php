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
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method string getAliasZoneName() Obtain Identical site identifier. specifies a composite of numbers, english letters, ".", "-", and "_" with a character limit of 200.
 * @method void setAliasZoneName(string $AliasZoneName) Set Identical site identifier. specifies a composite of numbers, english letters, ".", "-", and "_" with a character limit of 200.
 * @method string getArea() Obtain Site acceleration region. valid values:.
<Li>Global: global availability zone.</li>.
<Li>Mainland: chinese mainland availability zone.</li>.
<li>overseas: global availability zone (excluding the chinese mainland).</li>.
 * @method void setArea(string $Area) Set Site acceleration region. valid values:.
<Li>Global: global availability zone.</li>.
<Li>Mainland: chinese mainland availability zone.</li>.
<li>overseas: global availability zone (excluding the chinese mainland).</li>.
 * @method string getType() Obtain Site access type. valid values:.
<li>full: NS access type;</li>.
<li>partial: CNAME access type;</li>.
<li>noDomainAccess: domainless access type.</li>.
<li>dnsPodAccess: DNSPod managed type. this type requires your domain name to be hosted on tencent cloud DNSPod.</li>.
<li> pages: pages data type;</li>.
<li>ai: edge reasoning access type.</li>.
 * @method void setType(string $Type) Set Site access type. valid values:.
<li>full: NS access type;</li>.
<li>partial: CNAME access type;</li>.
<li>noDomainAccess: domainless access type.</li>.
<li>dnsPodAccess: DNSPod managed type. this type requires your domain name to be hosted on tencent cloud DNSPod.</li>.
<li> pages: pages data type;</li>.
<li>ai: edge reasoning access type.</li>.
 * @method array getTags() Obtain Specifies the Tag associated with the site.
 * @method void setTags(array $Tags) Set Specifies the Tag associated with the site.
 * @method array getResources() Obtain The list of billable resources.
 * @method void setResources(array $Resources) Set The list of billable resources.
 * @method NSDetail getNSDetail() Obtain NS site detail. returned only when Type = full.
 * @method void setNSDetail(NSDetail $NSDetail) Set NS site detail. returned only when Type = full.
 * @method CNAMEDetail getCNAMEDetail() Obtain CNAME site detail. returned only when Type = partial.
 * @method void setCNAMEDetail(CNAMEDetail $CNAMEDetail) Set CNAME site detail. returned only when Type = partial.
 * @method DNSPodDetail getDNSPodDetail() Obtain DNSPod managed Type site detail. returned only when Type = dnsPodAccess.
 * @method void setDNSPodDetail(DNSPodDetail $DNSPodDetail) Set DNSPod managed Type site detail. returned only when Type = dnsPodAccess.
 * @method string getCreatedOn() Obtain The creation time of the site.
 * @method void setCreatedOn(string $CreatedOn) Set The creation time of the site.
 * @method string getModifiedOn() Obtain The modification date of the site.
 * @method void setModifiedOn(string $ModifiedOn) Set The modification date of the site.
 * @method string getStatus() Obtain The site status. Values:
u200c<li>`active`: The name server is switched to EdgeOne.</li>
u200c<li>`pending`: The name server is not switched.</li>
u200c<li>`moved`: The name server is changed to other service providers.</li>
u200c<li>`deactivated`: The site is blocked.</li>
<li>`initializing`: The site is not bound with any plan. </li>
 * @method void setStatus(string $Status) Set The site status. Values:
u200c<li>`active`: The name server is switched to EdgeOne.</li>
u200c<li>`pending`: The name server is not switched.</li>
u200c<li>`moved`: The name server is changed to other service providers.</li>
u200c<li>`deactivated`: The site is blocked.</li>
<li>`initializing`: The site is not bound with any plan. </li>
 * @method string getCnameStatus() Obtain CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
 * @method void setCnameStatus(string $CnameStatus) Set CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
 * @method string getActiveStatus() Obtain Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
 * @method void setActiveStatus(string $ActiveStatus) Set Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
 * @method string getLockStatus() Obtain Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
 * @method void setLockStatus(string $LockStatus) Set Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
 * @method boolean getPaused() Obtain Whether the site is disabled.
 * @method void setPaused(boolean $Paused) Set Whether the site is disabled.
 * @method integer getIsFake() Obtain Specifies whether it is a fake site (this field is a historic reserved field and is no longer maintained, refer to the website type for the corresponding field). valid values:.
<Li>0: non-fake site.</li>.
<Li>1: fake site.</li>.

 * @method void setIsFake(integer $IsFake) Set Specifies whether it is a fake site (this field is a historic reserved field and is no longer maintained, refer to the website type for the corresponding field). valid values:.
<Li>0: non-fake site.</li>.
<Li>1: fake site.</li>.

 * @method string getCnameSpeedUp() Obtain Whether to enable CNAME acceleration (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field). valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
 * @method void setCnameSpeedUp(string $CnameSpeedUp) Set Whether to enable CNAME acceleration (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field). valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
 * @method OwnershipVerification getOwnershipVerification() Obtain Ownership verification information. (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field.).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set Ownership verification information. (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field.).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method array getOriginalNameServers() Obtain Lists the currently used NS of the site. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field based on the website type.).
 * @method void setOriginalNameServers(array $OriginalNameServers) Set Lists the currently used NS of the site. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field based on the website type.).
 * @method array getNameServers() Obtain Lists of NS assigned by tencent cloud. (this field is a historic reserved field and no longer maintained. refer to the website type for the corresponding field.).
 * @method void setNameServers(array $NameServers) Set Lists of NS assigned by tencent cloud. (this field is a historic reserved field and no longer maintained. refer to the website type for the corresponding field.).
 * @method VanityNameServers getVanityNameServers() Obtain Specifies user-customized NS information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set Specifies user-customized NS information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method array getVanityNameServersIps() Obtain User-Customized NS IP information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setVanityNameServersIps(array $VanityNameServersIps) Set User-Customized NS IP information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method array getWorkModeInfos() Obtain Version management configuration group working mode. site configuration modules can enable "version management mode" or "immediate effect mode" by configuration group dimension. for details, see [version management](https://www.tencentcloud.comom/document/product/1552/113690?from_cn_redirect=1).
 * @method void setWorkModeInfos(array $WorkModeInfos) Set Version management configuration group working mode. site configuration modules can enable "version management mode" or "immediate effect mode" by configuration group dimension. for details, see [version management](https://www.tencentcloud.comom/document/product/1552/113690?from_cn_redirect=1).
 */
class Zone extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string The site name.
     */
    public $ZoneName;

    /**
     * @var string Identical site identifier. specifies a composite of numbers, english letters, ".", "-", and "_" with a character limit of 200.
     */
    public $AliasZoneName;

    /**
     * @var string Site acceleration region. valid values:.
<Li>Global: global availability zone.</li>.
<Li>Mainland: chinese mainland availability zone.</li>.
<li>overseas: global availability zone (excluding the chinese mainland).</li>.
     */
    public $Area;

    /**
     * @var string Site access type. valid values:.
<li>full: NS access type;</li>.
<li>partial: CNAME access type;</li>.
<li>noDomainAccess: domainless access type.</li>.
<li>dnsPodAccess: DNSPod managed type. this type requires your domain name to be hosted on tencent cloud DNSPod.</li>.
<li> pages: pages data type;</li>.
<li>ai: edge reasoning access type.</li>.
     */
    public $Type;

    /**
     * @var array Specifies the Tag associated with the site.
     */
    public $Tags;

    /**
     * @var array The list of billable resources.
     */
    public $Resources;

    /**
     * @var NSDetail NS site detail. returned only when Type = full.
     */
    public $NSDetail;

    /**
     * @var CNAMEDetail CNAME site detail. returned only when Type = partial.
     */
    public $CNAMEDetail;

    /**
     * @var DNSPodDetail DNSPod managed Type site detail. returned only when Type = dnsPodAccess.
     */
    public $DNSPodDetail;

    /**
     * @var string The creation time of the site.
     */
    public $CreatedOn;

    /**
     * @var string The modification date of the site.
     */
    public $ModifiedOn;

    /**
     * @var string The site status. Values:
u200c<li>`active`: The name server is switched to EdgeOne.</li>
u200c<li>`pending`: The name server is not switched.</li>
u200c<li>`moved`: The name server is changed to other service providers.</li>
u200c<li>`deactivated`: The site is blocked.</li>
<li>`initializing`: The site is not bound with any plan. </li>
     */
    public $Status;

    /**
     * @var string CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
     */
    public $CnameStatus;

    /**
     * @var string Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
     */
    public $ActiveStatus;

    /**
     * @var string Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
     */
    public $LockStatus;

    /**
     * @var boolean Whether the site is disabled.
     */
    public $Paused;

    /**
     * @var integer Specifies whether it is a fake site (this field is a historic reserved field and is no longer maintained, refer to the website type for the corresponding field). valid values:.
<Li>0: non-fake site.</li>.
<Li>1: fake site.</li>.

     */
    public $IsFake;

    /**
     * @var string Whether to enable CNAME acceleration (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field). valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
     */
    public $CnameSpeedUp;

    /**
     * @var OwnershipVerification Ownership verification information. (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field.).
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $OwnershipVerification;

    /**
     * @var array Lists the currently used NS of the site. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field based on the website type.).
     */
    public $OriginalNameServers;

    /**
     * @var array Lists of NS assigned by tencent cloud. (this field is a historic reserved field and no longer maintained. refer to the website type for the corresponding field.).
     */
    public $NameServers;

    /**
     * @var VanityNameServers Specifies user-customized NS information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $VanityNameServers;

    /**
     * @var array User-Customized NS IP information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $VanityNameServersIps;

    /**
     * @var array Version management configuration group working mode. site configuration modules can enable "version management mode" or "immediate effect mode" by configuration group dimension. for details, see [version management](https://www.tencentcloud.comom/document/product/1552/113690?from_cn_redirect=1).
     */
    public $WorkModeInfos;

    /**
     * @param string $ZoneId Site ID.
     * @param string $ZoneName The site name.
     * @param string $AliasZoneName Identical site identifier. specifies a composite of numbers, english letters, ".", "-", and "_" with a character limit of 200.
     * @param string $Area Site acceleration region. valid values:.
<Li>Global: global availability zone.</li>.
<Li>Mainland: chinese mainland availability zone.</li>.
<li>overseas: global availability zone (excluding the chinese mainland).</li>.
     * @param string $Type Site access type. valid values:.
<li>full: NS access type;</li>.
<li>partial: CNAME access type;</li>.
<li>noDomainAccess: domainless access type.</li>.
<li>dnsPodAccess: DNSPod managed type. this type requires your domain name to be hosted on tencent cloud DNSPod.</li>.
<li> pages: pages data type;</li>.
<li>ai: edge reasoning access type.</li>.
     * @param array $Tags Specifies the Tag associated with the site.
     * @param array $Resources The list of billable resources.
     * @param NSDetail $NSDetail NS site detail. returned only when Type = full.
     * @param CNAMEDetail $CNAMEDetail CNAME site detail. returned only when Type = partial.
     * @param DNSPodDetail $DNSPodDetail DNSPod managed Type site detail. returned only when Type = dnsPodAccess.
     * @param string $CreatedOn The creation time of the site.
     * @param string $ModifiedOn The modification date of the site.
     * @param string $Status The site status. Values:
u200c<li>`active`: The name server is switched to EdgeOne.</li>
u200c<li>`pending`: The name server is not switched.</li>
u200c<li>`moved`: The name server is changed to other service providers.</li>
u200c<li>`deactivated`: The site is blocked.</li>
<li>`initializing`: The site is not bound with any plan. </li>
     * @param string $CnameStatus CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
     * @param string $ActiveStatus Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
     * @param string $LockStatus Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
     * @param boolean $Paused Whether the site is disabled.
     * @param integer $IsFake Specifies whether it is a fake site (this field is a historic reserved field and is no longer maintained, refer to the website type for the corresponding field). valid values:.
<Li>0: non-fake site.</li>.
<Li>1: fake site.</li>.

     * @param string $CnameSpeedUp Whether to enable CNAME acceleration (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field). valid values:.
<Li>Enabled: specifies whether the feature is enabled.</li>.
<li>disabled: specifies that the feature is turned off.</li>.
     * @param OwnershipVerification $OwnershipVerification Ownership verification information. (this field is a historic reserved field and is no longer maintained. refer to the website type for the corresponding field.).
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param array $OriginalNameServers Lists the currently used NS of the site. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field based on the website type.).
     * @param array $NameServers Lists of NS assigned by tencent cloud. (this field is a historic reserved field and no longer maintained. refer to the website type for the corresponding field.).
     * @param VanityNameServers $VanityNameServers Specifies user-customized NS information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param array $VanityNameServersIps User-Customized NS IP information. (this field is a historic reserved field and is no longer maintained. refer to the corresponding field according to the website type.).
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param array $WorkModeInfos Version management configuration group working mode. site configuration modules can enable "version management mode" or "immediate effect mode" by configuration group dimension. for details, see [version management](https://www.tencentcloud.comom/document/product/1552/113690?from_cn_redirect=1).
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
