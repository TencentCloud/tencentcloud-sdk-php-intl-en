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
 * Used to add COS information on the purchase page.
 *
 * @method integer getSize() Obtain COS size, in TB
 * @method void setSize(integer $Size) Set COS size, in TB
 * @method string getType() Obtain COS type, COS by default
 * @method void setType(string $Type) Set COS type, COS by default
 */
class CosInfo extends AbstractModel
{
    /**
     * @var integer COS size, in TB
     */
    public $Size;

    /**
     * @var string COS type, COS by default
     */
    public $Type;

    /**
     * @param integer $Size COS size, in TB
     * @param string $Type COS type, COS by default
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
