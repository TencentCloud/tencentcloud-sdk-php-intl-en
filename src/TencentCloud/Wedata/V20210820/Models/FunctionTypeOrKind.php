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
 * Function Type or Function Classification
 *
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getZhName() Obtain Function Classification English Name
 * @method void setZhName(string $ZhName) Set Function Classification English Name
 * @method string getEnName() Obtain Function Classification Chinese Name
 * @method void setEnName(string $EnName) Set Function Classification Chinese Name
 */
class FunctionTypeOrKind extends AbstractModel
{
    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Function Classification English Name
     */
    public $ZhName;

    /**
     * @var string Function Classification Chinese Name
     */
    public $EnName;

    /**
     * @param string $Name Name
     * @param string $ZhName Function Classification English Name
     * @param string $EnName Function Classification Chinese Name
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ZhName",$param) and $param["ZhName"] !== null) {
            $this->ZhName = $param["ZhName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }
    }
}
