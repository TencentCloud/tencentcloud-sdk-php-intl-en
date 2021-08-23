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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event configuration information
 *
 * @method string getEventName() Obtain Event name
 * @method void setEventName(string $EventName) Set Event name
 * @method TimingSettingsReq getTimingSettings() Obtain Event trigger time settings
 * @method void setTimingSettings(TimingSettingsReq $TimingSettings) Set Event trigger time settings
 * @method EventSettingsReq getEventSettings() Obtain Event configuration
 * @method void setEventSettings(EventSettingsReq $EventSettings) Set Event configuration
 */
class PlanReq extends AbstractModel
{
    /**
     * @var string Event name
     */
    public $EventName;

    /**
     * @var TimingSettingsReq Event trigger time settings
     */
    public $TimingSettings;

    /**
     * @var EventSettingsReq Event configuration
     */
    public $EventSettings;

    /**
     * @param string $EventName Event name
     * @param TimingSettingsReq $TimingSettings Event trigger time settings
     * @param EventSettingsReq $EventSettings Event configuration
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("TimingSettings",$param) and $param["TimingSettings"] !== null) {
            $this->TimingSettings = new TimingSettingsReq();
            $this->TimingSettings->deserialize($param["TimingSettings"]);
        }

        if (array_key_exists("EventSettings",$param) and $param["EventSettings"] !== null) {
            $this->EventSettings = new EventSettingsReq();
            $this->EventSettings->deserialize($param["EventSettings"]);
        }
    }
}
