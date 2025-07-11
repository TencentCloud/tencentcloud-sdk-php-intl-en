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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance configuration.
 *
 * @method string getDailyInspection() Obtain Whether to enable database inspection. Valid values: Yes, No.
 * @method void setDailyInspection(string $DailyInspection) Set Whether to enable database inspection. Valid values: Yes, No.
 * @method string getOverviewDisplay() Obtain Whether to enable instance overview. Valid values: Yes, No.
 * @method void setOverviewDisplay(string $OverviewDisplay) Set Whether to enable instance overview. Valid values: Yes, No.
 * @method array getKeyDelimiters() Obtain Custom big key analysis separator for Redis only
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyDelimiters(array $KeyDelimiters) Set Custom big key analysis separator for Redis only
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceConfs extends AbstractModel
{
    /**
     * @var string Whether to enable database inspection. Valid values: Yes, No.
     */
    public $DailyInspection;

    /**
     * @var string Whether to enable instance overview. Valid values: Yes, No.
     */
    public $OverviewDisplay;

    /**
     * @var array Custom big key analysis separator for Redis only
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyDelimiters;

    /**
     * @param string $DailyInspection Whether to enable database inspection. Valid values: Yes, No.
     * @param string $OverviewDisplay Whether to enable instance overview. Valid values: Yes, No.
     * @param array $KeyDelimiters Custom big key analysis separator for Redis only
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
        if (array_key_exists("DailyInspection",$param) and $param["DailyInspection"] !== null) {
            $this->DailyInspection = $param["DailyInspection"];
        }

        if (array_key_exists("OverviewDisplay",$param) and $param["OverviewDisplay"] !== null) {
            $this->OverviewDisplay = $param["OverviewDisplay"];
        }

        if (array_key_exists("KeyDelimiters",$param) and $param["KeyDelimiters"] !== null) {
            $this->KeyDelimiters = $param["KeyDelimiters"];
        }
    }
}
