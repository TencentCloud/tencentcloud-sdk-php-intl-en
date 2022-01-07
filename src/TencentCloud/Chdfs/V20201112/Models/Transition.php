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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Lifecycle rule transition attribute
 *
 * @method integer getDays() Obtain Trigger time (in days)
 * @method void setDays(integer $Days) Set Trigger time (in days)
 * @method integer getType() Obtain Transition type (`1`: transition to ARCHIVE; `2`: delete; `3`: transition to STANDARD_IA)
 * @method void setType(integer $Type) Set Transition type (`1`: transition to ARCHIVE; `2`: delete; `3`: transition to STANDARD_IA)
 */
class Transition extends AbstractModel
{
    /**
     * @var integer Trigger time (in days)
     */
    public $Days;

    /**
     * @var integer Transition type (`1`: transition to ARCHIVE; `2`: delete; `3`: transition to STANDARD_IA)
     */
    public $Type;

    /**
     * @param integer $Days Trigger time (in days)
     * @param integer $Type Transition type (`1`: transition to ARCHIVE; `2`: delete; `3`: transition to STANDARD_IA)
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
        if (array_key_exists("Days",$param) and $param["Days"] !== null) {
            $this->Days = $param["Days"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
