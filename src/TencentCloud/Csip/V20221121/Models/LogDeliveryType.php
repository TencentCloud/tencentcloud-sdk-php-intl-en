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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log type for log shipping.
 *
 * @method integer getLogType() Obtain Log shipping type.
 * @method void setLogType(integer $LogType) Set Log shipping type.
 * @method string getLogTypeName() Obtain Name of the shipped log type.
 * @method void setLogTypeName(string $LogTypeName) Set Name of the shipped log type.
 * @method string getLogTypeDesc() Obtain Description of the shipped log type.
 * @method void setLogTypeDesc(string $LogTypeDesc) Set Description of the shipped log type.
 */
class LogDeliveryType extends AbstractModel
{
    /**
     * @var integer Log shipping type.
     */
    public $LogType;

    /**
     * @var string Name of the shipped log type.
     */
    public $LogTypeName;

    /**
     * @var string Description of the shipped log type.
     */
    public $LogTypeDesc;

    /**
     * @param integer $LogType Log shipping type.
     * @param string $LogTypeName Name of the shipped log type.
     * @param string $LogTypeDesc Description of the shipped log type.
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogTypeName",$param) and $param["LogTypeName"] !== null) {
            $this->LogTypeName = $param["LogTypeName"];
        }

        if (array_key_exists("LogTypeDesc",$param) and $param["LogTypeDesc"] !== null) {
            $this->LogTypeDesc = $param["LogTypeDesc"];
        }
    }
}
