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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSmsSignList request structure.
 *
 * @method integer getInternational() Obtain Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method void setInternational(integer $International) Set Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
 * @method array getSignIdSet() Obtain Signature ID array.
Note: the maximum length of the array is 100 by default.
 * @method void setSignIdSet(array $SignIdSet) Set Signature ID array.
Note: the maximum length of the array is 100 by default.
 * @method integer getLimit() Obtain Upper limit. Maximum value: 100.
Note: it is 10 by default and is enabled when SignIdSet is empty.
 * @method void setLimit(integer $Limit) Set Upper limit. Maximum value: 100.
Note: it is 10 by default and is enabled when SignIdSet is empty.
 * @method integer getOffset() Obtain Offset.
Note: it is 0 by default and is enabled when SignIdSet is empty.
 * @method void setOffset(integer $Offset) Set Offset.
Note: it is 0 by default and is enabled when SignIdSet is empty.
 */
class DescribeSmsSignListRequest extends AbstractModel
{
    /**
     * @var integer Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
     */
    public $International;

    /**
     * @var array Signature ID array.
Note: the maximum length of the array is 100 by default.
     */
    public $SignIdSet;

    /**
     * @var integer Upper limit. Maximum value: 100.
Note: it is 10 by default and is enabled when SignIdSet is empty.
     */
    public $Limit;

    /**
     * @var integer Offset.
Note: it is 0 by default and is enabled when SignIdSet is empty.
     */
    public $Offset;

    /**
     * @param integer $International Whether it is Global SMS:
0: Mainland China SMS.
1: Global SMS.
     * @param array $SignIdSet Signature ID array.
Note: the maximum length of the array is 100 by default.
     * @param integer $Limit Upper limit. Maximum value: 100.
Note: it is 10 by default and is enabled when SignIdSet is empty.
     * @param integer $Offset Offset.
Note: it is 0 by default and is enabled when SignIdSet is empty.
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
        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("SignIdSet",$param) and $param["SignIdSet"] !== null) {
            $this->SignIdSet = $param["SignIdSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
