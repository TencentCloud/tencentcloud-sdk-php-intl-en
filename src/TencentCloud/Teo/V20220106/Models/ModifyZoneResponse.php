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
 * ModifyZone response structure.
 *
 * @method string getId() Obtain Site ID
 * @method void setId(string $Id) Set Site ID
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method array getOriginalNameServers() Obtain Name server used by the site
 * @method void setOriginalNameServers(array $OriginalNameServers) Set Name server used by the site
 * @method string getStatus() Obtain Site status.
- `pending`: The name server is not connected.
- `active`: The name server is connected.
- `moved`: The name server is moved.
 * @method void setStatus(string $Status) Set Site status.
- `pending`: The name server is not connected.
- `active`: The name server is connected.
- `moved`: The name server is moved.
 * @method string getType() Obtain Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
 * @method void setType(string $Type) Set Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
 * @method array getNameServers() Obtain List of name servers assigned by Tencent Cloud
 * @method void setNameServers(array $NameServers) Set List of name servers assigned by Tencent Cloud
 * @method string getCreatedOn() Obtain Creation time
 * @method void setCreatedOn(string $CreatedOn) Set Creation time
 * @method string getModifiedOn() Obtain Modification time
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time
 * @method string getCnameStatus() Obtain CNAME access status.
- `finished`: Ownership of the site is verified.
- `pending`: Verifying the ownership of the site.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCnameStatus(string $CnameStatus) Set CNAME access status.
- `finished`: Ownership of the site is verified.
- `pending`: Verifying the ownership of the site.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyZoneResponse extends AbstractModel
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
     * @var array Name server used by the site
     */
    public $OriginalNameServers;

    /**
     * @var string Site status.
- `pending`: The name server is not connected.
- `active`: The name server is connected.
- `moved`: The name server is moved.
     */
    public $Status;

    /**
     * @var string Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
     */
    public $Type;

    /**
     * @var array List of name servers assigned by Tencent Cloud
     */
    public $NameServers;

    /**
     * @var string Creation time
     */
    public $CreatedOn;

    /**
     * @var string Modification time
     */
    public $ModifiedOn;

    /**
     * @var string CNAME access status.
- `finished`: Ownership of the site is verified.
- `pending`: Verifying the ownership of the site.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CnameStatus;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Id Site ID
     * @param string $Name Site name
     * @param array $OriginalNameServers Name server used by the site
     * @param string $Status Site status.
- `pending`: The name server is not connected.
- `active`: The name server is connected.
- `moved`: The name server is moved.
     * @param string $Type Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
     * @param array $NameServers List of name servers assigned by Tencent Cloud
     * @param string $CreatedOn Creation time
     * @param string $ModifiedOn Modification time
     * @param string $CnameStatus CNAME access status.
- `finished`: Ownership of the site is verified.
- `pending`: Verifying the ownership of the site.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("CnameStatus",$param) and $param["CnameStatus"] !== null) {
            $this->CnameStatus = $param["CnameStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
