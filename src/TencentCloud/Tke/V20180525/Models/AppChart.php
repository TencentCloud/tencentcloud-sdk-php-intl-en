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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supported charts for the app.
 *
 * @method string getName() Obtain chart name.
 * @method void setName(string $Name) Set chart name.
 * @method string getLabel() Obtain Tag of the chart.
 * @method void setLabel(string $Label) Set Tag of the chart.
 * @method string getLatestVersion() Obtain Version of the chart.
 * @method void setLatestVersion(string $LatestVersion) Set Version of the chart.
 */
class AppChart extends AbstractModel
{
    /**
     * @var string chart name.
     */
    public $Name;

    /**
     * @var string Tag of the chart.
     */
    public $Label;

    /**
     * @var string Version of the chart.
     */
    public $LatestVersion;

    /**
     * @param string $Name chart name.
     * @param string $Label Tag of the chart.
     * @param string $LatestVersion Version of the chart.
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

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }
    }
}
