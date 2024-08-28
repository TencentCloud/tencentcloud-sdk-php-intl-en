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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyJavaMemShellPluginSwitch request structure.
 *
 * @method array getQuuids() Obtain Host QUUID array
 * @method void setQuuids(array $Quuids) Set Host QUUID array
 * @method integer getJavaShellStatus() Obtain Plugin target status. 0: off; 1: on
 * @method void setJavaShellStatus(integer $JavaShellStatus) Set Plugin target status. 0: off; 1: on
 */
class ModifyJavaMemShellPluginSwitchRequest extends AbstractModel
{
    /**
     * @var array Host QUUID array
     */
    public $Quuids;

    /**
     * @var integer Plugin target status. 0: off; 1: on
     */
    public $JavaShellStatus;

    /**
     * @param array $Quuids Host QUUID array
     * @param integer $JavaShellStatus Plugin target status. 0: off; 1: on
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
        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("JavaShellStatus",$param) and $param["JavaShellStatus"] !== null) {
            $this->JavaShellStatus = $param["JavaShellStatus"];
        }
    }
}
