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
 * Province/State information
 *
 * @method string getProvinceId() Obtain Province/State ID
 * @method void setProvinceId(string $ProvinceId) Set Province/State ID
 * @method string getProvinceName() Obtain Province/State name
 * @method void setProvinceName(string $ProvinceName) Set Province/State name
 */
class Province extends AbstractModel
{
    /**
     * @var string Province/State ID
     */
    public $ProvinceId;

    /**
     * @var string Province/State name
     */
    public $ProvinceName;

    /**
     * @param string $ProvinceId Province/State ID
     * @param string $ProvinceName Province/State name
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
        if (array_key_exists("ProvinceId",$param) and $param["ProvinceId"] !== null) {
            $this->ProvinceId = $param["ProvinceId"];
        }

        if (array_key_exists("ProvinceName",$param) and $param["ProvinceName"] !== null) {
            $this->ProvinceName = $param["ProvinceName"];
        }
    }
}
