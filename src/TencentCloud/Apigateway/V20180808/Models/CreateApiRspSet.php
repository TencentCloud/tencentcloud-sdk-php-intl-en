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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the APIs created
 *
 * @method integer getTotalCount() Obtain Total number of APIs
 * @method void setTotalCount(integer $TotalCount) Set Total number of APIs
 * @method array getApiSet() Obtain Information of created APIs
 * @method void setApiSet(array $ApiSet) Set Information of created APIs
 */
class CreateApiRspSet extends AbstractModel
{
    /**
     * @var integer Total number of APIs
     */
    public $TotalCount;

    /**
     * @var array Information of created APIs
     */
    public $ApiSet;

    /**
     * @param integer $TotalCount Total number of APIs
     * @param array $ApiSet Information of created APIs
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

        if (array_key_exists("ApiSet",$param) and $param["ApiSet"] !== null) {
            $this->ApiSet = [];
            foreach ($param["ApiSet"] as $key => $value){
                $obj = new CreateApiRsp();
                $obj->deserialize($value);
                array_push($this->ApiSet, $obj);
            }
        }
    }
}
