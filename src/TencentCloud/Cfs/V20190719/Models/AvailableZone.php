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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Versioning - array of AZs
 *
 * @method string getZone() Obtain AZ name
 * @method void setZone(string $Zone) Set AZ name
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method string getZoneCnName() Obtain Chinese name of an AZ
 * @method void setZoneCnName(string $ZoneCnName) Set Chinese name of an AZ
 * @method array getTypes() Obtain Array of classes
 * @method void setTypes(array $Types) Set Array of classes
 * @method string getZoneName() Obtain Chinese and English names of an AZ
 * @method void setZoneName(string $ZoneName) Set Chinese and English names of an AZ
 */
class AvailableZone extends AbstractModel
{
    /**
     * @var string AZ name
     */
    public $Zone;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var string Chinese name of an AZ
     */
    public $ZoneCnName;

    /**
     * @var array Array of classes
     */
    public $Types;

    /**
     * @var string Chinese and English names of an AZ
     */
    public $ZoneName;

    /**
     * @param string $Zone AZ name
     * @param integer $ZoneId AZ ID
     * @param string $ZoneCnName Chinese name of an AZ
     * @param array $Types Array of classes
     * @param string $ZoneName Chinese and English names of an AZ
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneCnName",$param) and $param["ZoneCnName"] !== null) {
            $this->ZoneCnName = $param["ZoneCnName"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = [];
            foreach ($param["Types"] as $key => $value){
                $obj = new AvailableType();
                $obj->deserialize($value);
                array_push($this->Types, $obj);
            }
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
