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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio/Video task structure
 *
 * @method string getDataId() Obtain This field is optional and indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
 * @method void setDataId(string $DataId) Set This field is optional and indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
 * @method string getName() Obtain This field is optional and indicates the name of a moderation task for subsequent query and management of moderation tasks.
 * @method void setName(string $Name) Set This field is optional and indicates the name of a moderation task for subsequent query and management of moderation tasks.
 * @method StorageInfo getInput() Obtain This field is required and indicates the access parameter of the moderated file, which is used to get the moderated media file and contains the access type and address.
 * @method void setInput(StorageInfo $Input) Set This field is required and indicates the access parameter of the moderated file, which is used to get the moderated media file and contains the access type and address.
 */
class TaskInput extends AbstractModel
{
    /**
     * @var string This field is optional and indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
     */
    public $DataId;

    /**
     * @var string This field is optional and indicates the name of a moderation task for subsequent query and management of moderation tasks.
     */
    public $Name;

    /**
     * @var StorageInfo This field is required and indicates the access parameter of the moderated file, which is used to get the moderated media file and contains the access type and address.
     */
    public $Input;

    /**
     * @param string $DataId This field is optional and indicates the data ID assigned by you to the object to be detected for easier file identification and management.<br>It **can contain up to 64 letters, digits, and special symbols (_-@#)**.
     * @param string $Name This field is optional and indicates the name of a moderation task for subsequent query and management of moderation tasks.
     * @param StorageInfo $Input This field is required and indicates the access parameter of the moderated file, which is used to get the moderated media file and contains the access type and address.
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
