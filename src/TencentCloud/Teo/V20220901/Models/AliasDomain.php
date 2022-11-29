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
 * Information of the alias domain name
 *
 * @method string getAliasName() Obtain The alias domain name.
 * @method void setAliasName(string $AliasName) Set The alias domain name.
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getTargetName() Obtain The target domain name.
 * @method void setTargetName(string $TargetName) Set The target domain name.
 * @method string getStatus() Obtain Status of the alias domain name. Values:
<li>`active`: Activated</li>
<li>`pending`: Deploying</li>
<li>`conflict`: Reclaimed</li>
<li>`stop`: Stopped</li>
 * @method void setStatus(string $Status) Set Status of the alias domain name. Values:
<li>`active`: Activated</li>
<li>`pending`: Deploying</li>
<li>`conflict`: Reclaimed</li>
<li>`stop`: Stopped</li>
 * @method integer getForbidMode() Obtain The blocking mode. Values:
<li>`0`: Not blocked</li>
<li>`11`: Blocked due to regulatory compliance</li>
<li>`14`: Blocked due to ICP filing not obtained</li>
 * @method void setForbidMode(integer $ForbidMode) Set The blocking mode. Values:
<li>`0`: Not blocked</li>
<li>`11`: Blocked due to regulatory compliance</li>
<li>`14`: Blocked due to ICP filing not obtained</li>
 * @method string getCreatedOn() Obtain Creation time of the alias domain name.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time of the alias domain name.
 * @method string getModifiedOn() Obtain Modification time of the alias domain name.
 * @method void setModifiedOn(string $ModifiedOn) Set Modification time of the alias domain name.
 */
class AliasDomain extends AbstractModel
{
    /**
     * @var string The alias domain name.
     */
    public $AliasName;

    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The target domain name.
     */
    public $TargetName;

    /**
     * @var string Status of the alias domain name. Values:
<li>`active`: Activated</li>
<li>`pending`: Deploying</li>
<li>`conflict`: Reclaimed</li>
<li>`stop`: Stopped</li>
     */
    public $Status;

    /**
     * @var integer The blocking mode. Values:
<li>`0`: Not blocked</li>
<li>`11`: Blocked due to regulatory compliance</li>
<li>`14`: Blocked due to ICP filing not obtained</li>
     */
    public $ForbidMode;

    /**
     * @var string Creation time of the alias domain name.
     */
    public $CreatedOn;

    /**
     * @var string Modification time of the alias domain name.
     */
    public $ModifiedOn;

    /**
     * @param string $AliasName The alias domain name.
     * @param string $ZoneId The site ID.
     * @param string $TargetName The target domain name.
     * @param string $Status Status of the alias domain name. Values:
<li>`active`: Activated</li>
<li>`pending`: Deploying</li>
<li>`conflict`: Reclaimed</li>
<li>`stop`: Stopped</li>
     * @param integer $ForbidMode The blocking mode. Values:
<li>`0`: Not blocked</li>
<li>`11`: Blocked due to regulatory compliance</li>
<li>`14`: Blocked due to ICP filing not obtained</li>
     * @param string $CreatedOn Creation time of the alias domain name.
     * @param string $ModifiedOn Modification time of the alias domain name.
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
