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
 * <p>Basic model author info (deprecated)</p>
 *
 * @method string getAlias() Obtain <p>Author alias.</p>
 * @method void setAlias(string $Alias) Set <p>Author alias.</p>
 * @method string getName() Obtain <p>Author flag</p>
 * @method void setName(string $Name) Set <p>Author flag</p>
 */
class ModelDeveloperBasic extends AbstractModel
{
    /**
     * @var string <p>Author alias.</p>
     */
    public $Alias;

    /**
     * @var string <p>Author flag</p>
     */
    public $Name;

    /**
     * @param string $Alias <p>Author alias.</p>
     * @param string $Name <p>Author flag</p>
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
