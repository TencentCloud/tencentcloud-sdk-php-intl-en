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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Action parameters in the action group
 *
 * @method integer getTaskGroupActionOrder() Obtain Order of this action in the action group. The entire order starts from 1. If this parameter is left blank or set to an invalid value, the action whose parameters need to be modified in the template cannot be matched.
 * @method void setTaskGroupActionOrder(integer $TaskGroupActionOrder) Set Order of this action in the action group. The entire order starts from 1. If this parameter is left blank or set to an invalid value, the action whose parameters need to be modified in the template cannot be matched.
 * @method string getTaskGroupActionGeneralConfiguration() Obtain General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
 * @method void setTaskGroupActionGeneralConfiguration(string $TaskGroupActionGeneralConfiguration) Set General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
 * @method string getTaskGroupActionCustomConfiguration() Obtain Custom action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
 * @method void setTaskGroupActionCustomConfiguration(string $TaskGroupActionCustomConfiguration) Set Custom action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
 */
class TaskGroupActionConfig extends AbstractModel
{
    /**
     * @var integer Order of this action in the action group. The entire order starts from 1. If this parameter is left blank or set to an invalid value, the action whose parameters need to be modified in the template cannot be matched.
     */
    public $TaskGroupActionOrder;

    /**
     * @var string General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
     */
    public $TaskGroupActionGeneralConfiguration;

    /**
     * @var string Custom action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
     */
    public $TaskGroupActionCustomConfiguration;

    /**
     * @param integer $TaskGroupActionOrder Order of this action in the action group. The entire order starts from 1. If this parameter is left blank or set to an invalid value, the action whose parameters need to be modified in the template cannot be matched.
     * @param string $TaskGroupActionGeneralConfiguration General action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
     * @param string $TaskGroupActionCustomConfiguration Custom action parameters, which need to be passed in after JSON serialization. The parameters can be obtained by using the template details query API. If this field is left blank, action parameters in the template are used by default.
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
        if (array_key_exists("TaskGroupActionOrder",$param) and $param["TaskGroupActionOrder"] !== null) {
            $this->TaskGroupActionOrder = $param["TaskGroupActionOrder"];
        }

        if (array_key_exists("TaskGroupActionGeneralConfiguration",$param) and $param["TaskGroupActionGeneralConfiguration"] !== null) {
            $this->TaskGroupActionGeneralConfiguration = $param["TaskGroupActionGeneralConfiguration"];
        }

        if (array_key_exists("TaskGroupActionCustomConfiguration",$param) and $param["TaskGroupActionCustomConfiguration"] !== null) {
            $this->TaskGroupActionCustomConfiguration = $param["TaskGroupActionCustomConfiguration"];
        }
    }
}
