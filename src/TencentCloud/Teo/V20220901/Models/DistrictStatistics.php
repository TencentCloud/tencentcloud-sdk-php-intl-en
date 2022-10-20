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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The site’s load speed across regions
 *
 * @method string getAlpha2() Obtain The ISO 3166-2 Alpha-2 country code. For the list of country codes, see [ISO 3166-2](https://zh.m.wikipedia.org/zh-hans/ISO_3166-2).
 * @method void setAlpha2(string $Alpha2) Set The ISO 3166-2 Alpha-2 country code. For the list of country codes, see [ISO 3166-2](https://zh.m.wikipedia.org/zh-hans/ISO_3166-2).
 * @method integer getLoadTime() Obtain The overall load time, in milliseconds.
 * @method void setLoadTime(integer $LoadTime) Set The overall load time, in milliseconds.
 */
class DistrictStatistics extends AbstractModel
{
    /**
     * @var string The ISO 3166-2 Alpha-2 country code. For the list of country codes, see [ISO 3166-2](https://zh.m.wikipedia.org/zh-hans/ISO_3166-2).
     */
    public $Alpha2;

    /**
     * @var integer The overall load time, in milliseconds.
     */
    public $LoadTime;

    /**
     * @param string $Alpha2 The ISO 3166-2 Alpha-2 country code. For the list of country codes, see [ISO 3166-2](https://zh.m.wikipedia.org/zh-hans/ISO_3166-2).
     * @param integer $LoadTime The overall load time, in milliseconds.
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
        if (array_key_exists("Alpha2",$param) and $param["Alpha2"] !== null) {
            $this->Alpha2 = $param["Alpha2"];
        }

        if (array_key_exists("LoadTime",$param) and $param["LoadTime"] !== null) {
            $this->LoadTime = $param["LoadTime"];
        }
    }
}
