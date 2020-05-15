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
 * Bandwidth, traffic, number of requests, and number of concurrent connections of an ISP in a district.
 *
 * @method string getProvinceName() Obtain District.
 * @method void setProvinceName(string $ProvinceName) Set District.
 * @method string getIspName() Obtain ISP.
 * @method void setIspName(string $IspName) Set ISP.
 * @method array getDetailInfoList() Obtain Detailed data at the minute level.
 * @method void setDetailInfoList(array $DetailInfoList) Set Detailed data at the minute level.
 */
class GroupProIspDataInfo extends AbstractModel
{
    /**
     * @var string District.
     */
    public $ProvinceName;

    /**
     * @var string ISP.
     */
    public $IspName;

    /**
     * @var array Detailed data at the minute level.
     */
    public $DetailInfoList;

    /**
     * @param string $ProvinceName District.
     * @param string $IspName ISP.
     * @param array $DetailInfoList Detailed data at the minute level.
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
        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }

        if (array_key_exists("IspName",$param) and $param["IspName"] !== null) {
            $this->IspName = $param["IspName"];
        }

        if (array_key_exists("DetailInfoList",$param) and $param["DetailInfoList"] !== null) {
            $this->DetailInfoList = [];
            foreach ($param["DetailInfoList"] as $key => $value){
                $obj = new CdnPlayStatData();
                $obj->deserialize($value);
                array_push($this->DetailInfoList, $obj);
            }
        }
    }
}
