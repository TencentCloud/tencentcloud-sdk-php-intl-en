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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio/Video task structure
 *
 * @method string getDataId() Obtain Data ID
 * @method void setDataId(string $DataId) Set Data ID
 * @method string getName() Obtain Task name
 * @method void setName(string $Name) Set Task name
 * @method StorageInfo getInput() Obtain Task input
 * @method void setInput(StorageInfo $Input) Set Task input
 */
class TaskInput extends AbstractModel
{
    /**
     * @var string Data ID
     */
    public $DataId;

    /**
     * @var string Task name
     */
    public $Name;

    /**
     * @var StorageInfo Task input
     */
    public $Input;

    /**
     * @param string $DataId Data ID
     * @param string $Name Task name
     * @param StorageInfo $Input Task input
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new StorageInfo();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
