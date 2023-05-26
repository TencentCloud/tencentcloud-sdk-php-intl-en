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
 * Accelerated domain name
 *
 * @method OriginDetail getOriginDetail() Obtain Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginDetail(OriginDetail $OriginDetail) Set Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedOn() Obtain Creation time of the accelerated domain name.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time of the accelerated domain name.
 * @method string getDomainName() Obtain Accelerated domain name
 * @method void setDomainName(string $DomainName) Set Accelerated domain name
 * @method string getModifiedOn() Obtain Modification time of the accelerated domain name.
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time of the accelerated domain name.
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getDomainStatus() Obtain Status of the accelerated domain name. Values:
<li>`online`: Activated</li>
<li>`process`: Being deployed</li>
<li>`offline`: Disabled</li>
<li>`forbidden`: Blocked</li>
<li>`init`: Pending activation</li>
 * @method void setDomainStatus(string $DomainStatus) Set Status of the accelerated domain name. Values:
<li>`online`: Activated</li>
<li>`process`: Being deployed</li>
<li>`offline`: Disabled</li>
<li>`forbidden`: Blocked</li>
<li>`init`: Pending activation</li>
 * @method string getCname() Obtain The CNAME address.
 * @method void setCname(string $Cname) Set The CNAME address.
 * @method string getIdentificationStatus() Obtain Ownership verification status. Values: <li>`pending`: Pending verification</li> <li>`finished`: Verified</li>	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIdentificationStatus(string $IdentificationStatus) Set Ownership verification status. Values: <li>`pending`: Pending verification</li> <li>`finished`: Verified</li>	
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AccelerationDomain extends AbstractModel
{
    /**
     * @var OriginDetail Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginDetail;

    /**
     * @var string Creation time of the accelerated domain name.
     */
    public $CreatedOn;

    /**
     * @var string Accelerated domain name
     */
    public $DomainName;

    /**
     * @var string Modification time of the accelerated domain name.
     */
    public $ModifiedOn;

    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Status of the accelerated domain name. Values:
<li>`online`: Activated</li>
<li>`process`: Being deployed</li>
<li>`offline`: Disabled</li>
<li>`forbidden`: Blocked</li>
<li>`init`: Pending activation</li>
     */
    public $DomainStatus;

    /**
     * @var string The CNAME address.
     */
    public $Cname;

    /**
     * @var string Ownership verification status. Values: <li>`pending`: Pending verification</li> <li>`finished`: Verified</li>	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IdentificationStatus;

    /**
     * @param OriginDetail $OriginDetail Details of the origin.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedOn Creation time of the accelerated domain name.
     * @param string $DomainName Accelerated domain name
     * @param string $ModifiedOn Modification time of the accelerated domain name.
     * @param string $ZoneId ID of the site.
     * @param string $DomainStatus Status of the accelerated domain name. Values:
<li>`online`: Activated</li>
<li>`process`: Being deployed</li>
<li>`offline`: Disabled</li>
<li>`forbidden`: Blocked</li>
<li>`init`: Pending activation</li>
     * @param string $Cname The CNAME address.
     * @param string $IdentificationStatus Ownership verification status. Values: <li>`pending`: Pending verification</li> <li>`finished`: Verified</li>	
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
        if (array_key_exists("OriginDetail",$param) and $param["OriginDetail"] !== null) {
            $this->OriginDetail = new OriginDetail();
            $this->OriginDetail->deserialize($param["OriginDetail"]);
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            $this->DomainStatus = $param["DomainStatus"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IdentificationStatus",$param) and $param["IdentificationStatus"] !== null) {
            $this->IdentificationStatus = $param["IdentificationStatus"];
        }
    }
}
