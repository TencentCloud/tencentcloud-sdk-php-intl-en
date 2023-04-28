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
 * Number of scrape targets
 *
 * @method integer getTotal() Obtain The total count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotal(integer $Total) Set The total count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUp() Obtain Number of online targets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUp(integer $Up) Set Number of online targets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDown() Obtain Number of offline targets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDown(integer $Down) Set Number of offline targets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnknown() Obtain Number of unknown status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnknown(integer $Unknown) Set Number of unknown status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Targets extends AbstractModel
{
    /**
     * @var integer The total count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Total;

    /**
     * @var integer Number of online targets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Up;

    /**
     * @var integer Number of offline targets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Down;

    /**
     * @var integer Number of unknown status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Unknown;

    /**
     * @param integer $Total The total count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Up Number of online targets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Down Number of offline targets
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Unknown Number of unknown status
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }

        if (array_key_exists("Down",$param) and $param["Down"] !== null) {
            $this->Down = $param["Down"];
        }

        if (array_key_exists("Unknown",$param) and $param["Unknown"] !== null) {
            $this->Unknown = $param["Unknown"];
        }
    }
}
