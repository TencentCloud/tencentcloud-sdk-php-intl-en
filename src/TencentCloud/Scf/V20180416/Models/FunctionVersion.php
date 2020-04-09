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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Function version information
 *
 * @method string getVersion() Obtain Function version name
 * @method void setVersion(string $Version) Set Function version name
 * @method string getDescription() Obtain Version description
Note: This field may return null, indicating that no valid values is found.
 * @method void setDescription(string $Description) Set Version description
Note: This field may return null, indicating that no valid values is found.
 */
class FunctionVersion extends AbstractModel
{
    /**
     * @var string Function version name
     */
    public $Version;

    /**
     * @var string Version description
Note: This field may return null, indicating that no valid values is found.
     */
    public $Description;

    /**
     * @param string $Version Function version name
     * @param string $Description Version description
Note: This field may return null, indicating that no valid values is found.
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
