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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ForceQN request structure.
 *
 * @method integer getClientUin() Obtain Sub-account UIN
 * @method void setClientUin(integer $ClientUin) Set Sub-account UIN
 * @method integer getType() Obtain 0: Normal  2: Forced service suspension
 * @method void setType(integer $Type) Set 0: Normal  2: Forced service suspension
 */
class ForceQNRequest extends AbstractModel
{
    /**
     * @var integer Sub-account UIN
     */
    public $ClientUin;

    /**
     * @var integer 0: Normal  2: Forced service suspension
     */
    public $Type;

    /**
     * @param integer $ClientUin Sub-account UIN
     * @param integer $Type 0: Normal  2: Forced service suspension
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
