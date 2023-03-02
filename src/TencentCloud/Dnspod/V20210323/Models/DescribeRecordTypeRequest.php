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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordType request structure.
 *
 * @method string getDomainGrade() Obtain Domain level.
+ Original plan. Valid values: `D_FREE` (Free Plan); `D_PLUS` (Individual Plus Plan); `D_EXTRA` (Enterprise 1 Plan); `D_EXPERT` (Enterprise 2 Plan); `D_ULTRA` (Enterprise 3 Plan).
+ New plan. Valid values: `DP_FREE` (Free Version); `DP_PLUS` (Professional); `DP_EXTRA` (Enterprise Basic); `DP_EXPERT` (Enterprise); `DP_ULTRA` (Ultimate).
 * @method void setDomainGrade(string $DomainGrade) Set Domain level.
+ Original plan. Valid values: `D_FREE` (Free Plan); `D_PLUS` (Individual Plus Plan); `D_EXTRA` (Enterprise 1 Plan); `D_EXPERT` (Enterprise 2 Plan); `D_ULTRA` (Enterprise 3 Plan).
+ New plan. Valid values: `DP_FREE` (Free Version); `DP_PLUS` (Professional); `DP_EXTRA` (Enterprise Basic); `DP_EXPERT` (Enterprise); `DP_ULTRA` (Ultimate).
 */
class DescribeRecordTypeRequest extends AbstractModel
{
    /**
     * @var string Domain level.
+ Original plan. Valid values: `D_FREE` (Free Plan); `D_PLUS` (Individual Plus Plan); `D_EXTRA` (Enterprise 1 Plan); `D_EXPERT` (Enterprise 2 Plan); `D_ULTRA` (Enterprise 3 Plan).
+ New plan. Valid values: `DP_FREE` (Free Version); `DP_PLUS` (Professional); `DP_EXTRA` (Enterprise Basic); `DP_EXPERT` (Enterprise); `DP_ULTRA` (Ultimate).
     */
    public $DomainGrade;

    /**
     * @param string $DomainGrade Domain level.
+ Original plan. Valid values: `D_FREE` (Free Plan); `D_PLUS` (Individual Plus Plan); `D_EXTRA` (Enterprise 1 Plan); `D_EXPERT` (Enterprise 2 Plan); `D_ULTRA` (Enterprise 3 Plan).
+ New plan. Valid values: `DP_FREE` (Free Version); `DP_PLUS` (Professional); `DP_EXTRA` (Enterprise Basic); `DP_EXPERT` (Enterprise); `DP_ULTRA` (Ultimate).
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
        if (array_key_exists("DomainGrade",$param) and $param["DomainGrade"] !== null) {
            $this->DomainGrade = $param["DomainGrade"];
        }
    }
}
