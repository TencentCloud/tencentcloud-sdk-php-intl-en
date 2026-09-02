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
 * Number of policies corresponding to the EDR attack phase.
 *
 * @method string getAttackStage() Obtain <p>Attack phase</p>
 * @method void setAttackStage(string $AttackStage) Set <p>Attack phase</p>
 * @method integer getCount() Obtain <p>Policy count</p>
 * @method void setCount(integer $Count) Set <p>Policy count</p>
 */
class AttackStageCount extends AbstractModel
{
    /**
     * @var string <p>Attack phase</p>
     */
    public $AttackStage;

    /**
     * @var integer <p>Policy count</p>
     */
    public $Count;

    /**
     * @param string $AttackStage <p>Attack phase</p>
     * @param integer $Count <p>Policy count</p>
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
        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
