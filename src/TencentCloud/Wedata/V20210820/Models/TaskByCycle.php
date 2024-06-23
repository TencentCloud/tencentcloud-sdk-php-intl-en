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
 * Cycle Unit Statistics
 *
 * @method integer getNumber() Obtain num
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNumber(integer $Number) Set num
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleUnit() Obtain Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleUnit(string $CycleUnit) Set Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskByCycle extends AbstractModel
{
    /**
     * @var integer num
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Number;

    /**
     * @var string Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleUnit;

    /**
     * @var string Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @param integer $Number num
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleUnit Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project ID
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
