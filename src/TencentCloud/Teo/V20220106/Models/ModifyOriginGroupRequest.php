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
 * ModifyOriginGroup request structure.
 *
 * @method string getOriginId() Obtain ID of the origin group
 * @method void setOriginId(string $OriginId) Set ID of the origin group
 * @method string getOriginName() Obtain Name of the origin group
 * @method void setOriginName(string $OriginName) Set Name of the origin group
 * @method string getType() Obtain Origin-pull configuration type. This field is required when `OriginType=self`.
`area`: Origin-pull by region
`weight`: Origin-pull by weight
When `OriginType=third_party/cos`, it can be left empty.
 * @method void setType(string $Type) Set Origin-pull configuration type. This field is required when `OriginType=self`.
`area`: Origin-pull by region
`weight`: Origin-pull by weight
When `OriginType=third_party/cos`, it can be left empty.
 * @method array getRecord() Obtain Origin record
 * @method void setRecord(array $Record) Set Origin record
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getOriginType() Obtain Origin type
`self`: Customer origin
`third_party`: Third-party origin
`cos`: Tencent Cloud COS origin
 * @method void setOriginType(string $OriginType) Set Origin type
`self`: Customer origin
`third_party`: Third-party origin
`cos`: Tencent Cloud COS origin
 */
class ModifyOriginGroupRequest extends AbstractModel
{
    /**
     * @var string ID of the origin group
     */
    public $OriginId;

    /**
     * @var string Name of the origin group
     */
    public $OriginName;

    /**
     * @var string Origin-pull configuration type. This field is required when `OriginType=self`.
`area`: Origin-pull by region
`weight`: Origin-pull by weight
When `OriginType=third_party/cos`, it can be left empty.
     */
    public $Type;

    /**
     * @var array Origin record
     */
    public $Record;

    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Origin type
`self`: Customer origin
`third_party`: Third-party origin
`cos`: Tencent Cloud COS origin
     */
    public $OriginType;

    /**
     * @param string $OriginId ID of the origin group
     * @param string $OriginName Name of the origin group
     * @param string $Type Origin-pull configuration type. This field is required when `OriginType=self`.
`area`: Origin-pull by region
`weight`: Origin-pull by weight
When `OriginType=third_party/cos`, it can be left empty.
     * @param array $Record Origin record
     * @param string $ZoneId Site ID
     * @param string $OriginType Origin type
`self`: Customer origin
`third_party`: Third-party origin
`cos`: Tencent Cloud COS origin
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
        if (array_key_exists("OriginId",$param) and $param["OriginId"] !== null) {
            $this->OriginId = $param["OriginId"];
        }

        if (array_key_exists("OriginName",$param) and $param["OriginName"] !== null) {
            $this->OriginName = $param["OriginName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = [];
            foreach ($param["Record"] as $key => $value){
                $obj = new OriginRecord();
                $obj->deserialize($value);
                array_push($this->Record, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }
    }
}
