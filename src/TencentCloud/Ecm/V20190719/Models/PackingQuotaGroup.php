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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A set of correlated packing quotas sorted by instance type priority
 *
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method string getISPId() Obtain ISP id
 * @method void setISPId(string $ISPId) Set ISP id
 * @method array getPackingQuotaInfos() Obtain A set of correlated packing quotas
 * @method void setPackingQuotaInfos(array $PackingQuotaInfos) Set A set of correlated packing quotas
 */
class PackingQuotaGroup extends AbstractModel
{
    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var string ISP id
     */
    public $ISPId;

    /**
     * @var array A set of correlated packing quotas
     */
    public $PackingQuotaInfos;

    /**
     * @param string $Zone AZ
     * @param integer $ZoneId AZ ID
     * @param string $ISPId ISP id
     * @param array $PackingQuotaInfos A set of correlated packing quotas
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

        if (array_key_exists("ISPId",$param) and $param["ISPId"] !== null) {
            $this->ISPId = $param["ISPId"];
        }

        if (array_key_exists("PackingQuotaInfos",$param) and $param["PackingQuotaInfos"] !== null) {
            $this->PackingQuotaInfos = [];
            foreach ($param["PackingQuotaInfos"] as $key => $value){
                $obj = new PackingQuotaInfo();
                $obj->deserialize($value);
                array_push($this->PackingQuotaInfos, $obj);
            }
        }
    }
}
