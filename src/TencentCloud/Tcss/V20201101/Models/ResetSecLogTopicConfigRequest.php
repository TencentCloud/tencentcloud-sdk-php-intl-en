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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetSecLogTopicConfig request structure.
 *
 * @method string getConfigType() Obtain Configuration type. Valid values: `ckafka`, `cls`.
 * @method void setConfigType(string $ConfigType) Set Configuration type. Valid values: `ckafka`, `cls`.
 * @method string getLogType() Obtain Log type
 * @method void setLogType(string $LogType) Set Log type
 */
class ResetSecLogTopicConfigRequest extends AbstractModel
{
    /**
     * @var string Configuration type. Valid values: `ckafka`, `cls`.
     */
    public $ConfigType;

    /**
     * @var string Log type
     */
    public $LogType;

    /**
     * @param string $ConfigType Configuration type. Valid values: `ckafka`, `cls`.
     * @param string $LogType Log type
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
        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
