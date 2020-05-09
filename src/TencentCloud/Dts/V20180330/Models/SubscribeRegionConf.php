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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sale information of data subscription region
 *
 * @method string getRegionName() Obtain Region name, such as Guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegionName(string $RegionName) Set Region name, such as Guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region ID, such as ap-guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region ID, such as ap-guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getArea() Obtain Region name, such as South China
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setArea(string $Area) Set Region name, such as South China
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDefaultRegion() Obtain Whether it is the default region. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefaultRegion(integer $IsDefaultRegion) Set Whether it is the default region. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Purchasable status of current region. 1: normal, 2: beta test, 3: not purchasable
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Purchasable status of current region. 1: normal, 2: beta test, 3: not purchasable
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SubscribeRegionConf extends AbstractModel
{
    /**
     * @var string Region name, such as Guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegionName;

    /**
     * @var string Region ID, such as ap-guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Region name, such as South China
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Area;

    /**
     * @var integer Whether it is the default region. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefaultRegion;

    /**
     * @var integer Purchasable status of current region. 1: normal, 2: beta test, 3: not purchasable
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @param string $RegionName Region name, such as Guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region ID, such as ap-guangzhou
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Area Region name, such as South China
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDefaultRegion Whether it is the default region. 0: no, 1: yes
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Purchasable status of current region. 1: normal, 2: beta test, 3: not purchasable
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("IsDefaultRegion",$param) and $param["IsDefaultRegion"] !== null) {
            $this->IsDefaultRegion = $param["IsDefaultRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
