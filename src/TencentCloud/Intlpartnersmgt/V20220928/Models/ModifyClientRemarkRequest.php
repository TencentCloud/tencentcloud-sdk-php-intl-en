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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClientRemark request structure.
 *
 * @method string getClientUin() Obtain Customer UIN
 * @method void setClientUin(string $ClientUin) Set Customer UIN
 * @method string getRemark() Obtain New customer remarks
 * @method void setRemark(string $Remark) Set New customer remarks
 */
class ModifyClientRemarkRequest extends AbstractModel
{
    /**
     * @var string Customer UIN
     */
    public $ClientUin;

    /**
     * @var string New customer remarks
     */
    public $Remark;

    /**
     * @param string $ClientUin Customer UIN
     * @param string $Remark New customer remarks
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
