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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consistency check options
 *
 * @method string getMethod() Obtain Comparative Method: dataCheck (Complete Data Comparison), sampleDataCheck (Sampling Data Comparison), rowsCount (Row Count Comparison)Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMethod(string $Method) Set Comparative Method: dataCheck (Complete Data Comparison), sampleDataCheck (Sampling Data Comparison), rowsCount (Row Count Comparison)Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSampleRate() Obtain Sampling rate. Value range: 0-100%.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSampleRate(integer $SampleRate) Set Sampling rate. Value range: 0-100%.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getThreadCount() Obtain The number of threads, which defaults to 1. Value range: 1-5.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setThreadCount(integer $ThreadCount) Set The number of threads, which defaults to 1. Value range: 1-5.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompareOptions extends AbstractModel
{
    /**
     * @var string Comparative Method: dataCheck (Complete Data Comparison), sampleDataCheck (Sampling Data Comparison), rowsCount (Row Count Comparison)Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Method;

    /**
     * @var integer Sampling rate. Value range: 0-100%.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SampleRate;

    /**
     * @var integer The number of threads, which defaults to 1. Value range: 1-5.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ThreadCount;

    /**
     * @param string $Method Comparative Method: dataCheck (Complete Data Comparison), sampleDataCheck (Sampling Data Comparison), rowsCount (Row Count Comparison)Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $SampleRate Sampling rate. Value range: 0-100%.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ThreadCount The number of threads, which defaults to 1. Value range: 1-5.
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ThreadCount",$param) and $param["ThreadCount"] !== null) {
            $this->ThreadCount = $param["ThreadCount"];
        }
    }
}
