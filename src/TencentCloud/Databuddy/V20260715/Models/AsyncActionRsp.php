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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Item-by-item result of a batch asynchronous operation
 *
 * @method array getActionResults() Obtain Result list of multiple action items
 * @method void setActionResults(array $ActionResults) Set Result list of multiple action items
 */
class AsyncActionRsp extends AbstractModel
{
    /**
     * @var array Result list of multiple action items
     */
    public $ActionResults;

    /**
     * @param array $ActionResults Result list of multiple action items
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
        if (array_key_exists("ActionResults",$param) and $param["ActionResults"] !== null) {
            $this->ActionResults = [];
            foreach ($param["ActionResults"] as $key => $value){
                $obj = new RunActionBrief();
                $obj->deserialize($value);
                array_push($this->ActionResults, $obj);
            }
        }
    }
}
