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
 * User/user group tag dimensions (independent structure in the user management domain, decoupled from common TagInfo, for use only by user/user group tag APIs)
 *
 * @method string getTagId() Obtain <p>Tag dimension ID</p>
 * @method void setTagId(string $TagId) Set <p>Tag dimension ID</p>
 * @method string getTagName() Obtain <p>Tag name, filled during queries, not passed when writing</p>
 * @method void setTagName(string $TagName) Set <p>Tag name, filled during queries, not passed when writing</p>
 * @method array getValues() Obtain <p>All tag values bound to this dimension</p>
 * @method void setValues(array $Values) Set <p>All tag values bound to this dimension</p>
 */
class UserTagInfo extends AbstractModel
{
    /**
     * @var string <p>Tag dimension ID</p>
     */
    public $TagId;

    /**
     * @var string <p>Tag name, filled during queries, not passed when writing</p>
     */
    public $TagName;

    /**
     * @var array <p>All tag values bound to this dimension</p>
     */
    public $Values;

    /**
     * @param string $TagId <p>Tag dimension ID</p>
     * @param string $TagName <p>Tag name, filled during queries, not passed when writing</p>
     * @param array $Values <p>All tag values bound to this dimension</p>
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
        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new TagValueInfo();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }
    }
}
