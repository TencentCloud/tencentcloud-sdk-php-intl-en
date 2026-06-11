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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application protection allowlist attack type list
 *
 * @method string getAttackTypeName() Obtain Attack Type Name
 * @method void setAttackTypeName(string $AttackTypeName) Set Attack Type Name
 * @method integer getAttackTypeID() Obtain Attack Type ID
 * @method void setAttackTypeID(integer $AttackTypeID) Set Attack Type ID
 * @method string getSource() Obtain Feature type of the vulnerability, rasp: vulnerability defense, memshell_inject: memory shell injection
 * @method void setSource(string $Source) Set Feature type of the vulnerability, rasp: vulnerability defense, memshell_inject: memory shell injection
 */
class RaspAttackTypeListItem extends AbstractModel
{
    /**
     * @var string Attack Type Name
     */
    public $AttackTypeName;

    /**
     * @var integer Attack Type ID
     */
    public $AttackTypeID;

    /**
     * @var string Feature type of the vulnerability, rasp: vulnerability defense, memshell_inject: memory shell injection
     */
    public $Source;

    /**
     * @param string $AttackTypeName Attack Type Name
     * @param integer $AttackTypeID Attack Type ID
     * @param string $Source Feature type of the vulnerability, rasp: vulnerability defense, memshell_inject: memory shell injection
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
        if (array_key_exists("AttackTypeName",$param) and $param["AttackTypeName"] !== null) {
            $this->AttackTypeName = $param["AttackTypeName"];
        }

        if (array_key_exists("AttackTypeID",$param) and $param["AttackTypeID"] !== null) {
            $this->AttackTypeID = $param["AttackTypeID"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
