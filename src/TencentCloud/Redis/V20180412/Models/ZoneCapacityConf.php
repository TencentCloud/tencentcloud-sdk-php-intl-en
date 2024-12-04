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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product information in the availability zone
 *
 * @method string getZoneId() Obtain AZ ID, such as ap-guangzhou-3
 * @method void setZoneId(string $ZoneId) Set AZ ID, such as ap-guangzhou-3
 * @method string getZoneName() Obtain Availability zone name.
 * @method void setZoneName(string $ZoneName) Set Availability zone name.
 * @method boolean getIsSaleout() Obtain Whether the AZ is sold out.
 * @method void setIsSaleout(boolean $IsSaleout) Set Whether the AZ is sold out.
 * @method boolean getIsDefault() Obtain Whether the default AZ is used.
 * @method void setIsDefault(boolean $IsDefault) Set Whether the default AZ is used.
 * @method array getNetWorkType() Obtain Network type.

- basenet: basic network.
- vpcnet: VPC.
 * @method void setNetWorkType(array $NetWorkType) Set Network type.

- basenet: basic network.
- vpcnet: VPC.
 * @method array getProductSet() Obtain Information of an AZ, such as product specifications in it
 * @method void setProductSet(array $ProductSet) Set Information of an AZ, such as product specifications in it
 * @method integer getOldZoneId() Obtain AZ ID, such as 100003
 * @method void setOldZoneId(integer $OldZoneId) Set AZ ID, such as 100003
 */
class ZoneCapacityConf extends AbstractModel
{
    /**
     * @var string AZ ID, such as ap-guangzhou-3
     */
    public $ZoneId;

    /**
     * @var string Availability zone name.
     */
    public $ZoneName;

    /**
     * @var boolean Whether the AZ is sold out.
     */
    public $IsSaleout;

    /**
     * @var boolean Whether the default AZ is used.
     */
    public $IsDefault;

    /**
     * @var array Network type.

- basenet: basic network.
- vpcnet: VPC.
     */
    public $NetWorkType;

    /**
     * @var array Information of an AZ, such as product specifications in it
     */
    public $ProductSet;

    /**
     * @var integer AZ ID, such as 100003
     */
    public $OldZoneId;

    /**
     * @param string $ZoneId AZ ID, such as ap-guangzhou-3
     * @param string $ZoneName Availability zone name.
     * @param boolean $IsSaleout Whether the AZ is sold out.
     * @param boolean $IsDefault Whether the default AZ is used.
     * @param array $NetWorkType Network type.

- basenet: basic network.
- vpcnet: VPC.
     * @param array $ProductSet Information of an AZ, such as product specifications in it
     * @param integer $OldZoneId AZ ID, such as 100003
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

        if (array_key_exists("IsSaleout",$param) and $param["IsSaleout"] !== null) {
            $this->IsSaleout = $param["IsSaleout"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("NetWorkType",$param) and $param["NetWorkType"] !== null) {
            $this->NetWorkType = $param["NetWorkType"];
        }

        if (array_key_exists("ProductSet",$param) and $param["ProductSet"] !== null) {
            $this->ProductSet = [];
            foreach ($param["ProductSet"] as $key => $value){
                $obj = new ProductConf();
                $obj->deserialize($value);
                array_push($this->ProductSet, $obj);
            }
        }

        if (array_key_exists("OldZoneId",$param) and $param["OldZoneId"] !== null) {
            $this->OldZoneId = $param["OldZoneId"];
        }
    }
}
