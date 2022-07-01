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
 * CreateZone response structure.
 *
 * @method string getId() Obtain Site ID
 * @method void setId(string $Id) Set Site ID
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method string getType() Obtain Specifies how the site is connected to EdgeOne.
 * @method void setType(string $Type) Set Specifies how the site is connected to EdgeOne.
 * @method string getStatus() Obtain Site status
- `pending`: The name server is not switched.
- `active`: The name server is switched to another assigned.
- `moved`: Move the NS out of Tencent Cloud
 * @method void setStatus(string $Status) Set Site status
- `pending`: The name server is not switched.
- `active`: The name server is switched to another assigned.
- `moved`: Move the NS out of Tencent Cloud
 * @method array getOriginalNameServers() Obtain List of name servers
 * @method void setOriginalNameServers(array $OriginalNameServers) Set List of name servers
 * @method array getNameServers() Obtain List of name servers assigned to users
 * @method void setNameServers(array $NameServers) Set List of name servers assigned to users
 * @method string getCreatedOn() Obtain Site creation date
 * @method void setCreatedOn(string $CreatedOn) Set Site creation date
 * @method string getModifiedOn() Obtain Site update time
 * @method void setModifiedOn(string $ModifiedOn) Set Site update time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateZoneResponse extends AbstractModel
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
     * @var string Specifies how the site is connected to EdgeOne.
     */
    public $Type;

    /**
     * @var string Site status
- `pending`: The name server is not switched.
- `active`: The name server is switched to another assigned.
- `moved`: Move the NS out of Tencent Cloud
     */
    public $Status;

    /**
     * @var array List of name servers
     */
    public $OriginalNameServers;

    /**
     * @var array List of name servers assigned to users
     */
    public $NameServers;

    /**
     * @var string Site creation date
     */
    public $CreatedOn;

    /**
     * @var string Site update time
     */
    public $ModifiedOn;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Id Site ID
     * @param string $Name Site name
     * @param string $Type Specifies how the site is connected to EdgeOne.
     * @param string $Status Site status
- `pending`: The name server is not switched.
- `active`: The name server is switched to another assigned.
- `moved`: Move the NS out of Tencent Cloud
     * @param array $OriginalNameServers List of name servers
     * @param array $NameServers List of name servers assigned to users
     * @param string $CreatedOn Site creation date
     * @param string $ModifiedOn Site update time
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
