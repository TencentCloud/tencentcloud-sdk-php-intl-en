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
 * CreateDnsRecord response structure.
 *
 * @method string getId() Obtain Record ID
 * @method void setId(string $Id) Set Record ID
 * @method string getType() Obtain Record type
 * @method void setType(string $Type) Set Record type
 * @method string getName() Obtain Record name
 * @method void setName(string $Name) Set Record name
 * @method string getContent() Obtain Record content
 * @method void setContent(string $Content) Set Record content
 * @method integer getTtl() Obtain 
 * @method void setTtl(integer $Ttl) Set 
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 * @method string getMode() Obtain Proxy mode
 * @method void setMode(string $Mode) Set Proxy mode
 * @method string getStatus() Obtain Resolution status. Valid values:
`active`: Activated
`pending`: Not activated
 * @method void setStatus(string $Status) Set Resolution status. Valid values:
`active`: Activated
`pending`: Not activated
 * @method boolean getLocked() Obtain Whether the DNS record is locked
 * @method void setLocked(boolean $Locked) Set Whether the DNS record is locked
 * @method string getCreatedOn() Obtain Creation time
 * @method void setCreatedOn(string $CreatedOn) Set Creation time
 * @method string getModifiedOn() Obtain Modification time
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getZoneName() Obtain Site name
 * @method void setZoneName(string $ZoneName) Set Site name
 * @method string getCname() Obtain CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCname(string $Cname) Set CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateDnsRecordResponse extends AbstractModel
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
     * @var string Record name
     */
    public $Name;

    /**
     * @var string Record content
     */
    public $Content;

    /**
     * @var integer 
     */
    public $Ttl;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @var string Proxy mode
     */
    public $Mode;

    /**
     * @var string Resolution status. Valid values:
`active`: Activated
`pending`: Not activated
     */
    public $Status;

    /**
     * @var boolean Whether the DNS record is locked
     */
    public $Locked;

    /**
     * @var string Creation time
     */
    public $CreatedOn;

    /**
     * @var string Modification time
     */
    public $ModifiedOn;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Site name
     */
    public $ZoneName;

    /**
     * @var string CNAME address
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Cname;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Id Record ID
     * @param string $Type Record type
     * @param string $Name Record name
     * @param string $Content Record content
     * @param integer $Ttl 
     * @param integer $Priority Priority
     * @param string $Mode Proxy mode
     * @param string $Status Resolution status. Valid values:
`active`: Activated
`pending`: Not activated
     * @param boolean $Locked Whether the DNS record is locked
     * @param string $CreatedOn Creation time
     * @param string $ModifiedOn Modification time
     * @param string $ZoneId Site ID
     * @param string $ZoneName Site name
     * @param string $Cname CNAME address
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
