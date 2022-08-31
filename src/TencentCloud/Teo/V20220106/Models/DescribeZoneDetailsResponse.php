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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneDetails response structure.
 *
 * @method string getId() Obtain Site ID
 * @method void setId(string $Id) Set Site ID
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method array getOriginalNameServers() Obtain List of name servers used
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginalNameServers(array $OriginalNameServers) Set List of name servers used
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getNameServers() Obtain List of name servers assigned to users by Tencent Cloud
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNameServers(array $NameServers) Set List of name servers assigned to users by Tencent Cloud
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Site status
- `active`: The name server is switched.
- `pending`: The name server is not switched.
- `moved`: The name server is moved.
- `deactivated`: The name server is blocked.
 * @method void setStatus(string $Status) Set Site status
- `active`: The name server is switched.
- `pending`: The name server is not switched.
- `moved`: The name server is moved.
- `deactivated`: The name server is blocked.
 * @method string getType() Obtain Specifies how the site is connected to EdgeOne.
- `full`: The site is connected via name server.
- `partial`: The site is connected via CNAME.
 * @method void setType(string $Type) Set Specifies how the site is connected to EdgeOne.
- `full`: The site is connected via name server.
- `partial`: The site is connected via CNAME.
 * @method boolean getPaused() Obtain Indicates whether the site is disabled
 * @method void setPaused(boolean $Paused) Set Indicates whether the site is disabled
 * @method string getCnameSpeedUp() Obtain Specifies whether to enable CNAME acceleration
- `enabled`: Enable
- `disabled`: Disable
 * @method void setCnameSpeedUp(string $CnameSpeedUp) Set Specifies whether to enable CNAME acceleration
- `enabled`: Enable
- `disabled`: Disable
 * @method string getCnameStatus() Obtain Ownership verification status of the site when it accesses via CNAME.
- `finished`: The site is verified.
- `pending`: The site is waiting for verification.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCnameStatus(string $CnameStatus) Set Ownership verification status of the site when it accesses via CNAME.
- `finished`: The site is verified.
- `pending`: The site is waiting for verification.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getTags() Obtain Resource tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Resource tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getArea() Obtain 
 * @method void setArea(string $Area) Set 
 * @method array getResources() Obtain Billable resource
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResources(array $Resources) Set Billable resource
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifiedOn() Obtain Site modification date
 * @method void setModifiedOn(string $ModifiedOn) Set Site modification date
 * @method string getCreatedOn() Obtain Site creation date
 * @method void setCreatedOn(string $CreatedOn) Set Site creation date
 * @method VanityNameServers getVanityNameServers() Obtain User-defined name server information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set User-defined name server information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getVanityNameServersIps() Obtain User-defined name server IP information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setVanityNameServersIps(array $VanityNameServersIps) Set User-defined name server IP information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeZoneDetailsResponse extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $Id;

    /**
     * @var string Site name
     */
    public $Name;

    /**
     * @var array List of name servers used
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginalNameServers;

    /**
     * @var array List of name servers assigned to users by Tencent Cloud
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $NameServers;

    /**
     * @var string Site status
- `active`: The name server is switched.
- `pending`: The name server is not switched.
- `moved`: The name server is moved.
- `deactivated`: The name server is blocked.
     */
    public $Status;

    /**
     * @var string Specifies how the site is connected to EdgeOne.
- `full`: The site is connected via name server.
- `partial`: The site is connected via CNAME.
     */
    public $Type;

    /**
     * @var boolean Indicates whether the site is disabled
     */
    public $Paused;

    /**
     * @var string Specifies whether to enable CNAME acceleration
- `enabled`: Enable
- `disabled`: Disable
     */
    public $CnameSpeedUp;

    /**
     * @var string Ownership verification status of the site when it accesses via CNAME.
- `finished`: The site is verified.
- `pending`: The site is waiting for verification.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CnameStatus;

    /**
     * @var array Resource tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string 
     */
    public $Area;

    /**
     * @var array Billable resource
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resources;

    /**
     * @var string Site modification date
     */
    public $ModifiedOn;

    /**
     * @var string Site creation date
     */
    public $CreatedOn;

    /**
     * @var VanityNameServers User-defined name server information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $VanityNameServers;

    /**
     * @var array User-defined name server IP information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $VanityNameServersIps;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Id Site ID
     * @param string $Name Site name
     * @param array $OriginalNameServers List of name servers used
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $NameServers List of name servers assigned to users by Tencent Cloud
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Status Site status
- `active`: The name server is switched.
- `pending`: The name server is not switched.
- `moved`: The name server is moved.
- `deactivated`: The name server is blocked.
     * @param string $Type Specifies how the site is connected to EdgeOne.
- `full`: The site is connected via name server.
- `partial`: The site is connected via CNAME.
     * @param boolean $Paused Indicates whether the site is disabled
     * @param string $CnameSpeedUp Specifies whether to enable CNAME acceleration
- `enabled`: Enable
- `disabled`: Disable
     * @param string $CnameStatus Ownership verification status of the site when it accesses via CNAME.
- `finished`: The site is verified.
- `pending`: The site is waiting for verification.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $Tags Resource tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Area 
     * @param array $Resources Billable resource
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifiedOn Site modification date
     * @param string $CreatedOn Site creation date
     * @param VanityNameServers $VanityNameServers User-defined name server information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $VanityNameServersIps User-defined name server IP information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
