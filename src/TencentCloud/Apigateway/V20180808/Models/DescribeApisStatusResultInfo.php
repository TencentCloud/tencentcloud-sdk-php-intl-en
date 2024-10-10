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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API list status description
 *
 * @method integer getTotalCount() Obtain Number of eligible APIs.
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible APIs.
 * @method array getApiIdStatusSet() Obtain List of APIs
 * @method void setApiIdStatusSet(array $ApiIdStatusSet) Set List of APIs
 */
class DescribeApisStatusResultInfo extends AbstractModel
{
    /**
     * @var integer Number of eligible APIs.
     */
    public $TotalCount;

    /**
     * @var array List of APIs
     */
    public $ApiIdStatusSet;

    /**
     * @param integer $TotalCount Number of eligible APIs.
     * @param array $ApiIdStatusSet List of APIs
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ApiIdStatusSet",$param) and $param["ApiIdStatusSet"] !== null) {
            $this->ApiIdStatusSet = [];
            foreach ($param["ApiIdStatusSet"] as $key => $value){
                $obj = new DescribeApisStatusResultApiIdStatusSetInfo();
                $obj->deserialize($value);
                array_push($this->ApiIdStatusSet, $obj);
            }
        }
    }
}
