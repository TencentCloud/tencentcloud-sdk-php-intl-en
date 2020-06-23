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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckSimilarPerson request structure.
 *
 * @method array getGroupIds() Obtain List of groups to be checked. 
There can be up to 2 million persons in one group and up to 10 groups.
 * @method void setGroupIds(array $GroupIds) Set List of groups to be checked. 
There can be up to 2 million persons in one group and up to 10 groups.
 * @method integer getUniquePersonControl() Obtain Control over the strictness of duplicate person check.
1: archive sorting with high strictness, which can eliminate more duplicate identities but leads to higher false elimination rate for non-duplicate identities.
2: archive sorting with low strictness, which leads to lower false elimination rate for non-duplicate identities and lower elimination rate for duplicate identities.
 * @method void setUniquePersonControl(integer $UniquePersonControl) Set Control over the strictness of duplicate person check.
1: archive sorting with high strictness, which can eliminate more duplicate identities but leads to higher false elimination rate for non-duplicate identities.
2: archive sorting with low strictness, which leads to lower false elimination rate for non-duplicate identities and lower elimination rate for duplicate identities.
 */
class CheckSimilarPersonRequest extends AbstractModel
{
    /**
     * @var array List of groups to be checked. 
There can be up to 2 million persons in one group and up to 10 groups.
     */
    public $GroupIds;

    /**
     * @var integer Control over the strictness of duplicate person check.
1: archive sorting with high strictness, which can eliminate more duplicate identities but leads to higher false elimination rate for non-duplicate identities.
2: archive sorting with low strictness, which leads to lower false elimination rate for non-duplicate identities and lower elimination rate for duplicate identities.
     */
    public $UniquePersonControl;

    /**
     * @param array $GroupIds List of groups to be checked. 
There can be up to 2 million persons in one group and up to 10 groups.
     * @param integer $UniquePersonControl Control over the strictness of duplicate person check.
1: archive sorting with high strictness, which can eliminate more duplicate identities but leads to higher false elimination rate for non-duplicate identities.
2: archive sorting with low strictness, which leads to lower false elimination rate for non-duplicate identities and lower elimination rate for duplicate identities.
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("UniquePersonControl",$param) and $param["UniquePersonControl"] !== null) {
            $this->UniquePersonControl = $param["UniquePersonControl"];
        }
    }
}
