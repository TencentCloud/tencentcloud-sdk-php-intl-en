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
 * ModifyDnssec response structure.
 *
 * @method string getId() Obtain Site ID
 * @method void setId(string $Id) Set Site ID
 * @method string getName() Obtain Site name
 * @method void setName(string $Name) Set Site name
 * @method string getStatus() Obtain DNSSEC status.
- `enabled`: Enabled
- `disabled`: Disabled
 * @method void setStatus(string $Status) Set DNSSEC status.
- `enabled`: Enabled
- `disabled`: Disabled
 * @method DnssecInfo getDnssec() Obtain DNSSEC information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDnssec(DnssecInfo $Dnssec) Set DNSSEC information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getModifiedOn() Obtain Modification time
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyDnssecResponse extends AbstractModel
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
     * @var string DNSSEC status.
- `enabled`: Enabled
- `disabled`: Disabled
     */
    public $Status;

    /**
     * @var DnssecInfo DNSSEC information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Dnssec;

    /**
     * @var string Modification time
     */
    public $ModifiedOn;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Id Site ID
     * @param string $Name Site name
     * @param string $Status DNSSEC status.
- `enabled`: Enabled
- `disabled`: Disabled
     * @param DnssecInfo $Dnssec DNSSEC information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ModifiedOn Modification time
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Dnssec",$param) and $param["Dnssec"] !== null) {
            $this->Dnssec = new DnssecInfo();
            $this->Dnssec->deserialize($param["Dnssec"]);
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
