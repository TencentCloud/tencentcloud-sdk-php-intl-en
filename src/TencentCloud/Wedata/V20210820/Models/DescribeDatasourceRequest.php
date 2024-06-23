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
 * DescribeDatasource request structure.
 *
 * @method integer getId() Obtain Unique Object ID
 * @method void setId(integer $Id) Set Unique Object ID
 * @method string getEnv() Obtain production: production, development: development
 * @method void setEnv(string $Env) Set production: production, development: development
 */
class DescribeDatasourceRequest extends AbstractModel
{
    /**
     * @var integer Unique Object ID
     */
    public $Id;

    /**
     * @var string production: production, development: development
     */
    public $Env;

    /**
     * @param integer $Id Unique Object ID
     * @param string $Env production: production, development: development
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
