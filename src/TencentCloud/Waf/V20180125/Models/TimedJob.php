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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rule-based scheduled task data structure
 *
 * @method integer getStartDateTime() Obtain Start timestamp, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartDateTime(integer $StartDateTime) Set Start timestamp, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndDateTime() Obtain End timestamp, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndDateTime(integer $EndDateTime) Set End timestamp, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TimedJob extends AbstractModel
{
    /**
     * @var integer Start timestamp, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartDateTime;

    /**
     * @var integer End timestamp, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndDateTime;

    /**
     * @param integer $StartDateTime Start timestamp, in seconds
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndDateTime End timestamp, in seconds
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
        if (array_key_exists("StartDateTime",$param) and $param["StartDateTime"] !== null) {
            $this->StartDateTime = $param["StartDateTime"];
        }

        if (array_key_exists("EndDateTime",$param) and $param["EndDateTime"] !== null) {
            $this->EndDateTime = $param["EndDateTime"];
        }
    }
}
