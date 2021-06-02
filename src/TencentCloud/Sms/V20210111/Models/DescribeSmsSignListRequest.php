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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSmsSignList request structure.
 *
 * @method array getSignIdSet() Obtain Signature ID array.
Note: the maximum length of the array is 100 by default.
 * @method void setSignIdSet(array $SignIdSet) Set Signature ID array.
Note: the maximum length of the array is 100 by default.
 * @method integer getInternational() Obtain Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method void setInternational(integer $International) Set Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 */
class DescribeSmsSignListRequest extends AbstractModel
{
    /**
     * @var array Signature ID array.
Note: the maximum length of the array is 100 by default.
     */
    public $SignIdSet;

    /**
     * @var integer Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
     */
    public $International;

    /**
     * @param array $SignIdSet Signature ID array.
Note: the maximum length of the array is 100 by default.
     * @param integer $International Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
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
        if (array_key_exists("SignIdSet",$param) and $param["SignIdSet"] !== null) {
            $this->SignIdSet = $param["SignIdSet"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }
    }
}
