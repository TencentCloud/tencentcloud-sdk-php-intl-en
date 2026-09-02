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
 * ModifyNotifySettingAk request structure.
 *
 * @method array getAlert() Obtain <p>Alarm type/severity (Type: AbnBehavior - exception behavior, LeakDetect - leakage detection; Severity: 1 - notification, 2 - low risk, 3 - medium risk, 4 - high risk, 5 - critical)</p>
 * @method void setAlert(array $Alert) Set <p>Alarm type/severity (Type: AbnBehavior - exception behavior, LeakDetect - leakage detection; Severity: 1 - notification, 2 - low risk, 3 - medium risk, 4 - high risk, 5 - critical)</p>
 * @method integer getAlertGranularity() Obtain <p>Alarm notification granularity</p><p>Enumeration values:</p><ul><li>0: Push by alert aggregation</li><li>1: Push by invocation record</li></ul>
 * @method void setAlertGranularity(integer $AlertGranularity) Set <p>Alarm notification granularity</p><p>Enumeration values:</p><ul><li>0: Push by alert aggregation</li><li>1: Push by invocation record</li></ul>
 * @method array getAsset() Obtain <p>Asset event</p><p>Enumeration values:</p><ul><li>NewAk: newly-added AK</li></ul>
 * @method void setAsset(array $Asset) Set <p>Asset event</p><p>Enumeration values:</p><ul><li>NewAk: newly-added AK</li></ul>
 * @method string getBeginTime() Obtain <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
 * @method string getEndTime() Obtain <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
 * @method void setEndTime(string $EndTime) Set <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
 */
class ModifyNotifySettingAkRequest extends AbstractModel
{
    /**
     * @var array <p>Alarm type/severity (Type: AbnBehavior - exception behavior, LeakDetect - leakage detection; Severity: 1 - notification, 2 - low risk, 3 - medium risk, 4 - high risk, 5 - critical)</p>
     */
    public $Alert;

    /**
     * @var integer <p>Alarm notification granularity</p><p>Enumeration values:</p><ul><li>0: Push by alert aggregation</li><li>1: Push by invocation record</li></ul>
     */
    public $AlertGranularity;

    /**
     * @var array <p>Asset event</p><p>Enumeration values:</p><ul><li>NewAk: newly-added AK</li></ul>
     */
    public $Asset;

    /**
     * @var string <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
     */
    public $BeginTime;

    /**
     * @var string <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
     */
    public $EndTime;

    /**
     * @param array $Alert <p>Alarm type/severity (Type: AbnBehavior - exception behavior, LeakDetect - leakage detection; Severity: 1 - notification, 2 - low risk, 3 - medium risk, 4 - high risk, 5 - critical)</p>
     * @param integer $AlertGranularity <p>Alarm notification granularity</p><p>Enumeration values:</p><ul><li>0: Push by alert aggregation</li><li>1: Push by invocation record</li></ul>
     * @param array $Asset <p>Asset event</p><p>Enumeration values:</p><ul><li>NewAk: newly-added AK</li></ul>
     * @param string $BeginTime <p>Notification start time</p><p>Parameter format: hh:mm:ss</p>
     * @param string $EndTime <p>Notification end time</p><p>Parameter format: hh:mm:ss</p>
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
        if (array_key_exists("Alert",$param) and $param["Alert"] !== null) {
            $this->Alert = [];
            foreach ($param["Alert"] as $key => $value){
                $obj = new LevelOption();
                $obj->deserialize($value);
                array_push($this->Alert, $obj);
            }
        }

        if (array_key_exists("AlertGranularity",$param) and $param["AlertGranularity"] !== null) {
            $this->AlertGranularity = $param["AlertGranularity"];
        }

        if (array_key_exists("Asset",$param) and $param["Asset"] !== null) {
            $this->Asset = $param["Asset"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
