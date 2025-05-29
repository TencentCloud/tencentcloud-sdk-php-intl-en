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
 * Retrieval range configuration.
 *
 * @method string getCondition() Obtain Search criteria and/or.
 * @method void setCondition(string $Condition) Set Search criteria and/or.
 * @method array getApiVarAttrInfos() Obtain Custom variable and label relational data.
 * @method void setApiVarAttrInfos(array $ApiVarAttrInfos) Set Custom variable and label relational data.
 */
class SearchRange extends AbstractModel
{
    /**
     * @var string Search criteria and/or.
     */
    public $Condition;

    /**
     * @var array Custom variable and label relational data.
     */
    public $ApiVarAttrInfos;

    /**
     * @param string $Condition Search criteria and/or.
     * @param array $ApiVarAttrInfos Custom variable and label relational data.
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("ApiVarAttrInfos",$param) and $param["ApiVarAttrInfos"] !== null) {
            $this->ApiVarAttrInfos = [];
            foreach ($param["ApiVarAttrInfos"] as $key => $value){
                $obj = new ApiVarAttrInfo();
                $obj->deserialize($value);
                array_push($this->ApiVarAttrInfos, $obj);
            }
        }
    }
}
