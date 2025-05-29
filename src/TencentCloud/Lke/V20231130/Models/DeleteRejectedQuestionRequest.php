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
 * DeleteRejectedQuestion request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method array getRejectedBizIds() Obtain The unique ID of the data source for the rejected question.



 * @method void setRejectedBizIds(array $RejectedBizIds) Set The unique ID of the data source for the rejected question.
 */
class DeleteRejectedQuestionRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var array The unique ID of the data source for the rejected question.



     */
    public $RejectedBizIds;

    /**
     * @param string $BotBizId Application ID.
     * @param array $RejectedBizIds The unique ID of the data source for the rejected question.
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

        if (array_key_exists("RejectedBizIds",$param) and $param["RejectedBizIds"] !== null) {
            $this->RejectedBizIds = $param["RejectedBizIds"];
        }
    }
}
