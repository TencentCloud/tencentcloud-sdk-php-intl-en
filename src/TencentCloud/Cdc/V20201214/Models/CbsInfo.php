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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about purchased CBS
 *
 * @method integer getSize() Obtain CBS storage size, in TB
 * @method void setSize(integer $Size) Set CBS storage size, in TB
 * @method string getType() Obtain CBS storage type, SSD by default
 * @method void setType(string $Type) Set CBS storage type, SSD by default
 */
class CbsInfo extends AbstractModel
{
    /**
     * @var integer CBS storage size, in TB
     */
    public $Size;

    /**
     * @var string CBS storage type, SSD by default
     */
    public $Type;

    /**
     * @param integer $Size CBS storage size, in TB
     * @param string $Type CBS storage type, SSD by default
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
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
