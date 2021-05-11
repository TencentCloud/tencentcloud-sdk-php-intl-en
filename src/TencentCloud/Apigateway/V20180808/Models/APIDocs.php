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
 * API document list
 *
 * @method integer getTotalCount() Obtain Number of API documents
 * @method void setTotalCount(integer $TotalCount) Set Number of API documents
 * @method array getAPIDocSet() Obtain Basic information of API document
 * @method void setAPIDocSet(array $APIDocSet) Set Basic information of API document
 */
class APIDocs extends AbstractModel
{
    /**
     * @var integer Number of API documents
     */
    public $TotalCount;

    /**
     * @var array Basic information of API document
     */
    public $APIDocSet;

    /**
     * @param integer $TotalCount Number of API documents
     * @param array $APIDocSet Basic information of API document
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

        if (array_key_exists("APIDocSet",$param) and $param["APIDocSet"] !== null) {
            $this->APIDocSet = [];
            foreach ($param["APIDocSet"] as $key => $value){
                $obj = new APIDoc();
                $obj->deserialize($value);
                array_push($this->APIDocSet, $obj);
            }
        }
    }
}
