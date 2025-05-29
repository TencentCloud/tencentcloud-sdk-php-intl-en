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
 * DeleteDoc request structure.
 *
 * @method array getDocBizIds() Obtain List of document business IDs.
 * @method void setDocBizIds(array $DocBizIds) Set List of document business IDs.
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 */
class DeleteDocRequest extends AbstractModel
{
    /**
     * @var array List of document business IDs.
     */
    public $DocBizIds;

    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @param array $DocBizIds List of document business IDs.
     * @param string $BotBizId Application ID.
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
        if (array_key_exists("DocBizIds",$param) and $param["DocBizIds"] !== null) {
            $this->DocBizIds = $param["DocBizIds"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }
    }
}
