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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GroupQA request structure.
 *
 * @method string getBotBizId() Obtain Application ID
 * @method void setBotBizId(string $BotBizId) Set Application ID
 * @method array getQaBizIds() Obtain List of QaBizIDs.
 * @method void setQaBizIds(array $QaBizIds) Set List of QaBizIDs.
 * @method string getCateBizId() Obtain Group ID.
 * @method void setCateBizId(string $CateBizId) Set Group ID.
 */
class GroupQARequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $BotBizId;

    /**
     * @var array List of QaBizIDs.
     */
    public $QaBizIds;

    /**
     * @var string Group ID.
     */
    public $CateBizId;

    /**
     * @param string $BotBizId Application ID
     * @param array $QaBizIds List of QaBizIDs.
     * @param string $CateBizId Group ID.
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

        if (array_key_exists("QaBizIds",$param) and $param["QaBizIds"] !== null) {
            $this->QaBizIds = $param["QaBizIds"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }
    }
}
