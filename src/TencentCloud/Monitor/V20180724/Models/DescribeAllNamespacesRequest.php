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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllNamespaces request structure.
 *
 * @method string getSceneType() Obtain Filter by use case. Currently, the only valid value is `ST_ALARM` (alarm type).
 * @method void setSceneType(string $SceneType) Set Filter by use case. Currently, the only valid value is `ST_ALARM` (alarm type).
 * @method string getModule() Obtain Value fixed at "monitor"
 * @method void setModule(string $Module) Set Value fixed at "monitor"
 * @method array getMonitorTypes() Obtain Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
 * @method void setMonitorTypes(array $MonitorTypes) Set Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
 * @method array getIds() Obtain Filter by namespace ID. If this parameter is left empty, all will be queried
 * @method void setIds(array $Ids) Set Filter by namespace ID. If this parameter is left empty, all will be queried
 */
class DescribeAllNamespacesRequest extends AbstractModel
{
    /**
     * @var string Filter by use case. Currently, the only valid value is `ST_ALARM` (alarm type).
     */
    public $SceneType;

    /**
     * @var string Value fixed at "monitor"
     */
    public $Module;

    /**
     * @var array Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
     */
    public $MonitorTypes;

    /**
     * @var array Filter by namespace ID. If this parameter is left empty, all will be queried
     */
    public $Ids;

    /**
     * @param string $SceneType Filter by use case. Currently, the only valid value is `ST_ALARM` (alarm type).
     * @param string $Module Value fixed at "monitor"
     * @param array $MonitorTypes Filter by monitor type. Valid values: MT_QCE (Tencent Cloud service monitoring). If this parameter is left empty, all will be queried by default
     * @param array $Ids Filter by namespace ID. If this parameter is left empty, all will be queried
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
        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("MonitorTypes",$param) and $param["MonitorTypes"] !== null) {
            $this->MonitorTypes = $param["MonitorTypes"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
