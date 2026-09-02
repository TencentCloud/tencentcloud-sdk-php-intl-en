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
 * Dspm identity associated asset statistics
 *
 * @method integer getManagerCount() Obtain Number of asset administrators associated.
 * @method void setManagerCount(integer $ManagerCount) Set Number of asset administrators associated.
 * @method integer getMemberCount() Obtain Number of ordinary members of associated assets.
 * @method void setMemberCount(integer $MemberCount) Set Number of ordinary members of associated assets.
 */
class DspmIdentifyAssetStatistic extends AbstractModel
{
    /**
     * @var integer Number of asset administrators associated.
     */
    public $ManagerCount;

    /**
     * @var integer Number of ordinary members of associated assets.
     */
    public $MemberCount;

    /**
     * @param integer $ManagerCount Number of asset administrators associated.
     * @param integer $MemberCount Number of ordinary members of associated assets.
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
        if (array_key_exists("ManagerCount",$param) and $param["ManagerCount"] !== null) {
            $this->ManagerCount = $param["ManagerCount"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }
    }
}
