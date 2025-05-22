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
 * Monthly subscription configuration of a CLB instance
 *
 * @method string getRenewFlag() Obtain Reserved field.
 * @method void setRenewFlag(string $RenewFlag) Set Reserved field.
 * @method integer getPeriod() Obtain Reserved field.
 * @method void setPeriod(integer $Period) Set Reserved field.
 */
class LBChargePrepaid extends AbstractModel
{
    /**
     * @var string Reserved field.
     */
    public $RenewFlag;

    /**
     * @var integer Reserved field.
     */
    public $Period;

    /**
     * @param string $RenewFlag Reserved field.
     * @param integer $Period Reserved field.
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
        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
