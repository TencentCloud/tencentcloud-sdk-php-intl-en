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
 * ListReceivers request structure.
 *
 * @method integer getOffset() Obtain Offset, starting from 0. The value is an integer.
 * @method void setOffset(integer $Offset) Set Offset, starting from 0. The value is an integer.
 * @method integer getLimit() Obtain Number of records to query. The value is an integer not exceeding 100.
 * @method void setLimit(integer $Limit) Set Number of records to query. The value is an integer not exceeding 100.
 * @method integer getStatus() Obtain Group status (`1`: to be uploaded; `2` uploading; `3` uploaded). To query groups in all states, do not pass in this parameter.
 * @method void setStatus(integer $Status) Set Group status (`1`: to be uploaded; `2` uploading; `3` uploaded). To query groups in all states, do not pass in this parameter.
 * @method string getKeyWord() Obtain Group name keyword for fuzzy query
 * @method void setKeyWord(string $KeyWord) Set Group name keyword for fuzzy query
 */
class ListReceiversRequest extends AbstractModel
{
    /**
     * @var integer Offset, starting from 0. The value is an integer.
     */
    public $Offset;

    /**
     * @var integer Number of records to query. The value is an integer not exceeding 100.
     */
    public $Limit;

    /**
     * @var integer Group status (`1`: to be uploaded; `2` uploading; `3` uploaded). To query groups in all states, do not pass in this parameter.
     */
    public $Status;

    /**
     * @var string Group name keyword for fuzzy query
     */
    public $KeyWord;

    /**
     * @param integer $Offset Offset, starting from 0. The value is an integer.
     * @param integer $Limit Number of records to query. The value is an integer not exceeding 100.
     * @param integer $Status Group status (`1`: to be uploaded; `2` uploading; `3` uploaded). To query groups in all states, do not pass in this parameter.
     * @param string $KeyWord Group name keyword for fuzzy query
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }
    }
}
