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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The bandwidth information of a country, `DescribeAreaBillBandwidthAndFluxList` output parameter
 *
 * @method string getName() Obtain Country
 * @method void setName(string $Name) Set Country
 * @method array getBandInfoList() Obtain Detailed bandwidth information
 * @method void setBandInfoList(array $BandInfoList) Set Detailed bandwidth information
 */
class BillCountryInfo extends AbstractModel
{
    /**
     * @var string Country
     */
    public $Name;

    /**
     * @var array Detailed bandwidth information
     */
    public $BandInfoList;

    /**
     * @param string $Name Country
     * @param array $BandInfoList Detailed bandwidth information
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BandInfoList",$param) and $param["BandInfoList"] !== null) {
            $this->BandInfoList = [];
            foreach ($param["BandInfoList"] as $key => $value){
                $obj = new BillDataInfo();
                $obj->deserialize($value);
                array_push($this->BandInfoList, $obj);
            }
        }
    }
}
