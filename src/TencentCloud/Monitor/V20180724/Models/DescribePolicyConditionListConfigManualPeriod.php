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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList.ConfigManual.Period
 *
 * @method integer getDefault() Obtain Default period in seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method void setDefault(integer $Default) Set Default period in seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method array getKeys() Obtain Custom periods in seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method void setKeys(array $Keys) Set Custom periods in seconds.
Note: This field may return null, indicating that no valid value was found.
 * @method boolean getNeed() Obtain Required or not.
 * @method void setNeed(boolean $Need) Set Required or not.
 */
class DescribePolicyConditionListConfigManualPeriod extends AbstractModel
{
    /**
     * @var integer Default period in seconds.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Default;

    /**
     * @var array Custom periods in seconds.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Keys;

    /**
     * @var boolean Required or not.
     */
    public $Need;

    /**
     * @param integer $Default Default period in seconds.
Note: This field may return null, indicating that no valid value was found.
     * @param array $Keys Custom periods in seconds.
Note: This field may return null, indicating that no valid value was found.
     * @param boolean $Need Required or not.
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
        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Need",$param) and $param["Need"] !== null) {
            $this->Need = $param["Need"];
        }
    }
}
