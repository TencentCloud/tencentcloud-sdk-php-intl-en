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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reference abstract (for detail page display, corresponding to DB t_skill_reference)
 *
 * @method string getReferenceId() Obtain <p>Associated ID</p>
 * @method void setReferenceId(string $ReferenceId) Set <p>Associated ID</p>
 * @method string getReferenceName() Obtain <p>Association name</p>
 * @method void setReferenceName(string $ReferenceName) Set <p>Association name</p>
 * @method integer getReferenceType() Obtain <p>Association type</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Placeholder |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
 * @method void setReferenceType(integer $ReferenceType) Set <p>Association type</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Placeholder |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
 * @method string getSpaceId() Obtain <p>Space ID</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID</p>
 * @method string getSpaceName() Obtain <p>Space name</p>
 * @method void setSpaceName(string $SpaceName) Set <p>Space name</p>
 * @method string getOwner() Obtain <p>Reference instance owner</p>
 * @method void setOwner(string $Owner) Set <p>Reference instance owner</p>
 * @method AppIdentity getAppIdentity() Obtain <p>Application identifier</p>
 * @method void setAppIdentity(AppIdentity $AppIdentity) Set <p>Application identifier</p>
 */
class SkillReferenceSummary extends AbstractModel
{
    /**
     * @var string <p>Associated ID</p>
     */
    public $ReferenceId;

    /**
     * @var string <p>Association name</p>
     */
    public $ReferenceName;

    /**
     * @var integer <p>Association type</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Placeholder |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
     */
    public $ReferenceType;

    /**
     * @var string <p>Space ID</p>
     */
    public $SpaceId;

    /**
     * @var string <p>Space name</p>
     */
    public $SpaceName;

    /**
     * @var string <p>Reference instance owner</p>
     */
    public $Owner;

    /**
     * @var AppIdentity <p>Application identifier</p>
     */
    public $AppIdentity;

    /**
     * @param string $ReferenceId <p>Associated ID</p>
     * @param string $ReferenceName <p>Association name</p>
     * @param integer $ReferenceType <p>Association type</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Placeholder |<br>| 1 | ClawPro |<br>| 2 | agent |</p>
     * @param string $SpaceId <p>Space ID</p>
     * @param string $SpaceName <p>Space name</p>
     * @param string $Owner <p>Reference instance owner</p>
     * @param AppIdentity $AppIdentity <p>Application identifier</p>
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
        if (array_key_exists("ReferenceId",$param) and $param["ReferenceId"] !== null) {
            $this->ReferenceId = $param["ReferenceId"];
        }

        if (array_key_exists("ReferenceName",$param) and $param["ReferenceName"] !== null) {
            $this->ReferenceName = $param["ReferenceName"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("AppIdentity",$param) and $param["AppIdentity"] !== null) {
            $this->AppIdentity = new AppIdentity();
            $this->AppIdentity->deserialize($param["AppIdentity"]);
        }
    }
}
