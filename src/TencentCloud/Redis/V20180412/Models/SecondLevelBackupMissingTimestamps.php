<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timestamp range within which second-level backup is missing
 *
 * @method integer getStartTimeStamp() Obtain Start timestamp.
 * @method void setStartTimeStamp(integer $StartTimeStamp) Set Start timestamp.
 * @method integer getEndTimeStamp() Obtain End timestamp.
 * @method void setEndTimeStamp(integer $EndTimeStamp) Set End timestamp.
 */
class SecondLevelBackupMissingTimestamps extends AbstractModel
{
    /**
     * @var integer Start timestamp.
     */
    public $StartTimeStamp;

    /**
     * @var integer End timestamp.
     */
    public $EndTimeStamp;

    /**
     * @param integer $StartTimeStamp Start timestamp.
     * @param integer $EndTimeStamp End timestamp.
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }
    }
}
