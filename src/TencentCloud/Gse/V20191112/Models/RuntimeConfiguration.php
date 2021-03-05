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
 * Runtime configuration
 *
 * @method integer getGameServerSessionActivationTimeoutSeconds() Obtain Game session timeout. Value range: 1-600. Unit: second.
 * @method void setGameServerSessionActivationTimeoutSeconds(integer $GameServerSessionActivationTimeoutSeconds) Set Game session timeout. Value range: 1-600. Unit: second.
 * @method integer getMaxConcurrentGameServerSessionActivations() Obtain Maximum number of game sessions. Value range: 1-2,147,483,647.
 * @method void setMaxConcurrentGameServerSessionActivations(integer $MaxConcurrentGameServerSessionActivations) Set Maximum number of game sessions. Value range: 1-2,147,483,647.
 * @method array getServerProcesses() Obtain Service process configuration. There must be at least one service configuration.
 * @method void setServerProcesses(array $ServerProcesses) Set Service process configuration. There must be at least one service configuration.
 */
class RuntimeConfiguration extends AbstractModel
{
    /**
     * @var integer Game session timeout. Value range: 1-600. Unit: second.
     */
    public $GameServerSessionActivationTimeoutSeconds;

    /**
     * @var integer Maximum number of game sessions. Value range: 1-2,147,483,647.
     */
    public $MaxConcurrentGameServerSessionActivations;

    /**
     * @var array Service process configuration. There must be at least one service configuration.
     */
    public $ServerProcesses;

    /**
     * @param integer $GameServerSessionActivationTimeoutSeconds Game session timeout. Value range: 1-600. Unit: second.
     * @param integer $MaxConcurrentGameServerSessionActivations Maximum number of game sessions. Value range: 1-2,147,483,647.
     * @param array $ServerProcesses Service process configuration. There must be at least one service configuration.
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
        if (array_key_exists("GameServerSessionActivationTimeoutSeconds",$param) and $param["GameServerSessionActivationTimeoutSeconds"] !== null) {
            $this->GameServerSessionActivationTimeoutSeconds = $param["GameServerSessionActivationTimeoutSeconds"];
        }

        if (array_key_exists("MaxConcurrentGameServerSessionActivations",$param) and $param["MaxConcurrentGameServerSessionActivations"] !== null) {
            $this->MaxConcurrentGameServerSessionActivations = $param["MaxConcurrentGameServerSessionActivations"];
        }

        if (array_key_exists("ServerProcesses",$param) and $param["ServerProcesses"] !== null) {
            $this->ServerProcesses = [];
            foreach ($param["ServerProcesses"] as $key => $value){
                $obj = new ServerProcesse();
                $obj->deserialize($value);
                array_push($this->ServerProcesses, $obj);
            }
        }
    }
}
