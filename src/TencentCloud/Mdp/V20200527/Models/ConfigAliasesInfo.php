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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter configuration.
 *
 * @method string getParamName() Obtain parameter name.
 * @method void setParamName(string $ParamName) Set parameter name.
 * @method array getAliasValueList() Obtain Alias-value configuration.
 * @method void setAliasValueList(array $AliasValueList) Set Alias-value configuration.
 */
class ConfigAliasesInfo extends AbstractModel
{
    /**
     * @var string parameter name.
     */
    public $ParamName;

    /**
     * @var array Alias-value configuration.
     */
    public $AliasValueList;

    /**
     * @param string $ParamName parameter name.
     * @param array $AliasValueList Alias-value configuration.
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("AliasValueList",$param) and $param["AliasValueList"] !== null) {
            $this->AliasValueList = [];
            foreach ($param["AliasValueList"] as $key => $value){
                $obj = new AliasValueConf();
                $obj->deserialize($value);
                array_push($this->AliasValueList, $obj);
            }
        }
    }
}
