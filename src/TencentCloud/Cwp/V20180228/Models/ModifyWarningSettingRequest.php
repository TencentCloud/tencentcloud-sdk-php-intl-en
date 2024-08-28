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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWarningSetting request structure.
 *
 * @method array getWarningObjects() Obtain Modified alarm setting content
 * @method void setWarningObjects(array $WarningObjects) Set Modified alarm setting content
 */
class ModifyWarningSettingRequest extends AbstractModel
{
    /**
     * @var array Modified alarm setting content
     */
    public $WarningObjects;

    /**
     * @param array $WarningObjects Modified alarm setting content
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
        if (array_key_exists("WarningObjects",$param) and $param["WarningObjects"] !== null) {
            $this->WarningObjects = [];
            foreach ($param["WarningObjects"] as $key => $value){
                $obj = new WarningObject();
                $obj->deserialize($value);
                array_push($this->WarningObjects, $obj);
            }
        }
    }
}
