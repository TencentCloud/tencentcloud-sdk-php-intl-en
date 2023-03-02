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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNS query volume in the current statistical dimension
 *
 * @method integer getNum() Obtain DNS query volume in the current statistical dimension
 * @method void setNum(integer $Num) Set DNS query volume in the current statistical dimension
 * @method string getDateKey() Obtain Collection date for daily collection
 * @method void setDateKey(string $DateKey) Set Collection date for daily collection
 * @method integer getHourKey() Obtain The last hour (0–23) for hourly collection. For example, if `HourKey` is `23`, the DNS query volume in the statistical period of 22:00–23:00 will be collected.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHourKey(integer $HourKey) Set The last hour (0–23) for hourly collection. For example, if `HourKey` is `23`, the DNS query volume in the statistical period of 22:00–23:00 will be collected.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DomainAnalyticsDetail extends AbstractModel
{
    /**
     * @var integer DNS query volume in the current statistical dimension
     */
    public $Num;

    /**
     * @var string Collection date for daily collection
     */
    public $DateKey;

    /**
     * @var integer The last hour (0–23) for hourly collection. For example, if `HourKey` is `23`, the DNS query volume in the statistical period of 22:00–23:00 will be collected.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HourKey;

    /**
     * @param integer $Num DNS query volume in the current statistical dimension
     * @param string $DateKey Collection date for daily collection
     * @param integer $HourKey The last hour (0–23) for hourly collection. For example, if `HourKey` is `23`, the DNS query volume in the statistical period of 22:00–23:00 will be collected.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("DateKey",$param) and $param["DateKey"] !== null) {
            $this->DateKey = $param["DateKey"];
        }

        if (array_key_exists("HourKey",$param) and $param["HourKey"] !== null) {
            $this->HourKey = $param["HourKey"];
        }
    }
}
