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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned description of the multi-domain blocklist/allowlist
 *
 * @method integer getTotalCount() Obtain Total number
 * @method void setTotalCount(integer $TotalCount) Set Total number
 * @method array getRes() Obtain Entries of blocklist/allowlist
 * @method void setRes(array $Res) Set Entries of blocklist/allowlist
 */
class BatchIpAccessControlData extends AbstractModel
{
    /**
     * @var integer Total number
     */
    public $TotalCount;

    /**
     * @var array Entries of blocklist/allowlist
     */
    public $Res;

    /**
     * @param integer $TotalCount Total number
     * @param array $Res Entries of blocklist/allowlist
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Res",$param) and $param["Res"] !== null) {
            $this->Res = [];
            foreach ($param["Res"] as $key => $value){
                $obj = new BatchIpAccessControlItem();
                $obj->deserialize($value);
                array_push($this->Res, $obj);
            }
        }
    }
}
