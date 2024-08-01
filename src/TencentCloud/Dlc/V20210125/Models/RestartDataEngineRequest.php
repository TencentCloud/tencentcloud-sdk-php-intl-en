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
 * RestartDataEngine request structure.
 *
 * @method string getDataEngineId() Obtain Engine ID
 * @method void setDataEngineId(string $DataEngineId) Set Engine ID
 * @method boolean getForcedOperation() Obtain Whether to restart by force and ignore tasks
 * @method void setForcedOperation(boolean $ForcedOperation) Set Whether to restart by force and ignore tasks
 */
class RestartDataEngineRequest extends AbstractModel
{
    /**
     * @var string Engine ID
     */
    public $DataEngineId;

    /**
     * @var boolean Whether to restart by force and ignore tasks
     */
    public $ForcedOperation;

    /**
     * @param string $DataEngineId Engine ID
     * @param boolean $ForcedOperation Whether to restart by force and ignore tasks
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("ForcedOperation",$param) and $param["ForcedOperation"] !== null) {
            $this->ForcedOperation = $param["ForcedOperation"];
        }
    }
}
