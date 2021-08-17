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
 * List of APIs bound with the plugin
 *
 * @method integer getTotalCount() Obtain Number of APIs bound with the plugin
 * @method void setTotalCount(integer $TotalCount) Set Number of APIs bound with the plugin
 * @method array getAttachedApis() Obtain Information of the API bound with the plugin
 * @method void setAttachedApis(array $AttachedApis) Set Information of the API bound with the plugin
 */
class AttachedApiSummary extends AbstractModel
{
    /**
     * @var integer Number of APIs bound with the plugin
     */
    public $TotalCount;

    /**
     * @var array Information of the API bound with the plugin
     */
    public $AttachedApis;

    /**
     * @param integer $TotalCount Number of APIs bound with the plugin
     * @param array $AttachedApis Information of the API bound with the plugin
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

        if (array_key_exists("AttachedApis",$param) and $param["AttachedApis"] !== null) {
            $this->AttachedApis = [];
            foreach ($param["AttachedApis"] as $key => $value){
                $obj = new AttachedApiInfo();
                $obj->deserialize($value);
                array_push($this->AttachedApis, $obj);
            }
        }
    }
}
