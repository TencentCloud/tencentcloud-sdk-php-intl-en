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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region information
 *
 * @method string getRegion() Obtain Region identifiers, such as ap-guangzhou, ap-shanghai, and ap-beijing
 * @method void setRegion(string $Region) Set Region identifiers, such as ap-guangzhou, ap-shanghai, and ap-beijing
 * @method string getRegionName() Obtain Chinese name of region, such as South China (Guangzhou), East China (Shanghai Finance), and North China (Beijing)
 * @method void setRegionName(string $RegionName) Set Chinese name of region, such as South China (Guangzhou), East China (Shanghai Finance), and North China (Beijing)
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getRegionCode() Obtain Region code, such as gz, sh, and bj
 * @method void setRegionCode(string $RegionCode) Set Region code, such as gz, sh, and bj
 * @method string getRegionNameEn() Obtain English name of the region
 * @method void setRegionNameEn(string $RegionNameEn) Set English name of the region
 */
class ScreenRegionInfo extends AbstractModel
{
    /**
     * @var string Region identifiers, such as ap-guangzhou, ap-shanghai, and ap-beijing
     */
    public $Region;

    /**
     * @var string Chinese name of region, such as South China (Guangzhou), East China (Shanghai Finance), and North China (Beijing)
     */
    public $RegionName;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string Region code, such as gz, sh, and bj
     */
    public $RegionCode;

    /**
     * @var string English name of the region
     */
    public $RegionNameEn;

    /**
     * @param string $Region Region identifiers, such as ap-guangzhou, ap-shanghai, and ap-beijing
     * @param string $RegionName Chinese name of region, such as South China (Guangzhou), East China (Shanghai Finance), and North China (Beijing)
     * @param integer $RegionId Region ID
     * @param string $RegionCode Region code, such as gz, sh, and bj
     * @param string $RegionNameEn English name of the region
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }
    }
}
