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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The site test information
 *
 * @method integer getStatusCode() Obtain The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed.</li>
 * @method void setStatusCode(integer $StatusCode) Set The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed.</li>
 * @method string getTestId() Obtain ID of the site test task.
 * @method void setTestId(string $TestId) Set ID of the site test task.
 * @method SpeedTestingConfig getSpeedTestingConfig() Obtain The settings of the site test task.
 * @method void setSpeedTestingConfig(SpeedTestingConfig $SpeedTestingConfig) Set The settings of the site test task.
 * @method SpeedTestingStatistics getSpeedTestingStatistics() Obtain The site test result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpeedTestingStatistics(SpeedTestingStatistics $SpeedTestingStatistics) Set The site test result.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SpeedTestingInfo extends AbstractModel
{
    /**
     * @var integer The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed.</li>
     */
    public $StatusCode;

    /**
     * @var string ID of the site test task.
     */
    public $TestId;

    /**
     * @var SpeedTestingConfig The settings of the site test task.
     */
    public $SpeedTestingConfig;

    /**
     * @var SpeedTestingStatistics The site test result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpeedTestingStatistics;

    /**
     * @param integer $StatusCode The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed.</li>
     * @param string $TestId ID of the site test task.
     * @param SpeedTestingConfig $SpeedTestingConfig The settings of the site test task.
     * @param SpeedTestingStatistics $SpeedTestingStatistics The site test result.
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("TestId",$param) and $param["TestId"] !== null) {
            $this->TestId = $param["TestId"];
        }

        if (array_key_exists("SpeedTestingConfig",$param) and $param["SpeedTestingConfig"] !== null) {
            $this->SpeedTestingConfig = new SpeedTestingConfig();
            $this->SpeedTestingConfig->deserialize($param["SpeedTestingConfig"]);
        }

        if (array_key_exists("SpeedTestingStatistics",$param) and $param["SpeedTestingStatistics"] !== null) {
            $this->SpeedTestingStatistics = new SpeedTestingStatistics();
            $this->SpeedTestingStatistics->deserialize($param["SpeedTestingStatistics"]);
        }
    }
}
