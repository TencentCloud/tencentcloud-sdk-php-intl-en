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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRelease request structure.
 *
 * @method string getBotBizId() Obtain Robot ID.
 * @method void setBotBizId(string $BotBizId) Set Robot ID.
 * @method string getDesc() Obtain Release description.
 * @method void setDesc(string $Desc) Set Release description.
 */
class CreateReleaseRequest extends AbstractModel
{
    /**
     * @var string Robot ID.
     */
    public $BotBizId;

    /**
     * @var string Release description.
     */
    public $Desc;

    /**
     * @param string $BotBizId Robot ID.
     * @param string $Desc Release description.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
