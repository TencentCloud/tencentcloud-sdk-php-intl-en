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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DropDMSDatabase request structure.
 *
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method boolean getDeleteData() Obtain Whether to delete the data.
 * @method void setDeleteData(boolean $DeleteData) Set Whether to delete the data.
 * @method boolean getCascade() Obtain Whether to use cascade delete.
 * @method void setCascade(boolean $Cascade) Set Whether to use cascade delete.
 */
class DropDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @var boolean Whether to delete the data.
     */
    public $DeleteData;

    /**
     * @var boolean Whether to use cascade delete.
     */
    public $Cascade;

    /**
     * @param string $Name Database name
     * @param boolean $DeleteData Whether to delete the data.
     * @param boolean $Cascade Whether to use cascade delete.
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

        if (array_key_exists("DeleteData",$param) and $param["DeleteData"] !== null) {
            $this->DeleteData = $param["DeleteData"];
        }

        if (array_key_exists("Cascade",$param) and $param["Cascade"] !== null) {
            $this->Cascade = $param["Cascade"];
        }
    }
}
