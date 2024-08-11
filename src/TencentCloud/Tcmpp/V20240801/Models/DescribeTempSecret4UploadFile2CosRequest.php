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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTempSecret4UploadFile2Cos request structure.
 *
 * @method string getBusinessName() Obtain Service name
 * @method void setBusinessName(string $BusinessName) Set Service name
 * @method string getSuffix() Obtain File suffix
 * @method void setSuffix(string $Suffix) Set File suffix
 */
class DescribeTempSecret4UploadFile2CosRequest extends AbstractModel
{
    /**
     * @var string Service name
     */
    public $BusinessName;

    /**
     * @var string File suffix
     */
    public $Suffix;

    /**
     * @param string $BusinessName Service name
     * @param string $Suffix File suffix
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
        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }
    }
}
