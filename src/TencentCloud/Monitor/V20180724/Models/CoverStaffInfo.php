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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shift personnel group information
 *
 * @method array getCoverStaffIDs() Obtain Shift personnel ID group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoverStaffIDs(array $CoverStaffIDs) Set Shift personnel ID group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCoverStartTime() Obtain Shift start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoverStartTime(integer $CoverStartTime) Set Shift start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCoverEndTime() Obtain Shift end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoverEndTime(integer $CoverEndTime) Set Shift end time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CoverStaffInfo extends AbstractModel
{
    /**
     * @var array Shift personnel ID group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoverStaffIDs;

    /**
     * @var integer Shift start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoverStartTime;

    /**
     * @var integer Shift end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoverEndTime;

    /**
     * @param array $CoverStaffIDs Shift personnel ID group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CoverStartTime Shift start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CoverEndTime Shift end time
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
        if (array_key_exists("CoverStaffIDs",$param) and $param["CoverStaffIDs"] !== null) {
            $this->CoverStaffIDs = $param["CoverStaffIDs"];
        }

        if (array_key_exists("CoverStartTime",$param) and $param["CoverStartTime"] !== null) {
            $this->CoverStartTime = $param["CoverStartTime"];
        }

        if (array_key_exists("CoverEndTime",$param) and $param["CoverEndTime"] !== null) {
            $this->CoverEndTime = $param["CoverEndTime"];
        }
    }
}
