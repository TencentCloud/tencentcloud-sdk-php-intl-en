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
 * CreateZone request structure.
 *
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method string getType() Obtain The access mode. Values:
<li> `full`: Access through a name server.</li>
<li> `partial`: Access through a CNAME. Before using this access mode, first verify your site with the site verification API (IdentifyZone).<li>`noDomainAccess`: Access without using a domain name. If this value is passed, only the Tags field needs to be set. </li>
If not specified, this field uses the default value `full`.
 * @method void setType(string $Type) Set The access mode. Values:
<li> `full`: Access through a name server.</li>
<li> `partial`: Access through a CNAME. Before using this access mode, first verify your site with the site verification API (IdentifyZone).<li>`noDomainAccess`: Access without using a domain name. If this value is passed, only the Tags field needs to be set. </li>
If not specified, this field uses the default value `full`.
 * @method boolean getJumpStart() Obtain Whether to skip scanning the existing DNS records of the site. Default value: false.
 * @method void setJumpStart(boolean $JumpStart) Set Whether to skip scanning the existing DNS records of the site. Default value: false.
 * @method array getTags() Obtain The resource tag.
 * @method void setTags(array $Tags) Set The resource tag.
 * @method boolean getAllowDuplicates() Obtain Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
 * @method void setAllowDuplicates(boolean $AllowDuplicates) Set Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
 * @method string getAliasZoneName() Obtain The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
 * @method void setAliasZoneName(string $AliasZoneName) Set The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
 */
class CreateZoneRequest extends AbstractModel
{
    /**
     * @var string The site name.
     */
    public $ZoneName;

    /**
     * @var string The access mode. Values:
<li> `full`: Access through a name server.</li>
<li> `partial`: Access through a CNAME. Before using this access mode, first verify your site with the site verification API (IdentifyZone).<li>`noDomainAccess`: Access without using a domain name. If this value is passed, only the Tags field needs to be set. </li>
If not specified, this field uses the default value `full`.
     */
    public $Type;

    /**
     * @var boolean Whether to skip scanning the existing DNS records of the site. Default value: false.
     */
    public $JumpStart;

    /**
     * @var array The resource tag.
     */
    public $Tags;

    /**
     * @var boolean Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
     */
    public $AllowDuplicates;

    /**
     * @var string The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
     */
    public $AliasZoneName;

    /**
     * @param string $ZoneName The site name.
     * @param string $Type The access mode. Values:
<li> `full`: Access through a name server.</li>
<li> `partial`: Access through a CNAME. Before using this access mode, first verify your site with the site verification API (IdentifyZone).<li>`noDomainAccess`: Access without using a domain name. If this value is passed, only the Tags field needs to be set. </li>
If not specified, this field uses the default value `full`.
     * @param boolean $JumpStart Whether to skip scanning the existing DNS records of the site. Default value: false.
     * @param array $Tags The resource tag.
     * @param boolean $AllowDuplicates Whether to allow duplicate sites. Values:
<li>`true`: Duplicate sites are allowed.</li>
<li>`false`: Duplicate sites are not allowed.</li>If it is left empty, the default value `false` is used.
     * @param string $AliasZoneName The site alias. It can be up to 20 characters consisting of digits, letters, hyphens (-) and underscores (_).
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("JumpStart",$param) and $param["JumpStart"] !== null) {
            $this->JumpStart = $param["JumpStart"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AllowDuplicates",$param) and $param["AllowDuplicates"] !== null) {
            $this->AllowDuplicates = $param["AllowDuplicates"];
        }

        if (array_key_exists("AliasZoneName",$param) and $param["AliasZoneName"] !== null) {
            $this->AliasZoneName = $param["AliasZoneName"];
        }
    }
}
