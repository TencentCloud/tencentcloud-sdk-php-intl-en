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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Weight rule
 *
 * @method integer getLessThan() Obtain Division ceiling
 * @method void setLessThan(integer $LessThan) Set Division ceiling
 * @method integer getWeight() Obtain Weight
 * @method void setWeight(integer $Weight) Set Weight
 */
class Rule extends AbstractModel
{
    /**
     * @var integer Division ceiling
     */
    public $LessThan;

    /**
     * @var integer Weight
     */
    public $Weight;

    /**
     * @param integer $LessThan Division ceiling
     * @param integer $Weight Weight
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
        if (array_key_exists("LessThan",$param) and $param["LessThan"] !== null) {
            $this->LessThan = $param["LessThan"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
