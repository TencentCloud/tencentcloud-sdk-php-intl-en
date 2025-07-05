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
 * ExportQAList request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method array getQaBizIds() Obtain Q&A business ID.
 * @method void setQaBizIds(array $QaBizIds) Set Q&A business ID.
 * @method QAQuery getFilters() Obtain Query parameter.
 * @method void setFilters(QAQuery $Filters) Set Query parameter.
 */
class ExportQAListRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var array Q&A business ID.
     */
    public $QaBizIds;

    /**
     * @var QAQuery Query parameter.
     */
    public $Filters;

    /**
     * @param string $BotBizId Application ID.
     * @param array $QaBizIds Q&A business ID.
     * @param QAQuery $Filters Query parameter.
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new QAQuery();
            $this->Filters->deserialize($param["Filters"]);
        }
    }
}
