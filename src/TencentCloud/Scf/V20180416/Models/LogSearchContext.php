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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log search context
 *
 * @method string getOffset() Obtain Offset.
 * @method void setOffset(string $Offset) Set Offset.
 * @method integer getLimit() Obtain Log record number
 * @method void setLimit(integer $Limit) Set Log record number
 * @method string getKeyword() Obtain Log keyword
 * @method void setKeyword(string $Keyword) Set Log keyword
 * @method string getType() Obtain Log type. The value is `Application` (default) or `Platform`.
 * @method void setType(string $Type) Set Log type. The value is `Application` (default) or `Platform`.
 */
class LogSearchContext extends AbstractModel
{
    /**
     * @var string Offset.
     */
    public $Offset;

    /**
     * @var integer Log record number
     */
    public $Limit;

    /**
     * @var string Log keyword
     */
    public $Keyword;

    /**
     * @var string Log type. The value is `Application` (default) or `Platform`.
     */
    public $Type;

    /**
     * @param string $Offset Offset.
     * @param integer $Limit Log record number
     * @param string $Keyword Log keyword
     * @param string $Type Log type. The value is `Application` (default) or `Platform`.
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

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
