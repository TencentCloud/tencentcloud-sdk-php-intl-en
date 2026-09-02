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
 * Number of alarms corresponding to the major category of EDR alarms
 *
 * @method string getAlertCategory() Obtain <p>Major category of alarm</p>
 * @method void setAlertCategory(string $AlertCategory) Set <p>Major category of alarm</p>
 * @method integer getCount() Obtain <p>Number of alarms.</p>
 * @method void setCount(integer $Count) Set <p>Number of alarms.</p>
 */
class EdrAlertCategoryCount extends AbstractModel
{
    /**
     * @var string <p>Major category of alarm</p>
     */
    public $AlertCategory;

    /**
     * @var integer <p>Number of alarms.</p>
     */
    public $Count;

    /**
     * @param string $AlertCategory <p>Major category of alarm</p>
     * @param integer $Count <p>Number of alarms.</p>
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
        if (array_key_exists("AlertCategory",$param) and $param["AlertCategory"] !== null) {
            $this->AlertCategory = $param["AlertCategory"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
