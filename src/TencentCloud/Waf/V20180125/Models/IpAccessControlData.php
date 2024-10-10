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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data Encapsulation
 *
 * @method array getRes() Obtain IP Blocklist/Allowlist

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRes(array $Res) Set IP Blocklist/Allowlist

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalCount() Obtain Counting.
 * @method void setTotalCount(integer $TotalCount) Set Counting.
 */
class IpAccessControlData extends AbstractModel
{
    /**
     * @var array IP Blocklist/Allowlist

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Res;

    /**
     * @var integer Counting.
     */
    public $TotalCount;

    /**
     * @param array $Res IP Blocklist/Allowlist

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalCount Counting.
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
        if (array_key_exists("Res",$param) and $param["Res"] !== null) {
            $this->Res = [];
            foreach ($param["Res"] as $key => $value){
                $obj = new IpAccessControlItem();
                $obj->deserialize($value);
                array_push($this->Res, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
