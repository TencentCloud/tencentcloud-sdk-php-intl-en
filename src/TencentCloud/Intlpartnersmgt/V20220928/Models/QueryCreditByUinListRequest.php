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
 * QueryCreditByUinList request structure.
 *
 * @method array getUinList() Obtain List of user. Array length value: 1-50.
 * @method void setUinList(array $UinList) Set List of user. Array length value: 1-50.
 */
class QueryCreditByUinListRequest extends AbstractModel
{
    /**
     * @var array List of user. Array length value: 1-50.
     */
    public $UinList;

    /**
     * @param array $UinList List of user. Array length value: 1-50.
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
        if (array_key_exists("UinList",$param) and $param["UinList"] !== null) {
            $this->UinList = $param["UinList"];
        }
    }
}
