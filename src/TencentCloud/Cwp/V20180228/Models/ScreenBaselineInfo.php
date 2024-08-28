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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Large screen baseline information
 *
 * @method string getName() Obtain Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCategoryId() Obtain Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategoryId(integer $CategoryId) Set Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastScanTime() Obtain Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastScanTime(string $LastScanTime) Set Last check time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBaselineFailCount() Obtain Baseline check items with risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBaselineFailCount(integer $BaselineFailCount) Set Baseline check items with risks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScreenBaselineInfo extends AbstractModel
{
    /**
     * @var string Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var integer Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CategoryId;

    /**
     * @var string Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastScanTime;

    /**
     * @var integer Baseline check items with risks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BaselineFailCount;

    /**
     * @var string Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @param string $Name Baseline name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Level Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CategoryId Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastScanTime Last check time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BaselineFailCount Baseline check items with risks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host UUID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("BaselineFailCount",$param) and $param["BaselineFailCount"] !== null) {
            $this->BaselineFailCount = $param["BaselineFailCount"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
