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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed information of a knowledge library capacity pie chart.
 *
 * @method string getAppName() Obtain Current application name.
 * @method void setAppName(string $AppName) Set Current application name.
 * @method string getUsedCharSize() Obtain Number of characters used by the current application.
 * @method void setUsedCharSize(string $UsedCharSize) Set Number of characters used by the current application.
 * @method float getProportion() Obtain Proportion of the current application in total usage.
 * @method void setProportion(float $Proportion) Set Proportion of the current application in total usage.
 */
class KnowledgeCapacityPieGraphDetail extends AbstractModel
{
    /**
     * @var string Current application name.
     */
    public $AppName;

    /**
     * @var string Number of characters used by the current application.
     */
    public $UsedCharSize;

    /**
     * @var float Proportion of the current application in total usage.
     */
    public $Proportion;

    /**
     * @param string $AppName Current application name.
     * @param string $UsedCharSize Number of characters used by the current application.
     * @param float $Proportion Proportion of the current application in total usage.
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UsedCharSize",$param) and $param["UsedCharSize"] !== null) {
            $this->UsedCharSize = $param["UsedCharSize"];
        }

        if (array_key_exists("Proportion",$param) and $param["Proportion"] !== null) {
            $this->Proportion = $param["Proportion"];
        }
    }
}
