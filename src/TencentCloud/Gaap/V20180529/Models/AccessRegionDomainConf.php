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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name nearest access configuration
 *
 * @method string getRegionId() Obtain Region ID.
 * @method void setRegionId(string $RegionId) Set Region ID.
 * @method array getNationCountryInnerList() Obtain Region/country code for the nearest access, which can be obtained via the DescribeCountryAreaMapping API.
 * @method void setNationCountryInnerList(array $NationCountryInnerList) Set Region/country code for the nearest access, which can be obtained via the DescribeCountryAreaMapping API.
 */
class AccessRegionDomainConf extends AbstractModel
{
    /**
     * @var string Region ID.
     */
    public $RegionId;

    /**
     * @var array Region/country code for the nearest access, which can be obtained via the DescribeCountryAreaMapping API.
     */
    public $NationCountryInnerList;

    /**
     * @param string $RegionId Region ID.
     * @param array $NationCountryInnerList Region/country code for the nearest access, which can be obtained via the DescribeCountryAreaMapping API.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("NationCountryInnerList",$param) and $param["NationCountryInnerList"] !== null) {
            $this->NationCountryInnerList = $param["NationCountryInnerList"];
        }
    }
}
