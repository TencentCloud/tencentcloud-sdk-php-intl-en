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
 * Alias domain information.
 *
 * @method string getAliasName() Obtain Alias domain name.
 * @method void setAliasName(string $AliasName) Set Alias domain name.
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getTargetName() Obtain Target domain name.
 * @method void setTargetName(string $TargetName) Set Target domain name.
 * @method string getStatus() Obtain Status of the alias domain name. Valid values:
<li> active: effective; </li>
<li> pending: deploying.</li>
<li> conflict: Retrieved. </li>
<li> stop: deactivated;</li>
 * @method void setStatus(string $Status) Set Status of the alias domain name. Valid values:
<li> active: effective; </li>
<li> pending: deploying.</li>
<li> conflict: Retrieved. </li>
<li> stop: deactivated;</li>
 * @method integer getForbidMode() Obtain Blocking mode. Valid values:
<li>`0`: not blocked;</li>
<li> 11: Block due to regulatory compliance;</li>
<li> 14: Banned for non-filing.</li>
 * @method void setForbidMode(integer $ForbidMode) Set Blocking mode. Valid values:
<li>`0`: not blocked;</li>
<li> 11: Block due to regulatory compliance;</li>
<li> 14: Banned for non-filing.</li>
 * @method string getCreatedOn() Obtain Alias domain creation time.
 * @method void setCreatedOn(string $CreatedOn) Set Alias domain creation time.
 * @method string getModifiedOn() Obtain Alias domain name modification time.
 * @method void setModifiedOn(string $ModifiedOn) Set Alias domain name modification time.
 */
class AliasDomain extends AbstractModel
{
    /**
     * @var string Alias domain name.
     */
    public $AliasName;

    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Target domain name.
     */
    public $TargetName;

    /**
     * @var string Status of the alias domain name. Valid values:
<li> active: effective; </li>
<li> pending: deploying.</li>
<li> conflict: Retrieved. </li>
<li> stop: deactivated;</li>
     */
    public $Status;

    /**
     * @var integer Blocking mode. Valid values:
<li>`0`: not blocked;</li>
<li> 11: Block due to regulatory compliance;</li>
<li> 14: Banned for non-filing.</li>
     */
    public $ForbidMode;

    /**
     * @var string Alias domain creation time.
     */
    public $CreatedOn;

    /**
     * @var string Alias domain name modification time.
     */
    public $ModifiedOn;

    /**
     * @param string $AliasName Alias domain name.
     * @param string $ZoneId Zone ID.
     * @param string $TargetName Target domain name.
     * @param string $Status Status of the alias domain name. Valid values:
<li> active: effective; </li>
<li> pending: deploying.</li>
<li> conflict: Retrieved. </li>
<li> stop: deactivated;</li>
     * @param integer $ForbidMode Blocking mode. Valid values:
<li>`0`: not blocked;</li>
<li> 11: Block due to regulatory compliance;</li>
<li> 14: Banned for non-filing.</li>
     * @param string $CreatedOn Alias domain creation time.
     * @param string $ModifiedOn Alias domain name modification time.
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
        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ForbidMode",$param) and $param["ForbidMode"] !== null) {
            $this->ForbidMode = $param["ForbidMode"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
