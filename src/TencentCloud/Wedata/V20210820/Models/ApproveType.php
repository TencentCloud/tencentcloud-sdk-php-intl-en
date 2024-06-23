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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Approval Category
 *
 * @method string getType() Obtain Application Category Key
 * @method void setType(string $Type) Set Application Category Key
 * @method string getTypeName() Obtain Type Name
 * @method void setTypeName(string $TypeName) Set Type Name
 * @method string getClassification() Obtain Application Type Key
 * @method void setClassification(string $Classification) Set Application Type Key
 */
class ApproveType extends AbstractModel
{
    /**
     * @var string Application Category Key
     */
    public $Type;

    /**
     * @var string Type Name
     */
    public $TypeName;

    /**
     * @var string Application Type Key
     */
    public $Classification;

    /**
     * @param string $Type Application Category Key
     * @param string $TypeName Type Name
     * @param string $Classification Application Type Key
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }
    }
}
