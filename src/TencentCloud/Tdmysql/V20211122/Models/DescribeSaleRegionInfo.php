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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the sales API. The return type is region information.
 *
 * @method string getRegion() Obtain <p>English string of Region</p>
 * @method void setRegion(string $Region) Set <p>English string of Region</p>
 * @method array getZoneList() Obtain <p>Purchasable Zone list</p>
 * @method void setZoneList(array $ZoneList) Set <p>Purchasable Zone list</p>
 * @method string getRegionName() Obtain <p>Region Chinese character string</p>
 * @method void setRegionName(string $RegionName) Set <p>Region Chinese character string</p>
 * @method integer getEnable() Obtain <p>Whether to sell. 1: sell, 0: do not sell</p>
 * @method void setEnable(integer $Enable) Set <p>Whether to sell. 1: sell, 0: do not sell</p>
 * @method integer getAvailableZoneNum() Obtain <p>Optional quantity of multiple availability</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableZoneNum(integer $AvailableZoneNum) Set <p>Optional quantity of multiple availability</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsSupportedLogReplica() Obtain <p>Whether to allow usage log replica</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSupportedLogReplica(boolean $IsSupportedLogReplica) Set <p>Whether to allow usage log replica</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getZoneGroup() Obtain <p>Availability zone combination</p>
 * @method void setZoneGroup(array $ZoneGroup) Set <p>Availability zone combination</p>
 * @method boolean getIsSupportServerless() Obtain <p>Whether serverless is supported</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) Set <p>Whether serverless is supported</p>
 */
class DescribeSaleRegionInfo extends AbstractModel
{
    /**
     * @var string <p>English string of Region</p>
     */
    public $Region;

    /**
     * @var array <p>Purchasable Zone list</p>
     */
    public $ZoneList;

    /**
     * @var string <p>Region Chinese character string</p>
     */
    public $RegionName;

    /**
     * @var integer <p>Whether to sell. 1: sell, 0: do not sell</p>
     */
    public $Enable;

    /**
     * @var integer <p>Optional quantity of multiple availability</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableZoneNum;

    /**
     * @var boolean <p>Whether to allow usage log replica</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSupportedLogReplica;

    /**
     * @var array <p>Availability zone combination</p>
     */
    public $ZoneGroup;

    /**
     * @var boolean <p>Whether serverless is supported</p>
     */
    public $IsSupportServerless;

    /**
     * @param string $Region <p>English string of Region</p>
     * @param array $ZoneList <p>Purchasable Zone list</p>
     * @param string $RegionName <p>Region Chinese character string</p>
     * @param integer $Enable <p>Whether to sell. 1: sell, 0: do not sell</p>
     * @param integer $AvailableZoneNum <p>Optional quantity of multiple availability</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsSupportedLogReplica <p>Whether to allow usage log replica</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ZoneGroup <p>Availability zone combination</p>
     * @param boolean $IsSupportServerless <p>Whether serverless is supported</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new DescribeSaleZonesInfo();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AvailableZoneNum",$param) and $param["AvailableZoneNum"] !== null) {
            $this->AvailableZoneNum = $param["AvailableZoneNum"];
        }

        if (array_key_exists("IsSupportedLogReplica",$param) and $param["IsSupportedLogReplica"] !== null) {
            $this->IsSupportedLogReplica = $param["IsSupportedLogReplica"];
        }

        if (array_key_exists("ZoneGroup",$param) and $param["ZoneGroup"] !== null) {
            $this->ZoneGroup = [];
            foreach ($param["ZoneGroup"] as $key => $value){
                $obj = new DescribeSaleZonesGroup();
                $obj->deserialize($value);
                array_push($this->ZoneGroup, $obj);
            }
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
