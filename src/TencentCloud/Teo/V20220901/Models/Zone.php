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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Site information
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method array getOriginalNameServers() Obtain List of name servers used by the site
 * @method void setOriginalNameServers(array $OriginalNameServers) Set List of name servers used by the site
 * @method array getNameServers() Obtain The list of name servers assigned by Tencent Cloud.
 * @method void setNameServers(array $NameServers) Set The list of name servers assigned by Tencent Cloud.
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
 * @method string getType() Obtain Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access;</li>
<li>noDomainAccess: access with no domain name.</li>
 * @method void setType(string $Type) Set Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access;</li>
<li>noDomainAccess: access with no domain name.</li>
 * @method boolean getPaused() Obtain Whether the site is disabled.
 * @method void setPaused(boolean $Paused) Set Whether the site is disabled.
 * @method string getCnameSpeedUp() Obtain Whether CNAME acceleration is enabled. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
 * @method void setCnameSpeedUp(string $CnameSpeedUp) Set Whether CNAME acceleration is enabled. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
 * @method string getCnameStatus() Obtain CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
 * @method void setCnameStatus(string $CnameStatus) Set CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
 * @method array getTags() Obtain The list of resource tags.
 * @method void setTags(array $Tags) Set The list of resource tags.
 * @method array getResources() Obtain The list of billable resources.
 * @method void setResources(array $Resources) Set The list of billable resources.
 * @method string getCreatedOn() Obtain The creation time of the site.
 * @method void setCreatedOn(string $CreatedOn) Set The creation time of the site.
 * @method string getModifiedOn() Obtain The modification date of the site.
 * @method void setModifiedOn(string $ModifiedOn) Set The modification date of the site.
 * @method string getArea() Obtain The site access region. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
 * @method void setArea(string $Area) Set The site access region. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
 * @method VanityNameServers getVanityNameServers() Obtain The custom name server information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set The custom name server information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVanityNameServersIps() Obtain The custom name server IP information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVanityNameServersIps(array $VanityNameServersIps) Set The custom name server IP information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActiveStatus() Obtain Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
 * @method void setActiveStatus(string $ActiveStatus) Set Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
 * @method string getAliasZoneName() Obtain The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAliasZoneName(string $AliasZoneName) Set The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsFake() Obtain Whether it’s a fake site. Valid values: 
<li>`0`: Non-fake site;</li>
<li>`1`: Fake site.</li>
 * @method void setIsFake(integer $IsFake) Set Whether it’s a fake site. Valid values: 
<li>`0`: Non-fake site;</li>
<li>`1`: Fake site.</li>
 * @method string getLockStatus() Obtain Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
 * @method void setLockStatus(string $LockStatus) Set Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
 * @method OwnershipVerification getOwnershipVerification() Obtain Ownership verification information
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setOwnershipVerification(OwnershipVerification $OwnershipVerification) Set Ownership verification information
Note: This field may return·null, indicating that no valid values can be obtained.
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
     * @var array List of name servers used by the site
     */
    public $OriginalNameServers;

    /**
     * @var array The list of name servers assigned by Tencent Cloud.
     */
    public $NameServers;

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
     * @var string Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access;</li>
<li>noDomainAccess: access with no domain name.</li>
     */
    public $Type;

    /**
     * @var boolean Whether the site is disabled.
     */
    public $Paused;

    /**
     * @var string Whether CNAME acceleration is enabled. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
     */
    public $CnameSpeedUp;

    /**
     * @var string CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
     */
    public $CnameStatus;

    /**
     * @var array The list of resource tags.
     */
    public $Tags;

    /**
     * @var array The list of billable resources.
     */
    public $Resources;

    /**
     * @var string The creation time of the site.
     */
    public $CreatedOn;

    /**
     * @var string The modification date of the site.
     */
    public $ModifiedOn;

    /**
     * @var string The site access region. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
     */
    public $Area;

    /**
     * @var VanityNameServers The custom name server information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VanityNameServers;

    /**
     * @var array The custom name server IP information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VanityNameServersIps;

    /**
     * @var string Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
     */
    public $ActiveStatus;

    /**
     * @var string The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AliasZoneName;

    /**
     * @var integer Whether it’s a fake site. Valid values: 
<li>`0`: Non-fake site;</li>
<li>`1`: Fake site.</li>
     */
    public $IsFake;

    /**
     * @var string Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
     */
    public $LockStatus;

    /**
     * @var OwnershipVerification Ownership verification information
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $OwnershipVerification;

    /**
     * @param string $ZoneId Site ID.
     * @param string $ZoneName The site name.
     * @param array $OriginalNameServers List of name servers used by the site
     * @param array $NameServers The list of name servers assigned by Tencent Cloud.
     * @param string $Status The site status. Values:
u200c<li>`active`: The name server is switched to EdgeOne.</li>
u200c<li>`pending`: The name server is not switched.</li>
u200c<li>`moved`: The name server is changed to other service providers.</li>
u200c<li>`deactivated`: The site is blocked.</li>
<li>`initializing`: The site is not bound with any plan. </li>
     * @param string $Type Site access method. Valid values:
<li>full: NS access;</li>
<li>partial: CNAME access;</li>
<li>noDomainAccess: access with no domain name.</li>
     * @param boolean $Paused Whether the site is disabled.
     * @param string $CnameSpeedUp Whether CNAME acceleration is enabled. Values:
<li>`enabled`: Enabled</li>
<li>`disabled`: Disabled</li>
     * @param string $CnameStatus CNAME record access status. Values:
<li>`finished`: The site is verified.</li>
<li>`pending`: The site is being verified.</li>
     * @param array $Tags The list of resource tags.
     * @param array $Resources The list of billable resources.
     * @param string $CreatedOn The creation time of the site.
     * @param string $ModifiedOn The modification date of the site.
     * @param string $Area The site access region. Values:
<li>`global`: Global.</li>
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Outside the Chinese mainland.</li>
     * @param VanityNameServers $VanityNameServers The custom name server information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VanityNameServersIps The custom name server IP information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActiveStatus Status of the proxy. Values:
<li>`active`: Enabled</li>
<li>`inactive`: Not activated</li>
<li>`paused`: Disabled</li>
     * @param string $AliasZoneName The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsFake Whether it’s a fake site. Valid values: 
<li>`0`: Non-fake site;</li>
<li>`1`: Fake site.</li>
     * @param string $LockStatus Lock status. Values: <li>`enable`: Normal. Modification is allowed.</li><li>`disable`: Locked. Modification is not allowed.</li><li>`plan_migrate`: Adjusting the plan. Modification is not allowed.</li> 
     * @param OwnershipVerification $OwnershipVerification Ownership verification information
Note: This field may return·null, indicating that no valid values can be obtained.
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

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }

        if (array_key_exists("CnameSpeedUp",$param) and $param["CnameSpeedUp"] !== null) {
            $this->CnameSpeedUp = $param["CnameSpeedUp"];
        }

        if (array_key_exists("CnameStatus",$param) and $param["CnameStatus"] !== null) {
            $this->CnameStatus = $param["CnameStatus"];
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

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
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

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }

        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }

        if (array_key_exists("LockStatus",$param) and $param["LockStatus"] !== null) {
            $this->LockStatus = $param["LockStatus"];
        }

        if (array_key_exists("OwnershipVerification",$param) and $param["OwnershipVerification"] !== null) {
            $this->OwnershipVerification = new OwnershipVerification();
            $this->OwnershipVerification->deserialize($param["OwnershipVerification"]);
        }
    }
}
