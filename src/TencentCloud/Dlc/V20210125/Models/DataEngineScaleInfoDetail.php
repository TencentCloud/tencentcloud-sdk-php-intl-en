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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Engine specification details
 *
 * @method string getStartTime() Obtain Start time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCU() Obtain Current statistical time period and engine specifications
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCU(integer $CU) Set Current statistical time period and engine specifications
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataEngineScaleInfoDetail extends AbstractModel
{
    /**
     * @var string Start time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string End time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Current statistical time period and engine specifications
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CU;

    /**
     * @param string $StartTime Start time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time of counting in the format of yyyy-MM-dd HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CU Current statistical time period and engine specifications
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CU",$param) and $param["CU"] !== null) {
            $this->CU = $param["CU"];
        }
    }
}
