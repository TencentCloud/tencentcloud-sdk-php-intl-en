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
 * ModifyDataEngineDescription request structure.
 *
 * @method string getDataEngineName() Obtain Name of the engine to be modified
 * @method void setDataEngineName(string $DataEngineName) Set Name of the engine to be modified
 * @method string getMessage() Obtain Engine description and its maximum length is 250 characters.
 * @method void setMessage(string $Message) Set Engine description and its maximum length is 250 characters.
 */
class ModifyDataEngineDescriptionRequest extends AbstractModel
{
    /**
     * @var string Name of the engine to be modified
     */
    public $DataEngineName;

    /**
     * @var string Engine description and its maximum length is 250 characters.
     */
    public $Message;

    /**
     * @param string $DataEngineName Name of the engine to be modified
     * @param string $Message Engine description and its maximum length is 250 characters.
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
