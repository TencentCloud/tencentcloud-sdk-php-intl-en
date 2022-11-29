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
 * CreateOriginGroup request structure.
 *
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
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
 * @method array getOriginRecords() Obtain Details of the origin record.
 * @method void setOriginRecords(array $OriginRecords) Set Details of the origin record.
 * @method string getHostHeader() Obtain The origin domain. This field can be specified only when `OriginType=self`.
 * @method void setHostHeader(string $HostHeader) Set The origin domain. This field can be specified only when `OriginType=self`.
 */
class CreateOriginGroupRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

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
     * @var array Details of the origin record.
     */
    public $OriginRecords;

    /**
     * @var string The origin domain. This field can be specified only when `OriginType=self`.
     */
    public $HostHeader;

    /**
     * @param string $ZoneId The site ID.
     * @param string $OriginType The origin type. Values:
<li>`self`: Customer origin</li>
<li>`third_party`: Third-party origin</li>
<li>`cos`: Tencent Cloud COS origin</li>
     * @param string $OriginGroupName The name of the origin group.
     * @param string $ConfigurationType The origin configuration type when `OriginType=self`. Values:
<li>`area`: Configure by region.</li>
<li>`weight`: Configure by weight.</li>
<li>`proto`: Configure by HTTP protocol.</li>When `OriginType=third_party/cos`, leave this field empty.
     * @param array $OriginRecords Details of the origin record.
     * @param string $HostHeader The origin domain. This field can be specified only when `OriginType=self`.
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

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }
    }
}
