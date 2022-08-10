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
 * DNS record
 *
 * @method string getId() Obtain Record ID
 * @method void setId(string $Id) Set Record ID
 * @method string getType() Obtain Record type
 * @method void setType(string $Type) Set Record type
 * @method string getName() Obtain Host record
 * @method void setName(string $Name) Set Host record
 * @method string getContent() Obtain Record value
 * @method void setContent(string $Content) Set Record value
 * @method string getMode() Obtain Proxy mode
 * @method void setMode(string $Mode) Set Proxy mode
 * @method integer getTtl() Obtain TTL value
 * @method void setTtl(integer $Ttl) Set TTL value
 * @method integer getPriority() Obtain Priority
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPriority(integer $Priority) Set Priority
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCreatedOn() Obtain Creation time
 * @method void setCreatedOn(string $CreatedOn) Set Creation time
 * @method string getModifiedOn() Obtain Modification time
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time
 * @method boolean getLocked() Obtain Domain name lock
 * @method void setLocked(boolean $Locked) Set Domain name lock
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getZoneName() Obtain Site name
 * @method void setZoneName(string $ZoneName) Set Site name
 * @method string getStatus() Obtain Resolution status
`active`: Activated
`pending`: Not activated
 * @method void setStatus(string $Status) Set Resolution status
`active`: Activated
`pending`: Not activated
 * @method string getCname() Obtain CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCname(string $Cname) Set CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getDomainStatus() Obtain Which service is enabled for the domain name.
- `lb`: Load balancing
- `security`: Security acceleration
- `l4`: L4 proxy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDomainStatus(array $DomainStatus) Set Which service is enabled for the domain name.
- `lb`: Load balancing
- `security`: Security acceleration
- `l4`: L4 proxy
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DnsRecord extends AbstractModel
{
    /**
     * @var string Record ID
     */
    public $Id;

    /**
     * @var string Record type
     */
    public $Type;

    /**
     * @var string Host record
     */
    public $Name;

    /**
     * @var string Record value
     */
    public $Content;

    /**
     * @var string Proxy mode
     */
    public $Mode;

    /**
     * @var integer TTL value
     */
    public $Ttl;

    /**
     * @var integer Priority
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Priority;

    /**
     * @var string Creation time
     */
    public $CreatedOn;

    /**
     * @var string Modification time
     */
    public $ModifiedOn;

    /**
     * @var boolean Domain name lock
     */
    public $Locked;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Site name
     */
    public $ZoneName;

    /**
     * @var string Resolution status
`active`: Activated
`pending`: Not activated
     */
    public $Status;

    /**
     * @var string CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cname;

    /**
     * @var array Which service is enabled for the domain name.
- `lb`: Load balancing
- `security`: Security acceleration
- `l4`: L4 proxy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DomainStatus;

    /**
     * @param string $Id Record ID
     * @param string $Type Record type
     * @param string $Name Host record
     * @param string $Content Record value
     * @param string $Mode Proxy mode
     * @param integer $Ttl TTL value
     * @param integer $Priority Priority
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CreatedOn Creation time
     * @param string $ModifiedOn Modification time
     * @param boolean $Locked Domain name lock
     * @param string $ZoneId Site ID
     * @param string $ZoneName Site name
     * @param string $Status Resolution status
`active`: Activated
`pending`: Not activated
     * @param string $Cname CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $DomainStatus Which service is enabled for the domain name.
- `lb`: Load balancing
- `security`: Security acceleration
- `l4`: L4 proxy
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }
    }
}
