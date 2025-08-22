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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VOD remux task Output Storage.
 *
 * @method string getType() Obtain VOD remux task output storage type. Only support COS type.
 * @method void setType(string $Type) Set VOD remux task output storage type. Only support COS type.
 * @method CosOutputStorage getCosOutputStorage() Obtain cos output storage information.
 * @method void setCosOutputStorage(CosOutputStorage $CosOutputStorage) Set cos output storage information.
 */
class OutputStorage extends AbstractModel
{
    /**
     * @var string VOD remux task output storage type. Only support COS type.
     */
    public $Type;

    /**
     * @var CosOutputStorage cos output storage information.
     */
    public $CosOutputStorage;

    /**
     * @param string $Type VOD remux task output storage type. Only support COS type.
     * @param CosOutputStorage $CosOutputStorage cos output storage information.
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

        if (array_key_exists("CosOutputStorage",$param) and $param["CosOutputStorage"] !== null) {
            $this->CosOutputStorage = new CosOutputStorage();
            $this->CosOutputStorage->deserialize($param["CosOutputStorage"]);
        }
    }
}
