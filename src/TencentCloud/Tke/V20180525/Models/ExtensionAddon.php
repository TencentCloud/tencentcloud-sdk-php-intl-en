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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the add-on selected for installation during cluster creation
 *
 * @method string getAddonName() Obtain Add-on name
 * @method void setAddonName(string $AddonName) Set Add-on name
 * @method string getAddonParam() Obtain Add-on information (description of the add-on resource object in JSON string format)
 * @method void setAddonParam(string $AddonParam) Set Add-on information (description of the add-on resource object in JSON string format)
 */
class ExtensionAddon extends AbstractModel
{
    /**
     * @var string Add-on name
     */
    public $AddonName;

    /**
     * @var string Add-on information (description of the add-on resource object in JSON string format)
     */
    public $AddonParam;

    /**
     * @param string $AddonName Add-on name
     * @param string $AddonParam Add-on information (description of the add-on resource object in JSON string format)
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
        if (array_key_exists("AddonName",$param) and $param["AddonName"] !== null) {
            $this->AddonName = $param["AddonName"];
        }

        if (array_key_exists("AddonParam",$param) and $param["AddonParam"] !== null) {
            $this->AddonParam = $param["AddonParam"];
        }
    }
}
