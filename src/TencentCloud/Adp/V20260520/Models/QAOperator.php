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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QA operator information
 *
 * @method Operator getModifier() Obtain <p>Modifier</p>
 * @method void setModifier(Operator $Modifier) Set <p>Modifier</p>
 * @method QAPermission getPermission() Obtain <p>Operation permission</p>
 * @method void setPermission(QAPermission $Permission) Set <p>Operation permission</p>
 */
class QAOperator extends AbstractModel
{
    /**
     * @var Operator <p>Modifier</p>
     */
    public $Modifier;

    /**
     * @var QAPermission <p>Operation permission</p>
     */
    public $Permission;

    /**
     * @param Operator $Modifier <p>Modifier</p>
     * @param QAPermission $Permission <p>Operation permission</p>
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
        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = new Operator();
            $this->Modifier->deserialize($param["Modifier"]);
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = new QAPermission();
            $this->Permission->deserialize($param["Permission"]);
        }
    }
}
