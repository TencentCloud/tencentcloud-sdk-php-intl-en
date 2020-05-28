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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList.ConfigManual.StatType
 *
 * @method string getP5() Obtain Data aggregation method in a period of 5 seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP5(string $P5) Set Data aggregation method in a period of 5 seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method string getP10() Obtain Data aggregation method in a period of 10 seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP10(string $P10) Set Data aggregation method in a period of 10 seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method string getP60() Obtain Data aggregation method in a period of 1 minute.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP60(string $P60) Set Data aggregation method in a period of 1 minute.
Note: This field may return null, indicating that no valid value was found.
 * @method string getP300() Obtain Data aggregation method in a period of 5 minutes.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP300(string $P300) Set Data aggregation method in a period of 5 minutes.
Note: This field may return null, indicating that no valid value was found.
 * @method string getP600() Obtain Data aggregation method in a period of 10 minutes.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP600(string $P600) Set Data aggregation method in a period of 10 minutes.
Note: This field may return null, indicating that no valid value was found.
 * @method string getP1800() Obtain Data aggregation method in a period of 30 minutes.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP1800(string $P1800) Set Data aggregation method in a period of 30 minutes.
Note: This field may return null, indicating that no valid value was found.
 * @method string getP3600() Obtain Data aggregation method in a period of 1 hour.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP3600(string $P3600) Set Data aggregation method in a period of 1 hour.
Note: This field may return null, indicating that no valid value was found.
 * @method string getP86400() Obtain Data aggregation method in a period of 1 day.
Note: This field may return null, indicating that no valid value was found.
 * @method void setP86400(string $P86400) Set Data aggregation method in a period of 1 day.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribePolicyConditionListConfigManualStatType extends AbstractModel
{
    /**
     * @var string Data aggregation method in a period of 5 seconds.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P5;

    /**
     * @var string Data aggregation method in a period of 10 seconds.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P10;

    /**
     * @var string Data aggregation method in a period of 1 minute.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P60;

    /**
     * @var string Data aggregation method in a period of 5 minutes.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P300;

    /**
     * @var string Data aggregation method in a period of 10 minutes.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P600;

    /**
     * @var string Data aggregation method in a period of 30 minutes.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P1800;

    /**
     * @var string Data aggregation method in a period of 1 hour.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P3600;

    /**
     * @var string Data aggregation method in a period of 1 day.
Note: This field may return null, indicating that no valid value was found.
     */
    public $P86400;

    /**
     * @param string $P5 Data aggregation method in a period of 5 seconds.
Note: This field may return null, indicating that no valid value was found.
     * @param string $P10 Data aggregation method in a period of 10 seconds.
Note: This field may return null, indicating that no valid value was found.
     * @param string $P60 Data aggregation method in a period of 1 minute.
Note: This field may return null, indicating that no valid value was found.
     * @param string $P300 Data aggregation method in a period of 5 minutes.
Note: This field may return null, indicating that no valid value was found.
     * @param string $P600 Data aggregation method in a period of 10 minutes.
Note: This field may return null, indicating that no valid value was found.
     * @param string $P1800 Data aggregation method in a period of 30 minutes.
Note: This field may return null, indicating that no valid value was found.
     * @param string $P3600 Data aggregation method in a period of 1 hour.
Note: This field may return null, indicating that no valid value was found.
     * @param string $P86400 Data aggregation method in a period of 1 day.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("P5",$param) and $param["P5"] !== null) {
            $this->P5 = $param["P5"];
        }

        if (array_key_exists("P10",$param) and $param["P10"] !== null) {
            $this->P10 = $param["P10"];
        }

        if (array_key_exists("P60",$param) and $param["P60"] !== null) {
            $this->P60 = $param["P60"];
        }

        if (array_key_exists("P300",$param) and $param["P300"] !== null) {
            $this->P300 = $param["P300"];
        }

        if (array_key_exists("P600",$param) and $param["P600"] !== null) {
            $this->P600 = $param["P600"];
        }

        if (array_key_exists("P1800",$param) and $param["P1800"] !== null) {
            $this->P1800 = $param["P1800"];
        }

        if (array_key_exists("P3600",$param) and $param["P3600"] !== null) {
            $this->P3600 = $param["P3600"];
        }

        if (array_key_exists("P86400",$param) and $param["P86400"] !== null) {
            $this->P86400 = $param["P86400"];
        }
    }
}
