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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClsLogSet request structure.
 *
 * @method string getLogsetName() Obtain Logset name, which must be unique among all CLS logsets; default value: clb_logset
 * @method void setLogsetName(string $LogsetName) Set Logset name, which must be unique among all CLS logsets; default value: clb_logset
 * @method integer getPeriod() Obtain Logset retention period (in days)
 * @method void setPeriod(integer $Period) Set Logset retention period (in days)
 * @method string getLogsetType() Obtain Logset type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
 * @method void setLogsetType(string $LogsetType) Set Logset type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
 */
class CreateClsLogSetRequest extends AbstractModel
{
    /**
     * @var string Logset name, which must be unique among all CLS logsets; default value: clb_logset
     */
    public $LogsetName;

    /**
     * @var integer Logset retention period (in days)
     */
    public $Period;

    /**
     * @var string Logset type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
     */
    public $LogsetType;

    /**
     * @param string $LogsetName Logset name, which must be unique among all CLS logsets; default value: clb_logset
     * @param integer $Period Logset retention period (in days)
     * @param string $LogsetType Logset type. Valid values: ACCESS (access logs; default value) and HEALTH (health check logs).
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
        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("LogsetType",$param) and $param["LogsetType"] !== null) {
            $this->LogsetType = $param["LogsetType"];
        }
    }
}
