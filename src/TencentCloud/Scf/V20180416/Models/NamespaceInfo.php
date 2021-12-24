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
 * Namespace
 *
 * @method string getModTime() Obtain Creation time of the namespace
 * @method void setModTime(string $ModTime) Set Creation time of the namespace
 * @method string getAddTime() Obtain Modification time of the namespace
 * @method void setAddTime(string $AddTime) Set Modification time of the namespace
 * @method string getDescription() Obtain Namespace description
 * @method void setDescription(string $Description) Set Namespace description
 * @method string getName() Obtain Namespace name
 * @method void setName(string $Name) Set Namespace name
 * @method string getType() Obtain The default value is default. TCB indicates that the namespace is developed and created through the mini-program cloud.
 * @method void setType(string $Type) Set The default value is default. TCB indicates that the namespace is developed and created through the mini-program cloud.
 */
class NamespaceInfo extends AbstractModel
{
    /**
     * @var string Creation time of the namespace
     */
    public $ModTime;

    /**
     * @var string Modification time of the namespace
     */
    public $AddTime;

    /**
     * @var string Namespace description
     */
    public $Description;

    /**
     * @var string Namespace name
     */
    public $Name;

    /**
     * @var string The default value is default. TCB indicates that the namespace is developed and created through the mini-program cloud.
     */
    public $Type;

    /**
     * @param string $ModTime Creation time of the namespace
     * @param string $AddTime Modification time of the namespace
     * @param string $Description Namespace description
     * @param string $Name Namespace name
     * @param string $Type The default value is default. TCB indicates that the namespace is developed and created through the mini-program cloud.
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
