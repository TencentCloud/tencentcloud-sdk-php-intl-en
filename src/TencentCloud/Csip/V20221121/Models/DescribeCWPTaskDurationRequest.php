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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCWPTaskDuration request structure.
 *
 * @method integer getUuidCnt() Obtain Number of Hosts that Require Performing Tasks
 * @method void setUuidCnt(integer $UuidCnt) Set Number of Hosts that Require Performing Tasks
 * @method boolean getTimingScan() Obtain Whether to perform a scheduled scan
 * @method void setTimingScan(boolean $TimingScan) Set Whether to perform a scheduled scan
 */
class DescribeCWPTaskDurationRequest extends AbstractModel
{
    /**
     * @var integer Number of Hosts that Require Performing Tasks
     */
    public $UuidCnt;

    /**
     * @var boolean Whether to perform a scheduled scan
     */
    public $TimingScan;

    /**
     * @param integer $UuidCnt Number of Hosts that Require Performing Tasks
     * @param boolean $TimingScan Whether to perform a scheduled scan
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
        if (array_key_exists("UuidCnt",$param) and $param["UuidCnt"] !== null) {
            $this->UuidCnt = $param["UuidCnt"];
        }

        if (array_key_exists("TimingScan",$param) and $param["TimingScan"] !== null) {
            $this->TimingScan = $param["TimingScan"];
        }
    }
}
