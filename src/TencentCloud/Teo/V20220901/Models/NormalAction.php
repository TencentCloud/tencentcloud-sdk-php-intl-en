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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Action of the normal type for the rule engine
 *
 * @method string getAction() Obtain Feature name. For feature name completion specifications, call the api [Query parameter settings of the rule engine](https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1) to view.
 * @method void setAction(string $Action) Set Feature name. For feature name completion specifications, call the api [Query parameter settings of the rule engine](https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1) to view.
 * @method array getParameters() Obtain Parameter.
 * @method void setParameters(array $Parameters) Set Parameter.
 */
class NormalAction extends AbstractModel
{
    /**
     * @var string Feature name. For feature name completion specifications, call the api [Query parameter settings of the rule engine](https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1) to view.
     */
    public $Action;

    /**
     * @var array Parameter.
     */
    public $Parameters;

    /**
     * @param string $Action Feature name. For feature name completion specifications, call the api [Query parameter settings of the rule engine](https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1) to view.
     * @param array $Parameters Parameter.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new RuleNormalActionParams();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
