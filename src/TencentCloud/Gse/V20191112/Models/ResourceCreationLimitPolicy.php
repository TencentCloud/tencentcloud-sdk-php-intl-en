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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource creation policy
 *
 * @method integer getNewGameServerSessionsPerCreator() Obtain Creation quantity. Minimum value: 1. Default value: 2.
 * @method void setNewGameServerSessionsPerCreator(integer $NewGameServerSessionsPerCreator) Set Creation quantity. Minimum value: 1. Default value: 2.
 * @method integer getPolicyPeriodInMinutes() Obtain Unit time. Minimum value: 1. Default value: 3. Unit: minute.
 * @method void setPolicyPeriodInMinutes(integer $PolicyPeriodInMinutes) Set Unit time. Minimum value: 1. Default value: 3. Unit: minute.
 */
class ResourceCreationLimitPolicy extends AbstractModel
{
    /**
     * @var integer Creation quantity. Minimum value: 1. Default value: 2.
     */
    public $NewGameServerSessionsPerCreator;

    /**
     * @var integer Unit time. Minimum value: 1. Default value: 3. Unit: minute.
     */
    public $PolicyPeriodInMinutes;

    /**
     * @param integer $NewGameServerSessionsPerCreator Creation quantity. Minimum value: 1. Default value: 2.
     * @param integer $PolicyPeriodInMinutes Unit time. Minimum value: 1. Default value: 3. Unit: minute.
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
        if (array_key_exists("NewGameServerSessionsPerCreator",$param) and $param["NewGameServerSessionsPerCreator"] !== null) {
            $this->NewGameServerSessionsPerCreator = $param["NewGameServerSessionsPerCreator"];
        }

        if (array_key_exists("PolicyPeriodInMinutes",$param) and $param["PolicyPeriodInMinutes"] !== null) {
            $this->PolicyPeriodInMinutes = $param["PolicyPeriodInMinutes"];
        }
    }
}
