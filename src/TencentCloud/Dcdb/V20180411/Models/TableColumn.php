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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database column information
 *
 * @method string getCol() Obtain Column name
 * @method void setCol(string $Col) Set Column name
 * @method string getType() Obtain Column type
 * @method void setType(string $Type) Set Column type
 */
class TableColumn extends AbstractModel
{
    /**
     * @var string Column name
     */
    public $Col;

    /**
     * @var string Column type
     */
    public $Type;

    /**
     * @param string $Col Column name
     * @param string $Type Column type
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
        if (array_key_exists("Col",$param) and $param["Col"] !== null) {
            $this->Col = $param["Col"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
