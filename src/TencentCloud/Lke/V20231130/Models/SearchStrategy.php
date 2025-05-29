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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Knowledge library retrieval strategy.
 *
 * @method integer getStrategyType() Obtain Retrieval strategy type, 0: hybrid retrieval; 1: semantic retrieval.
 * @method void setStrategyType(integer $StrategyType) Set Retrieval strategy type, 0: hybrid retrieval; 1: semantic retrieval.
 * @method boolean getTableEnhancement() Obtain Excel retrieval enhancement switch.
 * @method void setTableEnhancement(boolean $TableEnhancement) Set Excel retrieval enhancement switch.
 */
class SearchStrategy extends AbstractModel
{
    /**
     * @var integer Retrieval strategy type, 0: hybrid retrieval; 1: semantic retrieval.
     */
    public $StrategyType;

    /**
     * @var boolean Excel retrieval enhancement switch.
     */
    public $TableEnhancement;

    /**
     * @param integer $StrategyType Retrieval strategy type, 0: hybrid retrieval; 1: semantic retrieval.
     * @param boolean $TableEnhancement Excel retrieval enhancement switch.
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("TableEnhancement",$param) and $param["TableEnhancement"] !== null) {
            $this->TableEnhancement = $param["TableEnhancement"];
        }
    }
}
