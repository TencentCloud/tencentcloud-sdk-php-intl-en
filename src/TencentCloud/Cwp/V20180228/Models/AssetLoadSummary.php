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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource load overview
 *
 * @method array getCounts() Obtain Load amount array, in ascending order:
[
0% or unknown quantity
0%～20%
20%～50%
50%～80%
80%～100%
]
 * @method void setCounts(array $Counts) Set Load amount array, in ascending order:
[
0% or unknown quantity
0%～20%
20%～50%
50%～80%
80%～100%
]
 * @method array getTop5() Obtain Top 5 Load
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTop5(array $Top5) Set Top 5 Load
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetLoadSummary extends AbstractModel
{
    /**
     * @var array Load amount array, in ascending order:
[
0% or unknown quantity
0%～20%
20%～50%
50%～80%
80%～100%
]
     */
    public $Counts;

    /**
     * @var array Top 5 Load
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Top5;

    /**
     * @param array $Counts Load amount array, in ascending order:
[
0% or unknown quantity
0%～20%
20%～50%
50%～80%
80%～100%
]
     * @param array $Top5 Top 5 Load
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Counts",$param) and $param["Counts"] !== null) {
            $this->Counts = $param["Counts"];
        }

        if (array_key_exists("Top5",$param) and $param["Top5"] !== null) {
            $this->Top5 = [];
            foreach ($param["Top5"] as $key => $value){
                $obj = new AssetLoadDetail();
                $obj->deserialize($value);
                array_push($this->Top5, $obj);
            }
        }
    }
}
