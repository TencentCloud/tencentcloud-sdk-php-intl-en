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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Collection of modifiable tag fields (used in conjunction with update_mask)
 *
 * @method string getName() Obtain <p>Tag name.</p>
 * @method void setName(string $Name) Set <p>Tag name.</p>
 * @method array getTermModifyList() Obtain <p>List of incremental modifications to standard words (add/modify/delete)</p>
 * @method void setTermModifyList(array $TermModifyList) Set <p>List of incremental modifications to standard words (add/modify/delete)</p>
 */
class LabelModifyFields extends AbstractModel
{
    /**
     * @var string <p>Tag name.</p>
     */
    public $Name;

    /**
     * @var array <p>List of incremental modifications to standard words (add/modify/delete)</p>
     */
    public $TermModifyList;

    /**
     * @param string $Name <p>Tag name.</p>
     * @param array $TermModifyList <p>List of incremental modifications to standard words (add/modify/delete)</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TermModifyList",$param) and $param["TermModifyList"] !== null) {
            $this->TermModifyList = [];
            foreach ($param["TermModifyList"] as $key => $value){
                $obj = new LabelTermModifyItem();
                $obj->deserialize($value);
                array_push($this->TermModifyList, $obj);
            }
        }
    }
}
