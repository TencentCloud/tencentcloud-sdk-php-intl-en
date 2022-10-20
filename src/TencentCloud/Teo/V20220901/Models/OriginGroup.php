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
 * Origin group information.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getZoneName() Obtain The site name.
 * @method void setZoneName(string $ZoneName) Set The site name.
 * @method string getOriginGroupId() Obtain The ID of the origin group.
 * @method void setOriginGroupId(string $OriginGroupId) Set The ID of the origin group.
 * @method string getOriginType() Obtain The origin type. Values:
<li>`self`: Customer origin</li>
<li>`third_party`: Third-party origin</li>
<li>`cos`: Tencent Cloud COS origin</li>
 * @method void setOriginType(string $OriginType) Set The origin type. Values:
<li>`self`: Customer origin</li>
<li>`third_party`: Third-party origin</li>
<li>`cos`: Tencent Cloud COS origin</li>
 * @method string getOriginGroupName() Obtain The name of the origin group.
 * @method void setOriginGroupName(string $OriginGroupName) Set The name of the origin group.
 * @method string getConfigurationType() Obtain The origin configuration type when `OriginType=self`. Values:
<li>`area`: Configure by region.</li>
<li>`weight`: Configure by weight.</li>
<li>`proto`: Configure by HTTP protocol.</li>When `OriginType=third_party/cos`, leave this field empty.
 * @method void setConfigurationType(string $ConfigurationType) Set The origin configuration type when `OriginType=self`. Values:
<li>`area`: Configure by region.</li>
<li>`weight`: Configure by weight.</li>
<li>`proto`: Configure by HTTP protocol.</li>When `OriginType=third_party/cos`, leave this field empty.
 * @method array getOriginRecords() Obtain The origin record information.
 * @method void setOriginRecords(array $OriginRecords) Set The origin record information.
 * @method string getUpdateTime() Obtain The update time of the origin group.
 * @method void setUpdateTime(string $UpdateTime) Set The update time of the origin group.
 * @method string getHostHeader() Obtain 
 * @method void setHostHeader(string $HostHeader) Set 
 */
class OriginGroup extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The site name.
     */
    public $ZoneName;

    /**
     * @var string The ID of the origin group.
     */
    public $OriginGroupId;

    /**
     * @var string The origin type. Values:
<li>`self`: Customer origin</li>
<li>`third_party`: Third-party origin</li>
<li>`cos`: Tencent Cloud COS origin</li>
     */
    public $OriginType;

    /**
     * @var string The name of the origin group.
     */
    public $OriginGroupName;

    /**
     * @var string The origin configuration type when `OriginType=self`. Values:
<li>`area`: Configure by region.</li>
<li>`weight`: Configure by weight.</li>
<li>`proto`: Configure by HTTP protocol.</li>When `OriginType=third_party/cos`, leave this field empty.
     */
    public $ConfigurationType;

    /**
     * @var array The origin record information.
     */
    public $OriginRecords;

    /**
     * @var string The update time of the origin group.
     */
    public $UpdateTime;

    /**
     * @var string 
     */
    public $HostHeader;

    /**
     * @param string $ZoneId The site ID.
     * @param string $ZoneName The site name.
     * @param string $OriginGroupId The ID of the origin group.
     * @param string $OriginType The origin type. Values:
<li>`self`: Customer origin</li>
<li>`third_party`: Third-party origin</li>
<li>`cos`: Tencent Cloud COS origin</li>
     * @param string $OriginGroupName The name of the origin group.
     * @param string $ConfigurationType The origin configuration type when `OriginType=self`. Values:
<li>`area`: Configure by region.</li>
<li>`weight`: Configure by weight.</li>
<li>`proto`: Configure by HTTP protocol.</li>When `OriginType=third_party/cos`, leave this field empty.
     * @param array $OriginRecords The origin record information.
     * @param string $UpdateTime The update time of the origin group.
     * @param string $HostHeader 
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("OriginGroupId",$param) and $param["OriginGroupId"] !== null) {
            $this->OriginGroupId = $param["OriginGroupId"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginGroupName",$param) and $param["OriginGroupName"] !== null) {
            $this->OriginGroupName = $param["OriginGroupName"];
        }

        if (array_key_exists("ConfigurationType",$param) and $param["ConfigurationType"] !== null) {
            $this->ConfigurationType = $param["ConfigurationType"];
        }

        if (array_key_exists("OriginRecords",$param) and $param["OriginRecords"] !== null) {
            $this->OriginRecords = [];
            foreach ($param["OriginRecords"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->OriginRecords, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
