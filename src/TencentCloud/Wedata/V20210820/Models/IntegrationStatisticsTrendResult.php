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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataInLong Dashboard trend chart statistical results
 *
 * @method array getStatisticName() Obtain Statistical Attribute Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatisticName(array $StatisticName) Set Statistical Attribute Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getStatisticValue() Obtain Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatisticValue(array $StatisticValue) Set Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatisticType() Obtain Statistical Item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatisticType(string $StatisticType) Set Statistical Item
Note: This field may return null, indicating that no valid value can be obtained.
 */
class IntegrationStatisticsTrendResult extends AbstractModel
{
    /**
     * @var array Statistical Attribute Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StatisticName;

    /**
     * @var array Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StatisticValue;

    /**
     * @var string Statistical Item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StatisticType;

    /**
     * @param array $StatisticName Statistical Attribute Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $StatisticValue Statistical Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StatisticType Statistical Item
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("StatisticName",$param) and $param["StatisticName"] !== null) {
            $this->StatisticName = $param["StatisticName"];
        }

        if (array_key_exists("StatisticValue",$param) and $param["StatisticValue"] !== null) {
            $this->StatisticValue = $param["StatisticValue"];
        }

        if (array_key_exists("StatisticType",$param) and $param["StatisticType"] !== null) {
            $this->StatisticType = $param["StatisticType"];
        }
    }
}
