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
 * Cloud resource configuration detection check type statistics
 *
 * @method string getCheckType() Obtain <p>Check type</p>
 * @method void setCheckType(string $CheckType) Set <p>Check type</p>
 * @method integer getCount() Obtain <p>Number of associated check items</p>
 * @method void setCount(integer $Count) Set <p>Number of associated check items</p>
 */
class ComplianceCheckTypeItem extends AbstractModel
{
    /**
     * @var string <p>Check type</p>
     */
    public $CheckType;

    /**
     * @var integer <p>Number of associated check items</p>
     */
    public $Count;

    /**
     * @param string $CheckType <p>Check type</p>
     * @param integer $Count <p>Number of associated check items</p>
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
        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
