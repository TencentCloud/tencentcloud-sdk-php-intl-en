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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReceiver request structure.
 *
 * @method string getReceiversName() Obtain Recipient group name
 * @method void setReceiversName(string $ReceiversName) Set Recipient group name
 * @method string getDesc() Obtain Recipient group description
 * @method void setDesc(string $Desc) Set Recipient group description
 */
class CreateReceiverRequest extends AbstractModel
{
    /**
     * @var string Recipient group name
     */
    public $ReceiversName;

    /**
     * @var string Recipient group description
     */
    public $Desc;

    /**
     * @param string $ReceiversName Recipient group name
     * @param string $Desc Recipient group description
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
        if (array_key_exists("ReceiversName",$param) and $param["ReceiversName"] !== null) {
            $this->ReceiversName = $param["ReceiversName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
